@extends('layouts.app')

@section('style')

		<!--- Owl Carousel css-->
		<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">

		<!--- Internal Sweet-Alert css-->
		<link href="{{URL::asset('assets/plugins/sweet-alert/sweetalert.css')}}" rel="stylesheet">

@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Advanced ui</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Sweet-Alerts</span>
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

				<!-- Row -->
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="card custom-card text-center">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Basic Alert</h6>
									<p class="text-muted card-sub-title">A Basic Message</p>
								</div>
								<div class="btn ripple btn-primary" id='swal-basic'>
									Click me !
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="card custom-card text-center">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Title alert</h6>
									<p class="text-muted card-sub-title">A title with a text under</p>
								</div>
								<div class="btn ripple btn-primary" id='swal-title'>
									Click me !
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="card custom-card text-center">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Success alert</h6>
									<p class="text-muted card-sub-title">A Success Message</p>
								</div>
								<div class="btn ripple btn-primary" id='swal-success'>
									Click me !
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="card custom-card text-center">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Warning alert</h6>
									<p class="text-muted card-sub-title">A warning message</p>
								</div>
								<div class="btn ripple btn-primary" id='swal-warning'>
									Click me !
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- Row -->
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="card custom-card text-center">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Passing a parameter alert</h6>
									<p class="text-muted card-sub-title">By passing a parameter</p>
								</div>
								<div class="btn ripple btn-primary" id='swal-parameter'>
									Click me !
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="card custom-card text-center">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Image alert</h6>
									<p class="text-muted card-sub-title">A message with custom Image</p>
								</div>
								<div class="btn ripple btn-primary" id='swal-image'>
									Click me !
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="card custom-card text-center">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Timer alert</h6>
									<p class="text-muted card-sub-title">A message with auto close timer</p>
								</div>
								<div class="btn ripple btn-primary" id='swal-timer'>
									Click me !
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="card custom-card text-center">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Ajax Alert</h6>
									<p class="text-muted card-sub-title">With a loader (for a AJAX requests)</p>
								</div>
								<div class="btn ripple btn-primary" id='swal-ajax'>
									Click me !
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->

@endsection

@section('script')

		<!-- Datepicker js -->
		<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

		<!-- Select2 js-->
		<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/rating/ratings.js')}}"></script>

		<!-- Internal Sweet-Alert js-->
		<script src="{{URL::asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/sweet-alert/jquery.sweet-alert.js')}}"></script>

@endsection