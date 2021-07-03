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
	<h1 >Recommendation<span>System</span></h1>
		<nav>
		
	
		<ul > 
			
		
			<li><a href="index2.php">MyInfo</a></li>
			<li><a href="doctorapp.php">My Appointments</a></li>
			<li><a href=" searchpatient.php">Search Patient</a></li>

			<li><a href="../../applicationlayer/homelogin.php">Logout</a></li>
	

		</ul>
		
	</nav>

</header>
<body >

	<div class="header">
	<h2>My Information</h2>
</div>

<form method="post" action="index2.php" class="info">


<div class="Dcontent">

	<table class="table4">
		

		<?php
		
		require('../../applicationlayer/db.php');
		$flag=0;
		$sql3="SELECT  DISTINCT(id),docname,docemail,docaddress,docnumber,type FROM  doctor where docname='".$_SESSION['docname']."' AND docpassword='".$_SESSION['password']."'" ;
		$result3=mysqli_query($con,$sql3);
		if(mysqli_num_rows($result3)>=1){
	
			while ($row3=$result3->fetch_assoc()) {

	

				echo "<tr>
						  <td>ID:".$row3["id"]."</td>	</tr>  ";

				echo "<tr>
						  <td>Doctor Name:".$row3["docname"]."</td>	</tr>  ";
				echo "<tr>
						  <td>Doctor Email:".$row3["docemail"]."</td>	</tr> ";
				echo "<tr>
						  <td>Doctor Address:".$row3["docaddress"]."</td>	</tr>  ";
				echo "<tr>
						  <td>Doctor Contact Number:".$row3['docnumber']."</td>	</tr> ";
				echo "<tr>
						  <td>Category:".$row3["type"]."</td>	</tr>  ";
					
			}


			echo "</table";
	
		}

		

		?>
		
	</table>           
	
</div>
</form>
</body>
</html>