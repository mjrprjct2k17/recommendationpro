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
			<li><a href="searchdoctor.php">Doctor</a></li>
			<li><a href="add.php">Description</a></li>
			<li><a href="user_recommendation.php ">Recommend</a></li>
			<li><a href="../../applicationlayer/homelogin.php">Logout</a></li>
			

		</ul>
		



	</nav>




</header>

<body>
	<h1 class="my">My<span class="mys">Appointment</span></h1>

	<table class="table2">
		<tr>
		<th>Appointment ID</th>
		<th>DATE & TIME</th>

		<th>Doctor ID</th>
		<th>Doctor Name</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Category</th>

		</tr>
		<?php 
		  require('../../applicationlayer/db.php');
		  $sql3="SELECT DISTINCT(d.docname),b.AppoID,b.appdate,d.id,d.docaddress,d.docnumber,d.docemail,d.type  FROM doctor d INNER JOIN bookapp b ON d.docname = b.docname  WHERE b.username='".$_SESSION['username']."' "  ;
		require('../../applicationlayer/db.php');
		$result3=mysqli_query($con,$sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["AppoID"]."</td><td>".$row3["appdate"]."</td><td>".$row3["id"]."</td><td>".$row3['docname']."</td><td>".$row3['docaddress']."</td><td>".$row3['docnumber']."</td><td>".$row3["type"]."</td></tr>";
			}


			echo "</table";
	


		}

		?>
		
	</table>




</body>
</html>

