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

			<li><a href=" index.php">MyInfo</a></li>
			<li><a href=" book.php">Appointment</a></li>
			<li><a href="showrating.php">Rating</a></li>
			<li><a href=" searchdoctor.php">Search Doctor</a></li>
			<li><a href="enterrating.php">Give Feedback</a></li>
			<li><a href=" add.php"> Description</a></li>
			<li><a href="user_recommendation.php ">Recommendation</a></li>
			<li><a href="../../applicationlayer/homelogin.php">Logout</a></li>

		</ul>

	</nav>

</header>
<body>
	<h1 class="my">Ra<span class="mys">tings</span></h1>

	<table class="table2">

		<th> Doctor Name  </th>
 		<th> Type </th>
 		<th> Doctor Rating </th>
 	<?php
 	session_start();
 	$sql ="SELECT * FROM usersdoctor where username='$_SESSION[username]'";
 	$result=mysqli_query($con,$sql);

 	while($row=mysqli_fetch_array($result))
 	{
 	?>
 	<tr>
 		<td><?php echo $row['doctor_name']; ?> </td>
 		<td><?php echo $row['type']; ?> </td>
 		<td><?php echo $row['doctor_rating']; ?> </td>
	</tr>
 	<?php  } ?> 		

 	</table>
 		
</body>
</html>

