<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="Description" content="{{ env('APP_DESCRIPTION') }}">
        <meta name="Author" content="{{ env('APP_AUTHOR') }}">
        <meta name="Keywords" content="{{ env('APP_KEYWORD') }}"/>

        <!-- Title -->
        <title> {{ env('APP_NAME') }} </title>

		@include('layouts.mainhorizontallayouts.style')

        <meta name="csrf-token" content="{{ csrf_token() }}">
	</head>
	<body class="main-body app sidebar-mini Light-mode">

		<!-- Loader -->
		<div id="global-loader" class="light-loader">
			<img src="{{URL::asset('assets/img/loaders/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

		<!-- Page -->
		<div class="page">

			@include('layouts.mainhorizontallayouts.main-header')

			@include('layouts.mainhorizontallayouts.mobile-header')

			@include('layouts.mainhorizontallayouts.horizontal-main')

			<!-- main-content opened -->
			<div class="main-content horizontal-content">

				<!-- container -->
				<div class="container">

					@yield('content')

				</div>
				<!-- Container closed -->

			</div>
			<!-- main-content closed -->

			@include('layouts.mainhorizontallayouts.right-sidebar')

			@yield('modal')

			@include('layouts.mainhorizontallayouts.footer')

		</div>
		<!--end  Page -->

        @livewireScripts
        @include('layouts.mainhorizontallayouts.script')
	</body>
</html>
