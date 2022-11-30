
@extends('admin.layouts.app')

@section('main-content')



<!-- Main Wrapper -->
<div class="main-wrapper">
		
		<!-- Header -->
		@include('admin.layouts.header')
		
		<!-- /Header -->
		
		<!-- Sidebar -->
		@include('admin.layouts.menu')

		<!-- /Sidebar -->
		
		<!-- Page Wrapper -->
		<div class="page-wrapper">
		
			<div class="content container-fluid">
				
				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col-sm-12">
							<!-- user name import -->
							<h3 class="page-title">Welcome {{ Auth::user()->name; }}!</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item active">Catagory</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<div class="row">
						<div class="col-lg-12">
							@include('validate')
							<a class="btn btn-sm btn-primary" data-toggle="modal" href="#add_category_model">Add new Catagory</a>
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">All Catagories</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table mb-0">
											<thead>
												<tr>
													<th>SL</th>
													<th>Category Name</th>
													<th>Catagory slug</th>
													<th>Published On</th>
													<th>Time</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												@foreach($all_data as $data)
												<tr>
													<td>{{ $loop -> index +1 }}</td>
													<td>{{ $data-> name }}</td>
													<td>{{ $data-> slug }}</td>
													<td>{{ $data-> created_at->diffForHumans() }}</td>
													<td>
														<div class="status-toggle">
															<input status_id="{{ $data->id }}" type="checkbox"  {{ ( $data -> status == true ? 'checked="checked"' : '') }} id="cat_status_{{ $loop -> index +1 }}" class="check cat_check">
															<label for="cat_status_{{  $loop -> index +1 }}" class="checktoggle">checkbox</label>
														</div>
													</td>

													<td>
														<a class="btn btn-sm btn-info" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
														<a class="btn btn-sm btn-warning" href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
														<a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
													</td>
												</tr>
												
											</tbody>
											@endforeach
										</table>
									</div>
								</div>
							</div>
						</div>
						
					</div>



				
						
					</div>
				</div>
				
			</div>			
		</div>
		<!-- /Page Wrapper -->
	
	</div>
	<!-- /Main Wrapper -->

<!-- model form for catagory add -->
	<div id="add_category_model" class="modal fade">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body">	
					<h2>Add new Catagory</h2>
					<form action="{{ route('category.store') }}" method="POST">
						@csrf
						<div class="from-group">
							<label for="">Name</label>
							<input name="name" type="text" class="form-control">
						</div>
						<br>
						<div class="from-group">	
							<input type="submit" class="btn btn-sm btn-primary">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>


	@endsection