@extends('layouts.app')

@section('style')

		<!-- Internal fullcalendar Css-->
		<link href="{{URL::asset('assets/plugins/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet">

@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex"><h4 class="content-title mb-0 my-auto">Apps</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Calendar</span></div>
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

				<div class="main-content-app pd-b-0  main-content-calendar pt-0">
					<!-- row -->
					<div class="row row-sm">
						<div class="col-lg-12 col-xl-4">
							<div class=" card card--calendar p-0 mg-b-20">
								<div class="p-4 border-bottom">
									<h2 class="main-content-title mg-b-15 tx-16">My Calendar</h2>
									<div class="fc-datepicker main-datepicker border "></div>
								</div>
								<div class="p-4">
									<label class="main-content-label tx-14 tx-bold mg-b-10">Event List</label>
									<nav class="nav main-nav-column main-nav-calendar-event">
										<a class="nav-link" href=""><i class="icon ion-ios-calendar tx-primary"></i>
										<div>
											Calendar Events
										</div></a> <a class="nav-link" href=""><i class="icon ion-ios-calendar tx-success"></i>
										<div>
											Birthday Events
										</div></a> <a class="nav-link" href=""><i class="icon ion-ios-calendar tx-danger"></i>
										<div>
											Holiday Calendar
										</div></a> <a class="nav-link" href=""><i class="icon ion-ios-calendar tx-warning"></i>
										<div>
											Other Calendar
										</div></a> <a class="nav-link exclude" href=""><i class="icon ion-ios-calendar tx-info"></i>
										<div>
											Discovered Events
										</div></a>
									</nav>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-xl-8">
							<div class="main-content-body main-content-body-calendar card p-4">
								<div class="main-calendar" id="calendar"></div>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>

@endsection

@section('modal')

		<!-- Modal -->
		<div aria-hidden="true" class="modal main-modal-calendar-schedule" id="modalSetSchedule" role="dialog">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h6 class="modal-title">Create New Event</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<form id="mainFormCalendar" name="mainFormCalendar">
							<div class="form-group">
								<input class="form-control" placeholder="Add title" type="text">
							</div>
							<div class="form-group d-flex align-items-center">
								<label class="rdiobox mg-r-60"><input checked name="etype" type="radio" value="event"> <span>Event</span></label> <label class="rdiobox"><input name="etype" type="radio" value="reminder"> <span>Reminder</span></label>
							</div>
							<div class="form-group mg-t-30">
								<label class="tx-13 mg-b-5 tx-gray-600">Start Date</label>
								<div class="row row-xs">
									<div class="col-7">
										<input class="form-control" id="mainEventStartDate" placeholder="Select date" type="text" value="">
									</div><!-- col-7 -->
									<div class="col-5">
										<select class="select2-modal main-event-time" data-placeholder="Select time" id="mainEventStartTime">
											<option label="Select time">
												Select time
											</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="tx-13 mg-b-5 tx-gray-600">End Date</label>
								<div class="row row-xs">
									<div class="col-7">
										<input class="form-control" id="EventEndDate" placeholder="Select date" type="text" value="">
									</div><!-- col-7 -->
									<div class="col-5">
										<select class="select2-modal main-event-time" data-placeholder="Select time" id="EventEndTime">
											<option label="Select time">
												Select time
											</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<textarea class="form-control" placeholder="Write some description (optional)" rows="2"></textarea>
							</div>
							<div class="d-flex mg-t-15 mg-lg-t-30">
								<button class="btn btn-main-primary pd-x-25 mg-r-5">Save</button> <a class="btn btn-light" data-dismiss="modal" href="">Discard</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /Modal -->

		<!-- Modal -->
		<div aria-hidden="true" class="modal main-modal-calendar-event" id="modalCalendarEvent" role="dialog">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<nav class="nav nav-modal-event">
							<a class="nav-link" href="#"><i class="icon ion-md-open"></i></a>
							<a class="nav-link" href="#"><i class="icon ion-md-trash"></i></a>
							<a class="nav-link" data-dismiss="modal" href="#">
							<i class="icon ion-md-close"></i></a>
						</nav>
					</div>
					<div class="modal-body">
						<div class="row row-sm">
							<div class="col-sm-6">
								<label class="tx-13 tx-gray-600 mg-b-2">Start Date</label>
								<p class="event-start-date"></p>
							</div>
							<div class="col-sm-6">
								<label class="tx-13 mg-b-2">End Date</label>
								<p class="event-end-date"></p>
							</div>
						</div><label class="tx-13 tx-gray-600 mg-b-2">Description</label>
						<p class="event-desc tx-gray-900 mg-b-30"></p><a class="btn btn-secondary wd-80" data-dismiss="modal" href="">Close</a>
					</div>
				</div>
			</div>
		</div>
		<!-- /Modal -->

@endsection

@section('script')

		<!-- moomet min js -->
		<script src="{{URL::asset('assets/plugins/moment/min/moment.min.js')}}"></script>

		<!-- Date picker js -->
        <script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

		<!-- Internal Fullcalendar js -->
		<script src="{{URL::asset('assets/plugins/fullcalendar/fullcalendar.min.js')}}"></script>

		<!-- Internal Select2.full.min js -->
		<script src="{{URL::asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>

		<!-- Internal App calendar js -->
		<script src="{{URL::asset('assets/js/app-calendar-events.js')}}"></script>
		<script src="{{URL::asset('assets/js/app-calendar.js')}}"></script>

@endsection
