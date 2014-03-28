@extends('template')
@section('head')
	@parent
		<title>SR - Dashboard</title>
	    {{ HTML::Style('assets/css/main.css') }}
	    {{ HTML::Style('assets/css/font-style.css') }}
	    {{ HTML::Style('assets/css/flexslider.css') }}
	    <style type="text/css">
	      body {
	        padding-top: 60px;
	      }
	    </style>

	<script type="text/javascript">
	$(document).ready(function () {

	    $("#btn-blog-next").click(function () {
	      $('#blogCarousel').carousel('next')
	    });
	     $("#btn-blog-prev").click(function () {
	      $('#blogCarousel').carousel('prev')
	    });

	     $("#btn-client-next").click(function () {
	      $('#clientCarousel').carousel('next')
	    });
	     $("#btn-client-prev").click(function () {
	      $('#clientCarousel').carousel('prev')
	    });
	    
	});

	 $(window).load(function(){

	    $('.flexslider').flexslider({
	        animation: "slide",
	        slideshow: true,
	        start: function(slider){
	          $('body').removeClass('loading');
	        }
	    });  
	});

	</script>


@stop

@section('foot')
	@parent
	<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {{ HTML::Script('assets/js/lineandbars.js') }}
	{{ HTML::Script('assets/js/dash-charts.js') }}
	{{ HTML::Script('assets/js/gauge.js') }}
	
	<!-- NOTY JAVASCRIPT -->
	{{ HTML::Script('assets/js/noty/jquery.noty.js') }}
	{{ HTML::Script('assets/js/noty/layouts/top.js') }}
	{{ HTML::Script('assets/js/noty/layouts/topLeft.js') }}
	{{ HTML::Script('assets/js/noty/layouts/topRight.js') }}
	{{ HTML::Script('assets/js/noty/layouts/topCenter.js') }}
	
	<!-- You can add more layouts if you want -->
	{{ HTML::Script('assets/js/noty/themes/default.js') }}
	<!-- <script type="text/javascript" src="assets/js/dash-noty.js"></script> This is a Noty bubble when you init the theme-->
	{{ HTML::Script('http://code.highcharts.com/highcharts.js') }}
	{{ HTML::Script('assets/js/jquery.flexslider.js') }}
	
    {{ HTML::Script('assets/js/admin.js') }}
	
@stop