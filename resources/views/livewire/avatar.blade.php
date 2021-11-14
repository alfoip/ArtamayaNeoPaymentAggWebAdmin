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
							<h4 class="content-title mb-0 my-auto">Elements</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Avatar</span>
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
						<div class="card custom-card" id="sizes">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Avatar Sizes</h6>
									<p class="text-muted card-sub-title">An avatar can have different sizes like larger and smaller avatar.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="demo-avatar-group">
											<div class="main-img-user avatar-xs">
												<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/2.jpg')}}">
											</div>
											<div class="main-img-user avatar-sm">
												<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/3.jpg')}}">
											</div>
											<div class="main-img-user">
												<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/4.jpg')}}">
											</div>
											<div class="main-img-user avatar-md">
												<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/5.jpg')}}">
											</div>
											<div class="main-img-user avatar-lg">
												<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/6.jpg')}}">
											</div>
											<div class="main-img-user avatar-xl d-none d-sm-block">
												<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/7.jpg')}}">
											</div>
											<div class="main-img-user avatar-xxl d-none d-sm-block">
												<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/8.jpg')}}">
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="avatar1"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="demo-avatar-group">
	<div class="main-img-user avatar-xs">
		<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/2.jpg')}}">
	</div>
	<div class="main-img-user avatar-sm">
		<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/3.jpg')}}">
	</div>
	<div class="main-img-user">
		<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/4.jpg')}}">
	</div>
	<div class="main-img-user avatar-md">
		<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/5.jpg')}}">
	</div>
	<div class="main-img-user avatar-lg">
		<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/6.jpg')}}">
	</div>
	<div class="main-img-user avatar-xl d-none d-sm-block">
		<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/7.jpg')}}">
	</div>
	<div class="main-img-user avatar-xxl d-none d-sm-block">
		<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/8.jpg')}}">
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#avatar1"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="shapes">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Avatar Shapes</h6>
									<p class="text-muted card-sub-title">An avatar can have different shapes like square and round, radius avatars.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="demo-avatar-group">
											<div class="main-img-user avatar-md">
												<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/4.jpg')}}">
											</div>
											<div class="main-img-user avatar-md">
												<img alt="avatar" class="square" src="{{URL::asset('assets/img/faces/5.jpg')}}">
											</div>
											<div class="main-img-user avatar-md">
												<img alt="avatar" class="radius" src="{{URL::asset('assets/img/faces/6.jpg')}}">
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="avatar2"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="demo-avatar-group">
	<div class="main-img-user avatar-md">
		<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/4.jpg')}}">
	</div>
	<div class="main-img-user avatar-md">
		<img alt="avatar" class="square" src="{{URL::asset('assets/img/faces/5.jpg')}}">
	</div>
	<div class="main-img-user avatar-md">
		<img alt="avatar" class="radius" src="{{URL::asset('assets/img/faces/6.jpg')}}">
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#avatar2"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>


					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="initials">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Initials Avatars</h6>
									<p class="text-muted card-sub-title">An avatar can have a temporary use of user's initial name while their photos are not yet available.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="demo-avatar-group avatar-list">
											<div class="avatar avatar-xs bg-primary rounded-circle">
												A
											</div>
											<div class="avatar avatar-sm bg-secondary rounded-circle">
												U
											</div>
											<div class="avatar bg-info rounded-circle">
												C
											</div>
											<div class="avatar avatar-md bg-success rounded-circle">
												X
											</div>
											<div class="avatar avatar-lg bg-warning rounded-circle">
												E
											</div>
											<div class="avatar avatar-xl d-none d-sm-flex bg-danger rounded-circle">
												M
											</div>
											<div class="avatar avatar-xxl d-none d-sm-flex bg-pink rounded-circle">
												NB
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="avatar3"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="demo-avatar-group avatar-list">
	<div class="avatar avatar-xs bg-primary rounded-circle">
		A
	</div>
	<div class="avatar avatar-sm bg-secondary rounded-circle">
		U
	</div>
	<div class="avatar bg-info rounded-circle">
		C
	</div>
	<div class="avatar avatar-md bg-success rounded-circle">
		X
	</div>
	<div class="avatar avatar-lg bg-warning rounded-circle">
		E
	</div>
	<div class="avatar avatar-xl d-none d-sm-flex bg-danger rounded-circle">
		M
	</div>
	<div class="avatar avatar-xxl d-none d-sm-flex bg-pink rounded-circle">
		NB
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#avatar3"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="status">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Status Indicator</h6>
										<p class="text-muted card-sub-title">An avatar can have a status indicator to indicate users availability.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="demo-avatar-group">
												<div class="main-avatar avatar online">
													<img alt="avatar" class="rounded-circle avatar" src="{{URL::asset('assets/img/faces/9.jpg')}}">
												</div>
												<div class="main-avatar avatar-md offline">
													eb
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="avatar4"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="demo-avatar-group">
	<div class="main-avatar avatar online">
		<img alt="avatar" class="rounded-circle avatar" src="{{URL::asset('assets/img/faces/9.jpg')}}">
	</div>
	<div class="main-avatar avatar-md offline">
		eb
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#avatar4"><i class="fa fa-clipboard"></i></div>
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