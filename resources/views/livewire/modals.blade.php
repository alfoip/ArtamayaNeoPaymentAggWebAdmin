@extends('layouts.app')

@section('style')

		<!---Owl Carousel css-->
		<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">

		<!--- Internal Multislider css-->
		<link href="{{URL::asset('assets/plugins/multislider/multislider.css')}}" rel="stylesheet">

@endsection

@section('content')

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Advanced ui</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Modals</span>
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
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Basic Example of Modal View</h6>
									<p class="text-muted card-sub-title">Below is the static example of the basic modal.</p>
								</div>
								<div class="pd-20 bg-light">
									<div class="modal d-block pos-static">
										<div class="modal-dialog" role="document">
											<div class="modal-content modal-content-demo">
												<div class="modal-header">
													<h6 class="modal-title">Modal Header</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
												</div>
												<div class="modal-body">
													<h6>Modal Body</h6>
													<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
												</div>
												<div class="modal-footer">
													<button class="btn ripple btn-primary" type="button">Save changes</button>
													<button class="btn ripple btn-secondary" type="button">Close</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-sm-4 col-md-4">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title">Basic Modal</h6>
								</div>
								<a class="btn ripple btn-primary" data-target="#modaldemo1" data-toggle="modal" href="">View Demo</a>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title">Small Modal</h6>
								</div>
								<a class="btn ripple btn-secondary" data-target="#modaldemo2" data-toggle="modal" href="">View Demo</a>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title">Large Modal</h6>
								</div>
								<a class="btn ripple btn-info" data-target="#modaldemo3" data-toggle="modal" href="">View Demo</a>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title">Grid Modal</h6>
								</div>
								<a class="btn ripple btn-warning" data-target="#modaldemo6" data-toggle="modal" href="">View Demo</a>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title">Modal Success Alert Messages</h6>
								</div>
								<a class="btn ripple btn-success" data-target="#modaldemo4" data-toggle="modal" href="">View Demo</a>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title">Modal Danger Alert Messages</h6>
								</div>
								<a class="btn ripple btn-danger" data-target="#modaldemo5" data-toggle="modal" href="">View Demo</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title">Scrolling Modal</h6>
								</div>
								<a class="btn ripple btn-primary" data-target="#scrollingmodal" data-toggle="modal" href="">View Demo</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title">Scrolling with Content</h6>
								</div>
								<a class="btn ripple btn-secondary" data-target="#scrollmodal" data-toggle="modal" href="">View Demo</a>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Modal Animation Effects</h6>
									<p class="text-muted card-sub-title">Below are different kind of effects to choose from.</p>
								</div>
								<div class="row row-sm">
									<div class="col-sm-6 col-md-4 col-xl-3">
										<a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale" data-toggle="modal" href="#modaldemo8">Scale</a>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20 mg-sm-t-0">
										<a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-slide-in-right" data-toggle="modal" href="#modaldemo8">Slide In Right</a>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20 mg-md-t-0">
										<a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-slide-in-bottom" data-toggle="modal" href="#modaldemo8">Slide In Bottom</a>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20 mg-xl-t-0">
										<a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-newspaper" data-toggle="modal" href="#modaldemo8">Newspaper</a>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
										<a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-fall" data-toggle="modal" href="#modaldemo8">Fall</a>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
										<a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-flip-horizontal" data-toggle="modal" href="#modaldemo8">Flip Horizontal</a>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
										<a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-flip-vertical" data-toggle="modal" href="#modaldemo8">Flip Vertical</a>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
										<a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-super-scaled" data-toggle="modal" href="#modaldemo8">Super Scaled</a>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
										<a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-sign" data-toggle="modal" href="#modaldemo8">Sign</a>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
										<a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-rotate-bottom" data-toggle="modal" href="#modaldemo8">Rotate Bottom</a>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
										<a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-rotate-left" data-toggle="modal" href="#modaldemo8">Rotate Left</a>
									</div>
									<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
										<a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-just-me" data-toggle="modal" href="#modaldemo8">Just Me</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->

@endsection

