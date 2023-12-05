@extends('layouts.master')
@section('css')
<!-- Internal Select2 css -->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<!--Internal  Datetimepicker-slider css -->
<link href="{{URL::asset('assets/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/pickerjs/picker.min.css')}}" rel="stylesheet">
<!-- Internal Spectrum-colorpicker css -->
<link href="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Forms</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Form-Elements</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-info btn-icon ml-2"><i class="mdi mdi-filter-variant"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
						</div>
						<div class="mb-3 mb-xl-0">
							<div class="btn-group dropdown">
								<button type="button" class="btn btn-primary">14 Aug 2019</button>
								<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">
									<a class="dropdown-item" href="#">2015</a>
									<a class="dropdown-item" href="#">2016</a>
									<a class="dropdown-item" href="#">2017</a>
									<a class="dropdown-item" href="#">2018</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif

				<form method="POST" action="{{ route('fonctionnaires.store') }}">
					@csrf <!-- CSRF Protection -->

							<div class="row row-sm">
								<div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
									<div class="card  box-shadow-0">
										<div class="card-header">
											<h4 class="card-title mb-1">Default Form</h4>
											<p class="mb-2">It is Very Easy to Customize and it uses in your website apllication.</p>
										</div>
										<div class="card-body pt-0">
											<form class="form-horizontal" >
												<div class="form-group">
													<input type="text" class="form-control"  name="nom" placeholder="Nom">
												</div>
												<div class="form-group">
													<input type="text" class="form-control" name="prenom" placeholder="Prénom">
												</div>
												<div class="form-group">
													<input type="text" class="form-control" name="cin" placeholder="CIN">
												</div>
												<div class="form-group">
													<select class="form-control select2-no-search" name="sexe">
														<option label="Choose one">
														</option>
														<option value="Homme">
															Homme
														</option>
														<option value="Femme">
														Femme
														</option>
														
													</select>
												</div>
												
												<div class="form-group">
													<input type="text" class="form-control" name="type" placeholder="Type">
												</div>
												<div class="form-group">
													<input type="text" class="form-control" name="etat" placeholder="Etat">
												</div>
										
												<div class="form-group">
														<label for="id_service">Service</label>
														<select name="id_service" id="id_service" class="form-control" required>
															@foreach($services as $id => $nom)
																<option value="{{ $id }}">{{ $nom }}</option>
															@endforeach
														</select>
												</div>
												
												
												<div class="form-group mb-0 mt-3 justify-content-end">
													<div>
														<button type="submit" class="btn btn-primary">Sign in</button>
														<button type="submit" class="btn btn-secondary">Cancel</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
								
							</div>
							<!-- row -->

							
						</div>
						<!-- Container closed -->
					</div>
					<!-- main-content closed -->
				</form>
@endsection
@section('js')
<!--Internal  Datepicker js -->
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!--Internal  jquery.maskedinput js -->
<script src="{{URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>
<!--Internal  spectrum-colorpicker js -->
<script src="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js')}}"></script>
<!-- Internal Select2.min js -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!--Internal Ion.rangeSlider.min js -->
<script src="{{URL::asset('assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
<!--Internal  jquery-simple-datetimepicker js -->
<script src="{{URL::asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>
<!-- Ionicons js -->
<script src="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>
<!--Internal  pickerjs js -->
<script src="{{URL::asset('assets/plugins/pickerjs/picker.min.js')}}"></script>
<!-- Internal form-elements js -->
<script src="{{URL::asset('assets/js/form-elements.js')}}"></script>
@endsection