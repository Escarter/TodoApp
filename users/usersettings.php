<?php session_start(); 
 if (!isset($_SESSION['userinfo'])) {
 	header('location: ../login.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TodoApp - Create Task</title>
	<?php include("resources.php"); ?>
</head>
<body>
<?php include("usernavbar.php"); ?>
	<div class="container">
		<h3>Account settings</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi molestiae eligendi consequatur officia aperiam nemo! Rerum quae, cum. Voluptas eligendi expedita natus, distinctio eaque illo suscipit nulla, ab perspiciatis ipsam.</p>
		 <br >
		<div class="col-md-6">
			<div>
				  <!-- Nav tabs -->
				  <ul class="nav nav-tabs" role="tablist">
				    <li role="presentation" class="active"><a href="#general" aria-controls="general" role="tab" data-toggle="tab">General Settings</a></li>
				    <li role="presentation"><a href="#password" aria-controls="password" role="tab" data-toggle="tab">Password</a></li>
				  </ul>

				  <!-- Tab panes -->
				  <div class="tab-content">
				    <div role="tabpanel" class="tab-pane active" id="general">
				    	<div class="panel">
				    		<div class="panel-heading">
				    			<h3 class="text-center">Update your Profile</h3>
				    		</div>
				    		<div class="panel-body">
				    			<form class="form" action="" method="POST">
							  	<div class="row">
							  		<div class="col-md-6">
							  			<div class="form-group">
											  <input type="text" class="form-control" placeholder="First name" name="first_name" >
										  </div>
							  		</div>
							  		<div class="col-md-6">
							  			<div class="form-group">
										  <input type="text" class="form-control" placeholder="Last name" name="last_name" >
									  </div>
							  		</div>
							  	</div>	
							  	<div class="row">
							  		<div class="col-md-6">
							  			<div class="form-group">
											  <input type="email" class="form-control" placeholder="Email" name="email" >
										  </div>
							  		</div>
							  		<div class="col-md-6">
							  			<div class="form-group">
										  <input type="text" class="form-control" placeholder="Username" name="username" >
									  </div>
							  		</div>
							  	</div>	
								   <div class="row">
								   	<div class="col-md-6">
								   		<div class="form-group">
											  <input type="text" class="form-control" placeholder="Phone Number" name="phone_number">
										 </div>
								   	</div>
								   </div>
								   <div class="row">
								   	<div class="col-md-12">
								   		<div class="form-group">
								   			<button type="submit" class="btn  our-btn btn-block ">Update Profile</button>
								   		</div>
								   	</div>
								   </div>
							</form>
				    		</div>
				    	</div>
				    </div>
				    <div role="tabpanel" class="tab-pane" id="password">
				    	<div class="panel">
				    		<div class="panel-heading">
				    			<h3 class="text-center">Change your password</h3>
				    		  </div>
				    			<div class="panel-body">
				    				<form action="">
				    						<div class="row">
					    						<div class="col-md-12">
											  			<div class="form-group">
															  <input type="password" class="form-control" placeholder="Old Password " name="password" >
														  </div>
											  		</div>
										  		</div>
										  		<div class="row">
										  			<div class="col-md-12">
												  		<div class="form-group">
														   <input type="password" class="form-control" placeholder="Password " name="password" >
														 </div>
												  	</div>
										  		</div>
										  		<div class="row">
											  		<div class="col-md-12">
											  			<div class="form-group">
														  <input type="password" class="form-control" placeholder="Confirm password" name="confirm_password" >
													  </div>
												  </div>
										  		</div>
										  		<div class="row">
												   	<div class="col-md-12">
												   		<div class="form-group">
												   			<button type="submit" class="btn  our-btn btn-block ">Change password</button>
												   		</div>
												    </div>
												</div>   		
										  	</div>
				    				</form>
				    	</div>
				    </div>
				  </div>
			 </div>
		</div>
<?php include("userfooter.php"); ?>	
</body>
</html>