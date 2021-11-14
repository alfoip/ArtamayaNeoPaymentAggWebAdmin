@extends('layouts.app')

@section('style')

		<!--- Owl Carousel css-->
		<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">

		<!-- Internal RatingThemes css-->
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/ratings.css')}}">
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/themes/bars-1to10.css')}}">
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/themes/bars-movie.css')}}">
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/themes/bars-square.css')}}">
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/themes/bars-pill.css')}}">
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/themes/bars-reversed.css')}}">
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/themes/bars-horizontal.css')}}">
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/themes/fontawesome-stars.css')}}">
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/themes/css-stars.css')}}">
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/themes/bootstrap-stars.css')}}">
		<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/themes/fontawesome-stars-o.css')}}">

@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Advanced ui</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Rating</span>
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
					<div class="col-sm-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Static Star Rating</h6>
								</div>
								<div class="static-rate text-center tx-30">
									<i class="fa fa-star text-warning" aria-hidden="true"></i>
									<i class="fa fa-star text-warning" aria-hidden="true"></i>
									<i class="fa fa-star text-warning" aria-hidden="true"></i>
									<i class="fa fa-star text-warning" aria-hidden="true"></i>
									<i class="fa fa-star text-warning" aria-hidden="true"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Static Heart Rating</h6>
								</div>
								<div class="static-rate text-center tx-30">
									<i class="fa fa-heart text-danger" aria-hidden="true"></i>
									<i class="fa fa-heart text-danger" aria-hidden="true"></i>
									<i class="fa fa-heart text-danger" aria-hidden="true"></i>
									<i class="fa fa-heart text-danger" aria-hidden="true"></i>
									<i class="fa fa-heart text-danger" aria-hidden="true"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-sm-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Star Rating</h6>
								</div>
								<div class="rating-stars block" id="rating">
									<input type="number" readonly="readonly" class="rating-value" name="rating-stars-value" id="rating-stars-value" value="1">
									<div class="rating-stars-container">
										<div class="rating-star">
											<i class="fa fa-star"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-star"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-star"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-star"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-star"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Heart Rating</h6>
								</div>
								<div class="rating-stars block" id="another-rating">
									<input type="number" readonly="readonly" class="rating-value" name="another-rating-stars-value" id="another-rating-stars-value" value="2">
									<div class="rating-stars-container">
										<div class="rating-star">
											<i class="fa fa-heart"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-heart"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-heart"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-heart"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-heart"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-sm-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Multi Star Rating</h6>
								</div>
								<div class="rating-stars block" id="more-rating">
									<input type="number" readonly="readonly" class="rating-value" name="more-rating-stars-value" id="more-rating-stars-value" value="2">
									<div class="rating-stars-container">
										<div class="rating-star">
											<i class="fa fa-star"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-star"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-star"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-star"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-star"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-star"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-star"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-star"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-star"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-star"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Multi Heart Rating</h6>
								</div>
								<div class="rating-stars block" id="another-rating1">
									<input type="number" readonly="readonly" class="rating-value" name="another-rating-stars-value" id="another-rating-stars-value2" value="4">
									<div class="rating-stars-container">
										<div class="rating-star">
											<i class="fa fa-heart"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-heart"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-heart"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-heart"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-heart"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-heart"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-heart"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-heart"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-heart"></i>
										</div>
										<div class="rating-star">
											<i class="fa fa-heart"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-sm-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Bar 1/10 Rating</h6>
								</div>
								<div class="box  box-example-1to10">
									<div class="box-body">
										<select id="example-1to10" name="rating" autocomplete="off">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7" selected="selected">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Opinion rating</h6>
								</div>
								<div class="box box-example-movie">
									<div class="box-body">
										<select id="example-movie" name="rating" autocomplete="off">
											<option value="Bad">Bad</option>
											<option value="Mediocre">Mediocre</option>
											<option value="Good" selected="selected">Good</option>
											<option value="Awesome">Awesome</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-sm-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Square Rating</h6>
								</div>
								<div class="box  box-example-1to10">
									<div class="box box-example-square">
										<div class="box-body">
											<select id="example-square" name="rating" autocomplete="off">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Grade Rating</h6>
								</div>
								<div class="box  box-example-pill">
									<div class="box-body">
										<select id="example-pill" name="rating" autocomplete="off">
											<option value="A">A</option>
											<option value="B">B</option>
											<option value="C">C</option>
											<option value="D">D</option>
											<option value="E">E</option>
											<option value="F">F</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Horizontal Bar Rating</h6>
								</div>
								<div class="box box-large box-example-horizontal">
									<div class="box-body">
										<select id="example-horizontal" name="rating" autocomplete="off">
											<option value="10">10</option>
											<option value="9">9</option>
											<option value="8">8</option>
											<option value="7">7</option>
											<option value="6">6</option>
											<option value="5">5</option>
											<option value="4">4</option>
											<option value="3">3</option>
											<option value="2">2</option>
											<option value="1" selected="selected">1</option>
										</select>
									</div>
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

		<!-- Select2 js-->
		<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/rating/ratings.js')}}"></script>

@endsection