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
								<th>Extend Time</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Software Project Management</td>
								<td>xyz</td>
								<td>3rd Edition</td>								
								<td>
									<div class="form-row">

										<div class="form-group">
											<select class="form-control" id="user_role">
												<option>Days</option>
												<option>1 day</option>
												<option>2 days</option>
												<option>3 days</option>
												<option>4 days</option>
												<option>5 days</option>
												<option>6 days</option>
											</select>
										</div>
									</div>
								</td>
								<td>
									<button class="btn btn-sm btn-success">Submit</button>
								</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Software Project Management</td>
								<td>xyz</td>
								<td>3rd Edition</td>								
								<td>
									<div class="form-row">

										<div class="form-group">
											<select class="form-control" id="user_role">
												<option>Days</option>
												<option>1 day</option>
												<option>2 days</option>
												<option>3 days</option>
												<option>4 days</option>
												<option>5 days</option>
												<option>6 days</option>
											</select>
										</div>
									</div>
								</td>
								<td>
									<button class="btn btn-sm btn-success">Submit</button>
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

