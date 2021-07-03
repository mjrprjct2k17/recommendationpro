<?php
error_reporting(0);
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "loginsystem";
  // $con = mysqli_connect("localhost","root","root","loginsystem");
	$con = mysqli_connect($servername, $username, $password, $dbname) or die("connection Failed :".mysqli_connect_error());
    // Check connection
    if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

?>
