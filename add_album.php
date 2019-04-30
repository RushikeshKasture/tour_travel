
<?php
include_once('common.php');

?>

 <div id="page-wrapper">
<div class="container">
<div class="page-content">
<h3 class="page-title">Add New Album</h3>

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
 <form method="POST" action="insert_album.php" onsubmit="return validate()" enctype="multipart/form-data">
						<div class="form-group row">
						<div class="col-md-3 control-label">
							<label>Album Name </label>
						</div>
						<div class="col-md-9">
							<input type="text" name="album_name" id="album_name" class="form-control">
							<p id="p1"></p>
						</div>	
                        </div>						
						  
				  <div class="form-group row">	
                  <div class="col-md-3 control-label">				  
                     <label>Short Description</label>
				 </div>
				 <div class="col-md-9">
				 <textarea class="form-control" id="short_desc" name="short" rows="5"></textarea>
				 <p id="p2"></p>
				 </div>
				 </div>
				 
				 <div class="form-group row">
				 <div class="col-md-3 control-label">
						  <label>Main Image</label>
						 </div>
						 <div class ="col-md-9">
                          <input type="file" id="main_image" name="main_image">
						   <p id="p3"></p>
						  </div>
						 
				<div class="col-md-9 col-md-offset-3">		
			<button type="submit" class="btn btn btn-primary form-control1"> Submit </button>
			</div>
						
					   
				   </form>
				   </div> <!--container-->
				   </div> <!--col-md- -->
				   </div>
				   </div>
				   
				 </div>
				 </div>
				 <script>
				 function validate() {
					 
					 var flag = true;
					 
					 var album_name =  $('#album_name').val();
					 var short_desc =  $('#short_desc').val();
					 var image = $('#main_image').val();
					 
					var regexName = /^[a-zA-Z ]{2,30}$/ ;
					if (album_name == '' || (!album_name.match(regexName)) )
					{
					$('#pl').html("*Album name cannot be empty*");
					flag = false;
					}
					
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