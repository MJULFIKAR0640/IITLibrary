@extends('layouts.blank')
@section('content')

</br>
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading"><h4><b>Sign Up</b></h4></div>

        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div style="margin-bottom: 15px" class="input-group">
              <span class="input-group-addon"></span>
              <input id="login-username" type="text" class="form-control" name="name" placeholder="Enter your name" required>       
            </div> 

            <div style="margin-bottom: 15px" class="input-group">
              <span class="input-group-addon"></span>
              <input id="login-username" type="email" class="form-control" name="email" placeholder="Enter your email" required>       
            </div> 

            <div style="margin-bottom: 15px" class="input-group" required>
              <span class="input-group-addon"></span>
              <select class="form-control" id="sel1" name="type">
                <option>Type of user</option>
                <option value="teacher">Teacher</option>
                <option value="student">Student</option>          
              </select>
            </div>

            <div style="margin-bottom: 15px" class="input-group">
              <span class="input-group-addon"></span>
              <input id="login-username" type="number" class="form-control" name="phone" placeholder="Phone Number" required>       
            </div>

            <div style="margin-bottom: 15px" class="input-group">
              <span class="input-group-addon"></span>
              <input id="login-username" type="password" class="form-control" name="password" placeholder="Type password" required>       
            </div> 

            <div style="margin-bottom: 15px" class="input-group">
              <span class="input-group-addon"></span>
              <input id="login-username" type="password" class="form-control" name="password_confirmation" placeholder="Re-type password" required>       
            </div> 

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div style="margin-top:10px" class="form-group">
              <div class="col-sm-12 controls">
                <center>
                  <button type="submit" class="btn btn-primary btn-block" name="submit" id="submit">Sign Up</button>
                   
                </center>
                
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
