<?php
include('../connection/db.php');
$delid=$_GET['delid'] ?? null;
$fname = $_POST['fname'] ?? null;
$lname = $_POST['lname'] ?? null;
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;
$usertype = $_POST['usertype'] ?? null;
//$pic = $_POST['pic'] ?? null;
$file_name = $_FILES['pic']['name'] ?? null;
$file_tmp = $_FILES['pic']['tmp_name'] ?? null;
if (move_uploaded_file($file_tmp,"images/".$file_name)) {
$loc="main_server/images/".$file_name;
}else{
$loc="assets/images/default.png";
}


if (!empty($fname) && !empty($email)) {
	$userid = "U".substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,6);
	$sql = "INSERT INTO accounts (userid, fname, lname,email,password,profile,user_type,status)
	VALUES ('$userid', '$fname', '$lname','$email','$password','$loc','$usertype','0')";
	if ($conn->query($sql) === TRUE) {
		echo ("success");
	} else {
		echo ("error");
	}
}

if (!empty($delid)) {
	$sql = "DELETE FROM accounts WHERE userid='$delid'";
	if ($conn->query($sql) === TRUE) {
		echo ("success");
	} else {
		echo ("error");
	}
}


?> 


