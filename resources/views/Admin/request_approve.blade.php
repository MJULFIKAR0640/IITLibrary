@extends('layouts.app')

@section('title')
IIT-Library
@endsection

@section('content')


</br>
<div class="container-fluid">
  <div class="container-fluid">
    <h3 style="margin-bottom: 10px" class="d-none d-sm-block text-center"><b>User Requests</b></h3>
    <hr>
    <div>
      <table class="table table-bordered table-responsive">
        <thead>
          <tr>
            <th>#</th>
            <th>Requested user name</th>
            <th>Email</th>
            <th>Phone No</th>           
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($user as $id => $value)            
          <tr>
            <td>{{$id+1}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->phone}}</td>
            <td>

              <form action="{{url('/approveUser/'.$value->id)}}" method="GET">
                <input type="submit" value="Approve" class="btn btn-success">
              </form>
              <form action="{{url('/deleteUser/'.$value->id)}}" method="GET" onclick="return confirm('Are you sure to delete user request?')">
                {{ csrf_field() }}
                <input type="submit" value="Decline" class="btn btn-danger">
              </form>
            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
@endsection

