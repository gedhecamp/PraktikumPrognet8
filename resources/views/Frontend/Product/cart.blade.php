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
	
	<!-- jQuery -->
	<script src="{{asset('user/vendor/jquery-3.3.1/jquery.min.js')}}"></script>

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
		<!-- BEGIN: CONTENT/SHOPS/SHOP-CART-1 -->
		<div class="c-content-box c-size-lg">
			<div class="container">
				<div class="c-shop-cart-page-1">
					<div class="row c-cart-table-title">
						<div class="col-md-2 c-cart-image">
							<h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Image</h3>
						</div>
						<div class="col-md-4 c-cart-desc">
							<h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Product</h3>
						</div>
						<div class="col-md-2 c-cart-price">
							<h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Unit Price</h3>
						</div>
						<div class="col-md-1 c-cart-qty">
							<h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Qty</h3>
						</div>
						<div class="col-md-2 c-cart-total">
							<h3 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Total</h3>
						</div>
						<div class="col-md-1 c-cart-remove">
						</div>
					</div>

					<!-- BEGIN: SHOPPING CART ITEM ROW -->
					@foreach ($cart as $c)
						<div class="row c-cart-table-row">
							<h2 class="c-font-uppercase c-font-bold c-theme-bg c-font-white c-cart-item-title c-cart-item-first">Item 1</h2>
							<div class="col-md-2 col-sm-3 col-xs-5 c-cart-image">
								<img src="/{{$c->image_name}}"/>
							</div>
							<div class="col-md-4 col-sm-9 col-xs-7 c-cart-desc">
								<h3><a href="shop-product-details-2.html" class="c-font-bold c-theme-link c-font-22 c-font-dark">{{$c->product_name}}</a></h3>
							</div>
							<div class="col-md-2 col-sm-3 col-xs-6 c-cart-price">
								<p class="c-cart-price c-font-bold">
									@if($max==0)
										@php $dis = $c->price; @endphp
										{{'Rp '.number_format($c->price,0,',','.')}}
									@else
										@foreach ($diskon as $d)
											@if ($c->id == $d->id_product)
												@php 
													$flag = 1; 
													$dis = $c->price-($c->price*($d->percentage/100));
													break;
												@endphp
											@else
												@php $flag = 2; @endphp
											@endif
										@endforeach	
										@if ($flag==1)
											{{'Rp '.number_format($dis,0,',','.')}}
										@else
											@php $dis = $c->price; @endphp
											{{'Rp '.number_format($c->price,0,',','.')}}
										@endif
									@endif
								</p>
							</div>
							<div class="col-md-1 col-sm-3 col-xs-6 c-cart-qty">
								<div class="c-input-group c-spinner">
									<input id="qty" name="qty" type="text" class="form-control c-item-{{$c->id}}" value="{{$c->qty}}">
									<div class="c-input-group-btn-vertical">
										<button class="btn btn-default" type="button" data_input="c-item-{{$c->id}}" data-maximum="10"><i class="fa fa-caret-up"></i></button>
										<button class="btn btn-default" type="button" data_input="c-item-{{$c->id}}"><i class="fa fa-caret-down"></i></button>
									</div>
								</div>
							</div>
							<div class="col-md-2 col-sm-3 col-xs-6 c-cart-total">
								<p class="c-cart-price c-font-bold">{{'Rp '.number_format($dis*$c->qty,0,',','.')}}</p>
							</div>
							<div class="col-md-1 col-sm-12 c-cart-remove">
								<form action="/cart/{{$c->cart_id}}" method="post">
									{{ method_field('DELETE') }}
									{{ csrf_field() }}
									<button type="submit" class="btn btn-link"><i class="fa fa-trash-o"></i></button>
									{{-- <a href="/cart/{{$c->cart_id}}" class="c-theme-link c-cart-remove-desktop">×</a> --}}
									{{-- <a href="#" class="c-cart-remove-mobile btn c-btn c-btn-md c-btn-square c-btn-red c-btn-border-1x c-font-uppercase">Remove item from Cart</a> --}}
								</form>
							</div>
						</div>
						@php
							$totalweight = $totalweight + ($c->weight*$c->qty);
							$subtotal = $subtotal + ($dis*$c->qty);
						@endphp
					@endforeach
					
					<!-- END: SHOPPING CART ITEM ROW -->
					
					<div class="c-cart-buttons">
						{{-- <div> --}}
							<a href="/front" class="btn btn-success c-btn-square c-cart-float-l">Continue Shopping</a>
						{{-- </div> --}}
						{{-- <div> --}}
							{{-- <form action="/cart/{{$c->cart_id}}" method="POST"> --}}
								{{ method_field('PUT') }}
								{{ csrf_field() }}
								<button type="submit" class="btn btn-default c-btn-uppercase c-btn-square c-cart-float-r">Update Cart</button>
							{{-- </form> --}}
							{{-- <a href="#" class="btn c-btn btn-lg c-btn-green-2 c-btn-square c-font-white c-font-bold c-font-uppercase c-cart-float-l">Continue Shopping</a> --}}
							{{-- <a href="#" class="btn c-btn btn-lg c-theme-btn c-btn-square c-font-white c-font-bold c-font-uppercase c-cart-float-r">Update Cart</a> --}}
						{{-- </div> --}}
					</div>		
				</div>
			</div>
			<div class="container">
				<div class="c-shop-cart-page-1">
					<div class="row">
						<div class="col-md-4 c-cart-image">
						</div>
						<div class="col-md-4 c-cart-desc">
						</div>
						<div class="col-md-4 c-cart-price">
						</div>
					</div>

					<div class="row c-cart-table-row">
						<div class="col-md-4">
							
						</div>
						<div class="col-md-4">
							<div class="c-cart">
								<div class="card__header">
									<h4 class="c-font-uppercase c-font-bold c-font-16 c-font-grey-2">Calculate Shipping</h4>
								</div>
								<div class="card__content">
									<form id="form_checkout" method="POST" action="/checkout">
										{{ csrf_field() }}
										<div class="form-group">
											{{-- <b><label>Province</label></b> --}}
											<select class="form-control c-square c-theme province"  name="province_id">
												<option>Select a Province</option>
												@foreach ($province['rajaongkir']['results'] as $prov)
													<option value="{{$prov['province_id']}}">{{$prov['province']}}</option>
												@endforeach
											</select>
										</div>
										<div class="form-group">
											<select name="city_id" class="form-control c-square c-theme city">
												<option>Select a City</option>
											</select>
										</div>
										<div class="form-group">
											<select name="courier" class="form-control c-square c-theme courier">
												<option disabled>Select Courier</option>
												@foreach ($courier as $kurir)
													<option value="{{$kurir->courier}}">{{$kurir->courier}}</option>
												@endforeach
											</select>
										</div>
										<div class="form-group">
											<select name="service_name" class="form-control c-square c-theme service">
											</select>
										</div>
										<div class="form-group">
											<textarea name="address" class="form-control  c-square c-theme" rows="3" placeholder="Address" required></textarea>
											{{-- <input type="text" name="address" class="form-control c-square c-theme address" placeholder="Address" required> --}}
										</div>
										{{-- <button type="submit" class="btn btn-primary">Update</button> --}}
	
										<script>
											jQuery(document).ready(function ($) {
												$(function(){
													$('.city').hide();
													$('.courier').hide();
													$('.service').hide();
													$('.cart-totals__button').hide();
																				
													$('.province_val').val($('.province').text());
									
													//province changed
													$('.province').change(function() {
														var data = "";
														$.ajax({
															type:"GET",
															url : "{{url('cart/getcity')}}",
															data : "province_id="+$(this).val(),
															async: false,
															success : function(response) {
																data = response;
																return response;
															},
															error: function() {
																alert('Error occured');
															}
														});
														var string = data.split(",");
														var array = string.filter(function(e){return e;});
														var select = $('.city');
														select.empty();
														console.log(array);
														var i = 0; var key = ""; var name = "";
														$.each(array, function(index, value) {
															if(i % 2 == 0 || i == 0){
																key = value;
															}
															else{
																name = value;
																select.append($('<option></option>').val(key).html(name));
															}
															i++;
														});
														$('.city').show();
														$('.courier').show();
														getShippingCost();
													});
									
													//courier changed
													$('.courier').change(function() {
														getShippingCost();
													});
									
													//city changed
													$('.city').change(function() {
														getShippingCost();
													});
									
													//service changed
													$('.service').change(function() {
														$('.shipping').text($(this).val());
														var subtotal = $('.subtotal').text();
														var shipping = $('.shipping').text();
														var tax = $('.tax').text();
														$('.totalprice').text(parseInt(subtotal)+parseInt(shipping)+parseInt(tax));
														$('.province_val').val($('.province option:selected').text());
														$('.regency_val').val($('.city option:selected').text());
														$('.sub_total_val').val($('.subtotal').text());
														$('.shipping_cost_val').val($('.shipping').text());
														$('.total_val').val($('.totalprice').text());
														$('.service_val').val($('.service option:selected').text());
									
														console.log($('.total_val').val());
													});
									
													$('.cart-totals__button').click(function() {
														$('#form_checkout').submit();
													});
												});
									
												function getShippingCost(){
													$.ajax({
														type:"GET",
														url : "{{url('cart/getshippingcost')}}",
														data : "destination="+$('.city').val()+"&courier="+$('.courier').val()+"&weight="+$('.totalweight').text(),
														async: false,
														success : function(response) {
															data = response;
															return response;
														},
														error: function() {
															alert('Error occured');
														}
													});
									
													var string = data.split(",");
													var array = string.filter(function(e){return e;});
													var select = $('.service');
													select.empty();
													console.log(array);
													var i = 0; var key = ""; var name = "";
													$.each(array, function(index, value) {
														if(i % 2 == 0 || i == 0){
															name = value;
														}
														else{
															key = value;
															select.append($('<option></option>').val(key).html(name));
															if(i == 0){
																select.val(key).change();
															}
														}
														i++;
													});
													$('.service').show();
													$('.shipping').text($('.service').val());
									
													var subtotal = $('.subtotal').text();
													var shipping = $('.shipping').text();
													var tax = $('.tax').text();
													$('.totalprice').text(parseInt(subtotal)+parseInt(shipping)+parseInt(tax));
									
													$('.province_val').val($('.province option:selected').text());
													$('.regency_val').val($('.city option:selected').text());
													$('.sub_total_val').val($('.subtotal').text());
													$('.shipping_cost_val').val($('.shipping').text());
													$('.total_val').val($('.totalprice').text());
													$('.service_val').val($('.service option:selected').text());
									
													console.log($('.total_val').val());
									
													$('.cart-totals__button').show();
												}
									
											});
									</script>
									{{--  --}}
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<!-- BEGIN: SUBTOTAL ITEM ROW -->
							<div class="row">
								<div class="c-cart-subtotal-row c-margin-t-20">
									<div class="col-md-8 c-cart-subtotal-border">
										<h3 class="c-font-uppercase c-font-bold c-right c-font-20 c-font-grey-2"></h3>
									</div>
									<div class="col-md-4 c-cart-subtotal-border">
										<h3 class="c-font-bold c-font-20"></h3>
									</div>
									<div class="col-md-8 c-cart-subtotal">
										<h3 class="c-font-uppercase c-font-bold c-right c-font-16 c-font-grey-2">Subtotal</h3>
									</div>
									<div class="col-md-4 c-cart-subtotal">
										<h3 class="subtotal c-font-bold c-font-16"></h3>
									</div>
									<div class="col-md-8 c-cart-subtotal-border">
										<h3 class="c-font-uppercase c-font-bold c-right c-font-16 c-font-grey-2">Total Weight</h3>
									</div>
									<div class="col-md-4 c-cart-subtotal-border">
										<h3 class="totalweight c-font-bold c-font-16"></h3>
									</div>
								</div>
							</div>
							<!-- END: SUBTOTAL ITEM ROW -->
							<!-- BEGIN: SUBTOTAL ITEM ROW -->
							<div class="row">
								<div class="c-cart-subtotal-row">
									<div class="col-md-8 c-cart-subtotal">
										<h3 class="c-font-uppercase c-font-bold c-right c-font-16 c-font-grey-2">Shipping Fee</h3>
									</div>
									<div class="col-md-4 c-cart-subtotal">
										<h3 class="shipping c-font-bold c-font-16"></h3>
									</div>
									<div class="col-md-8 c-cart-subtotal-border">
										<h3 class="c-font-uppercase c-font-bold c-right c-font-16 c-font-grey-2">Tax</h3>
									</div>
									<div class="col-md-4 c-cart-subtotal-border">
										<h3 class="tax c-font-bold c-font-16">@php $tax = $subtotal*(10/100); @endphp</h3>
									</div>
								</div>
							</div>
							<!-- END: SUBTOTAL ITEM ROW -->
							<!-- BEGIN: SUBTOTAL ITEM ROW -->
							<div class="row">
								<div class="c-cart-subtotal-row">
									<div class="col-md-8  c-cart-subtotal">
										<h3 class="c-font-uppercase c-font-bold c-right c-font-16 c-font-grey-2">Grand Total</h3>
									</div>
									<div class="col-md-4 c-cart-subtotal">
										<h3 class="totalprice c-font-bold c-font-16"></h3>
									</div>
								</div>
							</div>
							<!-- END: SUBTOTAL ITEM ROW -->
							<script>
								jQuery(document).ready(function ($) {
									$(function(){
										$('.subtotal').text('{{$subtotal}}');
										$('.totalweight').text('{{$totalweight}}');
										$('.tax').text('{{$tax}}');
									});
								});
							</script>
							<input type="hidden" name="regency" class="regency_val">
							<input type="hidden" name="province" class="province_val">
							<input type="hidden" name="sub_total" class="sub_total_val">
							<input type="hidden" name="shipping_cost" class="shipping_cost_val">
							<input type="hidden" name="service" class="service_val">
							<input type="hidden" name="total" class="total_val">
						</div>
					</div>

					<div class="c-cart-buttons">
						<button type="submit" class="btn btn-primary c-btn-square c-cart-float-r">Checkout</button>
						{{-- <a href="#" class="btn c-btn btn-lg c-theme-btn c-btn-square c-font-white c-font-bold c-font-uppercase c-cart-float-r">Checkout</a> --}}
					</form>
					</div>
				</div>
			</div>
		</div>
		<!-- END: CONTENT/SHOPS/SHOP-CART-1 -->
	
		<!-- BEGIN: CONTENT/STEPS/STEPS-3 -->
		<div class="c-content-box c-size-md c-theme-bg">
			<div class="container">
				<div class="c-content-step-3 c-font-white">
					<div class="row">
						<div class="col-md-4 c-steps-3-block">
							<i class="fa fa-phone"></i>
							<div class="c-steps-3-title">
								<h2 class="c-font-white c-font-uppercase c-font-30 c-font-thin">087730534612</h2>
								<em>24/7 customer care available</em>
							</div>
						</div>  
						<div class="col-md-4 c-steps-3-block">
							<i class="fa fa-spin fa-spinner"></i>
							<div class="c-steps-3-title">
								<h2 class="c-font-white c-font-uppercase c-font-30 c-font-thin">What's New?</h2>
								<em>Go to shop now!</em>
							</div>
							<span>&nbsp;</span>
						</div>
						<div class="col-md-4 c-steps-3-block">
							<i class="fa fa-instagram"></i>
							<div class="c-steps-3-title">
								<h2 class="c-font-white c-font-uppercase c-font-30 c-font-thin">@gedhecamp</h2>
								<em>Follow for more surprise</em>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END: CONTENT/STEPS/STEPS-3 -->
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
