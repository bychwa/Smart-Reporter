@extends('Login.login_template')

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
          
        </div> 
          
        </div>
    </div>

    <div class="container">
        <div class="row">
   		<div class="col-lg-offset-4 col-lg-4" style="margin-top:100px">
   			<div class="block-unit" style="text-align:center; padding:8px 8px 8px 8px;">
   				<img src="assets/img/face80x80.jpg" alt="" class="img-circle">
   				<br>
   				<br>
					<form class="cmxform" id="signupForm" method="get" action="">
						<fieldset>
							<p>
								<input id="username" name="username" type="text" placeholder="Username">
								<input id="password" name="password" type="password" placeholder="Password">
							</p>
								<input class="submit btn-success btn btn-large" type="submit" value="Login">
						</fieldset>
					</form>
   			</div>

   		</div>


        </div>
    </div>
@stop