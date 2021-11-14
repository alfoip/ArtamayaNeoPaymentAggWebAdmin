@extends('layouts.app')

@section('style')

		<!--- Internal Prism css-->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

		<!-- Internal Nice-select css  -->
		<link href="{{URL::asset('assets/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet"/>

@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Elements</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Tabs</span>
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

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-lg-12 col-md-12">
						<div class="card" id="basic-alert">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Basic Style Tabs</h6>
									<p class="text-muted card-sub-title">It is very easy to customize and it uses in your website applications.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="panel panel-primary tabs-style-1">
											<div class=" tab-menu-heading">
												<div class="tabs-menu1">
													<!-- Tabs -->
													<ul class="nav panel-tabs main-nav-line">
														<li><a href="#tab1" class="nav-link active" data-toggle="tab">Tab 01</a></li>
														<li><a href="#tab2" class="nav-link" data-toggle="tab">Tab 02</a></li>
														<li><a href="#tab3" class="nav-link" data-toggle="tab">Tab 03</a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body main-content-body-right border">
												<div class="tab-content">
													<div class="tab-pane active" id="tab1">
														At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
													</div>
													<div class="tab-pane" id="tab2">
														<p>dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
														<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime</p>
														<p class="mb-0">placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
													</div>
													<div class="tab-pane" id="tab3">
														<p>praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,</p>
														<p class="mb-0">similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
<!-- Prism Code -->
<figure class="highlight clip-widget" id="tabs"><pre><code class="language-markup"><script type="html-dashlead/script">
<div class=" tab-menu-heading">
	<div class="tabs-menu1">
		<!-- Tabs -->
		<ul class="nav panel-tabs main-nav-line">
			<li><a href="#tab1" class="nav-link active" data-toggle="tab">Tab 01</a></li>
			<li><a href="#tab2" class="nav-link" data-toggle="tab">Tab 02</a></li>
			<li><a href="#tab3" class="nav-link" data-toggle="tab">Tab 03</a></li>
		</ul>
	</div>
</div>
<div class="panel-body tabs-menu-body main-content-body-right border">
	<div class="tab-content">
		<div class="tab-pane active" id="tab1">
			At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
		</div>
		<div class="tab-pane" id="tab2">
			<p>dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
			<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime</p>
			<p class="mb-0">placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
		</div>
		<div class="tab-pane" id="tab3">
			<p>praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,</p>
			<p class="mb-0">similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
		</div>
	</div>
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#tabs"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-12">
						<!-- div -->
						<div class="card mg-b-20" id="tabs-style2">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Basic Style2 Tabs
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in your website applications.</p>
								<div class="text-wrap">
									<div class="example">
										<div class="panel panel-primary tabs-style-2">
											<div class=" tab-menu-heading">
												<div class="tabs-menu1">
													<!-- Tabs -->
													<ul class="nav panel-tabs main-nav-line">
														<li><a href="#tab4" class="nav-link active" data-toggle="tab">Tab 01</a></li>
														<li><a href="#tab5" class="nav-link" data-toggle="tab">Tab 02</a></li>
														<li><a href="#tab6" class="nav-link" data-toggle="tab">Tab 03</a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body main-content-body-right border">
												<div class="tab-content">
													<div class="tab-pane active" id="tab4">
														At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
													</div>
													<div class="tab-pane" id="tab5">
														<p>dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
														<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime</p>
														<p class="mb-0">placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
													</div>
													<div class="tab-pane" id="tab6">
														<p>praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,</p>
														<p class="mb-0">similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
