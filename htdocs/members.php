<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="description" content="NIST Alumni" />
  <meta name="keywords" content="NIST,Alumni,Alumni NIST,Engineering,Btech,Mtech" />
  <meta name="author" content="Abhisikta Mishra" />

  <!-- Page Title -->
  <title>The Official Alumni Network of National Institute of Science & Technology</title>
  <?php include("includes/external.php"); ?>
  <?php include("includes/connection.php"); ?>
</head>
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
              </div>
            </div>
          </div>
          <div class="section-content">
            <div class="row multi-row-clearfix">

              <?php
              // $sql_query = "SELECT * FROM events ORDER BY RAND() LIMIT 3000";
              $sql_query = "SELECT * FROM `alumnus_bio` where status='1' ORDER BY id DESC";

              $result_set = mysqli_query($con, $sql_query);
              // echo "<br><pre>";print_r($result_set);echo "</pre>";
              $i = 1;


              while ($row = mysqli_fetch_array($result_set)) {
                // echo "<br><pre>";
                // print_r($row);
                // echo "</pre>";

              ?>
                <div class="col-sm-6 col-md-3 mb-sm-60 text-left sm-text-center">
                  <div class="volunteer border bg-white-fa maxwidth400 p-30">
                    <div class="thumb"><img alt="" src="uploads/<?php echo $row[9]; ?>" class="img-fullwidth"></div>
                    <div class="info">
                      <h4 class="name"><a href="#"><?php echo $row[1]; ?> <?php echo $row[3]; ?></a></h4>
                      <h6 class="occupation"><?php echo $row[8]; ?></h6>

                      <p><strong>Batch:-</strong> <?php echo $row[5]; ?> </p>


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
