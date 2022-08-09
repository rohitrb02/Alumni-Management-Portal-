<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="NIST Alumni" />
<meta name="keywords" content="NIST,Alumni,Alumni NIST,Engineering,Btech,Mtech" />
<meta name="author" content="Abhisikta Mishra" />

<!-- Page Title -->
<title>The Official Alumni Network of National Institute of Science & Technology</title>
<?php 
session_start();

include("includes/external.php"); include("includes/connection.php"); ?>
</head>
<body>
<div id="wrapper" class="clearfix">
  <!-- Header -->
  <?php include("includes/header.php"); ?>
  <!-- Start main-content -->


<?php

    //  echo"<br>here in Post:-<br><table>"; foreach ($_POST as $key => $value) { echo "<tr><td>".$key."</td><td>".$value."</td></tr>"; } echo"</table>";
    //  echo"<br>here in Session:-<br><table>"; foreach ($_SESSION as $key => $value) { echo "<tr><td>".$key."</td><td>".$value."</td></tr>"; } echo"</table>";
$id = intval($_GET['id']);
$uid = intval($_GET['uid']);

 $sql_query="SELECT * FROM alumni  where id =$uid";
 //echo $sql_query;
 $result_set=mysqli_query($con,$sql_query);
 // echo "<br><pre>";print_r($result_set);echo "</pre>";
 $i=1;
 
 while($row=mysqli_fetch_row($result_set))
 {
     echo "<br><pre>";print_r($row);echo "</pre>";
     ?>

  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark">
      <div class="container pt-30 pb-30">
        <!-- Section Content -->
        <div class="section-content text-center">
          <div class="row"> 
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="text-theme-colored font-36">Member's Details</h2>
              <ol class="breadcrumb text-center mt-10 white">
                <li><a href="#">Home</a></li>
               
                <li class="active">Member's Details</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>

    <section>
      <div class="container">
        <div class="row">
        <div class="col-md-4">
              <div class="volunteer border bg-white-fa maxwidth400 p-30">
                <div class="thumb"><img alt="" src="images/members/profile-icon.png" class="img-fullwidth"></div>
                <div class="info">
                  <h4 class="name"><a href="#"><?php echo $row[5]; ?></a></h4>
                  <h6 class="occupation"><?php echo $row[18]; ?>  @  <?php echo $row[17]; ?></h6>
                  <?php
                  $row[9]=str_replace("Bachelor of Technology","B.Tech",$row[9]);
                  $row[10]=str_replace("Electronics & Communication Engineering","ECE",$row[10]);
                  $row[10]=str_replace("Electronics & Instrumentation Engineering","EIE",$row[10]);
                  $row[10]=str_replace("Information Technology","IT",$row[10]);
                  $row[10]=str_replace("Mechanical Engineering","ME",$row[10]);
                  $row[10]=str_replace("Civil Engineering","CE",$row[10]);
                  $row[10]=str_replace("Electrical & Electronics Engineering","EEE",$row[10]);
                  $row[10]=str_replace("Computer Science & Engineering","CSE",$row[10]);                  
                  $row[9]=str_replace("Master of Computer Applications","MCA",$row[9]);
                  $row[10]=str_replace("Master of Computer Applications","MCA",$row[10]);
                  ?>
                  <p> <?php echo $row[9].",".$row[11].",".$row[10];?></p>
                 
                  
                </div>
              </div>
            </div>
          <div class="col-md-8">
            <ul>
             
              <li>
                <h5>Professional Details
:</h5>
                <p>
               <?php if (isset($row[17])) { echo $row[18]." @".$row[17]; } ?>
                <br><!--August 2021 to Present</p>-->
              </li>
              <li>
                <h5>Education Details
:</h5>
                <p>Birla Institute of Technology & Science, Pilani<br>

MTech (2019 - 2021)</p>
              </li>
              <li>
                <h5>Personal Information
:</h5>
                <p>I am Rahul Panda, an alumnus of this esteemed institution, Batch 2014-18 Computer Science and Engineering. As a Data Engineer, I design Big Data solutions Architecture that helps businesses make data-driven decisions, take proactive measures, mitigate risk, optimize & improve customer experience, and many more. Presently, I am working as a Consultant - Strategy and Analytics for Deloitte US India.</p>
              </li>
              <li>
                <h5>End Date:</h5>
                <p>February 10, 2016</p>
              </li>
              <li>
                <h5>Website:</h5>
                <p>www.xyz.com</p>
              </li>
              <li>
                <h5>Share:</h5>
                <div class="styled-icons icon-sm icon-gray icon-circled">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-8">
            <img src="https://placehold.it/755x480" alt="">
          </div>
        </div>
        <div class="row mt-60">
          <div class="col-md-12">
            <h4 class="mt-0">Detail</h4>
            <blockquote><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi id perspiciatis facilis nulla possimus quasi, amet qui. Ea rerum officia, aspernatur nulla neque nesciunt alias repudiandae doloremque, dolor, quam nostrum laudantium earum illum odio quasi excepturi mollitia corporis quas ipsa modi nihil, ad ex tempore.</p>
          </blockquote> </div>
          <div class="col-md-6">
            
          </div>
        </div>
        
      </div>
    </section>
  </div>
  <!-- end main-content -->
   <?php  }
  ?> 

   <!-- Footer -->
  <?php include("includes/footer.php"); ?>

</body>
</html>