<!---Prism Pre code-->
<figure class="highlight mb-0" id="element2"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="panel panel-primary tabs-style-2">
	<div class=" tab-menu-heading">
		<div class="tabs-menu1">
			<!-- Tabs -->
			<ul class="nav panel-tabs main-nav-line">
				<li><a href="#tab4" class="nav-link active" data-toggle="tab">Tab 01</a></li>
				<li><a href="#tab5" class="nav-link" data-toggle="tab">Tab 02</a></li>
				<li><a href="#tab6" class="nav-link" data-toggle="tab">Tab 03</a></li>
			</ul>
		</div>
	</div>
	<div class="panel-body tabs-menu-body main-content-body-right border">
		<div class="tab-content">
			<div class="tab-pane active" id="tab4">
				At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
			</div>
			<div class="tab-pane" id="tab5">
				<p>dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
				<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime</p>
				<p class="mb-0">placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
			</div>
			<div class="tab-pane" id="tab6">
				<p>praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,</p>
				<p class="mb-0">similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
			</div>
		</div>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element2"><i class="fa fa-clipboard"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
					</div>
					<!-- /div -->

					<div class="col-xl-12">
						<!-- div -->
						<div class="card mg-b-20" id="tabs-style3">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Basic Style3 Tabs
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in your website applications.</p>
								<div class="text-wrap">
									<div class="example">
										<div class="panel panel-primary tabs-style-3">
											<div class="tab-menu-heading">
												<div class="tabs-menu ">
													<!-- Tabs -->
													<ul class="nav panel-tabs">
														<li class=""><a href="#tab11" class="active" data-toggle="tab"><i class="fa fa-laptop"></i> Tab Style 01</a></li>
														<li><a href="#tab12" data-toggle="tab"><i class="fa fa-cube"></i> Tab Style 02</a></li>
														<li><a href="#tab13" data-toggle="tab"><i class="fa fa-cogs"></i> Tab Style 03</a></li>
														<li><a href="#tab14" data-toggle="tab"><i class="fa fa-tasks"></i> Tab Style 04</a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body">
												<div class="tab-content">
													<div class="tab-pane active" id="tab11">
														<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
														<p class="mb-0">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
													</div>
													<div class="tab-pane" id="tab12">
														<p> Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
														<p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
													</div>
													<div class="tab-pane" id="tab13">
														<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae</p>
														<p class="mb-0">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
													</div>
													<div class="tab-pane" id="tab14">
														<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire</p>
														<p class="mb-0">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus </p>
													</div>
												</div>
											</div>
										</div>
									</div>
<!---Prism Pre code-->
<figure class="highlight mb-0" id="element3"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="panel panel-primary tabs-style-3">
	<div class="tab-menu-heading">
		<div class="tabs-menu ">
			<!-- Tabs -->
			<ul class="nav panel-tabs">
				<li class=""><a href="#tab11" class="active" data-toggle="tab"><i class="fa fa-laptop"></i> Tab Style 01</a></li>
				<li><a href="#tab12" data-toggle="tab"><i class="fa fa-cube"></i> Tab Style 02</a></li>
				<li><a href="#tab13" data-toggle="tab"><i class="fa fa-cogs"></i> Tab Style 03</a></li>
				<li><a href="#tab14" data-toggle="tab"><i class="fa fa-tasks"></i> Tab Style 04</a></li>
			</ul>
		</div>
	</div>
	<div class="panel-body tabs-menu-body">
		<div class="tab-content">
			<div class="tab-pane active" id="tab11">
				<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
				<p class="mb-0">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
			</div>
			<div class="tab-pane" id="tab12">
				<p> Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
				<p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
			</div>
			<div class="tab-pane" id="tab13">
				<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae</p>
				<p class="mb-0">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
			</div>
			<div class="tab-pane" id="tab14">
				<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire</p>
				<p class="mb-0">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus </p>
			</div>
		</div>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element3"><i class="fa fa-clipboard"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
					</div>
					<!-- /div -->

					<div class="col-xl-12">
						<!-- div -->
						<div class="card" id="tabs-style4">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Vertical Tabs
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in your website applications.</p>
								<div class="text-wrap">
									<div class="example">
										<div class="d-md-flex">
											<div class="">
												<div class="panel panel-primary tabs-style-4">
													<div class="tab-menu-heading">
														<div class="tabs-menu ">
															<!-- Tabs -->
															<ul class="nav panel-tabs">
																<li class=""><a href="#tab21" class="active" data-toggle="tab"><i class="fa fa-laptop"></i> Tab Style 01</a></li>
																<li><a href="#tab22" data-toggle="tab"><i class="fa fa-cube"></i> Tab Style 02</a></li>
																<li><a href="#tab23" data-toggle="tab"><i class="fa fa-cogs"></i> Tab Style 03</a></li>
																<li><a href="#tab24" data-toggle="tab"><i class="fa fa-tasks"></i> Tab Style 04</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="tabs-style-4">
												<div class="panel-body tabs-menu-body">
													<div class="tab-content">
														<div class="tab-pane active" id="tab21">
															<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
															<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
															<p class="mb-0">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
														</div>
														<div class="tab-pane" id="tab22">
															<p> Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
															<p> Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
															<p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
														</div>
														<div class="tab-pane" id="tab23">
															<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
															<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
															<p class="mb-0">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
														</div>
														<div class="tab-pane" id="tab24">
															<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
															<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
															<p class="mb-0">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus </p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
