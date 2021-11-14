@extends('layouts.app')

@section('style')

		<!-- Font Awesome -->
		<link href="{{URL::asset('assets/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">

		<!-- Bootstrap -->
		<link href="{{URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

		<!--  Internal Notify -->
		<link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>

		<!-- Internal treeview -->
        <link href="{{URL::asset('assets/plugins/treeview/treeview.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Apps</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Notifications</span>
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
					<div class="col-md-12">
						<!-- div -->
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Position Notification
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div class="example border-0 p-0">
									<div class="btn-list">
										<button onclick="not1()" class="btn btn-light mg-t-5">Top</button>
										<button onclick="not2()" class="btn btn-light mg-t-5">Center</button>
										<button onclick="not3()" class="btn btn-light mg-t-5">Left</button>
										<button onclick="not4()" class="btn btn-light mg-t-5">Top Fullwidth</button>
										<button onclick="not5()" class="btn btn-light mg-t-5">Right</button>
										<button onclick="not51()" class="btn btn-light mg-t-5">Bottom</button>
									</div>
								</div>
							</div>
						</div>
						<!-- div -->

						<!-- div -->
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Notification Types
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div class="example border-0 p-0">
									<div class="btn-list">
										<button onclick="not6()" class="btn btn-primary mg-t-5">Primary</button>
										<button onclick="not7()" class="btn btn-success mg-t-5">Success</button>
										<button onclick="not8()" class="btn btn-danger mg-t-5">Error</button>
										<button onclick="not9()" class="btn btn-warning mg-t-5">Warning</button>
										<button onclick="not10()" class="btn btn-info mg-t-5">Info</button>
										<button onclick="not11()" class="btn btn-danger mg-t-5">Fixed Error</button>
										<button onclick="not12()" class="btn btn-dark mg-t-5">Opacity</button>
									</div>
								</div>
							</div>
						</div>
						<!-- div -->

						<!-- div -->
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Notification Styles
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div class="example border-0 p-0">
									<div class="btn-list">
										<button onclick="not13()" class="btn btn-primary mg-t-5">Mutiple lines</button>
										<button onclick="not14()" class="btn btn-primary mg-t-5">Fade Animation</button>
										<button onclick="not15()" class="btn btn-primary mg-t-5">Customize Background</button>
										<button onclick="not16()" class="btn btn-primary mg-t-5">Timeout</button>
									</div>
								</div>
							</div>
						</div>
						<!-- div -->

						<!-- div -->
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Call Back Notification
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								<div class="example border-0 p-0">
									<div class="btn-list">
										<button onclick="not17()" class="btn btn-primary">Call Back</button>
										<button onclick="not18()" class="btn btn-primary">Call Back 2</button>
									</div>
								</div>
							</div>
						</div>
						<!-- div -->
					</div>
				</div>
				<!-- row -->

@endsection

@section('script')

		<!-- Perfect-scrollbar js -->
		<script src="{{URL::asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

		<!-- Internal Treeview js -->
		<script src="{{URL::asset('assets/plugins/treeview/treeview.js')}}"></script>

		<!-- Internal Notify js -->
		<script src="{{URL::asset('assets/plugins/notify/js/notifIt.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/notify/js/notifit-custom.js')}}"></script>

@endsection