<?php

require_once('connection.php');
$id = $_GET['id'];

$delete = "DELETE FROM slider WHERE id=".$id;
mysqli_query($conn,$delete);
header('Location:slider.php');

?>








