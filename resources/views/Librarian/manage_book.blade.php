@extends('layouts.app')

@section('title')
Manage-Book
    @endsection
@section('content')

    <div class="container-fluid">
    <div class="row">

        <main class="col-sm-12" role="main">
            <h2 style="margin-bottom: 20px" class="d-none d-sm-block text-center">Manage Books</h2>

            <hr>
            <div>
                <form>
                    <div class="form-row">

                        <div class="form-group col-md-3">
                            <select class="form-control" id="section">
                                <option>Section</option>
                                <option>Database</option>
                                <option>Networking</option>
                                <option>Programming</option>
                                <option>Statistics</option>
                                <option>Project Management</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                
                    </div>

                    <div class="form-row">
                        <div class="form-group ml-auto col-md-3">
                            <a href="{{route ('add_book')}}"class="btn btn-block btn-primary">Add Book</a>
                        </div>
                    </div>
                </form>



                <div>
                    <table class="table table-bordered table-responsive col-sm-12">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Book Id</th>
                                <th>Book</th>
                                <th>Author</th>
                                <th>Publisher</th>
                                <th>Edition</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Book as $id => $value)            
                              <tr>
                                <td>{{$id+1}}</td>
                                <td>{{$value->book_id}}</td>
                                <td>{{$value->book_name}}</td>            
                                <td>{{$value->author}}</td>
                                <td>{{$value->publication}}</td>
                                <td>{{$value->edition}}</td>
                                <td>

                                    <a href="{{route('editBook',$value->id)}}"><button class="btn btn-primary">Edit</button></a>
                                    <form action="{{('/deletebook/'.$value->id)}}" method="GET" onclick="return confirm('Are you sure to delete?')">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <input type="submit" value="Delete" class="btn btn-danger"> 
                                    </form>
                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection

