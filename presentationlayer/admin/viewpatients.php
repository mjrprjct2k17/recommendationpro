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
	<h1 style="margin-left:35% ;margin-top:80px"   class="asd">Patients Information</h1>
	<table class="table4">
		<tr>
		
		<th>Patient Name</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Email</th>
		<th>Blood Group</th>

		</tr>

		<?php 
		require('../../applicationlayer/db.php');
		$sql3="SELECT  * FROM  users " ;
		$result3=mysqli_query($con,$sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["username"]."</td><td>".$row3["address"]."</td><td>".$row3["contactnumber"]."</td><td>".$row3['email']."</td><td>".$row3['bloodgroup']."</td></tr>";
			}


			echo "</table";
	


		}

		?>
		
	</table>
</body>
</html>