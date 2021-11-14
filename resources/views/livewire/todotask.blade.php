@extends('layouts.app')

@section('style')

		<!-- Internal Gallery css -->
		<link href="../../assets/plugins/gallery/gallery.css" rel="stylesheet">

@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Todo-task</span>
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

				<!-- row -->
				<div class="row row-sm">
					<div class="col-xl-9 col-md-12">
						<div class="row row-sm">
							<!-- col -->
							<div class="col-lg-12">
								<div class="card mg-b-20">
									<div class="card-body d-flex p-3">
										<div class="main-content-label mb-0 mg-t-8">User Today Tasks</div>
										<div class="ml-auto"><a class="d-block tx-20" data-placement="top" data-toggle="tooltip" title="Add New User" href="#"><i class="si si-plus text-muted"></i></a></div>
									</div>
								</div>
							</div>
							<!-- /col -->

							<!-- col -->
							<div class="col-xl-4 col-md-6">
								<div class="card mg-b-20">
									<div class="card-body p-0">
										<div class="todo-widget-header d-flex pb-2 pd-20">
											<div class="drop-down-profile" data-toggle="dropdown"><img alt="" class="rounded-circle avatar avatar-md " src="../../assets/img/faces/1.jpg"><span class="assigned-task bg-purple">9</span></div>
											<div class="dropdown-menu tx-13">
												<div class="main-header-profile">
													<div class="tx-16 h5 mg-b-0">Redashna Pechon</div>
													<span>Web Designer</span>
												</div>
												<a class="dropdown-item" href="#">View Total Tasks</a>
												<a class="dropdown-item" href="#">Completed Tasks</a>
												<a class="dropdown-item" href="#">Settings</a>
											</div>
											<div class="ml-auto">
												<div class="">
													<a href="#" data-placement="top" data-toggle="tooltip" title="archive" class="p-2 text-muted"><i class="fas fa-envelope-open-text"></i></a>
													<a  href="#" data-placement="top" data-toggle="tooltip" title="Move to spam" class="p-2 text-muted"><i class="fas fa-exclamation-circle"></i></a>
													<a class="p-2 text-muted" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></a>
													<div class="dropdown-menu tx-13 dropleft">
														<a class="dropdown-item" href="#">Mark As Unread</a>
														<a class="dropdown-item" href="#">Mark As Important</a>
														<a class="dropdown-item" href="#">Add to Tasks</a>
														<a class="dropdown-item" href="#">Add Star</a>
														<a class="dropdown-item" href="#">Move to</a>
														<a class="dropdown-item" href="#">Mute</a>
														<a class="dropdown-item" href="#">Move to Trash</a>
													</div>
												</div>
											</div>
										</div>
										<div class="p-4">
											<span class="tx-12 text-muted">10.54am</span><span class="badge bg-primary-transparent text-primary ml-auto float-right">New task</span>
											<h5 class="tx-14 mb-0 mg-t-5 text-capitalize">Work Assigned by Clients ,try to get new work</h5>
										</div>
										<div class="p-4 border-top">
											<span class="tx-12 text-muted">10.54am</span><span class="badge bg-danger-transparent text-danger ml-auto float-right">Pending task</span>
											<h5 class="tx-14 mb-0 mg-t-5 text-capitalize">Sed ut perspiciatis unde omnis iste natus</h5>
										</div>
									</div>
									<div class="card-footer">
										<a class="btn btn-primary disabled" href="#" title="Assign Task">Assign</a>
										<a class="btn btn-outline-primary ml-auto float-right" href="#" data-placement="top" data-toggle="tooltip" title="View Task">View All</a>
									</div>
								</div>
							</div>
							<!-- /col -->

							<!-- col -->
							<div class="col-xl-4 col-md-6">
								<div class="card mg-b-20">
									<div class="card-body p-0">
										<div class="todo-widget-header d-flex pb-2 pd-20">
											<div class="drop-down-profile" data-toggle="dropdown"><img alt="" class="rounded-circle avatar avatar-md " src="../../assets/img/faces/12.jpg"><span class="assigned-task bg-info">2</span></div>
											<div class="dropdown-menu tx-13">
												<div class="main-header-profile">
													<div class="tx-16 h5 mg-b-0">Redashna Pechon</div>
													<span>Web Designer</span>
												</div>
												<a class="dropdown-item" href="#">View Total Tasks</a>
												<a class="dropdown-item" href="#">Completed Tasks</a>
												<a class="dropdown-item" href="#">Settings</a>
											</div>
											<div class="ml-auto">
												<div class="">
													<a href="#" data-placement="top" data-toggle="tooltip" title="archive" class="p-2 text-muted"><i class="fas fa-envelope-open-text"></i></a>
													<a  href="#" data-placement="top" data-toggle="tooltip" title="Move to spam" class="p-2 text-muted"><i class="fas fa-exclamation-circle"></i></a>
													<a class="p-2 text-muted" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></a>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="#">Mark As Unread</a>
														<a class="dropdown-item" href="#">Mark As Important</a>
														<a class="dropdown-item" href="#">Add to Tasks</a>
														<a class="dropdown-item" href="#">Add Star</a>
														<a class="dropdown-item" href="#">Move to</a>
														<a class="dropdown-item" href="#">Mute</a>
														<a class="dropdown-item" href="#">Move to Trash</a>
													</div>
												</div>
											</div>
										</div>
										<div class="p-4">
											<span class="tx-12 text-muted">10.54am</span><span class="badge bg-primary-transparent text-primary ml-auto float-right">New task</span>
											<h5 class="tx-14 mb-0 mg-t-5 text-capitalize">voluptatem accusantium dolo laudantium</h5>
										</div>
										<div class="p-4 border-top">
											<span class="tx-12 text-muted">10.54am</span><span class="badge bg-danger-transparent text-danger ml-auto float-right">Pending task</span>
											<h5 class="tx-14 mb-0 mg-t-5 text-capitalize">inventore veritatis et quasi architecto</h5>
										</div>
									</div>
									<div class="card-footer">
										<a class="btn btn-primary" href="#" data-placement="top" data-toggle="tooltip" title="Assign Task">Assign</a>
										<a class="btn btn-outline-primary ml-auto float-right" href="#" data-placement="top" data-toggle="tooltip" title="View Task">View All</a>
									</div>
								</div>
							</div>
							<!-- /col -->

							<!-- col -->
							<div class="col-xl-4 col-md-6">
								<div class="card mg-b-20">
									<div class="card-body p-0">
										<div class="todo-widget-header d-flex pb-2 pd-20">
											<div class="drop-down-profile" data-toggle="dropdown"><img alt="" class="rounded-circle avatar avatar-md " src="../../assets/img/faces/9.jpg"><span class="assigned-task bg-danger">6</span></div>
											<div class="dropdown-menu tx-13">
												<div class="main-header-profile">
													<div class="tx-16 h5 mg-b-0">Redashna Pechon</div>
													<span>Web Designer</span>
												</div>
												<a class="dropdown-item" href="#">View Total Tasks</a>
												<a class="dropdown-item" href="#">Completed Tasks</a>
												<a class="dropdown-item" href="#">Settings</a>
											</div>
											<div class="ml-auto">
												<div class="">
													<a href="#" data-placement="top" data-toggle="tooltip" title="archive" class="p-2 text-muted"><i class="fas fa-envelope-open-text"></i></a>
													<a  href="#" data-placement="top" data-toggle="tooltip" title="Move to spam" class="p-2 text-muted"><i class="fas fa-exclamation-circle"></i></a>
													<a class="p-2 text-muted" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></a>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="#">Mark As Unread</a>
														<a class="dropdown-item" href="#">Mark As Important</a>
														<a class="dropdown-item" href="#">Add to Tasks</a>
														<a class="dropdown-item" href="#">Add Star</a>
														<a class="dropdown-item" href="#">Move to</a>
														<a class="dropdown-item" href="#">Mute</a>
														<a class="dropdown-item" href="#">Move to Trash</a>
													</div>
												</div>
											</div>
										</div>
										<div class="p-4">
											<span class="tx-12 text-muted">10.54am</span><span class="badge bg-primary-transparent text-primary ml-auto float-right">New task</span>
											<h5 class="tx-14 mb-0 mg-t-5 text-capitalize">Nemo enim ipsam voluptatem quia voluptas</h5>
										</div>
										<div class="p-4 border-top">
											<span class="tx-12 text-muted">10.54am</span><span class="badge bg-danger-transparent text-danger ml-auto float-right">Pending task</span>
											<h5 class="tx-14 mb-0 mg-t-5 text-capitalize">vero eos et accusamus et iusto odio dignissimos</h5>
										</div>
									</div>
									<div class="card-footer">
										<a class="btn btn-primary" href="#" data-placement="top" data-toggle="tooltip" title="Assign Task">Assign</a>
										<a class="btn btn-outline-primary ml-auto float-right" href="#" data-placement="top" data-toggle="tooltip" title="View Task">View All</a>
									</div>
								</div>
							</div>
							<!-- /col -->

							<!-- col -->
							<div class="col-xl-4 col-md-6">
								<div class="card mg-b-20 mg-lg-b-0">
									<div class="card-body p-0">
										<div class="todo-widget-header d-flex pb-2 pd-20">
											<div class="drop-down-profile" data-toggle="dropdown"><img alt="" class="rounded-circle avatar avatar-md " src="../../assets/img/faces/4.jpg"><span class="assigned-task bg-info">9</span></div>
											<div class="dropdown-menu tx-13">
												<div class="main-header-profile">
													<div class="tx-16 h5 mg-b-0">Redashna Pechon</div>
													<span>Web Designer</span>
												</div>
												<a class="dropdown-item" href="#">View Total Tasks</a>
												<a class="dropdown-item" href="#">Completed Tasks</a>
												<a class="dropdown-item" href="#">Settings</a>
											</div>
											<div class="ml-auto">
												<div class="">
													<a href="#" data-placement="top" data-toggle="tooltip" title="archive" class="p-2 text-muted"><i class="fas fa-envelope-open-text"></i></a>
													<a  href="#" data-placement="top" data-toggle="tooltip" title="Move to spam" class="p-2 text-muted"><i class="fas fa-exclamation-circle"></i></a>
													<a class="p-2 text-muted" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></a>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="#">Mark As Unread</a>
														<a class="dropdown-item" href="#">Mark As Important</a>
														<a class="dropdown-item" href="#">Add to Tasks</a>
														<a class="dropdown-item" href="#">Add Star</a>
														<a class="dropdown-item" href="#">Move to</a>
														<a class="dropdown-item" href="#">Mute</a>
														<a class="dropdown-item" href="#">Move to Trash</a>
													</div>
												</div>
											</div>
										</div>
										<div class="p-4">
											<span class="tx-12 text-muted">10.54am</span><span class="badge bg-primary-transparent text-primary ml-auto float-right">New task</span>
											<h5 class="tx-14 mb-0 mg-t-5 text-capitalize">Ut enim ad minima veniam nostrum exercitationem</h5>
										</div>
										<div class="p-4 border-top">
											<span class="tx-12 text-muted">10.54am</span><span class="badge bg-danger-transparent text-danger ml-auto float-right">Pending task</span>
											<h5 class="tx-14 mb-0 mg-t-5 text-capitalize">Quis autem vel eum iure reprehenderit qui</h5>
										</div>
									</div>
									<div class="card-footer">
										<a class="btn btn-primary disabled" href="#" data-placement="top" data-toggle="tooltip" title="Assign Task">Assign</a>
										<a class="btn btn-outline-primary ml-auto float-right" href="#" data-placement="top" data-toggle="tooltip" title="View Task">View All</a>
									</div>
								</div>
							</div>
							<!-- /col -->

							<!-- col -->
							<div class="col-xl-4  col-md-6">
								<div class="card mg-b-20 mg-lg-b-0">
									<div class="card-body p-0">
										<div class="todo-widget-header d-flex pb-2 pd-20">
											<div class=" drop-down-profile" data-toggle="dropdown"><img alt="" class="rounded-circle avatar avatar-md" src="../../assets/img/faces/15.jpg"><span class="assigned-task bg-primary">7</span></div>
											<div class="dropdown-menu tx-13">
												<div class="main-header-profile">
													<div class="tx-16 h5 mg-b-0">Redashna Pechon</div>
													<span>Web Designer</span>
												</div>
												<a class="dropdown-item" href="#">View Total Tasks</a>
												<a class="dropdown-item" href="#">Completed Tasks</a>
												<a class="dropdown-item" href="#">Settings</a>
											</div>
											<div class="ml-auto">
												<div class="">
													<a href="#" data-placement="top" data-toggle="tooltip" title="archive" class="p-2 text-muted"><i class="fas fa-envelope-open-text"></i></a>
													<a  href="#" data-placement="top" data-toggle="tooltip" title="Move to spam" class="p-2 text-muted"><i class="fas fa-exclamation-circle"></i></a>
													<a class="p-2 text-muted" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></a>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="#">Mark As Unread</a>
														<a class="dropdown-item" href="#">Mark As Important</a>
														<a class="dropdown-item" href="#">Add to Tasks</a>
														<a class="dropdown-item" href="#">Add Star</a>
														<a class="dropdown-item" href="#">Move to</a>
														<a class="dropdown-item" href="#">Mute</a>
														<a class="dropdown-item" href="#">Move to Trash</a>
													</div>
												</div>
											</div>
										</div>
										<div class="p-4">
											<span class="tx-12 text-muted">10.54am</span><span class="badge bg-primary-transparent text-primary ml-auto float-right">New task</span>
											<h5 class="tx-14 mb-0 mg-t-5 text-capitalize">I must explain to you how all this mistaken</h5>
										</div>
										<div class="p-4 border-top">
											<span class="tx-12 text-muted">10.54am</span><span class="badge bg-danger-transparent text-danger ml-auto float-right">Pending task</span>
											<h5 class="tx-14 mb-0 mg-t-5 text-capitalize">I will give you a complete account of the system</h5>
										</div>
									</div>
									<div class="card-footer">
										<a class="btn btn-primary" href="#" data-placement="top" data-toggle="tooltip" title="Assign Task">Assign</a>
										<a class="btn btn-outline-primary ml-auto float-right" href="#" data-placement="top" data-toggle="tooltip" title="View Task">View All</a>
									</div>
								</div>
							</div>
							<!-- /col -->

							<!-- col -->
							<div class="col-xl-4 col-md-6">
								<div class="card mg-b-20 ">
									<div class="card-body p-0">
										<div class="todo-widget-header d-flex pb-2 pd-20">
											<div class="drop-down-profile" data-toggle="dropdown"><img alt="" class="rounded-circle avatar avatar-md " src="../../assets/img/faces/5.jpg"><span class="assigned-task bg-info">4</span></div>
											<div class="dropdown-menu tx-13">
												<div class="main-header-profile">
													<div class="tx-16 h5 mg-b-0">Redashna Pechon</div>
													<span>Web Designer</span>
												</div>
												<a class="dropdown-item" href="#">View Total Tasks</a>
												<a class="dropdown-item" href="#">Completed Tasks</a>
												<a class="dropdown-item" href="#">Settings</a>
											</div>
											<div class="ml-auto">
												<div class="">
													<a href="#" data-placement="top" data-toggle="tooltip" title="archive" class="p-2 text-muted"><i class="fas fa-envelope-open-text"></i></a>
													<a  href="#" data-placement="top" data-toggle="tooltip" title="Move to spam" class="p-2 text-muted"><i class="fas fa-exclamation-circle"></i></a>
													<a class="p-2 text-muted" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></a>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="#">Mark As Unread</a>
														<a class="dropdown-item" href="#">Mark As Important</a>
														<a class="dropdown-item" href="#">Add to Tasks</a>
														<a class="dropdown-item" href="#">Add Star</a>
														<a class="dropdown-item" href="#">Move to</a>
														<a class="dropdown-item" href="#">Mute</a>
														<a class="dropdown-item" href="#">Move to Trash</a>
													</div>
												</div>
											</div>
										</div>
										<div class="p-4">
											<span class="tx-12 text-muted">10.54am</span><span class="badge bg-primary-transparent text-primary ml-auto float-right">New task</span>
											<h5 class="tx-14 mb-0 mg-t-5 text-capitalize">Rationally encounter quences extremely painful</h5>
										</div>
										<div class="p-4 border-top">
											<span class="tx-12 text-muted">10.54am</span><span class="badge bg-danger-transparent text-danger ml-auto float-right">Pending task</span>
											<h5 class="tx-14 mb-0 mg-t-5 text-capitalize">Which of us ever undertakes laborious physical</h5>
										</div>
									</div>
									<div class="card-footer">
										<a class="btn btn-primary" href="#" data-placement="top" data-toggle="tooltip" title="Assign Task">Assign</a>
										<a class="btn btn-outline-primary ml-auto float-right" href="#" data-placement="top" data-toggle="tooltip" title="View Task">View All</a>
									</div>
								</div>
							</div>
							<!-- /col -->
						</div>
					</div>
					<!-- /col -->

					<!-- col -->
					<div class="col-lg-12 col-xl-3">
						<div class="card card--events mg-b-20">
							<div class="card-body">
								<div class="pd-20">
									<div class="main-content-label">Tasks</div>
									<p class="mg-b-0">It is very easy to customize and it uses in website applications.</p>
								</div>
								<div class="list-group to-do-tasks pd-b-10">
									<a class="list-group-item" href="#">
										<div class="event-indicator bg-info"></div>
										<h6 class="mg-t-5">Today Tasks</h6>
									</a>
									<a class="list-group-item" href="#">
										<div class="event-indicator bg-primary"></div>
										<h6 class="mg-t-5">Yesterday Tasks</h6>
									</a>
									<a class="list-group-item" href="#">
										<div class="event-indicator bg-success"></div>
										<h6 class="mg-t-5">Weakly Tasks</h6>
									</a>
									<a class="list-group-item" href="#">
										<div class="event-indicator bg-danger"></div>
										<h6 class="mg-t-5">Mothly Tasks</h6>
									</a>
									<a class="list-group-item" href="#">
										<div class="event-indicator bg-warning"></div>
										<h6 class="mg-t-5">User Tasks</h6>
									</a>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body p-0">
								<div class="pd-t-20 pd-l-20 pd-r-20">
									<div class="main-content-label">Recent Tasks</div>
									<p class="mg-b-20">It is very easy to customize and it uses in website applications.</p>
								</div>
								<div class="d-flex p-3 border-top">
									<label class="ckbox"><input checked="" type="checkbox"><span>Do something more</span></label>
									<span class="ml-auto">
										<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
										<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
									</span>
								</div>
								<div class="d-flex p-3 border-top">
									<label class="ckbox"><input checked="" type="checkbox"><span>Update More More Files</span></label>
									<span class="ml-auto">
										<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
										<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
									</span>
								</div>
								<div class="d-flex p-3 border-top">
									<label class="ckbox"><input type="checkbox"><span>Complete Projects</span></label>
									<span class="ml-auto">
										<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
										<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
									</span>
								</div>
								<div class="d-flex p-3 border-top">
									<label class="ckbox"><input type="checkbox"><span>Finish Something</span></label>
									<span class="ml-auto">
										<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
										<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
									</span>
								</div>
								<div class="d-flex p-3 border-top">
									<label class="ckbox"><input checked="" type="checkbox"><span>System Updated</span></label>
									<span class="ml-auto">
										<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
										<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
									</span>
								</div>
								<div class="d-flex p-3 border-top">
									<label class="ckbox"><input type="checkbox"><span>Change Settings</span></label>
									<span class="ml-auto">
										<i class="si si-pencil text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
										<i class="si si-trash text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->

@endsection

@section('script')
@endsection