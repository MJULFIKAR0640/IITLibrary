@extends('layouts.app')

@section('title')
	IIT-Library
@endsection

@section('content')

</br>
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading"><h4><b>Add User</b></h4></div>

        <div class="panel-body" style="margin: 10px">
          <form class="form-horizontal" action="{{route('userStore')}}" method="POST">
            {{ csrf_field() }}
            <div style="margin-bottom: 15px" class="form-group" required>
            	<label for="user type">User Type</label>
              <select class="form-control" id="Type" name="type">
                <option value="teacher">Teacher</option>
                <option value="librarian">Librarian</option>          
              </select>
            </div>

            <div class="form-group">
              <label for="user name">User's Name</label>
              <input type="text" class="form-control" id="user_name" name="user_name" required>
            </div>

            <div style="margin-bottom: 15px" class="form-group">
    		    <label for="user email">User's Email</label>
              <input id="user_email" type="email" class="form-control" name="email" required>       
            </div> 

            <div style="margin-bottom: 15px" class="form-group">
              
              <label for="user phone">User's Phone Number</label>
              <input id="user_phone_number" type="number" class="form-control" name="phone" required>       
            </div>

            <div style="margin-bottom: 15px" class="form-group">
              <label for="user password">Initial Password</label>
              <input id="initial_password" type="password" class="form-control" name="password" required>       
            </div> 

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <center>
              <button type="submit" class="btn btn-success btn-block" name="submit" id="submit" style="margin-bottom: 10px">Add User</button>
            </center>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
