
<?php
include_once('common.php');
require_once('connection.php');

$select3 = "SELECT * FROM settings";
$query_3 = mysqli_query($conn,$select3);

$setting_array = array(); 


while($rs = mysqli_fetch_assoc($query_3)){
	$setting_array[$rs['key']] = $rs['value'];
}


// print_r($setting_array);

 
/* Array ( [website] => Trevon, Travel and Tourism [address] => borivali west [mobile] => 7079058393 [email] => tanvinaik@gmail.com )  */

?>

<!--action="update_general_setting.php"-->
 <div id="page-wrapper">
<div class="container">
<div class="page-content">
<h3 class="page-title">General Setting</h3>
<hr>
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

 <form method="POST" action="update_general_setting.php"  onsubmit="return validate()">
						<div class="form-group row">
							<div class="col-md-3 col-xs-12 control-label">
								<label>Website Name </label>
							</div>
							<div class="col-md-9 col-xs-12">
								 <input type="text" value="<?php echo $setting_array['website']; ?>	" name="website_name" id="website_name"class="form-control input-lg ">
								 <p id="p1"></p>
								</div> <!--col-md-9-->
						</div>
						
						<div class="form-group row">
							<div class="col-md-3 control-label">
								<label>Address </label><br>
							</div>
							<div class="col-md-9">
								<input type="text" name="address"  value="<?php echo $setting_array['address']; ?>" id="address" class="form-control input-lg">
								<p id="p2"></p>
							</div>
						</div>
						
						<div class="form-group row">
							<div class="col-md-3 control-label">
							<label>Mobile</label><br>
							</div>
							<div class="col-md-9">
							<input type="text" name="number" value="<?php echo $setting_array['mobile']; ?>" id="number" class="form-control input-lg">
							<p id="p3"></p>
						    </div>
						</div>
						
						<div class="form-group row">
						    <div class="col-md-3 control-label">
								<label>Email</label><br>
							</div>
							<div class="col-md-9">
								<input type="text" value="<?php echo $setting_array['email'];?>" name="email" id="email" class="form-control input-lg">
								<p id="p4"></p>
						    </div>
						</div>
						
						

					
			
				<div class="col-md-9 col-md-offset-3">
				<button type="submit" class="btn btn btn-primary1 form-control1"> Submit </button>
			</div>
						
					   
				   </form>
				   </div>
				   </div><!--container-->
				   </div>
				   
				 </div>
				 </div>
				 </div>
				 
				 </body>
				 <script>
				 				 
function validate(){
	
var flag = true;

var website_name = $('#website_name').val();
var address = $('#address').val();
var number = $('#number').val();
var email = $('#email').val();


var regexName = /^[a-zA-Z ]{2,30}$/ ;
var regexNumber = /^\d+$/;
//var regexImage = /\.(jpe?g|png|gif|bmp)$/i


// Validating Name Field.
if (website_name == '' || (!website_name.match(regexName)) )
 {
	$('#p1').html("* For your website name please use alphabets only *"); 
	flag = false;
}

// Validating Tour Cost

if (address == '' )
{
	$('#p2').html("*Address cannot be empty*");
	flag = false;
}

// Validating Tour Duration

if (number == '' ) || (!number.match(regexNumber)) )
{
	$('#p3').html("*For your Mobile number please use numbers only *");
	flag = false;
}

//validating location

if (email == '')
{
		$('#p4').html("*Email cannot be empty*");
		flag = false;
}



if(flag == false){
		return false;
	}else{
		return true;
	}



 } 

				 </script>
				 </html>