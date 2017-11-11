 <ul class="nav navbar-nav">
  <li><a href="#">Home</a></li>
  <li><a href="#">About</a></li>
  <li><a href="#">Borrow Book</a></li>
  <li><a href="#">Return Book</a></li>
  <li><a href="#">Extend Time</a></li>
  <li><a href="#">Book Remark</a></li>
  <li><a href="#">Request Book</a></li>
  <li><a href="#">Account Approval</a></li>
  <li><a href="#">Book Requests</a></li>
  <li><a href="#">Add Book</a></li>
  <li id="student_info" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Approve<span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="studentinfo_upload.php">Book Borrow</a></li>
      <li><a href="studentinfo_update.php">Return Book</a></li>
      <li><a href="book_remark.php">Book Remark</a></li>
      <li><a href="studentinfo_delete.php">Time Extention</a></li>
    </ul>
    </li>

  </ul>
  <ul class="nav navbar-nav navbar-right">
    <li><a href="#0"><span class="glyphicon glyphicon-log-in" data-toggle="modal" data-target="#signIn"></span> Notification</a></li>
    <li><a href="#0"><span class="glyphicon glyphicon-log-in" data-toggle="modal" data-target="#signIn"></span> Change Password</a></li>
    <li><a href="#0"><span class="glyphicon glyphicon-user" data-toggle="modal" data-target="#signUp"></span> Sign Up</a></li>
    <li><a href="#0"><span class="glyphicon glyphicon-log-in" data-toggle="modal" data-target="#signIn"></span> Login</a></li>
    <li><a href="#0"><span class="glyphicon glyphicon-log-in" data-toggle="modal" data-target="#signIn"></span> Sign Out</a></li>
  </ul>





  <!-- serach -->

  <div class="containersearch" style="height: 400px;">
    <div class="col-md-12">
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <!-- Search Form -->
      <form>
        <div class="form-row">
          <div class="form-group col-md-3">
            <select class="form-control" id="user_role">
              <option>Book's Name</option>
              <option>DU</option>
              <option>JU</option>
              <option>NSU</option>
              <option>PO</option>
              <option>DEO</option>
            </select>
          </div>
          <div class="form-group col-md-3">
            <select class="form-control" id="user_role">
              <option>Author's Name</option>
              <option>IIT</option>
              <option>ISRT</option>
              <option>EEE</option>
              <option>ACCE</option>
              <option>Microbiology</option>
            </select>
          </div>
          <div class="form-group col-md-3">
            <select class="form-control" id="user_role">
              <option>Interested Sector</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>

          <div class="form-group col-md-3">
            <button type="submit" class="btn btn-block btn-success">Search Book</button>
          </div>
        </div>
      </form>
      <!-- End of Search Form -->

    </div>
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
