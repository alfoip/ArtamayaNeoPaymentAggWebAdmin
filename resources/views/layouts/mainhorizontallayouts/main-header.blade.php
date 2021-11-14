		<!-- main-header -->
		<div class="main-header nav nav-item hor-header">
			<div class="container">
				<div class="main-header-left ">
					<a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a><!-- sidebar-toggle-->
					<a class="header-brand" href="{{url('index')}}">
						<img src="{{URL::asset('assets/img/brand/logo-theme-dark.png')}}" class="desktop-dark">
						<img src="{{URL::asset('assets/img/brand/logo.png')}}" class="desktop-logo">
					</a>
					<div class="main-header-center ml-3 d-sm-none d-md-none d-lg-block">
						<input type="search" class="form-control" placeholder="Search for anything...">
							<button class="btn"><i class="fas fa-search"></i></button>
					</div>
				</div>
				<div class="main-header-center">
					<div class="responsive-logo">
                        <img src="{{URL::asset('assets/img/brand/logo.png')}}" class="mobile-logo" alt="logo">
                        <img src="{{URL::asset('assets/img/brand/logo-theme-dark.png')}}" class="dark-mobile-logo" alt="logo">
					</div>
				</div>
			</div>
		</div>
		<!-- /main-header -->
