<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Book;
use App\Requestedbook;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class PagesController extends Controller
{

    public function home()
    {
    	return view('home');
    }

    public function homeAdmin()
    {
        return view('Admin.homeAdmin');
    }

    public function homeLibrarian()
    {
        return view('Librarian.homeLibrarian');
    }

    public function homeStudent()
    {
        return view('Student.homeStudent');
    }

    public function homeTeacher()
    {
        return view('Teacher.homeTeacher');
    }

    public function homeUser(Request $request)
    {

            $result = null;

            $keyword = $request->input('keyword');

            if($request->input('optradio')=="book"){
                $result =DB::table('books')->where('book_name',$request->keyword)->get();
                dd($result);
                return view('User.homeUser', ['result' => $result]);
            }

            else if($request->input('optradio') == 'author'){
                $result =DB::table('books')->where('author',$request->keyword)->get();
                dd($result);
                return view('User.homeUser', ['result' => $result]);
            }

            else if($request->input('optradio')== 'section'){
                $result =DB::table('books')->where('section',$request->keyword)->get();
                dd($result);
                return view('User.homeUser', ['result' => $result]);
            }

        return view('User.homeUser',['result' => $result]);
    }


    public function about()
    {
    	return view('about');
    }

    public function manage_book()
    {
    	return view('Librarian.manage_book');
    }

    public function time_extension_approval()
    {
    	return view('Librarian.time_extension_approval');
    }




    public function request_new_book()
    {
    	return view('User.request_new_book');
    }

    public function return_or_remark_book()

    {
    	return view('User.return_or_remark_book');
    }

    public function remark_book()
    {
    	return view('User.remark_book');
    }

    public function reserve_book()
    {
        return view('User.reserve_book');
    }

    public function borrow_book()
    {
        return view('User.borrow_book');
    }

    public function extend_time()
    {
        return view('User.extend_time');
    }


    public function account_approval()
    {
        return view('Librarian.account_approval');
    }

    public function book_issue_approval()
    {
        return view('Librarian.book_issue_approval');
    }

    public function book_remark_approval()
    {
        return view('Librarian.book_remark_approval');
    }

    public function book_return_approval()
    {
        return view('Librarian.book_return_approval');
    }

    public function issued_book_list()
    {
        return view('Librarian.issued_book_list');
    }

    public function book_search()
    {
        return view('Librarian.book_search');
    }

    public function new_book_request()
    {
        $Requestedbook =DB::table('requestedbooks')->get()          ;
        return view('Librarian.new_book_request',compact('Requestedbook'));
    }

}
