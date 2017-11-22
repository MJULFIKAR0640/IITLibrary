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
                                <th>Author's Name</th>
                                <th>Requested User</th>
                                <th>Email</th>
                                <th>Days for borrow</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">NET001</th>
                                <td>Computer Networking</td>
                                <td>James Oxford</td>
                                <th>XYZ</th>
                                <td>abac@gmail.com</td>

                                <td>7</td>
                                <td>
                                    <button class="btn btn-sm btn-success">Approve</button>
                                    <button class="btn btn-sm btn-danger">Dcline</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">NET001</th>
                                <td>Computer Networking</td>
                                <td>James Oxford</td>
                                <th>XYZ</th>
                                <td>abac@gmail.com</td>

                                <td>7</td>
                                <td>
                                    <button class="btn btn-sm btn-success">Approve</button>
                                    <button class="btn btn-sm btn-danger">Dcline</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">NET001</th>
                                <td>Computer Networking</td>
                                <td>James Oxford</td>
                                <th>XYZ</th>
                                <td>abac@gmail.com</td>
    
                                <td>7</td>
                                <td>
                                    <button class="btn btn-sm btn-success">Approve</button>
                                    <button class="btn btn-sm btn-danger">Dcline</button>
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

