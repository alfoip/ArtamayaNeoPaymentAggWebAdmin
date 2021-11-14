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
							<h4 class="content-title mb-0 my-auto">Charts</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Peity-chart</span>
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
					<div class="col-lg-12">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Line Chart
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div class="d-sm-flex">
									<div>
										<span class="peity-line" data-peity='{ "fill": false, "stroke": "#285cf7", "height": 70, "width": 200 }'>10,4,4,7,5,9,10,1,4,4,7,5,9,10</span>
									</div>
									<div class="mg-sm-l-30 mg-t-20 mg-sm-t-0">
										<span class="peity-line" data-peity='{ "fill": false, "stroke": "#f10075", "height": 70, "width": 200 }'>-10,-4,-4,-7,-5,-9,-10,-1,-4,-4,-7,-5,-9,-10</span>
									</div>
								</div>
							</div>
						</div>
					</div><!-- col-->
					<div class="col-lg-12">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Area Chart
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div class="d-sm-flex">
									<div>
										<span class="peity-line" data-peity='{ "fill": "rgba(86, 70, 255,.2)", "stroke": "#285cf7", "height": 70, "width": 200 }'>10,4,4,7,5,9,10,1,4,4,7,5,9,10</span>
									</div>
									<div class="mg-sm-l-30 mg-t-20 mg-sm-t-0">
										<span class="peity-line" data-peity='{ "fill": "rgba(241,0,117,.2)", "stroke": "#f10075", "height": 70, "width": 200 }'>-10,-4,-4,-7,-5,-9,-10,-1,-4,-4,-7,-5,-9,-10</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row row-sm">
					<div class="col-lg-12">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Bar Chart
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div class="d-md-flex">
									<div class="mg-r-10 mg-t-10 wd-250 border pd-x-20 pd-t-20 bg-light">
										<span class="peity-bar" data-peity='{ "fill": ["#285cf7"], "height": 70, "width": 200 }'>10,4,4,7,5,9,10,5,4,4,7,5,9,10</span>
									</div>
									<div class="mg-r-10 mg-t-10 wd-250 border pd-x-20 pd-t-20 bg-light">
										<span class="peity-bar" data-peity='{ "fill": ["#285cf7","#560bd0"], "height": 70, "width": 200 }'>10,4,4,7,5,9,10,5,4,4,7,5,9,10</span>
									</div>
								</div>
								<div class="d-md-flex">
									<div class="mg-r-10 mg-t-10 wd-250 border pd-x-20 pd-b-20 bg-light">
										<span class="peity-bar" data-peity='{ "fill": ["#560bd0"], "height": 70, "width": 200 }'>-10,-12,-12,-7,-5,-9,-10,-5,-13,-12,-7,-5,-9,-10</span>
									</div>
									<div class="mg-r-10 mg-t-10 wd-250 border pd-x-20 pd-b-20 bg-light">
										<span class="peity-bar" data-peity='{ "fill": ["#560bd0","#f10075"], "height": 70, "width": 200 }'>-10,-12,-12,-7,-5,-9,-10,-5,-13,-12,-7,-5,-9,-10</span>
									</div>
									<div class="mg-r-10 mg-t-10 wd-250 border pd-x-20 pd-y-10 bg-light">
										<span class="peity-bar" data-peity='{ "fill": ["#285cf7","#f10075"], "height": 70, "width": 200 }'>10,-4,4,5,-7,5,-9,-5,10,-5,4,-4,7,-5,9,-10,9,10</span>
									</div>
								</div>
							</div>
						</div>
					</div><!-- col-->
					<div class="col-lg-12">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Pie Chart
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div class="d-md-flex">
									<div class="mg-r-20 mg-t-10">
										<span class="peity-pie" data-peity='{ "fill": ["#285cf7", "rgba(144, 147, 187,0.15)"], "height": 70, "width": 70 }'>1/5</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-pie" data-peity='{ "fill": ["#8500ff", "rgba(144, 147, 187,0.15)"], "height": 70, "width": 70 }'>226/360</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-pie" data-peity='{ "fill": ["#f10075", "rgba(144, 147, 187,0.15)"], "height": 70, "width": 70 }'>0.52/1.561</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-pie" data-peity='{ "fill": ["#3bb001", "rgba(144, 147, 187,0.15)"], "height": 70, "width": 70 }'>1,4</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-pie" data-peity='{ "fill": ["#dc3545", "rgba(144, 147, 187,0.15)"], "height": 70, "width": 70 }'>226,134</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-pie" data-peity='{ "fill": ["#3db4ec", "rgba(144, 147, 187,0.15)"], "height": 70, "width": 70 }'>0.52,1.041</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-pie" data-peity='{ "fill": ["#285cf7","#8500ff","#f10075"], "height": 70, "width": 70 }'>10,4,4</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Donut Chart
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div class="d-md-flex">
									<div class="mg-r-20 mg-t-10">
										<span class="peity-donut" data-peity='{ "fill": ["#285cf7", "rgba(144, 147, 187,0.15)"], "height": 70, "width": 70 }'>1/5</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-donut" data-peity='{ "fill": ["#8500ff", "rgba(144, 147, 187,0.15)"], "height": 70, "width": 70 }'>226/360</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-donut" data-peity='{ "fill": ["#f10075", "rgba(144, 147, 187,0.15)"], "height": 70, "width": 70 }'>0.52/1.561</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-donut" data-peity='{ "fill": ["#3bb001", "rgba(144, 147, 187,0.15)"], "height": 70, "width": 70 }'>1,4</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-donut" data-peity='{ "fill": ["#dc3545", "rgba(144, 147, 187,0.15)"], "height": 70, "width": 70 }'>226,134</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-donut" data-peity='{ "fill": ["#3db4ec", "rgba(144, 147, 187,0.15)"], "height": 70, "width": 70 }'>0.52,1.041</span>
									</div>
									<div class="mg-r-20 mg-t-10">
										<span class="peity-donut" data-peity='{ "fill": ["#285cf7","#8500ff","#f10075"], "height": 70, "width": 70 }'>10,4,4</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->
				<!-- row -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Data Attributes
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div class="d-md-flex">
									<div class="mg-r-20 mg-t-10">
										<div class="">
											<p class="data-attributes">
												<span data-peity='{ "fill": ["#285cf7", "rgba(144, 147, 187,0.15)"], "height": 70, "width": 70, "innerRadius": 10, "radius": 40 }'>1/7</span>
											</p>
										</div>
									</div>
									<div class="mg-r-20 mg-t-10">
										<div class="">
											<p class="data-attributes">
												<span data-peity='{ "fill": ["#8500ff", "rgba(144, 147, 187,0.15)"],"height": 70, "width": 70, "innerRadius": 14, "radius": 36 }'>2/7</span>
											</p>
										</div>
									</div>
									<div class="mg-r-20 mg-t-10">
										<div class="">
											<p class="data-attributes">
												<span data-peity='{ "fill": ["#f10075", "rgba(144, 147, 187,0.15)"], "height": 70, "width": 70, "innerRadius": 16, "radius": 32 }'>3/7</span>
											</p>
										</div>
									</div>
									<div class="mg-r-20 mg-t-10">
										<div class="">
											<p class="data-attributes">
												<span data-peity='{ "fill": ["#3bb001", "rgba(144, 147, 187,0.15)"], "height": 70, "width": 70, "innerRadius": 18, "radius": 28 }'>4/7</span>
											</p>
										</div>
									</div>
									<div class="mg-r-20 mg-t-10">
										<div class="">
											<p class="data-attributes">
												<span data-peity='{ "fill": ["#dc3545", "rgba(144, 147, 187,0.15)"], "height": 70, "width": 70, "innerRadius": 20, "radius": 24 }'>5/7</span>
											</p>
										</div>
									</div>
									<div class="mg-r-20 mg-t-10">
										<div class="">
											<p class="data-attributes">
												<span data-peity='{ "fill": ["#3db4ec", "rgba(144, 147, 187,0.15)"], "height": 70, "width": 70, "innerRadius": 18, "radius": 20 }'>6/7</span>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Updating Charts
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div class="wd-200">
									<span class="updating-chart" data-peity='{ "fill": ["rgba(86, 70, 255,.4)"],"stroke":["#285cf7]}'>5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span>
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

		<!-- jQuery Peity js -->
        <script src="{{URL::asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>

		<!-- Select2 js-->
        <script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!-- Internal Peity js -->
		<script src="{{URL::asset('assets/js/chart.peity.js')}}"></script>

@endsection