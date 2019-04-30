<?php 
require_once('connection.php');
/* print_r($_GET);*/
$id = $_GET['id'];
$delete= "DELETE FROM tour_list WHERE id=".$id;
mysqli_query($conn,$delete);
header('Location:view.php');


?>