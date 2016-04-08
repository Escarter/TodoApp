<?php session_start(); 
 if (!isset($_SESSION['userinfo'])) {
 	header('location: ../login.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TODOApp - Profile</title>
	<?php include_once("resources.php"); ?>
</head>
<body>
	<?php include_once("usernavbar.php"); ?>
	<div class="container">
		<h1>Welcome <?php echo $_SESSION['userinfo']['fname']; ?></h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae totam saepe quidem, illo. Magnam consequuntur sint quae libero sed corrupti blanditiis pariatur voluptatibus, iste id explicabo, accusamus incidunt, ipsam et.</p>
	  <hr>
	  	<div class="pull-left">
	  		<form action="sortbycat.php" method="POST" class="form-inline">
	  			<div class="form-group">
	  			<select class="form-control" name="cat_id">
				  <option selected="">sort by category</option>

				  <?php 
				     include('Generals.php');
             		foreach ($results as $result) {
		   		    echo "<option value=".$result['id'].">".$result['name']."</option>";
		   		    }
									  
				   ?>
				</select>
	  			</div>
	  			<div class="form-group">
	  				<button type="submit" class="btn btn-default">Search </button>
	  			</div>
	  		</form>
	  	</div>

	  	<div class=" pull-right">
	  		<a href="createtask.php" class="btn btn-success ">Create New Task</a>
	  	</div>
	  	<div class="clearfix" style="padding-bottom:10px;"></div>
	  		<?php 
       if(isset($_COOKIE['errorMsg'])){
          echo"<div class='alert alert-danger'>
          ".$_COOKIE['errorMsg']."
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </div>";
       }
       if(isset($_COOKIE['succMsg'])){
        echo"<div class='alert alert-success'>
         ".$_COOKIE['succMsg']."
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
       </div>";
       }

	 ?>
<?php 
     include('fetchuserstasks.php');
      if (mysqli_num_rows($query)>0) {
     	echo "<table class='table table-bordered'>
		  <thead>
		  	<th>Task Name</th>
		  	<th>Task Description</th>
		  	<th>Task Due Date</th>
		  	<th>Task status</th>
		  	<th>Action</th>
		  </thead>
		  <tbody>";
	   		 	
	    foreach ($res as $r) {
	    	 if ($r['status'] == 0) {
	    	 	$status = "<a href='markascomplete.php?id=".$r['id']."' class='btn btn-warning btn-sm'>Mark as completed</a>";
	    	 }else{
	    	 	$status = "<a class='btn btn-success btn-sm disabled'>completed</a>";
	    	 }
   		    echo "<tr>
   		         <td>".$r['name']."</td>
   		    	  <td>".$r['description']."</td>
   		    	  <td>".$r['due_date']."</td>
   		           <td>".$status."</td>
   		           <td><a href='delete.php?id=".$r['id']."' class='btn btn-danger btn-sm'>delete</a>
   		          <a href='edittask.php?id=".$r['id']."' class='btn btn-success btn-sm'>edit</td>";
   		    }
   		    echo "
              </tr>
		  </tbody>
		</table> ";
		}else{
			echo "<h2>No task for you!</h2>";
		}
	 ?>	 
	</div>
	<?php include("userfooter.php") ?>
</body>
</html>