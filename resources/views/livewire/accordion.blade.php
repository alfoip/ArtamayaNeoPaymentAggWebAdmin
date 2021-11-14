@extends('layouts.app')

@section('style')
@endsection

@section('content')           
            
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Advanced ui</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Accordions</span>
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
						<div class="card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Basic Style Accordion</h6>
									<p class="text-muted card-sub-title">The default collapse behavior to create an accordion.</p>
								</div>
								<div aria-multiselectable="true" class="accordion" id="accordion" role="tablist">
									<div class="card">
										<div class="card-header" id="headingOne" role="tab">
											<a aria-controls="collapseOne" aria-expanded="true" data-toggle="collapse" href="#collapseOne">Making a Beautiful CSS3 Button Set</a>
										</div>
										<div aria-labelledby="headingOne" class="collapse show" data-parent="#accordion" id="collapseOne" role="tabpanel">
											<div class="card-body">
												A concisely coded CSS3 button set increases usability across the board, gives you a ton of options, and keeps all the code involved to an absolute minimum. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="headingTwo" role="tab">
											<a aria-controls="collapseTwo" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseTwo">Horizontal Navigation Menu Fold Animation</a>
										</div>
										<div aria-labelledby="headingTwo" class="collapse" data-parent="#accordion" id="collapseTwo" role="tabpanel">
											<div class="card-body">
												Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore.
											</div>
										</div>
									</div>
									<div class="card mb-0">
										<div class="card-header" id="headingThree" role="tab">
											<a aria-controls="collapseThree" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseThree">Creating CSS3 Button with Rounded Corners</a>
										</div>
										<div aria-labelledby="headingThree" class="collapse" data-parent="#accordion" id="collapseThree" role="tabpanel">
											<div class="card-body">
												Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore.
											</div>
										</div><!-- collapse -->
									</div>
								</div><!-- accordion -->
							</div>
						</div>
					</div>
				</div>
				<!-- End Row -->

				<!-- Row -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Colored Style Accordion</h6>
									<p class="text-muted card-sub-title">The default collapse behavior to create an accordion.</p>
								</div>
								<div aria-multiselectable="true" class="accordion accordion-color" id="accordion2" role="tablist">
									<div class="card">
										<div class="card-header" id="headingOne2" role="tab">
											<a aria-controls="collapseOne2" aria-expanded="false" data-toggle="collapse" href="#collapseOne2">Making a Beautiful CSS3 Button Set</a>
										</div>
										<div aria-labelledby="headingOne2" class="collapse show" data-parent="#accordion2" id="collapseOne2" role="tabpanel">
											<div class="card-body">
												A concisely coded CSS3 button set increases usability across the board, gives you a ton of options, and keeps all the code involved to an absolute minimum. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="headingTwo2" role="tab">
											<a aria-controls="collapseTwo2" aria-expanded="true" class="collapsed" data-toggle="collapse" href="#collapseTwo2">Horizontal Navigation Menu Fold Animation</a>
										</div>
										<div aria-labelledby="headingTwo2" class="collapse" data-parent="#accordion2" id="collapseTwo2" role="tabpanel">
											<div class="card-body">
												Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore.
											</div>
										</div>
									</div>
									<div class="card mb-0">
										<div class="card-header" id="headingThree2" role="tab">
											<a aria-controls="collapseThree2" aria-expanded="false" class="collapsed" data-toggle="collapse" href="#collapseThree2">Creating CSS3 Button with Rounded Corners</a>
										</div>
										<div aria-labelledby="headingThree2" class="collapse" data-parent="#accordion2" id="collapseThree2" role="tabpanel">
											<div class="card-body">
												Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore.
											</div>
										</div><!-- collapse -->
									</div>
								</div><!-- accordion -->
							</div>
							<div class="card-footer">
								<table class="table main-table-reference mt-0 mb-0">
									<thead>
										<tr>
											<th class="wd-40p">Class Reference</th>
											<th class="wd-60p">Values</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><code class="pd-0 bg-transparent">class="accordion accordion-[value]"</code></td>
											<td>indigo | blue | dark | gray</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->

@endsection

@section('script')

		<!-- Datepicker js -->
		<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

		<!-- Select2 js-->
		<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

@endsection

