@extends('layouts.app')

@section('title')
Book-remark-approval
@endsection

@section('content')


<div class="container-fluid">
<div class="row">

    <main class="col-sm-12" role="main">
        <h2 style="margin-bottom: 20px" class="d-none d-sm-block text-center">Remarks</h2>

        <hr>

        <div>

            <div>
                <table class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>Book Id</th>
                            <th>Book</th>
                            <th>Author's Name</th>
                            <th>Remarked Student</th>
                            <th>Email</th>
                            <th>Remark</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach($remark_result as $item)
                    <tbody> 
                        <tr>
                            <td>{{$item->book->book_id}}</td>
                            <td>{{$item->book->book_name}}</td>
                            <td>{{$item->book->author}}</td>
                            <td>{{$item->user->name}}</td>
                            <td>{{$item->user->email}}</td>
                            <td>{{$item->remark}}</td>
                          
                            
                            <td>
                                <form action="{{('/approveRemarkRequest/'.$item->id)}}" method="GET">
                                    {{ csrf_field() }}
                                    <input type="submit" value="Accept" class="btn btn-sm btn-success"> 
                                </form>
                                <form action="{{('/declineRemarkRequest/'.$item->id)}}" method="GET" onclick="return confirm('Are you sure to reject the request?')">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <input type="submit" value="Decline" class="btn btn-sm btn-danger"> 
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
