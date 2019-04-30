<?php 

require_once('connection.php');
include_once('common.php');
$id = $_GET['id'];
$SELECT = "SELECT * FROM album_list_images WHERE tour_id=".$id;
$query = mysqli_query($conn,$SELECT);


?>


 <div id="page-wrapper">
<div class="container">
<div class="page-content">
<h3 class="page-title">View Album Images</h3>

<hr>
<div class="col-md-12">
<div class="light bordered">
<div class="message">
<?php 
if(isset($_GET['msg']) && isset($_GET['op'])){
			if($_GET['msg']==1){
echo "<span class='msgp1' 
		style='padding:5px 20%; 
		color:grey; 
		font-size:1.0em; 
		margin:0 5% 5px; 
		text-shadow: 1px 2px 3px #c8b4b4;
		letter-spacing: 1px;
		word-spacing: 1px;'>DATA has been ".$_GET['op']." !</span>";
	}
	else{
		echo "<span class='msgp0' 
		style='padding:5px 20%;
		color:grey;
		font-size:1.0em;
		margin:0 5% 5px;
		text-shadow: 1px 2px 3px #c8b4b4;
		letter-spacing: 1px;
		word-spacing: 1px;'>DATA has not ".$_GET['op']." .</span> ";

	}
		}

			
			?>
</div>
 <form method="POST" action="insert_album_list.php" onsubmit="return validate()" enctype="multipart/form-data">
						
						  
				  <div class="form-group row">	
                  <div class="col-md-3 control-label">				  
                     <label>Short Description</label>
				 </div>
				 <div class="col-md-9">
				 <textarea class="form-control" id="short_desc" name="u_name" rows="5"></textarea>
				 <p id="p2"></p>
				 </div>
				 </div>
				 
				 <div class="form-group row">
				 <div class="col-md-3 control-label">
						  <label>Main Image</label>
						  <br>
						  
						 </div>
						 <div class ="col-md-9">
                          <input type="file" id="main_image" name="filetoupload">
<b style="color:red; font-weight: bold;"> ONE IMAGE ONLY |  Will Resized to 800 X 400 </b>
						   <p id="p3"></p>
						  </div>
					<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">	 
				<div class="col-md-9 col-md-offset-3">		
			<button type="submit" class="btn btn btn-primary form-control1"> Submit </button>
			</div>
						
					   
				   </form>
				   </div> 
				   
				   <div class="row album">
				   <?php  
				   $i=1;
				   while($res = mysqli_fetch_assoc($query)){ ?>
				   
				   
					<div class="col-md-3">
					<div style="box-shadow:0px 0px 5px #ccc;margin-bottom:20px;">
					<img src="upload/<?php echo $res['image'];?>" class="img-responsive">
					<p class="text-center"> <?php echo $res['name'];?> </p>
					<a href = "delete_album_list.php?id=<?php echo $res['id'];?>&tour_id=<?php echo $id;?>"  class="btn btn-block btn-danger"><i class="fa fa-times"></i> DELETE</button></a>
					</div> 
					</div> 
						
				   <?php
					if($i%4 == 0){
						echo '<div class="clearfix"></div>';
					}
				   $i++; } ?>
				   
				   </div> <!--row-->
				   </div> <!--light bordered- -->
				   </div>
				   </div>
				   
				 </div>
				 </div>
				 <script>
				 function validate() {
					 
					 var flag = true;
					 
					 var short_desc =  $('#short_desc').val();
					 var image = $('#main_image').val();
					 
					
					
					if (short_desc == '')
					{
						$('#p2').html("*Description cannot be empty*");
						flag = false;
					}
					
					if (image == '')
					{
						$('#p3').html("*Please Upload image*");
						flag = false;
					}
					
if (flag == false)
	{
	return false;
}
else 
{
return true;	
}
					 
				 }
				 </script>
				 
				 </body>
			
				 </html>


