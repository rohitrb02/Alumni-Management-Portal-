<?php
include('db_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    // $username = $_POST['username'];
    $password = $_POST['password'];
    $type = $_POST['type'];


    if (!$conn) {
        die("soryyyyyyyyyyyyyyyyyyy" . mysqli_connect_error());
    } else {
        echo "succcccesssssssssssssssss";
        $sql = "INSERT INTO `add_user` (`id`, `name`, `password`, `type`, `auto_generated_pass`, `alumnus_id`) VALUES ('', '$name', ' $password', '$type', '', '')";

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
                                        <label for="" class="control-label">name</label>
                                        <input type="text" class="form-control" name="name" required>
                                    </div>
                                    <div class="row form-group">
                                        <!-- <div class="col-md-4">
                                            <label for="" class="control-label">username</label>
                                            <input type="text" class="form-control" name="username" required>
                                        </div> -->
                                        <div class="col-md-4">
                                            <label for="" class="control-label">password</label>
                                            <input type="text" class="form-control" name="password" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="control-label">type</label>
                                            <input type="text" class="form-control" name="type">
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