@extends('layouts.app')

@section('style')

		<!-- Select2 css -->
		<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex"><h4 class="content-title mb-0 my-auto">Mail</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Read-Mail</span></div>
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

				<!-- row opened -->
				<div class="row row-sm">
					<!-- Col -->
					<div class="col-lg-4 col-xl-3">
						<div class="card mg-b-20 p-3">
							<div class="main-content-left main-content-left-mail card-body">
								<a class="btn btn-primary btn-compose" href="" id="btnCompose">Compose</a>
								<div class="main-mail-menu">
									<nav class="nav main-nav-column mg-b-20">
										<a class="nav-link" href=""><i class="typcn typcn-mail"></i> Inbox <span>18</span></a>
										<a class="nav-link" href=""><i class="typcn typcn-star-outline"></i> Starred <span>8</span></a>
										<a class="nav-link" href=""><i class="typcn typcn-stopwatch"></i> Snoozed <span>6</span></a>
										<a class="nav-link" href=""><i class="typcn typcn-bookmark"></i> Important <span>15</span></a>
										<a class="nav-link" href=""><i class="typcn typcn-arrow-forward-outline"></i> Sent Mail <span>24</span></a>
										<a class="nav-link" href=""><i class="typcn typcn-pen"></i> Drafts <span>2</span></a>
										<a class="nav-link" href=""><i class="typcn typcn-cancel-outline"></i> Spam <span>32</span></a>
										<a class="nav-link" href=""><i class="typcn typcn-message"></i> Chats <span>14</span></a>
										<a class="nav-link" href=""><i class="typcn typcn-folder-add"></i> All Mail <span>652</span></a>
										<a class="nav-link" href=""><i class="typcn typcn-contacts"></i> Contacts <span>547</span></a>
										<a class="nav-link" href=""><i class="typcn typcn-trash"></i> Trash <span>365</span></a>
									</nav>
									<label class="main-content-label main-content-label-sm">Label</label>
									<nav class="nav main-nav-column mg-b-20">
										<a class="nav-link" href="#"><i class="typcn typcn-folder"></i> Social <span>65</span></a>
										<a class="nav-link" href="#"><i class="typcn typcn-folder"></i> Promotions <span>45</span></a>
										<a class="nav-link" href="#"><i class="typcn typcn-folder"></i> Updates <span>35</span></a>
									</nav>
									<label class="main-content-label main-content-label-sm">Tags</label>
									<nav class="nav main-nav-column mg-b-20">
										<a class="nav-link" href="#"><i class="typcn typcn-social-twitter-circular"></i> Twitter <span>10</span></a>
										<a class="nav-link" href="#"><i class="typcn typcn-social-facebook-circular"></i> Facebook <span>15</span></a>
										<a class="nav-link" href="#"><i class="typcn typcn-social-instagram-circular"></i> Instagram <span>18</span></a>
										<a class="nav-link" href="#"><i class="typcn typcn-social-github-circular"></i> Github <span>36</span></a>
										<a class="nav-link" href="#"><i class="typcn typcn-social-google-plus-circular"></i> Google <span>12</span></a>
									</nav>
									<label class="main-content-label main-content-label-sm">Settings</label>
									<nav class="nav main-nav-column">
										<a class="nav-link active" href="{{url('app-mail-settings')}}">Email Settings</a>
										<a class="nav-link" href="{{url('app-mail-information')}}">Account Information</a>
									</nav>
								</div><!-- main-mail-menu -->
							</div>
						</div>
					</div>
					<!-- /Col -->
					<div class="col-lg-8 col-xl-9 col-md-12 col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="email-media">
									<div class="mt-0 d-sm-flex">
										<img class="mr-2 rounded-circle avatar-xl" src="{{URL::asset('assets/img/faces/6.jpg')}}" alt="avatar">
										<div class="media-body">
											<div class="float-right d-none d-md-flex fs-15">
												<small class="mr-3">Sep 13 , 2019 12:45 pm</small>
												<small class="mr-3"><i class="fe fe-star text-dark" data-toggle="tooltip" title="" data-original-title="Rated"></i></small>
												<small class="mr-3"><i class="fa fa-reply text-dark" data-toggle="tooltip" title="" data-original-title="Reply"></i></small>
												<div class="mr-3">
													<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-horizontal text-dark" data-toggle="tooltip" title="" data-original-title="View more"></i></a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#">Reply</a>
														<a class="dropdown-item" href="#">Report Spam</a>
														<a class="dropdown-item" href="#">Delete</a>
														<a class="dropdown-item" href="#">Show Original</a>
														<a class="dropdown-item" href="#">Print</a>
														<a class="dropdown-item" href="#">Filter</a>
													</div>
												</div>
											</div>
											<div class="media-title text-dark font-weight-bold mt-3">Alica Nestle <span class="text-muted">( alicnestle@gmail.com )</span></div>
											<p class="mb-0">to Adam Cotter ( adamcotter@gmail.com ) </p>
											<small class="mr-2 d-md-none">Dec 13 , 2018 12:45 pm</small>
											<small class="mr-2 d-md-none"><i class="fe fe-star text-dark" data-toggle="tooltip" title="" data-original-title="Rated"></i></small>
											<small class="mr-2 d-md-none"><i class="fa fa-reply text-dark" data-toggle="tooltip" title="" data-original-title="Reply"></i></small>
										</div>
									</div>
								</div>
								<div class="eamil-body mt-5">
									<h6>Hi Sir/Madam</h6>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
									<p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
									<p> Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?</p>
									<p class="mb-0">Thanking you Sir/Madam</p>
									<hr>
									<div class="email-attch">
										<div class="float-right">
											<a href="#"><i class="fa fa-download text-dark" data-toggle="tooltip" title="" data-original-title="Download"></i></a>
										</div>
										<p>3 Attachments<a href="#"> View All Images</a></p>
										<div class="emai-img">
											<div class="d-sm-flex">
												<div class=" m-2">
													<a href="#"><img class="wd-150 mb-2" src="{{URL::asset('assets/img/photos/1.jpg')}}" alt="placeholder image"></a>
													<h6 class="mb-3 mb-lg-0">1.jpg <small class="text-muted">12kb</small></h6>
												</div>
												<div class="m-2">
													<a href="#"><img class="wd-150 mb-2" src="{{URL::asset('assets/img/photos/2.jpg')}}" alt="placeholder image"></a>
													<h6 class="mb-3 mb-lg-0">2.jpg <small class="text-muted">18kb</small></h6>
												</div>
												<div class="m-2">
													<a href="#"><img class="wd-150 mb-2" src="{{URL::asset('assets/img/photos/3.jpg')}}" alt="placeholder image"></a>
													<h6>3.jpg <small class="text-muted">21kb</small></h6>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-footer">
								<a class="btn btn-primary mt-1 mb-1" href="#"><i class="fa fa-reply"></i> Reply</a>
								<a class="btn btn-info mt-1 mb-1" href="#"><i class="fa fa-share"></i> Forward</a>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->

@endsection

@section('script')

		<!-- Sparkline js -->
		<script src="{{URL::asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

		<!-- Internal Raphael js -->
		<script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>
        
		<!-- select2.min js -->
		<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
		<script src="{{URL::asset('assets/js/select2.js')}}"></script>

@endsection