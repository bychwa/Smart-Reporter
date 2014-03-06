@extends('Dashboard.Users.users_template')
@section('body')
	@parent

    <div class="container">
    	<ul class="nav nav-tabs" id="myTab">
		  <li class="active"><a href="#all" data-toggle="tab">All Companies</a></li>
		  <li><a href="#add" data-toggle="tab">Add New Company</a></li>
		  <li><a href="#edit" data-toggle="tab">Edit Company</a></li>
		</ul>

		<div class="tab-content">
		  	<div class="tab-pane active" id="all">
		  		<div class="panel panel-default">
		  			<div class="panel-body">
		  				<legend>Active Companies</legend>
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
					        @foreach (Company::all() as $company)
					          <tr class="odd gradeX">
					            <td>{{ $company->name }}</td>
					            <td>{{ $company->location }}</td>
					            <td>{{ $company->created_at }}</td>
					            <td class="center"> {{ $company->user->account_type }}</td>
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
        		    {{ Form::open(array('url'=>action('CompaniesController@register_company')))}}
        		        <legend>Client Register</legend>
        		        <div class="body">
        		        	<!-- first name -->
    		        		<label for="name">Company Name</label>
    		        		<input name="name" class="input-huge" type="text">
        		        	<!-- location -->
    		        		<label for="location">Location</label>
    		        		<input name="location" class="input-huge" type="text">
        		        	<!-- Company Type -->
    		        		<label for="company_type">Company Type</label>
    		        		<br/>
        		        	{{ Form::select('company_type',array('Partnership','Coporate','Other'),array('class'=>'class="input-huge"'))}}
        		        	<!-- username -->
        		        	<br/>
        		        	<br/>
        		        	<label>Username</label>
        		        	<input class="input-huge" type="text" name="username">
        		        	<!-- email -->
        		        	<label>E-mail</label>
        		        	<input class="input-huge" type="text" name="email">
        		        	<!-- password -->
        		        	<label>Default-Password</label>
        		        	<input class="input-huge" type="text" name="password">
        		        </div>
        		        <div class="footer">
        		            <button type="submit" class="btn btn-success">Register</button>
        		        </div>
        		    {{ Form::close() }}
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