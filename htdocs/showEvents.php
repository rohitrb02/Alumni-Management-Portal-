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
  <?php
  session_start();
  include("includes/external.php"); ?><?php include("includes/connection.php"); ?>
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
                <h2 class="text-theme-colored font-36">Members </h2>
                <ol class="breadcrumb text-center mt-10 white">
                  <li><a href="#">Home</a></li>

                  <li class="active">Members </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Divider: Contact -->
      <section class="divider parallax layer-overlay overlay-deep" data-stellar-background-ratio="0.2" data-bg-img="images/members/member-bg.jpg">
        <div class="container pb-80">
          <div class="section-title text-center">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h3 class="text-uppercase mt-0">Members</h3>
                <div class="title-icon">
                  <i class="fa fas fa-users font-30"></i>
                </div>
                <p>
                <h6 class="name"> Find your friends, batchmates and explore alumni of your interest!</h6>
                </p>
                <p>
                <h4 class="name"> <a href="signup.php">Register / Login</a><span class="h6"> to browse members by Year, Name, Company, Profession, Industry or Location</span></h4>
                </p>
              </div>
            </div>
          </div>
          <div class="section-content">
            <div class="row multi-row-clearfix">
              <?php
              $sql_query = "SELECT * FROM forum_comments ORDER BY RAND() LIMIT 3000";
              $result_set = mysqli_query($con, $sql_query);
              // echo "<br><pre>";print_r($result_set);echo "</pre>";
              $i = 1;


              while ($row = mysqli_fetch_row($result_set)) {
                echo "<br><pre>";
                print_r($row);
                echo "</pre>";
              ?>



                echo "</tr>";
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="schedule-box maxwidth500 bg-light mb-30">
                    <div class="thumb">
                      <img class="img-fullwidth" alt="" src="images/events/alumni-meet-2022-bbsr.jpg">
                      <div class="overlay">
                        <a href="#"><i class="fa fa-calendar mr-5"></i></a>
                      </div>
                    </div>
                    <div class="schedule-details clearfix p-15 pt-10" style="min-height: 316px;">
                      <h5 class="font-16 title"><a href="#"><?php echo $row[2]; ?></a></h5>
                      <ul class="list-inline font-11 mb-20">
                        <li><i class="fa fa-calendar mr-5"></i> <?php echo (date("F d, Y h:i:s", $row[4])); ?></li>
                        <li><i class="fa fa-map-marker mr-5"></i> Sandy Tower, Bhubaneswar</li>
                      </ul>
                      <p align="justify">The Alumni Get Together- NISTians 2003 to 2007 B.Tech
                        have a get together at Hotel 7 Saat, Bhubaneswar</p>

                    </div>
                  </div>
                </div>
              <?php
                $i++;
              }
              ?>


            </div>
          </div>
      </section>

    </div>
    <!-- end main-content -->


    <!-- Footer -->
    <?php include("includes/footer.php"); ?>

</body>

</html>