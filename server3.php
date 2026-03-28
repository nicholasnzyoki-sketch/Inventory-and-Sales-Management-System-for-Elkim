<?php
$allids=$_GET['allids'] ?? null;
$allqty=$_GET['allqty'] ?? null;
$payment=$_GET['payment'] ?? null;
$customer=$_GET['customer'] ?? null;
include('../connection/db.php');
date_default_timezone_set("Africa/Nairobi");
$date = date("Y-m-d H:i A");

// echo($allids);
if (!empty($allqty) && !empty($payment) && !empty($allids) && !empty($customer)) {
	$allids=explode(",", $allids);
	$allqty=explode(",", $allqty);
	$allcount=count($allids);
	$x = 0;
	while($x < $allcount) {
		$saleid = "SAL".substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),0,8);
		$id=$allids[$x];
		$qty=$allqty[$x];
		$sql = "INSERT INTO sales (sale_id, customer, product,qty,payment,sale_date,status)
		VALUES ('$saleid', '$customer', '$id','$qty','$payment','$date','0')";
		$conn->query($sql);
		$x++;
	} 


}
//echo($allids." qty ".$allqty." payment ".$payment);



?> 


