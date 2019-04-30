<?php 

include_once('common.php');
$select3 = "SELECT * FROM settings";
$query_3 = mysqli_query($conn,$select3);

$setting_array = array(); 

while($rs = mysqli_fetch_assoc($query_3)){
	$setting_array[$rs['key']] = $rs['value'];
}

?>

<div id="page-wrapper">

<div class="container">
<div class="page-content">
<h3  class="page-title">General Setting</h3>
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
<div class="social">
	<form method="POST" action="update_social.php">
	    <div class="row form-group">
        <div class="col-md-3 control-label">
		<label><i class="fa fa-facebook fa-2x"></i></label>
		</div>
		<div class="col-md-9">
		<input type="text" class="form-control" value="<?php  echo $setting_array['facebook'];?>" name="facebook">
		</div>
		</div> <!--row-->
	
	
       <div class="row form-group">
		<div class="col-md-3 control-label">
		<label><i class="fa fa-google-plus-square fa-2x"></i></label>
		</div>
		<div class="col-md-9">
		<input type="text" class="form-control" value="<?php  echo $setting_array['google'];?>" name="google">
		</div>
		</div>
	

	<div class="row form-group">
		<div class="col-md-3 control-label">
		<label><i class="fa fa-twitter-square fa-2x"></i></label>
		</div>
		<div class="col-md-9">
		<input type="text" class="form-control" value="<?php  echo $setting_array['twitter'];?>" name="twitter">
		</div> 
		</div><!--row-->
		
		
		<div class="row form-group">
		<div class="col-md-3 control-label">
		<label><i class="fa fa-linkedin-square fa-2x"></i></label>
		</div>
		<div class="col-md-9">
		<input type="text" class="form-control" value="<?php  echo $setting_array['link'];?>" name="link">
		</div> 
		</div><!--row-->
		
		<div class="row form-group">
		<div class="col-md-3 control-label">
		<label><i class="fa fa-youtube-square fa-2x"></i></label>
		</div>
		<div class="col-md-9">
		<input type="text" class="form-control" value="<?php  echo $setting_array['utube'];?>" name="utube">
		</div> 
		</div><!--row-->
		
		<div class="col-md-offset-3 col-md-9">
                   <input type="submit" class="form-control3" value="submit">
                  </div>
		
	</form>
</div> <!--social-links-->
	</div>
	</div><!--col-md-12>
</div>
</div> <!--page-wrapper-->