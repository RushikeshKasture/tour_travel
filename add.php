
<?php
include_once('common.php');
require_once('connection.php');

$select = "SELECT * FROM category";
$query = mysqli_query($conn,$select);

?>



 <div id="page-wrapper">
<div class="container">
<div class="page-content">
<h3 class="page-title">Add New Tour</h3>
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
<div class="light bordered">
 <form method="POST" action="insert_add.php" onsubmit="return validate()" enctype="multipart/form-data">
						<div class="form-group row">
						<div class="col-md-3 control-label">
							<label>Tour Name </label>
						</div>
						<div class="col-md-9">
							<input type="text" name="tour_name" id="tour_name" class="form-control">
							<p id="p1"></p>
						</div>
						</div>
						
						<div class="form-group row">
						<div class="col-md-3 control-label">
							<label>Tour Cost </label>
							</div>
							<div class="col-md-9">
							<input type="text" name="tour_cost" id="tour_cost" class="form-control">
							<p id="p2"></p>
							</div>
						</div>
						
						<div class="form-group row">
						<div class="col-md-3 control-label">
							<label>Duration</label>
						</div>
						<div class="col-md-9">
							<input type="text" name="duration" id="duration"class="form-control">
							<p id="p3"></p>
							</div>
						</div>
						
						<div class="form-group row">
						<div class="col-md-3 control-label">
							<label>Locations</label>
							</div>
							<div class="col-md-9">
							<input type="text" name="location" id="location"class="form-control">
							<p id="p4"></p>
							</div>
						</div>
						
						<div class="form-group row">
						<div class="col-md-3 control-label">
						<label>Categories</label>
						</div>
						<div class="col-md-9">
						<select name="category" id="category" class="form-control">
						  	<?php while($res = mysqli_fetch_assoc($query)){ ?>
							<option value="<?php echo $res['id'];?>"><?php echo $res['category'];?></option>
							<?php } ?>
						  </select>
						  <p id="p5"></p>
						  </div>
						  </div>
						  
						  <div class="form-group row">
						  <div class="col-md-3 control-label">
						  <label>Upload Main Image</label>
						  </div>
						  <div class="col-md-9">
                          <input type="file" id="image" name="filetoupload">
						  <b style="color:red; font-weight: bold;"> ONE IMAGE ONLY |  Will Resized to 800 X 400 </b>
						  <p id="p6"></p>
						  </div>
						  </div>
						  
				  <div class="form-group row">	
                  <div class="col-md-3 control-label">				  
                 <label>Tour Description</label>
				 </div>
				 <div class="col-md-9">
				 <textarea class="form-control" name="desc" id="des" rows="3"></textarea>
				 <p id="p7"></p>
				 </div>
				 </div>
					
<div class="col-md-9 col-md-offset-3">					
			<button type="submit" id="submit" class="btn btn btn-primary form-control1"> Submit </button>
			</div>
						
					   
				   </form>
				   </div>
				   </div>
				   </div> <!--container-->
				   </div>
				 </div>
				 </div>
				 <script>
				 
function validate(){
	
var flag = true;

var tourname = $('#tour_name').val();
var tourcost = $('#tour_cost').val();
var duration = $('#duration').val();
var location = $('#location').val();
var category = $('#category').val();
var image = $('#image').val();
var desc = $('#des').val();

var regexName = /^[a-zA-Z ]{2,30}$/ ;
//var regexImage = /\.(jpe?g|png|gif|bmp)$/i


// Validating Name Field.
if (tourname == '' || (!tourname.match(regexName)) )
 {
	$('#p1').html("* For your tour name please use alphabets only *"); 
	flag = false;
}

// Validating Tour Cost

if (tourcost == '' )
{
	$('#p2').html("*Tour cost cannot be empty*");
	flag = false;
}

// Validating Tour Duration

if (duration == '' )
{
	$('#p3').html("*Tour Duration cannot be empty*");
	flag = false;
}

//validating location

if (location == '')
{
		$('#p4').html("*Tour Location cannot be empty*");
		flag = false;
}

//validating category

if (category == '')
{
	 $('#p5').html("*Tour category cannot be empty*");
	 flag = false;
}

//validating image

if (image == '' )
{
	$('#p6').html("*please select correct format of image*");
	flag = false;
}

// Validating desc

if (desc == '' )
{
	$('#p7').html("*Tour description cannot be empty*");
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