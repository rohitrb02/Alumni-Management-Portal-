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
                                <h2 class="text-theme-colored font-36">Webinar </h2>
                                <ol class="breadcrumb text-center mt-10 white">
                                    <li><a href="#">Home</a></li>

                                    <li class="active">Webinar </li>
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
                                <h3 class="text-uppercase mt-0">Webinar</h3>
                                <div class="title-icon">
                                    <i class="fa fas fa-users font-30"></i>
                                </div>

                            </div>
                        </div>


                    </div>
                    <section>
                            <button class="btn btn-primary btn-block col-sm-4" type="button" id="myButton"><i class="fa fa-plus"></i> Post Webinar</button>
        
                        </section>
                    <br>

                    <div class="section-content">
                        <div class="row multi-row-clearfix">
                            <?php
                            // $sql_query = "SELECT * FROM events ORDER BY RAND() LIMIT 3000";
                            $sql_query = "SELECT * FROM `webinar` Where status='1' ORDER BY id DESC";

                            $result_set = mysqli_query($con, $sql_query);
                            // echo "<br><pre>";print_r($result_set);echo "</pre>";
                            $i = 1;


                            while ($row = mysqli_fetch_array($result_set)) {
                                // echo "<br><pre>";
                                // print_r($row);
                                // echo "</pre>";
                            ?>



                                <!-- echo "</tr>"; -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="schedule-box maxwidth500 bg-light mb-30">
                                        <div class="thumb">

                                            <img height="300" width="300"class="img-fullwidth" alt="" src="uploads/<?php echo $row[4]; ?>">
                                            <div class="overlay">
                                                <a href="#"><i class="fa fa-calendar mr-5"></i></a>
                                            </div>
                                        </div>
                                        <div class="schedule-details clearfix p-15 pt-10" style="min-height: 316px;">
                                            <h5 class="font-16 title"><a href="#"><?php echo $row[1]; ?></a></h5>
                                            <ul class="list-inline font-11 mb-20">
                                                <!-- <li><i class="fa fa-calendar mr-5"></i> <?php echo (date("F d, Y h:i:s", $row[4])); ?></li> -->

                                                <li><i class="fa fa-map-marker mr-5"></i> <?php echo $row[5]; ?></li>
                                                <br>
                                                <li><i class="">Content:-</i> <a href="#"><?php echo $row[2]; ?></a></li>
                                                <br>
                                                <li><i class=""> Schedule:-</i> <a href="#"><?php echo $row[3]; ?></a></li>
                                                                                               
                                                <!-- <br>
                                                <li><i class="">Verified:-</i> <a href="#"><?php echo $row[6]; ?></a></li>
                                                <br>
                                                <li><i class="">Verified By:-</i> <a href="#"><?php echo $row[7]; ?></a></li> -->
                                                <br>
                                                <li><i class=""></i> <a href="#"><?php echo $row[8]; ?></a></li>
                                                <br>
                                                <li><i class="">URL:-</i> <a href="<?php echo $row[10]; ?>"><?php echo $row[10]; ?></a></li>
                                                <br>
                                                <br>

                                            </ul>
                                            <strong> Notice:-</strong>
                                            <p align="justify"> <?php echo $row[9]; ?></p>

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
<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "manage_webinar.php";
    };
</script>

