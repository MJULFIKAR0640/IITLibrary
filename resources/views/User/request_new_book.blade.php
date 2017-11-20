@extends('layouts.app')

@section('title')
Manage-Book
@endsection
@section('content')
@include('nav.studentTeacherNav')
<div class="container">
 <h2 style="margin-bottom: 20px" class="d-none d-sm-block text-center">Request New Book</h2>

 <hr>

 <form action="{{route('storeRequestedBook')}}" method="POST">

  <div class="form-group">
    <label for="section">Section</label>
    <input type="text" class="form-control" id="section" name="section">
  </div>

  <div class="form-group">
    <label for="book name">Book's Name</label>
    <input type="text" class="form-control" id="book_name" name="book_name">
  </div>
  <div class="form-group">
    <label for="author">Author</label>
    <input type="text" class="form-control" id="author_name" name="author_name">
  </div>

  <div class="form-group">
    <label for="publication">Publication</label>
    <input type="text" class="form-control" id="publication" name="publication">
  </div>
  <div class="form-group">
    <label for="edition">Edition</label>
    <input type="number" class="form-control" id="edition" name="edition">
  </div>

  <input type="hidden" name="_token" value="{{ csrf_token() }}">


  <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
  
</form>
</div>
@endsection



