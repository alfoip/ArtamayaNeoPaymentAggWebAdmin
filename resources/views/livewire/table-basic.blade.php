@extends('layouts.app')

@section('style')
@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Tables</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Basic Tables</span>
						</div>
					</div>
					<div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
						<button type="button" class="btn btn-warning btn-icon mr-3 mt-2 mt-xl-0">
							<i class="mdi mdi-download "></i>
						</button>
						<button type="button" class="btn btn-danger  btn-icon mr-3 mt-2 mt-xl-0">
							<i class="mdi mdi-clock"></i>
						</button>
						<button type="button" class="btn btn-success btn-icon mr-3 mt-2 mt-xl-0">
							<i class="mdi mdi-plus"></i>
						</button>
						<button class="btn btn-primary mt-2 mt-xl-0">Download report</button>
					</div>
				</div>
				<!-- breadcrumb -->

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">SIMPLE TABLE</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
								<p class="tx-12 tx-gray-500 mb-2">Example of Mintro Simple Table. <a href="">Learn more</a></p>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table mg-b-0 text-md-nowrap">
										<thead>
											<tr>
												<th>ID</th>
												<th>Name</th>
												<th>Position</th>
												<th>Salary</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Joan Powell</td>
												<td>Associate Developer</td>
												<td>$450,870</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Gavin Gibson</td>
												<td>Account manager</td>
												<td>$230,540</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>Julian Kerr</td>
												<td>Senior Javascript Developer</td>
												<td>$55,300</td>
											</tr>
											<tr>
												<th scope="row">4</th>
												<td>Cedric Kelly</td>
												<td>Accountant</td>
												<td>$234,100</td>
											</tr>
											<tr>
												<th scope="row">5</th>
												<td>Samantha May</td>
												<td>Junior Technical Author</td>
												<td>$43,198</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

					<!--div-->
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">STRIPED ROWS</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
								<p class="tx-12 tx-gray-500 mb-2">Example of Mintro Striped Rows.. <a href="">Learn more</a></p>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-striped mg-b-0 text-md-nowrap">
										<thead>
											<tr>
												<th>ID</th>
												<th>Name</th>
												<th>Position</th>
												<th>Salary</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Joan Powell</td>
												<td>Associate Developer</td>
												<td>$450,870</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Gavin Gibson</td>
												<td>Account manager</td>
												<td>$230,540</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>Julian Kerr</td>
												<td>Senior Javascript Developer</td>
												<td>$55,300</td>
											</tr>
											<tr>
												<th scope="row">4</th>
												<td>Cedric Kelly</td>
												<td>Accountant</td>
												<td>$234,100</td>
											</tr>
											<tr>
												<th scope="row">5</th>
												<td>Samantha May</td>
												<td>Junior Technical Author</td>
												<td>$43,198</td>
											</tr>
										</tbody>
									</table>
								</div><!-- bd -->
							</div><!-- bd -->
						</div><!-- bd -->
					</div>
					<!--/div-->

					<!--div-->
					<div class="col-xl-12">
						<div class="card mg-b-20">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">Bordered Table</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
								<p class="tx-12 tx-gray-500 mb-2">Example of Mintro Bordered Table.. <a href="">Learn more</a></p>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered mg-b-0 text-md-nowrap">
										<thead>
											<tr>
												<th>ID</th>
												<th>Name</th>
												<th>Position</th>
												<th>Salary</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Joan Powell</td>
												<td>Associate Developer</td>
												<td>$450,870</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Gavin Gibson</td>
												<td>Account manager</td>
												<td>$230,540</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>Julian Kerr</td>
												<td>Senior Javascript Developer</td>
												<td>$55,300</td>
											</tr>
											<tr>
												<th scope="row">4</th>
												<td>Cedric Kelly</td>
												<td>Accountant</td>
												<td>$234,100</td>
											</tr>
											<tr>
												<th scope="row">5</th>
												<td>Samantha May</td>
												<td>Junior Technical Author</td>
												<td>$43,198</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

					<!--div-->
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">Hoverable Rows Table</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
								<p class="tx-12 tx-gray-500 mb-2">Example of Mintro Hoverable Rows Table.. <a href="">Learn more</a></p>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-hover mb-0 text-md-nowrap">
										<thead>
											<tr>
												<th>ID</th>
												<th>Name</th>
												<th>Position</th>
												<th>Salary</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Tiger Nixon</td>
												<td>System Architect</td>
												<td>$320,800</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Garrett Winters</td>
												<td>Accountant</td>
												<td>$170,750</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>Ashton Cox</td>
												<td>Junior Technical Author</td>
												<td>$86,000</td>
											</tr>
											<tr>
												<th scope="row">4</th>
												<td>Cedric Kelly</td>
												<td>Senior Javascript Developer</td>
												<td>$433,060</td>
											</tr>
											<tr>
												<th scope="row">5</th>
												<td>Airi Satou</td>
												<td>Accountant</td>
												<td>$162,700</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->
				</div>
				<!-- /row -->

@endsection

@section('script')
@endsection