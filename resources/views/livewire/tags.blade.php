@extends('layouts.app')

@section('style')

		<!--- Internal Prism css-->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

		<!--- Internal Inputtags css-->
		<link href="{{URL::asset('assets/plugins/inputtags/inputtags.css')}}" rel="stylesheet">

@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Elements</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Tags</span>
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
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									DEFAULT TAG
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in your website aplication.</p>
								<div class="text-wrap">
									<div class="example">
										<div class="tags">
											<span class="tag">First tag</span>
											<span class="tag">Second tag</span>
											<span class="tag">Third tag</span>
										</div>
									</div>

<figure class="highlight mb-0" id="element01"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="tags">
	<span class="tag">First tag</span>
	<span class="tag">Second tag</span>
	<span class="tag">Third tag</span>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element01"><i class="fa fa-clipboard"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Link Tag
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in your website aplication.</p>
								<div class="text-wrap">
									<div class="example">
										<div class="tags">
											<span class="tag tag-rounded">First tag</span>
											<span class="tag tag-rounded">Second tag</span>
											<span class="tag tag-rounded">Third tag</span>
										</div>
									</div>

<figure class="highlight mb-0" id="element02"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="tags">
	<span class="tag tag-rounded">First tag</span>
	<span class="tag tag-rounded">Second tag</span>
	<span class="tag tag-rounded">Third tag</span>
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element02"><i class="fa fa-clipboard"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Default Tags Addon
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in your website aplication.</p>
								<div class="text-wrap">
									<div class="example">
										<div class="tags">
											<span class="tag tag-default">
												One
												<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
											</span>
											<span class="tag tag-default">
												Two
												<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
											</span>
											<span class="tag tag-default">
												Three
												<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
											</span>
											<span class="tag tag-default">
												Four
												<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
											</span>
										</div>
									</div>

<figure class="highlight mb-0" id="element03"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="tags">
	<span class="tag tag-default">
		One
		<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
	</span>
	<span class="tag tag-default">
		Two
		<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
	</span>
	<span class="tag tag-default">
		Three
		<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
	</span>
	<span class="tag tag-default">
		Four
		<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a>
	</span>
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element03"><i class="fa fa-clipboard"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Colored tags
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in your website aplication.</p>
								<div class="text-wrap">
									<div class="example">
										<div class="tags">
											<span class="tag tag-blue">Blue tag</span>
											<span class="tag tag-azure">Azure tag</span>
											<span class="tag tag-indigo">Indigo tag</span>
											<span class="tag tag-purple">Purple tag</span>
											<span class="tag tag-pink">Pink tag</span>
											<span class="tag tag-red">Red tag</span>
											<span class="tag tag-orange">Orange tag</span>
											<span class="tag tag-yellow">Yellow tag</span>
											<span class="tag tag-lime">Lime tag</span>
											<span class="tag tag-green">Green tag</span>
											<span class="tag tag-teal">Teal tag</span>
											<span class="tag tag-cyan">Cyan tag</span>
											<span class="tag tag-gray">Gray tag</span>
											<span class="tag tag-gray-dark">Dark gray tag</span>
										</div>
									</div>

<figure class="highlight mb-0" id="element04"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="tags">
	<span class="tag tag-blue">Blue tag</span>
	<span class="tag tag-azure">Azure tag</span>
	<span class="tag tag-indigo">Indigo tag</span>
	<span class="tag tag-purple">Purple tag</span>
	<span class="tag tag-pink">Pink tag</span>
	<span class="tag tag-red">Red tag</span>
	<span class="tag tag-orange">Orange tag</span>
	<span class="tag tag-yellow">Yellow tag</span>
	<span class="tag tag-lime">Lime tag</span>
	<span class="tag tag-green">Green tag</span>
	<span class="tag tag-teal">Teal tag</span>
	<span class="tag tag-cyan">Cyan tag</span>
	<span class="tag tag-gray">Gray tag</span>
	<span class="tag tag-gray-dark">Dark gray tag</span>
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element04"><i class="fa fa-clipboard"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
						<!--/div-->

						<!--div-->
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Input Tags
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in your website aplication.</p>
								<div class="text-wrap">
									<div class="example">
										<div class="form-group">
											<input type="text" data-role="tagsinput" value="jQuery,Script,Net" class="form-control">
										</div>
										<div class="form-group mb-0">
											<select multiple data-role="tagsinput" class="form-control">
												<option value="jQuery">jQuery</option>
												<option value="Angular">Angular</option>
												<option value="React">React</option>
												<option value="Vue">Vue</option>
											</select>
										</div>
									</div>

<figure class="highlight mb-0" id="element05"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><select multiple data-role="tagsinput" class="form-control">
	<option value="jQuery">jQuery</option>
	<option value="Angular">Angular</option>
	<option value="React">React</option>
	<option value="Vue">Vue</option>
</select>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element05"><i class="fa fa-clipboard"></i></div>
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

		<!-- Internal Inputtags js-->
		<script src="{{URL::asset('assets/plugins/inputtags/inputtags.js')}}"></script>

		<!-- Internal Clipboard js-->
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- Internal Prism js-->
		<script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>

@endsection