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
							<h4 class="content-title mb-0 my-auto">Elements</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Dropdowns</span>
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
					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="basic">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Basic Example</h6>
									<p class="text-muted card-sub-title">Wrap the dropdown’s toggle (your button or link) and the dropdown menu within .dropdown, or another element that declares position relative. Dropdowns can be triggered from link or button elements to better fit your potential needs.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="dropdown">
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary" data-toggle="dropdown" id="dropdownMenuButton" type="button">Dropdown Menu <i class="fas fa-caret-down ml-1"></i></button>
											<div  class="dropdown-menu tx-13">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="dropdown"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="dropdown">
	<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary"
	data-toggle="dropdown" id="dropdownMenuButton" type="button">Dropdown Menu <i class="fas fa-caret-down ml-1"></i></button>
	<div  class="dropdown-menu tx-13">
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
	</div>
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#dropdown"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>


					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="up">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Dropup</h6>
									<p class="text-muted card-sub-title">Trigger dropdown menus above elements by adding dropup class to the parent element.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="dropdown dropup">
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-secondary" data-toggle="dropdown" type="button">Dropup Menu <i class="fas fa-caret-down ml-1"></i></button>
											<div class="dropdown-menu tx-13">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="dropdown2"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="dropdown dropup">
	<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-secondary"
	data-toggle="dropdown" type="button">Dropup Menu <i class="fas fa-caret-down ml-1"></i></button>
	<div class="dropdown-menu tx-13">
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#dropdown2"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>


					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="right">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Dropright & Dropleft</h6>
									<p class="text-muted card-sub-title">Trigger dropdown menus above elements by adding dropright & dropleft class to the parent element.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="row row-xs">
											<div class="col-sm-6 col-md-3">
												<div class="dropdown dropright">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info" data-toggle="dropdown" id="droprightMenuButton" type="button">Dropright Menu<i class="fas fa-caret-right ml-1"></i></button>
													<div aria-labelledby="droprightMenuButton" class="dropdown-menu tx-13">
														<a class="dropdown-item" href="#">Action</a>
														<a class="dropdown-item" href="#">Another action</a>
														<a class="dropdown-item" href="#">Something else here</a>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
												<div class="dropdown dropleft">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-danger dropdown-toggle" data-toggle="dropdown" id="dropvertical-menuButton" type="button">Dropleft Menu</button>
													<div aria-labelledby="dropvertical-menuButton" class="dropdown-menu tx-13">
														<a class="dropdown-item" href="#">Action</a>
														<a class="dropdown-item" href="#">Another action</a>
														<a class="dropdown-item" href="#">Something else here</a>
													</div>
												</div>
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="dropdown3"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="row row-xs">
	<div class="col-sm-6 col-md-3">
		<div class="dropdown dropright">
			<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info"
			data-toggle="dropdown" id="droprightMenuButton" type="button">Dropright Menu<i class="fas fa-caret-right ml-1"></i></button>
			<div aria-labelledby="droprightMenuButton" class="dropdown-menu tx-13">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a>
			</div>
		</div>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
		<div class="dropdown dropleft">
			<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-danger dropdown-toggle"
			data-toggle="dropdown" id="dropvertical-menuButton" type="button">Dropright Menu</button>
			<div aria-labelledby="dropvertical-menuButton" class="dropdown-menu tx-13">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a>
			</div>
		</div>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#dropdown3"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="active">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Active Menu Item</h6>
									<p class="text-muted card-sub-title">Add active class to items in the dropdown to style them as active.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="dropdown">
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-warning" data-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ml-1"></i></button>
											<div class="dropdown-menu tx-13">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item active" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="dropdown4"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="dropdown">
	<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-warning"
	 data-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ml-1"></i></button>
	<div class="dropdown-menu tx-13">
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item active" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#dropdown4"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="disabled">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Disabled Menu Item</h6>
									<p class="text-muted card-sub-title">Add disabled class to items in the dropdown to style them as disabled.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="dropdown">
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary" data-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ml-1"></i></button>
											<div class="dropdown-menu tx-13">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item disabled" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="dropdown5"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="dropdown">
	<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary"
	data-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ml-1"></i></button>
	<div class="dropdown-menu tx-13">
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item disabled" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#dropdown5"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="header">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Dropdown Header</h6>
									<p class="text-muted card-sub-title">Add a header to label sections of actions in any dropdown menu.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="dropdown">
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-secondary" data-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ml-1"></i></button>
											<div class="dropdown-menu tx-13">
												<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="dropdown6"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="dropdown">
	<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-secondary"
	data-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ml-1"></i></button>
	<div class="dropdown-menu tx-13">
		<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#dropdown6"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="divider">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Dropdown Divider</h6>
									<p class="text-muted card-sub-title">Separate groups of related menu items with a divider.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="dropdown">
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info" data-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ml-1"></i></button>
											<div class="dropdown-menu tx-13">
												<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
												<a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="dropdown7"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="dropdown">
	<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info"
	data-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ml-1"></i></button>
	<div class="dropdown-menu tx-13">
		<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
		<a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
		<div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#dropdown7"><i class="fa fa-clipboard"></i></div>
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
