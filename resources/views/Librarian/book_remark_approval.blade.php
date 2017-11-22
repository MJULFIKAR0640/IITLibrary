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
                        <tbody>
                            <tr>
                                <th scope="row">NET001</th>
                                <td>Computer Networking</td>
                                <td>James Oxford</td>
                                <td>XYZ</td>
                                <td>abac@gmail.com</td>
                                <th>pages are not available from 342 to 350</th>
                                
                                <td>
                                    <button class="btn btn-sm btn-success">Approve</button>
                                    <button class="btn btn-sm btn-danger">Dcline</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">NET001</th>
                                <td>Computer Networking</td>
                                <td>James Oxford</td>
                                <td>XYZ</td>
                                <td>abac@gmail.com</td>
                                <th>pages are not available from 342 to 350</th>
                                
                                <td>
                                    <button class="btn btn-sm btn-success">Approve</button>
                                    <button class="btn btn-sm btn-danger">Dcline</button>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row">NET001</th>
                                <td>Computer Networking</td>
                                <td>James Oxford</td>
                                <td>XYZ</td>
                                <td>abac@gmail.com</td>
                                <th>pages are not available from 342 to 350</th>
                                
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

