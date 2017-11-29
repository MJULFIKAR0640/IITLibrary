<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Issue;
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Librarian.add_book');
    }

    public function book_settings(Request $request)
    {
        $Configuration =new Configuration();
        $Configuration->days= $request->days;
        $Configuration->fine= $request->fine;
        $Configuration->save();
        Session::flash('success', 'Book configuration has successfully set !');
        return redirect()->route('book_settings');
    }

    public function requestBorrow(Request $request, $id)
    {
        $Issue =new Issue();
        $Issue->book_id= $id;
        $Issue->user_id= Auth::user()->id;
        $Issue->borrow_date= $request->borrow_date;
        $Issue->return_date= $request->return_date;
        $Issue->status= 'requested';
        $Issue->save();
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
}
