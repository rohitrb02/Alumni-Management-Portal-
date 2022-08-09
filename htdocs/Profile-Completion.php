<?php 
session_start();
include("includes/connection.php");
// echo '<pre>';print_r($_SESSION);echo '</pre>';ini_set('display_errors', 1);ini_set('display_startup_errors', 1);error_reporting(E_ALL);


//session_destroy();
//session_start();
$sesuser=$_SESSION['Username'];



?>
<?php include("includes/header.php"); ?>


<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

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
// if ($_SERVER['REQUEST_METHOD'] == 'GET') {

// 	$sql_query="SELECT * FROM users WHERE username='$sesuser'";
//  $result_set=mysqli_query($conn,$sql_query);
//  $fetched_row=mysqli_fetch_array($result_set,MYSQLI_ASSOC);
//  echo '<pre>';print_r($fetched_row);echo '</pre>';
// }

// if ($_SERVER['REQUEST_METHOD'] == 'GET') {

// 	$sql_query="SELECT * FROM more_details WHERE Primary_Email='$sesuser'";
//  $result_set=mysqli_query($conn,$sql_query);
//  $fetched_row=mysqli_fetch_array($result_set,MYSQLI_ASSOC);
//  echo '<pre>';print_r($fetched_row);echo '</pre>';
// }

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {


			$university= $_POST['university'];
			$Degree= $_POST['Degree'];
			$location= $_POST['location'];

			$Primary_Email= $_POST['Primary_Email'];
			$Secondary_Email= $_POST['Secondary_Email'];
			$website= $_POST['website'];
			$linkedin= $_POST['linkedin'];
			$Twitter= $_POST['Twitter'];

			$Address= $_POST['Address'];
			$City= $_POST['City'];
			$Postal= $_POST['Postal'];




			if (!$conn) {
				die("sorry" . mysqli_connect_error());
			} else {
				echo "success";
			

				$sql = "INSERT INTO `more_details` ( `university`, `Degree`, `location`, `Primary_Email`, `Secondary_Email`, `website`, `linkedin`, `Twitter`, `Address`, `City`, `Postal`) VALUES ( '$university', '$Degree', '$location', '$Primary_Email', '$Secondary_Email', '$website', '$linkedin', '$Twitter', '$Address', '$City', '$Postal');";


				$result = mysqli_query($conn, $sql);
			}


			if ($result) {
				echo "Inserted";
			} else {
				echo "Not Inserted";
				mysqli_error(($conn));
			}
		}
		?>

		<body>

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




      
        <div>

            <form action="" method="post">


                <div class="container">
                    <form action="/action_page.php">
						<h2  style="color:DodgerBlue;">Educational Details.....</h3>
                        <label for="fname">	university</label>
                        <input type="text" id="fname" name="university" required>

                        <label for="lname">Degree</label>
                        <input type="text" id="lname" name="Degree" required>

                        <label for="fname">location</label>
                        <input type="text" id="fname" name="location">

						<h2  style="color:DodgerBlue;">Contact Information.....</h3>


                        <label for="lname">Primary_Email</label>
                        <input type="text" id="lname" name="Primary_Email" required>

                        <label for="fname">Secondary_Email</label>
                        <input type="text" id="fname" name="Secondary_Email">

                        <label for="lname">website</label>
                        <input type="text" id="lname" name="website">

						<label for="lname">linkedin</label>
                        <input type="text" id="lname" name="linkedin">

						<label for="lname">	Twitter</label>
                        <input type="text" id="lname" name="Twitter">

						<h2  style="color:DodgerBlue;">Address For Correspondence.....</h3>


						<label for="lname">Address</label>
                        <input type="text" id="lname" name="Address">

						<label for="lname">City</label>
                        <input type="text" id="lname" name="City">

						<label for="lname">	Postal</label>
                        <input type="text" id="lname" name="Postal">
                        

                        
                        
                          

                        </select>



                        <input type="submit" onclick="myFunction()" value="ADD DETAILS">
                    </form>
            </form>
        </div>
        <br>
        <section>
            <?php include("includes/footer.php"); ?>

        </section>


		</body>

</html>

        <script>
            function myFunction() {
                alert("Your Details is Added Successfully");
                location.href = "index.php";
            }
        </script>