<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Book;
use App\User;
use App\Requestedbook;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class PagesController extends Controller
{
    public function home(Request $request){
        $result = null;
        $keyword = $request->input('keyword');
        if($request->input('optradio')=="book"){
            $result =DB::table('books')->where('book_name', 'like', '%' . $request->keyword . '%')->where('book_status','available')->orWhere('book_name', 'like', '%' . $request->keyword . '%')->where('book_status','requested')->get();
            return view('home', ['result' => $result]);
        }
        else if($request->input('optradio') == 'author'){
            $result =DB::table('books')->where('book_name', 'like', '%' . $request->keyword . '%')->where('book_status','available')->orWhere('book_name', 'like', '%' . $request->keyword . '%')->where('book_status','requested')->get();
            return view('home', ['result' => $result]);
        }
        else if($request->input('optradio')== 'section'){
            $result =DB::table('books')->where('book_name', 'like', '%' . $request->keyword . '%')->where('book_status','available')->orWhere('book_name', 'like', '%' . $request->keyword . '%')->where('book_status','requested')->get();
            return view('home', ['result' => $result]);
        }
        return view('home',['result' => $result]);
    }

    public function about(){
        return view('about');
    }


    public function homeAdmin(){
        $users = DB::table('users')->where('type', 'student')->get();
        $total_users = count($users);
        $books = DB::table('books')->get();
        $total_books = count($books);
        return view('Admin.homeAdmin', compact('users', 'total_users', 'books', 'total_books'));
    }

    public function add_user(){
        return view('Admin.add_user');
    }
    public function requestApproval(){
        $user = User::where('type','student')->where('status','0')->get();
        return view('Admin.request_approve',compact('user'));
    }

    public function homeLibrarian(Request $request){
        $result = null;
        $keyword = $request->input('keyword');

        if($request->input('optradio')=="book"){
            $result =DB::table('books')->where('book_name', 'like', '%' . $request->keyword . '%')->get();
            return view('Librarian.homeLibrarian', ['result' => $result]);
        }
        else if($request->input('optradio') == 'author'){
            $result =DB::table('books')->where('author', 'like', '%' . $request->keyword . '%')->get();
            return view('Librarian.homeLibrarian', ['result' => $result]);
        }
        else if($request->input('optradio')== 'section'){
            $result =DB::table('books')->where('section', 'like', '%' . $request->keyword . '%')->get();
            return view('Librarian.homeLibrarian', ['result' => $result]);
        }
        return view('Librarian.homeLibrarian',['result' => $result]);
    }

    public function account_approval(){
        return view('Librarian.account_approval');
    }
    public function book_issue_approval(){
        return view('Librarian.book_issue_approval');
    }

    public function book_return_approval(){
        return view('Librarian.book_return_approval');
    }
    public function issued_book_list(){
        return view('Librarian.issued_book_list');
    }
    public function book_search(){
        return view('Librarian.book_search');
    }

    public function homeUser(Request $request){
        $result = null;
        $keyword = $request->input('keyword');
        if($request->input('optradio')=="book"){
            $result =DB::table('books')->where('book_name', 'like', '%' . $request->keyword . '%')->where('book_status','available')->orWhere('book_name', 'like', '%' . $request->keyword . '%')->where('book_status','requested')->get();
            return view('User.homeUser', ['result' => $result]);
        }
        else if($request->input('optradio') == 'author'){
            $result =DB::table('books')->where('book_name', 'like', '%' . $request->keyword . '%')->where('book_status','available')->orWhere('book_name', 'like', '%' . $request->keyword . '%')->where('book_status','requested')->get();
            return view('User.homeUser', ['result' => $result]);
        }
        else if($request->input('optradio')== 'section'){
            $result =DB::table('books')->where('book_name', 'like', '%' . $request->keyword . '%')->where('book_status','available')->orWhere('book_name', 'like', '%' . $request->keyword . '%')->where('book_status','requested')->get();
            return view('User.homeUser', ['result' => $result]);
        }
        return view('User.homeUser',['result' => $result]);
    }

    public function searchForReserve(Request $request){
        $result = null;
        $keyword = $request->input('keyword');
        if($request->input('optradio')=="book"){
            $result =DB::table('books')->where('book_name', 'like', '%' . $request->keyword . '%')->where('book_status','issued')->get();
            return view('User.reserve_book', ['result' => $result]);
        }
        else if($request->input('optradio') == 'author'){
            $result =DB::table('books')->where('author', 'like', '%' . $request->keyword . '%')->where('book_status','issued')->get();
            return view('User.reserve_book', ['result' => $result]);
        }
        else if($request->input('optradio')== 'section'){
            $result =DB::table('books')->where('section', 'like', '%' . $request->keyword . '%')->where('book_status','issued')->get();
            return view('User.reserve_book', ['result' => $result]);
        }
        return view('User.reserve_book',['result' => $result]);
    }


    public function request_new_book(){
        return view('User.request_new_book');
    }
    public function borrow_book(){
        return view('User.borrow_book');
    }
    public function extend_time(){
        return view('User.extend_time');
    }
}

