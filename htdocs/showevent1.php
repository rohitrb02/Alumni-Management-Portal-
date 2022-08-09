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
                                <h2 class="text-theme-colored font-36">Events </h2>
                                <ol class="breadcrumb text-center mt-10 white">
                                    <li><a href="#">Home</a></li>

                                    <li class="active">Events </li>
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
                                <h3 class="text-uppercase mt-0">Events</h3>
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

                        <section>
                            <button class="btn btn-primary btn-block col-sm-4" type="button" id="myButton"><i class="fa fa-plus"></i> Post Event</button>
        
                        </section>
                    </div>
                    <br>

                    <div class="section-content">
                        <div class="row multi-row-clearfix">
                            <?php
                            // $sql_query = "SELECT * FROM events ORDER BY RAND() LIMIT 3000";
                            $sql_query = "SELECT * FROM `events` ORDER BY id DESC";

                            $result_set = mysqli_query($con, $sql_query);
                            // echo "<br><pre>";print_r($result_set);echo "</pre>";
                            $i = 1;


                            while ($row = mysqli_fetch_row($result_set)) {
                                // echo "<br><pre>";
                                // print_r($row);
                                // echo "</pre>";
                            ?>



                                <!-- echo "</tr>"; -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="schedule-box maxwidth500 bg-light mb-30">
                                        <div class="thumb">
                                            <img class="img-fullwidth" alt="" src="images/events/alumni-meet-2022-bbsr.jpg">
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
                                                <br>
                                                <li><i class=""> Banner:-</i> <a href="#"><?php echo $row[4]; ?></a></li>
                                                <br>
                                                <li><i class="">Verified:-</i> <a href="#"><?php echo $row[6]; ?></a></li>
                                                <br>
                                                <li><i class="">Verified By:-</i> <a href="#"><?php echo $row[7]; ?></a></li>
                                                <br>
                                                <li><i class=""></i> <a href="#"><?php echo $row[8]; ?></a></li>
                                                <br>
                                                <br>

                                            </ul>
                                            <strong> Notice:-</strong>
                                            <p align="justify"> <?php echo $row[10]; ?></p>

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
        location.href = "manage_event1.php";
    };
</script>

<!-- <script>
    // $('.card.gallery-list').click(function(){
    //     location.href = "index.php?page=view_gallery&id="+$(this).attr('data-id')
    // })
    $('#new_event').click(function() {
        uni_modal("New Topic", "manage_event1.php", 'mid-large')
    })
    $('.view_topic').click(function() {
        location.replace('index.php?page=view_forum&id=' + $(this).attr('data-id'))
    })
    $('.edit_forum').click(function() {
        uni_modal("Edit Topic", "manage_forum.php?id=" + $(this).attr('data-id'), 'mid-large')
    })
    $('.gallery-img img').click(function() {
        viewer_modal($(this).attr('src'))
    })
    $('.delete_forum').click(function() {
        _conf("Are you sure to delete this Topic?", "delete_forum", [$(this).attr('data-id')], 'mid-large')
    })

    function delete_forum($id) {
        start_load()
        $.ajax({
            url: 'admin/ajax.php?action=delete_forum',
            method: 'POST',
            data: {
                id: $id
            },
            success: function(resp) {
                if (resp == 1) {
                    alert_toast("Data successfully deleted", 'success')
                    setTimeout(function() {
                        location.reload()
                    }, 1500)

                }
            }
        })
    }
    $('#filter').keypress(function(e) {
        if (e.which == 13)
            $('#search').trigger('click')
    })
    $('#search').click(function() {
        var txt = $('#filter').val()
        start_load()
        if (txt == '') {
            $('.Forum-list').show()
            end_load()
            return false;
        }
        $('.Forum-list').each(function() {
            var content = "";
            $(this).find(".filter-txt").each(function() {
                content += ' ' + $(this).text()
            })
            if ((content.toLowerCase()).includes(txt.toLowerCase()) == true) {
                $(this).toggle(true)
            } else {
                $(this).toggle(false)
            }
        })
        end_load()
    })
</script> -->