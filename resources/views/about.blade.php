@extends('layouts.app')

@section('title')
	About IIT-Library
@endsection
 
@section('content')

</br>

	<div class="container">
		<p>this is about page....some content will be added to this page later.</p>
	</div>
	<div class="modal fade" id="signIn" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true" style="display: none;">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="container">    
            <div class="panel-title" style="margin-top: 30px"><b>Sign In</b>
            </div>
            <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a>
            </div>
          </div>    
          <div style="padding-top:25px" class="panel-body" >
            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12">
            </div>
            <form id="loginform" class="form-horizontal" role="form">
             <div style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"></span>
              <select class="form-control" id="sel1" placeholder="password">
                <option>Type of user</option>
                <option>Teacher</option>
                <option>Student</option>
                <option>Librarian</option>          
              </select>
            </div>
            <div style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">       
            </div>                         
            <div style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
            </div>

            <div class="input-group">
              <div class="checkbox">
                <label>
                  <input id="login-remember" type="checkbox" name="remember" value="1""> Remember me
                </label>
              </div>
            </div>
            <div style="margin-top:10px" class="form-group">
              <div class="col-sm-12 controls">
                <a id="btn-login" href="#" class="btn btn-success btn-block" margin: 0 auto;" >Login</a>
              </div>
              <br>
              <br>
              <br>


              <div class="text-center">
                <a href="https://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
              </div>

            </div>
          </form>     
        </div>                     
      </div>  
    </div>
  </div>


  <div class="modal fade" id="signUp" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="container">    
          <div class="panel-title" style="margin-top: 30px"><b>Sign Up</b>
          </div>
        </div>  


        <div style="padding-top:25px" class="panel-body" >
          <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12">
          </div>
          <form id="loginform" class="form-horizontal" role="form">
            <div style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"></span>
              <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Enter your name">       
            </div> 

            <div style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"></span>
              <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Enter your email">       
            </div> 


            <div style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"></span>
              <select class="form-control" id="sel1" placeholder="password">
                <option>Type of user</option>
                <option>Teacher</option>
                <option>Student</option>
                <option>Librarian</option>          
              </select>
            </div>

            <div style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"></span>
              <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Type password">       
            </div> 

            <div style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"></span>
              <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Re-type password">       
            </div> 


            <div style="margin-top:10px" class="form-group">
              <div class="col-sm-12 controls">
                <a id="btn-login" href="#" class="btn btn-success btn-block" margin: 0 auto;" >Sign Up</a>
              </div>
            </div>
          </form>     
        </div>  
      </div>  
    </div>
  </div>

@endsection