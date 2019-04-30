<?php
include_once('common.php');
$select3 = "SELECT * FROM settings";
$query_3 = mysqli_query($conn,$select3);

$setting_array = array(); 

while($rs = mysqli_fetch_assoc($query_3)){
	$setting_array[$rs['key']] = $rs['value'];
}
//print_r($setting_array);
$partners_all_logo = $setting_array['partnerslogo'];
$partner_array = explode(',',$partners_all_logo);
//print_r($partner_array);
?>

 <div id="page-wrapper">
<div class="container">
<div class="page-content">
<h3 class="page-title">Add Partners Tour</h3>
<div class="col-md-12">
<div class="light bordered">

 <form method="POST" action="update_partners.php" enctype="multipart/form-data" onsubmit="validate()">  
						  <div class="form-group row">
						  <div class="col-md-3 control-label">
						  <label>Partners Logo</label>
						  </div>
						  <div class="col-md-9">
                          <input type="file" name="multiple_img[]" multiple><br>
						  <b style="color:red; font-weight: bold;"> MULTIPLE IMAGE CAN BE Uploaded <br> Will Resized to 800 X 400 </b> <br>
						  <input type="hidden" name="existing_img" multiple value="">
						  <input type="submit" class="form-control2" value="submit">
						  </div>
						  </div>
						  </form>
						  <?php foreach($partner_array as $single_logo){ ?>
						  <img src="upload/<?php echo $single_logo;?>">
						  <?php } ?>
						  </div>
						  </div>
						  </div>
						  </div>
			
						  
						  