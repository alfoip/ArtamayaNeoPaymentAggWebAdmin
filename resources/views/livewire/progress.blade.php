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
							<h4 class="content-title mb-0 my-auto">Elements</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Progress</span>
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
						<div class="card" id="progress">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">BASIC PROGRESS</h6>
									<p class="text-muted card-sub-title">A basic progress in all different colors.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="progress mg-b-20">
											<div class="progress-bar wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-20">
											<div class="progress-bar bg-success wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-20">
											<div class="progress-bar bg-warning wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-20">
											<div class="progress-bar bg-danger wd-65p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress">
											<div class="progress-bar bg-indigo wd-75p" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="progress01"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="progress mg-b-20">
	<div class="progress-bar wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress mg-b-20">
	<div class="progress-bar bg-success wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress mg-b-20">
	<div class="progress-bar bg-warning wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress mg-b-20">
	<div class="progress-bar bg-danger wd-65p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
	<div class="progress-bar bg-indigo wd-75p" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#progress01"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="progress2">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">STRIPED PROGRESS</h6>
									<p class="text-muted card-sub-title">A basic progress in all different colors.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="progress mg-b-20">
											<div class="progress-bar progress-bar-striped wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-20">
											<div class="progress-bar progress-bar-striped bg-success wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-20">
											<div class="progress-bar progress-bar-striped bg-warning wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-20">
											<div class="progress-bar progress-bar-striped bg-danger wd-65p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress">
											<div class="progress-bar progress-bar-striped bg-info wd-75p" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="progress02"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="progress mg-b-20">
	<div class="progress-bar progress-bar-striped wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress mg-b-20">
	<div class="progress-bar progress-bar-striped bg-success wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress mg-b-20">
	<div class="progress-bar progress-bar-striped bg-warning wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress mg-b-20">
	<div class="progress-bar progress-bar-striped bg-danger wd-65p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
	<div class="progress-bar progress-bar-striped bg-info wd-75p" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#progress02"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="progress3">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Progress Sizes</h6>
									<p class="text-muted card-sub-title">A basic progress in different sizes.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<span class="tx-uppercase tx-11 d-block mg-b-5">Size Super Extra Small</span>
										<div class="progress mg-b-10">
											<div class="progress-bar ht-2 wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-10">
											<div class="progress-bar bg-success ht-2 wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress">
											<div class="progress-bar bg-danger ht-2 wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Extra Small</span>
										<div class="progress mg-b-10">
											<div class="progress-bar progress-bar-xs wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-10">
											<div class="progress-bar bg-success progress-bar-xs wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress">
											<div class="progress-bar bg-danger progress-bar-xs wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>

										<span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Small</span>
										<div class="progress mg-b-10">
											<div class="progress-bar progress-bar-sm wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-10">
											<div class="progress-bar bg-success progress-bar-sm wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress">
											<div class="progress-bar bg-danger progress-bar-sm wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>

										<span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Normal</span>
										<div class="progress mg-b-10">
											<div class="progress-bar wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-10">
											<div class="progress-bar bg-success wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress">
											<div class="progress-bar bg-danger wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>

										<span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Large</span>
										<div class="progress mg-b-10">
											<div class="progress-bar progress-bar-lg wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress mg-b-10">
											<div class="progress-bar bg-success progress-bar-lg wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<div class="progress">
											<div class="progress-bar bg-danger progress-bar-lg wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
	<!-- Prism Precode -->
<figure class="highlight clip-widget" id="progress03"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="progress mg-b-10">
	<div class="progress-bar ht-2 wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress mg-b-10">
	<div class="progress-bar bg-success ht-2 wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
	<div class="progress-bar bg-danger ht-2 wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Extra Small</span>
<div class="progress mg-b-10">
	<div class="progress-bar progress-bar-xs wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress mg-b-10">
	<div class="progress-bar bg-success progress-bar-xs wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
	<div class="progress-bar bg-danger progress-bar-xs wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Small</span>
<div class="progress mg-b-10">
	<div class="progress-bar progress-bar-sm wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress mg-b-10">
	<div class="progress-bar bg-success progress-bar-sm wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
	<div class="progress-bar bg-danger progress-bar-sm wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Normal</span>
<div class="progress mg-b-10">
	<div class="progress-bar wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress mg-b-10">
	<div class="progress-bar bg-success wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
	<div class="progress-bar bg-danger wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>

<span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Large</span>
<div class="progress mg-b-10">
	<div class="progress-bar progress-bar-lg wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress mg-b-10">
	<div class="progress-bar bg-success progress-bar-lg wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
	<div class="progress-bar bg-danger progress-bar-lg wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#progress03"><i class="fa fa-clipboard"></i></div>
</figure>
	<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="progress04">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">PROGRESS LABEL</h6>
									<p class="text-muted card-sub-title">A basic progress in different sizes.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="progress mg-b-10">
											<div class="progress-bar progress-bar-lg wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
										</div>
										<div class="progress mg-b-10">
											<div class="progress-bar progress-bar-lg bg-success wd-60p" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
										</div>
										<div class="progress">
											<div class="progress-bar progress-bar-lg bg-danger wd-95p" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="progress4"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="progress mg-b-10">
	<div class="progress-bar progress-bar-lg wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
</div>
<div class="progress mg-b-10">
	<div class="progress-bar progress-bar-lg bg-success wd-60p" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
</div>
<div class="progress">
	<div class="progress-bar progress-bar-lg bg-danger wd-95p" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#progress04"><i class="fa fa-clipboard"></i></div>
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