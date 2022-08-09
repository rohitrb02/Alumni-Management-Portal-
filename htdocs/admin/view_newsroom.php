<?php include("connection.php"); ?>
<?php

if (isset($_GET['id'])) {
    $qry = $conn->query("SELECT * FROM newsroom where id=" . $_GET['id'])->fetch_array();
    foreach ($qry as $k => $v) {
        $$k = $v;
    }
}

?>



<div class="container-fluid">
    <div>
        <center>
            <div class="avatar">
                <img src="assets/uploads/<?php echo $banner ?>" class="" alt="">
            </div>
        </center>
    </div>
    <hr>
    <p>title: <b>
            <large><?php echo ucwords($title) ?></large>
        </b></p>

    <p>location: <b>
            <large><?php echo ucwords($location) ?></large>
        </b></p>

    <p>about: <b>
            <large><?php echo ucwords($about) ?></large>
        </b></p>

    <p>date: <b>
            <large><?php echo ucwords($date) ?></large>
        </b></p>
    <p>time: <b>
            <large><?php echo ucwords($time) ?></large>
        </b></p>
    <p>Account Status: <b><?php echo $status == 1 ? '<span class="badge badge-primary">ACCEPT</span>' : '<span class="badge badge-secondary">REJECT</span>' ?></b></p>


</div>

<div class="modal-footer display">
    <div class="row">
        <div class="col-lg-12">
            <button class="btn float-right btn-secondary" type="button" data-dismiss="modal">Close</button>
            <?php if ($status == 1) : ?>
                <button name="approve"class="btn float-right btn-primary update mr-2" data-status='0' type="button" data-dismiss="modal">REJECT</button>
            <?php else : ?>
                <button name="approve"class="btn float-right btn-primary update mr-2" onclick="myFunction()" name="btn-save" data-status='1' type="button" data-dismiss="modal">ACCEPT</button>
            <?php endif; ?>
        </div>
    </div>
</div>

<style>
    p {
        margin: unset;
    }

    #uni_modal .modal-footer {
        display: none;
    }

    #uni_modal .modal-footer.display {
        display: block;
    }
</style>

<!-- <form action="" method="POST">
												<input type="hidden" name="id" value="<?php echo $row['id'] ?>" />
												<input type="submit" name="approve" value="Approve" />
												<input type="submit" name="deny" value="Deny" />


												</form> -->