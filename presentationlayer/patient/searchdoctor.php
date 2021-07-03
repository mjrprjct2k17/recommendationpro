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
			<li><a href="searchdoctor.php">Search Doctor</a></li>
			<li><a href="enterrating.php">Give Feedback</a></li>
			<li><a href=" add.php">Description</a></li>
			<li><a href="user_recommendation.php ">Recommendation</a></li>
			<li><a href="../../applicationlayer/homelogin.php">Logout</a></li>
			
		</ul>

	</nav>

</header>

<body>

<form method="post" action="searchdoctor.php">

	<?php include ('../../datalayer/errors.php') ;?>

	<div class="input-group">
		<label style="font-weight: bold;">Search By:<br>*Doctor ID<br></label><input type="text" name="dID" >
		<label style="font-weight: bold;">OR<br></label>
		<label style="font-weight: bold;">*Doctor Name<br></label><input type="text" name="dname" >
	

	</div>

	<div class="input-group">
		<button type="submit" name="Search" class="btn">Search</button>
	</div>

		</form>

	<?php 
		require('../../applicationlayer/db.php');

         if (isset($_POST['Search'])) {

         ?>	<table class="table2">
		<tr>
		<th>Doctor ID</th>
		<th>Doctor Name</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Category</th>

		</tr> <?php  
		$dID = stripslashes($_REQUEST['dID']);
        //escapes special characters in a string
        $dID = mysqli_real_escape_string($con, $dID);
        $dname= stripslashes($_REQUEST['dname']);
        //escapes special characters in a string
        $dname = mysqli_real_escape_string($con, $dname);

    

      
		$sql6="SELECT  * FROM  doctor   WHERE docname=('".$dname."') OR id=('".$dID."')  " ;
		$result6=mysqli_query($con,$sql6);
		//$numrows = mysqli_num_rows($result6);
		if(mysqli_num_rows($result6)==1)
		{
			while ($row6=$result6->fetch_assoc()) 
			{

				echo "<tr><td>".$row6["id"]."</td><td>".$row6["docname"]."</td><td>".$row6["docaddress"]."</td><td>".$row6["docnumber"]."</td><td>".$row6["type"]."</td></tr>";
			}


			echo "</table";
	


		}
	?>
	<?php
}?>
 </table>
				
	


</body>
</html>


