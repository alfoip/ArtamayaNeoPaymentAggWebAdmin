@extends('layouts.customapp')

@section('content') 

        <!-- Main-error-wrapper -->
		<div class="main-error-wrapper  page page-h ">
			<h1 class="">500<span class="tx-20">error</span></h1>
			<h2>Oopps. The page you were looking for doesn't exist.</h2>
			<h6>You may have mistyped the address or the page may have moved.</h6><a class="btn btn-outline-indigo" href="{{url('index')}}">Back to Home</a>
		</div>
        <!-- /Main-error-wrapper -->

@endsection         
