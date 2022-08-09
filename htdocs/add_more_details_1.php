<?php
include("includes/connection.php");
if(isset($_POST['btn-save']))
{
 // variables for input data
     $university = $_POST['university'];
      $Degree = $_POST['Degree'];
      $location = $_POST['location'];
      $Primary_Email = $_POST['Primary_Email'];
      $Secondary_Email = $_POST['Secondary_Email'];
      $website = $_POST['website'];
      $linkedin = $_POST['linkedin'];
      $Twitter = $_POST['Twitter'];
      $Address = $_POST['Address'];
      $City = $_POST['City'];
      $Postal = $_POST['Postal'];
    // variables for input data

 // sql query for inserting data into database
 
$sql_query="INSERT INTO more_details_1 (`university`,`Degree`,`location`,`Primary_Email`,`Secondary_Email`,`website`,`linkedin`,`Twitter`,`Address`,`City`,`Postal`) VALUES('".$university."','".$Degree."','".$location."','".$Primary_Email."','".$Secondary_Email."','".$website."','".$linkedin."','".$Twitter."','".$Address."','".$City."','".$Postal."')";
 // sql query for inserting data into database
 
 // sql query execution function
 if(mysqli_query($con,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('more_details_1 added Successfully ');
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
    <input type="text" class="form-control" id="university" name="university" required placeholder="University">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="Degree" name="Degree" required placeholder="Degree">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="location" name="location" required placeholder="Location">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="Primary_Email" name="Primary_Email" required placeholder="Primary_Email">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="Secondary_Email" name="Secondary_Email" required placeholder="Secondary_Email">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="website" name="website" required placeholder="Website">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="linkedin" name="linkedin" required placeholder="Linkedin">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="Twitter" name="Twitter" required placeholder="Twitter">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="Address" name="Address" required placeholder="Address">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="City" name="City" required placeholder="City">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="Postal" name="Postal" required placeholder="Postal">
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