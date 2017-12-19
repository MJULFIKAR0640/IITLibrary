<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requestedbook;
use Auth;

class RequestedBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function book_request(){
        $Requestedbook = Requestedbook::all();
        return view('new_book_request',compact('Requestedbook'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('User.request_new_book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Requestedbook =new Requestedbook();

        $Requestedbook->section= $request->section;
        $Requestedbook->book_name= $request->book_name;
        $Requestedbook->author= $request->author_name;
        $Requestedbook->publication= $request->publication;
        $Requestedbook->edition= $request->edition;
        $Requestedbook->user_id= Auth::user()->id;
        $Requestedbook->save();

        return redirect()->route('requestBook')->with('message', 'Book Added!');
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
