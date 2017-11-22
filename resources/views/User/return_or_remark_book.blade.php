@extends('layouts.app')

@section('title')
Manage-Book
@endsection
@section('content')

<div class="container-fluid">
  <div class="row">
    <main class="col-sm-12" role="main">
      <h2 style="margin-bottom: 20px" class="text-center d-none d-sm-block">Return/Remark Book</h2>
      <hr>
    
      <div>
        <table class="table table-bordered table-responsive">
          <thead>
            <tr>
              <th>Book Id</th>
              <th>Book</th>
              <th>Author's Name</th>
              <th>Edition</th>
              <th>Previous Remark</th>
              <th>Action</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">NET001</th>
              <td>Computer Networking</td>
              <td>James Oxford</td>
              <td>XYZ</td>
              <td width="450" ">This book is good for database management system.ajhfufdsfadsf fbdsfdsyfiufdsmfdsg fdsgfdsfdsu yfiudshfdsfhsfg dsjbfdsfdsg</td>
               <td>
                <button class="btn btn-sm btn-success">Return</button>
                <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#remark">Remark</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>


<div class="modal fade" id="remark" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true" style="display: none;">
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
                <a id="btn-login" href="#" class="btn btn-success btn-block" margin: 0 auto; >Submit</a>
              </div>
            </div>
          </form>     
        </div>  

      </div>  
    </div>
  </div>

@endsection

