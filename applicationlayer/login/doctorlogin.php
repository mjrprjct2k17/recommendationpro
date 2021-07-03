<?php include ('../../datalayer/warning.php'); ?>
<?php include '../../datalayer/errors.php'; ?>
<?php include '../../datalayer/server.php'; ?>



<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title>Doctor</title>
	<link rel="stylesheet" type="text/css" href="../css/style3.css">
</head>
<body class="Dbody">
	<?php
	 require('../../applicationlayer/db.php');

	if(isset($_POST['docname']))
	{
       $docname = $_POST['docname'];    // removes backslashes
     //  $docname = mysqli_real_escape_string($con, $_POST['docname']);
       $docpassword = $_POST['docpassword'];
    //   $docpassword = mysqli_real_escape_string($con, $_POST['docpassword']);
       $query = "SELECT * FROM doctor WHERE docname='$docname'";
       $result = mysqli_query($con, $query);
             $rows = mysqli_num_rows($result);
             if ($rows ) 
            {
                while ($email_pass = mysqli_fetch_assoc($rows)) 
                {
                    if (password_verify($docpassword, $email_pass['docpassword'])) 
                    {
                         header("Location: ../../presentationlayer/doctor/index2.php");
                    }
                    else {
                        echo "<div class='form'>
                        <h3>Incorrect Username/password.</h3><br/>
                        <p class='link'>Click here to <a href='doctorlogin.php'>Login</a> again.</p>
                        </div>";
                    }

                }
                }
                   
          }
      
    ?>
	<div class="Dheader">
	<h2>Doctor Login</h2>
</div>

<form method="post" action="doctorlogin.php" class="Dform">
	<input type="hidden" name="action" value="login">

	

	<div class="input-groupD">
		<label>Doctor Name</label>
		<input type="text" name="docname">

	</div>




	<div class="input-groupD">
		<label>Password</label>
		<input type="Password" name="docpassword">



	<div class="input-groupD">
		<button type="submit" name="Login2" class="btnD"> Login</button>
	</div>


</form>

</body>
</html>