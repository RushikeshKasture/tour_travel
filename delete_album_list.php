<?php 
require_once('connection.php');
/* print_r($_GET);*/
$id = $_GET['id'];
$tour_id = $_GET['tour_id'];
$delete= "DELETE FROM album_list_images WHERE id=".$id;
mysqli_query($conn,$delete);
header('Location:view_album_list.php?id='.$tour_id);


?>