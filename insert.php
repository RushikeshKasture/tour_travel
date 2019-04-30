<?php
require_once('connection.php');

$category = $_POST['category_name'];

 $insert = "INSERT INTO category(`category`) VALUES('".$category."')";

mysqli_query($conn,$insert); 
 
 header('Location:add_category.php');






?>