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
						<h2 class="text-center">Create New Task</h2>
						<div class="panel-body">
							<form action="">
								<div class="form-group">
									<input type="text" name="task_name" id="" class="form-control" placeholder="Task name">
								</div>
								<div class="form-group">
									<select name="category" id="" class="form-control">
										<option value="0" selected="">Select category</option>
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