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
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel">
					<div class="panel-heading">
						<h2 class="text-center">Edit Task</h2>
						<div class="panel-body">
					<form action="updatetask.php" method="POST">
						<?php 
							 include("../database/config.php"); 
							$id=$_GET['id'];
							$user_id =$_SESSION['userinfo']['id'];
							$select="SELECT tasks.id as id, tasks.name, tasks.description, tasks.due_date, tasks.status, categories.name as cat_name, category_task.category_id as cat_id FROM tasks inner join (category_task inner join categories on categories.id = category_task.category_id ) 
							on tasks.id = category_task.task_id WHERE tasks.id='$id' AND tasks.user_id = '$user_id'";
							$sql=mysqli_query($con,$select);
                               $num = mysqli_num_rows($sql);
                               
                            if($sql){
                            	while ($rows = mysqli_fetch_array($sql)) {
                            		?>
                            		<div class="form-group">
										<input type="text" name="task_name" id="" class="form-control" placeholder="Task name" value="<?php echo $rows['name'];?>">
									</div>
									<input type="hidden" value="<?php echo $rows['id'];?>" name="task_id">
									<div class="form-group">
										<select name="category" id="" class="form-control">
											<option value="<?php echo $rows['cat_id']; ?>" ><?php echo $rows['cat_name']; ?></option>
										 <?php 
										     include('Generals.php');
						             		foreach ($results as $result) {
								   		    echo "<option value=".$result['id'].">".$result['name']."</option>";
								   		    }
															  
										   ?>
										</select>
									</div>
									<div class="form-group">
										<textarea name="task_description" id="" class="form-control" placeholder="Task Description"><?php echo $rows['description']; ?></textarea>
									</div>
									<div class="form-group">
										<input type="date" name="task_due_date" id="" class="form-control" placeholder="Due Date" value="<?php echo $rows['due_date'];?>">
									</div>
                            	<?php
                            	}
							}
							 ?>
								<div class="form-group">
									<button type="submit" class="btn btn-block our-btn">Update Task</button>
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