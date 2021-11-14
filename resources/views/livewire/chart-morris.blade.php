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
							<h4 class="content-title mb-0 my-auto">Charts</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Morris-charts</span>
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
					<div class="col-md-6">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Bar Chart
								</div>
								<p class="mg-b-20">Basic Charts Of Xino Template.</p>
								<div class="morris-wrapper-demo" id="morrisBar1"></div>
							</div>
						</div>
					</div><!-- col-6 -->
					<div class="col-md-6">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Bar Chart
								</div>
								<p class="mg-b-20">Basic Charts Of Xino Template.</p>
								<div class="morris-wrapper-demo" id="morrisBar2"></div>
							</div>
						</div>
					</div><!-- col-6 -->
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-md-6">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Stacked Bar Chart
								</div>
								<p class="mg-b-20">Basic Charts Of Xino Template.</p>
								<div class="morris-wrapper-demo" id="morrisBar3"></div>
							</div>
						</div>
					</div><!-- col-6 -->
					<div class="col-md-6">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Stacked Bar Chart
								</div>
								<p class="mg-b-20">Basic Charts Of Xino Template.</p>
								<div class="morris-wrapper-demo" id="morrisBar4"></div>
							</div>
						</div>
					</div><!-- col-6 -->
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-md-6">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Line Chart
								</div>
								<p class="mg-b-20">Basic Charts Of Xino Template.</p>
								<div class="morris-wrapper-demo" id="morrisLine1"></div>
							</div>
						</div>
					</div><!-- col-6 -->
					<div class="col-md-6">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Line Chart
								</div>
								<p class="mg-b-20">Basic Charts Of Xino Template.</p>
								<div class="morris-wrapper-demo" id="morrisLine2"></div>
							</div>
						</div>
					</div><!-- col-6 -->
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-md-6">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Area Chart
								</div>
								<p class="mg-b-20">Basic Charts Of Xino Template.</p>
								<div class="morris-wrapper-demo" id="morrisArea1"></div>
							</div>
						</div>
					</div><!-- col-6 -->
					<div class="col-md-6">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Area Chart
								</div>
								<p class="mg-b-20">Basic Charts Of Xino Template.</p>
								<div class="morris-wrapper-demo" id="morrisArea2"></div>
							</div>
						</div>
					</div><!-- col-6 -->
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-md-6">
						<div class="card mg-b-md-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Donut Chart
								</div>
								<p class="mg-b-20">Basic Charts Of Xino Template.</p>
								<div class="morris-donut-wrapper-demo" id="morrisDonut1"></div>
							</div>
						</div>
					</div><!-- col-6 -->
					<div class="col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Donut Chart
								</div>
								<p class="mg-b-20">Basic Charts Of Xino Template.</p>
								<div class="morris-donut-wrapper-demo" id="morrisDonut2"></div>
							</div>
						</div>
					</div><!-- col-6 -->
				</div>
				<!-- row closed -->

@endsection

@section('script')

		<!-- Datepicker js -->
        <script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

		<!-- Select2 js-->
        <script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!-- Internal Morris js -->
		<script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/morris.js/morris.min.js')}}"></script>

		<!-- Internal Chart Morris js -->
		<script src="{{URL::asset('assets/js/chart.morris.js')}}"></script>

@endsection