<div class="modal fade" id="signIn" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">    
            <div class="panel-title" style="margin-top: 30px"><b>Sign In</b>
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
                <option>Admin</option>          
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
                  <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                </label>
              </div>
            </div>
            <div style="margin-top:10px" class="form-group">
              <div class="col-sm-12 controls">
                <a id="btn-login" href="#" class="btn btn-success btn-block">Login</a>
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

<<<<<<< HEAD

          <form action="/signup" method="POST" id="signUpform" class="form-horizontal" role="form">
            <div style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"></span>
              <input id="login-username" type="text" class="form-control" name="name" placeholder="Enter your name" required>       
=======
          <!-- {{ Form::open(array('url' => 'register', 'method' => 'post')) }} -->

          <form action="{{ route('user_register') }}" method="post" id="signUpform" class="form-horizontal" role="form">
            <div style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"></span>
              <input id="login-username" type="text" class="form-control" name="name" placeholder="Enter your name">       
>>>>>>> master
            </div> 

            <div style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"></span>
<<<<<<< HEAD
              <input id="login-username" type="email" class="form-control" name="email" placeholder="Enter your email" required>       
            </div> 

            <div style="margin-bottom: 25px" class="input-group" required>
=======
              <input id="login-username" type="email" class="form-control" name="email" placeholder="Enter your email">       
            </div> 

            <div style="margin-bottom: 25px" class="input-group">
>>>>>>> master
              <span class="input-group-addon"></span>
              <select class="form-control" id="sel1" name="type">
                <option>Type of user</option>
                <option value="teacher">Teacher</option>
                <option value="student">Student</option>          
              </select>
            </div>

            <div style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"></span>
<<<<<<< HEAD
              <input id="login-username" type="number" class="form-control" name="phone" placeholder="Phone Number" required>       
=======
              <input id="login-username" type="number" class="form-control" name="phone" placeholder="Phone Number">       
>>>>>>> master
            </div>

            <div style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"></span>
<<<<<<< HEAD
              <input id="login-username" type="password" class="form-control" name="password" placeholder="Type password" required>       
=======
              <input id="login-username" type="password" class="form-control" name="password" placeholder="Type password">       
>>>>>>> master
            </div> 

            <div style="margin-bottom: 25px" class="input-group">
              <span class="input-group-addon"></span>
<<<<<<< HEAD
              <input id="login-username" type="password" class="form-control" name="confirm-password" placeholder="Re-type password" required>       
=======
              <input id="login-username" type="password" class="form-control" name="confirm-password" placeholder="Re-type password">       
>>>>>>> master
            </div> 

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div style="margin-top:10px" class="form-group">
              <div class="col-sm-12 controls">
                <button type="submit" class="btn btn-success btn-block" name="submit" id="submit">Sign Up</button>
              </div>
            </div>
          </form> 
          <!-- {{ Form::close() }}     -->
        </div>  
      </div>  
    </div>
  </div>