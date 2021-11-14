@extends('layouts.app')

@section('style')

		<!--  Internal leaflet-map css -->
		<link href="{{URL::asset('assets/plugins/leaflet/leaflet.css')}}" rel="stylesheet">

@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Maps</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Mapel maps</span>
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
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Basic
								</div>
								<p class="mg-b-20">A default map style by Leaflet Maps.</p>
								<div class="ht-300" id="leaflet1"></div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									With Popup
								</div>
								<p class="mg-b-20">Popups are usually used when you want to attach some information to a map.</p>
								<div class="ht-300" id="leaflet2"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Map with circle
								</div>
								<p class="mg-b-20">Adding a circle is the same (except for specifying the radius in meters as a second argument), but lets you control how it looks by passing options as the last argument when creating the object.</p>
								<div class="ht-200 ht-sm-300 ht-md-400 mb-0" id="leaflet3"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

@endsection

@section('script')

		<!-- Internal Leaflet-maps js -->
		<script src="{{URL::asset('assets/plugins/leaflet/leaflet.js')}}"></script>
		<script src="{{URL::asset('assets/js/map-leafleft.js')}}"></script>

@endsection