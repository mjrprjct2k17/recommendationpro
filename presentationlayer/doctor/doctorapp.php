<?php include ('../../datalayer/warning.php'); ?>
<?php include '../../datalayer/errors.php'; ?>
<?php include '../../datalayer/server.php'; ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title>Doctor</title>
	<link rel="stylesheet"  href="style3.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>Recommendation<span>System</span></h1>
		<nav>
		


		
		<ul> 
			
		
			<li><a href="index2.php">My Info</a></li>
			<li><a href="doctorapp.php">My Appointments</a></li>
			<li><a href=" searchpatient.php">Search Patient</a></li>
		
			<li><a href="../../applicationlayer/homelogin.php">Logout</a></li>



	
			

		</ul>
		



	</nav>




</header>

<body>
	<h1 class="my1">My<span class="mys">Appointments</span></h1>

	<table class="table2">
		<tr>
		<th>Appointment ID</th>
		<th>DATE & TIME</th>
		<th>PatientID</th>
		<th>PatientName</th>
		<th>PatientAddress</th>
		<th>PatientEmail</th>
		<th>PatientContactNumber</th>
	
		<th>BloodGroup</th>

		

		</tr>
			<?php
		session_start();
		if(isset($_POST['docname']))

	    {
	    
			$_SESSION['docname']=$_POST['docname'];
		}
		?>
		<?php 

		$sqldoc="SELECT DISTINCT(b.docname), b.AppoID,b.appdate,u.id,u.username,u.email,u.address,u.contactnumber,u.bloodgroup
FROM bookapp b INNER JOIN  users u ON  b.username=u.username WHere b.docname = '".$_SESSION['docname']."'"  ;
	
		$resultdoc=mysqli_query($con,$sqldoc);
		$numrows = mysqli_num_rows($resultdoc);
		if($numrows>=1){
			while ($rowdoc=$resultdoc->fetch_assoc()) {

				echo "<tr><td>".$rowdoc["AppoID"]."</td><td>".$rowdoc["appdate"]."</td><td>".$rowdoc["id"]."</td><td>".$rowdoc['username']."</td><td>".$rowdoc['address']."</td><td>".$rowdoc['email']."</td><td>".$rowdoc["contactnumber"]."</td><td>".$rowdoc["bloodgroup"]."</td></tr>";
			}


			echo "</table";
	
		}

		?>
		
	</table>

</body>
</html>

