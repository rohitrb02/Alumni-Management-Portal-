<?php include("connection.php"); ?>

<div class="container-fluid">

	<div class="col-lg-12">
		<div class="row mb-4 mt-4">
			<div class="col-md-12">

			</div>
		</div>
		<div class="row">


			<!-- Table Panel -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<b>List of News</b>

					</div>
					<div class="card-body">
						<table class="table table-condensed table-bordered table-hover">

							<thead>
								<tr>
									<th class="text-center">#</th>

									<th class="">avatar</th>
									<th class="">firstname</th>
									<th class="">lastname</th>

									<th class="">gender</th>
									<th class="">batch</th>
									<th class="">email</th>
									<th class="">Status</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i = 1;
								$alumni = $conn->query("SELECT * from alumnus_bio WHERE status ='0'");
								while ($row = $alumni->fetch_assoc()) :

								?>
									<tr>
										<td class="text-center"><?php echo $i++ ?></td>
										<td class="text-center">
											<div class="avatar">
												<img src="../uploads/<?php echo $row['avatar'] ?>" class="" alt="">
											</div>
										</td>
										<td class="">
											<p> <b><?php echo ucwords($row['firstname']) ?></b></p>
										</td>
										<td class="">
											<p> <b><?php echo $row['lastname'] ?></b></p>
										</td>
										<td class="">
											<p> <b><?php echo $row['gender'] ?></b></p>
										</td>
										<td class="">
											<p> <b><?php echo $row['batch'] ?></b></p>
										</td>
										<td class="">
											<p> <b><?php echo $row['email'] ?></b></p>
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
	td {
		vertical-align: middle !important;
	}

	td p {
		margin: unset
	}

	img {
		max-width: 100px;
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
	$select = "UPDATE alumnus_bio SET status='1' where id='$id'";
	$result = mysqli_query($conn, $select);

	echo "User Approved";
}
if (isset($_POST['deny'])) {
	$id = $_POST['id'];
	$select = "DELETE from alumnus_bio where id='$id'";
	$select1 = "DELETE from users where alumnus_id='$id'";
	$result = mysqli_query($conn, $select);
	$result1 = mysqli_query($conn, $select1);


	echo "USER DELETED";
}

?>