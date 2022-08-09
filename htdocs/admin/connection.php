<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//$conn= new mysqli('localhost','u848544282_alumni_user','u848544282_Alumni_user','u848544282_alumni_db')or die("Could not connect to mysql".mysqli_error($con));

//local
$conn= new mysqli('localhost','root','','u848544282_alumni_db')or die("Could not connect to mysql".mysqli_error($con));
$con=$conn;


?>