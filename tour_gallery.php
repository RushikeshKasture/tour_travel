<?php
include_once('common_front.php');

$id = $_GET['id'];
$SELECT5 = "SELECT * FROM album_list_images WHERE tour_id=".$id;
$query5 = mysqli_query($conn,$SELECT5);
?>


<div class="kd-subheader">

	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="subheader-info">
				<h1>London Tour</h1>
				</div>
		    </div>
	    </div>
     </div>
</div>
		
		
		<div class="container">
			<div class="row">
			<?php
			
			while($res5 = mysqli_fetch_assoc($query5)) { ?>
				<div class="col-md-6 album">
							<div class="panel panel-primary">
							<div class="panel-heading"> <?php echo $res5['name'] ; ?></div>
							<div class="panel-body">
							<img src="upload/<?php echo $res5['image']; ?>" class="img-responsive" style="width:100%; height:60%"> </div>
							</div>
				</div>
			<?php } ?>
						
		</div> <!--row-->
	</div>
