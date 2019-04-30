
<?php
include_once('common_front.php');
require_once('connection.php');

/*$select = "SELECT * FROM tour_list";
$query = mysqli_query($conn,$select);

$select1 = "SELECT * FROM slider";
$query1 = mysqli_query($conn,$select1);

$select3 = "SELECT * FROM settings";
$query_3 = mysqli_query($conn,$select3);

$setting_array = array(); 

while($rs = mysqli_fetch_assoc($query_3)){
	$setting_array[$rs['key']] = $rs['value'];
} */


 

?>


     
	 
	 <!--carosel--->
	 
<div class="container"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
   <!-- <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
	<!--ternary operaters php -->
    <div class="carousel-inner">
	
	<?php 
	$i= 0;
	while($res1 = mysqli_fetch_assoc($query1)) { ?>
      <div class="item <?php echo ($i ==0) ? "active" : ""  ?>">
        <img src="upload/<?php echo $res1['image']?>" alt="Los Angeles" style="width:100%; height:80%">
      </div>
	<?php 
	$i++;
	} ?>

      
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="container">
<div class="row">
<div class="col-md-12 text-center">

<div class="kd-modrentitle thememargin1">
<h3 class="hvr-shutter-in-vertical"><?php echo $setting_array['heading'] ?></h3>

<span><h2> <i class="fa fa-globe"></i> </h2> </span>

</div>

</div>

</div>

<div class="what_we_do">
<p><b><?php echo $setting_array['text']; ?></b> 

<br> <br>
<?php echo $setting_array['editor']; ?>
</p>
</div>


</div>




<!--featured Tours--->

<div class="bg-image container-fluid">
<div class="row">
<div class="col-md-12 text-center">

<div class="kd-modrentitle thememargin1">
<h3 class="hvr-bounce-to-left">Featured Tours</h3>

<span><h2> <i class="fa fa-globe"></i> </h2> </span>

</div>

</div>

</div>



<div class="container">

<div class="row mar-bottom">
<?php while($res = mysqli_fetch_assoc($query)) { ?>
	<div class="col-md-4 album">
	<a href="select_tour.php?id=<?php echo $res['id']; ?>">
		<div class="image2 img_hover">
			<img class="img-center img-responsive" src="upload/<?php echo $res['image'];?>" style="width:100%; height:40%"
			alt=""> 
	

		<div class="caption">

			<span class="package-price" style="background-color:black;"><?php echo $res['tour_cost'];?></span>

			<div class="kd-bottomelement">
				<h5 class="front">
				
					<?php echo $res['tour_name'];?>

				</h5>	
			<div class="days-counter" style="background-color: #E54747;"><span><?php echo $res['duration'];?></span></div>
			</div>

		</div><!--caption-->
		<div class="img_hover_wrap"></div>
	    </div> <!--image2-->
		</a>
	</div><!--col-md-4-->
<?php } ?>
</div> <!--row-->

</div> <!--container-->
</div> <!--bg-image-->





<div class="container-fluid">
<div class="row">
<div class="col-md-12 text-center">

<div class="kd-modrentitle thememargin1">
<h3 class="hvr-grow-shadow">Our Tour gallery</h3>

<span><h2> <i class="fa fa-globe"></i> </h2> </span>

</div>

</div>

</div>
</div>

<div class="container">
<div class="row">
<?php 

while($res2 = mysqli_fetch_assoc($query4)) { ?>
<div class="col-md-6">
<div class="img_hover  hvr-outline-out">
<img src="upload/<?php echo $res2['image']; ?>" class="img-responsive">


<div class="img_hover_wrap">
<a class="hvr-icon-float-away" href="tour_gallery.php?id=<?php echo $res2['id'];?>">
</a>
</div>
</div>
</div>

<?php } ?>

</div><!--row-->
</div> <!--container-->




<div class="container">
<div class="container-fluid">
<div class="row">
<div class="col-md-12 text-center">

<div class="kd-modrentitle thememargin1">
<h3>Our Tour Partners</h3>

<span><h2> <i class="fa fa-globe"></i> </h2> </span>

</div>

</div>

</div>
</div>

<div class="row">

<?php foreach($partner_array as $single_logo){ ?>
						  <img class="img-border" src="upload/<?php echo $single_logo;?>">
						  <?php } ?>



</div> <!--row-->
</div> <!--container-->
   
   <!--footer-->
   
 
<div class="container-fluid footer">
<div class="container mar-top">
<div class="row">
    
<div class="widget col-md-6 kd-textwidget">
<div class="kd-widget-title"><h2>About Us</h2></div>
<div class="kd-contactinfo">
<p>

We've all been there. For that one fun trip, we plan for months on end. Where do we go? Who's coming? How do we go? When? How often is that plan going to change before someone loses his or her mind? Travel logistics can become a long, drawn-out horror story... unless you're on TripPlannig, in which case it’s a ten-minute task. TripPlannig is an innovative trip planning platform that enables users to plan trips from over 90000 cities across the world. TripPlannig’s trip planning platform serves as a one-stop destination for all the travel needs- exploring attractions, creating itineraries and booking hotels, transportation, and tours.

</p>
</div>
</div>

<div class="widget col-md-3 kd-followus-widget">
<div class="kd-widget-title"><h2>Follow Us</h2></div>
<ul>


<li>
	<a href="http://facebook.com/YOU" data-original-title="Facebook">
	<i class="fa fa-facebook"></i></a>
</li>

<li>
	<a href="http://t.co/YOU" data-original-title="Twitter">
	<i class="fa fa-twitter"></i></a>
</li>

<li>
	<a href="http://google.com/YOU" data-original-title="Google-Plus">
	<i class="fa fa-google-plus"></i></a>
</li>

<li>
	<a href="http://link.com/YOU" data-original-title="Linkedin">
	<i class="fa fa-linkedin"></i></a>
</li>

<li>
	<a href="http://youtube.com/YOU" data-original-title="Youtube">
	<i class="fa fa-youtube"></i></a>
</li>

</ul>
</div>

          <div class="widget col-md-3 kd-userinfo-widget">
            <div class="kd-widget-title"><h2>Contact Us</h2></div>
            <ul>
                <li><i class="fa fa-map-marker"></i> <?php echo $setting_array['address']; ?></li>
                <li><i class="fa fa-phone-square"></i> <?php echo $setting_array['mobile'] ?></li>
                <li><i class="fa fa-envelope"></i> <?php echo $setting_array['email'];?></li>
              </ul>
          </div>

           <center><div class="col-md-6"><p>© Copyright 2016  All Rights Reserved by 
	</p></div><center>

        </center></center></div>
      </div>
    
   
   
<script>
		window.onscroll = function() {myFunction()};

		function myFunction() {
			if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
				document.getElementById("scroll_1").className = "navbar navbar-inverse navbar-fixed-top test";
			} else {
				document.getElementById("scroll_1").className = "navbar navbar-inverse ";
			}
		}

</script>  
</body>

</html>