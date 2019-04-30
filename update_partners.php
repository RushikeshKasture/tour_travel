<?php


require_once('connection.php');
echo '<pre>';
print_r($_FILES);

$existing_img = $_POST['existing_img'];

if($_FILES['multiple_img']['name'][0] != ''){
$multiple_img_name = $_FILES['multiple_img']['name'];
 $multiple_img_name;
$img_name_str = implode(',',$multiple_img_name);

for($i = 0 ; $i < count($_FILES['multiple_img']['name']) ; $i++){
	$src = $_FILES['multiple_img']['tmp_name'][$i]; 
	$destination = 'upload/'.$_FILES['multiple_img']['name'][$i];
	move_uploaded_file($src,$destination);
}

}else{
	$img_name_str = $existing_img;
//die;
}
 
 $update = "UPDATE settings SET
  `value` = '".$img_name_str."'
 WHERE `key` = 'partnerslogo'"; 
 
 mysqli_query($conn,$update);
 header('Location:partners.php');



?>















?>