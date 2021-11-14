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
							<h4 class="content-title mb-0 my-auto">Elements</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Spinner</span>
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

				<!-- /row -->
				<div class="row">
					<div class="col-xl-12 col-lg-12">
						<div class="card" id="spinner">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Basic Example</h6>
									<p class="text-muted card-sub-title">It is very easy to customize and it uses in your website applications.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="spinner-border" role="status">
											<span class="sr-only">Loading...</span>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="spinner01"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="spinner-border" role="status">
	<span class="sr-only">Loading...</span>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#spinner01"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="spinner2">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">BORDER SPINNERS</h6>
									<p class="text-muted card-sub-title">Use the border spinners for a lightweight loading indicator..</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div>
											<div class="spinner-border text-primary" role="status">
												<span class="sr-only">Loading...</span>
											</div>
											<div class="spinner-border text-secondary" role="status">
												<span class="sr-only">Loading...</span>
											</div>
											<div class="spinner-border text-success" role="status">
												<span class="sr-only">Loading...</span>
											</div>
											<div class="spinner-border text-danger" role="status">
												<span class="sr-only">Loading...</span>
											</div>
											<div class="spinner-border text-warning" role="status">
												<span class="sr-only">Loading...</span>
											</div>
											<div class="spinner-border text-info" role="status">
												<span class="sr-only">Loading...</span>
											</div>
											<div class="spinner-border text-light" role="status">
												<span class="sr-only">Loading...</span>
											</div>
											<div class="spinner-border text-dark" role="status">
												<span class="sr-only">Loading...</span>
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="spinner02"><pre><code class="language-markup"><script type="html-dashlead/script"><div>
	<div class="spinner-border text-primary" role="status">
		<span class="sr-only">Loading...</span>
	</div>
	<div class="spinner-border text-secondary" role="status">
		<span class="sr-only">Loading...</span>
	</div>
	<div class="spinner-border text-success" role="status">
		<span class="sr-only">Loading...</span>
	</div>
	<div class="spinner-border text-danger" role="status">
		<span class="sr-only">Loading...</span>
	</div>
	<div class="spinner-border text-warning" role="status">
		<span class="sr-only">Loading...</span>
	</div>
	<div class="spinner-border text-info" role="status">
		<span class="sr-only">Loading...</span>
	</div>
	<div class="spinner-border text-light" role="status">
		<span class="sr-only">Loading...</span>
	</div>
	<div class="spinner-border text-dark" role="status">
		<span class="sr-only">Loading...</span>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#spinner02"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="spinner3">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">GROWING SPINNER</h6>
									<p class="text-muted card-sub-title">If you don’t fancy a border spinner, switch to the grow spinner. While it doesn’t technically spin, it does repeatedly grow!</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="spinner-grow" role="status">
											<span class="sr-only">Loading...</span>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="spinner03"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="spinner-grow" role="status">
	<span class="sr-only">Loading...</span>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#spinner03"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="spinner4">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">GROWING Color</h6>
									<p class="text-muted card-sub-title">If you don’t fancy a border spinner, switch to the grow spinner. While it doesn’t technically spin, it does repeatedly grow!</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="spinner-grow text-primary" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow text-secondary" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow text-success" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow text-danger" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow text-warning" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow text-info" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow text-light" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow text-dark" role="status">
											<span class="sr-only">Loading...</span>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="spinner04"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="spinner-grow text-primary" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-secondary" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-success" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-danger" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-warning" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-info" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-light" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow text-dark" role="status">
	<span class="sr-only">Loading...</span>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#spinner04"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="spinner5">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">ALIGNMENT</h6>
									<p class="text-muted card-sub-title">Use flexbox utilities or text alignment utilities to place spinners exactly where you need them in any situation.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="text-center mg-b-20">
											<div class="spinner-border" role="status">
												<span class="sr-only">Loading...</span>
											</div>
										</div>
										<div class="text-right">
											<div class="spinner-border" role="status">
												<span class="sr-only">Loading...</span>
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="spinner05"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="text-center mg-b-20">
	<div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	</div>
</div>
<div class="text-right">
	<div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#spinner05"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="spinner6">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Size</h6>
									<p class="mg-b-20">Add <code>.spinner-border-sm</code> and <code>.spinner-grow-sm</code> to make a smaller spinner that can quickly be used within other components.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="spinner-border spinner-border-sm" role="status">
											<span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow spinner-grow-sm" role="status">
											<span class="sr-only">Loading...</span>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="spinner06"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="spinner-border spinner-border-sm" role="status">
	<span class="sr-only">Loading...</span>
</div>
<div class="spinner-grow spinner-grow-sm" role="status">
	<span class="sr-only">Loading...</span>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#spinner06"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="spinner7">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Button</h6>
									<p class="text-muted card-sub-title">Use spinners within buttons to indicate an action is currently processing or taking place. You may also swap the text out of the spinner element and utilize button text as needed..</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<button class="btn btn-primary" type="button" disabled>
										    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
											<span class="sr-only">Loading...</span>
										</button>
										<button class="btn btn-primary" type="button" disabled>
											<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
										  Loading...
										</button>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="spinner07"><pre><code class="language-markup"><script type="html-dashlead/script"><button class="btn btn-primary" type="button" disabled>
	<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
	<span class="sr-only">Loading...</span>
</button>
<button class="btn btn-primary" type="button" disabled>
	<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
  Loading...
</button></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#spinner07"><i class="fa fa-clipboard"></i></div>
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