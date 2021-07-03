<?php include '../../datalayer/errors.php'; ?>
<?php include '../../datalayer/server.php'; ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<meta charset="utf-8"/>
	<title>Patient Login</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

	<div class="header">
			<h2>Patient Login</h2>
	</div>

		<form method="post" action="patientlogin.php">
			<div class="input-group">
				<label>UserName</label>
				<input type="text" name="username">

			</div>
			<div class="input-group">
				<label>Password</label>
				<input type="Password" name="password">
		<?php $result=mysqli_query($con,"SELECT * FROM users");
			while($row=mysqli_fetch_array($result))
		{
			?>

			<div class="input-group">
				
				<input type="hidden" name="id" value="<?php $row['id'] ?>">
			</div>

		<?php } ?>
			<button type="submit" name="Login" class="btn btn-primary"> Login
				</button>
			<p>
				Not a member? <a href="patientsignup.php">Sign Up </a>
			</p>
		</form>

</body>
</html>
