<?php 
require_once('connection.php');

if(isset($_POST['u_name']) && $_POST['u_name'] != '' && isset($_FILES['filetoupload']['name'])) {

$u_name = $_POST['u_name'];
$tour_id = $_POST['id'];
$file_name = $_FILES['filetoupload']['name'];

/*  To seprate file name and extension and store extension in $file_ext_arr (array) */

$file_ext_arr = explode('.',$file_name);

$file_ext = $file_ext_arr[count($file_ext_arr)-1];

/* To save image file name in date format */

$new_file_name = date('YmdHis');

$final_name = $new_file_name. '.' .$file_ext;

$source = $_FILES['filetoupload']['tmp_name'];
$dest = 'upload/'.$final_name;

move_uploaded_file($source,$dest);
$insert = "INSERT INTO album_list_images (`name`,`image`,`tour_id`) VALUES('".$u_name."','".$final_name."',".$tour_id.")";
mysqli_query($conn,$insert);
header('Location:view_album_list.php?id='.$tour_id);
}
else {
	
echo "please enter both the values";
}

?>


