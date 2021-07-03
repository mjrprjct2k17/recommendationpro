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

<form method="post" action="searchpatient.php" class="patientsearch">

	<?php include ('../../datalayer/errors.php') ;?>

	<div class="input-group">
		<label style="font-weight: bold; font-size: 30px">Search By:</label>
		<label style="font-weight: bold">*Patient ID </label>

		<input type="text" name="pid" >
		<label style="font-weight: bold">OR </label>
		<label style="font-weight: bold">*Patient Name</label>
		<input type="text" name="pname" >

	</div>

	<div class="input-group">
		<button type="submit" name="SearchP" class="btn">Search</button>
	</div>
		</form>
	</form>

		<?php 

         if (isset($_POST['SearchP'])) {

         ?>	<table class="table3" >
         	<caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd">Patient Information</caption>>

		<tr>

		<th>PatientID</th>
		<th>Name</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Email</th>
		<th>BloodGroup</th>
		<th>Symtomps</th>
	


		</tr> <?php  
		session_start();
		$pid  = stripslashes($_REQUEST['pid']);
        $pid    = mysqli_real_escape_string($con, $pid);
		$pname = stripslashes($_REQUEST['pname']);
        $pname    = mysqli_real_escape_string($con, $pname);
         require('../../applicationlayer/db.php');

		$sqlP="SELECT DISTINCT(u.username),u.id,u.address,u.contactnumber,u.email,u.bloodgroup,d.symtomps  FROM  users u INNER JOIN user_disease d ON u.username=d.username WHERE  u.id=('".$pid."') OR u.username=('".$pname."') " ;
	  	
	  	//$sqlP="SELECT username,symtomps  FROM user_disease WHERE  username=('".$pname."') " ;
	  	

		$resultP=mysqli_query($con,$sqlP);
		$numrows = mysqli_num_rows($resultP);
		if($numrows>=1){
			while ($rowP=$resultP->fetch_assoc()) {

			echo "<tr><td>".$rowP["id"]."</td><td>".$rowP["username"]."</td><td>".$rowP["address"]."</td><td>".$rowP["contactnumber"]."</td><td>".$rowP['email']."</td><td>".$rowP['bloodgroup']."</td><td>".$rowP['symtomps']."</td></tr>";

				//echo "<tr><td>".$rowP["username"]."</td><td>".$rowP['symtomps']."</td></tr>";

			}

			echo "</table>";

		}
	}?>
 	</table>
			
</body>
</html>


