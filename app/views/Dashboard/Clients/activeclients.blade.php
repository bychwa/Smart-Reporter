@extends('Dashboard.Clients.clients_template')
@section('body')
	@parent

    <div class="container">
    	<ul class="nav nav-tabs" id="myTab">
		  <li class="active"><a href="#all" data-toggle="tab">All Clients</a></li>
		</ul>

		<div class="tab-content">
		  	<div class="tab-pane active" id="all">
		  		<div class="panel panel-default">
		  			<div class="panel-body">
		  				<legend>Active Clients</legend>
        		        <table class="table table-bordered table-hover table-condensed display" id="all_clients_table">
					        <thead>
					          <tr>
					            <th>Full Name</th>
					            <th>Location</th>
					            <th>Created On</th>
					            <th>Account Type</th>
					            <th>Action</th>
					          </tr>
					        </thead>
					        <tbody>
					        @foreach (Client::all() as $client)
					          <tr class="odd gradeX">
					            <td> {{ $client->firstname. " ". $client->lastname }} </td>
					            <td>{{ $client->location }}</td>
					            <td>{{ $client->created_at }}</td>
					            <td class="center">{{ $client->user->account_type }} </td>
					            <td class="center">X</td>
					          </tr>
				            @endforeach
					        </tbody>
					    </table><!--/END OF TABLE -->
				  	</div>
				</div>
			</div>
		  	<div class="tab-pane" id="add">
		  		<div class="panel panel-default">
		  			<div class="panel-body">
		  			<div id="register-wraper">
        		   
		  		</div>
		  	</div>
		  	<div class="tab-pane" id="edit">
		  		EDIT SECTION
		  	</div>
		</div>
	 
    </div><!-- /row -->
      
	</div> <!-- /container -->
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