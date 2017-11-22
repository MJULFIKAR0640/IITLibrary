@extends('layouts.app')

@section('title')
Account-approval
@endsection

@section('content')
@include('nav.adminNav')
<div class="container-fluid">
    <div class="row">

        <main class="col-sm-12" role="main">
            <h2 style="margin-bottom: 20px" class="d-none d-sm-block text-center">Approve account</h2>

            <hr>

            <div>

                <div>
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Type of user</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">01</th>
                                <td>Mohammad Julfikar Rahman</td>
                                <td>BSSE/MSSE Student</td>
                                <td>abac@gmail.com</td>

                                <td>
                                    <button class="btn btn-sm btn-success">Approve</button>
                                    <button class="btn btn-sm btn-danger">Dcline</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">01</th>
                                <td>Mohammad Julfikar Rahman</td>
                                <td>PGDIT Student</td>
                                <td>abac@gmail.com</td>

                                <td>
                                    <button class="btn btn-sm btn-success">Approve</button>
                                    <button class="btn btn-sm btn-danger">Dcline</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">01</th>
                                <td>Mohammad Julfikar Rahman</td>
                                <td>Teacher</td>
                                <td>abac@gmail.com</td>

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




