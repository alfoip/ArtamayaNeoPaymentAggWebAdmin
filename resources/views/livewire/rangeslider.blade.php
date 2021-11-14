@extends('layouts.app')

@section('style')

		<!-- Internal Ion.rangeSlider css -->
		<link href="{{URL::asset('assets/plugins/ion-rangeslider/css/ion.rangeSlider.css')}}" rel="stylesheet">
		<link href="{{URL::asset('assets/plugins/ion-rangeslider/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet">

@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex"><h4 class="content-title mb-0 my-auto">Apps</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Rangeslider</span></div>
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
					<div class="col-sm-12 col-md-12 col-lg-12">

						<!--div-->
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Range Slider
								</div>
								<p class="mg-b-20">Default range slider of xino.</p>
								<div class="row row-sm">
									<div class="col-lg-12">
										<input class="rangeslider1" name="example_name" type="text" value="">
									</div>
									<div class="col-lg-12 mg-t-20">
										<input class="rangeslider2" name="example_name" type="text" value="">
									</div>
								</div>
								<div class="row row-sm">
									<div class="col-lg-12 mg-t-20">
										<input class="rangeslider3" name="example_name" type="text" value="">
									</div>
									<div class="col-lg-12 mg-t-20">
										<input class="rangeslider4" name="example_name" type="text" value="">
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Range Slider (Modern Skin)
								</div>
								<p class="mg-b-20">It is the modern skin range slider of xino.</p>
								<div class="row row-sm">
									<div class="col-lg-12">
										<input class="rangeslider1" data-extra-classes="irs-modern" name="example_name" type="text">
									</div>
									<div class="col-lg-12 mg-t-20">
										<input class="rangeslider2" data-extra-classes="irs-modern" name="example_name" type="text">
									</div>
								</div>
								<div class="row row-sm">
									<div class="col-lg-12 mg-t-20">
										<input class="rangeslider3" data-extra-classes="irs-modern" name="example_name" type="text">
									</div>
									<div class="col-lg-12 mg-t-20">
										<input class="rangeslider4" data-extra-classes="irs-modern" name="example_name" type="text">
									</div>
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Range Slider (Outline Skin)
								</div>
								<p class="mg-b-20">It is the outline skin range slider of xino.</p>
								<div class="row row-sm">
									<div class="col-lg-12">
										<input class="rangeslider1" data-extra-classes="irs-outline" name="example_name" type="text">
									</div>
									<div class="col-lg-12 mg-t-20">
										<input class="rangeslider2" data-extra-classes="irs-outline" name="example_name" type="text">
									</div>
								</div>
								<div class="row row-sm">
									<div class="col-lg-12 mg-t-20">
										<input class="rangeslider3" data-extra-classes="irs-outline" name="example_name" type="text">
									</div>
									<div class="col-lg-12 mg-t-20">
										<input class="rangeslider4" data-extra-classes="irs-outline" name="example_name" type="text">
									</div>
								</div>
							</div>
						</div>
						<!--/div-->
					</div>
				</div>
				<!-- Row -->

@endsection

@section('script')

		<!-- Sparkline js -->
		<script src="{{URL::asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

		<!-- Moment js -->
		<script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>

		<!-- Piety js -->
		<script src="{{URL::asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>

		<!-- Internal Ion.rangeSlider.min js -->
		<script src="{{URL::asset('assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>

		<!-- Internal Chart js -->
		<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>

		<!--  Internal rangeslider js -->
		<script src="{{URL::asset('assets/js/rangeslider.js')}}"></script>

@endsection