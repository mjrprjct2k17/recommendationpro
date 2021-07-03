
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
	<h1 style="margin-left:40% ;margin-top:80px"   class="asd"> Appointments </h1>
	<table class="table4">
		<tr>
		<th>Appointments ID</th>
		<th>Doctor Name</th>
		<th>Patient Name</th>
		<th>Date & Time</th>
		
		

		</tr>

		<?php 
		 require('../../applicationlayer/db.php');
		 $sql3="SELECT  * FROM  bookapp " ;
		
			$user_query=mysqli_query($con,$sql3);
			$numrows = mysqli_num_rows($user_query);
		if($numrows>=1){
			while ($row3=$user_query->fetch_assoc()) {

				echo "<tr><td>".$row3["AppoID"]."</td><td>".$row3["docname"]."</td><td>".$row3["username"]."</td><td>".$row3["appdate"]."</td></tr>";
			}


			echo "</table";
	


		}

		?>
		
	</table>

        
        </div>
        </form>
    
  </body>
</html>