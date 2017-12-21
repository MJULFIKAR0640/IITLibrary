@extends('layouts.app')
@section('title')
Search-book
@endsection
@section('content')

</br>
<div class="container-fluid">
  <div class="container-fluid">
    <div class="row">
      <h2 style="margin-bottom: 20px" class="d-none d-sm-block text-center">Serach Book</h2>
      <hr>
      <main class="col-sm-12" role="main">
        <div class="jumbotron">

          <form action="{{route('searchBookByUser')}}" method="POST">
            <div class="form-row">
              <div class="form-group col-md-9">
                <input type="text" class="form-control" id="usr" name="keyword" required>
              </div>

              <div class="form-group col-md-2">
                <button type="submit" class="btn btn-success">Search Book</button>
              </div>

              <div class="container-fluid">
                <div class="radio"></div>
                <label class="radio-inline"><input type="radio" checked="" value="book" name="optradio">Search by Book Name</label>
                <label class="radio-inline"><input type="radio" value="author" name="optradio">Search by Author's Name</label>
                <label class="radio-inline"><input type="radio" value="section" name="optradio">Search by Section</label>
              </div>

              <input type="hidden" name="_token" value="{{ csrf_token() }}">

            </div>
          </form>
        </div>
      </main>
      </div>
      @if(count($result)>0)
      <div>
        <table class="table table-bordered table-responsive">
          <thead>
            <tr>
              <th>#</th>
              <th>Book Id</th>
              <th>Section</th>
              <th>Book</th>
              <th>Athor</th>
              <th>Publication</th>
              <th>Edition</th>            
              <th>Action</th>                        
            </tr>
          </thead>       
          <tbody>
            @foreach($result as $id => $output)
            <tr>
              <td>{{$id+1}}</td>
              <td>{{$output->book_id}}</td>
              <td>{{$output->section}}</td>
              <td>{{$output->book_name}}</td>
              <td>{{$output->author}}</td>
              <td>{{$output->publication}}</td>
              <td>{{$output->edition}}</td>
              <td><a href="{{url('borrow_book/'.$output->id)}}" class="btn btn-primary">Borrow</a></td>
            </tr>

            @endforeach
          </tbody>
        </table>
      </div>
      @endif              
  </div>
</div>
@endsection