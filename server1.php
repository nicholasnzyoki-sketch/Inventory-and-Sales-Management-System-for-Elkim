<?php
////GET PRODUCT DATA
$action = $_POST['formaction'] ?? null;
//$action ="i";
$productname = $_POST['productname'] ?? null;
$genericname = $_POST['genericname'] ?? null;
$productcatergory = $_POST['productcatergory'] ?? null;
$productsupplier = $_POST['productsupplier'] ?? null;

$originalprice = $_POST['originalprice'] ?? null;
$sellingprice = $_POST['sellingprice'] ?? null;
$expirydate = $_POST['expirydate'] ?? null;
$quantity = $_POST['quantity'] ?? null;
$product_id = $_POST['product_id'] ?? null;
$date=date("Y-m-d");
$productid = "PRO".substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,6);
// $productname = $_POST['productname'];
// $page=$_GET['page'] ?? null;
include('../connection/db.php');
if ($action=="create") {
	$sql = "INSERT INTO products (product_id, product_name, product_generic,product_catergory,product_arrival,product_expiry,product_orgprice,product_sellprice,supplier,quantity,status)VALUES ('$productid', '$productname', '$genericname','$productcatergory','$date','$expirydate','$originalprice','$sellingprice','$productsupplier','$quantity','0')";
	if ($conn->query($sql) === TRUE) {
		echo ("success");
	} else {
		echo ("error");
	}
}
if ($action=="update") {
	$sql = "UPDATE products SET product_name='$productname', product_generic='$genericname',product_catergory='$productcatergory',product_arrival='$date',product_expiry='$expirydate',product_orgprice='$originalprice',product_sellprice='$sellingprice',supplier='$productsupplier',quantity='$quantity',status='0' WHERE product_id='$product_id'";
	if ($conn->query($sql) === TRUE) {
		echo ("success");
	} else {
		echo ("error");
	}
	// code...
}



/////GET NEW CATERGORY
$catergory=$_POST['catergory'] ?? null;
$cateid=$_POST['cateid'] ?? null;
$categoryaction=$_POST['action'] ?? null;
$catergoryid = "CAT".substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,6);
if ($categoryaction=="create") {
	$sql = "INSERT INTO catergory (catergory_id, catergory_name, status)VALUES ('$catergoryid', '$catergory', '0')";
	if ($conn->query($sql) === TRUE) {
		echo ("success");
	} else {
		echo ("error");
	}
}
if ($categoryaction=="update") {
	$sql = "UPDATE catergory SET catergory_name='$catergory' WHERE catergory_id='$cateid'";
	if ($conn->query($sql) === TRUE) {
		echo ("success");
	} else {
		echo ("error");
	}
}





////GET NEW CUSTOMER
$customeraction=$_GET['customeraction'] ?? null;
$fname=$_GET['fname'] ?? null;
$lname=$_GET['lname'] ?? null;
$note=$_GET['note'] ?? null;
$cutomeremail=$_GET['email'] ?? null;
$customercontact=$_GET['contact'] ?? null;
$customerid=$_GET['id'] ?? null;
$actioner=$_GET['task'] ?? null;
$c_id = "CUST".substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,6);
if ($customeraction=="create") {
	$sql = "INSERT INTO customers (c_id, fname,lname,email,contact,note,status)
	VALUES ('$c_id', '$fname', '$lname','$cutomeremail','$customercontact','$note','0')";
	if ($conn->query($sql) === TRUE) {
		echo ("success");
	} else {
		echo ("error");
	}
}
if ($actioner=="update") {
	$sql = "UPDATE customers SET fname='$fname',lname='$lname',email='$cutomeremail',contact='$customercontact',note='$note'WHERE c_id='$customerid'";
	if ($conn->query($sql) === TRUE) {
		echo ("success");
	} else {
		echo ("error");
	}
}

////GET NEW SUPPLIER
$customeraction1=$_GET['customera'] ?? null;
$supplier=$_GET['supplier'] ?? null;

$note1=$_GET['notea'] ?? null;
$cutomeremail1=$_GET['emaila'] ?? null;
$customercontact1=$_GET['contacta'] ?? null;
$c_id1 = "SUP".substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,6);
if ($customeraction1=="create") {
	$sql = "INSERT INTO suppliers (s_id, sname,email,contact,note,status)
	VALUES ('$c_id1', '$supplier', '$cutomeremail1','$customercontact1','$note1','0')";
	if ($conn->query($sql) === TRUE) {
		echo ("success");
	} else {
		echo ("error");
		 
	}
}


?>