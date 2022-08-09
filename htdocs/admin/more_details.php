<?php 

?>

<div class="container-fluid">
	
	<div class="row">
		<div class="card col-lg-12">
			<div class="card-body">
				<table class="table-striped table-bordered col-md-12">
			<thead>
				<tr>
					<th class="text-center">#</th>
					<th class="text-center">Student Name</th>

					
					<th class="text-center">10th Percentage/Cgpa</th>
					<th class="text-center">10th School Name</th>
					<th class="text-center">10th Year Of Passing</th>
                  
			
					<th class="text-center">12th Percentage/Cgpa</th>
					<th class="text-center">12th School Name</th>
					<th class="text-center">12th Year Of Passing</th>
                  
					<th class="text-center">B.Tech Cgpa</th>
					<th class="text-center">Roll No.</th>
					<th class="text-center">Year Of Passing</th>

					<th class="text-center">Permanent Address</th>
					<th class="text-center">Mobile Number</th>
					<th class="text-center">Whatsapp Number</th>

					<th class="text-center">Date Of Birth</th>

					<th class="text-center">Company Worked With</th>
                    <th class="text-center">Skills</th>
					<th class="text-center">Experience</th>

                    <th class="text-center">Action</th>


				</tr>
			</thead>
			<tbody>
				<?php
 					include 'db_connect.php';
 					
 					// $users = $conn->query("SELECT * FROM more_details ");
					 $users = $conn->query("SELECT md.*,ab.firstname,ab.lastname FROM more_details md, alumnus_bio ab where ab.email=md.email");

					
 					$i = 1;
 					while($row= $users->fetch_assoc()):
				 ?>
				 <tr>
				 	<td class="text-center">
				 		<?php echo $i++ ?> 
				 	</td>
				 	<td>
				 		<?php echo ucwords($row['firstname']) ?>
						<?php echo ucwords($row['lastname']) ?>

				 	</td>
				
				 	
				 	<td>
				 		<?php echo $row['10th_percentage'] ?>
				 	</td>
				 	<td>
				 		<?php echo $row['10th_school'] ?>
				 	</td>
                     <td>
				 		<?php echo ucwords($row['10th_year']) ?>
				 	</td>
				 	
				 	<td>
				 		<?php echo $row['12th_percentage'] ?>
				 	</td>
				 	<td>
				 		<?php echo $row['12th_school'] ?>
				 	</td>
                     <td>
				 		<?php echo ucwords($row['12th_year']) ?>
				 	</td>
				 	
				 	<td>
				 		<?php echo $row['Btech_Cgpa'] ?>
				 	</td>
                     <td>
				 		<?php echo $row['registration_no.'] ?>
				 	</td>
				 	<td>
				 		<?php echo $row['Btech_year'] ?>
				 	</td>
                     <td>
				 		<?php echo ucwords($row['address']) ?>
				 	</td>
				 	
				 	<td>
				 		<?php echo $row['mobile_no.'] ?>
				 	</td>
				 	<td>
				 		<?php echo $row['whatsapp_no.'] ?>
				 	</td>
                     <td>
				 		<?php echo ucwords($row['dob']) ?>
				 	</td>
				 	
				 	<td>
				 		<?php echo $row['company_ww'] ?>
				 	</td>
				 	<td>
				 		<?php echo $row['skills'] ?>
				 	</td>

                     <td>
				 		<?php echo $row['Experience'] ?>
				 	</td>
				 	<td>
				 		<center>
								<div class="btn-group">
								  <button type="button" class="btn btn-primary">Action</button>
								  <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								    <span class="sr-only">Toggle Dropdown</span>
								  </button>
								  <div class="dropdown-menu">
								    <a class="dropdown-item edit_user" href="javascript:void(0)" data-id = '<?php echo $row['id'] ?>'>Edit</a>
								    <div class="dropdown-divider"></div>
								    <a class="dropdown-item delete_user" href="javascript:void(0)" data-id = '<?php echo $row['id'] ?>'>Delete</a>
								  </div>
								</div>
								</center>
				 	</td>
				 </tr>
				<?php endwhile; ?>
			</tbody>
		</table>
			</div>
		</div>
	</div>

</div>

<script>
	$(document).ready(function(){
		$('table').dataTable()
	})
	$('#new_user').click(function(){
		uni_modal("New User","manage_user.php",'mid-large')
	})
	
	$('.edit_user').click(function(){
		uni_modal("Edit User","manage_user.php?id="+$(this).attr('data-id'),'mid-large')
		
	})
	$('.delete_user').click(function(){
		_conf("Are you sure to delete this user?","delete_user",[$(this).attr('data-id')],'mid-large')
	})

	function delete_user($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_user',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>
