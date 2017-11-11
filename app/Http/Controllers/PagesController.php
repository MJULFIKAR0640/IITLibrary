<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Book;
use App\Requestedbook;

class PagesController extends Controller
{
    public function home()
    {
    	return view('pages/home');
    }

    public function about()
    {
    	return view('pages/about');
    }

    public function manage_book()
    {
    	return view('pages/manage_book');
    }

    public function time_extension_approval()
    {
    	return view('pages/time_extension_approval');
    }

    public function request_new_book()
    {
    	return view('pages/request_new_book');
    }

    public function return_or_remark_book()

    {
    	return view('pages/return_or_remark_book');
    }

    public function remark_book()
    {
    	return view('pages/remark_book');
    }

    public function borrow_book()
    {
        return view('pages/borrow_book');
    }

    public function extend_time()
    {
        return view('pages/extend_time');
    }

    public function account_approval()
    {
        return view('pages/account_approval');
    }

    public function book_issue_approval()
    {
        return view('pages/book_issue_approval');
    }

    public function book_remark_approval()
    {
        return view('pages/book_remark_approval');
    }

    public function book_return_approval()
    {
        return view('pages/book_return_approval');
    }

    public function issued_book_list()
    {
        return view('pages/issued_book_list');
    }

    public function new_book_request()
    {

        $Requestedbook =DB::table('requestedbooks')->get()          ;
        return view('pages/new_book_request',compact('Requestedbook'));





    }

    public function add_book()
    {
        return view('pages/add_book');
    }

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

        return redirect('/add_book')->with('message', 'Book Added!');
    }

    public function request(Request $req)
    {
        $Requestedbook =new Requestedbook();

        $Requestedbook->section= $req->section;
        $Requestedbook->book_name= $req->book_name;
        $Requestedbook->author= $req->author_name;
        $Requestedbook->publication= $req->publication;
        $Requestedbook->edition= $req->edition;
        $Requestedbook->save();

        return redirect('/request_new_book')->with('message', 'Request Submitted!');
    }


}
