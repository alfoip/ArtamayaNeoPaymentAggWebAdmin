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
							<h4 class="content-title mb-0 my-auto">Elements</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Tooltip</span>
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
						<!-- div -->
						<div class="card mg-b-20" id="Tooltip">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Default Tooltip
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in your website applications.</p>
								<div class="main-content-label main-content-label-sm mg-b-10">
									Static Example
								</div>
								<div class="tooltip-static-demo mg-b-20">
									<div class="row row-sm">
										<div class="col-sm-6 col-lg-3">
											<div class="tooltip bs-tooltip-top" role="tooltip">
												<div class="arrow"></div>
												<div class="tooltip-inner">
													Tooltip on the top
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
											<div class="tooltip bs-tooltip-bottom" role="tooltip">
												<div class="arrow"></div>
												<div class="tooltip-inner">
													Tooltip on the bottom
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
											<div class="tooltip bs-tooltip-left" role="tooltip">
												<div class="arrow"></div>
												<div class="tooltip-inner">
													Tooltip on the left
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
											<div class="tooltip bs-tooltip-right" role="tooltip">
												<div class="arrow"></div>
												<div class="tooltip-inner">
													Tooltip on the right
												</div>
											</div>
										</div>
									</div>
								</div><!-- tooltip-static-demo -->
								<div class="main-content-label main-content-label-sm mg-b-10">
									Example
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="row row-sm tx-center">
											<div class="col-sm-6 col-lg-3">
												<button class="btn btn-primary" data-placement="top" data-toggle="tooltip" title="Tooltip on top" type="button">Hover me</button>
											</div>
											<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
												<button class="btn btn-primary" data-placement="bottom" data-toggle="tooltip" title="Tooltip on bottom" type="button">Hover me</button>
											</div>
											<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
												<button class="btn btn-primary" data-placement="left" data-toggle="tooltip" title="Tooltip on left" type="button">Hover me</button>
											</div>
											<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
												<button class="btn btn-primary" data-placement="right" data-toggle="tooltip" title="Tooltip on right" type="button">Hover me</button>
											</div>
										</div>
									</div>

<figure class="highlight mb-0" id="element1"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="row row-sm tx-center">
	<div class="col-sm-6 col-lg-3">
		<button class="btn btn-primary" data-placement="top" data-toggle="tooltip" title="Tooltip on top" type="button">Hover me</button>
	</div>
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
		<button class="btn btn-primary" data-placement="bottom" data-toggle="tooltip" title="Tooltip on bottom" type="button">Hover me</button>
	</div>
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
		<button class="btn btn-primary" data-placement="left" data-toggle="tooltip" title="Tooltip on left" type="button">Hover me</button>
	</div>
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
		<button class="btn btn-primary" data-placement="right" data-toggle="tooltip" title="Tooltip on right" type="button">Hover me</button>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element1"><i class="fa fa-clipboard"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!-- /div -->

						<!--div-->
						<div class="card mg-b-20" id="Tooltip2">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Colored Tooltip
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in your website applications.</p>
								<div class="main-content-label main-content-label-sm mg-b-10">
									Static Example
								</div>
								<div class="tooltip-static-demo mg-b-20">
									<div class="row row-sm">
										<div class="col-sm-6 col-lg-3">
											<div class="tooltip tooltip-primary bs-tooltip-top" role="tooltip">
												<div class="arrow"></div>
												<div class="tooltip-inner">
													Tooltip on the top
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
											<div class="tooltip tooltip-primary bs-tooltip-bottom" role="tooltip">
												<div class="arrow"></div>
												<div class="tooltip-inner">
													Tooltip on the bottom
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
											<div class="tooltip tooltip-primary bs-tooltip-left" role="tooltip">
												<div class="arrow"></div>
												<div class="tooltip-inner">
													Tooltip on the left
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
											<div class="tooltip tooltip-primary bs-tooltip-right" role="tooltip">
												<div class="arrow"></div>
												<div class="tooltip-inner">
													Tooltip on the right
												</div>
											</div>
										</div>
									</div>
								</div><!-- tooltip-static-demo -->
								<div class="main-content-label main-content-label-sm mg-b-10">
									Example
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="bg-gray-200 pd-20">
											<div class="row row-sm tx-center">
											<div class="col-sm-6 col-lg-3">
												<button class="btn btn-primary" data-placement="top" data-toggle="tooltip-primary" title="Tooltip on top" type="button">Hover me</button>
											</div>
											<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
												<button class="btn btn-primary" data-placement="bottom" data-toggle="tooltip-primary" title="Tooltip on bottom" type="button">Hover me</button>
											</div>
											<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
												<button class="btn btn-primary" data-placement="left" data-toggle="tooltip-primary" title="Tooltip on left" type="button">Hover me</button>
											</div>
											<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
												<button class="btn btn-primary" data-placement="right" data-toggle="tooltip-primary" title="Tooltip on right" type="button">Hover me</button>
											</div>
										</div>
										</div>
									</div>

<figure class="highlight mb-0" id="element2"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="row row-sm tx-center">
	<div class="col-sm-6 col-lg-3">
		<button class="btn btn-primary" data-placement="top" data-toggle="tooltip-primary" title="Tooltip on top" type="button">Hover me</button>
	</div>
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
		<button class="btn btn-primary" data-placement="bottom" data-toggle="tooltip-primary" title="Tooltip on bottom" type="button">Hover me</button>
	</div>
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
		<button class="btn btn-primary" data-placement="left" data-toggle="tooltip-primary" title="Tooltip on left" type="button">Hover me</button>
	</div>
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
		<button class="btn btn-primary" data-placement="right" data-toggle="tooltip-primary" title="Tooltip on right" type="button">Hover me</button>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element2"><i class="fa fa-clipboard"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
					</div>
					<!--/div-->
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