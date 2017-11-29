@extends('layouts.app')
@section('title')
	IIT-Library
@endsection
@section('content')

</br>
  <div class="container-fluid">
    <h3 style="margin-bottom: 10px" class="d-none d-sm-block text-center"><b>Delete User</b></h3>
    <hr>
      <div>
        <table class="table table-bordered table-responsive">
          <thead>
            <tr>
              <th>#</th>
              <th>Use's Name</th>
              <th>User type</th>
              <th>Email</th>           
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($User as $id => $value)            
            <tr>
              <td>{{$id+1}}</td>
              <td>{{$value->name}}</td>
              <td>{{$value->type}}</td>            
              <td>{{$value->email}}</td>
              <td>
                <form action="{{url('/deleteUser/'.$value->id)}}" method="GET" onclick="return confirm('Are you sure to delete?')">
                  {{ csrf_field() }}
                  <input type="submit" value="Delete" class="btn btn-danger">
                </form>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
  </div>
@endsection



