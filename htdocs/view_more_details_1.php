<?php
include("includes/connection.php");

if(isset($_GET['view_id']))
{
 $sql_query="SELECT * FROM more_details_1 WHERE id=".$_GET['view_id'];
 $result_set=mysqli_query($con,$sql_query);
 $fetched_row=mysqli_fetch_array($result_set,MYSQLI_ASSOC);
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

 <table align="center">
   <tr>
   <th colspan="5">university: <?php echo $fetched_row['university'] ?></th>
</tr>
 <tr>
   <th colspan="5">Degree: <?php echo $fetched_row['Degree'] ?></th>
</tr>
 <tr>
   <th colspan="5">location: <?php echo $fetched_row['location'] ?></th>
</tr>
 <tr>
   <th colspan="5">Primary_Email: <?php echo $fetched_row['Primary_Email'] ?></th>
</tr>
 <tr>
   <th colspan="5">Secondary_Email: <?php echo $fetched_row['Secondary_Email'] ?></th>
</tr>
 <tr>
   <th colspan="5">website: <?php echo $fetched_row['website'] ?></th>
</tr>
 <tr>
   <th colspan="5">linkedin: <?php echo $fetched_row['linkedin'] ?></th>
</tr>
 <tr>
   <th colspan="5">Twitter: <?php echo $fetched_row['Twitter'] ?></th>
</tr>
 <tr>
   <th colspan="5">Address: <?php echo $fetched_row['Address'] ?></th>
</tr>
 <tr>
   <th colspan="5">City: <?php echo $fetched_row['City'] ?></th>
</tr>
 <tr>
   <th colspan="5">Postal: <?php echo $fetched_row['Postal'] ?></th>
</tr>
 </table>
</center>
</body>
</html>