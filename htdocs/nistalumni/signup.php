<?php include("includes/connection.php"); 

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
//saving records with post
session_start();
session_destroy();
session_start();

if(isset($_POST['btn-Register']))
{
 // variables for input data
     $firstname = $_POST['firstname'];
      $middlename = $_POST['middlename'];
      $lastname = $_POST['lastname'];
      $gender = $_POST['gender'];
      $batch = $_POST['batch'];
      $course_id = $_POST['course_id'];
      $connected_to = $_POST['connected_to'];
      $email = $_POST['email'];
      $password = md5($_POST['password']);
      // $avatar = $_POST['avatar'];

      // $filename = $_FILES['avatar']['name'];


    //    echo"<br>here in 1st:-<br><table>"; foreach ($_POST as $key => $value) { echo "<tr><td>".$key."</td><td>".$value."</td></tr>"; } echo"</table>";
    $result = $conn->query("SELECT * FROM users where username = '$email' ");
    /* Get the number of rows in the result set */
    $row_cnt = $result->num_rows;
    if($row_cnt > 0){ ?>  <script type="text/javascript">  alert('This email already exists.');  </script>  <?php }
    else{

    //get next auto increment id value for   "alumnus_bio" table from  "INFORMATION_SCHEMA" based on "auto_increment"
    $sql_alum_nexid="SELECT `auto_increment` FROM INFORMATION_SCHEMA.TABLES WHERE table_name = 'alumnus_bio';";
    $sql_query="SELECT * FROM INFORMATION_SCHEMA.TABLES ";
    $result_set=mysqli_query($con,$sql_alum_nexid);
    $row=mysqli_fetch_row($result_set);
    $alumnid=$row[0];
    // $sql_alumnus_bio="INSERT INTO alumnus_bio (`firstname`,`middlename`,`lastname`,`gender`,`batch`,`course_id`,`connected_to`,`email`,`status`,`date_created`) VALUES('".$firstname."','".$middlename."','".$lastname."','".$gender."','".$batch."','".$course_id."','".$connected_to."','".$email."',0,now());";
    
    $sql_alumnus_bio="INSERT INTO alumnus_bio (`id`,`firstname`,`middlename`,`lastname`,`gender`,`batch`,`course_id`,`connected_to`,`email`,`status`,`date_created`) VALUES((SELECT MAX( alumnus_id )+1 from users),'".$firstname."','".$middlename."','".$lastname."','".$gender."','".$batch."','".$course_id."','".$connected_to."','".$email."',0,now());";
    // $sql_alumnus_bio= "INSERT INTO alumnus_bio (`id`,`firstname`,`middlename`,`lastname`,`gender`,`batch`,`course_id`,`connected_to`, `avatar`,`email`,`status`,`date_created`) VALUES((SELECT MAX( alumnus_id )+1 from users),'".$firstname."','".$middlename."','".$lastname."','".$gender."','".$batch."','".$course_id."','".$connected_to."','".$avatar."','".$email."',0,now());";

    echo $sql_alumnus_bio;

    // $sql_alumnus_bio= "INSERT INTO alumnus_bio (`id`,`firstname`,`middlename`,`lastname`,`gender`,`batch`,`course_id`,`connected_to`,`email`,`status`,`date_created`) VALUES( (SELECT MAX( alumnus_id ) + 1 from users),'Rohit','','Bharti','Male',' 2018','103','afsf','ankush113@gmail.com',0,now());";

    // $sql_users="INSERT INTO users (`id`,`name`, `username`, `password`, `type`, `alumnus_id`) VALUES ((SELECT MAX(id)+1 from alumnus_bio),'".$firstname."' ".$middlename." ".$password."','".$email."','".$password."',3";

    $sql_users="INSERT INTO `users` (`id`, `name`, `username`, `password`, `type`, `auto_generated_pass`, `alumnus_id`) VALUES ((SELECT MAX(id)+1 from alumnus_bio), '".$firstname."', '".$email."', '".$password."', '3', '', (SELECT MAX(id)+1 from alumnus_bio))";
    // mysqli_query($con,$sql_users);
        echo $sql_alumnus_bio;
        if(mysqli_query($con,$sql_alumnus_bio))
        {
            if(mysqli_query($con,$sql_users))
            {
                if(!empty($_FILES['img']))
                  {
                    $path = "admin/assets/uploads/";
                    $filename = strtotime(date('y-m-d H:i')).'_'. basename( $_FILES['img']['name']);
                    $path = $path . $filename;
                    if(move_uploaded_file($_FILES['img']['tmp_name'], $path)) {
                      echo "The file ".  basename( $_FILES['img']['name']). 
                      " has been uploaded";?>  <script type="text/javascript">  alert('User created ,Approval pending.');  </script>  <?php
                      
                            mysqli_query($con,"update alumnus_bio set avatar='".$filename."' where id =".$alumnid." ");
                      }
                      else{
                        echo "There was an error uploading the file, please try again!";
                    }                
                  }
                  else{ ?>  <script type="text/javascript">  alert('User created with out profile Picture,Approval pending.');  </script>  <?php  }
                    $_SESSION['Username'] = $email;
                    $_SESSION['Active'] = true;
                 //   header("location:/Profile-Completion.php");
                 ?>  <script type="text/javascript">  alert('You have been successfully registered!. Please wait for the admin approval. ');  </script>  <?php 
                    header("location:/index.php");
                    exit;
            }
            else{?>  <script type="text/javascript">  alert('Contents saved but ,Could not create user. Contact Administrator');  </script>  <?php }
        }
        else{?> <script type="text/javascript">  alert('Could not save details contents . Contact Administrator');  </script>  <?php }

    }
}
if(isset($_POST['btn-Login']))
{
    $email = $_POST['form_username_email'];
    $password = md5($_POST['form_password']);

    $result = $conn->query("SELECT * FROM users where username = '$email' and password= '$password';");
    /* Get the number of rows in the result set */
    $row_cnt = $result->num_rows;

    if($row_cnt > 0){ 

        $_SESSION['Username'] = $email;
        $_SESSION['Active'] = true;
        header("location:/Profile-Completion.php");
        exit;
    }
    else{ ?>  <script type="text/javascript">  alert('Invalid credential.');  </script>  <?php } 
}
   
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
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
          
         <div class="col-md-4 mb-40">
            <h4 class="text-gray mt-0 pt-5"> Login</h4>
            <hr>
            <p>Login with your Email Address
