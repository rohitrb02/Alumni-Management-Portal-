<?php 
session_start();
include("includes/external.php"); ?><?php include("includes/connection.php"); ?>

<?php

if(isset($_POST['btn-save']))
{
 // variables for input data
     $title = $_POST['title'];
      $content = $_POST['content'];
      $schedule_Start = $_POST['schedule_Start'];
      $banner = $_POST['banner'];
      $date_created = $_POST['date_created'];
      $schedule_End = $_POST['schedule_End'];
      $isapproved = $_POST['isapproved'];
      $approvedby = $_POST['approvedby'];
      $weblink = $_POST['weblink'];
    // variables for input data

 // sql query for inserting data into database
 
$sql_query="INSERT INTO events (`title`,`content`,`schedule_Start`,`banner`,`date_created`,`schedule_End`,`isapproved`,`approvedby`,`weblink`) VALUES('".$title."','".$content."','".$schedule_Start."','".$banner."','".$date_created."','".$schedule_End."','".$isapproved."','".$approvedby."','".$weblink."')";
 // sql query for inserting data into database
 
 // sql query execution function
 if(mysqli_query($con,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('events added Successfully ');
  window.location.href='index.php';
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
 // sql query execution function
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Core PHP Crud functions By PHP Code Builder</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
        <label>Core PHP Crud functions - <a href="http://www.crudgenerator.in" target="_blank">By PHP Code Builder</a></label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post" enctype="multipart/form-data" >
    <table align="center">
    <tr>
    <td align="center"><a href="index.php">back to main page</a></td>
    </tr>



      <tr>
    <td>
    <input type="text" class="form-control" id="title" name="title" required placeholder="Title">
    </td>
    </tr>
    <tr>
    <td>
<textarea  class="form-control" id="content" name="content"></textarea>
  </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="schedule_Start" name="schedule_Start" required placeholder="Schedule_Start">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="banner" name="banner" required placeholder="Banner">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="date_created" name="date_created" required placeholder="Date_created">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="schedule_End" name="schedule_End" required placeholder="Schedule_End">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="isapproved" name="isapproved" required placeholder="Isapproved">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="approvedby" name="approvedby" required placeholder="Approvedby">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="weblink" name="weblink" required placeholder="Weblink">
    </td>
    </tr>
  



    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>