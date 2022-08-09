<?php
include("includes/connection.php");

if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM more_details_1 WHERE id=".$_GET['edit_id'];
 $result_set=mysqli_query($con,$sql_query);
 $fetched_row=mysqli_fetch_array($result_set,MYSQLI_ASSOC);
}
if(isset($_POST['btn-update']))
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

 // sql query for update data into database
  $sql_query="UPDATE more_details_1 SET `university`='$university',`Degree`='$Degree',`location`='$location',`Primary_Email`='$Primary_Email',`Secondary_Email`='$Secondary_Email',`website`='$website',`linkedin`='$linkedin',`Twitter`='$Twitter',`Address`='$Address',`City`='$City',`Postal`='$Postal' WHERE id=".$_GET['edit_id'];

 // sql query for update data into database
 
 // sql query execution function
 if(mysqli_query($con,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('more_details_1 updated successfully');
  window.location.href='index.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: index.php");
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
        <label>Core PHP Crud functions - <a href="http://www.phpcodebuilder.com" target="_blank">By PHP Code Builder</a></label>
    </div>
</div>

<div id="body">
 <div id="content">
    <form method="post" enctype="multipart/form-data">
    <table align="center">
    <tr>
    <td>
    <input type="text" value="<?php echo $fetched_row['university'] ?>" class="form-control" id="university" name="university">
</td>
    </tr>
  <tr>
    <td>
    <input type="text" value="<?php echo $fetched_row['Degree'] ?>" class="form-control" id="Degree" name="Degree">
</td>
    </tr>
  <tr>
    <td>
    <input type="text" value="<?php echo $fetched_row['location'] ?>" class="form-control" id="location" name="location">
</td>
    </tr>
  <tr>
    <td>
    <input type="text" value="<?php echo $fetched_row['Primary_Email'] ?>" class="form-control" id="Primary_Email" name="Primary_Email">
</td>
    </tr>
  <tr>
    <td>
    <input type="text" value="<?php echo $fetched_row['Secondary_Email'] ?>" class="form-control" id="Secondary_Email" name="Secondary_Email">
</td>
    </tr>
  <tr>
    <td>
    <input type="text" value="<?php echo $fetched_row['website'] ?>" class="form-control" id="website" name="website">
</td>
    </tr>
  <tr>
    <td>
    <input type="text" value="<?php echo $fetched_row['linkedin'] ?>" class="form-control" id="linkedin" name="linkedin">
</td>
    </tr>
  <tr>
    <td>
    <input type="text" value="<?php echo $fetched_row['Twitter'] ?>" class="form-control" id="Twitter" name="Twitter">
</td>
    </tr>
  <tr>
    <td>
    <input type="text" value="<?php echo $fetched_row['Address'] ?>" class="form-control" id="Address" name="Address">
</td>
    </tr>
  <tr>
    <td>
    <input type="text" value="<?php echo $fetched_row['City'] ?>" class="form-control" id="City" name="City">
</td>
    </tr>
  <tr>
    <td>
    <input type="text" value="<?php echo $fetched_row['Postal'] ?>" class="form-control" id="Postal" name="Postal">
</td>
    </tr>
      <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>