<?php session_start();
if (isset($_SESSION['userinfo'])) {
 	header('location: ../index.php');
 } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TodoApp - Register</title>
	<?php include("resources.php");?>
</head>
<body>
<div class="container">
			<h1 class="logo logo-black text-center">TDApp</h1>
			<div class="col-md-6 col-md-offset-3">
				<div class="panel">
					<div class="panel-heading">
						<h3 class="text-center">Register</h3>
					</div>
				<div class="panel-body">
				  <form class="form" action="registercheck.php" method="POST">
					<?php 
				  if(isset($_COOKIE['errorMsg'])){
                      echo"<div class='alert alert-danger'>".$_COOKIE['errorMsg']."</div>";
                   }
                   if(isset($_COOKIE['successMsg'])){
                      echo"<div class='alert alert-success'>".$_COOKIE['successMsg']."</div>";
                   }
				 ?>
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
								  <input type="password" class="form-control" placeholder="Password " name="password" >
							  </div>
				  		</div>
				  		<div class="col-md-6">
				  			<div class="form-group">
							  <input type="password" class="form-control" placeholder="Confirm password" name="confirm_password" >
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
					   			<button type="submit" class="btn  our-btn btn-block ">Register</button>
					   		</div>
					   	</div>
					   </div>
					  <div class="pull-right">
					  	<a href="../login.php">Have an account?</a>
					  </div>
					   <div class="clearfix"></div>
					</form>
				</div>
				</div>
			
				<ul class="list-inline text-center">
					<li><a href="../index.php">Home</a></li>
					<li><a href="../contactpage.php">Contact</a></li>
					<li><a href="../About.php">About</a></li>
				</ul>
			</div>
			
		</div>
</body>
</html>