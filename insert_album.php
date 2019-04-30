<?php
require_once('connection.php');
//echo "<pre>";
//print_r($_POST);
//print_r($_FILES);

$album_name = $_POST['album_name'];
$short = $_POST['short'];
$file_name = $_FILES['main_image']['name'];

$file_ext_arr = explode('.',$file_name);

$file_ext = $file_ext_arr[count($file_ext_arr)-1];

/* To save image file name in date format */

$new_file_name = date('YmdHis');

 $final_name = $new_file_name. '.' .$file_ext;

$source = $_FILES['main_image']['tmp_name'];
$dest = 'upload/'.$final_name;

move_uploaded_file($source,$dest);
 $insert = "INSERT INTO album_list (`tour_album`,`short_desc`,`image`) VALUES('".$album_name."','".$short."','".$final_name."')";  
mysqli_query($conn,$insert);

if(mysqli_affected_rows($conn) > 0) {
	header('Location:add_album.php?msg=1&op=inserted');
}
	else
	{
	header('Location:add_album.php?msg=0&op=notinserted');
}




?>