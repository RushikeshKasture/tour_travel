<?php
include_once('common.php');
require_once('connection.php');
 
 $select = "SELECT id,name,phone,email,status,address FROM order_list ORDER BY id desc";
 $query = mysqli_query($conn,$select);

?>


<div id="page-wrapper">

<div class="container pad-top">
<div class="col-md-10 col-md-offset-1 border">
<h3 class="page-title1">Order List</h3>
		
<table id="example" class="row-border hover order-column" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Sr no</th>			
                <th>Client Name</th>
                <th>Contact Details</th>
                <th>Order Status</th>
                <th>Locations</th>
				<th>Actions</th>
                
            </tr>
        </thead>
		 <tbody>
		 <?php 
		 $i=0;
		 while($response = mysqli_fetch_assoc($query)){ ?>
            <tr>
                <td><?php  echo ++$i; ?></td>
                <td><?php echo $response['name'];?> </td>
                <td><?php echo $response['phone'].' , '.$response['email'];?> </td>
                <td> <?php echo $response['status'];?></td>
                <td> <?php echo $response['address'];?></td>
                <td><a href="order_details_edit.php?id=<?php echo $response['id'];?>" class="btn btn-primary btn-sm">Details/Action</a></td>
				


            </tr>
		 <?php } ?>
		</tbody> 
		</table>
		</div> <!--col-md-12-->
		</div> <!--container-->
		
		

</div>




</div>
</body>
</html>


