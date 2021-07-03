<?php include ('../../datalayer/warning.php'); ?>
<?php include '../../datalayer/errors.php'; ?>
<?php include '../../datalayer/server.php'; ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title>Patient</title>
	
	

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet"  href="style4.css">
</head>

<header>
	<h1>Recommendation<span>System</span></h1>
		<nav>
	
		<ul> 
		
			<li><a href=" index.php">MyInfo</a></li>
			<li><a href=" book.php"> Appointment</a></li>
			<li><a href=" searchdoctor.php">Doctor</a></li>
			<li><a href=" add.php">Add Description</a></li>
			<li><a href=" show.php">Show Description</a></li>
			<li><a href="user_recommendation.php ">Recommendation</a></li>
			<li><a href="../../applicationlayer/homelogin.php">Logout</a></li>
	
		</ul>
	
	</nav>

</header>
<body>
	<h1 class="my">Desc<span class="mys">ription</span></h1>
<?php 
	
		session_start();

		if(isset($_POST['username']))

	    {
	    
			$_SESSION['username']=$_POST['username'];
		}
?>
<table class="table2">
	

		<th>Disease Name</th>
		<th>Symtomps</th>


		 <?php  
		
		$sql6="SELECT  id,disease_name, symtomps FROM  user_disease   WHERE username='".$_SESSION['username']."' " ;
		$result6=mysqli_query($con,$sql6);
		//$numrows = mysqli_num_rows($result6);
		while ($row6=mysqli_fetch_array($result6)) 
			{
			?>
			<tr>
			
				<td><?php echo $row6['disease_name']; ?></td>
				<td><?php echo $row6['symtomps'] ;?></td>
			</tr>
		<?php	} ?>
			</table>
	
</body>
</html>