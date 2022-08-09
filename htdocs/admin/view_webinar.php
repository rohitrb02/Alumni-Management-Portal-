<?php include("connection.php");?>
<?php
if(isset($_GET['id'])){
	$qry = $conn->query("SELECT * FROM webinar where id=".$_GET['id'])->fetch_array();
	foreach($qry as $k =>$v){
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
	<p>title: <b><large><?php echo ucwords($title) ?></large></b></p>
	<p>content: <b><large><?php echo ucwords($content) ?></large></b></p>
	<p>location: <b><large><?php echo ucwords($location) ?></large></b></p>

	
    <p>notice: <b><large><?php echo ucwords($notice) ?></large></b></p>
<p>url: <b><large><?php echo ucwords($url) ?></large></b></p>
	<p>Account Status: <b><?php echo $status == 1 ? '<span class="badge badge-primary">Verified</span>' : '<span class="badge badge-secondary">Unverified</span>' ?></b></p>


</div>
<div class="modal-footer display">
	<div class="row">
		<div class="col-md-12">
			<button class="btn float-right btn-secondary" type="button" data-dismiss="modal">Close</button>
		</div>
	</div>
</div>
<div class="modal-footer display">
	<div class="row">
		<div class="col-lg-12">
			<button class="btn float-right btn-secondary" type="button" data-dismiss="modal">Close</button>
			<?php if($status == 1): ?>
                <button class="btn float-right btn-primary update mr-2" data-status = '0' type="button" data-dismiss="modal">REJECT</button>
			<?php else: ?>
				<button class="btn float-right btn-primary update mr-2" data-status = '1' type="button" data-dismiss="modal">ACCEPT</button>
			<?php endif; ?>
		</div>
	</div>
</div>
<style>
	p{
		margin:unset;
	}
	#uni_modal .modal-footer{
		display: none;
	}
	#uni_modal .modal-footer.display {
		display: block;
	}
</style>
<script>
	$('.text-jqte').jqte();
	$('#manage-career').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'admin/ajax.php?action=save_career',
			method:'POST',
			data:$(this).serialize(),
			success:function(resp){
				if(resp == 1){
					alert_toast("Data successfully saved.",'success')
					setTimeout(function(){
						location.reload()
					},1000)
				}
			}
		})
	})
</script>