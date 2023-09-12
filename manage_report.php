<?php 
session_start();
error_reporting(0);
 ?>
<div class="container-fluid">
	<form action="report.php" id="complaint-frm" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="">
		<div class="form-group">
			<label for="" class="control-label">Report Message</label>
			<textarea cols="30" rows="3" name="message" required="" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Incident Address</label>
			<textarea cols="30" rows="3" name="address" required="" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Incident Proof</label>
			<input type="file" name="proof" >
			<!-- <textarea cols="30" rows="3" name="address" required="" class="form-control"></textarea> -->
		</div>
		
		<input type="submit" value="Create" name="Create" class="button btn btn-primary btn-sm">
		<button class="button btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancel</button>

	</form>
</div>

<style>
	#uni_modal .modal-footer{
		display:none;
	}
	
</style>
<?php

$link = mysqli_connect("localhost","root","","crms_db");
if(!$link)
die(mysqli_connect_error());

	$filename = $_FILES["proof"]["name"];

	$tempname = $_FILES["proof"]["tmp_name"];

	$folder = "proof/".$filename;

	move_uploaded_file($tempname, $folder);

	// $query = "INSERT INTO `complaints`(`proof`) VALUES ('$folder')";


	mysqli_query($link, $query);

if(isset($_POST['Create']))
{


	$message = $_POST['message'];
	$address = $_POST['address'];
	


	$filename = $_FILES["proof"]["name"];

	$tempname = $_FILES["proof"]["tmp_name"];

	$folder = "proof/".$filename;

	move_uploaded_file($tempname, $folder);







	// INSERT INTO `complaints` ( `message`, `address`, `proof`, `date_created`, `status`) VALUES ( '$message', '$address', '$folder', current_timestamp(), '1')

	// $query = "INSERT INTO `complaints`(`proof`) VALUES ('$folder')";
	$query = "INSERT INTO `complaints` ( `message`, `address`, `proof`, `date_created`, `status`) VALUES ( '$message', '$address', '$folder', current_timestamp(), '1')";


	mysqli_query($link, $query);

	// $filename = $_FILES["proof"]["name"];

	// $tempname = $_FILES["proof"]["tmp_name"];

	// $folder = "proof/".$filename;

	// echo "<img src='$folder', height='100px' width='100px' >";

	// // echo $folder;

	// move_uploaded_file($tempname, $folder);

	// $query = "INSERT INTO `file`(`img_source`) VALUES ('$folder')";


	// mysqli_query($link, $query);
	// 	if(mysqli_affected_rows($link) > 0){
	// 		echo '<script>';
	// 		echo'alert("Added successfully ");';
	// 		echo 'window.location="http://localhost/";';
	// 		echo '</script>';
	// 	}
	// 	else
	// 	{
	// 		echo mysqli_error($link);
	// 	}

}



?>
<script>
	$('#complaint-frm').submit(function(e){
		e.preventDefault()
		start_load()
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'admin/ajax.php?action=complaint',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#complaint-frm button[type="submit"]').removeAttr('disabled').html('Create');

			},
			success:function(resp){
				if(resp == 1){
					location.reload();
					alert_toast("Data successfully saved.",'success')
						setTimeout(function(){
							location.reload()
						},1000)
				}else{
					end_load()
				}
			}
		})
	})
</script>