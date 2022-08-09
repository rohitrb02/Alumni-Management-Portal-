<?php
session_stat();
//initialising  variables
$username="";
$email="";
$error=array();
//connect to db

$conn= new mysqli('localhost','u848544282_alumni_user','u848544282_Alumni_user','u848544282_alumni_db')or die("Could not connect to mysql".mysqli_error($con));
$con=$conn;
$db=$conn;
//Register user
$username=mysqli_real_escape_string($db,$_POST['username']);
$email=mysqli_real_escape_string($db,$_POST['email']);
$password_1=mysqli_real_escape_string($db,$_POST['password_1']);
$password_2=mysqli_real_escape_string($db,$_POST['password_2']);
//form validation
if(empty($username)){array_push($errors."Username is required")};
if(empty($email)){array_push($errors."Email ID is required")};
if(empty($password_1)){array_push($errors."Password is required")};
//if(empty($username)){array_push($errors."Username is required")};
//if(empty($username)){array_push($errors."Username is required")};
//if(empty($username)){array_push($errors."Username is required")};
if($password_1!=$password_2){array_push($errors."Password do not match")};
//check db for existing user  with same username
$user_check_query="select * from user where username='$username' or email='$email' limit 1";
$results =mysqli_query($db,$user_check_query);
$user=mysqli_fetch_assoc($results);
if($user){
	if($user['username'])===$username{array_push($errors,"Username alraedy exists");}
	if($user['email'])===$email{array_push($errors,"This email id already has a registed username");}
}	
//Register the user if no error 
if(count($errors)==0){
	$password=md5($password_1);	//this will encrypt the password;
	
$query="INSERT INTO users (`name`,`username`,`password`,`type`) VALUES('".$_POST[name]."','username','$password',3)";
	
   if(mysqli_query($db,$query));
	  {
		  $_SESSION['username']=$username;
		  $_SESSION['success']="You are now logged in";
	  ?>
	  <script type="text/javascript">
	  alert('users added Successfully ');
	  window.location.href='RegisteredSuccessfully.php';
	  </script>
	  <?php
	 }
	 else
	 {
	  ?>
	  <script type="text/javascript">
	  alert('error occured while inserting your data');
	  </script>
	  <?php
	 } 







?>