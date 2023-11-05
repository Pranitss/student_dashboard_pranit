<?php 
// session_start();


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "asteriscstudents";

// Create connection
$con =  mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, 3307);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    //echo ("connection succed..!");
}

?>
