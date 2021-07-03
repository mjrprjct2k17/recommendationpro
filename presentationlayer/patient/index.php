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
			<li><a href=" searchdoctor.php">Doctor</a></li>
			<li><a href=" add.php">Description</a></li>

			<?php 
			require('../../applicationlayer/db.php');
			session_start();
			$query="SELECT * from users where username='".$_SESSION['username']."' ";
			$result=mysqli_query($con,$query);
			while($row=mysqli_fetch_array($result))
			{
				?>
			<li><a href=" user_recommendation.php">Recommendation</a></li>
			

		<?php } ?>
			<li><a href="../../applicationlayer/homelogin.php">Logout</a></li>

		</ul>
		

	</nav>

</header>
<body >
		<div class="header" >
	<h2>My Information</h2>
</div>



<form method="post" action="index.php" >

   <div class="contentP" style="font-weight:initial; font-size: 37px;">


	<?php
		require('../../applicationlayer/db.php');
		$flag=0;
		session_start();
		if(isset($_POST['username']))

	    {
	    
			$_SESSION['username']=$_POST['username'];
			$id=$_GET['id'];
		}
		$sql3="SELECT  * FROM  users where username='".$_SESSION['username']."' " ;
		$result3=mysqli_query($con,$sql3);
		if(mysqli_num_rows($result3)>=1)
		{
	
			while ($row3=$result3->fetch_assoc()) 
			{

	

				echo "<table><tr>
						  <td>ID: ".$row3["id"]."</td>	</tr>  ";

				echo "<tr>
						  <td>Name: ".$row3["username"]."</td>	</tr>  ";
				echo "<tr>
						  <td>Email: ".$row3["email"]."</td>	</tr> ";
				echo "<tr>
						  <td>Address: ".$row3["address"]."</td>	</tr>  ";
				echo "<tr>
						  <td> Contact Number: ".$row3['contactnumber']."</td>	</tr> ";
				echo "<tr>
						  <td> Gender: ".$row3['gender']."</td>	</tr> ";
				echo "<tr>
						  <td>Blood Group: ".$row3["bloodgroup"]."</td>	</tr>  ";
					
			}


			echo "</table";
	
		}

		

		?>  
	
</div>

</form>
<?php
if(isset($_POST['username']))

	    { ?>
	<table class="table3">
		<tr>
		<th>ID</th>
		<th>Disease Name</th>
		<th>Symtomps</th>
	
		</tr>


		 <?php  
		
		$sql6="SELECT  id,disease_name, symtomps FROM  user_disease   WHERE username='".$_SESSION['username']."' " ;
		$result6=mysqli_query($con,$sql6);
		//$numrows = mysqli_num_rows($result6);
		if(mysqli_num_rows($result6)==1)
		{
			while ($row6=$result6->fetch_assoc()) 
			{

				echo "<tr><td>".$row6["id"]."</td><td>".$row6["disease_name"]."</td><td>".$row6["symtomps"]."</td></tr>";
			}


			echo "</table";
	
		}

	}

	
	?>
 </table>
</div>				
	


</body>
</html>

<!--<?php if (isset($_SESSION['success'])) : ?> 
            <div class="error success" > 
                <h3> 
                    <?php
                         
                        unset($_SESSION['success']); 
                    ?> 
                </h3> 
            </div> 
        <?php endif ?> 

        $Patientsearch = mysqli_real_escape_string($mysqli,$_POST['Patientsearch']);
	
	$query="SELECT * FROM patients WHERE UserID=('$Patientsearch')";
	$result2=mysqli_query($mysqli,$query);

   
        <!-- information of the user logged in -->
        <!-- welcome message for the logged in user -->