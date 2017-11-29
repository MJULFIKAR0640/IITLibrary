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
                                <td>{{$item->book->author}}</td>
                                <td>{{$item->book->edition}}</td>
                                <td>{{$item->user->name}}</td>
                                <td>{{$item->user->type}}</td>
                                <td>{{$item->user->email}}</td>
                                <td>{{$item->borrow_date}}</td>
                                <td>{{$item->return_date}}</td>
                                <td>
                                    <form action="{{('/approveBorrowRequest/'.$item->id)}}" method="GET">
                                        {{ csrf_field() }}
                                        <input type="submit" value="Accept" class="btn btn-success"> 
                                    </form>
                                    <form action="{{('/declineBorrowRequest/'.$item->id)}}" method="GET" onclick="return confirm('Are you sure to reject the request?')">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <input type="submit" value="Decline" class="btn btn-danger"> 
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

