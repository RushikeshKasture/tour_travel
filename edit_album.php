
<?php
include_once('common.php');
require_once('connection.php');

$id = $_GET['id'];
$select = "SELECT * FROM album_list WHERE id=".$id;

$query = mysqli_query($conn,$select);
 ($response = mysqli_fetch_assoc($query));

?>

 <div id="page-wrapper">
<div class="container">
<div class="col-md-6 col-md-offset-3">
<h3 class="page-title">Add New Album</h3>
 <form method="POST" action="update_album.php" onsubmit="validate()" enctype="multipart/form-data">
 
	<div class="form-group">
	<label>Album Name </label><br>
<input type="text" value="<?php echo $response['tour_album'];?>" name="album_name" id="album_name" class="form-control"> </div>	  
	
<div class="form-group">		  
<label>Short Description</label>
<textarea class="form-control" name="short" rows="5"><?php echo $response['short_desc'];?></textarea>
</div>
	
<div class="form-group">
<label>Main Image</label>
 <input type="file"  name="main_image"><br>
 <input type="hidden" name="existing_img" value="<?php echo $response['image'];?>">
</div>
			
	<input type="hidden" name="id" value="<?php echo $response['id'];?>">			
			<button type="submit" class="btn btn btn-primary form-control"> Submit </button>
			
						
					   
				   </form>
				   </div> <!--container-->
				   </div> <!--col-md- -->
				   
				 </div>
				 </div>
				 
				 </body>
				 </html>
