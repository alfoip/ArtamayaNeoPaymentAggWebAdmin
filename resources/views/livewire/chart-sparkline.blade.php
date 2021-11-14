@extends('layouts.app')

@section('style')

		<!-- Internal Morris Css-->
		<link href="{{URL::asset('assets/plugins/morris.js/morris.css')}}" rel="stylesheet">

@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Charts</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Sparkline chart</span>
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
					<div class="col-lg-6">
						<div class="card mg-b-20 overflow-hidden">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Bar Chart
								</div>
								<p class="mg-b-20">Below is the basic bar chart example.</p>
								<div class="d-sm-flex">
									<div>
										<span id="sparkline5">3,4,4,7,5,9,10,6,4,4,7,5,9,10</span>
									</div>
									<div class="mg-sm-l-30 mg-t-20 mg-sm-t-0">
										<span id="sparkline6">3,4,4,7,5,9,10,6,4,4,7,5,9,10</span>
									</div>
								</div>
							</div>
						</div>
					</div><!-- col-->

					<div class="col-lg-6">
						<div class="card mg-b-20 overflow-hidden">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Stacked Bar Chart
								</div>
								<p class="mg-b-20">Below is the basic stacked bar chart example.</p>
								<div class="d-sm-flex">
									<div>
										<span id="sparkline7">7,8,10,7,5,9,10,6,9,4,7,5,9,10,8</span>
									</div>
									<div class="mg-sm-l-30 mg-t-20 mg-sm-t-0">
										<span id="sparkline8">3,4,4,7,5,9,10,6,4,4,7,5,9,10,8</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-lg-6">
						<div class="card mg-b-20 overflow-hidden">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Line Chart
								</div>
								<p class="mg-b-20">Below is the basic line chart example.</p>
								<div class="d-sm-flex">
									<div>
										<span id="sparkline1">3,4,4,7,5,9,10,6,4,4,7,5,9,10</span>
									</div>
									<div class="mg-sm-l-30 mg-t-20 mg-sm-t-0">
										<span id="sparkline2">3,4,4,7,5,9,10,6,4,4,7,5,9,10</span>
									</div>
								</div>
							</div>
						</div>
					</div><!-- col-->
					<div class="col-lg-6">
						<div class="card mg-b-20 overflow-hidden">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Area Chart
								</div>
								<p class="mg-b-20">Below is the area bar chart example.</p>
								<div class="d-sm-flex">
									<div>
										<span id="sparkline3">7,8,10,7,5,9,10,6,9,4,7,5,9,10,8</span>
									</div>
									<div class="mg-sm-l-30 mg-t-20 mg-sm-t-0">
										<span id="sparkline4">3,4,4,7,5,9,10,6,4,4,7,5,9,10,8</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-md-12">
						<!-- div -->
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Pie Chart
								</div>
								<p class="mg-b-20">An example of a pie chart with two series.</p>
								<div class="d-flex">
									<div>
										<span id="sparkline9">3,4,4</span>
									</div>
									<div class="mg-l-30">
										<span id="sparkline10">3,4,4,7,5,9</span>
									</div>
								</div>
							</div>
						</div>
					<!-- /div -->
					</div><!-- col-6 -->
				</div>
				<!-- row closed -->

@endsection

@section('script')

		<!-- Datepicker js -->
        <script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
        
		<!-- Select2 js-->
        <script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
        
		<!-- Internal Jquery-sparkline js -->
		<script src="{{URL::asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/chart.sparkline.js')}}"></script>

@endsection