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

<?php include("includes/connection.php"); ?>
<?php include("includes/header.php");

if (isset($_POST['btn-save'])) {
    // variables for input data
    $banner =  $_FILES["banner"]["name"];
    $file_name = $_FILES["banner"]["name"];
    $file_tmp = $_FILES["banner"]["tmp_name"];
    if ($file_name != '') {
        move_uploaded_file($file_tmp, "uploads/" . $file_name);
    }
    $title = $_POST['title'];
    $about = $_POST['about'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $location = $_POST['location'];

    $sql_query = "INSERT INTO newsroom (`banner`,`title`,`about`,`date`,`time`,`location`) VALUES('" . $banner . "','" . $title . "','" . $about . "','" . $date . "','" . $time . "','" . $location . "')";

    if (mysqli_query($con, $sql_query)) {
?>
        <script type="text/javascript">
            alert('News added Successfully ');
            window.location.href = 'index.php';
        </script>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert('error occured while inserting your data');
        </script>
<?php
    }
    // sql query execution function
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">



<body>
    <center>

        <h2>POST NEWS</h2>
        <div id="body">
            <div id="content">
                <form method="post" enctype="multipart/form-data">
                    <div class="container">
                        <form action="/action_page.php">
                            <label for="fname">Banner</label>
                            <input type="file" id="fname" name="banner">

                            <label for="lname">Title</label>
                            <input type="text" id="lname" name="title">

                            <label for="fname">About</label>
                            <input type="text" id="fname" name="about">

                            <label for="lname">Date</label>
                            <input type="text" id="lname" name="date">


                            <label for="fname">Time</label>
                            <input type="text" id="fname" name="time">

                            <label for="lname">Location</label>
                            <input type="text" id="lname" name="location">



                            </select>





                            <input type="submit" onclick="myFunction()" value="Submit" name="btn-save">
                        </form>

                </form>
            </div>
        </div>

    </center>
</body>

</html>