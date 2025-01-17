@extends('layouts.app')

@section('style')
@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Apps</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Widget-Notifications</span>
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
				<div class="row row-sm">
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20">
							<div class="card-body text-danger">
								<div class="main-error-wrapper">
									<i class="si si-close mg-b-20 tx-50"></i>
									<h4 class="mg-b-20">Data Not Found.</h4>
									<a class="btn btn-outline-danger btn-sm" href="">Click to view details</a>
								</div>
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20">
							<div class="card-body text-success">
								<div class="main-error-wrapper">
									<i class="si si-check mg-b-20 tx-50"></i>
									<h4 class="mg-b-20">Submitted Successfully</h4>
									<a class="btn btn-outline-success btn-sm" href="">Click to view details</a>
								</div>
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20">
							<div class="card-body text-info">
								<div class="main-error-wrapper">
									<i class="si si-info mg-b-20 tx-50"></i>
									<h4 class="mg-b-20">Info Alert</h4>
									<a class="btn btn-outline-info btn-sm" href="">Click to view details</a>
								</div>
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20 bg-danger">
							<div class="card-body text-white">
								<div class="main-error-wrapper">
									<i class="si si-close mg-b-20 tx-50"></i>
									<h4 class="mg-b-0">Data Not Found.</h4>
								</div>
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20 bg-success">
							<div class="card-body text-white">
								<div class="main-error-wrapper">
									<i class="si si-check mg-b-20 tx-50"></i>
									<h4 class="mg-b-0">Submitted Successfully</h4>
								</div>
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20 bg-info">
							<div class="card-body text-white">
								<div class="main-error-wrapper">
									<i class="si si-info mg-b-20 tx-50"></i>
									<h4 class="mg-b-0">Info Alert</h4>
								</div>
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
				</div>
				<!-- row -->

				<!-- /row -->
				<div class="row row-sm">
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20 bg-danger-transparent alert p-0">
							<div class="card-header text-danger font-weight-bold">
								<i class="far fa-times-circle"></i> Error Data
								<button aria-label="Close" class="close" data-dismiss="alert" type="button"><span aria-hidden="true">×</span></button>
							</div>
							<div class="card-body text-danger">
								<strong>Oh snap!</strong> Change a few things up and try submitting again.
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20 bg-success-transparent alert p-0">
							<div class="card-header text-success font-weight-bold">
								<i class="far fa-check-circle"></i> Success Data
								<button aria-label="Close" class="close" data-dismiss="alert" type="button"><span aria-hidden="true">×</span></button>
							</div>
							<div class="card-body text-success">
								<strong>Well done!</strong> You successfully read this important alert message.
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
					<div class="col-lg-4 col-md-4">
						<!--Page Widget Error-->
						<div class="card bd-0 mg-b-20 bg-info-transparent alert p-0">
							<div class="card-header text-info font-weight-bold">
								<i class="far fa-question-circle"></i> Info Data
								<button aria-label="Close" class="close" data-dismiss="alert" type="button"><span aria-hidden="true">×</span></button>
							</div>
							<div class="card-body text-info">
								<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
							</div>
						</div>
						<!--Page Widget Error-->
					</div>
				</div>
				<!-- row -->

				<!-- /row -->
				<div class="row row-sm">
					<div class="col-lg-4 col-md-4">
						<div class="card mg-b-20 text-center">
							<div class="card-body h-100">
								<img src="{{URL::asset('assets/img/svgicons/no-data.svg')}}" alt="" class="wd-35p">
								<h5 class="mg-b-10 mg-t-15 tx-18">Items Not Found</h5>
								<a href="#" class="text-muted">Check The Settings</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="card mg-b-20 text-center">
							<div class="card-body h-100">
								<img src="{{URL::asset('assets/img/svgicons/note_taking.svg')}}" alt="" class="wd-35p">
								<h5 class="mg-b-10 mg-t-15 tx-18">Its Empty In Here</h5>
								<a href="#" class="text-muted">Check The Settings</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="card mg-b-20 text-center">
							<div class="card-body h-100">
								<img src="{{URL::asset('assets/img/svgicons/imac.svg')}}" alt="" class="wd-40p">
								<h5 class="mg-b-10 mg-t-15 tx-18">No Site Selected</h5>
								<a href="#" class="text-muted">Check The Settings</a>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

@endsection

@section('script')

		<!-- Internal Chart js -->
		<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>

@endsection