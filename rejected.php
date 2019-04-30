<?php 

require_once('connection.php');


  $id = $_GET['id']; 

$update = "UPDATE order_list SET `status`= 'rejected' WHERE id=".$id;

mysqli_query($conn,$update);
header('Location:order_details_edit.php?id='.$id);


?>