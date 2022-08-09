<?php
$server="localhost";
$username="root";
$password="";
$dbname="u848544282_alumni_db";

$conn=mysqli_connect($server,$username,$password,$dbname);



if(isset($_POST['btn-qualification'])){

    $university=$_POST['university'];
    $Degree=$_POST['Degree'];
    $time_start=$_POST['time_start'];
    $time_end=$_POST['time_end'];
    $location=$_POST['location'];

    $query="INSERT INTO educational_details (university,Degree,time_start,time_end,location) VALUES ('$university','$Degree','$time_start','$time_end','$location')";

    $run=mysqli_query($conn,$query) ;
    if($run)
    {
        echo "inserted";
    }
    else{
        echo "Not Inserted";
    }

}
?>