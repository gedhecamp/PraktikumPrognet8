<!DOCTYPE html>
<!-- 
Theme: JANGO - Ultimate Multipurpose HTML Theme Built With Twitter Bootstrap 3.3.7
Version: 2.0.1
Author: Themehats
Site: http://www.themehats.com
Purchase: http://themeforest.net/item/jango-responsive-multipurpose-html5-template/11987314?ref=themehats
Contact: support@themehats.com
Follow: http://www.twitter.com/themehats
-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"  >
<!--<![endif]-->
<!-- BEGIN HEAD -->

<!-- Mirrored from themehats.com/themes/jango/demos/default/shop-customer-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Mar 2019 09:30:29 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8"/>
	<title>JANGO | Ultimate Multipurpose Bootstrap HTML Theme - Customer Dashboard</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta content="" name="description"/>
	<meta content="" name="author"/>
		<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
	<link href="/assets/plugins/socicon/socicon.css" rel="stylesheet" type="text/css"/>
	<link href="/assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css"/>		
	<link href="/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="/assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
	<link href="/assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css"/>
	<link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->

			<!-- BEGIN: BASE PLUGINS  -->
			<link href="/assets/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>
			<link href="/assets/plugins/owl-carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css"/>
			<link href="/assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
			<link href="/assets/plugins/slider-for-bootstrap/css/slider.css" rel="stylesheet" type="text/css"/>
			<link href="/assets/plugins/sweet-alert/sweetalert.css" rel="stylesheet" />
				<!-- END: BASE PLUGINS -->
	
	
    <!-- BEGIN THEME STYLES -->
	<link href="/assets/demos/default/css/plugins.css" rel="stylesheet" type="text/css"/>
	<link href="/assets/demos/default/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
	<link href="/assets/demos/default/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css"/>
	<link href="/assets/demos/default/css/custom.css" rel="stylesheet" type="text/css"/>
	<!-- END THEME STYLES -->

	<link rel="shortcut icon" href="favicon.ico"/>
</head>

<body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-topbar c-layout-header-topbar-collapse"> 
		
<!-- HEADERS -->
@include('Frontend.Product.header2')
<!-- END: HEADERS -->


@include('Frontend.Layout.userform')

