@extends('layouts.app')

@section('style')

		<!-- Internal Nice-select css  -->
		<link href="{{URL::asset('assets/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet"/>

@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Advanced ui</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Blog</span>
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
					<div class="col-xl-4 col-md-4">
						<div class="card custom-card">
							<img class="card-img-top w-100" src="{{URL::asset('assets/img/photos/4.jpg')}}" alt="">
							<div class="card-body">
								<h4 class="card-title">Blog Title</h4>
								<p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa. </p>
								<a class="btn ripple btn-primary" href="#">Read More<i class="fe fe-arrow-right ml-1"></i></a>
							</div>
						 </div>
					</div>
					<div class="col-xl-4 col-md-4">
						<div class="card custom-card">
							<img class="card-img-top w-100" src="{{URL::asset('assets/img/photos/2.jpg')}}" alt="">
							<div class="card-body">
								<h4 class="card-title">Blog Title</h4>
								<p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa. </p>
								<a class="btn ripple btn-primary" href="#">Read More<i class="fe fe-arrow-right ml-1"></i></a>
							</div>
						 </div>
					</div>
					<div class="col-xl-4 col-md-4">
						<div class="card custom-card">
							<img class="card-img-top w-100" src="{{URL::asset('assets/img/photos/3.jpg')}}" alt="">
							<div class="card-body">
								<h4 class="card-title">Blog Title</h4>
								<p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa. </p>
								<a class="btn ripple btn-primary" href="#">Read More<i class="fe fe-arrow-right ml-1"></i></a>
							</div>
						 </div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-xl-4 col-md-4">
						<div class="card custom-card text-center">
							<img class="card-img-top w-100" src="{{URL::asset('assets/img/photos/1.jpg')}}" alt="">
							<div class="card-body">
								<h4 class="card-title">Blog Title</h4>
								<p class="card-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<a class="btn ripple btn-outline-secondary btn-sm" href="#">Read More </a>
							</div>
						 </div>
					</div>
					<div class="col-xl-4 col-md-4">
						<div class="card custom-card text-center">
							<img class="card-img-top w-100" src="{{URL::asset('assets/img/photos/5.jpg')}}" alt="">
							<div class="card-body">
								<h4 class="card-title">Blog Title</h4>
								<p class="card-text"> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<a class="btn ripple btn-outline-secondary btn-sm" href="#">Read More</a>
							</div>
						 </div>
					</div>
					<div class="col-xl-4 col-md-4">
						<div class="card custom-card text-center">
							<img class="card-img-top w-100" src="{{URL::asset('assets/img/photos/6.jpg')}}" alt="">
							<div class="card-body">
								<h4 class="card-title">Blog Title</h4>
								<p class="card-text"> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<a class="btn ripple btn-outline-secondary btn-sm" href="#">Read More</a>
							</div>
						 </div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-xl-3 col-lg-6  col-sm-6">
						<div class="card custom-card">
							<img class="card-img-top w-100 w-100" src="{{URL::asset('assets/img/photos/7.jpg')}}" alt="">
							<div class="card-body">
								<a href="#"><h4 class="card-title">Blog Title</h4></a>
								<p class="card-text mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						 </div>
					</div>
					<div class="col-xl-3 col-lg-6  col-sm-6">
						<div class="card custom-card">
							<img class="card-img-top w-100 w-100" src="{{URL::asset('assets/img/photos/8.jpg')}}" alt="">
							<div class="card-body">
								<a href="#"><h4 class="card-title">Blog Title</h4></a>
								<p class="card-text mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						 </div>
					</div>
					<div class="col-xl-3 col-lg-6  col-sm-6">
						<div class="card custom-card">
							<img class="card-img-top w-100 w-100" src="{{URL::asset('assets/img/photos/9.jpg')}}" alt="">
							<div class="card-body">
								<a href="#"><h4 class="card-title">Blog Title</h4></a>
								<p class="card-text mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						 </div>
					</div>
					<div class="col-xl-3 col-lg-6  col-sm-6">
						<div class="card custom-card">
							<img class="card-img-top w-100 w-100" src="{{URL::asset('assets/img/photos/10.jpg')}}" alt="">
							<div class="card-body">
								<a href="#"><h4 class="card-title">Blog Title</h4></a>
								<p class="card-text mb-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						 </div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-lg-6">
						<div class="card card-aside custom-card">
							<a href="#" class="card-aside-column  cover-image" data-image-src="{{URL::asset('assets/img/photos/11.jpg')}}" style="background: url'(&quot;{{URL::asset('assets/img/photos/11.jpg')}}&quot;)' center center;"></a>
							<div class="card-body d-flex flex-column">
								<h4><a href="#" class="card-title">Blog Title</a></h4>
								<div class="">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
								<div class="d-flex align-items-center pt-3 mt-auto">
									<div class="main-img-user avatar-sm mr-3">
										<img src="{{URL::asset('assets/img/faces//1.jpg')}}" class="w-10 rounded-circle" alt="avatar-img">
									</div>
									<div>
										<a href="" class="text-default">Alica Nestle</a>
										<small class="d-block text-muted">15 mintues ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="far fa-heart mr-1"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="far fa-thumbs-up"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="card card-aside custom-card">
							<div class="card-body d-flex flex-column">
								<h4><a href="#" class="card-title">Blog Title</a></h4>
								<div class="">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
								<div class="d-flex align-items-center pt-3 mt-auto">
									<div class="main-img-user avatar-sm mr-3">
										<img src="{{URL::asset('assets/img/faces//2.jpg')}}" class="w-10 rounded-circle" alt="avatar-img">
									</div>
									<div>
										<a href="" class="text-default">Alica Nestle</a>
										<small class="d-block text-muted">15 mintues ago</small>
									</div>
									<div class="ml-auto text-muted">
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="far fa-heart mr-1"></i></a>
										<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="far fa-thumbs-up"></i></a>
									</div>
								</div>
							</div>
							<a href="#" class="card-aside-column  cover-image" data-image-src="{{URL::asset('assets/img/photos/13.jpg')}}" style="background: url'(&quot;{{URL::asset('assets/img/photos/13.jpg')}}&quot;)' center center;"></a>
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
        
		<!-- Internal Nice-select js-->
		<script src="{{URL::asset('assets/plugins/jquery-nice-select/js/jquery.nice-select.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/jquery-nice-select/js/nice-select.js')}}"></script>

@endsection