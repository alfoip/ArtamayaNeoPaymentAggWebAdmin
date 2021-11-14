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
							<h4 class="content-title mb-0 my-auto">Elements</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Media-object</span>
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
						<div class="card" id="media-object">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Basic Example</h6>
									<p class="text-muted card-sub-title">It is very easy to customize and it uses in your website applications.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="media d-block d-sm-flex">
											<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/4.jpg')}}">
											<div class="media-body">
												<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
												Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="media-object01"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="media d-block d-sm-flex">
	<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/4.jpg')}}">
	<div class="media-body">
		<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
		Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#media-object01"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="media-object2">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Nesting</h6>
									<p class="text-muted card-sub-title">It is very easy to customize and it uses in your website applications.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="media d-block d-sm-flex">
											<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/9.jpg')}}">
											<div class="media-body">
												<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
												<p>Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
												<div class="media d-block d-sm-flex mg-t-25">
													<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/8.jpg')}}">
													<div class="media-body">
														<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
														Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
													</div>
												</div>
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="media-object02"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="media d-block d-sm-flex">
	<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/9.jpg')}}">
	<div class="media-body">
		<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
		<p>Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
		<div class="media d-block d-sm-flex mg-t-25">
			<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/8.jpg')}}">
			<div class="media-body">
				<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
				Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
			</div>
		</div>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#media-object02"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="media-object3">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Alignment</h6>
									<p class="text-muted card-sub-title">It is very easy to customize and it uses in your website applications.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="media d-block d-sm-flex">
											<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0 align-self-center" src="{{URL::asset('assets/img/faces/14.jpg')}}">
											<div class="media-body">
												<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
												Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="media-object03"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="media d-block d-sm-flex">
	<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0 align-self-center" src="{{URL::asset('assets/img/faces/14.jpg')}}">
	<div class="media-body">
		<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
		Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#media-object03"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="media-object4">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Order</h6>
									<p class="text-muted card-sub-title">It is very easy to customize and it uses in your website applications.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="media d-block d-sm-flex">
											<div class="media-body">
												<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
												Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
											</div>
											<img alt="" class="main-img-user avatar-lg mg-sm-l-20 mg-t-20 mg-sm-t-0" src="{{URL::asset('assets/img/faces/5.jpg')}}">
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="media-object04"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="media d-block d-sm-flex">
	<div class="media-body">
		<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
		Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
	</div>
	<img alt="" class="main-img-user avatar-lg mg-sm-l-20 mg-t-20 mg-sm-t-0" src="{{URL::asset('assets/img/faces/5.jpg')}}">
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#media-object04"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card" id="media-object5">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Media List</h6>
									<p class="text-muted card-sub-title">It is very easy to customize and it uses in your website applications.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="media media-list d-block d-sm-flex">
											<ul class="list-unstyled mb-0">
												<li class="media d-block d-sm-flex">
													<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/2.jpg')}}">
													<div class="media-body">
														<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
														Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
													</div>
												</li>
												<li class="media d-block d-sm-flex mg-t-25">
													<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/12.jpg')}}">
													<div class="media-body">
														<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
														Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
													</div>
												</li>
												<li class="media d-block d-sm-flex mg-t-25">
													<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/7.jpg')}}">
													<div class="media-body">
														<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
														Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
													</div>
												</li>
											</ul>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="media-object05"><pre><code class="language-markup"><script type="html-dashlead/script"><ul class="list-unstyled mb-0">
	<li class="media d-block d-sm-flex">
		<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/2.jpg')}}">
		<div class="media-body">
			<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
			Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
		</div>
	</li>
	<li class="media d-block d-sm-flex mg-t-25">
		<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/12.jpg')}}">
		<div class="media-body">
			<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
			Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
		</div>
	</li>
	<li class="media d-block d-sm-flex mg-t-25">
		<img alt="" class="main-img-user avatar-lg mg-sm-r-20 mg-b-20 mg-sm-b-0" src="{{URL::asset('assets/img/faces/7.jpg')}}">
		<div class="media-body">
			<h5 class="mg-b-5 tx-inverse tx-15">Media heading</h5>
			Lorem Ipsum generators on the Internet as necessary aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
		</div>
	</li>
</ul>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#media-object05"><i class="fa fa-clipboard"></i></div>
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