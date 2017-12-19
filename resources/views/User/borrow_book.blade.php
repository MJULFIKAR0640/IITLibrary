@extends('layouts.app')

@section('title')
Search-book
@endsection
@section('content')

</br>
<div class="container-fluid">
	<div class="container-fluid">
		<div class="row">
			<h2 class="d-none d-sm-block text-center">Borrow Book</h2>
			<hr>      
		</div>
		<div class="modal-body row">
			<div class="col-sm-5">
				<center><h3> Book Information</h3></center>
				<hr>
				<div>
					<table class="table table-bordered table-responsive">
						<tr>
							<th>Section</th>
							<td>{{$Book->section}}</td>
						</tr>
						<tr>
							<th>Book Name</th>
							<td>{{$Book->book_name}}</td>
						</tr>
						<tr>
							<th>Athor</th>
							<td>{{$Book->author}}</td>
						</tr>

						<tr>
							<th>Publication</th>
							<td>{{$Book->publication}}</td>
						</tr>
						<tr>
							<th>Edition</th>
							<td>{{$Book->edition}}</td>
						</tr>      
					</table>
				</div>
			</div>

			<div class="col-md-1">
			</div>

			<div class="col-md-6">
				<form class="form-horizontal" action="{{url('requestBorrow/'.$Book->id)}}" method="GET">
					<div class="modal-body row">
						<center><h3> Borrow Information</h3></center> 
						<hr>
						
						{{ csrf_field() }}
						<div class="col-md-6">
							<center>
								<h4>Borrow Date</h4>
								<hr>
								<input type="date" name="borrow_date" required>
							</center>	
						</div>
						<div class="col-md-6">
							<center>
								<h4>Return Date</h4>
								<hr>
								<input type="date" name="return_date" required>
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