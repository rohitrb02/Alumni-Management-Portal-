<?php
include("includes/connection.php");

if(isset($_POST['btn-save']))
{
 // variables for input data
     $firstname = $_POST['firstname'];
      $middlename = $_POST['middlename'];
      $lastname = $_POST['lastname'];
      $gender = $_POST['gender'];
      $batch = $_POST['batch'];
      $course_id = $_POST['course_id'];
      $email = $_POST['email'];
      $connected_to = $_POST['connected_to'];
      $avatar =  $_FILES["avatar"]["name"];
 $file_name = $_FILES["avatar"]["name"];
$file_tmp = $_FILES["avatar"]["tmp_name"];
  if($file_name!=''){
        move_uploaded_file($file_tmp,"uploads/".$file_name);
  }
    // variables for input data
    $select="SELECT * from ";

 // sql query for inserting data into database
 
$sql_query="INSERT INTO signup1 (`firstname`,`middlename`,`lastname`,`gender`,`batch`,`course_id`,`email`,`connected_to`,`avatar`) VALUES('".$firstname."','".$middlename."','".$lastname."','".$gender."','".$batch."','".$course_id."','".$email."','".$connected_to."','".$avatar."')";
 // sql query for inserting data into database
 
 // sql query execution function
 if(mysqli_query($con,$sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('signup1 added Successfully ');
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
<title></title>
<link rel="stylesheet" href="style.css" type="text/css" />

<!-- Meta Tags -->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="description" content="NIST Alumni" />
  <meta name="keywords" content="NIST,Alumni,Alumni NIST,Engineering,Btech,Mtech" />
  <meta name="author" content="NIST IT Team" />

  <!-- Page Title -->
  <title>The Official Alumni Network of National Institute of Science & Technology</title>
  <?php include("includes/external.php"); ?>
</head>
<body>
<center>
<?php include("includes/header.php"); ?>
<section class="inner-header divider layer-overlay overlay-dark">
        <div class="container pt-30 pb-30">
          <!-- Section Content -->
          <div class="section-content text-center">
            <div class="row">
              <div class="col-md-6 col-md-offset-3 text-center">
                <h2 class="text-theme-colored font-36">Login/Register</h2>
                <ol class="breadcrumb text-center mt-10 white">
                  <li><a href="#">Home</a></li>

                  <li class="active">Login/Register</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>
      

<div id="header">
<div class="icon-box mb-0 p-0">
                  <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
                    <i class="pe-7s-users"></i>
                  </a>
                  <h4 class="text-gray pt-10 mt-0 mb-30">Join your alumni network!! Register Now.</h4>
                </div>
                <hr>
               

 <div id="content">

        
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post" enctype="multipart/form-data" >
    <table align="center">
 



      <tr>
    <td>
    <input type="text" class="form-control" id="firstname" name="firstname" required placeholder="Firstname">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="middlename" name="middlename" required placeholder="Middlename">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="lastname" name="lastname" required placeholder="Lastname">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="gender" name="gender" required placeholder="Gender">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="batch" name="batch" required placeholder="Batch">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="course_id" name="course_id" required placeholder="Course_id">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="email" name="email" required placeholder="Email">
    </td>
    </tr>
    <tr>
    <td>
    <input type="text" class="form-control" id="connected_to" name="connected_to" required placeholder="Connected_to">
    </td>
    </tr>
    <tr>
    <td>
    <input type="file" class="form-control" id="avatar" name="avatar" required placeholder="Avatar">
    </td>
    </tr>



    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
      <h4>Already have an account? Login here</h4>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>
<?php include("includes/footer.php"); ?>
