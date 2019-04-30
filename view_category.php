<?php
include_once('common.php');
require_once('connection.php');
$select = "SELECT category FROM category";

$query = mysqli_query($conn,$select);

?>


<div id="page-wrapper">
<div class="container pad-top">
<div class="col-md-4 col-md-offset-3 border">
<h3 class="page-title1">Category List</h3>

		
<table id="example" class="row-border hover order-column" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Sr_no</th>			
                <th>View_Category</th>
                
            </tr>
        </thead>
		 <tbody>
		 <?php
		 $i=0;
		 while($response = mysqli_fetch_assoc($query)) { ?>
            <tr>
                <td><?php echo ++$i; ?></td>
                <td><?php echo $response['category'] ?></td>
            </tr>
		 <?php } ?>
		</tbody> 
		</table>
		</div>
		</div>
		
		

</div>




</div>
</body>
</html>