</p>
            <form action="signup.php"  method="POST"   form id="Login_account" enctype="multipart/form-data" name="login-form" class="clearfix">
            
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="form_username_email">Username/Email</label>
                  <input id="form_username_email" name="form_username_email" class="form-control" type="text" required>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="form_password">Password</label>
                  <input id="form_password" name="form_password" class="form-control" type="password" required>
                </div>
              </div>
              <div class="checkbox pull-left mt-15"><!--
                <label for="form_checkbox">
                  <input id="form_checkbox" name="form_checkbox" type="checkbox">
                  Remember me </label>-->
              </div>
                <hr class="divider">
              <div class="form-group pull-right mt-10" text-center>
                 <button type="submit"  name="btn-Login" class="btn btn-dark btn-sm">Login</button>
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
          <div class="col-md-7 col-md-offset-1">
            <form action="signup.php" id="create_account" enctype="multipart/form-data" method="POST">
            <div class="icon-box mb-0 p-0">
                <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
                  <i class="pe-7s-users"></i>
                </a>
                <h4 class="text-gray pt-10 mt-0 mb-30">Join your alumni network!!  Register Now.</h4>
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
                                                <input type="text" class="form-control" name="middlename" >
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
                                                <input type="input" class="form-control datepickerY"  style="height: 45px; border: 1px solid #ccc;" name="batch" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Course Graduated</label>
                                                <select class="custom-select select2"  style="height: 45px; border: 1px solid #ccc; width:100%;" name="course_id" required>
                                                    <option></option>
                                                    <?php 
                                                    $course = $conn->query("SELECT * FROM courses order by course asc");
                                                    while($row=$course->fetch_assoc()):
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
                                                <label for="" class="control-label">Image</label>
                                                <input type="file" class="form-control" name="img" onChange="displayImg(this,$(this))">
                                                <img src="" alt="" id="cimg">

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
                                                
                                            <button type="submit"  name="btn-Register" class="btn btn-dark btn-sm">Sign Up</button>
                                            </div>
                                        </div>
                                    </form>
             <!-- <p>Already a user? <a href="login.php"><b>Log In</b></a></p>-->
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
   <!-- Footer -->
  <?php include("includes/footer.php"); ?>
  
  
  
  
  <?php 
if(isset($_POST["save"]))
{
	//mysqli_query($conn,"insert into  registration values(NULL,'$_POST[form_name]','$_POST[form_email]','$_POST[form_choose_username]','$_POST[form_choose_password]','$_POST[form_re_enter_password]')");
    $passwd=$_POST[form_choose_password];
    $md5passwd=md5($_POST[form_choose_password]);
    $_SESSION["username"] =$_POST[form_email];
    $_SESSION["password"] =$_POST[passwd];
    
$sql_query="INSERT INTO users (`name`,`username`,`password`,`type`) VALUES('".$_POST[form_name]."','".$_POST[form_email]."','".$md5passwd."',3)";
	
   if(mysqli_query($conn,$sql_query))
 {
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
	<script type="text/javascript">
//window.location="Successfully-Registar.php";
</script>


<?php	
}


?>


<script>
   $('.datepickerY').datepicker({
        format: " yyyy", 
        viewMode: "years", 
        minViewMode: "years"
   })
   $('.select2').select2({
    placeholder:"Please Select Here",
    width:"100%"
   })
   function displayImg(input,_this) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#cimg').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$('#create_account').submit(function(e){
    e.preventDefault()
    start_load()
    $.ajax({
        url:'admin/ajax.php?action=signup',
        data: new FormData($(this)[0]),
        cache: false,
        contentType: false,
        processData: false,
        method: 'POST',
        type: 'POST',
        success:function(resp){
            if(resp == 1){
                location.replace('index.php')
            }else{
                $('#msg').html('<div class="alert alert-danger">email already exist.</div>')
                end_load()
            }
        }
    })
})
</script>
</body>
</html>