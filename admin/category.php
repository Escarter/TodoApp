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
		<div class="col-md-10 main-content">
			<div class="pull-left">
	  		 <h2>Manage categories</h2>
	  		</div>
	  		<div class="pull-right">
	  			<button type="button" class="btn btn-success" data-toggle="modal" data-target="#createCat" style="margin-bottom:-50px;">Create New Category</button>
	 		</div>
	 		<div class="clearfix"></div>
	 		 <?php 
	 		 if (isset($_COOKIE['succMsg'])) {
					echo "<div class='alert alert-success'>".$_COOKIE['succMsg']."
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		            <span aria-hidden='true'>&times;</span></div>";
					}
			  if (isset($_COOKIE['errMsg'])) {
					echo "<div class='alert alert-danger'>".$_COOKIE['errMsg']."
					<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
		            <span aria-hidden='true'>&times;</span></div>";
					}
			 ?>
			 <?php 
				     include('../users/Generals.php');
				      if (mysqli_num_rows($collect)>0) {
				     	echo "<table class='table table-bordered'>
						  <thead>
						  	<th>Category Name</th>
						  	<th>Category Description</th>
						  	<th>Action</th>
						  </thead>
						  <tbody>";
					   		 	
					    foreach ($results as $r) {
				   		    echo "<tr>
				   		         <td>".$r['name']."</td>
				   		    	  <td>".$r['description']."</td>
				   		           <td><a href='deletecategory.php?id=".$r['id']."' class='btn  btn-sm btn-danger'>delete</a>
				   		          <a href='editcategory.php?id=".$r['id']."' class='btn btn-sm btn-success'>edit</a></td>
				   		          </tr>";
				   		    }
				   		    echo "
						  </tbody>
						</table> ";
						}else{
							echo "<h2>No Category!</h2>";
						}
	 ?>	 
		</div>
	</div>
</div>
<?php include('createCategory.php');
  ?>
</body>
</html>