<?php 


//echo"<pre>";
//print_r($_POST);
require_once('connection.php');
$u_name = $_POST['username'];
$pwd = $_POST['password'];

$select = "SELECT * FROM users WHERE username='".$u_name."' AND password='".md5($pwd)."'";

$query = mysqli_query($conn,$select);
//return count of row mysqli_num_rows
//echo (mysqli_num_rows($query)

if (mysqli_num_rows($query) > 0) {
	$res = mysqli_fetch_assoc($query);
	/*print_r($res); */
	session_start();
	$_SESSION['id'] = $res['id'];
	$_SESSION['username'] = $res['username'];
	
	header('Location:index.php');
}
else {
	header('Location:login.php');
}
?>