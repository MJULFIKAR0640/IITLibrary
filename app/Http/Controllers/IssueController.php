<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Issue;
use App\Book;
use Auth;
use App\Configuration;
use Carbon\Carbon;
use App\Reservation;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function borrowed_list()
    {
        $result = Issue::where('user_id',Auth::user()->id)->get();
        return view('User.borrowed_book_list', compact('result'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function extend_time()
    {
        $result = Issue::where('status', 'issued')->where('extend_date', null)->get();
        return view('User.extend_time', compact('result'));
    }

    public function issued_list()
    {
        $reserves = Reservation::all();
        foreach ($reserves as $key => $reserve) {
            $issue = Issue::where('book_id', $reserve->book_id)->first();
            if(count($issue)>0){
                if($issue->status == 'available' && $reserve->start_date <= Carbon::today()->toDateString() && $reserve->end_date >= Carbon::today()->toDateString() ){
                    $issue->user_id = $reserve->user_id;
                    $issue->borrow_date = Carbon::today()->toDateString();
                    $issue->return_date = Carbon::today()->addDays(3)->toDateString();
                    $issue->status = 'requested';
                    $issue->save();
                    /*email to user*/
                    Reservation::destroy($reserve->id);
                }
            }
        }

        $result = Issue::where('status', 'issued')->get();
        $settings= Configuration::first();
        return view('Librarian.issued_book_list', compact('result','settings'));   
    }

    public function approveReturn($id)
    {
        $issue = Issue::find($id);
        $book = Book::where('id', $issue->book->id)->first();
        $book->book_status = 'available';
        $issue->status = 'available';
        $issue->save();
        $book->save();
        $notification = array(
                    'message' => 'Priority Value Updated successfully. See the recommended jobs',
                    'alert-type' => 'success'
                );
        return redirect('/issued_book_list')->with($notification);
    }

    

    public function book_issue_approval()
    {
        $result = Issue::where('status', 'requested')->get();
        return view('Librarian.book_issue_approval', compact('result'));
    }

    public function acceptBorrowRequest($id)
    {
        $issue = Issue::find($id);
        $book = Book::where('id', $issue->book->id)->first();
        $book->book_status = 'issued';
        $issue->status = 'issued';
        $issue->save();
        $book->save();
        return redirect('/book_issue_approval');
    }

    public function rejectBorrowRequest($id)
    {
        $issue = Issue::find($id);
        $book = Book::where('id', $issue->book->id)->first();
        $book->book_status = 'available';
        $issue->status = 'available';
        $issue->save();
        $book->save();
        return redirect('/book_issue_approval');
    }


    public function requestExtraTime(Request $request)
    {
        $issue = Issue::where('book_id', $request->id)->first();
        $issue->extend_date = $request->extend_days;
        $issue->save();
        return redirect('/extend_time');
    }

    public function time_extension_approval(){

        $result = Issue::whereNotNull('extend_date')->get();
        return view('Librarian.time_extension_approval',compact('result'));
    }

    public function acceptExtensionRequest($id)
    {

        $issue = Issue::find($id);
        $dt = Carbon::parse($issue->return_date);
        $issue->return_date = $dt->addDays($issue->extend_date);
        $issue->extend_date = null;
        $issue->save();
        $result = Issue::whereNotNull('extend_date')->get();
        return view('Librarian.time_extension_approval',compact('result'));
    }

    public function rejectExtensionRequest($id)
    {
        $issue = Issue::find($id);
        $issue->extend_date = null; 
        $issue->save();
        $result = Issue::whereNotNull('extend_date')->get();
        return view('Librarian.time_extension_approval',compact('result'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