@section('modal')

		<!-- Basic modal -->
		<div class="modal" id="modaldemo1">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">Basic Modal</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<h6>Modal Body</h6>
						<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
					</div>
					<div class="modal-footer">
						<button class="btn ripple btn-primary" type="button">Save changes</button>
						<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Basic modal -->

		<!-- Small modal -->
		<div class="modal" id="modaldemo2">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h6 class="modal-title">Small Modal</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
					</div>
					<div class="modal-footer justify-content-center">
						<button class="btn ripple btn-primary" type="button">Save changes</button>
						<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Small Modal -->

		<!-- Large Modal -->
		<div class="modal" id="modaldemo3">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">Large Modal</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<h6>Modal Body</h6>
						<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
					</div>
					<div class="modal-footer">
						<button class="btn ripple btn-primary" type="button">Save changes</button>
						<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!--End Large Modal -->

		<!-- Scroll modal -->
		<div class="modal" id="scrollingmodal">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">Scrolling With Content Modal</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
						<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. </p>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
						<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
						<p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</p>
					</div>
					<div class="modal-footer">
						<button class="btn ripple btn-primary" type="button">Save changes</button>
						<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!--End Scroll modal -->

		<!-- Scroll with content modal -->
		<div class="modal" id="scrollmodal">
			<div class="modal-dialog modal-dialog-scrollable" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">Scrolling With Content Modal</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
						<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. </p>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
						<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
						<p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</p>
					</div>
					<div class="modal-footer">
						<button class="btn ripple btn-primary" type="button">Save changes</button>
						<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!--End Scroll with content modal -->

		<!-- Modal alert message -->
		<div class="modal" id="modaldemo4">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content tx-size-sm">
					<div class="modal-body tx-center pd-y-20 pd-x-20">
						<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button> <i class="icon ion-ios-checkmark-circle-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
						<h4 class="tx-success tx-semibold mg-b-20">Congratulations!</h4>
						<p class="mg-b-20 mg-x-20">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p><button aria-label="Close" class="btn ripple btn-success pd-x-25" data-dismiss="modal" type="button">Continue</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal" id="modaldemo5">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content tx-size-sm">
					<div class="modal-body tx-center pd-y-20 pd-x-20">
						<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button> <i class="icon icon ion-ios-close-circle-outline tx-100 tx-danger lh-1 mg-t-20 d-inline-block"></i>
						<h4 class="tx-danger mg-b-20">Error: Cannot process your entry!</h4>
						<p class="mg-b-20 mg-x-20">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p><button aria-label="Close" class="btn ripple btn-danger pd-x-25" data-dismiss="modal" type="button">Continue</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal alert message -->

		<!-- Grid modal -->
		<div class="modal" id="modaldemo6">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">Grid Modal</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-6">
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
							</div>
							<div class="col-md-6">
								<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the who loves toil and pain can procureor sit aspernatur  system.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<p>expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure desires to obtain pain.</p>
							</div>
							<div class="col-md-6">
								<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat aut odit voluptatem.</p>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button class="btn ripple btn-primary" type="button">Save changes</button>
						<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!--End Grid modal -->

		<!-- Modal effects -->
		<div class="modal" id="modaldemo8">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">Modal Header</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<h6>Modal Body</h6>
						<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
					</div>
					<div class="modal-footer">
						<button class="btn ripple btn-primary" type="button">Save changes</button>
						<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal effects-->

		<!-- Message Modal -->
		<div class="modal fade" id="chatmodel" tabindex="-1" role="dialog"  aria-hidden="true">
			<div class="modal-dialog modal-dialog-right chatbox" role="document">
				<div class="modal-content chat border-0">
					<div class="card overflow-hidden mb-0 border-0">
						<!-- action-header -->
						<div class="action-header clearfix">
							<div class="float-left hidden-xs d-flex ml-2">
								<div class="img_cont mr-3">
									<img src="{{URL::asset('assets/img/faces/6.jpg')}}" class="rounded-circle user_img" alt="img">
								</div>
								<div class="align-items-center mt-2">
									<h4 class="text-white mb-0 font-weight-semibold">Daneil Scott</h4>
									<span class="dot-label bg-success"></span><span class="mr-3 text-white">online</span>
								</div>
							</div>
							<ul class="ah-actions actions align-items-center">
								<li class="call-icon">
									<a href="" class="d-done d-md-block phone-button" data-toggle="modal" data-target="#audiomodal">
										<i class="si si-phone"></i>
									</a>
								</li>
								<li class="video-icon">
									<a href="" class="d-done d-md-block phone-button" data-toggle="modal" data-target="#videomodal">
										<i class="si si-camrecorder"></i>
									</a>
								</li>
								<li class="dropdown">
									<a href="" data-toggle="dropdown" aria-expanded="true">
										<i class="si si-options-vertical"></i>
									</a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li><i class="fa fa-user-circle"></i> View profile</li>
										<li><i class="fa fa-users"></i>Add friends</li>
										<li><i class="fa fa-plus"></i> Add to group</li>
										<li><i class="fa fa-ban"></i> Block</li>
									</ul>
								</li>
								<li>
									<a href=""  class="" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true"><i class="si si-close text-white"></i></span>
									</a>
								</li>
							</ul>
						</div>
						<!-- action-header end -->

						<!-- msg_card_body -->
						<div class="card-body msg_card_body">
							<div class="chat-box-single-line">
								<abbr class="timestamp">February 1st, 2019</abbr>
							</div>
							<div class="d-flex justify-content-start">
								<div class="img_cont_msg">
									<img src="{{URL::asset('assets/img/faces/6.jpg')}}" class="rounded-circle user_img_msg" alt="img">
								</div>
								<div class="msg_cotainer">
									Hi, how are you Jenna Side?
									<span class="msg_time">8:40 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end ">
								<div class="msg_cotainer_send">
									Hi Connor Paige i am good tnx how about you?
									<span class="msg_time_send">8:55 AM, Today</span>
								</div>
								<div class="img_cont_msg">
									<img src="{{URL::asset('assets/img/faces/9.jpg')}}" class="rounded-circle user_img_msg" alt="img">
								</div>
							</div>
							<div class="d-flex justify-content-start ">
								<div class="img_cont_msg">
									<img src="{{URL::asset('assets/img/faces/6.jpg')}}" class="rounded-circle user_img_msg" alt="img">
								</div>
								<div class="msg_cotainer">
									I am good too, thank you for your chat template
									<span class="msg_time">9:00 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end ">
								<div class="msg_cotainer_send">
									You welcome Connor Paige
									<span class="msg_time_send">9:05 AM, Today</span>
								</div>
								<div class="img_cont_msg">
									<img src="{{URL::asset('assets/img/faces/9.jpg')}}" class="rounded-circle user_img_msg" alt="img">
								</div>
							</div>
							<div class="d-flex justify-content-start ">
								<div class="img_cont_msg">
									<img src="{{URL::asset('assets/img/faces/6.jpg')}}" class="rounded-circle user_img_msg" alt="img">
								</div>
								<div class="msg_cotainer">
									Yo, Can you update Views?
									<span class="msg_time">9:07 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									But I must explain to you how all this mistaken  born and I will give
									<span class="msg_time_send">9:10 AM, Today</span>
								</div>
								<div class="img_cont_msg">
									<img src="{{URL::asset('assets/img/faces/9.jpg')}}" class="rounded-circle user_img_msg" alt="img">
								</div>
							</div>
							<div class="d-flex justify-content-start ">
								<div class="img_cont_msg">
									<img src="{{URL::asset('assets/img/faces/6.jpg')}}" class="rounded-circle user_img_msg" alt="img">
								</div>
								<div class="msg_cotainer">
									Yo, Can you update Views?
									<span class="msg_time">9:07 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									But I must explain to you how all this mistaken  born and I will give
									<span class="msg_time_send">9:10 AM, Today</span>
								</div>
								<div class="img_cont_msg">
									<img src="{{URL::asset('assets/img/faces/9.jpg')}}" class="rounded-circle user_img_msg" alt="img">
								</div>
							</div>
							<div class="d-flex justify-content-start ">
								<div class="img_cont_msg">
									<img src="{{URL::asset('assets/img/faces/6.jpg')}}" class="rounded-circle user_img_msg" alt="img">
								</div>
								<div class="msg_cotainer">
									Yo, Can you update Views?
									<span class="msg_time">9:07 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									But I must explain to you how all this mistaken  born and I will give
									<span class="msg_time_send">9:10 AM, Today</span>
								</div>
								<div class="img_cont_msg">
									<img src="{{URL::asset('assets/img/faces/9.jpg')}}" class="rounded-circle user_img_msg" alt="img">
								</div>
							</div>
							<div class="d-flex justify-content-start">
								<div class="img_cont_msg">
									<img src="{{URL::asset('assets/img/faces/6.jpg')}}" class="rounded-circle user_img_msg" alt="img">
								</div>
								<div class="msg_cotainer">
									Okay Bye, text you later..
									<span class="msg_time">9:12 AM, Today</span>
								</div>
							</div>
						</div>
						<!-- msg_card_body end -->
						<!-- card-footer -->
						<div class="card-footer">
							<div class="msb-reply d-flex">
								<div class="input-group">
									<input type="text" class="form-control  bg-white" placeholder="Typing....">
									<div class="input-group-append ">
										<button type="button" class="btn btn-primary ">
											<i class="far fa-paper-plane" aria-hidden="true"></i>
										</button>
									</div>
								</div>
							</div>
						</div><!-- card-footer end -->
					</div>
				</div>
			</div>
		</div>

		<!--Video Modal -->
		<div id="videomodal" class="modal fade">
			<div class="modal-dialog" role="document">
				<div class="modal-content bg-dark border-0 text-white">
					<div class="modal-body mx-auto text-center p-7">
						<h5>Mintro Video call</h5>
						<img src="{{URL::asset('assets/img/faces/6.jpg')}}" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
						<h4 class="mb-1 font-weight-semibold">Daneil Scott</h4>
						<h6>Calling...</h6>
						<div class="mt-5">
							<div class="row">
								<div class="col-4">
									<a class="icon icon-shape rounded-circle mb-0 mr-3" href="#">
										<i class="fas fa-video-slash"></i>
									</a>
								</div>
								<div class="col-4">
									<a class="icon icon-shape rounded-circle text-white mb-0 mr-3" href="#" data-dismiss="modal" aria-label="Close">
										<i class="fas fa-phone bg-danger text-white"></i>
									</a>
								</div>
								<div class="col-4">
									<a class="icon icon-shape rounded-circle mb-0 mr-3" href="#">
										<i class="fas fa-microphone-slash"></i>
									</a>
								</div>
							</div>
						</div>
					</div><!-- modal-body -->
				</div>
			</div><!-- modal-dialog -->
		</div><!-- modal -->

		<!-- Audio Modal -->
		<div id="audiomodal" class="modal fade">
			<div class="modal-dialog" role="document">
				<div class="modal-content border-0">
					<div class="modal-body mx-auto text-center p-7">
						<h5>Mintro Voice call</h5>
						<img src="{{URL::asset('assets/img/faces/6.jpg')}}" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
						<h4 class="mb-1 text-dark font-weight-semibold">Daneil Scott</h4>
						<h6>Calling...</h6>
						<div class="mt-5">
							<div class="row">
								<div class="col-4">
									<a class="icon icon-shape rounded-circle mb-0 mr-3" href="#">
										<i class="fas fa-volume-up bg-light text-dark"></i>
									</a>
								</div>
								<div class="col-4">
									<a class="icon icon-shape rounded-circle text-white mb-0 mr-3" href="#" data-dismiss="modal" aria-label="Close">
										<i class="fas fa-phone text-white bg-success"></i>
									</a>
								</div>
								<div class="col-4">
									<a class="icon icon-shape  rounded-circle mb-0 mr-3" href="#">
										<i class="fas fa-microphone-slash bg-light text-dark"></i>
									</a>
								</div>
							</div>
						</div>
					</div><!-- modal-body -->
				</div>
			</div><!-- modal-dialog -->
		</div><!-- modal -->

@endsection

@section('script')

		<!-- Datepicker js -->
		<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

		<!-- Select2 js-->
		<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

		<!-- Internal Modal js-->
		<script src="{{URL::asset('assets/js/modal.js')}}"></script>

@endsection