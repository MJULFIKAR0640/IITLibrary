<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Remark;
use App\Issue;
use App\Reservation;
use Session;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Configuration;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Book =DB::table('books')->get();
        return view('Librarian.manage_book',compact('Book'));
    }
    public function borrow_book(Request $request, $id)
    {
        $Book =DB::table('books')->where('id', $id)->first();
        return view('User.borrow_book',compact('Book'));
    }

    public function reserve_request(Request $request, $id)
    {
        $book = Book::find($id);
        return view('User.reserve_request',compact('book'));
    }

    public function reserve(Request $request, $id)
    {
        $book=new Reservation();
        $book->book_id = $id;
        $book->user_id = Auth::user()->id;  
        $book->start_date=$request->start_date;
        $book->end_date=$request->end_date;
        $book->save();
        return redirect('/reserveBook');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Librarian.add_book');
    }

    public function book_configuration(Request $request)
    {
        $Configuration= Configuration::all()->first();
        if($Configuration){
            return view('Admin.book_configuration_update',compact('Configuration'));
        }
        else{
            return view('Admin.book_configuration');
        }
    }
    public function book_settings(Request $request)
    {
        $Configuration =new Configuration();
        $Configuration->days= $request->days;
        $Configuration->fine= $request->fine;
        $Configuration->save();
        Session::flash('success', 'Book configuration has successfully set !');
        return redirect()->route('homeAdmin');
    }

    public function book_configuration_update(Request $request){
        $Configuration= Configuration::all()->first();        
        $Configuration->days= $request->input('days');
        $Configuration->fine= $request->input('fine');
        $Configuration->save();
        Session::flash('success', 'Book configuration has edited successfully!');
        return redirect()->route('homeAdmin');
    }

    public function settings_update(){
        $Configuration= Configuration::all()->first();
        return view('Admin.book_configuration_update',compact('Configuration'));
    }

    public function requestBorrow(Request $request, $id)
    {
        $Issue =new Issue();
        $book= Book::where('id',$id)->first();
        $book->book_status='requested';
        $Issue->book_id= $id;
        $Issue->user_id= Auth::user()->id;
        $Issue->borrow_date= $request->borrow_date;
        $Issue->return_date= $request->return_date;
        $Issue->status= 'requested';
        $Issue->save();
        $book->save();
        Session::flash('success', 'Your request has submitted !');
        return redirect()->route('homeUser');
    }

    



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Book =new Book();
        $Book->book_id= $request->book_id;
        $Book->book_name= $request->book_name;
        $Book->author= $request->author_name;
        $Book->section= $request->section;
        $Book->publication= $request->publication;
        $Book->edition= $request->edition;
        $Book->book_status= 'available';
        $Book->save();

        Session::flash('success', 'Book added successfully !');

        return redirect()->route('add_book');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $book = Book::find($id)->first();
        return view('Librarian.edit_book',compact('book'));
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
        $Book = Book::find($id);
        $Book->book_id= $request->input('book_id');
        $Book->book_name= $request->input('book_name');
        $Book->author= $request->input('author_name');
        $Book->section= $request->input('section');
        $Book->publication= $request->input('publication');
        $Book->edition= $request->input('edition');
        $Book->save();

        Session::flash('success', 'Book edited successfully !');
        return redirect()->route('manageBook');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        session()->flash('message','Deleted successsfully');
        return redirect()->back()->with('success','Booke deleted');
    }

    public function remark()
    {
        $book=Issue::where('user_id', Auth::user()->id)->where('status','issued')->get();
        return view('User.remark_book',compact('book'));
    }

    public function saveRemark(Request $request, $id)
    {
        $book=Issue::where('book_id',$id)->where('status','issued')->first();
        $book_remark= new Remark();
        $book_remark->book_id = $id;
        $book_remark->remark = $request->remark;  
        $book_remark->user_id = Auth::user()->id;
        $book_remark->remark_status='requested';
        $book_remark->save();
        return redirect('/remark_book');
    }

    public function book_remark_approval(){
        $remark_result = Remark::where('remark_status','requested')->get();
        return view('Librarian.book_remark_approval',compact('remark_result'));
    }

    public function approveRemark($id){
        $result = Remark::where('id',$id)->first();
        $result->remark_status= 'approved';
        $result->save();
        return redirect('/book_remark_approval');
    }

    public function rejectRemark($id){
        $result = Remark::where('id',$id)->first();
        $result->delete();
        return redirect('/book_remark_approval');
    }
}
