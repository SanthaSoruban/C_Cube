<?php
$Username=$_POST['Username']
$Email=$_POST['Email']
$New Password=$_POST['New Password']

$conn = new mysqli_connect('localhost','root','','ccubes');
if($conn->connect_error){
	die('connection failed :'.$conn->connect_error);
}else{
	$stmt = $conn->prepare("INSERT INTO `register`(Username,Email,New Password) VALUES (?,?,?)");
	$stmt->bind_param(sssssi,$Username, $Email, $NewPassword)
}

