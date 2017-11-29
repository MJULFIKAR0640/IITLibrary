@extends('layouts.app')

@section('title')
IIT-Library
@endsection

@section('content')
</br>
<div class="container-fluid">
  <div class="row states-info">
    <div class="col-md-6 col-md-offset-3">
      <div class="bg-info text-white">
        <div class="panel-body">
          <div class="row">
            <div class="col-xs-4">
              <i class="fa fa-book text-success"></i>
            </div>
            <div class="col-xs-8 text-center text-success">
              <span class="state-title"> <b> Total number of book </b> </span>
              <h4>{{ $total_books }}</h4>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-md-offset-3" style="margin-top: 20px" >
      <div class="bg-info text-white">
        <div class="panel-body">
          <div class="row">
            <div class="col-xs-4">
              <i class="fa fa-book text-success"></i>
            </div>
            <div class="col-xs-8 text-center text-success">
              <span class="state-title"> <b> Total number of issued book </b> </span>
              <h4>7</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-md-offset-3" style="margin-top: 20px">
      <div class="bg-info text-white">
        <div class="panel-body">
          <div class="row">
            <div class="col-xs-4">
              <i class="fa fa-users text-info"></i>
            </div>
            <div class="col-xs-8 text-center text-info">
              <span class="state-title">  <b>Total number of students </b></span>
                <h4>{{ $total_users }}</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</br>
</div>
@endsection

