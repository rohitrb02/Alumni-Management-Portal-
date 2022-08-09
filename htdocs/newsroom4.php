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
                                <h2 class="text-theme-colored font-36">Newsroom</h2>
                                <ol class="breadcrumb text-center mt-10 white">
                                    <li><a href="#">Home</a></li>

                                    <li class="active">Newsroom</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

            </section>

            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <br>
                        <button class="btn btn-primary btn-block col-sm-4" type="button" id="myButton"><i class="fa fa-plus"></i> Post News</button>
                        
                        <h5 class="widget-title line-bottom">ALL THE NEWS AND UPDATES FROM NIST</h5>
                    </div>

                </div>
            </div>

            <div class="section-content">
                <div class="row multi-row-clearfix">
                    <?php
                    $sql_query = "SELECT * FROM `newsroom` Where status='1' ORDER BY id DESC";
                    $result_set = mysqli_query($con, $sql_query);
                    // echo "<br><pre>";print_r($result_set);echo "</pre>";
                    $i = 1;


                    while ($row = mysqli_fetch_row($result_set)) {
                        // echo "<br><pre>";
                        // print_r($row);
                        // echo "</pre>";
                    ?>


                        <div class="main-content">
                            <!-- Section: inner-header -->

                            <!-- Section: event calendar -->
                            <section>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12">
                                            <!-- <button class="btn btn-primary btn-block col-sm-4" type="button" id="myButton"><i class="fa fa-plus"></i> Post News</button>

                                            <h5 class="widget-title line-bottom">ALL THE NEWS AND UPDATES FROM NIST</h5> -->

                                            <div class="upcoming-events media maxwidth400 bg-light mb-20">
                                                <div class="row equal-height">
                                                    <div class="col-sm-2 pr-0 pr-sm-15">
                                                        <div class="thumb p-15 mt-20">
                                                            <img width="100" height="150" class="img-fullwidth" src="uploads/<?php echo $row[1]; ?>" alt="...">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 border-right pl-0 pl-sm-15">
                                                        <div class="event-details p-15 mt-20">
                                                            <h4 class="media-heading text-uppercase font-weight-500"><?php echo $row[2]; ?></h4>
                                                            <p align="justify"> <?php echo $row[3]; ?></p>
                                                            <a href="webinar_Career_Guidance_Asish_Kumar_Panigrahi_detail.php" class="btn btn-flat btn-dark btn-theme-colored btn-sm">Details <i class="fa fa-angle-double-right"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="event-count p-15 mt-15">
                                                            <ul class="event-date list-inline font-16 text-uppercase mt-10 mb-20">
                                                                <li class="p-15 mr-5 bg-lightest"><?php echo $row[4]; ?></li>

                                                            </ul>
                                                            <ul>
                                                                <li class="mb-10 text-theme-colored"><i class="fa fa-clock-o mr-5"></i> <?php echo $row[5]; ?></li>
                                                                <li class="text-theme-colored"><i class="fa fa-map-marker mr-5"></i> Virtual- <?php echo $row[2]; ?></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </section>
                        </div>
                    <?php
                        $i++;
                    }
                    ?>


                </div>
            </div>

            <!-- end main-content -->
            <!-- Footer -->
            <?php include("includes/footer.php"); ?>

</body>

</html>
<script type="text/javascript">
    document.getElementById("myButton").onclick = function() {
        location.href = "manage_newsroom1.php";
    };
</script>