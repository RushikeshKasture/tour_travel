<?php


require_once('connection.php');
print_r($_FILES);
if($_FILES['filetoupload']['name'][0] != ''){
	
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


$update = "UPDATE settings SET
  `value` = '".$final_name."'
 WHERE `key` = 'logo'"; 
 
 mysqli_query($conn,$update);
header('Location:logo.php');





}

else
{
	$final_name = $existing_img;

}
 
 


?>














