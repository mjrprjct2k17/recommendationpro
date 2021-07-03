<?php include '../../datalayer/errors.php'; ?>
<?php include '../../datalayer/server.php'; ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="../../applicationlayer/css/style4.css">
</head>
<body class="Abody">

    
	<div class="Aheader">
	<h2>Admin Login</h2>
</div>

<form method="post" action="adminlogin.php" class="Aform">

	

	<div class="input-groupA">
		<label>Admin ID</label>
		<input type="text" name="adminname">

	</div>




	<div class="input-groupA">
		<label>Password</label>
		<input type="Password" name="password">



	<div class="input-groupA">
		<button type="submit" name="Login3" class="btnA"> Login</button>
	</div>

	
	




</form>

</body>
</html>