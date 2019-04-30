<?php 

//print_r($_POST);
 
require_once('connection.php');


 

 $update = "UPDATE settings SET
  `value` = 
 CASE 
 WHEN `key` = 'heading' THEN '".$_POST['album_name']."'
 WHEN `key` = 'text' THEN '".$_POST['short_text']."'
 WHEN `key` = 'editor' THEN '".$_POST['editor']."'
 
 END 
 
 WHERE `key`  in ('heading','text','editor')";
 
 mysqli_query($conn,$update);
 
 if(mysqli_affected_rows($conn)> 0) {
 header('Location:home_page.php?msg=1&op=updated');
 }
 else 
 {
	 header('Location:home_page.php?msg=0&op=updated');
 }
 
 
 