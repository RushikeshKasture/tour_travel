
<?php
include_once('common.php');
require_once('connection.php');
$select = "SELECT category FROM category";

$query = mysqli_query($conn,$select);

?>

 <div id="page-wrapper">
 <div class="container">
 
				   <h3 class="page-title5">Category List</h3>
				   <hr>
				   <div class="page-content">

 
 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add New</button>
 <hr>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          
 
 

<h4> Add category </h4>
 <form method="POST" action="insert_category.php" onsubmit="validate()">
						<div class="form-group">
						
							<input type="text" name="category_name" id="category_name" class="form-control">
						</div>	  
						  
						
			<button type="submit" class="btn purple btn-sm form-control1"> Submit </button>
						
					   
				   </form> 
				  
				   </div>
        </div>
        
      </div>
      
    </div>
  </div>
  

				   
				   
				   
				   <!--data table--->
				   
				   
<div class="abc">
	<div class="col-md-8 col-md-offset-1">

<table id="example" class="table table-striped table-bordered hover order-column" width="100%" cellspacing="0">
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
		

</div>
</div>

			
		
				 
				 </div>
				 </div>
			
				 </body>
				 </html>