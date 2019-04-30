
<?php
include_once('common.php');


?>

 <div id="page-wrapper">
<div class="container">
<div class="page-content">
<h3 class="page-title">logo Setting</h3>
<hr>
<div class ="col-md-6">
<div class="light bordered">
 <form onsubmit="return validate()" method="POST" action="update_logo.php" enctype="multipart/form-data">
						  
						  <div class="form-group">
						  <label>Add Logo</label>
                          <input type="file" id="image" name="filetoupload"><br>
						  <p id="p1"></p>
						  <input type="" name="existing_img">
						  </div>
						  
				
					
						
			<button type="submit" class="btn btn btn-primary form-control1"> Upload new logo </button>
						
					   
				   </form>
				   </div>
				   </div>
				    
				   
				   <div class="col-md-6">
				   <div class="bordered light">
				   <img src="upload/<?php echo $setting_array['logo'] ?>" class="img-responsive">
				   </div>
				   </div>
				   </div>
				   </div><!--row-->
				   </div><!--container-->
				   
				  
	
				 </div> <!--wrapper-->
				 <script>
				 function validate() {
					 
		              
					 
				      $image = $('#image').val();
					  
				   if (image == '' )
				   {
					   $('#p1').html("*Image cannot be empty*")
					   return true;
				   }
				 
				 else{
					 return false;
				 }
				 }
				 
				 </script>
				 </body>
				 
				 </html>