	<?php
   require('../../applicationlayer/db.php');
    // When form submitted, insert values into the database.
    $flag=0;
    session_start();
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
             $docname = stripslashes($_POST['docname']);    // removes backslashes
             $docname = mysqli_real_escape_string($con, $docname);
             $docpassword = stripslashes($_POST['docpassword']);
             $docpassword = mysqli_real_escape_string($con, $docpassword);
             $query    = "SELECT * FROM doctor WHERE docname='$docname'
                     AND docpassword='$docpassword'";
             $result = mysqli_query($con, $query);
             $rows = mysqli_num_rows($result);
             if ($rows > 0) 
            {
                while ($email_pass = mysqli_fetch_assoc($rows)) 
                {
                    if ($pass_decode = password_verify($docpassword, $email_pass['docpassword'])) 
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
                    header("Location: ../../presentationlayer/doctor/index2.php");
            }
               
            break;
            
    }  
        ?>