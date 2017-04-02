<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from inspirythemes.com/templates/foodrecipes-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jun 2015 13:02:27 GMT -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame. Remove this if you use the .htaccess -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
	<title>HUSAVI Template</title>
	
	<link rel="stylesheet" type="text/css" media="all" href="{{ URL::To('public/client/style.css') }}" />
	<link rel="stylesheet" type="text/css" media="all" href="{{ URL::To('public/client/bootstrap.css') }}" />
	<link rel="stylesheet" href="{{ URL::To('public/client/js/nivo-slider/nivo-slider.css') }}" type="text/css" media="screen" />
	<link rel="stylesheet" media="all" type="text/css" href="{{ URL::To('public/client/js/prettyPhoto/css/prettyPhoto.css') }}" />

	<!-- Generate Favicon Using 1.http://tools.dynamicdrive.com/favicon/ OR 2.http://www.favicon.cc/ -->
	<link rel="shortcut icon" href="{{ URL::To('public/client/favicon.png') }}" />
		
</head>
<!--[if IE ]> <body class="ie"> <![endif]-->
<!--[if lt IE 7 ]> <body class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <body class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <body class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <body class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->


<!-- ============= HEADER STARTS HERE ============== -->
		@include('layouts.client.include.header')<!-- end of header-wrapper div -->

<!-- ============= HEADER ENDS HERE ============== -->


<!-- ============= CONTAINER STARTS HERE ============== -->
		
        @yield('content')<!-- end of container div -->
		<div class="w-pet-border"></div>
<!-- ============= CONTAINER AREA ENDS HERE ============== -->



<!-- ============= BOTTOM AREA STARTS HERE ============== -->
	    @include('layouts.client.include.bottom')<!-- end of bottom-wrap div -->
<!-- ============= BOTTOM AREA ENDS HERE ============== -->


<!-- ============= FOOTER STARTS HERE ============== -->	
        
        <div id="footer-wrap">
				<div id="footer">
						<p class="copyright">Copyright © 2017 HUSAVI Template</p>
						<p class="dnd">Developed by <a href="http://inspirythemes.com/">VKS Group</a></p>
				</div><!-- end of footer div -->
		</div><!-- end of footer-wrapper div -->
        
<!-- ============= FOOTER STARTS HERE ============== -->
    
    
	<!-- Remove it if you do not need jQuery -->
	<script type="text/javascript" src="{{ URL::To('public/client/js/jquery-1.11.0.js') }}"></script>

	<!-- Remove it if you do not need jquery.easing : http://gsgd.co.uk/sandbox/jquery/easing/ -->
	<script type="text/javascript" src="{{ URL::To('public/client/js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ URL::To('public/client/js/jquery.cycle.js') }}"></script>
    <script type="text/javascript" src="{{ URL::To('public/client/js/prettyPhoto/js/jquery.prettyPhoto.js') }}"></script>
    <script type="text/javascript" src="{{ URL::To('public/client/js/jquery.backgroundPosition.js') }}"></script>
    <script type="text/javascript" src="{{ URL::To('public/client/js/jquery-ui-1.10.4.custom.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::To('public/client/js/nivo-slider/jquery.nivo.slider.js') }}"></script>
    <script type="text/javascript" src="{{ URL::To('public/client/js/jquery.validate.js') }}"></script>
    <script type="text/javascript" src="{{ URL::To('public/client/js/twitterFetcher_v10_min.js') }}"></script>
	<!-- script file to add your own JavaScript -->
	<script type="text/javascript" src="{{ URL::To('public/client/js/script.js') }}"></script>
	<!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->
</body>

<!-- Mirrored from inspirythemes.com/templates/foodrecipes-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jun 2015 13:03:07 GMT -->
</html>