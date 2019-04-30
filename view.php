<?php
include_once('common.php');
require_once('connection.php');

$select = "SELECT c.category,tl.id,tl.tour_name,tl.tour_cost,tl.duration,tl.location,tl.image,tl.description FROM tour_list as tl JOIN category as c ON tl.category = c.id ORDER BY id";
$query = mysqli_query($conn,$select);
?>


<div id="page-wrapper">

<div class="container pad-top">
<div class="col-md-10 col-md-offset-1 border">
<h3 class="page-title6">Tour List</h3>

<div class="table-responsive">		
<table id="example" class="table table-striped table-bordered hover order-column" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Sr_no</th>			
                <th>Tour_name</th>
                <th>Tour_cost</th>
                <th>Duration</th>
                <th>Locations</th>
                <th>Categories</th>
                <th>Image</th>
				<!--<th>Desc</th> -->
            </tr>
        </thead>
		<tbody>
		<?php 
		$i = 0;
		while($res = mysqli_fetch_assoc($query)){ ?>
            <tr>
				<td><?php echo ++$i;?></td>
				<td><?php echo $res['tour_name'];?></td>
				<td><?php echo $res['tour_cost'];?></td>
				<td><?php echo $res['duration'];?></td>
				<td><?php echo $res['location'];?></td>
				<td><?php echo $res['category'];?>
				<td><img src="upload/<?php echo $res['image'];?>" height="70" width="70"></td>
				<td><a href="delete_tour.php?id=<?php echo $res['id'];?>"><span class="glyphicon glyphicon-trash"></span></a></td>
            </tr>
		<?php } ?>
		</tbody> 
		</table>
		</div>
		</div> <!--container-->
		</div>
		

</div>




</div>
</body>
</html>


