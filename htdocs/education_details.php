<?php include("includes/connection.php"); 

if(isset($_POST['education_btn']))
{
    $university=$_POST['university'];
    $Degree=$_POST['Degree'];
    $time_start=$_POST['time_start'];
    $time_end=$_POST['time_end'];
    $location=$_POST['location'];
    
    $query="INSERT INTO educational_details (university,Degree,time_start,time_end,location) VALUES ('$university','$Degree','$time_start','$time_end','$location')";
    $query_run=mysqli_query($conn,$query);


    if($query_run)
    {
        echo "inserted";
    }
    else{
        echo "Not Inserted";
    }

}
?>