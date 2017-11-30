@extends('layouts.app')

@section('title')
Search-book
@endsection
@section('content')
@include('nav.studentTeacherNav')

</br>
<div class="container-fluid">
  <div class="container-fluid">
    <div class="row">
      <h2 style="margin-bottom: 20px" class="d-none d-sm-block text-center">Serach Book</h2>
      <hr>
      <main class="col-sm-12" role="main">
        <div class="jumbotron">
          <form action="{{route('searchbook')}}" method="POST">
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
                    <a id="btn-login" href="#" class="btn btn-success btn-block" margin: 0 auto;>Submit</a>
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

          
        @foreach ($result as $data =>$value)           
          <tr>
            <td>1</td>
            <td>{{$value->section}}</td>
            <td>{{$value->book_name}}</td>            
            <td>{{$value->author}}</td>
            <th>{{$value->publication}}</th>
            <th>{{$value->edition}}</th> 
            <th>6</th>
            <td>
                <button class="btn btn-primary" data-toggle="modal" data-target="#borrow">Borrow</button>
            </td>
            <!-- <th>{{$value->publication}}</th> --><!-- here i need to work for actual value -->
                       
          </tr>
        @endforeach


        </tbody>
      </table>
    </div>
    </main>
  </div>
</div>
@endsection





 @if(Auth::user()->type =='admin')
          <script>window.location = "/homeAdmin";</script>

        @elseif(Auth::user()->type =='librarian')
          <script>window.location = "/homeLibrarian";</script>

        @elseif(Auth::user()->type ==('student'|| 'teacher'))
          <script>window.location = "/homeUser";</script>

<<<<<<< HEAD
        @endif




        if(Auth::user()->type ==('student'|| 'teacher')){
            return $this->homeUser($request);
        }
        elseif(Auth::user()->type == 'admin'){
             return $this->homeAdmin($request);
        }
        elseif(Auth::user()->type == 'librarian'){
             return $this->homeLibrarian($request);        }
        else{
            return view('home');    
        }
        
=======
        @endif
>>>>>>> master


@foreach ($Book as $id => $value)            
<tr>
    <td>{{$id+1}}</td>
    <td>{{$value->book_id}}</td>
    <td>{{$value->book_name}}</td>            
    <td>{{$value->author}}</td>
    <td>{{$value->publication}}</td>
    <td>{{$value->edition}}</td>
    <td>

        <a href="{{route('editBook',$value->id)}}"><button class="btn btn-success">Approve</button></a>
        <form action="{{('/manageBook/'.$value->id)}}" method="GET" onclick="return confirm('Are you sure to delete?')">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type="submit" value="Decline" class="btn btn-danger"> 
        </form>
    </td>
</tr>
@endforeach



{{$settings->fine*(date_diff(date_create($item->return_date), date_create(date("Y-m-d")))->format("%a")-1)}}