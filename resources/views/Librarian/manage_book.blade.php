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
                            <select class="form-control" id="user_role">
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
                                <th>Book Id</th>
                                <th>Book</th>
                                <th>Author</th>
                                <th>Publisher</th>
                                <th>Edition</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>DU</td>
                                <td>IIT</td>
                                <td>1</td>
                                <td>Software Project Management</td>
                                <td>
                                    <button class="btn btn-sm btn-primary">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>DU</td>
                                <td>IIT</td>
                                <td>1</td>
                                <td>Software Project Management</td>
                           
                                <td>
                                    <button class="btn btn-sm btn-primary">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>DU</td>
                                <td>IIT</td>
                                <td>1</td>
                                <td>Software Project Management</td>
                               
                                <td>
                                    <button class="btn btn-sm btn-primary">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection

