<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Issue;
use App\Book;
use Auth;
use App\Configuration;
use Carbon\Carbon;

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
        $result = Issue::where('status', 'issued')->get();
        $settings= Configuration::first();
        return view('Librarian.issued_book_list', compact('result','settings'));   
    }

    public function approveReturn($id)
    {
        $issue = Issue::find($id);
        $issue->status = 'available';
        $issue->save();
        return view('Librarian.issued_book_list');
    }

    public function decline($id)
    {
        $issue = Issue::find($id);
        $issue->status='available';
        session()->flash('message','Request rejected successsfully');
        return redirect()->back()->with('success','Request Rejected');
    }

    public function index()
    {
        $result = Issue::where('status', 'requested')->get();
        return view('Librarian.book_issue_approval', compact('result'));
    }

    public function acceptBorrowRequest($id)
    {
        $issue = Issue::find($id);
        $book = Book::where('id', $issue->book_id)->first();
        $book->book_status = 'issued';
        $issue->status = 'issued';
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
