<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="../../applicationlayer/css/style5.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>Recommendation<span>System</span></h1>
		<nav>
		


		
		<ul> 
			
		
		
			<li><a href="admindashboard.php">Add/Delete Doctor</a></li>
			<li><a href="viewdoctor.php">View Doctors</a></li>
			<li><a href=" viewpatients.php">View Patients</a></li>
			<li><a href="viewappointments.php">View Appointments</a></li>
			<li><a href="../../applicationlayer/homelogin.php">Logout</a></li>

			


	
			

		</ul>
		



	</nav>




</header>

<body>
	<h1 style="margin-left:35% ;margin-top:80px"   class="asd">Doctors Information</h1>
	<table class="table4">
		<tr>
		<th>Doctor ID</th>
		<th>Doctor Name</th>
		<th>Email</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Category</th>

		</tr>

		<?php
		require('../../applicationlayer/db.php');
		$flag=0;
		$sql3="SELECT  DISTINCT(docname),id,docemail,docaddress,docnumber,type FROM  doctor " ;
		$result3=mysqli_query($con,$sql3);
		if(mysqli_num_rows($result3)>=1){
	
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["id"]."</td><td>".$row3["docname"]."</td><td>".$row3["docemail"]."</td><td>".$row3["docaddress"]."</td><td>".$row3['docnumber']."</td><td>".$row3["type"]."</td></tr>";
			}


			echo "</table";
	
		}

		

		?>
		
	</table>
</body>
</html>