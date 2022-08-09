<?php include 'admin/db_connect.php' ?>

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


<header class="masthead">
    <div class="container-fluid h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end mb-4 page-title">
                <h3 class="text-white">Add More Details</h3>
                <hr class="divider my-4" />

                <div class="col-md-12 mb-2 justify-content-center">
                </div>
            </div>

        </div>
    </div>
</header>

<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
   
    $email= $_POST['email'];
    $cgpa_10th = $_POST['10th_Cgpa'];
    $school_10th = $_POST['10th_school'];
    $year_10th = $_POST['10th_passYear'];

    $cgpa_12th = $_POST['12th_percentage'];
    $school_12th = $_POST['12th_school'];
    $year_12th = $_POST['12th_passYear'];

    $cgpa_Btech = $_POST['Btech_Cgpa'];
    $roll_no = $_POST['roll_no'];
    $year_Btech = $_POST['Btech_passYear'];

    $address = $_POST['permanent_add'];
    $mobile_no = $_POST['Mobile_no'];
    $whatsapp_no = $_POST['whatsapp_no'];

    $dob = $_POST['dob'];

    $company_ww = $_POST['company_ww'];
    $skills = $_POST['skills'];
    $experience = $_POST['experience'];


    // $severname="localhost";
    // $username="root";
    // $password="";
    // $database="alumni_db";

    // $conn = mysqli_connect($severname, $username, $password, $database);




    if (!$conn) {
        die("soryyyyyyyyyyyyyyyyyyy" . mysqli_connect_error());
    } else {
        echo "succcccesssssssssssssssss";
        $sql = "INSERT INTO `more_details` (`id`, `email`,`10th_percentage`, `10th_school`, `10th_year`, `12th_percentage`, `12th_school`, `12th_year`, `Btech_Cgpa`, `registration_no.`, `Btech_year`, `address`, `mobile_no.`, `whatsapp_no.`, `dob`, `company_ww`, `skills`, `Experience`) VALUES 
            (NULL,	'$email' ,'$cgpa_10th', '$school_10th', '$year_10th', '$cgpa_12th', '$school_12th', '$year_12th', '$cgpa_Btech', '$roll_no', '$year_Btech', '$address', '$mobile_no', '$whatsapp_no', '$dob', '$company_ww', '$skills', '$experience');";

        $result = mysqli_query($conn, $sql);
    }


    if ($result) {
        echo "Inserrrrteeeeeddd";
    } else {
        echo "Notttttttttt Ibserted";
        mysqli_error(($conn));
    }
}
?>





<div>

    <form action="" method="post">

        <div class="container mt-3 pt-2">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="container-fluid">
                            <div class="col-md-12">
                                <form action="" id="add_details">

                               
                                    <div class="col-md-4">
                                        <label for="" class="control-label">Email</label>
                                        <input type="text" class="form-control" name="email" required>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label for="" class="control-label">10th Percentage/Cgpa</label>
                                            <input type="text" class="form-control" name="10th_Cgpa" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="control-label">School Name</label>
                                            <input type="text" class="form-control" name="10th_school" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="control-label">Year Of Passing</label>
                                            <input type="text" class="form-control" name="10th_passYear">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label for="" class="control-label">12th Percentage</label>
                                            <input type="text" class="form-control" name="12th_percentage" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="control-label">School Name</label>
                                            <input type="text" class="form-control" name="12th_school" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="control-label">Year Of Passing</label>
                                            <input type="text" class="form-control" name="12th_passYear">
                                        </div>
                                    </div>


                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label for="" class="control-label">B.Tech Cgpa</label>
                                            <input type="text" class="form-control" name="Btech_Cgpa" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="control-label">Roll No.</label>
                                            <input type="text" class="form-control" name="roll_no" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="control-label">Year Of Passing</label>
                                            <input type="text" class="form-control" name="Btech_passYear" required>
                                        </div>

                                    </div>


                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label for="" class="control-label">Permanent Address</label>
                                            <input type="text" class="form-control" name="permanent_add" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="control-label">Mobile Number</label>
                                            <input type="text" class="form-control" name="Mobile_no" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="control-label">Whatsapp Number</label>
                                            <input type="text" class="form-control" name="whatsapp_no">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label for="" class="control-label">Date Of Birth</label>
                                            <input type="text" class="form-control" name="dob" required>
                                        </div>

                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label for="" class="control-label">Company Worked With</label>
                                            <input type="text" class="form-control" name="company_ww" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="control-label">Skills</label>
                                            <input type="text" class="form-control" name="skills" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="control-label">Experience</label>
                                            <input type="text" class="form-control" name="experience" required>
                                        </div>

                                    </div>


                                    <hr class="divider">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <button class="btn btn-primary">Add Details</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>