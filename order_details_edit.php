<?php 
include_once('common.php');
require_once('connection.php');
$id = $_GET['id'];
$select = "Select * FROM order_list WHERE id=".$id;
$query = mysqli_query($conn,$select);
$response = mysqli_fetch_assoc($query);

?>
<div id="page-wrapper">
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
		<div class="pro">
	<div class="title">	
     <div class="caption">
     <strong>  <i class="fa fa-shopping-cart"></i>  Order Details </strong></div>
    <div class="tools">  
    <label class="label label-success"><?php echo $response['status'];?></label>
    </div>
	</div>
	

		<div class="pro-body">
			<h2>Order #<?php echo $id; ?> </h2>
			<h1 class="red">Title of the tour</h1>
			<h4>Client-name:<?php echo $response['name'] ?>
			<h4>address:<?php echo $response['address'] ?>
			<h4>Mobile:<?php echo $response['phone'] ?>
			<h4>Email:<?php echo $response['email'] ?>
			<h4>Journey date:<?php echo $response['date'] ?>
			<h4>Ordered on </h4>
		</div>
<div class="row pull-bottom">		
<div class="col-sm-4">
<a href="?action=status&amp;do=0" class="btn btn-info btn-block">ACTIVE</a>
</div>
<div class="col-sm-4">
<a href="completed.php?id=<?php echo $response['id'];?>" class="btn btn-success btn-block">COMPLETED</a>
</div>
<div class="col-sm-4">
<a href="rejected.php?id=<?php echo $response['id'];?>" class="btn btn-danger btn-block">REJECTED</a>
</div>
</div>

			
		</div>
	<div>
</div>
</div>
</div>



<script>
			
		</script>
</body>
</html>





