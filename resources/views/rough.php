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
                <input type="text" class="form-control" id="usr" name="keyword">
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
              <th>Section</th>
              <th>Book</th>
              <th>Athor</th>
              <th>Publication</th>
              <th>Edition</th>            
              <th>Copy Available</th> 
              <th>Action</th>                        
            </tr>
          </thead>       
          <tbody>
            @foreach($result as $id => $output)
            <tr>
              <td>{{$id+1}}</td>
              <td>{{$output->section}}</td>
              <td>{{$output->book_name}}</td>
              <td>{{$output->author}}</td>
              <td>{{$output->publication}}</td>
              <td>{{$output->edition}}</td>
              <td>2</td>
              <td><a href="{{url('borrow_book/'.$output->id)}}" class="btn btn-primary">Borrow</a></td>
            </tr>

            @endforeach
          </tbody>
        </table>
      </div>
      @endif              
  </div>
</div>



@section('title')
Search-book
@endsection
@section('content')

<div class="container-fluid">
  <div class="modal-body row">
    <div class="col-md-7">
      <center><h3> Search book for reserve </h3></center>
      <hr>
      <div>
        <form action="{{route('searchBookforReserve')}}" method="POST">
          <div class="form-row">
            <div class="form-group col-md-9">
              <input type="text" class="form-control" id="usr" name="keyword">
            </div>
            <div class="form-group col-md-3">
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
      @if(count($result)>0)
      <div>
        <table class="table table-bordered table-responsive">
          <thead>
            <tr>
              <th>#</th>
              <th>Section</th>
              <th>Book</th>
              <th>Athor</th>
              <th>Publication</th>
              <th>Edition</th>            
              <th>Copy Available</th> 
              <th>Action</th>                        
            </tr>
          </thead>       
          <tbody>
            @foreach($result as $id => $output)
            <tr>
              <td>{{$id+1}}</td>
              <td>{{$output->section}}</td>
              <td>{{$output->book_name}}</td>
              <td>{{$output->author}}</td>
              <td>{{$output->publication}}</td>
              <td>{{$output->edition}}</td>
              <td>2</td>
              <td><a href="" class="btn btn-primary">Borrow</a></td>
            </tr>

            @endforeach
          </tbody>
        </table>
      </div>
      @endif           
    </div>
    <div class="col-md-5">
      <center><h3> Reserved Book List </h3></center> 
      <hr>            
      {{ csrf_field() }}
      <table class="table table-bordered table-responsive">
        <tr>
          <th>Book Name</th>
          <th>Athor</th>
          <th>Edition</th>
          <th>Action</th>
        </tr>
      </table>
    </div>
  </div>
</div>
@endsection


<td>
  @if($item->user->type == 'teacher')
  <p>Not Applicable</p>
  @endif
  @if($item->user->type == 'student')
  @if(date_diff(date_create($item->return_date), date_create(date("Y-m-d")))->format("%R%a") >= 0)
  {{$settings->fine*(date_diff(date_create($item->return_date), date_create(date("Y-m-d")))->format("%a")+1)}}
  @endif
  @endif
</td>