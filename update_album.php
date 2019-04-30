<?php
//print_r($_POST);
require_once('connection.php');

$tour_album = $_POST['album_name'];
$short_desc = $_POST['short'];
$id = $_POST['id'];
$existing_img = $_POST['existing_img'];


if($_FILES['main_image']['name'] != ''){

$file_name = $_FILES['main_image']['name'];
$file_ext_arr = explode('.',$file_name);
/* explode : converts into array */
$file_ext = $file_ext_arr[count($file_ext_arr)-1];
/* To save image file name in date format */
$new_file_name = date('YmdHis');
 $final_name = $new_file_name. '.' .$file_ext;
$source = $_FILES['main_image']['tmp_name'];
$dest = 'upload/'.$final_name;
move_uploaded_file($source,$dest);
}else{
	$final_name = $existing_img;
//die;
}
 $update = "UPDATE album_list SET `tour_album`='".$tour_album."',`short_desc`='".$short_desc."',`image`='".$final_name."' WHERE id=".$id; 
mysqli_query($conn,$update);
header('Location:view_album.php')
?>