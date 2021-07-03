<?php include ('../../datalayer/warning.php'); ?>
<?php include '../../datalayer/errors.php'; ?>
<?php include '../../datalayer/server.php'; ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title>Patient</title>
	<link rel="stylesheet"  href="style2.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>Recommendation<span>System</span></h1>
		<nav>
		


		
		<ul> 
			
		
			<li><a href="index.php">MyInfo</a></li>
			<li><a href="book.php">Book Appointment</a></li>
			<li><a href="view.php">View Appointment</a></li>
			<li><a href="cancel.php">Cancel Booking</a></li>
			<li><a href="searchdoctor.php "> Doctor</a></li>
			<li><a href="add.php">Description</a></li>
			<li><a href="user_recommendation.php ">Recommend</a></li>
			<li><a href="../../applicationlayer/homelogin.php">Logout</a></li>
			



	
			

		</ul>
		



	</nav>




</header>

<body>
	<?php
	  require('../../applicationlayer/db.php');

	session_start();
	 
	 if(isset($_POST['username']))

	    {
	    $_POST['username'] =$_SESSION['username'];
			}
	
?>
<?php
if (isset($_POST['cancel']))
{
		$AppoID2  = stripslashes($_REQUEST['AppoID2']);
		$AppoID2 =mysqli_real_escape_string($con,$AppoID2);
			
		

	if (empty($AppoID2)) 
	{
		array_push($errors,"Appointment ID is required");
	}
 	
 		$querydelete="DELETE  FROM `bookapp` WHERE AppoID='".$AppoID2."' ";
 		$userquery=mysqli_query($con,$querydelete);
}
?>
	
<form method="post" action="cancel.php">

	<?php include ('../../datalayer/errors.php') ;?>

	<div class="input-group">
		<label>Appointment ID</label>
		<input type="text" name="AppoID2" >

	</div>

	<div class="input-group">
		<button type="submit" name="cancel" class="btn">Cancel</button>
	</div>
		</form>
	</form>


</body>
</html>


