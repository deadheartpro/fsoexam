@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Profile</span>
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
						
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row row-sm">
					<div class="col-lg-4">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="pl-0">
									<div class="main-profile-overview">
										<div class="main-img-user profile-user">
											<img alt="" src="{{URL::asset('assets/img/faces/6.jpg')}}"><a class="fas fa-camera profile-edit" href="JavaScript:void(0);"></a>
										</div>
										<div class="d-flex justify-content-between mg-b-20">
											<div>
												<h5 class="main-profile-name">Petey Cruiser</h5>
												<p class="main-profile-name-text">Web Designer</p>
											</div>
										</div>
										<h6>Bio</h6>
										<div class="main-profile-bio">
											pleasure rationally encounter but because pursue consequences that are extremely painful.occur in which toil and pain can procure him some great pleasure.. <a href="">More</a>
										</div><!-- main-profile-bio -->
										<div class="row">
											<div class="col-md-4 col mb20">
												<h5>947</h5>
												<h6 class="text-small text-muted mb-0">Followers</h6>
											</div>
											<div class="col-md-4 col mb20">
												<h5>583</h5>
												<h6 class="text-small text-muted mb-0">Tweets</h6>
											</div>
											<div class="col-md-4 col mb20">
												<h5>48</h5>
												<h6 class="text-small text-muted mb-0">Posts</h6>
											</div>
										</div>
										<hr class="mg-y-30">
										
										
										<!--skill bar-->
									</div><!-- main-profile-overview -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="row row-sm">
							<div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
								<div class="card ">
									<div class="card-body">
										<div class="counter-status d-flex md-mb-0">
											<div class="counter-icon bg-primary-transparent">
												<i class="icon-layers text-primary"></i>
											</div>
											<div class="mr-auto">
												<h5 class="tx-13">Orders</h5>
												<h2 class="mb-0 tx-22 mb-1 mt-1">1,587</h2>
												<p class="text-muted mb-0 tx-11"><i class="si si-arrow-up-circle text-success mr-1"></i>increase</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
								<div class="card ">
									<div class="card-body">
										<div class="counter-status d-flex md-mb-0">
											<div class="counter-icon bg-danger-transparent">
												<i class="icon-paypal text-danger"></i>
											</div>
											<div class="mr-auto">
												<h5 class="tx-13">Revenue</h5>
												<h2 class="mb-0 tx-22 mb-1 mt-1">46,782</h2>
												<p class="text-muted mb-0 tx-11"><i class="si si-arrow-up-circle text-success mr-1"></i>increase</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
								<div class="card ">
									<div class="card-body">
										<div class="counter-status d-flex md-mb-0">
											<div class="counter-icon bg-success-transparent">
												<i class="icon-rocket text-success"></i>
											</div>
											<div class="mr-auto">
												<h5 class="tx-13">Product sold</h5>
												<h2 class="mb-0 tx-22 mb-1 mt-1">1,890</h2>
												<p class="text-muted mb-0 tx-11"><i class="si si-arrow-up-circle text-success mr-1"></i>increase</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<div class="tabs-menu ">
									<!-- Tabs -->
									<ul class="nav nav-tabs profile navtab-custom panel-tabs">
										
										
                                        <li class="active">
											<a href="#profile" data-toggle="tab" aria-expanded="true"> <span class="visible-xs"><i class="las la-user-circle tx-16 mr-1"></i></span> <span class="hidden-xs">Profile</span> </a>
										</li>
									</ul>
								</div>
								<div class="tab-content border-left border-bottom border-right border-top-0 p-4">
                                <form action="{{ route('fonctionnaires.update',$fonctionnaire->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                            <div class="tab-pane active" id="profile">
                                                <form role="form">
                                                    <div class="form-group">
                                                        <label for="FullName">Nom</label>
                                                        <input type="text"  value="{{$fonctionnaire->nom}}" name="nom" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="FullName">Prénom</label>
                                                        <input type="text"  value="{{$fonctionnaire->prenom}}" name="prenom" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="CIN">CIN</label>
                                                        <input type="text"  value="{{$fonctionnaire->cin}}" name="cin" class="form-control">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="sexe">Sexe</label>
                                                        <select name="sexe" class="form-control">
                                                            <option value="Homme" {{ $fonctionnaire->sexe == 'Homme' ? 'selected' : '' }}>Homme</option>
                                                            <option value="Femme" {{ $fonctionnaire->sexe == 'Femme' ? 'selected' : '' }}>Femme</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="type">type</label>
                                                        <input type="text"  value="{{$fonctionnaire->type}}" name="type" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="etat">etat</label>
                                                        <input type="text"  value="{{$fonctionnaire->etat}}" name="etat" class="form-control">
                                                    </div>
                                                    <div class="form-group">
														<label for="id_service">Service</label>
														<select name="id_service" id="id_service" class="form-control" required>
															@foreach($services as $id => $nom)
																<option value="{{ $id }}" {{ $fonctionnaire->service->nom == $nom ? 'selected' : '' }}>
																	{{ $nom }}
																</option>
															@endforeach
														</select>
													</div>
													
                                                    <button class="btn btn-primary waves-effect waves-light w-md" type="submit">Save</button>
                                                </form>
                                            </div>
                                </form>
   
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
@endsection