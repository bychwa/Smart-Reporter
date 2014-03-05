@extends('Dashboard.Clients.clients_template')
@section('body')
	@parent

    <div class="container">
    	<ul class="nav nav-tabs" id="myTab">
		  <li class="active"><a href="#all" data-toggle="tab">All Clients</a></li>
		  <li><a href="#add" data-toggle="tab">Add New Clients</a></li>
		  <li><a href="#edit" data-toggle="tab">Edit Clients</a></li>
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
					            <th>Service Package</th>
					            <th>Action</th>
					          </tr>
					        </thead>
					        <tbody>
					          <tr class="odd gradeX">
					            <td>Jackson Isack</td>
					            <td>Ilala Dar es salaam</td>
					            <td>12th March 2014</td>
					            <td class="center"> Full Pack</td>
					            <td class="center">X</td>
					          </tr>
					          <tr class="odd gradeX">
					            <td>Jackson Isack</td>
					            <td>Ilala Dar es salaam</td>
					            <td>12th March 2014</td>
					            <td class="center"> Full Pack</td>
					            <td class="center">X</td>
					          </tr>
					          <tr class="odd gradeX">
					            <td>Mary Mlope</td>
					            <td>Ilala Dar es salaam</td>
					            <td>19th March 2014</td>
					            <td class="center"> Partial Pack</td>
					            <td class="center">X</td>
					          </tr>
					          <tr class="odd gradeX">
					            <td>Chris Statham</td>
					            <td>Kinondoni Dar es salaam</td>
					            <td>15th March 2014</td>
					            <td class="center"> Full Pack</td>
					            <td class="center">X</td>
					          </tr>
					        </tbody>
					    </table><!--/END OF TABLE -->
				  	</div>
				</div>
			</div>
		  	<div class="tab-pane" id="add">
		  		<div class="panel panel-default">
		  			<div class="panel-body">
		  			<div id="register-wraper">
        		    <form id="register-form" class="form">
        		        <legend>Client Register</legend>
        		        <div class="body">
        		        	<!-- first name -->
    		        		<label for="name">First name</label>
    		        		<input name="name" class="input-huge" type="text">
        		        	<!-- last name -->
    		        		<label for="surname">Last name</label>
    		        		<input name="surname" class="input-huge" type="text">
        		        	<!-- username -->
        		        	<label>Username</label>
        		        	<input class="input-huge" type="text">
        		        	<!-- email -->
        		        	<label>E-mail</label>
        		        	<input class="input-huge" type="text">
        		        	<!-- password -->
        		        	<label>Default-Password</label>
        		        	<input class="input-huge" type="text">
        		        </div>
        		        <div class="footer">
        		            <button type="submit" class="btn btn-success">Register</button>
        		        </div>
        		    </form>
        		</div>

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