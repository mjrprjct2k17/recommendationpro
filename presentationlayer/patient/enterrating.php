<?php include ('../../datalayer/warning.php'); ?>
<?php include '../../datalayer/errors.php'; ?>
<?php include '../../datalayer/server.php'; ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title>Patient</title>

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--Jquery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet"  href="style2.css">

</head>

<header>
	<h1>Recommendation<span>System</span></h1>
		<nav>

		<ul> 

			<li><a href=" index.php">MyInfo</a></li>
			<li><a href=" book.php">Appointment</a></li>
			<li><a href="showrating.php">Rating</a></li>
			<li><a href="searchdoctor.php">Search Doctor</a></li>
			<li><a href="enterrating.php">Give Feedback</a></li>
			<li><a href=" add.php">Description</a></li>
			<li><a href="user_recommendation.php ">Recommendation</a></li>
			<li><a href="../../applicationlayer/homelogin.php">Logout</a></li>

		</ul>

	</nav>

</header>
<body >
	<div class="header" >
	<h2>Rating</h2>
</div>
<?php
if(isset($_POST['username']))

	    {
	    	session_start();
			$_SESSION['username']=$_POST['username'];
		
		}
		if(isset($_POST['submit']))
		{	
		
			$pid = stripslashes($_REQUEST['pid']);
       		$pid= mysqli_real_escape_string($con, $pid);
			$doctor_name = stripslashes($_REQUEST['doctor_name']);
       		$doctor_name = mysqli_real_escape_string($con, $doctor_name);
       		$doctor_rating = stripslashes($_REQUEST['doctor_rating']);
       		$doctor_rating = mysqli_real_escape_string($con, $doctor_rating);
       		$type = stripslashes($_REQUEST['type']);
       		$type = mysqli_real_escape_string($con, $type);
			$query="INSERT INTO `usersdoctor`(username,doctor_name,doctor_rating,type,pid)VALUES('$_SESSION[username]','$_POST[doctor_name]','$_POST[doctor_rating]','$_POST[type]','$_POST[pid]')";
			$queryt= "INSERT INTO `doctor_type` (type,doctor_name) VALUES('$_POST[type]','$_POST[doctor_name]')";

			$result=mysqli_query($con, $query);
			if($result)
			{
			$flag=1;
			}
			$resultt=mysqli_query($con,$queryt);
			if($resultt)
			{
			$flag=1;
			}
		}
?>

<form method="post" action="enterrating.php" >
	<div class="form-group">
	 	<label for="type">Patient Id</label>
	 	<input type="text" name="pid" id="pid" class="form-control" required>
	</div>
	
	<div class="form-group">
	 	<label for="doctor_name">Doctor Name</label>
	 	<input type="text" name="doctor_name" id="doctor_name" class="form-control" required>
	</div>
	
	<div class="form-group">
	 	<label for="type">Type</label>
	 	<input type="text" name="type" id="type" class="form-control" required>
	</div>
	 	
	<div class="form-group">
	 	<label for="doctor_rating">Doctor Rating</label>
	 	<input type="number" name="doctor_rating" id="doctor_rating" class="form-control" required>
	</div>

	<div class="form-group">
	 	<div class="form-group">
	 	<input type="submit" name="submit" value="submit" class="btn btn-primary" required>
	</div>

</form>
	 	

</body>
</html>