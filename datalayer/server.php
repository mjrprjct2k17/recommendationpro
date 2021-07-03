<?php
    require('../../applicationlayer/db.php');
    session_start();
    $errors=array();
    // When form submitted, check and create user session.
    
 

if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='$password'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);

    
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: ../../presentationlayer/patient/index.php");
             $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='$password'";
        $result = mysqli_query($con, $query) or die(mysql_error());  
                 while ($row=mysqli_fetch_array($result)) 
                    {
                        $var=$row['id'];
            }
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='patientlogin.php'>Login</a> again.</p>
                  </div>";
        }
    } else {

}



// When form submitted, check and create user session.
    if (isset($_POST['adminname'])) {
        $adminname = stripslashes($_REQUEST['adminname']);    // removes backslashes
        $adminname = mysqli_real_escape_string($con, $adminname);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM admin WHERE adminname='$adminname' AND password='$password'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['adminname'] = $adminname;
            // Redirect to user dashboard page
            header("Location: ../../presentationlayer/admin/admindashboard1.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='adminlogin.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
        }



if (isset($_POST['docname'])) {
        $docname = stripslashes($_POST['docname']);    // removes backslashes
        $docname = mysqli_real_escape_string($con, $docname);
        $docpassword = stripslashes($_POST['docpassword']);
        $docpassword = mysqli_real_escape_string($con, $docpassword);
        // Check user is exist in the database
        $query    = "SELECT * FROM doctor WHERE docname='$docname'
                     AND docpassword='$docpassword'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows) {

           $email_pass = mysqli_fetch_assoc($result);
           $_SESSION['docname'] = $email_pass['docname'];
           $db_pass = $email_pass['password'];
           $pass_decode = password_verify($docpassword, $db_pass);
           $_SESSION['password']=$email_pass['docpassword'];

            // Redirect to user dashboard page
            header("Location: ../../presentationlayer/doctor/index2.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='doctorlogin.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
    }
?>
