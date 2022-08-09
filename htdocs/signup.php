<?php
session_start();
include("includes/connection.php");

// -----------------------Registration-start------------------------

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
      // $date_created = $_POST['date_created'];
      $password = md5($_POST['password']);
     // variables for input data
     $select="SELECT * from alumnus_bio where email='$email'";
     $result=mysqli_query($conn,$select);

     if(mysqli_num_rows($result) > 0){
      ?>
      <script type="text/javascript">
      alert('Email Already Taken!');
      window.location.href='signup.php';
      </script>
      <?php
     }else{
      $register="INSERT INTO alumnus_bio (`firstname`,`middlename`,`lastname`,`gender`,`batch`,`course_id`,`email`,`connected_to`,`avatar`,`date_created`,`password`) VALUES('".$firstname."','".$middlename."','".$lastname."','".$gender."','".$batch."','".$course_id."','".$email."','".$connected_to."','".$avatar."',now(),'".$password."')";
      mysqli_query($conn,$register)
      ?>
      
      <script type="text/javascript">
      alert('Your account is now pending for approval! ');
      window.location.href='signup.php';
      </script>
      <?php
     }

 // sql query for inserting data into database
 
// $sql_query="INSERT INTO alumnus_bio (`firstname`,`middlename`,`lastname`,`gender`,`batch`,`course_id`,`email`,`connected_to`,`avatar`,`date_created`,`password`) VALUES('".$firstname."','".$middlename."','".$lastname."','".$gender."','".$batch."','".$course_id."','".$email."','".$connected_to."','".$avatar."',now(),'".$password."')";
 // sql query for inserting data into database
 

}










// -----------------------Registration-end------------------------





?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

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
  <div id="wrapper" class="clearfix">
    <!-- Header -->
    <?php include("includes/header.php"); ?>

    <!-- Start main-content -->
    <div class="main-content">
      <!-- Section: inner-header -->
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

      <section>
        <div class="container">
          <div class="row">
        


            <!-- -------------------------------REGISTRATION-start------------------------------------ -->


            <div class="col-md-7 col-md-offset-1">
              <form action="signup.php" id="create_account" enctype="multipart/form-data" method="POST">
                <div class="icon-box mb-0 p-0">
                  <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
                    <i class="pe-7s-users"></i>
                  </a>
                  <h4 class="text-gray pt-10 mt-0 mb-30">Join your alumni network!! Register Now.</h4>
                </div>
                <hr>
                <p>Create your profile by filling the below form.</p>
                <p class="text-gray">&nbsp;</p>
                <div class="row form-group">
                  <div class="col-md-4">
                    <label for="" class="control-label">First Name</label>
                    <input type="text" class="form-control" name="firstname" required>
                  </div>
                  <div class="col-md-4">
                    <label for="" class="control-label">Middle Name</label>
                    <input type="text" class="form-control" name="middlename">
                  </div>
                  <div class="col-md-4">

                    <label for="" class="control-label">Last Name</label>
                    <input type="text" class="form-control" name="lastname" required>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-md-4">
                    <label for="" class="control-label">Gender</label>
                    <select class="custom-select" name="gender" style="height: 45px; border: 1px solid #ccc; width:100%;" required>
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                  </div>
                  <div class="col-md-4">
                    <label for="" class="control-label">Batch</label>
                    <input type="input" class="form-control datepickerY" style="height: 45px; border: 1px solid #ccc;" name="batch" required>
                  </div>
                  <div class="col-md-4">
                    <label for="" class="control-label">Course Graduated</label>
                    <select class="custom-select select2" style="height: 45px; border: 1px solid #ccc; width:100%;" name="course_id" required>
                      <option></option>
                      <?php
                      $course = $conn->query("SELECT * FROM courses order by course asc");
                      while ($row = $course->fetch_assoc()) :
                      ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['course'] ?></option>
                      <?php endwhile; ?>
                    </select>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-md-12">
                    <label for="" class="control-label">Currently Connected To</label>
                    <textarea name="connected_to" id="" cols="30" rows="3" class="form-control"></textarea>
                  </div>
                  <div class="col-md-12">
                          <label for="lname">avatar</label>
                            <input type="file" id="lname" name="avatar">

                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label for="" class="control-label">Email</label>
                    <input type="email" class="form-control" name="email" required>
                  </div>
                  <div class="col-md-6">
                    <label for="" class="control-label">Password</label>
                    <input type="password" class="form-control" name="password" required>
                  </div>
                </div>
                <div id="msg">

                </div>
                <hr class="divider">
                <div class="row">
                  <div class="col-md-12 text-center">
                    <!--<button class="btn btn-primary">Create Account</button>-->

                    <button type="submit" onclick="myFunction()" name="btn-save" class="btn btn-dark btn-sm">Sign Up</button>
                  </div>
                </div>

                <div class="form-group pull-right mt-10" text-center>
                  <!-- <button type="submit" name="btn-Login" class="btn btn-dark btn-sm">Login</button> -->
                  <a href="login1.php">Already have an account</a>
                </div>
           
                <div class="clear text-center pt-10">
              </form>
              <!-- <p>Already a user? <a href="login.php"><b>Log In</b></a></p>-->
            </div>
            <!-- -------------------------------REGISTRATION------------------------------------ -->

          </div>
        </div>
      </section>
    </div>
    <!-- end main-content -->
    <!-- Footer -->
    <?php include("includes/footer.php"); ?>

  
</body>

</html>

