
									<?php include("connection.php");?>

<div class="container-fluid">
	
	<div class="col-lg-12">
		<div class="row mb-4 mt-4">
			<div class="col-md-12">
				
			</div>
		</div>
		<div class="row">
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<b>List of Webinar</b>

					</div>
					<div class="card-body">
						<table class="table table-condensed table-bordered table-hover">

							<thead>
								<tr>
								<th class="text-center">#</th>

								<th class="">banner</th>
									<th class="">title</th>
									<th class="">content</th>

									<th class="">location</th>
									<th class="">notice</th>
									<th class="">url</th>
									<th class="">Status</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$i = 1;
								$alumni = $conn->query("SELECT * from webinar WHERE status ='0' ");
								while($row=$alumni->fetch_assoc()):
									
								?>
								<tr>
									<td class="text-center"><?php echo $i++ ?></td>
									<td class="text-center">
										<div class="avatar">
										 <img src="../uploads/<?php echo $row['banner'] ?>" class="" alt="">
										</div>
									</td>
									<td class="">
										 <p> <b><?php echo ucwords($row['title']) ?></b></p>
									</td>
									<td class="">
										 <p> <b><?php echo $row['content'] ?></b></p>
									</td>
									<td class="">
										 <p> <b><?php echo $row['location'] ?></b></p>
									</td>
									<td class="">
										 <p> <b><?php echo $row['notice'] ?></b></p>
									</td>
									<td class="">
										 <p> <b><?php echo $row['url'] ?></b></p>
									</td>
									<td class="text-center">
											<?php if ($row['status'] == 1) : ?>
												<span class="badge badge-primary">Approved</span>
											<?php else : ?>
												<span class="badge badge-secondary">Not Approved</span>
											<?php endif; ?>

										</td>
									<td class="text-center">
									<form action="" method="POST">
												<input type="hidden" name="id" value="<?php echo $row['id'] ?>" />
												<input type="submit" name="approve" value="Approve" />
												<input type="submit" name="deny" value="Deny" />


											</form>
									</td>
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>	

</div>
<style>
	
	td{
		vertical-align: middle !important;
	}
	td p{
		margin: unset
	}
	img{
		max-width:100px;
		max-height: 150px;
	}
	.avatar {
	    display: flex;
	    border-radius: 100%;
	    width: 100px;
	    height: 100px;
	    align-items: center;
	    justify-content: center;
	    border: 3px solid;
	    padding: 5px;
	}
	.avatar img {
	    max-width: calc(100%);
	    max-height: calc(100%);
	    border-radius: 100%;
	}
</style>
<?php
if (isset($_POST['approve'])) {
	$id = $_POST['id'];
	$select = "UPDATE webinar SET status='1' where id='$id'";
	$result = mysqli_query($conn, $select);

	echo "User Approved";
}
if (isset($_POST['deny'])) {
	$id = $_POST['id'];
	$select = "DELETE from webinar where id='$id'";
	$result = mysqli_query($conn, $select);

	echo "USER DELETED";
}

?>