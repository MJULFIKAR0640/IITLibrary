@extends('layouts.blank')
@section('title')
IIT-Library
@endsection
@section('content')

<div class="container-fluid">
  <div class="container-fluid">
    <div class="row">
      <h2 style="margin-bottom: 20px" class="d-none d-sm-block text-center">Serach Book</h2>
      <hr>

      <main class="col-sm-12" role="main">

        <div class="jumbotron">
          <form action="{{route('bookSearchByGuest')}}" method="GET">
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
      </div>
      <div class="modal fade" id="borrow" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="container">    
              <div class="panel-title" style="margin-top: 30px"><b>How many days you want to keep this book?</b>
              </div>

            </div>    
            <div style="padding-top:25px" class="panel-body" >
              <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12">
              </div>
              <form id="loginform" class="form-horizontal" role="form">
                <div style="margin-bottom: 25px" class="input-group">
                  <span class="input-group-addon"></span>
                  <select class="form-control" id="sel1" placeholder="password">
                    <option>Days</option>
                    <option>1 day</option>
                    <option>2 days</option>
                    <option>3 days</option>
                    <option>4 days</option>
                    <option>5 days</option>
                    <option>6 days</option>   
                    <option>7 days</option>        
                  </select>
                </div>
                <div style="margin-top:10px" class="form-group">
                  <div class="col-sm-12 controls">
                    <a id="btn-login" href="#" class="btn btn-success btn-block" margin: 0 auto;" >Submit</a>
                  </div>
                  <br>
                  <br>
                  <br>
                </div>
              </form>     
            </div>                     
          </div>  
        </div>
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
              <td><a href="{{route('login') }}"><button class="btn btn-primary">Borrow</button></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      @endif
    </main>
  </div>
</div>
@endsection

