<?php include ('../../datalayer/warning.php'); ?>
<?php include '../../datalayer/errors.php';

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "loginsystem";
   // $con = mysqli_connect("localhost","root","root","loginsystem");
	$con = mysqli_connect($servername, $username, $password, $dbname) or die("connection Failed :".mysqli_connect_error());

 ?>

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
			<li><a href="searchdoctor.php ">Doctor</a></li>
			<li><a href="add.php">Description</a></li>
			<li><a href="user_recommendation.php ">Recommend</a></li>
			<li><a href="../../applicationlayer/homelogin.php">Logout</a></li>
				
		</ul>

	</nav>

</header>

<body>

	<div class="header">
	<h2>Book Appointment</h2>
</div>

<form method="post" action="book.php">

<?php include ('../../datalayer/errors.php');


	session_start();
	 
	 if(isset($_POST['username']))

	    {
	    $_POST['username'] =$_SESSION['username'];
	   $_SESSION['username']=$username;
			}
	
?>


 <p>Hey, <?php echo $_SESSION['username']; ?>


	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
		<div class="input-group">
		<label>Category</label>
		<input type="text" name="type" >

	</div>
	
	<div class="input-group">
		<button type="submit" name="Search" class="btn">Search</button>
	</div>


	<?php
		  require('../../applicationlayer/db.php');
			if(isset($_POST['Search']))
			{
				$type = $_POST['type'];
				$query="SELECT DISTINCT(docname),type from doctor where type='$type' ";
				$result3=mysqli_query($con,$query);
		if(mysqli_num_rows($result3)>=1){
			while ($row=$result3->fetch_assoc())
			    {

					?>
					
						<table><td> <?php echo $row['type'] ;
											echo "  :  " ;?></td>
					
				
						<td> <?php echo $row['docname'];?></td></table>
						
						
					
					<?php
					
			}
}

		?>
		<?php
	}
	?>

	<?php  
	if (isset($_POST['Book'])) 
	{
		$app_date = stripslashes($_REQUEST['app_date ']);
	

		$docname = stripslashes($_POST['docname']);
	
		if (empty($app_date)) 
		{
			array_push($errors,"Date is required");
	# code...
		}
			
	  if (isset($_POST['Book']))
	{
		$flag=0;
		$type  = stripslashes($_REQUEST['type ']);
		$type = mysqli_real_escape_string($con,$type);
		$app_date = stripslashes($_POST['app_date']);
		$app_date = mysqli_real_escape_string($con,$app_date);
		$username = $_SESSION['username'];
		$docname = stripslashes($_POST['docname']);
		$docname = mysqli_real_escape_string($con,$docname);
		require('../../applicationlayer/db.php');
		$sql = "INSERT INTO  bookapp (appdate,username,docname) VALUES ('".$app_date."','".$_SESSION[username]."','".$docname."') ";
		$result99=mysqli_query($con,$sql);


		if ($result99) 
		{
  			$_SESSION['status']="successful";
  			header("Location: book.php");

  		}
  		else
  			{
  			$_SESSION['status']="not successful";
  			header("Location: book.php");

  		}

  	}
  }
	?>
		
		<div class="input-group"> 

			<label>Doctor Name</label>
				<select class="input-group2" name="docname">
						<?php  
							$query="SELECT DISTINCT(docname) from doctor where type='$type' ";

	 						$result3=mysqli_query($con,$query);
							if(mysqli_num_rows($result3)>=1)
							{
							while ($row=$result3->fetch_assoc())
							  {
									?>
		
	 
								<option> <?php echo $row['docname'] ?> </option>	  
	   								<?php 
	   							}
							} 
							?>
	 			</select>
	 	</div>

	<div class="input-group">
		<label>Appointment Date and Time</label>
		<input type="datetime-local" name="app_date">

	</div>

	<div class="input-group">
			<button type="submit" name="Book" value="Book" class="btn">BOOK</button>
	</div>

</form>

</body>

</html>