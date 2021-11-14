		<!--Horizontal-main -->
		<div class="sticky">
			<div class="horizontal-main hor-menu clearfix side-header">
				<div class="horizontal-mainwrapper container clearfix">
					<!--Nav-->
					<nav class="horizontalMenu clearfix">
						<ul class="horizontalMenu-list">
							<li aria-haspopup="true"><a href="{{url('/')}}" class=""><i class="ti-stats-up menu-icon"></i> Dashboard </a></li>
							<li aria-haspopup="true"><a href="{{url('/accounts')}}" class=""><i class="ti-user menu-icon"></i> Account Management </a></li>
                            <li aria-haspopup="true"><a href="{{url('wallet')}}" class=""><i class="ti-briefcase"></i> Wallet </a></li>
                            @if(session()->exists('sessId') && session()->exists('sessEmail'))
                                <li aria-haspopup="true"><a href="{{url('signout')}}" class=""><i class="ti-user menu-icon"></i> Logout </a></li>
                            @else
                                <li aria-haspopup="true"><a href="{{url('login')}}" class=""><i class="ti-user menu-icon"></i> Login </a></li>
                            @endif
						</ul>
					</nav>
					<!--Nav-->
				</div>
			</div>
		</div>
		<!--Horizontal-main -->
