<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use DB;

class SearchController extends Controller
{
    public function search(Request $request)
    {
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
    }
}
