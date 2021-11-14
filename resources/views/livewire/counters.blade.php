@extends('layouts.app')

@section('style')
@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Advanced ui</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Counters</span>
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
					<div class="col-sm-12 col-md-12 col-xl-4">
						<div class="card custom-card">
							<div class="card-body text-center">
								<div>
									<h6 class="card-title">Time Counting From 0</h6>
								</div>
								<div class="p-2">
									<span id="timer-countup" class="h4 mb-0 text-primary"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-12 col-xl-4">
						<div class="card custom-card">
							<div class="card-body text-center">
								<div>
									<h6 class="card-title">Time Counting From 60 to 20</h6>
								</div>
								<div class="p-2">
									<span id="timer-countinbetween" class="h4 mb-0 text-primary"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-12 col-xl-4">
						<div class="card custom-card">
							<div class="card-body text-center">
								<div>
									<h6 class="card-title">Time 1 minute counter</h6>
								</div>
								<div class="p-2">
									<span id="timer-countercallback" class="h4 mb-0 text-primary"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="card custom-card">
							<div class="card-body text-center">
								<div>
									<h6 class="card-title">Time Counting days Limit</h6>
								</div>
								<div class="p-2">
									<span id="timer-outputpattern" class="h3 mb-0 text-primary"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-sm-12 col-md-4">
						<div class="card custom-card">
							<div class="card-body text-center">
								<div>
									<h6 class="card-title">Numbers counter</h6>
								</div>
								<h2 class="counter number-font mb-0">2569</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4">
						<div class="card custom-card">
							<div class="card-body text-center">
								<div>
									<h6 class="card-title">Floating counter</h6>
								</div>
								<h2 class="counter number-font mb-0">2,56989.32</h2>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-4">
						<div class="card custom-card">
							<div class="card-body text-center">
								<div>
									<h6 class="card-title">Numbers counter</h6>
								</div>
								<h2 class="counter number-font mb-0">0.8998</h2>
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
        
		<!--Counters -->
		<script src="{{URL::asset('assets/plugins/counters/waypoints.min.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/counters/counterup.min.js')}}"></script>
        
		<!-- Internal Time Counter -->
		<script src="{{URL::asset('assets/plugins/counters/jquery.missofis-countdown.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/counters/counter.js')}}"></script>

@endsection