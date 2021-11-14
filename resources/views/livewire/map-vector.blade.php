@extends('layouts.app')

@section('style')

		<!--  Internal jqvmap Css-->
		<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">

@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Maps</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Vector maps</span>
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
						<div class="card mg-b-20" id="map">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Vector Map: World
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in your website applications.</p>
								<div class="ht-300" id="vmap"></div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card mg-b-20" id="map1">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Vector Map: Canada
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in your website applications.</p>
								<div class="ht-300" id="vmap3"></div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card mg-b-20" id="map2">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Vector Map: USA
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in your website applications.</p>
								<div class="ht-300" id="vmap2"></div>
							</div><!-- col-->
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card mg-b-20" id="map6">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Vector Map: Germany
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in your website applications.</p>
								<div class="ht-300" id="vmap7"></div>
							</div><!-- col-->
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card mg-b-20" id="map7">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Vector Map: Russia
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in your website applications.</p>
								<div class="ht-300" id="vmap8"></div>
							</div><!-- col-->
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card" id="map8">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Vector Map: France
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in your website applications.</p>
								<div class="ht-300" id="vmap9"></div>
							</div><!-- col-->
						</div>
					</div>
				</div>
				<!-- /row -->

@endsection

@section('script')

		<!-- Internal Vector-maps js -->
		<script src="{{URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.world.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.canada.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.algeria.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.argentina.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.europe.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.germany.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.russia.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.france.js')}}"></script>
		<script src="{{URL::asset('assets/js/vector-map.js')}}"></script>

		<!-- Internal Vector-sampledata js -->
		<script src="{{URL::asset('assets/js/jquery.vmap.sampledata.js')}}"></script>

@endsection