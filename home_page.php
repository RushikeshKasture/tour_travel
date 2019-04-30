
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
 <form onsubmit="validate()" action="update_home_page_settings.php" method="post">
						<div class="form-group row">
						<div class="col-md-3 control-label">
							<label>Heading </label>
							</div>
							
							<div class="col-md-9">
							<input type="text" value ="<?php echo $setting_array['heading']; ?>"  name="album_name" id="album_name" class="form-control">
							</div>
						</div>	   
						  
				  <div class="form-group row">	
                     <div class="col-md-3 control-label">				  
                 <label>Text</label>
				 </div>
				 <div class="col-md-9">
				 <textarea class="form-control"  name="short_text" rows="3">
				 <?php echo $setting_array['text'] ?>
				 </textarea>
				 </div>
				 </div>

				  <div class="form-group row">	
                     <div class="col-md-3 control-label">				  
                 <label>About Text</label>
				 </div>
				<div class="col-md-9">
							 <div class="adjoined-bottom">
							 <div class="grid-container">
						       <div class="grid-width-100">
							   
						       <textarea class="form-control"  rows="5" name="editor">
							   <?php echo $setting_array['editor'] ?>
							     <div id="editor">
								
							       </div>
							        </textarea>
									
						          </div>
					            </div>
					           </div>
			  </div>
	          </div>

				 
			<!--	 
			  <textarea name="editor1" id="editor1" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor.
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>-->
				
				<div class="col-md-9 col-md-offset-3">
                <button type="submit" class="btn btn btn-primary form-control1"> Submit </button>				
			
						
					   
				   </form>
				   </div> <!--col-md -->
				   <div>  <!--container-->
				   </div>
				 </div>
				 </div>
				 
<script>
$(document).ready(function () {
initSample();
});
</script>

				 </body>
				 </html>