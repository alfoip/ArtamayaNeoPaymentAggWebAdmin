@extends('layouts.app')

@section('style')

		<!-- Font Awesome -->
		<link href="{{URL::asset('assets/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">

		<!-- Bootstrap -->
		<link href="{{URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

		<!-- Internal treeview -->
        <link href="{{URL::asset('assets/plugins/treeview/treeview.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Apps</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Treeview</span>
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

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Basic Treeview
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div class="row">
									<!-- col -->
									<div class="col-lg-4">
										<ul id="treeview1">
											<li><a href="#">TECH</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li>XRP
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
										</ul>
									</div>
									<!-- /col -->

									<!-- col -->
									<div class="col-lg-4 mt-4 mt-lg-0">
										<ul id="treeview2">
											<li><a href="#">TECH</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li>XRP
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
										</ul>
									</div>
									<!-- /col -->

									<!-- col -->
									<div class="col-lg-4 mt-4 mt-lg-0">
										<ul id="treeview3">
											<li><a href="#">TECH</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li>XRP
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
										</ul>
									</div>
									<!-- /col -->
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Tree View Styles
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div class="row">
									<!-- col -->
									<div class="col-lg-4">
										<ul id="tree1">
											<li><a href="#">Treeview1</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview2</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview3</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview4</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview5</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview6</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
										</ul>
									</div>
									<!-- /col -->

									<!-- col -->
									<div class="col-lg-4 mt-4 mt-lg-0">
										<ul id="tree2">
											<li><a href="#">Treeview1</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview2</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview3</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview4</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview5</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview6</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
										</ul>
									</div>
									<!-- /col -->

									<!-- col -->
									<div class="col-lg-4 mt-4 mt-lg-0">
										<ul id="tree3">
											<li><a href="#">Treeview1</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview2</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview3</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview4</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview5</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.
																		<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a href="#">Treeview6</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
										</ul>
									</div>
									<!-- /col -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row -->

@endsection

@section('script')

		<!-- Perfect-scrollbar js -->
		<script src="{{URL::asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

		<!-- Internal Treeview js -->
		<script src="{{URL::asset('assets/plugins/treeview/treeview.js')}}"></script>

@endsection