@extends('layouts.app')

@section('title')
Manage-Book
@endsection
@section('content')

<div class="container-fluid">
  <div class="row">
    <main class="col-sm-12" role="main">
      <h2 style="margin-bottom: 20px" class="text-center d-none d-sm-block">Remark Book</h2>
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
              <th>Your Remark</th>
            </tr>
          </thead>
          @foreach($book as $item)
          <tbody> 
            <tr>
              <td>{{$item->book->book_id}}</td>
              <td>{{$item->book->book_name}}</td>
              <td>{{$item->book->author}}</td>
              <td>{{$item->book->edition}}</td>
              <td> 
                <ul>
                  @foreach($item->book->remarks as $remark)
                  <li>{{$remark->remark}}</li>
                  @endforeach

                </ul>
              </td>
              <td>
                <form id="remarkform" class="form-horizontal" role="form" action="{{route('remarkSave',$item->book->id)}}" method="POST">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div style="margin-bottom: 10px" class="form-group">
                    <textarea id="remark" rows="3" type="text" name="remark" placeholder="Enter your remark" style="width: 90% ;margin-left: 17px"></textarea>      
                  </div> 
                  <div style="margin-top:10px" class="form-group">
                    <div class="col-sm-12 controls">

                      <button id="btn-login" type="submit" class="btn btn-sm btn-primary" style="float: right;margin-right: 3px">Submit</button>
                    </div>
                  </div>
                </form>
              </td>
            </tr>
          </tbody>
          @endforeach
        </table>
      </div>
    </main>
  </div>
</div>

@endsection

