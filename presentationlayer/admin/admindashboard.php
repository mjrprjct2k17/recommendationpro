<?php include ('../../datalayer/warning.php'); ?>
<?php include '../../datalayer/errors.php'; ?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="../../applicationlayer/css/style5.css" type="text/css">

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
	<?php
   require('../../applicationlayer/db.php');
    // When form submitted, insert values into the database.
     $flag=0;
     session_start();
     if (isset($_REQUEST['Add'])) 
    {
        // removes backslashes
        $docname = stripslashes($_REQUEST['docname']);
        //escapes special characters in a string
        $docname = mysqli_real_escape_string($con, $docname);
       
        $docaddress  = stripslashes($_REQUEST['docaddress']);
        $docaddress    = mysqli_real_escape_string($con, $docaddress);
        $docnumber = stripslashes($_REQUEST['docnumber']);
        $docnumber    = mysqli_real_escape_string($con, $docnumber);
        $docemail    = stripslashes($_REQUEST['docemail']);
        $docemail    = mysqli_real_escape_string($con, $docemail);
              
        $docpassword = stripslashes($_REQUEST['docpassword']);
        $docpassword= mysqli_real_escape_string($con, $docpassword);

        $str_pass = password_hash($docpassword, PASSWORD_BCRYPT);

        $type   = stripslashes($_REQUEST['type']);
        $type   = mysqli_real_escape_string($con, $type);
      
        $query    = "INSERT into `doctor` (docname, docaddress, docnumber, docemail, docpassword, type) VALUES ('$_POST[docname]', '$_POST[docaddress]', '$_POST[docnumber]', '$_POST[docemail]' ,'$str_pass', '$_POST[type]')";
        $result   = mysqli_query($con, $query);
        if ($result) 
        {
            echo "<div class='form'>
                  <h3></h3><br/></div>";
        }
        else 
        {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='admindashboard.php'>registration</a> again.</p>
                  </div>";
        }
    
        ?>
        <?php
    }
    ?>

		<div class="headerA">
	<h2>Add Doctor</h2>
</div>
<?php include ('../../datalayer/errors.php'); ?>

<form method="post" action="admindashboard.php">
	<input type="hidden" name="action" value="registration">
	
	<div class="input-groupA">
		<label>Doctor Name</label>
		<input type="text" name="docname" class="form-control" required>


	</div>

	<div class="input-groupA">
		<label>Address</label>
		<input type="text" name="docaddress"class="form-control" required>

	</div>

	<div class="input-groupA">
		<label>Contact Number</label>
		<input type="text" name="docnumber" class="form-control" required>


	</div>


	<div class="input-groupA">
		<label>Email address</label>
		<input type="text" name="docemail"class="form-control" required>

	</div>

	<div class="input-groupA">
		<label>Password</label>
		<input type="Password" name="docpassword"class="form-control" required>

	</div>
<div class="input-groupA">
	<label>Category</label>
	   	<input type="text" name="type"class="form-control" required>
	   	</div>

	<div class="input-groupA">
		<button type="submit" name="Add" class="btnA"class="btn btn-primary" required>Add Doctor</button>
	</div>

</form>
<?php

if (isset($_POST['Delete']))
{

	$deleteID    = stripslashes($_REQUEST['deleteID']);
    $deleteID    = mysqli_real_escape_string($con, $deleteID);

	if (empty($deleteID)) 
	{
		array_push($errors,"Doctor ID is required");
	}


	$querydelete="DELETE FROM doctor WHERE id='".$deleteID."' ";
	$user_query=mysqli_query($con,$querydelete);
	


?>

<?php

}
?>


</form>
	<div class="headerAD">
	<h2>Delete Doctor</h2>
</div>

<form method="post" action="admindashboard.php" class="delete">

	<div class="input-groupA">
		<label>Doctor ID</label>
		<input type="text" name="deleteID" >

	</div>

	<div class="input-groupA">
		<button type="submit" name="Delete" class="btnA">Delete</button>
	</div>

</form>

</body>
</html>