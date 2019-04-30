<?php 
//echo "<pre>";
//print_r($_POST);
require_once('connection.php');
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$date = $_POST['date'];
$people = $_POST['people'];

 $insert = "INSERT INTO order_list (`name`,`address`,`phone`,`email`,`date`,`people`,`status`) VALUES('".$name."','".$address."','".$phone."','".$email."','".$date."','".$people."','active')"; 

mysqli_query($conn,$insert);
header('Location:front_end.php');
?>
