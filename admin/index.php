<!DOCTYPE html>
<html>
<head>
	<meta >
	<title>TodoApp - Admin</title>
	<?php include("resources.php"); ?>
</head>
<body>
<?php include("adminnavbar.php"); ?>
<div class="container-fluid">
	<div class="row">
         <?php include("sidebar.php"); ?>
		<div class="col-md-10 main-content ">
			 <div class="row">
			  <div class="col-xs-3 col-md-4 col-md-offset-2">
			  <div class="thumbnail text-center">
			    <h2><span class="glyphicon glyphicon-user"></span><br>
                   Users
			    </h2>
			    <h1 class="text-center">190</h1>	
			    </div>

			  </div>
			  <div class="col-xs-6 col-md-4">
				   <div class="thumbnail text-center">
				    <h2><span class="glyphicon glyphicon-calendar"></span><br>
				    		Categories
				    </h2>	
				    <h1 class="text-center">190</h1>
				    </div>

				  </div>
			  </div>

			</div>			
		</div>
	</div>
</body>
</html>