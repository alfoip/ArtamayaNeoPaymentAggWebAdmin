@extends('layouts.customapp')

@section('content')
		<!-- main-signin-wrapper -->
		<div class="my-auto page page-h">
			<div class="main-signin-wrapper">
				<div class="main-card-signin d-md-flex wd-100p">
				<div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white" >
					<div class="my-auto authentication-pages">
						<div>
							<img src="{{URL::asset('assets/img/brand/logo-white.png')}}" class=" m-0 mb-4" alt="logo">
							<h5 class="mb-4">ARTAMAYA PAYMENT AGGREGATOR ADMIN AND MONITORING TOOL</h5>
						</div>
					</div>
				</div>
				<div class="p-5 wd-md-50p">
					<div class="main-signin-header">
						<h4>Please sign in to continue</h4>
						<form action="/dologin" method="post" method="post">
                            {{ csrf_field() }}
							<div class="form-group">
								<label>Email</label><input class="form-control" placeholder="Enter your email" type="text" id="email" name="email">
							</div>
							<div class="form-group">
								<label>Password</label> <input class="form-control" placeholder="Enter your password" type="password" id="password" name="password">
							</div><button class="btn btn-main-primary btn-block">Sign In</button>
						</form>

                        @if (session('message'))
                            &nbsp
                            <div class="alert alert-danger">
                                <span class="font-size-12 pt-2">{{ session('message') }}</span>
                            </div>
                        @endif
					</div>

				</div>
			</div>
			</div>
		</div>
		<!-- /main-signin-wrapper -->
@endsection
