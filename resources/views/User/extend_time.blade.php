@extends('layouts.app')

@section('title')
Extend-time
@endsection
@section('content')

<div class="container-fluid">
	<div class="row">

		<main class="col-sm-12" role="main">
			<h2 style="margin-bottom: 20px" class="d-none d-sm-block text-center">Extend Time</h2>

			<hr>
			<div>
				<div>
					<table class="table table-bordered table-responsive col-sm-12">
						<thead>
							<tr>
								<th>Book Id</th>
								<th>Book</th>
								<th>Author</th>                       
								<th>Edition</th>
								<th style="text-align: center;">Extend Time & Action</th>

							</tr>
						</thead>
						<tbody>
							@foreach($result as $item)
							<tbody> 
								
								<tr>
									<td>{{$item->book->book_id}}</td>
									<td>{{$item->book->book_name}}</td>
									<td>{{$item->book->author}}</td>
									<td>{{$item->book->edition}}</td>


									<td>
										<form action="{{route('extendTime')}}" method="POST">
											{{ csrf_field() }}
											<input type="hidden" name="id" value="{{$item->book->id}}">
											<div class="form-row">
												<div class="form-group">
													<select class="form-control" id="extend_days" name="extend_days">
														<option>Days</option>
														<option value="1">1 day</option>
														<option value="2">2 days</option>
													</select>
												</div>
											</div>

											<input type="submit" value="Submit" class="form-control btn btn-primary">
										</td>

									</tr>
								</form>
							</tbody>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</main>
	</div>
</div>
@endsection

