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
							<h4 class="content-title mb-0 my-auto">Elements</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Toast</span>
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

				<!-- Row -->
				<div class="row">
					<div class="col-xl-12 col-lg-12">
						<div class="card custom-card" id="basic">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Basic Example</h6>
									<p class="text-muted card-sub-title">Toasts are as flexible as you need and have very little required markup. At a minimum, we require a single element to contain your “toasted” content and strongly encourage a dismiss button.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="demo-static-toast">
											<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert">
												<div class="toast-header">
													<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small>
													<button aria-label="Close" class="ml-2 mb-1 close tx-normal" data-dismiss="toast" type="button">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="toast-body">
													Hello, world! This is a toast message.
												</div>
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="toast1"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="demo-static-toast">
<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert">
	<div class="toast-header">
		<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small>
		<button aria-label="Close" class="ml-2 mb-1 close tx-normal" data-dismiss="toast" type="button">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="toast-body">
		Hello, world! This is a toast message.
	</div>
</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#toast1"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
						<div class="card custom-card" id="tarns">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Translucent</h6>
									<p class="text-muted card-sub-title">Toasts are slightly translucent, too, so they blend over whatever they might appear over.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="demo-static-toast">
											<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert">
												<div class="toast-header">
													<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small>
													<button aria-label="Close" class="ml-2 mb-1 close tx-normal" data-dismiss="toast" type="button">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="toast-body">
													Hello, world! This is a toast message.
												</div>
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="toast2"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="demo-static-toast">
<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert">
	<div class="toast-header">
		<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small>
		<button aria-label="Close" class="ml-2 mb-1 close tx-normal" data-dismiss="toast" type="button">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="toast-body">
		Hello, world! This is a toast message.
	</div>
</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#toast2"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
						<div class="card custom-card" id="stacking">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Stacking</h6>
									<p class="text-muted card-sub-title">When you have multiple toasts, we default to vertiaclly stacking them in a readable manner.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="demo-static-toast">
											<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert">
												<div class="toast-header">
													<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">Just now</small>
													<button aria-label="Close" class="ml-2 mb-1 close" data-dismiss="toast" type="button">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="toast-body">
													See? Just like this.
												</div>
											</div>
											<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert">
												<div class="toast-header">
													<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small> <button aria-label="Close" class="ml-2 mb-1 close tx-normal" data-dismiss="toast" type="button"><span aria-hidden="true">&times;</span></button>
												</div>
												<div class="toast-body">
													Hello, world! This is a toast message.
												</div>
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="toast3"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="demo-static-toast">
<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert">
	<div class="toast-header">
		<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">Just now</small>
		<button aria-label="Close" class="ml-2 mb-1 close" data-dismiss="toast" type="button">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="toast-body">
		See? Just like this.
	</div>
</div>
<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert">
	<div class="toast-header">
		<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small> <button aria-label="Close" class="ml-2 mb-1 close tx-normal" data-dismiss="toast" type="button"><span aria-hidden="true">&times;</span></button>
	</div>
	<div class="toast-body">
		Hello, world! This is a toast message.
	</div>
</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#toast3"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
						<div class="card custom-card" id="place">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Placement</h6>
									<p class="text-muted card-sub-title">Place toasts with custom CSS as you need them. The top right is often used for notifications, as is the top middle.</p>
								</div>
								<div class="text-wrap mb-3">
									<div class="example">
										<div class="ht-150 pos-relative mb-3">
											<div class="demo-static-toast pos-absolute t-10 r-10">
												<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert">
													<div class="toast-header">
														<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small> <button aria-label="Close" class="ml-2 mb-1 close tx-normal" data-dismiss="toast" type="button"><span aria-hidden="true">&times;</span></button>
													</div>
													<div class="toast-body">
														Hello, world! This is a toast message.
													</div>
												</div>
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="toast4"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="ht-150 pos-relative mb-3">
<div class="demo-static-toast pos-absolute t-10 r-10">
	<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert">
		<div class="toast-header">
			<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small> <button aria-label="Close" class="ml-2 mb-1 close tx-normal" data-dismiss="toast" type="button"><span aria-hidden="true">&times;</span></button>
		</div>
		<div class="toast-body">
			Hello, world! This is a toast message.
		</div>
	</div>
</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#toast4"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
								<div class="text-wrap mb-3">
									<div class="example">
										<div class="demo-static-toast d-flex justify-content-center align-items-center">
											<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert">
												<div class="toast-header">
													<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small> <button aria-label="Close" class="ml-2 mb-1 close tx-normal" data-dismiss="toast" type="button"><span aria-hidden="true">&times;</span></button>
												</div>
												<div class="toast-body">
													Hello, world! This is a toast message.
												</div>
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="toast5"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="demo-static-toast d-flex justify-content-center align-items-center">
<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert">
	<div class="toast-header">
		<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small> <button aria-label="Close" class="ml-2 mb-1 close tx-normal" data-dismiss="toast" type="button"><span aria-hidden="true">&times;</span></button>
	</div>
	<div class="toast-body">
		Hello, world! This is a toast message.
	</div>
</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#toast5"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="ht-150 pos-relative">
											<div class="demo-static-toast pos-absolute b-10 r-10">
												<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert">
													<div class="toast-header">
														<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small> <button aria-label="Close" class="ml-2 mb-1 close tx-normal" data-dismiss="toast" type="button"><span aria-hidden="true">&times;</span></button>
													</div>
													<div class="toast-body">
														Hello, world! This is a toast message.
													</div>
												</div>
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="toast6"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="ht-150 pos-relative">
<div class="demo-static-toast pos-absolute b-10 r-10">
	<div aria-atomic="true" aria-live="assertive" class="toast fade show" role="alert">
		<div class="toast-header">
			<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small> <button aria-label="Close" class="ml-2 mb-1 close tx-normal" data-dismiss="toast" type="button"><span aria-hidden="true">&times;</span></button>
		</div>
		<div class="toast-body">
			Hello, world! This is a toast message.
		</div>
	</div>
</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#toast6"><i class="fa fa-clipboard"></i></div>
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

		<!-- Internal Inputtags js-->
		<script src="{{URL::asset('assets/plugins/inputtags/inputtags.js')}}"></script>

		<!-- Internal Clipboard js-->
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- Internal Prism js-->
		<script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>

@endsection