@extends('layouts.app')

@section('title')
Book-issue-approval
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">

        <main class="col-sm-12" role="main">
            <h2 style="margin-bottom: 20px" class="d-none d-sm-block text-center">Book List</h2>

            <hr>

            <div>

                <div>
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>Book Id</th>
                                <th>Book</th>
                                <th>Author's Name</th>
                                <th>Edition</th>
                                <th>Requested Date</th>
                                <th>Rrturn Date</th>
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
                                <td>{{$item->borrow_date}}</td>
                                <td>{{$item->return_date}}</td>
                                <td>
                                    @if($item->status == 'requested')
                                    <form action="{{('/cancelRequest/'.$item->id)}}" method="GET" onclick="return confirm('Are you sure to cancel the request?')">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <input type="submit" value="Cancel" class="btn btn-danger"> 
                                    </form>
                                    @else
                                    <p>Issued</p>
                                    @endif
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