@include('Frontend.Layout.sidebar')

	<!-- BEGIN: PAGE CONTAINER -->
	<div class="c-layout-page">
        <div class="container">
			<div class="c-layout-sidebar-menu c-theme ">
                <!-- BEGIN: LAYOUT/SIDEBARS/SHOP-SIDEBAR-DASHBOARD -->
                <div class="c-sidebar-menu-toggler">
                    <h3 class="c-title c-font-uppercase c-font-bold">My Profile</h3>
                    <a href="javascript:;" class="c-content-toggler" data-toggle="collapse" data-target="#sidebar-menu-1">
                        <span class="c-line"></span> <span class="c-line"></span> <span class="c-line"></span>
                    </a>
                </div>

                <ul class="c-sidebar-menu collapse " id="sidebar-menu-1">
                    <li class="c-dropdown c-open">
                        <a href="javascript:;" class="c-toggler">My Profile<span class="c-arrow"></span></a>
                        <ul class="c-dropdown-menu">
                            <li class="c-active">
                                <a href="shop-customer-dashboard.html">My Dashbord</a>
                            </li>
                            <li class="">
                                <a href="shop-customer-profile.html">Edit Profile</a>
                            </li>
                            <li class="">
                                <a href="shop-order-history.html">Order History</a>
                            </li>
                            <li class="">
                                <a href="shop-customer-addresses.html">My Addresses</a>
                            </li>
                            <li class="">
                                <a href="shop-product-wishlist.html">My Wishlist</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- END: LAYOUT/SIDEBARS/SHOP-SIDEBAR-DASHBOARD -->
            </div>
            
			<div class="c-layout-sidebar-content ">
                <!-- BEGIN: PAGE CONTENT -->
                <!-- BEGIN: CONTENT/SHOPS/SHOP-CUSTOMER-DASHBOARD-1 -->
                <div class="c-content-title-1">
                    <h3 class="c-font-uppercase c-font-bold">My Dashboard</h3>
                    <div class="c-line-left"></div>
                    <p class="">
                        Hello <a href="#" class="c-theme-link">{{Auth::user()->name}}</a> (not <a href="#" class="c-theme-link">{{Auth::user()->name}}</a>? <a href="{{url('/user/logout')}}" class="c-theme-link">Sign out</a>). <br />
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 c-margin-b-20">
                        <h3 class="c-font-uppercase c-font-bold">{{Auth::user()->name}}</h3>
                        <ul class="list-unstyled">
                            <li>Email: <a href="mailto:jango@themehats.com" class="c-theme-link">{{Auth::user()->email}}</a></li>
                        </ul>
                    </div>
                </div>
                <!-- END: CONTENT/SHOPS/SHOP-CUSTOMER-DASHBOARD-1 -->
                <!-- END: PAGE CONTENT -->
			</div>
		</div>
	</div>
	<!-- END: PAGE CONTAINER -->

	<!-- BEGIN: CONTENT/SHOPS/SHOP-PRODUCT-TAB-1 -->
	<div class="c-content-box c-size-md c-no-padding">
		<div class="c-shop-product-tab-1" role="tabpanel">
			<div class="container">
				<ul class="nav nav-justified" role="tablist">
					<li role="presentation" class="active">
						<a class="c-font-uppercase c-font-bold" href="#tab-1" role="tab" data-toggle="tab">Unverified</a>
					</li>
					<li role="presentation">
						<a class="c-font-uppercase c-font-bold" href="#tab-2" role="tab" data-toggle="tab">Delivered</a>
					</li>
					{{-- <li role="presentation">
						<a class="c-font-uppercase c-font-bold" href="#tab-3" role="tab" data-toggle="tab">Cancel & Expired</a>
					</li> --}}
					<li role="presentation">
						<a class="c-font-uppercase c-font-bold" href="#tab-5" role="tab" data-toggle="tab">Cancel & Expired</a>
					</li>
					<li role="presentation">
						<a class="c-font-uppercase c-font-bold" href="#tab-4" role="tab" data-toggle="tab">Success</a>
					</li>
				</ul>
			</div>
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="tab-1"> 
					{{-- <div class="c-product-desc c-center"> --}}
						<div class="container">
							{{-- <img src="/{{$product->image_name}}"/> <br> --}}
							<div class="c-content-panel">
									{{-- <div class="c-label">Hover rows</div> --}}
									<div class="c-body">
										<div class="row">
											<div class="col-md-12">
												<table class="table table-hover">
													<thead>
													<tr>
														<th>No</th>
														<th>Address</th>
														<th>Total</th>
														<th>Timeout</th>
														<th>Status</th>
														<th>Action</th>
													</tr>
													</thead>
													<tbody>
													@foreach ($unverified as $u)
													<tr>
														<td>{{$loop->iteration}}</td>
														<td>{{$u->address}}</td>
														<td data-title="Total">{{'Rp '.number_format($u->total,0,',','.')}}</td>
														<td>
															@if(!empty($u->proof_of_payment))
																{{'Sudah Upload'}}
															@else
																{{$u->timeout}}
															@endif
														</td>
														<td>{{$u->status}}</td>
														<td>
															<button class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">
																<i class="icon-plus"></i>Upload
															</button>
															<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
																<div class="modal-dialog">
																	<div class="modal-content c-square">
																		<div class="modal-header">
																			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
																			<h4 class="modal-title" id="myModalLabel">Upload Bukti Pembayaran</h4>
																		</div>
																		<form action="/uploadbukti" method="POST" enctype='multipart/form-data'>
																		{{ csrf_field() }}
																		<input hidden name="id" value="{{$u->id}}">
																		<div class="modal-body">
																			<input name="images" type="file" class="dropify" data-height="300" />
																		</div>
																		<div class="modal-footer">								
																			<button type="submit" class="btn c-theme-btn c-btn-square c-btn-bold c-btn-uppercase">Upload</button>
																			{{-- <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Close</button> --}}
																		</div>
																		</form>
																	</div>
																	<!-- /.modal-content -->
																</div>
																<!-- /.modal-dialog -->
															</div>
															<button type="button" class="btn btn-danger btn-sm" id="click3" data-id="{{$u->id}}" data-token="{{ csrf_token() }}">
																<i class="icon-close"></i>Cancel
															</button>
														</td>
													</tr>
													@endforeach
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
						</div>
					{{-- </div> --}}
				</div>

				<div role="tabpanel" class="tab-pane fade" id="tab-2">
					<div class="container">
						<div class="c-content-panel">
							{{-- <div class="c-label">Hover rows</div> --}}
							<div class="c-body">
								<div class="row">
									<div class="col-md-12">
										<table class="table table-hover">
											<thead>
											<tr>
												<th>No</th>
												<th>Couries</th>
												<th>Address</th>
												<th>Total</th>
												<th>Timeout</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
											</thead>
											<tbody>
											@foreach ($delivered as $u)
											<tr>
												<td>{{$loop->iteration}}</td>
												<td>{{$u->courier_id}}</td>
												<td>{{$u->address}}</td>
												<td data-title="Total">{{'Rp '.number_format($u->total,0,',','.')}}</td>
												<td>{{$u->timeout}}</td>
												<td>{{$u->status}}</td>
												<td>
													<form action="/transaksi/success/{{$u->id}}" method="POST">
													{{ method_field('DELETE') }}
													{{ csrf_field() }}
													<button type="submit" class="btn btn-success btn-sm">
														<i class="icon-check"></i>Delivered
													</button>
													</form>
												</td>
											</tr>
											@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				{{-- <div role="tabpanel" class="tab-pane fade" id="tab-3">
					<div class="container">
						<div class="c-content-panel">
							<div class="c-body">
								<div class="row">
									<div class="col-md-12">
										<table class="table table-hover">
											<thead>
											<tr>
												<th>No</th>
												<th>Couries</th>
												<th>Address</th>
												<th>Total</th>
												<th>Timeout</th>
												<th>Status</th>
											</tr>
											</thead>
											<tbody>
											@foreach ($cancel as $u)
											<tr>
												<td align='left'>{{$loop->iteration}}</td>
												<td align='left'>{{$u->courier_id}}</td>
												<td align='left'>{{$u->address}}</td>
												<td align='left' data-title="Total">{{'Rp '.number_format($u->total,0,',','.')}}</td>
												<td align='left'>{{$u->timeout}}</td>
												<td align='left'>{{$u->status}}</td>
											</tr>
											@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> --}}

				<div role="tabpanel" class="tab-pane fade" id="tab-5">
					<div class="container">
						<div class="c-content-panel">
							{{-- <div class="c-label">Hover rows</div> --}}
							<div class="c-body">
								<div class="row">
									<div class="col-md-12">
										<table class="table table-hover">
											<thead>
											<tr>
												<th>No</th>
												<th>Couries</th>
												<th>Address</th>
												<th>Total</th>
												<th>Timeout</th>
												<th>Status</th>
											</tr>
											</thead>
											<tbody>
											@foreach ($cancel as $u)
											<tr>
												<td>{{$loop->iteration}}</td>
												<td>{{$u->courier_id}}</td>
												<td>{{$u->address}}</td>
												<td data-title="Total">{{'Rp '.number_format($u->total,0,',','.')}}</td>
												<td>{{$u->timeout}}</td>
												<td>{{$u->status}}</td>
											</tr>
											@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div role="tabpanel" class="tab-pane fade" id="tab-4">
					<div class="container">
						<div class="c-content-panel">
							{{-- <div class="c-label">Hover rows</div> --}}
							<div class="c-body">
								<div class="row">
									<div class="col-md-12">
										<table class="table table-hover">
											<thead>
											<tr>
												<th>No</th>
												<th>Couries</th>
												<th>Address</th>
												<th>Total</th>
												<th>Timeout</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
											</thead>
											<tbody>
											@foreach ($success as $u)
											<tr>
												<td>{{$loop->iteration}}</td>
												<td>{{$u->courier_id}}</td>
												<td>{{$u->address}}</td>
												<td data-title="Total">{{'Rp '.number_format($u->total,0,',','.')}}</td>
												<td>{{$u->timeout}}</td>
												<td>{{$u->status}}</td>
												<td>
													<button class="btn btn-info btn-sm" data-toggle="modal" id="{{$u->id}}" data-target="#exampleModal2" data-whatever="jango">
														<i class="icon-speech"></i>Review
													</button>
													<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
														<div class="modal-dialog">
															<div class="modal-content c-square">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
																	<h4 class="modal-title" id="myModalLabel">Review</h4>
																</div>
																<input hidden name="id" value="{{$u->id}}">
																<div class="modal-body">
																	<form action="/review/{{$u->id}}" method="POST">
																	{{ method_field('DELETE')}}
																	{{ csrf_field() }}
																	<select class="form-control  c-square c-theme" name="product_id">
																		@foreach ($detail as $d)
																			@if ($u->id == $d->transaction_id)
																				<option value="{{$d->product_id}}">{{$d->product_name}}</option>
																			@endif
																		@endforeach
																	</select>
																	<br>
																	<select class="form-control  c-square c-theme" name="rate">
																		<option>1</option>
																		<option>2</option>
																		<option>3</option>
																		<option>4</option>
																		<option>5</option>
																	</select>
																	<br>
																	<textarea class="form-control  c-square c-theme" name="content" rows="3" placeholder="review"></textarea>
																</div>
																<div class="modal-footer">								
																	<button type="submit" class="btn c-theme-btn c-btn-square c-btn-bold c-btn-uppercase">Posting</button>
																	{{-- <button type="button" class="btn c-theme-btn c-btn-border-2x c-btn-square c-btn-bold c-btn-uppercase" data-dismiss="modal">Close</button> --}}
																</div>
																</form>
															</div>
															<!-- /.modal-content -->
														</div>
														<!-- /.modal-dialog -->
													</div>
											</td>
											</tr>
											@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END: CONTENT/SHOPS/SHOP-PRODUCT-TAB-1 -->

