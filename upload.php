<?php
if($_SERVER['REQUEST_METHOD']=='POST'){ 
$image = $_POST['image'];
$random_name = substr( md5(rand()), 0, 7);
$path = "uploads/$random_name.png";
file_put_contents($path,base64_decode($image));
echo "Successfully Uploaded";
}
?>