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
							<h4 class="content-title mb-0 my-auto">Charts</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ e-charts</span>
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
					<div class="col-lg-6 col-md-12">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Bar Chart
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div id="echart1" class="ht-300"></div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Vertical Bar Chart
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div id="echart3"  class="ht-300"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-lg-6 col-md-12">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Line Chart
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div id="echart2"  class="ht-300"></div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Vertical Line Chart
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div id="echart4"  class="ht-300"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-lg-6 col-md-12">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Data Attributes
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div id="echart5"  class="ht-300"></div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Data Attributes
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div id="echart6"  class="ht-300"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-lg-6 col-md-12">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Data Attributes
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div id="echart7"  class="ht-300"></div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Data Attributes
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div id="echart8"  class="ht-300"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Data Attributes
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div id="index"  class="ht-300"></div>
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

		<!-- Internal Echart Plugin -->
		<script src="{{URL::asset('assets/plugins/echart/echart.js')}}"></script>
		<script src="{{URL::asset('assets/js/echarts.js')}}"></script>

@endsection