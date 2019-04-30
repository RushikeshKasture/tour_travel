<?php

require_once('connection.php');

$select = "SELECT * FROM tour_list";
$query = mysqli_query($conn,$select);

$select1 = "SELECT * FROM slider";
$query1 = mysqli_query($conn,$select1);

$select3 = "SELECT * FROM settings";
$query_3 = mysqli_query($conn,$select3);

$setting_array = array(); 

while($rs = mysqli_fetch_assoc($query_3)){
	$setting_array[$rs['key']] = $rs['value'];
}


$select2 = "SELECT * from album_list";
$query4 = mysqli_query($conn,$select2);

 
$partners_all_logo = $setting_array['partnerslogo'];
$partner_array = explode(',',$partners_all_logo);
//echo "<pre>";
//print_r($setting_array); 

?>




<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title> TOURS FRONT END</title>
	
	      <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link href="css/front_end.css" rel="stylesheet">
	
	<!-- Custom Fonts -->
	
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Spectral" rel="stylesheet">
	<link href="https://github.com/IanLunn/Hover/blob/master/css/hover.css" rel="stylesheet">
	<link rel="stylesheet" href="css/hover_effects">
	<!--date picker-->
	<link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css'/>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>


</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">


<div class="container-fluid">
<div class="row top_bar hidden-xs">
	<div class="col-md-7 pull-left">
	<div class="cover">
					<ul class="list-inline">
                        <li>
                            <i class="fa fa-phone"></i>Phone: 8801716441700
                        </li>
						<li>
							<i class="fa fa-envelope-o"></i><a href="mailto:admin@thesoftking.com">Email: admin@thesoftking.com</a>
						</li>
                    </ul>
	</div> <!--cover-->
		
    </div> <!--col-md-7-->

	<div class="col-md-5">
			<div class="social-icons_1 pull-right">
				<a href="<?php  echo $setting_array['facebook'];?>" target="_blank"><i class="fa fa-facebook"></i></a>
				
				<a href="<?php echo $setting_array['google'];?>" target="_blank"><i class="fa fa-google-plus"></i></a>
				
				<a href="<?php echo $setting_array['twitter']; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
				
				<a href="<?php echo $setting_array['link']; ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
				
				<a href="<?php echo $setting_array['utube']; ?>" target="_blank"><i class="fa fa-youtube"></i></a>
			</div>
   </div> <!--col-md-5-->
</div><!--row-->
</div> <!--container-fluid-->
 <!--navigation-bar-->


<nav id="scroll_1" class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
	  <a href="front_end.php">
	  <img src="upload/<?php echo $setting_array['logo'] ?>" class="img-responsive hvr-grow-shadow image1">
	  </a>
     
    </div>
    <div>
      <div class="collapse navbar-collapse navbar-right" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="hvr-underline-from-left"><a href="front_end.php">Home</a></li>
          <li class="hvr-underline-from-right"><a href="contact_us.php">Contact us</a></li>
       
          </ul> 
        
      </div>
    </div>
  </div>
</nav>