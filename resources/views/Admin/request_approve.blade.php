@extends('layouts.app')

@section('title')
	IIT-Library
@endsection

@section('content')


</br>
<div class="container-fluid">
  <div class="container-fluid">
    <h3 style="margin-bottom: 10px" class="d-none d-sm-block text-center"><b>User Requests</b></h3>
      <hr>
      <div>
        <table class="table table-bordered table-responsive">
          <thead>
            <tr>
              <th>#</th>
              <th>Book</th>
              <th>Athor</th>
              <th>Publicatiion</th>
              <th>Edition</th>
              <th>Copy Available</th>            
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Database Management System</td>
              <td>XYZ</td>
              <td>Schame Series</td>
              <td>3rd Edition</td>
              <td>5 copies</td>

              <td>
                <button class="btn btn-primary" data-toggle="modal" data-target="#borrow">Borrow</button>
              </td>
            </tr>
            <tr>
              <th scope="row">1</th>
              <td>Database Management System</td>
              <td>XYZ</td>
              <td>Schame Series</td>
              <td>3rd Edition</td>
              <td>5 copies</td>
              <td>
                <button class="btn btn-primary" data-toggle="modal" data-target="#borrow">Borrow</button>
              </td>
            </tr>
            <tr>
              <th scope="row">1</th>
              <td>Database Management System</td>
              <td>XYZ</td>
              <td>Schame Series</td>
              <td>3rd Edition</td>
              <td>5 copies</td>
              <td>
                <button class="btn btn-primary" data-toggle="modal" data-target="#borrow">Borrow</button>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
@endsection

