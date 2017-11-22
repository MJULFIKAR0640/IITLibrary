@extends('layouts.app')

@section('title')
Issued-book-list
@endsection
@section('content')

</br>

<div class="container-fluid">
	<div class="row">

		<main class="col-sm-12" role="main">

			<h2 style="margin-bottom: 20px" class="d-none d-sm-block text-center">Issued Book List</h2>
			<hr>
			</br>
			<div>
				<table class="table table-bordered table-responsive">
					<thead>
						<tr>
							<th>#</th>
							<th>Book</th>
							<th>Athor</th>
							<th>Edition</th>
							<th>Borrower</th>            							
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Database Management System</td>
							<td>XYZ</td>							
							<td>3rd Edition</td>
							<th>Julfikar</th>
						</tr>
						<tr>
							<th scope="row">1</th>
							<td>Database Management System</td>
							<td>XYZ</td>							
							<td>3rd Edition</td>
							<th>Julfikar</th>
						</tr>
						<tr>
							<th scope="row">1</th>
							<td>Database Management System</td>
							<td>XYZ</td>							
							<td>3rd Edition</td>
							<th>Julfikar</th>
						</tr>
					</tbody>
				</table>
			</div>
		</main>
	</div>
</div>
@endsection




