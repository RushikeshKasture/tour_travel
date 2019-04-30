<?php

session_start();
if(isset($_SESSION['id']) && $_SESSION['id'] != '') { 
//include_once('common.php');
require_once('connection.php');
$select3 = "SELECT * FROM settings";
$query_3 = mysqli_query($conn,$select3);

$setting_array = array(); 

while($rs = mysqli_fetch_assoc($query_3)){
	$setting_array[$rs['key']] = $rs['value'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tour Travel</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/hover_effects_backend.css">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Passion+One" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Cabin+Sketch|Merriweather+Sans|Passion+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
	<!--message jquery -->
	<script src="js/message.js"></script>
	
	<!-- data_table css javascript -->
	<script src="js/data_table.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<!--data_table buttons link-->
<script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.flash.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src ="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>
<script src ="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>
<script src ="//cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.3.1/js/buttons.print.min.js"></script>
<link rel="stylesheet" href ="https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css"> 

<!--tiny mce-->

<script src="js/ckeditor.js"></script>
<script src="js/sample.js"></script>
	
	

	
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand text" class="text" href = "index.php"> World Tour </a>
            </div>
			   <ul class="nav navbar-nav navbar-right">
      
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
			
		  
           
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="hvr-icon-pulse"></i> Dashboard</a>
                    </li>
                    
                        <li>
                        <a href="add_category.php"><i class="fa fa-fw fa-arrows-v"></i> Category</a>    
                         </li>
                            
                        
                        
					
                        <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="hvr-icon-grow"></i> Tour <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                                <a href="add.php">Add</a>
                            </li>
                            <li>
                                <a href="view.php">View</a>
                            </li>
                        </ul>
                        </li>
      	            
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="hvr-icon-wobble-vertical"></i> Tour Album <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="add_album.php">Add</a>
                            </li>
                            <li>
                                <a href="view_album.php">View</a>
                            </li>
                        </ul>
                    </li>
					
                    <li>
                        <a href="order.php"><i class="hvr-icon-float-away"></i> Orders</a>
					</li>
                   
                       <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="hvr-icon-down"></i> Website setting <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                            <li>
                                <a href="general.php">General setting</a>
                            </li>
                            <li>
                                <a href="home_page.php">Home page setting</a>
                            </li>
							<li>
                                <a href="logo.php"> Logo Settings </a>
                            </li>
							<li>
                                <a href="slider.php"> Home Slider Settings </a>
                            </li>
							<li>
                                <a href="partners.php">Partners Logo</a>
                            </li>
							<li>
                                <a href="Social.php">Social Links</a>
                            </li>
                        </ul>
                    </li>
					
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
		
		
		<?php }

else {
	header('Location:login.php');
}
?>
