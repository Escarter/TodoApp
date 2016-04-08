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
	<?php include_once("resources.php"); ?>
</head>
<body>
<?php include_once("usernavbar.php"); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel">
					<div class="panel-heading">
						<h2 class="text-center">Create New Task</h2>
						<div class="panel-body">
							<form action="createtaskcheck.php" method="POST">
							   <?php if (isset($_COOKIE['successMsg'])) {
							   	   echo "<div class='alert alert-success'>".$_COOKIE['successMsg']."
							   	    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span></div>";
							   } ?>
								<div class="form-group">
									<input type="text" name="task_name" id="" class="form-control" placeholder="Task name">
								</div>
								<div class="form-group">
									<select name="category" id="" class="form-control">
										<option value="0" selected="">Select category</option>
										 <?php 
										     include('Generals.php');
						             		foreach ($results as $result) {
								   		    echo "<option value=".$result['id'].">".$result['name']."</option>";
								   		    }
															  
										   ?>
									</select>
								</div>
								<div class="form-group">
									<textarea name="task_description" id="" class="form-control" placeholder="Task Description"></textarea>
								</div>
								<div class="form-group">
									<input type="date" name="task_due_date" id="" class="form-control" placeholder="Due Date">
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-block our-btn">Create Task</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>

<?php include("userfooter.php"); ?>	
</body>
</html>