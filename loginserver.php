

<?php

session_start();

include('../connection/db.php');
$email=$_GET['email'] ?? null;
$key=$_GET['key'] ?? null;
$logout=$_GET['logout'] ?? null;

$sql = "SELECT userid,fname,lname,password,profile,user_type FROM accounts WHERE email='$email' AND status='0'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
	$password=$row["password"];

	if ($key==$password) {
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['userid'] = $row["userid"];
		$_SESSION['profile'] = $row["profile"];
		$_SESSION['fname'] = $row["fname"];
		$_SESSION['lname'] = $row["lname"];
		$_SESSION['user_type'] = $row["user_type"];
		echo("yes");
	}else{
		echo("no");
	}

}

if ($logout=="logout") {
	session_destroy();
	echo("success");
}




?> 
