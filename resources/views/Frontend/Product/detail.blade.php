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

<!-- Mirrored from themehats.com/themes/jango/demos/default/shop-product-details-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Mar 2019 09:30:21 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8"/>
	<title>Product Details 2</title>
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
	<link href="/assets/plugins/revo-slider/css/settings.css" rel="stylesheet" type="text/css"/>
	<link href="/assets/plugins/revo-slider/css/layers.css" rel="stylesheet" type="text/css"/>
	<link href="/assets/plugins/revo-slider/css/navigation.css" rel="stylesheet" type="text/css"/>
	<link href="/assets/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>
	<link href="/assets/plugins/owl-carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css"/>
	<link href="/assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
	<link href="/assets/plugins/slider-for-bootstrap/css/slider.css" rel="stylesheet" type="text/css"/>
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

	<!-- BEGIN: PAGE CONTENT -->
	<!-- BEGIN: CONTENT/SHOPS/SHOP-PRODUCT-DETAILS-2 -->
	<div class="c-content-box c-size-lg c-overflow-hide c-bg-white">
		<div class="container">
			<div class="c-shop-product-details-2">
				<div class="row">
					<div class="col-md-6">
						<div class="c-product-gallery">
							<div class="c-product-gallery-content">
								@foreach ($images as $img)
									<div class="c-zoom">
										<img src="/{{$img->image_name}}">
									</div>
								@endforeach
							</div>
							<div class="row c-product-gallery-thumbnail">
								@foreach ($images as $img)
									<div class="col-xs-3 c-product-thumb">
										<img src="/{{$img->image_name}}">
									</div>
								@endforeach
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="c-product-meta">
							<div class="c-content-title-1">
								<h3 class="c-font-uppercase c-font-bold">{{$product->product_name}}</h3>
								<div class="c-line-left"></div>
							</div>
							<div class="c-product-badge">
								@foreach ($diskon as $dis)
										@if ($product->id == $dis->id_product)
											<div class="c-product-sale">Sale</div>
										@endif
									@endforeach
								{{-- <div class="c-product-new">New</div> --}}
							</div>
							<div class="c-product-review">
								<div class="c-product-rating c-font-center">
									<i class="fa fa-star c-font-blue"></i>
									<i class="fa fa-star c-font-blue"></i>
									<i class="fa fa-star c-font-blue"></i>
									<i class="fa fa-star-half-o c-font-blue"></i>
									<i class="fa fa-star-o c-font-blue"></i>
								</div>
								<div class="c-product-write-review">
									<a class="c-font-blue" href="#">Write a review</a>
								</div>
							</div>
							<div class="c-product-price">
								@if($max==0)
									<p class="c-price c-font-center c-font-15 c-font-slim">Rp {{number_format($row->price,0,',','.')}}
									</p>
								@else
									@foreach ($diskon as $dis)
										@if ($product->product_id == $dis->id_product)
											@php 
												$flag = 1; 
												$diss = $product->price*($dis->percentage/100);
												break;
											@endphp
										@else
											@php $flag = 2; @endphp
										@endif
									@endforeach
									@if ($flag==1)
										<p class="c-price c-font-slim">Rp {{number_format($product->price-$diss,0,',','.')}} &nbsp;
											<span class="c-font-line-through c-font-red">Rp {{number_format($product->price,0,',','.')}}</span>
										</p>
									@else
										<p class="c-price c-font-slim">Rp {{number_format($product->price,0,',','.')}}
										</p>
									@endif
								@endif
							</div>
							<div class="c-product-short-desc">
								@php
									echo $product->description
								@endphp
							</div>
							<form class="product__options" action="/cart" method="POST">
								{{ csrf_field() }}
								<input name="product_id" value="{{$product->product_id}}" hidden>
								<div class="c-product-add-cart c-margin-t-20">
									<div class="row">
										<div class="col-sm-4 col-xs-12">
											<div class="c-input-group c-spinner">
												<p class="c-product-meta-label c-product-margin-2 c-font-uppercase c-font-bold">QTY:</p>
												<input id="qty" name="qty" type="text" class="form-control c-item-1" value="1">
												<div class="c-input-group-btn-vertical">
													<button class="btn btn-default" type="button" data_input="c-item-1"><i class="fa fa-caret-up"></i></button>
													<button class="btn btn-default" type="button" data_input="c-item-1"><i class="fa fa-caret-down"></i></button>
												</div>
											</div>
										</div>
										<div class="col-sm-12 col-xs-12 c-margin-t-20">
											<button type="submit" class="btn c-btn btn-lg c-font-bold c-font-white c-theme-btn c-btn-square c-font-uppercase">Add to Cart</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END: CONTENT/SHOPS/SHOP-PRODUCT-DETAILS-2 -->

	<!-- BEGIN: CONTENT/SHOPS/SHOP-PRODUCT-TAB-1 -->
	<div class="c-content-box c-size-md c-no-padding">
		<div class="c-shop-product-tab-1" role="tabpanel">
			<div class="container">
				<ul class="nav nav-justified" role="tablist">
					<li role="presentation" class="active">
						<a class="c-font-uppercase c-font-bold" href="#tab-1" role="tab" data-toggle="tab">Description</a>
					</li>
					{{-- <li role="presentation">
						<a class="c-font-uppercase c-font-bold" href="#tab-2" role="tab" data-toggle="tab">Additional Information</a>
					</li> --}}
					<li role="presentation">
						<a class="c-font-uppercase c-font-bold" href="#tab-3" role="tab" data-toggle="tab">Reviews (35)</a>
					</li>
				</ul>
			</div>
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="tab-1"> 
					<div class="c-product-desc c-center">
						<div class="container">
							<img src="/{{$product->image_name}}"/> <br>
							<br>
							@php
								echo $product->description
							@endphp
						</div>
					</div>
				</div>

				{{-- <div role="tabpanel" class="tab-pane fade" id="tab-2">
					<div class="container">
						<p class="c-center"><strong>Sizes:</strong> S, M, L, XL</p><br>
						<p class="c-center"><strong>Colors:</strong> Red, Black, Beige, White</p><br/>
					</div>
					<div class="c-product-tab-meta-bg c-bg-grey c-center">
						<div class="container">
							<p class="c-product-tab-meta"><strong>SKU:</strong> 1410SL</p>
							<p class="c-product-tab-meta"><strong>Categories:</strong> <a href="#">Jacket</a>, <a href="#">Winter</a></p>
						</div>
					</div>
				</div> --}}

				<div role="tabpanel" class="tab-pane fade" id="tab-3">
					<div class="container">
						<h3 class="c-font-uppercase c-font-bold c-font-22 c-center c-margin-b-40 c-margin-t-40">Reviews for Warm Winter Jacket</h3>
						{{-- @foreach ($collection as $item) --}}
							<div class="row c-margin-t-40">
								<div class="col-xs-6">
									<div class="c-user-avatar">
										<img src="../../assets/base/img/content/avatars/team8.jpg"/>
									</div>
									<div class="c-product-review-name">
										<h3 class="c-font-bold c-font-24 c-margin-b-5">Alice</h3>
										<p class="c-date c-theme-font c-font-14">July 4, 2015</p>
									</div>
								</div>
								<div class="col-xs-6">
									<div class="c-product-rating c-right">
										<i class="fa fa-star c-font-blue"></i>
										<i class="fa fa-star c-font-blue"></i>
										<i class="fa fa-star c-font-blue"></i>
										<i class="fa fa-star c-font-blue"></i>
										<i class="fa fa-star-half-o c-font-blue"></i>
									</div>
								</div>
							</div>
							<div class="c-product-review-content">
								<p>
									Lorem ipsum dolor sit amet, consectetuer
									adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
									magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
								</p>
							</div>
						{{-- @endforeach --}}
						<div class="row c-product-review-input">
							<h3 class="c-font-bold c-font-uppercase">Submit your Review</h3>
							<div>
								<label for="review-stars" class="col-md-4 control-label" style="width: 100%">Review Stars</label>
								<select id="review-stars" class="form-control  c-square c-theme" style="width: 20%">
									<option>5 Stars Rating</option>
									<option>4 Stars Rating</option>
									<option>3 Stars Rating</option>
									<option>2 Stars Rating</option>
									<option>1 Stars Rating</option>
								</select>
							</div>
							<div class="form-group">
								<label for="review-text" class="col-md-4 control-label">Your Review</label> 
								<textarea class="form-control  c-square c-theme" id="review-text" rows="6"></textarea>
							</div>
							<button class="btn c-btn c-btn-square c-theme-btn c-font-bold c-font-uppercase c-font-white">Submit Review</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END: CONTENT/SHOPS/SHOP-PRODUCT-TAB-1 -->

	<!-- BEGIN: CONTENT/SHOPS/SHOP-2-2 MOST POPULAR -->
	{{-- <div class="c-content-box c-size-md c-overflow-hide c-bs-grid-small-space">
		<div class="container">
			<div class="c-content-title-4">
				<h3 class="c-font-uppercase c-center c-font-bold c-line-strike"><span class="c-bg-white">Most Popular</span></h3>
			</div>
			<div class="row">
				<div data-slider="owl">
					<div class="owl-carousel owl-theme c-theme owl-small-space c-owl-nav-center" data-rtl="false" data-items="4" data-slide-speed="8000">
						<div class="item">
							<div class="c-content-product-2 c-bg-white c-border">
								<div class="c-content-overlay">
									<div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
									<div class="c-overlay-wrapper">
										<div class="c-overlay-content">
											<a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
										</div>
									</div>
									<div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop5/18.png);"></div>
								</div>
								<div class="c-info">
									<p class="c-title c-font-18 c-font-slim">Samsung Galaxy Note 4</p>
									<p class="c-price c-font-16 c-font-slim">$548 &nbsp;
										<span class="c-font-16 c-font-line-through c-font-red">$600</span>
									</p>
								</div>
								<div class="btn-group btn-group-justified" role="group">
									<div class="btn-group c-border-top" role="group">
										<a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
									</div>
									<div class="btn-group c-border-left c-border-top" role="group">
										<a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="c-content-product-2 c-bg-white c-border">
								<div class="c-content-overlay">
									<div class="c-overlay-wrapper">
										<div class="c-overlay-content">
											<a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
										</div>
									</div>
									<div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop5/27.png);"></div>
								</div>
								<div class="c-info">
									<p class="c-title c-font-18 c-font-slim">Samsung Galaxy S4</p>
									<p class="c-price c-font-16 c-font-slim">$548 &nbsp;
										<span class="c-font-16 c-font-line-through c-font-red">$600</span>
									</p>
								</div>
								<div class="btn-group btn-group-justified" role="group">
									<div class="btn-group c-border-top" role="group">
										<a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
									</div>
									<div class="btn-group c-border-left c-border-top" role="group">
										<a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="c-content-product-2 c-bg-white c-border">
								<div class="c-content-overlay">
									<div class="c-overlay-wrapper">
										<div class="c-overlay-content">
											<a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
										</div>
									</div>
									<div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop5/21.png);"></div>
								</div>
								<div class="c-info">
									<p class="c-title c-font-18 c-font-slim">Apple iPhone 5</p>
									<p class="c-price c-font-16 c-font-slim">$548 &nbsp;
										<span class="c-font-16 c-font-line-through c-font-red">$600</span>
									</p>
								</div>
								<div class="btn-group btn-group-justified" role="group">
									<div class="btn-group c-border-top" role="group">
										<a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
									</div>
									<div class="btn-group c-border-left c-border-top" role="group">
										<a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="c-content-product-2 c-bg-white c-border">
								<div class="c-content-overlay">
									<div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
									<div class="c-label c-label-right c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">New</div>
									<div class="c-overlay-wrapper">
										<div class="c-overlay-content">
											<a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
										</div>
									</div>
									<div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop5/22.png);"></div>
								</div>
								<div class="c-info">
									<p class="c-title c-font-18 c-font-slim">HTC</p>
									<p class="c-price c-font-16 c-font-slim">$548 &nbsp;
										<span class="c-font-16 c-font-line-through c-font-red">$600</span>
									</p>
								</div>
								<div class="btn-group btn-group-justified" role="group">
									<div class="btn-group c-border-top" role="group">
										<a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
									</div>
									<div class="btn-group c-border-left c-border-top" role="group">
										<a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="c-content-product-2 c-bg-white c-border">
								<div class="c-content-overlay">
									<div class="c-overlay-wrapper">
										<div class="c-overlay-content">
											<a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
										</div>
									</div>
									<div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop5/20.png);"></div>
								</div>
								<div class="c-info">
									<p class="c-title c-font-18 c-font-slim">Apple iPhone 6</p>
									<p class="c-price c-font-16 c-font-slim">$548 &nbsp;
										<span class="c-font-16 c-font-line-through c-font-red">$600</span>
									</p>
								</div>
								<div class="btn-group btn-group-justified" role="group">
									<div class="btn-group c-border-top" role="group">
										<a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
									</div>
									<div class="btn-group c-border-left c-border-top" role="group">
										<a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="c-content-product-2 c-bg-white c-border">
								<div class="c-content-overlay">
									<div class="c-label c-bg-red-2 c-font-uppercase c-font-white c-padding-10 c-font-13 c-font-bold">Hot</div>
									<div class="c-overlay-wrapper">
										<div class="c-overlay-content">
											<a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
										</div>
									</div>
									<div class="c-bg-img-center-contain c-overlay-object" data-height="height" style="height: 270px; background-image: url(../../assets/base/img/content/shop5/24.png);"></div>
								</div>
								<div class="c-info">
									<p class="c-title c-font-18 c-font-slim">Apple iPhone 6+</p>
									<p class="c-price c-font-16 c-font-slim">$548 &nbsp;
										<span class="c-font-16 c-font-line-through c-font-red">$600</span>
									</p>
								</div>
								<div class="btn-group btn-group-justified" role="group">
									<div class="btn-group c-border-top" role="group">
										<a href="shop-product-wishlist.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Wishlist</a>
									</div>
									<div class="btn-group c-border-left c-border-top" role="group">
										<a href="shop-cart.html" class="btn btn-lg c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-red-2-hover c-btn-product">Cart</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}
	<!-- END: CONTENT/SHOPS/SHOP-2-2 -->

	<!-- END: PAGE CONTENT -->
