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

<!-- Mirrored from themehats.com/themes/jango/demos/default/shop-checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Mar 2019 09:30:29 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8"/>
	<title>JANGO | Ultimate Multipurpose Bootstrap HTML Theme - Checkout</title>
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
        <div class="c-content-box c-size-lg">
            <div class="container">
                <form class="c-shop-form-1">
                    <div class="row">
                        <!-- BEGIN: ADDRESS FORM -->
                        <div class="col-md-7 c-padding-20">
                            <!-- BEGIN: BILLING ADDRESS -->
                            <h3 class="c-font-bold c-font-uppercase c-font-24">Billing Address</h3>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="control-label">Country</label>
                                    <select class="form-control c-square c-theme">
                                        <option value="1">Malaysia</option>
                                        <option value="2">Singapore</option>
                                        <option value="3">Indonesia</option>
                                        <option value="4">Thailand</option>
                                        <option value="5">China</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label">First Name</label>
                                            <input type="text" class="form-control c-square c-theme" placeholder="First Name">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Last Name</label>
                                            <input type="text" class="form-control c-square c-theme" placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="control-label">Company Name</label>
                                    <input type="text" class="form-control c-square c-theme" placeholder="Company Name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="control-label">Address</label>
                                    <input type="text" class="form-control c-square c-theme" placeholder="Street Address">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control c-square c-theme" placeholder="Apartment, suite, unit etc. (optional)">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="control-label">Town / City</label>
                                    <input type="text" class="form-control c-square c-theme" placeholder="Town / City">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label">State / County</label> <select class="form-control c-square c-theme">
                                                <option value="0">Select an option...</option>
                                                <option value="1">Malaysia</option>
                                                <option value="2">Singapore</option>
                                                <option value="3">Indonesia</option>
                                                <option value="4">Thailand</option>
                                                <option value="5">China</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Postcode / Zip</label>
                                            <input type="text" class="form-control c-square c-theme" placeholder="Postcode / Zip">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label">Email Address</label>
                                            <input type="email" class="form-control c-square c-theme" placeholder="Email Address">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Phone</label>
                                            <input type="tel" class="form-control c-square c-theme" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row c-margin-t-15">
                                <div class="form-group col-md-12">
                                    <div class="c-checkbox c-toggle-hide" data-object-selector="c-account" data-animation-speed="600">
                                        <input type="checkbox" id="checkbox1-77" class="c-check">
                                        <label for="checkbox1-77">
                                            <span class="inc"></span>
                                            <span class="check"></span>
                                            <span class="box"></span>
                                            Create an account?
                                        </label>
                                    </div>
                                    <p class="help-block">Create an account by entering the information below. If you are a returning customer please login.</p>
                                </div>
                            </div>
                            <div class="row c-account">
                                <div class="form-group col-md-12">
                                    <label class="control-label">Account Password</label>
                                    <input type="password" class="form-control c-square c-theme" placeholder="Password">
                                </div>
                            </div>
                            <!-- BILLING ADDRESS -->
                            <!-- SHIPPING ADDRESS -->
                            <h3 class="c-font-bold c-font-uppercase c-font-24">Shipping Address</h3>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <div class="c-checkbox-inline">
                                        <div class="c-checkbox c-toggle-hide" data-object-selector="c-shipping-address" data-animation-speed="600">
                                            <input type="checkbox" id="checkbox6-444" class="c-check">
                                            <label for="checkbox6-444">
                                                <span class="inc"></span>
                                                <span class="check"></span>
                                                <span class="box"></span>
                                                Ship to different address?
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="c-shipping-address">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label class="control-label">Country</label> <select class="form-control c-square c-theme">
                                            <option value="1">Malaysia</option>
                                            <option value="2">Singapore</option>
                                            <option value="3">Indonesia</option>
                                            <option value="4">Thailand</option>
                                            <option value="5">China</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="control-label">First Name</label>
                                                <input type="text" class="form-control c-square c-theme" placeholder="First Name">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="control-label">Last Name</label>
                                                <input type="text" class="form-control c-square c-theme" placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label class="control-label">Company Name</label>
                                        <input type="text" class="form-control c-square c-theme" placeholder="Company Name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label class="control-label">Address</label>
                                        <input type="text" class="form-control c-square c-theme" placeholder="Street Address">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control c-square c-theme" placeholder="Apartment, suite, unit etc. (optional)">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label class="control-label">Town / City</label>
                                        <input type="text" class="form-control c-square c-theme" placeholder="Town / City">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="control-label">State / County</label> <select class="form-control c-square c-theme">
                                                    <option value="0">Select an option...</option>
                                                    <option value="1">Malaysia</option>
                                                    <option value="2">Singapore</option>
                                                    <option value="3">Indonesia</option>
                                                    <option value="4">Thailand</option>
                                                    <option value="5">China</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="control-label">Postcode / Zip</label>
                                                <input type="text" class="form-control c-square c-theme" placeholder="Postcode / Zip">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="control-label">Email Address</label>
                                                <input type="email" class="form-control c-square c-theme" placeholder="Email Address">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="control-label">Phone</label>
                                                <input type="tel" class="form-control c-square c-theme" placeholder="Phone">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- SHIPPING ADDRESS -->
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="control-label">Order Notes</label>
                                    <textarea class="form-control c-square c-theme" rows="3" placeholder="Note about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- END: ADDRESS FORM -->
                        <!-- BEGIN: ORDER FORM -->
                        <div class="col-md-5">
                            <div class="c-content-bar-1 c-align-left c-bordered c-theme-border c-shadow">
                            <h1 class="c-font-bold c-font-uppercase c-font-24">Your Order</h1>
                            <ul class="c-order list-unstyled">
                                <li class="row c-margin-b-15">
                                    <div class="col-md-6 c-font-20"><h2>Product</h2></div>
                                    <div class="col-md-6 c-font-20"><h2>Total</h2></div>
                                </li>
                                <li class="row c-border-bottom"></li>
                                <li class="row c-margin-b-15 c-margin-t-15">
                                    <div class="col-md-6 c-font-20"><a href="shop-product-details.html" class="c-theme-link">Winter Coat x 1</a></div>
                                    <div class="col-md-6 c-font-20">
                                        <p class="">$30.99</p>
                                    </div>
                                </li>
                                <li class="row c-margin-b-15 c-margin-t-15">
                                    <div class="col-md-6 c-font-20"><a href="shop-product-details-2.html" class="c-theme-link">Sports Wear x 1</a></div>
                                    <div class="col-md-6 c-font-20">
                                        <p class="">$30.99</p>
                                    </div>
                                </li>
                                <li class="row c-margin-b-15 c-margin-t-15">
                                    <div class="col-md-6 c-font-20">Subtotal</div>
                                    <div class="col-md-6 c-font-20">
                                        <p class="">$<span class="c-subtotal">61.98</span></p>
                                    </div>
                                </li>
                                <li class="row c-border-top c-margin-b-15"></li>
                                <li class="row">
                                    <div class="col-md-6 c-font-20">Shipping</div>
                                    <div class="col-md-6">
                                        <div class="c-radio-list c-shipping-calculator" data-name="shipping_price" data-subtotal-selector="c-subtotal" data-total-selector="c-shipping-total">
                                            <div class="c-radio">
                                                <input type="radio" value="20" id="radio11" class="c-radio" name="shipping_price" checked="">
                                                <label for="radio11">
                                                    <span class="inc"></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span>
                                                    Flat Rate
                                                </label>
                                                <p class="c-shipping-price c-font-bold c-font-20">$20.00</p>
                                            </div>
                                            <div class="c-radio">
                                                <input type="radio" value="10" id="radio12" class="c-radio" name="shipping_price">
                                                <label for="radio12">
                                                    <span class="inc"></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span>
                                                    Local Delivery
                                                </label>
                                                <p class="c-shipping-price c-font-bold c-font-20">$10.00</p>
                                            </div>
                                            <div class="c-radio">
                                                <input type="radio" value="0" id="radio13" class="c-radio" name="shipping_price">
                                                <label for="radio13">
                                                    <span class="inc"></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span>
                                                    Local Pickup
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="row c-margin-b-15 c-margin-t-15">
                                    <div class="col-md-6 c-font-20">
                                        <p class="c-font-30">Total</p>
                                    </div>
                                    <div class="col-md-6 c-font-20">
                                        <p class="c-font-bold c-font-30">$<span class="c-shipping-total">81.98</span></p>
                                    </div>
                                </li>
                                <li class="row">
                                    <div class="col-md-12">
                                        <div class="c-radio-list">
                                            <div class="c-radio">
                                                <input type="radio" id="radio1" class="c-radio" name="payment" checked="">
                                                <label for="radio1" class="c-font-bold c-font-20">
                                                    <span class="inc"></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span>
                                                    Direct Bank Transfer
                                                </label>
                                                <p class="help-block">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                            </div>
                                            <div class="c-radio">
                                                <input type="radio" id="radio2" class="c-radio" name="payment">
                                                <label for="radio2" class="c-font-bold c-font-20">
                                                    <span class="inc"></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span>
                                                    Cheque Payment
                                                </label>
                                            </div>
                                            <div class="c-radio">
                                                <input type="radio" id="radio3" class="c-radio" name="payment">
                                                <label for="radio3" class="c-font-bold c-font-20">
                                                    <span class="inc"></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span>
                                                    Paypal
                                                </label>
                                                <img class="img-responsive" width="250" src="../../../../../www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png" />
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="row c-margin-b-15 c-margin-t-15">
                                    <div class="form-group col-md-12">
                                        <div class="c-checkbox">
                                            <input type="checkbox" id="checkbox1-11" class="c-check">
                                            <label for="checkbox1-11">
                                                <span class="inc"></span>
                                                <span class="check"></span>
                                                <span class="box"></span>
                                                I’ve read and accept the Terms & Conditions
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li class="row">
                                    <div class="form-group col-md-12" role="group">
                                        <button type="submit" class="btn btn-lg c-theme-btn c-btn-square c-btn-uppercase c-btn-bold">Submit</button>
                                        <button type="submit" class="btn btn-lg btn-default c-btn-square c-btn-uppercase c-btn-bold">Cancel</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        </div>
                        <!-- END: ORDER FORM -->
                    </div>
                </form>
            </div>
        </div>  
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
	

<!-- Mirrored from themehats.com/themes/jango/demos/default/shop-checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Mar 2019 09:30:56 GMT -->
</html>