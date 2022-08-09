<?php include("includes/connection.php");?>

    <div class="center">
        <h1>user register</h1>
        <table>
            <tr>
                <th> id</th>
                <th> firstname</th>
                <th> email</th>
                <th> ACtion</th>

            </tr>
            <?php 
            $query="SELECT * from registration WHERE status ='pending' order by id asc";
            $result=mysqli_query($conn,$query);
            while($row=mysqli_fetch_array($result)){
            ?>
            <td> <?php echo $row['firstname'];?></td>
            <td> <?php echo $row['lastname'];?></td>
            <td> <?php echo $row['email'];?></td>

            <form action="admin-approval.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
                <input type="submit" name="approve" value="Approve"/>
                <input type="submit" name="deny" value="Deny"/>


            </form>


        </table>
        <?php } 
        ?>

    </div>

    <?php 
    if(isset($_POST['approve'])){
        $id=$_POST['id'];
        $select="UPDATE registration SET status='approved' where id='$id'";
        $result=mysqli_query($conn,$select);

        echo "User Approved";
    }
    if(isset($_POST['deny'])){
        $id=$_POST['id'];
        $select="DELETE from registration where id='$id'";
        $result=mysqli_query($conn,$select);

        echo "USER DELETED";
    }
    
    ?>


<!-- --------------------------------------------------newsrom-------------------------------------------------- -->
<!-- <?php include("connection.php");?>

    <div class="center">
        <h1>NEWSROOM</h1>
        <table>
            <tr>
                <th> id</th>
                <th> about</th>
                <th> date</th>
				<th> status</th>
                <th> ACtion</th>

            </tr>
            <?php 
            $query="SELECT * from newsroom ";
            $result=mysqli_query($conn,$query);
            while($row=mysqli_fetch_array($result)){
            ?>
            <td> <?php echo $row['id'];?></td>
            <td> <?php echo $row['about'];?></td>
            <td> <?php echo $row['date'];?></td>
			<td> <?php echo $row['status'];?></td>


            <form action="" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
                <input type="submit" name="approve" value="Approve"/>
                <input type="submit" name="deny" value="Deny"/>


            </form>


        </table>
        <?php } 
        ?>

    </div>

    <?php 
    if(isset($_POST['approve'])){
        $id=$_POST['id'];
        $select="UPDATE newsroom SET status='1' where id='$id'";
        $result=mysqli_query($conn,$select);

        echo "User Approved";
    }
    if(isset($_POST['deny'])){
        $id=$_POST['id'];
        $select="DELETE from newsroom where id='$id'";
        $result=mysqli_query($conn,$select);

        echo "USER DELETED";
    }
    
    ?> -->


