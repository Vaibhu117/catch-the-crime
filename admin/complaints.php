

<?php
include 'db_connect.php';
?>
<div class="container-fluid">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<b>List of Reports of Complaints</b>
				<!-- <form action="" method="post" align="right" style="align-self: aria-label="";" >

								<input type="submit" name="blank" value="Add Blank">
								</br>
							</form> -->
			</div>
			<div class="card-body">
				<table class="table table-bordered table-hover" id="complaint-tbl">
			        <thead>
						
			          <tr>
			            <th width="15%">Date</th>
			            <th width="20%">Report</th>
			            <th width="20%">Incident Address</th>
						<th width="10%">type</th>
			            <th width="20%">Proof</th>
			            <th width="10%">Status</th>
			            <th width="10%">Action</th>
			          </tr>
			        </thead>
			        <tbody>
			          <?php
			          $status = array("","Pending","Received","Action Made");
			          $qry = $conn->query("SELECT * FROM complaints order by unix_timestamp(date_created) desc ");
					
					  $result1 = mysqli_fetch_assoc($qry);

			          while($row = $qry->fetch_array()):
			          ?>
			          <tr class="<?php echo $row['status'] == 1 ? 'border-alert' : '' ?>">
			            <td><?php echo date('M d, Y h:i A',strtotime($row['date_created'])) ?></td>
			            <td><?php echo $row['message'] ?></td>
			            <td><?php echo $row['address'] ?></td>
						<td><?php echo $row['type'] ?></td>
						<!-- <img src='../proof/gc1.jpg'height='200px' width='200px''> -->

						<?php 
						echo "<td> <img src='../". $row['proof']." 'height='150px' width='280px''> </td>";
						?>



						<!-- <td> <img src='"<?php //echo $row['proof']; ?>"'></td> -->
						

						<!-- <td><img src="<?php //echo $row['proof']; ?>"></td> -->
			            <td><?php echo $status[$row['status']] ?></td>
			            <td class="text-center">
			            	<button class="btn btn-primary btn-sm m-0 view_btn" type="button" data-id="<?php echo $row['id'] ?>">View</button>
					  </br><pre>   </pre>
					  
			            	

			            </td>
			          </tr>
			        <?php endwhile; ?>
			        </tbody>
			  </table>
			</div>
		</div>
	</div>
</div>
<style>
	
	.border-gradien-alert{
		border-image: linear-gradient(to right, red , yellow) !important;
	}
	.border-alert th, 
	.border-alert td {
	  animation: blink 200ms infinite alternate;
	}

	@keyframes blink {
	  from {
	    border-color: white;
	  }
	  to {
	    border-color: red;
		background: #ff00002b;
	  }
	}
</style>
<script>
	$('#complaint-tbl').dataTable();
	$('.view_btn').click(function(){
		uni_modal("View Details","manage_complaint.php?id="+$(this).attr('data-id'),"mid-large")
	})
</script>


<!-- <?php

$link = mysqli_connect("localhost","root","","crms_db");
if(!$link)
die(mysqli_connect_error());


if(isset($_POST['blank']))
{



  $query = "INSERT INTO `complaints` ( `message`, `address`,`type`, `proof`, `date_created`, `status`) VALUES ( 'blank', 'blank', 'blank', 'blank', current_timestamp(), '1')";




	mysqli_query($link, $query);
		if(mysqli_affected_rows($link) > 0){
			echo '<script>';
			echo'alert("Blank Added!!!");';
			
			echo '</script>';
		}
		else
		{
			echo mysqli_error($link);
		}

}



?> -->


