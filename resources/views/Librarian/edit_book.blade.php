@extends('layouts.app')

@section('title')
Manage-Book
@endsection
@section('content')

</br>
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading"><h4><b>Edit Book Information</b></h4></div>

        <div class="panel-body" style="margin: 10px">
          <form class="form-horizontal" action="{{route('updateBook',$book->id)}}" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
              <label for="book id">Book ID</label>
              <input type="text" class="form-control" id="book_id" name="book_id" value="{{$book->book_id}}" required>
            </div>

            <div class="form-group">
              <label for="book name">Book's Name</label>
              <input type="text" class="form-control" id="book_name" value="{{$book->book_name}}" name="book_name" required>
            </div>
            <div class="form-group">
              <label for="author">Author</label>
              <input type="text" class="form-control" id="author_name" name="author_name" value="{{$book->author}}" required>
            </div>
            <div class="form-group">
              <label for="section">Section</label>
              <input type="text" class="form-control" id="section" value="{{$book->section}}" name="section" required>
            </div>
            <div class="form-group">
              <label for="publication">Publication</label>
              <input type="text" class="form-control" id="publication" value="{{$book->publication}}" name="publication" required>
            </div>
            <div class="form-group">
              <label for="edition">Edition</label>
              <input type="number" class="form-control" id="edition" value="{{$book->edition}}" name="edition" required>
            </div>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <center>
              <button type="submit" class="btn btn-success btn-block" name="submit" id="submit" style="margin-bottom: 10px">Submit</button>
            </center>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection



