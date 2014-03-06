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
@section('body')
	<!-- NAVIGATION MENU -->

    <div class="navbar-nav navbar-inverse navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href=""><img src="assets/img/logo30.png" alt=""> SMART Reporter</a>
        </div> 
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="monitoring"><i class="icon-home icon-white"></i> Monitoring</a></li>
              <li><a href="clients"><i class="icon-folder-open icon-white"></i> Clients</a></li>
              <li><a href="users"><i class="icon-calendar icon-white"></i> Users</a></li>
              <li><a href="management"><i class="icon-th icon-white"></i> Management</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>
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
	<script type="text/javascript">
		  function addmsg(type, msg){
		        noty({
					layout: 'topRight',
				    theme: 'defaultTheme',
				    type:'alert',
					text:msg,
					timeout: 10000, // delay for closing event. Set false for sticky notifications
    				callback: {
					        onShow: function() {
					        	//var thissound=document.getElementById("sound1");
  								//thissound.Play();
  								
					        },
					        afterShow: function() {},
					        onClose: function() {},
					        afterClose: function(){}
					    },					
					});
				
				// $("#notification_list").append("<li>
			 //                	<i class='read'>12</i>
			 //                	<img class='avatar' src='assets/img/photo01.jpeg' alt='avatar'>
			 //                	<p class='sender'>Leonard N. <span class='label'>9 min ago</span></p>
			 //                	<p class='message'><strong>New Mac :D</strong> - So happy with ...</p>
				//             </li>");

		    }

		    function waitForMsg(){
		        /* This requests the url "msgsrv.php"
		        When it complete (or errors)*/
		        $.ajax({
		            type: "GET",
		            url: "http://localhost/Smart-Reporter/public/notifications/get",

		            async: true, /* If set to non-async, browser shows page as "Loading.."*/
		            cache: false,
		            timeout:50000, /* Timeout in ms */

		            success: function(data){ /* called when request to barge.php completes */
		                addmsg("new", data); /* Add response to a .msg div (with the "new" class)*/
		                $("#notification_list").load(location.href + " #notification_list > *").show('slow');
		                //$("#notification_list").load('{{ Request::url()}}');
		                setTimeout(
		                    waitForMsg, /* Request next message */
		                    1000 /* ..after 1 seconds */
		                );
		            },
		            error: function(XMLHttpRequest, textStatus, errorThrown){
		                //addmsg("error", textStatus + " (" + errorThrown + ")");
		                setTimeout(
		                    waitForMsg, /* Try again after.. */
		                    15000); /* milliseconds (15seconds) */
		            }
		        });
		    };
		    function display_notification(id){
		    	$.ajax({
		            type: "get",
		            url: "http://localhost/Smart-Reporter/public/notification/get?id="+id,
		            success: function(data){ /* called when request to barge.php completes */
		            	$("#notification_header").html('Notification No:'+id).show();
		    			$("#notification_body").html(data).show();
		    			$('#notification_panel').modal('show');
		            },
		            error: function(XMLHttpRequest, textStatus, errorThrown){
		                alert(textStatus);
		            }
		        });
		    }
		waitForMsg();
	</script>
@stop