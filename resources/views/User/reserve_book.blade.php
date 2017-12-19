@extends('layouts.app')

@section('title')
Search-book
@endsection
@section('content')

<div class="container-fluid">
	<div class="modal-body row">
		<div class="col-md-7">
			<center><h3> Search book for reserve </h3></center>
			<hr>
			<div>
				<form action="{{route('searchBookforReserve')}}" method="POST">
					<div class="form-row">
						<div class="form-group col-md-9">
							<input type="text" class="form-control" id="usr" name="keyword" required>
						</div>
						<div class="form-group col-md-3">
							<button type="submit" class="btn btn-success">Search Book</button>
						</div>
						<div class="container-fluid">
							<div class="radio"></div>
							<label class="radio-inline"><input type="radio" checked="" value="book" name="optradio">Search by Book Name</label>
							<label class="radio-inline"><input type="radio" value="author" name="optradio">Search by Author's Name</label>
							<label class="radio-inline"><input type="radio" value="section" name="optradio">Search by Section</label>
						</div>
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
					</div>
				</form>
			</div>
			@if(count($result)>0)
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
			        <th>Action</th>                        
			      </tr>
			    </thead>       
			    <tbody>
			      @foreach($result as $id => $output)
			      <tr>
			        <td>{{$id+1}}</td>
			        <td>{{$output->section}}</td>
			        <td>{{$output->book_name}}</td>
			        <td>{{$output->author}}</td>
			        <td>{{$output->publication}}</td>
			        <td>{{$output->edition}}</td>
			        <td><a href="" class="btn btn-primary">Reserve</a></td>
			      </tr>

			      @endforeach
			    </tbody>
			  </table>
			</div>
			@endif           
		</div>
		<div class="col-md-5">
			<center><h3> Reserved Book List </h3></center> 
			<hr>						
			{{ csrf_field() }}
			<table class="table table-bordered table-responsive">
				<tr>
					<th>Book Name</th>
					<th>Athor</th>
					<th>Edition</th>
					<th>Action</th>
				</tr>
			</table>
		</div>
	</div>
</div>
@endsection