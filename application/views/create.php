<!DOCTYPE html>
<html>
<head>
	<title>crud-application</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style.css'; ?>">
</head>
<body>



	<div class="container-fluid">
		<nav class="navbar navbar-dark bg-dark">
			<a href="" class="navbar-brand">Create User</a>
		</nav>
	
<hr>
	<form method="post"  name='createUser'action="<?php echo base_url().'index.php/user/create'; ?>">
		<div class="form-group col-sm-6">
			<label>Name</label>
			<input type="text" name="name" value="<?php  echo set_value('name')?>" class="form-control" placeholder='enter name'><br>
			<?php echo form_error('name')?>
			<button class="btn btn-primary mx-auto">create</button>
		    <a href="<?php echo base_url().'index.php/user/index'; ?>" class="btn btn-secondary mx-auto">cancel</a> 
			
		</div>
	</form>
	<hr>
</div>
</body>
</html>