<?php session_start(); 
if (isset($_SESSION['userinfo'])) {
 	header('location: index.php');
 }?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php include("resources.php") ?>
	<title>TodoApp - Login</title>
</head>
<body>
	<div class="container">

			<h1 class="logo logo-black text-center">TDApp</h1>
			<div class="col-md-4 col-md-offset-4">
				<div class="panel">				
					<div class="panel-heading">
						<h3 class="text-center">Login</h3>
					</div>
				<div class="panel-body">
				  <form class="form" action="logincheck.php" method="POST">
					<?php 
				  if(isset($_COOKIE['successMsg'])){
                      echo"<div class='alert alert-danger'>".$_COOKIE['errorMsg']."
                       <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span></div>";
                   }
                   if(isset ($_COOKIE['errorMsg'])){
                      echo"<div class='alert alert-danger'>".$_COOKIE['errorMsg']."
                       <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span></div>";
                   }elseif(isset($_SESSION['success'])){
                    echo"<div class='alert alert-success'>".$_SESSION['success']."
                     <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span></div>";
                   }
				 ?>
				
					  <div class="form-group">
					      <div class="input-group">
						  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						  <input type="text" class="form-control" placeholder="Username" name="username" required>
						</div>
					  </div>
					  <div class="form-group">
					      <div class="input-group">
						  <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
						  <input type="password" class="form-control" placeholder="Password" name="password" required>
						</div>					   
					 </div>
					  <div class="form-group">
					      <button type="submit" class="btn btn-block our-btn">Sign in</button>
					    </div>
					    <div class="form-group">
						     <a href="users/register.php" class="pull-left">Don't have an account?</a>
						      <a href="#" class="pull-right">Forgotten password?</a>
					    </div>
					    <div class="clearfix"></div>
					</form>
				</div>
				</div>
			
				<ul class="list-inline text-center">
					<li><a href="index.php">Home</a></li>
					<li><a href="contactpage.php">Contact</a></li>
					<li><a href="About.php">About</a></li>
				</ul>
			</div>
			
		</div>
</body>
</html>