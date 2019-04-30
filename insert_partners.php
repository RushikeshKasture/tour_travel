<?

require_once('connection.php');


$multiple_img_name = $_FILES['multiple_img']['name'];
$img_name_str = implode(',',$multiple_img_name);

for($i = 0 ; $i < count($_FILES['multiple_img']['name']) ; $i++){
	$src = $_FILES['multiple_img']['tmp_name'][$i]; 
	$destination = 'upload/'.$_FILES['multiple_img']['name'][$i];
	move_uploaded_file($src,$destination);
}




?>