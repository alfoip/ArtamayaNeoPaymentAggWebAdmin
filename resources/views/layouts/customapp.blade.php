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

        @include('layouts.customstyle')

        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
	<body class="main-body">

		<!-- Loader -->
		<div id="global-loader" class="light-loader">
			<img src="{{URL::asset('assets/img/loaders/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
        <!-- /Loader -->

        @yield('content')

        @livewireScripts
		@include('layouts.customscript')

	</body>
</html>
