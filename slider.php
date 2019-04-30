
<?php
include_once('common.php');
require_once('connection.php');
$select1 = "SELECT * FROM slider";
$query1 = mysqli_query($conn,$select1);



?>

 <div id="page-wrapper">
<div class="container">
<div class="page-content">
<h3 class="page-title">Slider Setting</h3>
<div class="col-md-12">
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
 <div class="light1 bordered">
 
 <form method="POST" action="insert_slider.php" onsubmit="return validate()" enctype="multipart/form-data">
						  
						  <div class="form-group row">
							  <div class="col-md-3 control-label">
							  <label>Slider Image</label>
							  </div>
							  <div class="col-md-9">
							  <input type="file" id="image" name="filetoupload"><br>
							  <p id="p1"></p>
							  </div>
						  </div>
						  
				  <div class="form-group row">
                    <div class="col-md-3 control-label">				  
                 <label>Bold Text</label>
				 </div>
				 <div class="col-md-9">
				 <textarea class="form-control" id="bold" name="desc1" rows="2"></textarea>
				 <p id="p2"></p>
				 </div>
				 </div>
				 
				   <div class="form-group row">	
                <div class="col-md-3 control-label">				   
                 <label>Small Text</label>
				 </div>
				 <div class="col-md-9">
				 <textarea class="form-control" id="small" name="desc2" rows="2"></textarea>
				 <p id="p3"></p>
				 </div>
				 </div>

					
				<div class="col-md-9 col-md-offset-3">		
			<button type="submit" class="btn btn btn-primary form-control1"> Submit </button>
			</div>
						
					   
				   </form>
				   </div> <!--col-md-4 -->
				   </div>
				   </div><!--container-->
				   </div>
				   
				  
				  <!--slider images --> 
				  
				  <div class="row gallery1">
				  
				  <?php while($res1 = mysqli_fetch_assoc($query1)) { ?>
				  <div class="col-md-4">
				  
  
    <img src="upload/<?php echo $res1['image'];?>" alt="Los Angeles" class="img-responsive" style="width:100%; height:30%">
  <a href = "delete_slider.php?id=<?php echo $res1['id'];?>"  class="btn btn-block btn-danger"><i class="fa fa-times"></i> DELETE</button></a>
  
  
  
  
</div>



	 <!-- row end	-->	  
				  <?php } ?>
	</div>				  
			</div>	   
				 </div>
				 
				 </div> <!--wrapper-->
				 <script>
				 function validate(){
	
var flag = true;

var image = $('#image').val();
var bold = $('#bold').val();
var small = $('#small').val();




// Validating Name Field.
if (image == '' )
 {
	$('#p1').html("* For your website name please use alphabets only *"); 
	flag = false;
}

// Validating Tour Cost

if (bold == '' )
{
	$('#p2').html("*Enter Bold Text*");
	flag = false;
}

// Validating Tour Duration

if (small == '' )  
{
	$('#p3').html("*Enter small text *");
	flag = false;
}





if(flag == false){
		return false;
	}else{
		return true;
	}



 }
				 </script>
				 </body>
				 </html>