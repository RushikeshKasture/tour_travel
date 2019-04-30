<?php 

//print_r($_POST);
 
require_once('connection.php');


 

 $update = "UPDATE settings SET
  `value` = 
 CASE 
 WHEN `key` = 'website' THEN '".$_POST['website_name']."'
 WHEN `key` = 'address' THEN '".$_POST['address']."'
 WHEN `key` = 'mobile' THEN '".$_POST['number']."'
 WHEN `key` = 'email' THEN '".$_POST['email']."'
 END 
 
 WHERE `key`  in ('website','address','mobile','email')";
 
 mysqli_query($conn,$update);
 
 if(mysqli_affected_rows($conn)> 0) {
 header('Location:general.php?msg=1&op=updated');
 }
 else 
 {
	 header('Location:gneral.php?msg=0&op=updated');
 }
 
 
 