@include('Frontend.Product.footer2')

<!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
<div class="c-layout-go2top">
	<i class="icon-arrow-up"></i>
</div>
<!-- END: LAYOUT/FOOTERS/GO2TOP -->

	<!-- BEGIN: LAYOUT/BASE/BOTTOM -->
    <!-- BEGIN: CORE PLUGINS -->
	<!--[if lt IE 9]>
	<script src="../../assets/global/plugins/excanvas.min.js"></script> 
	<![endif]-->
	<script src="/assets/plugins/jquery.min.js" type="text/javascript" ></script>
	<script src="/assets/plugins/jquery-migrate.min.js" type="text/javascript" ></script>
	<script src="/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript" ></script>
	<script src="/assets/plugins/jquery.easing.min.js" type="text/javascript" ></script>
	<script src="/assets/plugins/reveal-animate/wow.js" type="text/javascript" ></script>
	<script src="/assets/demos/default/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript" ></script>

	<!-- END: CORE PLUGINS -->

			<!-- BEGIN: LAYOUT PLUGINS -->
			<script src="/assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
			<script src="/assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
			<script src="/assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
			<script src="/assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
			<script src="/assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
			<script src="/assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js" type="text/javascript"></script>
			<script src="/assets/plugins/js-cookie/js.cookie.js" type="text/javascript"></script>
			<!-- END: LAYOUT PLUGINS -->
	
	<!-- BEGIN: THEME SCRIPTS -->
	<script src="/assets/base/js/components.js" type="text/javascript"></script>
	<script src="/assets/base/js/components-shop.js" type="text/javascript"></script>
	<script src="/assets/base/js/app.js" type="text/javascript"></script>
	<script src="/assets/plugins/sweet-alert/sweetalert.min.js"></script>
	<script src="/assets/base/js/sweet-alert.js"></script>
	<script>
	$(document).ready(function() {    
		App.init(); // init core    
	});
	</script>
	<!-- END: THEME SCRIPTS -->

		<!-- END: LAYOUT/BASE/BOTTOM -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../../../../www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-64667612-1', 'themehats.com');
        ga('send', 'pageview');
    </script>
    </body>
	

<!-- Mirrored from themehats.com/themes/jango/demos/default/shop-customer-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Mar 2019 09:30:29 GMT -->
</html>