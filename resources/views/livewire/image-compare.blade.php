@extends('layouts.app')

@section('style')

		<!-- Internal Images-Comparsion css -->
		<link href="{{URL::asset('assets/plugins/images-comparsion/twentytwenty.css')}}" rel="stylesheet" />

@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Apps</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Image-comparison</span>
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
				</div><!-- breadcrumb -->

				<!-- Row -->
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Horizontal Image Comparision
								</div>
								<p class="mg-b-20">Example of Redash Horizontal Image Comparision.</p>
								<div class="twentytwenty-container">
									<img src="{{URL::asset('assets/img/photos/compare1.jpg')}}" alt="img" />
									<img src="{{URL::asset('assets/img/photos/compare2.jpg')}}" alt="img" />
								</div>
							</div>
						</div>
						<!-- div -->

						<!-- div -->
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Vertical Image Comparision
								</div>
								<p class="mg-b-20">Example of Redash Vertical Image Comparision.</p>
								<div class="twentytwenty-container" data-orientation="vertical">
									<img src="{{URL::asset('assets/img/photos/compare1.jpg')}}" alt="img" />
									<img src="{{URL::asset('assets/img/photos/compare2.jpg')}}" alt="img" />
								</div>
							</div>
						</div>
						<!-- div -->
					</div>
				</div>

@endsection

@section('script')

		<!-- Datepicker js -->
        <script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
        
		<!-- Select2 js-->
        <script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
        
		<!-- Internal Images-Comparsion js -->
		<script src="{{URL::asset('assets/plugins/images-comparsion/jquery.twentytwenty.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/images-comparsion/jquery.event.move.js')}}"></script>
		<script src="{{URL::asset('assets/js/image-comparision.js')}}"></script>

@endsection