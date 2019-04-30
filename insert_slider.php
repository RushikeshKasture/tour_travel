<?php 

require_once('connection.php');

$bold_text = $_POST['desc1'];
$small_text = $_POST['desc2'];

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
 $insert = "INSERT INTO slider (`image`,`bold_text`,`small_text`) VALUES('".$final_name."','".$bold_text."','".$small_text."')"; 
mysqli_query($conn,$insert);
if(mysqli_affected_rows($conn)> 0) {
 header('Location:slider.php?msg=1&op=inserted');
 }
 else 
 {
	 header('Location:slider.php?msg=0&op=inserted');
 }
 




?>