</div>
<!-- END: PAGE CONTAINER -->

@include('Frontend.Product.footer2')
	
<!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
<div class="c-layout-go2top">
	<i class="icon-arrow-up"></i>
</div>
<!-- END: LAYOUT/FOOTERS/GO2TOP -->



	<!-- BEGIN: LAYOUT/BASE/BOTTOM -->
    <!-- BEGIN: CORE PLUGINS -->
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
	<script src="/assets/plugins/smooth-scroll/jquery.smooth-scroll.js" type="text/javascript"></script>
	<script src="/assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js" type="text/javascript"></script>
	<script src="/assets/plugins/js-cookie/js.cookie.js" type="text/javascript"></script>
	<!-- END: LAYOUT PLUGINS -->
	
	<!-- BEGIN: THEME SCRIPTS -->
	<script src="/assets/base/js/components.js" type="text/javascript"></script>
	<script src="/assets/base/js/components-shop.js" type="text/javascript"></script>
	<script src="/assets/base/js/app.js" type="text/javascript"></script>
	<script>
	$(document).ready(function() {    
		App.init(); // init core    
	});
	</script>
	<!-- END: THEME SCRIPTS -->

	<!-- BEGIN: PAGE SCRIPTS -->
		<script src="/assets/plugins/zoom-master/jquery.zoom.min.js" type="text/javascript"></script>
	<!-- END: PAGE SCRIPTS -->
	
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
	

<!-- Mirrored from themehats.com/themes/jango/demos/default/shop-product-details-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Mar 2019 09:30:21 GMT -->
</html>
