@extends('layouts.app')

@section('title')
Issued-book-list
@endsection
@section('content')
@include('nav.librarianNav')
</br>

<div class="container-fluid">
	<div class="row">

		<main class="col-sm-12" role="main">

			<h2 style="margin-bottom: 20px" class="d-none d-sm-block text-center">New Requested Book</h2>
			<hr>
		</br>
		<div>
			<table class="table table-bordered table-responsive">
				<thead>
					<tr>
						<th>#</th>
						<th>Section</th>
						<th>Book</th>
						<th>Athor</th>
						<th>Publication</th>
						<th>Edition</th>						
						<th>Requested User</th> 
						<th>Email</th>           							
					</tr>
				</thead>
				
				<tbody>

					
					@foreach ($Requestedbook as $value)						
						<tr>
							<th>{{$value->id}}</th>
							<td>{{$value->section}}</td>
							<td>{{$value->book_name}}</td>						
							<td>{{$value->author}}</td>
							<th>{{$value->publication}}</th>
							<th>{{$value->edition}}</th>						
						</tr>

						@endforeach


				</tbody>
			</table>
		</div>
	</main>
</div>
</div>
@endsection




