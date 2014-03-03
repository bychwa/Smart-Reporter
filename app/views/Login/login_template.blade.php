@extends('template')

@section('head')
	@parent
	    <title>SR - Login</title>
	
	    {{ HTML::Style('assets/css/login.css') }}
	    
	    <style type="text/css">
	      body {
	        padding-top: 30px;
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
@stop