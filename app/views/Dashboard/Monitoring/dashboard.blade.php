@extends('Dashboard.Monitoring.dashboard_template')
@section('body')
	@parent

    <div class="container">

	  <!-- FIRST ROW OF BLOCKS -->     
      <div class="row">
      	<!-- USER PROFILE BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>User Profile</dtitle>
	      		<hr>
				<div class="thumbnail">
					<img src="assets/img/logo.png" alt="Marcel Newman" class="img-circle">
				</div><!-- /thumbnail -->
				<h1>Jackson Isack</h1>
				<h3>DSM, Tanzania</h3>
				<br>
					<div class="info-user">
						<span aria-hidden="true" class="li_user fs1"></span>
						<span aria-hidden="true" class="li_settings fs1"></span>
						<span aria-hidden="true" class="li_mail fs1"></span>
						<span aria-hidden="true" class="li_key fs1"></span>
					</div>
				</div>
        </div>

      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
		  		<dtitle>RESPONCE LATENCY</dtitle>
		  		<hr>
	        	<div id="load"></div>
	        	<h2>45%</h2>
			</div>
        </div>

      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
		  		<dtitle>Notification</dtitle>
		  		<hr>
	        	<div class="framemail">
	    			<div class="window" style="height:235px; overflow-y:auto" id="notification_list">
				        <ul class="mail">
				            @foreach (Notification::orderBy('id', 'DESC')->get() as $notification) {
				            	<li onclick="return false;" onmousedown="display_notification({{ $notification->id }});">
				                	<i class="read">0</i>
				                	<img class="avatar" src="assets/img/photo01.jpeg" alt="avatar">
				                	<p class="sender">{{ User::find($notification->client_id)->client->firstname." ".User::find($notification->client_id)->client->lastname }} </p>
				                	<p class="message"><strong>{{ $notification->subject }}</strong> - {{ $notification->message }}</p>
				            	</li>
				            @endforeach
				        </ul>
					</div>
				</div>
			</div>
        </div>
        
        <div class="col-sm-3 col-lg-3">
      
      <!-- LOCAL TIME BLOCK -->
      		<div class="half-unit">
	      		<dtitle>Local Time</dtitle>
	      		<hr>
		      		<div class="clockcenter">
			      		<digiclock>12:45:25</digiclock>
		      		</div>
			</div>

      <!-- SERVER UPTIME -->
			<div class="half-unit">
	      		<dtitle>Server Uptime</dtitle>
	      		<hr>
	      		<div class="cont">
					<p><img src="assets/img/up.png" alt=""> <bold>Up</bold> | 356ms.</p>
				</div>
			</div>
		</div>
      </div><!-- /row -->
      
      
	  <!-- SECOND ROW OF BLOCKS -->     
      <div class="row">
        <div class="col-sm-3 col-lg-3">
       <!-- MAIL BLOCK -->
      		<div class="dash-unit">
      		<dtitle>Inbox (1)</dtitle>
      		<hr>
      		<div class="framemail">
    			<div class="window">
			        <ul class="mail">
			            
			        </ul>
    			</div>
			</div>
		</div><!-- /dash-unit -->
    </div><!-- /span3 -->

	  <!-- GRAPH CHART - lineandbars.js file -->     
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
      		<dtitle>Other Information</dtitle>
      		<hr>
			    <div class="section-graph">
			      <div id="importantchart"></div>
			      <br>
			      <div class="graph-info">
			        <i class="graph-arrow"></i>
			        <span class="graph-info-big">634.39</span>
			        <span class="graph-info-small">+2.18 (3.71%)</span>
			      </div>
			    </div>
			</div>
        </div>

	  <!-- LAST MONTH REVENUE -->     
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>Last Month Notification</dtitle>
	      		<hr>
	      		<div class="cont">
	      			<div style="padding-left:10px;">
		      			<table>
		      				<tr>
		      					<td> <bold>879</bold></td><td> | </td><td style="text-align:left"> <ok>Successful Notification</ok></td>
		      				</tr>
		      				<tr>
		      					<td> <bold>377</bold></td><td> | </td><td style="text-align:left">Wrong Notification</td>
		      				</tr>
		      				<tr>
		      					<td> <bold>156</bold></td><td> | </td><td style="text-align:left"> <bad>Unsuccessful Notification</bad></td>
		      				</tr>
		      			</table>
					</div>
					<br>
					<p><img src="assets/img/up-small.png" alt=""> 12% Compared Last Month</p>

				</div>

			</div>
        </div>
        
	  <!-- 30 DAYS STATS - CAROUSEL FLEXSLIDER -->     
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>Last 30 Days Stats</dtitle>
	      		<hr>
	      		<br>
	      		<br>
	            <div class="flexslider">
					<ul class="slides">
						<li><img src="assets/img/slide01.png" alt="slider"></li>
						<li><img src="assets/img/slide02.png" alt="slider"></li>
					</ul>
            </div>
				<div class="cont">
					<p>StatCounter Information</p>
				</div>   
			</div>
        </div>
    </div><!-- /row -->
      
	</div> <!-- /container -->
	<div class="hiddens">
		<div class="modal fade" id="notification_panel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  	<div class="modal-dialog">
			    <div class="modal-content">
			      	<div class="modal-header">
			        	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			        	<h4 class="modal-title" id="notification_header">Notification header</h4>
			      	</div>
			      	<div class="modal-body">
			     		<div id="notification_body"></div>
			      	</div>
			      	<div class="modal-footer">
			        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        	<button type="button" class="btn btn-primary">Already Sent Troops!</button>
			      	</div>
			    </div>
		  	</div>
		</div>
	</div>

	<div id="footerwrap">
      	<footer class="clearfix"></footer>
      	<div class="container">
      		<div class="row">
      			<div class="col-sm-12 col-lg-12">
      			<p><img src="assets/img/logo.png" alt=""></p>
      			<p>Smart Reporter - Your Comfort is our happieness - Copyright 2014</p>
      			</div>

      		</div><!-- /row -->
      	</div><!-- /container -->		
	</div><!-- /footerwrap -->
@stop