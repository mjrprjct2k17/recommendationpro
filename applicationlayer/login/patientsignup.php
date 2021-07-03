<?php include '../../datalayer/errors.php'; ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<meta charset="utf-8"/>
	<title>Patient Registration</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<?php
    require('../../applicationlayer/db.php');
    // When form submitted, insert values into the database.
     if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
       
        $address   = stripslashes($_REQUEST['address']);
        $address    = mysqli_real_escape_string($con, $address);
        $contactnumber  = stripslashes($_REQUEST['contactnumber']);
        $contactnumber    = mysqli_real_escape_string($con, $contactnumber);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $gender =   stripslashes($_REQUEST['gender']);
        $gender =   mysqli_real_escape_string($con, $gender);
       
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $bloodgroup    = stripslashes($_REQUEST['bloodgroup']);
        $bloodgroup    = mysqli_real_escape_string($con, $bloodgroup);
      
        $query    = "INSERT into `users` (username, address, contactnumber, email, password, gender,bloodgroup)
                     VALUES ('$username', '$address', '$contactnumber', '$email' ,'$password', '$gender','$bloodgroup')";
        $result   = mysqli_query($con, $query);
        
         if ($result) {
         	echo"<h3>You are successfully Registered</h3><br/>
         	<p >You are successfully Registered.</p>";
            header("Location: patientlogin.php");
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration1.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
  
?>
	<div class="header">
			<h2>Patient Registration</h2>
	</div>

			<form method="post" action="patientsignup.php">
				<div class="input-group">
					<label>User Name</label>
					<input type="text" name="username">
				<div class="input-group">
					<label>Address</label>
					<input type="text" name="address">
				<div class="input-group">
					<label>Contact Number</label>
					<input type="text" name="contactnumber">
				<div class="input-group">
					<label>Email</label>
					<input type="text" name="email">
				<div class="input-group">
					<label>Password</label>
					<input type="password" name="password">
				<div class="input-group">
					<label>Gender</label>
					<input type="text" name="gender">
				<div class="input-group">
					<label>Blood Group</label>
					<input type="text" name="bloodgroup">
				<div class="input-group">
					<button type="submit" name="Register" class="btn btn-primary"> Register
				</button>
				</div>
			
		
		<p>
				Already a member? <a href="patientlogin.php">Sign In </a>
			</p>
		</form>
		<?php
    }
?>

</body>
</html>