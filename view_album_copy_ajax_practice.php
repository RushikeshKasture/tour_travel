<?php
include_once('common.php');
include_once('connection.php');

$select = "SELECT * from album_list";
$query = mysqli_query($conn,$select);

?>


<div id="page-wrapper">

<div class="container pad-top">
<div class="col-md-10 col-md-offset-1 border">
<h3 class="page-title1">Album List</h3>
		
<table id="example" class="table table-striped table-bordered hover order-column" width="100%" cellspacing="0">
        <thead>
            <tr>
			    <th>Sr no</th>
                <th>Name</th>			
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
                
            </tr>
        </thead>
		 <tbody>
		 <?php 
		 $i=0;
		 while($response= mysqli_fetch_assoc($query) ) { ?>
            <tr>
                <td><?php echo ++$i; ?></td>
                <td><?php echo $response['tour_album']; ?></td>
                <td><?php echo $response['short_desc']; ?></td>
                <td><img src="upload/<?php echo $response['image'];?>" height="70" width="70"></td>
 				
				<td><a class="btn purple btn-sm" class="btn purple btn-sm" href="edit_album.php?id=<?php echo $response['id'];?>"><i class="fa fa-edit"></i> EDIT</a>
				
				<a href="#" data-toggle="modal" data-target="#myModal" onclick="album_view(<?php echo $response['id'];?>)" class="btn green btn-sm"><i class="fa fa-desktop"></i> View</a>


				<a class="btn btn-danger btn-sm delete_button" data-toggle="modal" href="delete_album.php?id=<?php echo $response['id'];?>">
				<i class="fa fa-times"></i> DELETE </a>
				 </td>
				
            </tr>
		 <?php } ?>
		</tbody> 
		</table>
		
		<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Album List</h4>
      </div>
      <div class="modal-body">
	  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
		</div><!--col-md-->
		</div> <!--container-->
		
		

</div>




</div>
<script>
function album_view(id){
	$.ajax({
					url  : 'view_album_ajax.php',
					data : 'id='+id,
					dataType : 'html',
					type : 'POST',
					success : function(result){
						$('.modal-body').html(result);
					}
				});
}
</script>
</body>
</html>


