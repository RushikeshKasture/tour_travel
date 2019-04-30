<?php
require_once('connection.php');
if(isset($_POST['category_name']) && $_POST['category_name'] != ''){
$category = $_POST['category_name'];

 $insert = "INSERT INTO category(`category`) VALUES('".$category."')";

mysqli_query($conn,$insert); 
}
 if(mysqli_affected_rows($conn) > 0) {
 header('Location:add_category.php?msg=1&op=inserted');
 }
 else{
	 header('Location:add_category.php?msg=0&op=inserted');
 }


?>