@extends('layouts.app')

@section('title')
Book-issue-approval
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
        <main class="col-sm-12" role="main">
            <h2 style="margin-bottom: 20px" class="d-none d-sm-block text-center">Issue Book</h2>
            <hr>
            <div>
                <div>
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>Book Id</th>
                                <th>Book</th>
                                <th>Borrower</th>
                                <th>User Type</th>
                                <th>Email</th>
                                <th>Borrowed Date</th>
                                <th>Deadline</th>
                                <th>Fine</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        @foreach($result as $item)
                        <tbody> 
                            <tr>
                                <td>{{$item->book->book_id}}</td>
                                <td>{{$item->book->book_name}}</td>
                                <td>{{$item->user->name}}</td>
                                <td>{{$item->user->type}}</td>
                                <td>{{$item->user->email}}</td>
                                <td>{{$item->borrow_date}}</td>
                                <td>{{$item->return_date}}</td>
                                <td>
                                	@if($item->user->type == 'teacher')
                                		<p>Not Applicable</p>
                                	@endif
	                                @if($item->user->type == 'student')
	                                	@if(date_diff(date_create($item->return_date), date_create(date("Y-m-d")))->format("%R%a") >= 0)
	                                		{{$settings->fine*(date_diff(date_create($item->return_date), date_create(date("Y-m-d")))->format("%a")+1)}}
	                                	@endif
                                	@endif
                                </td>
                                <td>
                                    <form action="{{('/approvereturnbook/'.$item->id)}}" method="GET">
                                        {{ csrf_field() }}
                                        <input type="submit" value="Return" class="btn btn-primary"> 
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection

