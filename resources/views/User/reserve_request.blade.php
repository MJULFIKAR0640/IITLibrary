@extends('layouts.app')

@section('title')
Search-book
@endsection
@section('content')

<div class="container-fluid">
	<div class="container-fluid">
		<div class="row">
			<h2 class="d-none d-sm-block text-center">Reserve Book</h2>
			<hr>      
		</div>
		<div class="modal-body row">
			<div class="col-md-6">
				<center><h3> Book Information</h3></center>
				<hr>
				<div>
					<table class="table table-bordered table-responsive">
						<tr>
							<th>Section</th>
							<td>{{$book->section}}</td>
						</tr>
						<tr>
							<th>Book Name</th>
							<td>{{$book->book_name}}</td>
						</tr>
						<tr>
							<th>Athor</th>
							<td>{{$book->author}}</td>
						</tr>

						<tr>
							<th>Publication</th>
							<td>{{$book->publication}}</td>
						</tr>
						<tr>
							<th>Edition</th>
							<td>{{$book->edition}}</td>
						</tr>      
					</table>
				</div>
			</div>



			<div class="col-md-5 col-md-offset-1">
				<form class="form-horizontal" action="{{url('reserve/'.$book->id)}}" method="GET">
					<div class="modal-body row">
						<center><h3>Reservation</h3></center> 
						<hr>						
						{{ csrf_field() }}
						<div class="col-md-6">
							<center>
								<h4>Start date</h4>
								<hr>
								<input type="date" name="start_date" required>
							</center>	
						</div>
						<div class="col-md-6">
							<center>
								<h4>End date</h4>
								<hr>
								<input type="date" name="end_date" required>
							</center>		
						</div>
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
					</div>
					<br>
					<center>
						<button class="btn btn-primary" type="submit">Submit</button>
					</center>
				</form>		
			</div>
		</div>
	</div>
</div>
@endsection