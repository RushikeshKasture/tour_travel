<?php

require_once('connection.php');

print_r($_POST);
 $update = "UPDATE settings SET 
`value` = 
CASE
WHEN `key` = 'facebook' THEN   '".$_POST['facebook']."'
WHEN `key` = 'google' THEN     '".$_POST['google']."'
WHEN `key` = 'twitter' THEN    '".$_POST['twitter']."'
WHEN `key` = 'link' THEN     '".$_POST['link']."'
WHEN `key` = 'utube' THEN    '".$_POST['utube']."'
END

WHERE `key`  in ('facebook','google','twitter','link','utube')"; 

mysqli_query($conn,$update);

if(mysqli_affected_rows($conn)> 0) {
 header('Location:social.php?msg=1&op=updated');
 }
 else 
 {
	 header('Location:social.php?msg=0&op=updated');
 }




?>