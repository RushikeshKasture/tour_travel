<?php


require_once('connection.php');
if(isset($_POST['tour_name']) && $_POST['tour_name'] != ''){

$tour_name = $_POST['tour_name'];
$tour_cost = $_POST['tour_cost'];
$duration =  $_POST['duration'];
$location = $_POST['location'];
$category = $_POST['category'];
$file_name = $_FILES['filetoupload']['name'];
$desc = $_POST['desc'];

/*  To seprate file name and extension and store extension in $file_ext_arr (array) */

$file_ext_arr = explode('.',$file_name);

$file_ext = $file_ext_arr[count($file_ext_arr)-1];

/* To save image file name in date format */

$new_file_name = date('YmdHis');

 $final_name = $new_file_name. '.' .$file_ext;

$source = $_FILES['filetoupload']['tmp_name'];
$dest = 'upload/'.$final_name;

move_uploaded_file($source,$dest);

$insert = "INSERT INTO tour_list(`tour_name`,`tour_cost`,`duration`,`location`,`category`,`image`,`description`) VALUES('".$tour_name."','".$tour_cost."','".$duration."','".$location."','".$category."','".$final_name."','".$desc."')";
  
mysqli_query($conn,$insert);

}

 if(mysqli_affected_rows($conn) > 0) {
 header('Location:add.php?msg=1&op=inserted');
 }
 else{
	 header('Location:add.php?msg=0&op=Inserted');
 }











?>