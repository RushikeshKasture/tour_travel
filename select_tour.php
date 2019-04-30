
<?php
include_once('common_front.php');
require_once('connection.php');
$id = $_GET['id'];
$select = "SELECT * FROM tour_list WHERE id=".$id;

$query = mysqli_query($conn,$select);
 $res = mysqli_fetch_assoc($query); 
 
?>

<div class="kd-subheader">

	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="subheader-info">
				<h1><?php echo $res['tour_name'];?></h1>
				</div>
		    </div>
	    </div>
    </div>
</div>

<div class="container">
<div class="row">
<div class="col-md-8">
<div class="figure">
<img src="images/tour.jpg" class="img-responsive" alt="figure">
</div>
</div>

<div class="col-md-4">
<div class="kd-pkg-info">
<ul>
<li><i class="fa fa-map-marker"></i> <strong>Duration:</strong> <?php  echo $res['duration'];?></li>
<li><i class="fa fa-paper-plane"></i> <strong>Location:</strong> <?php echo $res['location'];?></li>
<li><i class="fa fa-tag"></i> <strong>Price:</strong> <?php echo $res['tour_cost']; ?> </li>
</ul>
<a href="order_now.php" class="kd-booking-btn thbg-color">Order Now</a>
</div>
</div>
</div><!--row-->

<div class="kd-rich-editor">

<h1>Tour Description</h1><br>
<p> <?php echo $res['description']; ?> </p>
<!-- <h2>DAY 1</h2>
                    Lorem ipsum dolor sit amet, consetetur sadipscing
 elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
 aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo 
dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus 
est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur 
sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et 
dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
 justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea 
takimata sanctus est Lorem ipsum dolor sit amet.<br><br><br>
                    <h2>DAY 2</h2>
                    Lorem ipsum dolor sit amet, consetetur sadipscing
 elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
 aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo 
dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus 
est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur 
sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et 
dolore magna aliquyam erat, sed diam voluptua.<br><br><br>
                    <h2>DAY 3</h2>
                    Lorem ipsum dolor sit amet, consetetur sadipscing
 elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
 aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo 
dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus 
est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur 
sadipscing elitr, sed diam nonumy eirmod tempor invidunt <br><br><br>
                    <h2>DAY 4<br></h2>
                    Lorem ipsum dolor sit amet, consetetur sadipscing
 elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
 aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo 
dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus 
est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur 
sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et 
dolore magna aliquyam erat, sed diam voluptua.<br><br><br>
                    <h2>DAY 5<br></h2>
                    Lorem ipsum dolor sit amet, consetetur sadipscing
 elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
 aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo 
dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus 
est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur 
sadipscing elitr, sed diam nonumy eirmod tempor invidunt <br><br><br><br>
                    <h2>DAY 6<br></h2>
                    Lorem ipsum dolor sit amet, consetetur sadipscing
 elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
 aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo 
dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus 
est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur 
sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et 
dolore magna aliquyam erat, sed diam voluptua.<br><br><br>
                    <h2>DAY 7<br></h2>
                    Lorem ipsum dolor sit amet, consetetur sadipscing
 elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
 aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo 
dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus 
est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur 
sadipscing elitr, sed diam nonumy eirmod tempor invidunt <br><br><br><br>
                    <h2>DAY 8<br></h2>
                    Lorem ipsum dolor sit amet, consetetur sadipscing
 elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
 aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo 
dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus 
est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur 
sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et 
dolore magna aliquyam erat, sed diam voluptua.<br><br><br>
                    <h2>DAY 9<br></h2>
                    Lorem ipsum dolor sit amet, consetetur sadipscing
 elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
 aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo 
dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus 
est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur 
sadipscing elitr, sed diam nonumy eirmod tempor invidunt <br>




<br><br><h1>Package Includes</h1><br>
Lorem ipsum dolor sit amet, consetetur sadipscing
 elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
 aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo 
dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus 
est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur 
sadipscing elitr, sed diam nonumy eirmod tempor invidunt <br><br>


<br><br><h1>Package Excludes</h1><br>
Lorem ipsum dolor sit amet, consetetur sadipscing
 elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
 aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo 
dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus 
est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur 
sadipscing elitr, sed diam nonumy eirmod tempor invidunt <br><br>
<br><br><br><br>  -->
</div>
</div><!--container-->





