<?php 
require_once('connection.php');
print_r($_POST);
$website_name = $_POST['website_name'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$location = $_POST['location'];
$currency = $_POST['currency'];
 

 $insert = "INSERT INTO general_setting (`website_name`,`address`,`mobile`,`location`,`currency`) VALUES ('".$website_name."','".$address."','".$mobile."','".$location."','".$currency."')"; 

$query = mysqli_query($conn,$insert);

header('Location:general.php');


?>