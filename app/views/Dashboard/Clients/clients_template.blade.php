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
              <li><a href="monitoring"><i class="icon-home icon-white"></i> Monitoring</a></li>
              <li class="active"><a href="clients"><i class="icon-folder-open icon-white"></i> Clients</a></li>
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
	{{ HTML::Script('assets/js/datatables/jquery.dataTables.js') }}

    <script type="text/javascript">
	 $(window).load(function(){
	
	 	$('#all_clients_table').dataTable();
	
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