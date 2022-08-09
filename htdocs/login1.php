<?php
session_start();
include("includes/connection.php");




// -----------------------login-start------------------------
if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password =md5($_POST['password']);

  $select=mysqli_query($conn,"SELECT * FROM alumnus_bio where email='$email' AND password='$password';
  ");
  $row = mysqli_fetch_array($select);

  echo $row['email'];
  $status=$row['status'];


  $select2=mysqli_query($conn,"SELECT * FROM alumnus_bio where email='$email' AND password='$password'");
  $check_user=mysqli_num_rows($select2);
  

if($check_user==1){
  $_SESSION["status"]=$row['status'];
  $_SESSION["email"]=$row['email'];
  $_SESSION["password"]=$row['password'];

  if($status=='1'){
    ?>
    <script type="text/javascript">
    alert('Login Success!');
    window.location.href='Profile-Completion.php';
    </script>
    <?php
  }
  else if($status=='0'){
    ?>
    <script type="text/javascript">
    alert('Your account is still pending for approval!');
    window.location.href='login1.php';
    </script>
    <?php
  }
  else{
    ?>
    <script type="text/javascript">
    alert('Incorrect Email or Password');
    window.location.href='login1.php';
    </script>
    <?php
  }

}
  
}
// -----------------------login-end------------------------


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
                <h2 class="text-theme-colored font-36">Login</h2>
                <ol class="breadcrumb text-center mt-10 white">
                  <li><a href="#">Home</a></li>

                  <li class="active">Login</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section>
        <div class="container">
          <div class="row">
            <!-- -------------------------------LOGIN------------------------------------ -->
            <div class="col-md-4 mb-40">
              <h4 class="text-gray mt-0 pt-5"> Login</h4>
              <hr>
              <p>Login with your Email Address
              </p>
              <form action="login1.php" method="POST" form id="Login_account" enctype="multipart/form-data" name="login-form" class="clearfix">

                <div class="row">
                  <div class="form-group col-md-12">
                    <label for="email">Username/Email</label>
                    <input id="email" name="email" class="form-control" type="text" required>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-12">
                    <label for="password">Password</label>
                    <input id="password" name="password" class="form-control" type="password" required>
                  </div>
                </div>
                <div class="checkbox pull-left mt-15">

                </div>
                <hr class="divider">
                <div class="form-group pull-right mt-10" text-center>
                  <input type="submit" name="login" value="Login"/><br> <br>
                  <a href="signup.php">Register Here</a>
                </div>
                <div class="clear text-center pt-10" text-center>
                  <a class="text-theme-colored font-weight-600 font-12" href="#">Forgot Your Password?</a>
                </div>
                <div class="clear text-center pt-10">
                  <!--  <p>
<br>
					  connected to your alumni community and alma mater</p>
                <a class="btn btn-dark btn-lg btn-block no-border mt-15 mb-15" href="#" data-bg-color="#3b5998">Login with facebook</a>
                <a class="btn btn-dark btn-lg btn-block no-border" href="#" data-bg-color="#00acee">Login with twitter</a>
                 <a class="btn btn-dark btn-lg btn-block no-border" href="#" data-bg-color="#df4a32">Login with Google</a>-->

                </div>
              </form>
            </div>

            <!-- -------------------------------LOGIN-end------------------------------------ -->



          </div>
        </div>
      </section>
    </div>
    <!-- end main-content -->
    <!-- Footer -->
    <?php include("includes/footer.php"); ?>

  
</body>

</html>

