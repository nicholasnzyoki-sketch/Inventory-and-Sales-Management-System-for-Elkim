<?php
include('../connection/db.php');
/////GETPRODUCTS
$modal=$_GET['modal'] ?? null;
$the_id=$_GET['id'] ?? null;
//echo($modal);
if ($modal=="products") {
	$sql = "SELECT product_id,product_name,product_generic,product_catergory,product_orgprice,product_sellprice,supplier,quantity FROM products WHERE product_id='$the_id'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	echo json_encode($row);
}

if ($modal=="catergory") {
	$sql = "SELECT catergory_id,catergory_name FROM catergory WHERE catergory_id='$the_id'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	echo json_encode($row);
	//echo("seen");
}
if ($modal=="customer") {
	$sql = "SELECT c_id,fname,lname,email,contact,note FROM customers WHERE c_id='$the_id'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	echo json_encode($row);
	//echo("seen");
}
if ($modal=="suppliers") {
	$sql = "SELECT s_id,sname,email,contact,note FROM suppliers  WHERE s_id='$the_id'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	echo json_encode($row);
	// code...
}

/////MASSDELETION
$action=$_GET['action'] ?? null;
$todelete=$_GET['todelete'] ?? null;
$fromdb=$_GET['fromdb'] ?? null;


$ide=$fromdb."_id";
if($fromdb=="customer"){
	$fromdb="customers";
	$ide="c_id";

}

if ($ide=="products_id") {
	$ide="product_id";
}
if ($ide=="suppliers_id") {
	$ide="s_id";
}
if ($ide=="sales_id") {
	$ide="sale_id";
}

if ($action=="delete") {
	$sql = "DELETE FROM $fromdb WHERE $ide='$todelete'";
	if ($conn->query($sql) === TRUE) {
		echo ("success");
	} else {
		echo ("error");
	}
}

?> 
