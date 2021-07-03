<?php include ('../../datalayer/warning.php'); ?>
<?php include '../../datalayer/errors.php'; ?>
<?php include '../../datalayer/server.php'; ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title>Patient</title>
	
	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--Jquery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet"  href="style2.css">
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
			<li><a href=" user_recommendation.php">Recommendation</a></li>
			<li><a href="../../applicationlayer/homelogin.php">Logout</a></li>
	
		</ul>
	
	</nav>



</header>
<body>
	<div class="header" >
	<h2>Add Description</h2>
</div>
<?php 
	
		session_start();

		if(isset($_POST['username']))

	    {
	    
			$_SESSION['username']=$_POST['username'];
		}
?>


	<?php
		
		if(isset($_POST['submit']))
		{	

			$disease_name = stripslashes($_REQUEST['disease_name']);
	        $disease_name = mysqli_real_escape_string($con, $disease_name);
	        $symtomps = stripslashes($_REQUEST['symtomps']);
	        $symtomps= mysqli_real_escape_string($con, $symtomps);
			
			$query="INSERT INTO `user_disease`(username,disease_name,symtomps) VALUES ('$_SESSION[username]','$_POST[disease_name]','$_POST[symtomps]')";
			$result   = mysqli_query($con, $query);
			if($result)
			{
			$flag=1;
			}
		}
		
	?>  

<form method="post" action="add.php" >
 	<div class="form-group">
 		<label for="disease_name">Disease Name :</label>
 		<input type="text" name="disease_name" id="disease_name" class="form-control"  required>
 	</div>
 				
 			
 	<div class="form-group">
 		<label for="symtomps">Symtomps :</label>
 		<input type="text" name="symtomps" id="symtomps" class="form-control" required>
 	</div>
 				
	<div class="form-group">
 		<label><input type="submit" name="submit" value="submit" class="btn btn-primary"></label>
 	</div>
</form>

</body>
</html>