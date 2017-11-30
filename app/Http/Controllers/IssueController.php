<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Issue;
use Auth;
use App\Configuration;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $result = Issue::where('status', 'requested')->get();
        return view('Librarian.book_issue_approval', compact('result'));
    }

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
    public function create()
    {
        $result = Issue::where('status', 'requested')->get();
        return view('Librarian.book_issue_approval', compact('result'));
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
        $issue->delete();
        session()->flash('message','Request rejected successsfully');
        return redirect()->back()->with('success','Request Rejected');
    }

    public function acceptBorrowRequest($id)
    {
        $issue = Issue::find($id);
        $issue->status = 'issued';
        $issue->save();
        return view('Librarian.book_issue_approval');
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
