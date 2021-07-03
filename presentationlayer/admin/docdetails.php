	<?php
   require('../../applicationlayer/db.php');
    // When form submitted, insert values into the database.
     $flag=0;
     session_start();

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
    
    switch ($_POST['action']) 
    {
        
        case 'registration':
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
        }
        else 
        {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='admindashboard.php'>registration</a> again.</p>
                  </div>";
        }
    
            break;
        case 'login':
                $docname = $_POST['docname'];    // removes backslashes
          
                $docpassword = $_POST['docpassword'];
           
                $query    = "SELECT * FROM doctor WHERE docname='$docname'
                     AND docpassword='$docpassword'";
                $result = mysqli_query($con, $query);
                $rows = mysqli_num_rows($result);
                if ($rows > 0) {
                    while ($email_pass = mysqli_fetch_assoc($rows)) {
                        if (password_verify($docpassword, $email_pass['docpassword'])) {
                            $email = $rows['email'];
                            header("Location: ../../presentationlayer/doctor/index2.php");
                        }
                        else{
                                echo "<div class='form'>
                                <h3>Incorrect Username/password.</h3><br/>
                                <p class='link'>Click here to <a href='doctorlogin.php'>Login</a> again.</p>
                                </div>";
                            }
                        }
                    }
                else{
                    header("Location: ../../presentationlayer/doctor/index2.php");
                }
            break;
            default:
                break;

        }
    }  
        ?>