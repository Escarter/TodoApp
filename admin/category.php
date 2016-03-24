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
			<h3>Manage categories</h3>
			<form action="" method="" class="form-inline">
				<div class="form-group">
					<input type="text" name="category_name" class="form-control" placeholder="Category name">
				</div>
				<div class="form-group">
						<input type="text" name="category_description" class="form-control" placeholder="Category Description">
				</div>
				<div class="form-group">
						<button type="submit" class="btn our-btn">Save/Update Category</button>
				</div>
			</form>
				
		</div>
	</div>
</div>
</body>
</html>