<!---Prism Pre code-->
<figure class="highlight mb-0" id="element4"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="d-md-flex">
	<div class="">
		<div class="panel panel-primary tabs-style-4">
			<div class="tab-menu-heading">
				<div class="tabs-menu ">
					<!-- Tabs -->
					<ul class="nav panel-tabs">
						<li class=""><a href="#tab21" class="active" data-toggle="tab"><i class="fa fa-laptop"></i> Tab Style 01</a></li>
						<li><a href="#tab22" data-toggle="tab"><i class="fa fa-cube"></i> Tab Style 02</a></li>
						<li><a href="#tab23" data-toggle="tab"><i class="fa fa-cogs"></i> Tab Style 03</a></li>
						<li><a href="#tab24" data-toggle="tab"><i class="fa fa-tasks"></i> Tab Style 04</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="tabs-style-4">
		<div class="panel-body tabs-menu-body">
			<div class="tab-content">
				<div class="tab-pane active" id="tab21">
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
					<p class="mb-0">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
				</div>
				<div class="tab-pane" id="tab22">
					<p> Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
					<p> Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
					<p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
				</div>
				<div class="tab-pane" id="tab23">
					<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
					<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
					<p class="mb-0">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
				</div>
				<div class="tab-pane" id="tab24">
					<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
					<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
					<p class="mb-0">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus </p>
				</div>
			</div>
		</div>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element4"><i class="fa fa-clipboard"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
								<!-- /div -->
							</div>
						</div>
					</div>
					<div class="col-xl-12">
						<!-- div -->
						<div class="card" id="tabs-style4">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Horizontal Tabs-right-side
								</div>
								<p class="mg-b-20">It is very easy to customize and it uses in your website applications.</p>
								<div class="text-wrap">
									<div class="example">
										<div class="panel panel-primary">
											<div class="tab_wrapper right_tab">
												<ul class="tab_list">
													<li class="active">Tab 1</li>
													<li>Tab 2</li>
													<li>Tab 3</li>
												</ul>
												<div class="content_wrapper">
													<div class="tab_content active">
														<p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>
													</div>

													<div class="tab_content">
														<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
													</div>

													<div class="tab_content">
														<p> On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents .</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!---Prism Pre code-->
<!---Prism Pre code-->
<figure class="highlight mb-0" id="element5"><pre><code class="language-markup mb-0"><script type="prismsmix/javascript"><div class="panel panel-primary">
	<div class="tab_wrapper right_tab">
		<ul class="tab_list">
			<li class="active">Tab 1</li>
			<li>Tab 2</li>
			<li>Tab 3</li>
		</ul>
		<div class="content_wrapper">
			<div class="tab_content active">
				<p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>
			</div>

			<div class="tab_content">
				<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
			</div>

			<div class="tab_content">
				<p> On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents .</p>
			</div>
		</div>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element5"><i class="fa fa-clipboard"></i></div>
</figure>

<h5 class=" mt-4 font-weight-semibold tx-14">JS</h5>
<!---Prism Pre code-->
<figure class="highlight mb-0" id="element3"><pre><code class="language-markup"><script type="prismsmix/javascript"><!---Tabs JS-->
src="{{URL::asset('assets/plugins/tabs/jquery.multipurpose_tabcontent.js')}}"</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element5"><i class="fa fa-clipboard"></i></div>
</figure>
<!---Prism Pre code-->

<h5 class=" mt-4 font-weight-semibold tx-14">Custom Js</h5>
<!---Prism Pre code-->
<figure class="highlight mb-0" id="element4"><pre><code class="language-markup"><script type="prismsmix/javascript"><!---Tabs scripts-->
src="{{URL::asset('assets/js/tabs.js')}}"</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element5"><i class="fa fa-clipboard"></i></div>
</figure>
<!---Prism Pre code-->
								</div>
								<!-- /div -->
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

@endsection

@section('script')

		<!-- Datepicker js -->
		<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

		<!-- JQuery sparkline js -->
		<script src="{{URL::asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

		<!-- Sampledata js -->
		<script src="{{URL::asset('assets/js/chart.flot.sampledata.js')}}"></script>

		<!-- Perfect-scrollbar js -->
		<script src="{{URL::asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/perfect-scrollbar/p-scroll.js')}}"></script>

		<!-- Internal Clipboard js-->
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- Internal Prism js-->
		<script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>

		<!--- Tabs JS-->
		<script src="{{URL::asset('assets/plugins/tabs/jquery.multipurpose_tabcontent.js')}}"></script>
		<script src="{{URL::asset('assets/js/tabs.js')}}"></script>

		<!-- Internal Nice-select js-->
		<script src="{{URL::asset('assets/plugins/jquery-nice-select/js/jquery.nice-select.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/jquery-nice-select/js/nice-select.js')}}"></script>

@endsection