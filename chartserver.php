
<?php
include('../connection/db.php');
$thedays= intval($_GET['days'] ?? null);
//$thedays=5;
if (!empty($thedays)) {
	$timezone = new DateTimeZone('Africa/Nairobi');
	$today=date("Y-m-d");

	$startDate = new DateTime($today);
	$dates = array();
	for ($i = 0; $i < $thedays; $i++) {
	    $dates[] = $startDate->format('Y-m-d');
	    $startDate->sub(new DateInterval('P1D'));
	}
	//print_r($dates);

	$alldays=array();
	$alltotal=array();
	foreach ($dates as $date) {
	   // echo($date);
	    
	    $kino="'%".$date."%'";
	    $sql = "SELECT product, qty FROM sales WHERE sale_date  LIKE $kino ";
	    $result = $conn->query($sql);

	    if ($result->num_rows > 0) {
	        $daytotal=0;
	        while($row = $result->fetch_assoc()) {
	           $qty= intval($row["qty"]);
	           $product=$row["product"];
	           $sql1 = "SELECT product_name,product_sellprice FROM products WHERE product_id='$product'";
	           $result1 = $conn->query($sql1);
	           $row1 = $result1->fetch_assoc();
	           if ($row1) {
	           	$price = intval($row1["product_sellprice"]);
	           } else {
	           	$price = 0;
	           }
	           $total=$price*$qty;
	           $daytotal=$daytotal+$total;
	            

	           
	        }
	        array_push($alltotal,$daytotal);
	        
	    }else{
	        array_push($alltotal,0);
	    }

	    $formateddate=$date;

	    array_push($alldays,$formateddate);
	}
	echo json_encode($alldays);
	echo ("sep");
	echo json_encode($alltotal);
}


$payments= $_GET['payments'] ?? null;
if ($payments=="payments") {
	$thedays = 7; // last 7 days
    $today = date("Y-m-d");

    $startDate = new DateTime($today);

    $days = [];
    $cashData = [];
    $mobileData = [];

    for ($i = 0; $i < $thedays; $i++) {
    	$date = $startDate->format("Y-m-d");
        $days[] = $date;

        $cash = 0;
        $mobile = 0;

        $sql = "SELECT payment FROM sales WHERE sale_date LIKE '%$date%'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        	while($row = $result->fetch_assoc()) {
        		$pay = strtolower(trim($row["payment"]));
        		if ($pay == "cash") {
        			$cash++;
        		} elseif ($pay == "mobile money") {
        			$mobile++;
        		}
        	}
        }

        $cashData[] = $cash;
        $mobileData[] = $mobile;

        $startDate->sub(new DateInterval('P1D'));
    }

    echo json_encode($days);
    echo "sep";
    echo json_encode($cashData);
    echo "sep";
    echo json_encode($mobileData);		  
}


$topper=$_GET['topper'] ?? null;
if ($topper=="topper") {
	
	$sql = "SELECT product,qty FROM sales";
	$result = $conn->query($sql);
	$data=array();
	$qtyarray=array();
	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	    $product=$row["product"];
	    
	    array_push($data,$product);
	    }
	}
	$data=array_unique($data);//array_count_values($data);///array_unique($data);

	$datavalue=array();
	$newdata=array();
	foreach ($data as $value) {
	    $sql1 = "SELECT qty FROM sales WHERE status='0' AND product ='$value'";
	    $result1 = $conn->query($sql1);
	    $totalqty=0;

	    ///get product name
	    $sql2 = "SELECT product_name FROM products WHERE status='0' AND product_id ='$value'";
	    $result2 = $conn->query($sql2);
	    $row2 = $result2->fetch_assoc();
	    if ($row2) {
	    	$pname = $row2["product_name"];
	    } else {
	    	$pname = "Unknown";
	    }


	    while($row1 = $result1->fetch_assoc()) {
	        $times= (int) $row1["qty"];

	        $totalqty=$totalqty+$times;
	    }
	     array_push($datavalue,$totalqty);
	     array_push($newdata,$pname);

	    //echo($value."=".$totalqty);

	}

	$finaldata=array();
	$count=0;
	foreach ($newdata as $value) {
	  //echo ($value);
	  $finaldata[$value] = intval($datavalue[$count]);
	  $count=$count+1;
	}

	asort($finaldata);
	$last_four_items = array_slice($finaldata, -4);
	$data1=array_values($last_four_items);
	$data2=array_keys($last_four_items);
	echo json_encode($data1);
	echo ("sep");
	echo json_encode($data2);
}


?>