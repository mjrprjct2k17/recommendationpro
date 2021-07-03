<?php 

include ('../../datalayer/warning.php'); ?>
<?php include '../../datalayer/errors.php'; ?>
<?php include '../../datalayer/server.php'; ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title>Patient</title>
	<link rel="stylesheet"  href="style6.css">
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
	<div class="header">
		<h2>Doctor's Suggestion</h2>
	</div>
	
		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
		<div class="input-group">
		<label>Category</label>
		<input type="text" name="type" >

	<div class="input-group">
		<button type="submit" name="Search" class="btn">Search</button>
	</div>

	<table class="table2">
		<tr>
	
		<th>Doctor Name</th>
	
		<th>Rating</th>
		<th>Category</th>
		<?php
		  require('../../applicationlayer/db.php');
			if(isset($_POST['Search']))
			{
				$type = $_POST['type'];
				$query="SELECT DISTINCT(docname),type from doctor where type='$type' ";
				$result3=mysqli_query($con,$query);
					if(mysqli_num_rows($result3)>=1)
					{
?>
<?php
						
					while ($row=$result3->fetch_assoc())
			  		  {
	?>
<?php

 require('../../applicationlayer/db.php');
 include("recommendation.php");


$doctors=mysqli_query($con,"SELECT id,doctor_name,type,pid,username,doctor_rating FROM usersdoctor where type='$type'");

	$matrix=array();
	while($doctor=mysqli_fetch_array($doctors))
	{	

		
		$users=mysqli_query($con,"SELECT username FROM users  WHERE id=".$doctor['pid']."");
		$username=mysqli_fetch_array($users);
					
			$matrix[$username['username']][$doctor['doctor_name']]=$doctor['doctor_rating'];
		   	 
}

$users=mysqli_query($con,"SELECT username FROM users WHERE username='".$_SESSION['username']."'");
$username=mysqli_fetch_array($users);
 
?>
	<?php 
 	$recommendation=array();

 	$recommendation=getRecommendation($matrix,$username['id']);
?>
<?php

 	foreach ($recommendation as $doctor => $doctor_rating ) 
 	{ 
 						echo "<tr>";
 					
 						echo'<td>'.$doctor.'</td>';
 						$number2=$doctor_rating;
 						$number_2 =round($number2,2);
 					
 						echo'<td>'.$number_2.'</td>';
 						echo'<td>'.$type.'</td>';
 						echo"</tr>";
 		}

			echo "</table";
?>
					<?php
					
			}
		}
}
		?>

 	</table>

</body>
</html>