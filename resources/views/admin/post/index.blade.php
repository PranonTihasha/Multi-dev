
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
								<li class="breadcrumb-item active">Dashboard</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<div class="row">
						<div class="col-lg-12">
							<a class="btn btn-sm btn-primary" href="#">Add new Post</a>
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">All Data</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table mb-0">
											<thead>
												<tr>
													<th>#</th>
													<th>Post Title</th>
													<th>Catagory</th>
													<th>Tag</th>
													<th>Date</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>John</td>
													<td>Doe</td>
													<td>john@example.com</td>
													<td>john@example.com</td>
													<td>john@example.com</td>
													<td>
														<a class="btn btn-sm btn-info" href="#">view</a>
														<a class="btn btn-sm btn-warning" href="#">view</a>
														<a class="btn btn-sm btn-danger" href="#">view</a>
													</td>
												</tr>
												
											</tbody>
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


	@endsection