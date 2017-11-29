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
        <div class="panel-heading"><h4><b>Book Configuration</b></h4></div>

        <div class="panel-body" style="margin: 10px">
          <form class="form-horizontal" action="{{route('book_settings')}}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="allowed days">Set allowed days for borrowing</label>
              <input type="number" class="form-control" id="allowed_days" name="days" required>
            </div>
            <div style="margin-bottom: 15px" class="form-group">
              <label for="fine">Set fine for 1 day delay</label>
              <input id="fine_for_delay" type="number" class="form-control" name="fine" required>       
            </div> 

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <center>
              <button type="submit" class="btn btn-success btn-block" name="submit" id="submit" style="margin-bottom: 10px">Submit</button>
            </center>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection