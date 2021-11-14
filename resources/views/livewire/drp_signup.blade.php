@extends('layouts.customapp')

@section('content')

		<!-- main-signin-wrapper -->
		<div class="my-auto page page-h">
			<div class="main-signin-wrapper">
				<div class="main-card-signin d-md-flex wd-100p">
				<div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white" >
					<div class="my-auto authentication-pages">
						<div>
							<img src="{{URL::asset('assets/img/brand/logo-white.png')}}" class="m-0 mb-4" alt="logo">
							<h5 class="mb-4">Join big communities with big daily profits.</h5>
							<p class="mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting</p>
						</div>
					</div>
				</div>
				<div class="sign-up-body wd-md-50p">
					<div class="main-signin-header">
						<h4>Please Register here</h4>
						<form action="/dosignup" method="post">
                            {{ csrf_field() }}
							<div class="form-group">
								<label>Full Name</label> <input class="form-control" placeholder="Enter your firstname and lastname" type="text" id="fullName" name="fullName">
							</div>
							<div class="form-group">
								<label>Email</label> <input class="form-control" placeholder="Enter your email" type="text" id="email" name="email">
							</div>
							<div class="form-group">
								<label>Password</label> <input class="form-control" placeholder="Enter your password" type="password" id="password01" name="password01">
							</div>
                            <div class="form-group">
                                <label>Password Confirmation</label> <input class="form-control" placeholder="Enter your password again" type="password" id="password02" name="password02">
                            </div>
                            <div class="form-group">
                                <label>Referral Code</label> <input class="form-control" placeholder="Referral Code" type="text" id="referralcode" name="referralcode">
                            </div>

                            <button class="btn btn-main-primary btn-block">Create Account</button>
						</form>
					</div>
					<div class="main-signup-footer mg-t-10">
						<p>Already have an account? <a href="/login">Sign In</a></p>
					</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /main-signin-wrapper -->

@endsection
