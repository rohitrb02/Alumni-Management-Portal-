<?php include("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head><?php 


// foreach ($_POST as $key => $value) {
//     echo "<tr>";
//     echo "<td>";
//     echo $key;
//     echo "</td>";
//     echo "<td>";
//     echo $value;
//     echo "</td>";
//     echo "</tr>";
// }


?>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="NIST Alumni" />
    <meta name="keywords" content="NIST,Alumni,Alumni NIST,Engineering,Btech,Mtech" />
    <meta name="author" content="Swatikanta Mishra" />

    <!-- Page Title -->
    <title>The Official Alumni Network of National Institute of Science & Technology</title>
    <?php include("includes/external.php"); ?>
</head>

<body>
    <div id="wrapper" class="clearfix">
        <!-- DATABASE -->
        <?php include("includes/connection.php"); ?>

        <!-- Header -->

        <!-- Start main-content -->

        <style>
            .masthead {
                min-height: 23vh !important;
                height: 23vh !important;
            }

            .masthead:before {
                min-height: 23vh !important;
                height: 23vh !important;
            }

            img#cimg {
                max-height: 10vh;
                max-width: 6vw;
            }
        </style>

        <?php


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $banner = $_POST['banner'];
            $title = $_POST['title'];
            $about = $_POST['about'];
            $date = $_POST['date'];
            $time = $_POST['time'];
            $location = $_POST['location'];


            if (!$conn) {
                die("Sorry" . mysqli_connect_error());
            } else {
                echo "Successs";
                // $sql = "INSERT INTO `more_details` (`id`, `email`,`10th_percentage`, `10th_school`, `10th_year`, `12th_percentage`, `12th_school`, `12th_year`, `Btech_Cgpa`, `registration_no.`, `Btech_year`, `address`, `mobile_no.`, `whatsapp_no.`, `dob`, `company_ww`, `skills`, `Experience`) VALUES 
                //     (NULL,	'$email' ,'$cgpa_10th', '$school_10th', '$year_10th', '$cgpa_12th', '$school_12th', '$year_12th', '$cgpa_Btech', '$roll_no', '$year_Btech', '$address', '$mobile_no', '$whatsapp_no', '$dob', '$company_ww', '$skills', '$experience');";

                $sql = $sql_query="INSERT INTO newsroom (`banner`,`title`,`about`,`date`,`time`,`location`) VALUES('".$banner."','".$title."','".$about."','".$date."','".$time."','".$location."')";

                // echo $sql;
                $result = mysqli_query($conn, $sql);
            }


            if ($result) {
                echo "Inserted";
            } else {
                echo "NOt Inserted";
                mysqli_error(($conn));
            }
        }
        ?>











        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            h3 {
                justify-content: center;
                position: relative;
            }

            body {
                font-family: Arial, Helvetica, sans-serif;
            }

            * {
                box-sizing: border-box;
            }

            input[type=text],
            select,
            textarea {
                width: 100%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                margin-top: 6px;
                margin-bottom: 16px;
                resize: vertical;
            }

            input[type=submit] {
                background-color: #04AA6D;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            input[type=submit]:hover {
                background-color: #45a049;
            }

            .container {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
            }
        </style>




        <h3 style="text-align:center;">Post News</h3>
        <div>

            <form action="" method="post">


                <div class="container">
                    <form action="/action_page.php">
                        <label for="fname">banner</label>
                        <input type="text" id="fname" name="banner">

                        <label for="lname">title</label>
                        <input type="text" id="lname" name="title">



                        <label for="lname">date</label>
                        <input type="text" id="lname" name="date">

                        <label for="fname">time</label>
                        <input type="text" id="fname" name="time">

                        <label for="lname">location	</label>
                        <input type="text" id="lname" name="location">
                       

                        </select>




                        <label for="notice">about</label>
                        <textarea id="notice" name="about" placeholder="Write something.." style="height:200px"></textarea>

                        <input type="submit" onclick="myFunction()" value="Submit" id="myButton">
                    </form>
            </form>
        </div>
        <br>
        <section>
            <?php include("includes/footer.php"); ?>

        </section>






        <script>
            function myFunction() {
                alert("News Posted Successfully");
            }
        </script>

