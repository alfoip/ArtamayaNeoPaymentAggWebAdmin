@extends('layouts.app')

@section('style')

		<!--- Internal Prism css-->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Elements</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Pagination</span>
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
					<div class="col-xl-12 col-lg-12">
						<div class="card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">BASIC PAGINATION</h6>
									<p class="text-muted card-sub-title">Below are basic pagination navigation.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<ul class="pagination mb-0">
											<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a></li>
											<li class="page-item active"><a class="page-link" href="#">1</a></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item"><a class="page-link" href="#">3</a></li>
											<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a></li>
										 </ul>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination1"><pre><code class="language-markup"><script type="html-dashlead/script"><ul class="pagination">
	<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a></li>
	<li class="page-item active"><a class="page-link" href="#">1</a></li>
	<li class="page-item"><a class="page-link" href="#">2</a></li>
	<li class="page-item"><a class="page-link" href="#">3</a></li>
	<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a></li>
</ul></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#pagination1"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">PAGINATION FOR DARK BACKGROUND</h6>
										<p class="text-muted card-sub-title">Below are basic pagination navigation for dark background.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="pd-20 bg-gray-900">
												<ul class="pagination pagination-dark mb-0 mg-b-0">
													<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a></li>
													<li class="page-item active"><a class="page-link" href="#">1</a></li>
													<li class="page-item"><a class="page-link" href="#">2</a></li>
													<li class="page-item"><a class="page-link" href="#">3</a></li>
													<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a></li>
												</ul>
											 </div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination2"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="pd-20 bg-gray-900">
	<ul class="pagination pagination-dark mg-b-0">
		<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a></li>
		<li class="page-item active"><a class="page-link" href="#">1</a></li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a></li>
	</ul>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#pagination2"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>

							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">COLOR VARIANT PAGINATION</h6>
										<p class="text-muted card-sub-title">Below are the available colored pagination variants..</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="row row-sm">
												<div class="col-sm-6 col-lg-4">
													<ul class="pagination pagination-primary mb-sm-0">
														<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a></li>
														<li class="page-item active"><a class="page-link" href="#">1</a></li>
														<li class="page-item"><a class="page-link" href="#">2</a></li>
														<li class="page-item"><a class="page-link" href="#">3</a></li>
														<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a></li>
													</ul>
												</div><!-- col-4 -->
												<div class="col-sm-6 col-lg-4 mg-sm-t-0">
													<ul class="pagination pagination-success mb-0">
														<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a></li>
														<li class="page-item active"><a class="page-link" href="#">1</a></li>
														<li class="page-item"><a class="page-link" href="#">2</a></li>
														<li class="page-item"><a class="page-link" href="#">3</a></li>
														<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a></li>
													</ul>
												</div><!-- col-4 -->
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination3"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="row row-sm">
	<div class="col-sm-6 col-lg-4">
		<ul class="pagination pagination-primary">
			<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a></li>
			<li class="page-item active"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a></li>
		</ul>
	</div><!-- col-4 -->
	<div class="col-sm-6 col-lg-4 mg-sm-t-0">
		<ul class="pagination pagination-success">
			<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a></li>
			<li class="page-item active"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a></li>
		</ul>
	</div><!-- col-4 -->
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#pagination3"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>

							<div class="card custom-card">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">CIRCLED PAGINATION</h6>
										<p class="text-muted card-sub-title">Below are basic pagination navigation in circle.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<ul class="pagination pagination-circled mb-0">
												<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a></li>
												<li class="page-item active"><a class="page-link" href="#">1</a></li>
												<li class="page-item"><a class="page-link" href="#">2</a></li>
												<li class="page-item"><a class="page-link" href="#">3</a></li>
												<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a></li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination4"><pre><code class="language-markup"><script type="html-dashlead/script"><ul class="pagination pagination-circled mb-0">
	<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a></li>
	<li class="page-item active"><a class="page-link" href="#">1</a></li>
	<li class="page-item"><a class="page-link" href="#">2</a></li>
	<li class="page-item"><a class="page-link" href="#">3</a></li>
	<li class="page-item"><a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a></li>
</ul></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#pagination4"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

@endsection

@section('script')

		<!-- Datepicker js -->
		<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

		<!-- Select2 js-->
		<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!-- Internal Clipboard js-->
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- Internal Prism js-->
		<script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>

@endsection