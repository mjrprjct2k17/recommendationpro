<?php 

include ('../../datalayer/warning.php'); ?>
<?php include '../../datalayer/errors.php'; ?>
<?php include '../../datalayer/server.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<link rel="stylesheet"  href="style2.css">
	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>Recommendation<span>System</span></h1>
		<nav>
		
		<ul> 

		<li><a href=" index.php">MyInfo</a></li>
			<li><a href=" book.php">Appointment</a></li>
			<li><a href=" searchdoctor.php">Doctor</a></li>
			<li><a href=" add.php">Description</a></li>
			<li><a href=" user_recommendation.php">Recommendation</a></li>
			<li><a href="../../applicationlayer/homelogin.php">Logout</a></li>

		</ul>

	</nav>

</header>
<body >
	<h1 class="my">Rat<span class="mys">ing</span></h1>

	<table class="table2">
		<tr>
	
		<th>Doctor Name</th>
	
		<th>Rating</th>
<?php

 require('../../applicationlayer/db.php');
 include("recommendation.php");


$doctors=mysqli_query($con,"SELECT id,doctor_name,type,pid,username,doctor_rating FROM usersdoctor");

	$matrix=array();
	while($doctor=mysqli_fetch_array($doctors))
	{	

		
		$users=mysqli_query($con,"SELECT username FROM users  WHERE id=".$doctor['pid']."");
		$username=mysqli_fetch_array($users);
					
			$matrix[$username['username']][$doctor['doctor_name']]=$doctor['doctor_rating'];
		    
			 
}

$users=mysqli_query($con,"SELECT username FROM users WHERE username='".$_GET['id']."'");
$username=mysqli_fetch_array($users);
 
?>
	<?php 
 	$recommendation=array();

 	$recommendation=getRecommendation($matrix,$username['id']);

 	foreach ($recommendation as $doctor => $doctor_rating ) 

 	{ 
 						echo "<tr>";
 					
 						echo'<td>'.$doctor.'</td>';
 					
 						echo'<td>'.$doctor_rating.'</td>';
 						echo"</tr>";
 		}

			echo "</table";

?>
 	

 	</table>




</body>
</html>
