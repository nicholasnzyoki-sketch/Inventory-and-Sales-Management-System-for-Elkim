<?php
include("header.php");
?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

 <?php
date_default_timezone_set('Africa/Nairobi'); // Replace with your timezone

$time = time(); // Get current timestamp
$hour = date('G', $time); // Extract the current hour from the timestamp

if ($hour >= 5 && $hour < 12) {
    $greet= "Good morning";
} elseif ($hour >= 12 && $hour < 18) {
    $greet= "Good afternoon";
} else {
    $greet="Good evening";
}
?>
                    
                    <div class="row">
                        <div class="col">

                            <div class="h-100">
                                <div class="row mb-3 pb-1">
                                    <div class="col-12">
                                        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                            <div class="flex-grow-1">
                                                <h4 class="fs-16 mb-1"><?php echo($greet)?>, <?php echo($_SESSION['fname']);?>!</h4>
                                                <p class="text-muted mb-0">Here's what's happening with your store today.</p>
                                            </div>
                                            <div class="mt-3 mt-lg-0">
                                                <form action="javascript:void(0);">
                                                    <div class="row g-3 mb-0 align-items-center">
                                                        
                                                        <div class="col-auto">
                                                            <a href="products" > <button type="button" class="btn btn-soft-success"><i class="ri-add-circle-line align-middle me-1"></i> Add Product</button></a>
                                                        </div>
                                                        

                                                        
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </form>
                                            </div>
                                        </div><!-- end card header -->
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->

                                <div class="row">
                                     

<?php
include('connection/db.php');
$today=date("Y-m-d");

//EXPIRY ALERT LOGIC
$sql_exp = "SELECT product_name, product_expiry FROM products WHERE status='0'";
$result_exp = $conn->query($sql_exp);

$expiring_count = 0;
$expiring_rows = "";

if ($result_exp->num_rows > 0) {
    while($row_exp = $result_exp->fetch_assoc()) {

        $expiry = $row_exp['product_expiry'];

        if(!empty($expiry)){
            $days_left = (strtotime($expiry) - strtotime($today)) / (60*60*24);

            if($days_left <= 150 && $days_left > 0){
                $expiring_count++;

                $pname = $row_exp['product_name'];
                $exp = $expiry;

                //table row in red color
                $expiring_rows .= "<tr style='color:red;'>
                                    <td>{$pname}</td>
                                    <td>{$exp}</td>
                                   </tr>";
            }
        }
    }
}


$kino="'%".$today."%'";
$sql = "SELECT product, qty FROM sales WHERE sale_date  LIKE $kino ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
    $toalsales=0;
  while($row = $result->fetch_assoc()) {
    $proid=$row["product"];
    $proqty=intval($row["qty"]);
    $sql1 = "SELECT product_sellprice FROM products WHERE product_id='$proid'";
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();

    if($row1) {
        $prosellp = intval($row1["product_sellprice"]);
    }else{
        $prosellp = 0;
    }
    
    $sale=$prosellp*$proqty;
    $toalsales=$toalsales+$sale;
  }
  //echo($toalsales);
} else {
  $toalsales=0;
}

?>

<?php
include('connection/db.php');

$sql = "SELECT quantity FROM products WHERE status='0'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    $toalproduct=0;
  while($row = $result->fetch_assoc()) {
    
    $proqty=intval($row["quantity"]);
    $toalproduct=$toalproduct+$proqty;

    
  }
 
} else {
  $toalproduct=0;
}

?>

<?php
include('connection/db.php');

$sql = "SELECT product_sellprice, quantity FROM products WHERE status='0'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    $toalstack=0;
  while($row = $result->fetch_assoc()) {
    
    $proqty=intval($row["quantity"]);
    $prosp=intval($row["product_sellprice"]);
    $com=$proqty*$prosp;


    $toalstack=$toalstack+$com;

    
  }
  
} else {
  $toalstack=0;
}

?>
<?php
include('connection/db.php');

$sql = "SELECT c_id FROM customers WHERE status='0'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$totalcustomer=$result->num_rows;
} else {
  $totalcustomer=0;
}

?>

                                    <div class="col-xl-3 col-md-6">
                                        <!-- card -->
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> Today Sales</p>
                                                    </div>
                                                   
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4">Ksh <span class="counter-value" data-target="<?php echo($toalsales);?>">0</span></h4>
                                                        <a href="#" class="text-decoration-underline">View Sales</a>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-soft-success rounded fs-3">
                                                            <i class="bx bx-dollar-circle text-success"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->

                                    <div class="col-xl-3 col-md-6">
                                        <!-- card -->
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                     <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Total Products</p>
                                                    </div>
                                                    
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="<?php echo($toalproduct);?>">0</span></h4>
                                                        <a href="products" class="text-decoration-underline">View products</a>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-soft-info rounded fs-3">
                                                            <i class="bx bx-shopping-bag text-info"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->

                                    <div class="col-xl-3 col-md-6">
                                        <!-- card -->
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Stock Value</p>
                                                    </div>
                                                    
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="<?php echo($toalstack); ?>">0</span> Ksh</h4>
                                                        <a href="products" class="text-decoration-underline">See products</a>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-soft-warning rounded fs-3">
                                                           
                                                            <i class="bx bx-wallet text-primary"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->

                                    <div class="col-xl-3 col-md-6">
                                        <!-- card -->
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0"> My Customers</p>
                                                    </div>
                                                    
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="<?php echo($totalcustomer); ?>">0</span></h4>
                                                        <a href="customers" class="text-decoration-underline">View Customers</a>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-soft-primary rounded fs-3">
                                                             <i class="bx bx-user-circle text-warning"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->

                                    <div class="col-xl-3 col-md-6">
                                        <div class="card card-animate">
                                            <div class="card-body">
                                                 <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">Expiring Products</p>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <table class="table table-sm">
                                                        <thead>
                                                            <tr>
                                                                <th>Product</th>
                                                                <th>Expiry Date</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                                if($expiring_rows != "") {
                                                                    echo $expiring_rows;
                                                                } else {
                                                                    echo "<tr><td colspan='2'>No expiring products</td></tr>";
                                                                }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>                
                                            </div>
                                        </div>
                                    </div>                        

                                </div> <!-- end row-->
                            </div>
                        </div>
                    </div>
                    <span id="update-view"></span>

                    <div class="row">
                        <div class="col-lg-7">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Sales Overview </h4>
                                    <div class="flex-shrink-0">
                                        <div class="dropdown card-header-dropdown">
                                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted">SELECT <i class="mdi mdi-chevron-down ms-1"></i></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="javascript:void(0)" onclick="salesoverview(duration='7')">Last Week</a>
                                                <a class="dropdown-item" href="javascript:void(0)" onclick="salesoverview(duration='14')">2 Weeks Ago</a>
                                                <a class="dropdown-item" href="javascript:void(0)" onclick="salesoverview(duration='30')">1 MONTH AGO</a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <canvas id="salesoverview" style="width:100%;max-width:600px"></canvas>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->


<script>
salesoverview(duration='10');

function salesoverview(duration) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        //alert(this.status);
        if (this.readyState == 4 && this.status == 200) {
            result=this.responseText.trim();
            result=result.split("sep");
            //alert(result);
            days=eval(result[0]);
            daysdata=eval(result[1]);
            //alert(typeof days);
            var xValues = days;//["Italy", "France", "Spain", "USA", "Argentina"];
            var yValues = daysdata;//[55, 49, 44, 24, 15];
            var barColors = ["red", "green","blue","orange","brown","rgb(10, 200, 100)", "rgb(30, 100, 240)", "rgb(150, 80, 20)", "rgb(50, 220, 70)", "rgb(200, 10, 180)","blue","orange","brown","rgb(10, 200, 100)"];
            new Chart("salesoverview", {
              type: "bar",
              data: {
                labels: xValues,
                datasets: [{
                  backgroundColor: barColors,
                  data: yValues
                }]
              },
              options: {
                legend: {display: false},
                title: {
                  display: true,
                  text: "Sales Overview "
                }
              }
            });
            //document.getElementById("txtHint").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET","main_server/chartserver?days="+duration,true);
    xmlhttp.send();

}

</script>


                        <div class="col-lg-5">
                            <div class="card card-height-100">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Top Selling Products</h4>
                                   
                                </div><!-- end card-header -->
                                <div class="card-body p-0">
                                    <div
id="myChart" style="width:100%; max-width:600px; height:300px;">
</div>
                                    
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->


<script type="text/javascript">
    topper();
    function topper() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            //alert(this.status);
          if (this.readyState == 4 && this.status == 200) {
            result=this.responseText.trim();
            result=result.split("sep");
            data1=eval(result[0]);
            data2=eval(result[1]);
            //alert(data1);
            newdata=data2;
            datavalue=data1;
            datalen=newdata.length;
            combined="['Contry', 'Mhl']";
            let i = 0;
            finaldata=[];
            while (i < datalen) {
              combined="['"+newdata[i]+"',"+datavalue[i]+"]";
              finaldata.push(combined);
              
              i++;
            }

            realdata=finaldata;
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                x="[['Contry', 'Mhl'],"+realdata+"]";
            const data = google.visualization.arrayToDataTable(eval(x));

            const options = {
              title:'Top Products',
              is3D:true
            };

            const chart = new google.visualization.PieChart(document.getElementById('myChart'));
              chart.draw(data, options);
            }
            //document.getElementById("txtHint").innerHTML = this.responseText;
          }
        };
        xmlhttp.open("GET","main_server/chartserver?topper=topper",true);
        xmlhttp.send();
    }
</script>

                    </div><!--end row-->

                   <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                               <div class="card-header border-0 align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">Sales</h4>
                                            
                                        </div><!-- end card header -->
                                <div class="card-body">
                                    <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                                        <thead>
                                            <tr>
                                               
                                                <th>#</th>
                                               
                                                <th>Product Name</th>
                                                <th>Quantity</th>
                                                <th>Payment Method</th>
                                                <th>Sale Date</th>
                                                <th>Customer</th>
                                                
                                                
                                                
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php
include('connection/db.php');
$sql = "SELECT sale_id,customer,product,qty,payment,sale_date FROM sales WHERE status='0' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $count=0;
    while($row = $result->fetch_assoc()) {
        $count=$count+1;
        $pid=$row["product"];
        $sql1 = "SELECT product_name FROM products WHERE product_id='$pid'";
        $result1 = $conn->query($sql1);
        $row1 = $result1->fetch_assoc();
        if($row1) {
            $pname = $row1["product_name"];
        } else {
            $pname = "Unknown";
        }

        //get customer
        $cid=$row["customer"];
        $sql2 = "SELECT fname,lname FROM customers WHERE c_id='$cid'";
        $result2 = $conn->query($sql2);
        $row2 = $result2->fetch_assoc();
        if ($row2) {
            $fname = $row2["fname"];
            $lname = $row2["lname"];
        } else {
            $fname = "Unknown";
            $lname = "";
        }

        // ONLY FIX APPLIED HERE (DATE)
        $rawdate = $row["sale_date"];
        $timestamp = strtotime($rawdate);

        if ($timestamp) {
            $dateFormatted = date("d M Y H:i A", $timestamp);
        } else {
            $parts = explode("-", $rawdate);
            if(count($parts) == 3){
                $dateFormatted = $parts[0]." Mar 20".$parts[2];
            } else {
                $dateFormatted = $rawdate;
            }
        }

    echo("<tr>
        <td>{$count}</td>
        <td><a href='#!'>{$pname}</a></td>
        <td>{$row["qty"]}</td>
        <td>{$row["payment"]}</td>
        <td>{$dateFormatted}</td>
        <td>{$fname} {$lname}</td>
       
        <td>
            <div class='dropdown d-inline-block'>
                <button class='btn btn-soft-secondary btn-sm dropdown' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
                    <i class='ri-more-fill align-middle'></i>
                </button>
                <ul class='dropdown-menu dropdown-menu-end'>
                    <li>
                        <a class='dropdown-item remove-item-btn' data-bs-toggle='modal' data-bs-target='#confirmation' onclick=\"globaldeleter(id='{$row["sale_id"]}',db='sales')\">
                            <i class='ri-delete-bin-fill align-bottom me-2 text-muted'></i> Delete
                        </a>
                    </li>
                </ul>
            </div>
        </td>
    </tr>");
  }
} else {
  echo "0 results";
}
?>
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!--end col-->


                       


                        


                    </div><!--end row-->

                  



                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Payments</h4>
                                    <div class="flex-shrink-0">
                                        <div class="dropdown card-header-dropdown">
                                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-muted">This Week<i class="mdi mdi-chevron-down ms-1"></i></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="javascript:void(0)" onclick="payments()">This Week</a>
                                                <a class="dropdown-item" href="javascript:void(0)" onclick="payments()">This Month</a>
                                                
                                                <a class="dropdown-item" href="javascript:void(0)" onclick="payments()">Current Year</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <canvas id="payments" style="width:100%;max-width:600px"></canvas>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

<script>
payments();
function payments() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {

      if (this.readyState == 4 && this.status == 200) {

        result = this.responseText.trim();
        result = result.split("sep");

        var days = JSON.parse(result[0]);
        var cashData = JSON.parse(result[1]);
        var mobileData = JSON.parse(result[2]);

        if (window.paymentChart) {
            window.paymentChart.destroy();
        }

        const ctx = document.getElementById("payments").getContext("2d");

        window.paymentChart = new Chart(ctx, {
          type: "bar",
          data: {
            labels: days,
            datasets: [
              {
                label: "Cash",
                data: cashData,
                backgroundColor: "purple"
                
              },
              {
                label: "Mobile Money",
                data: mobileData,
                backgroundColor: "green"
                
              }
            ]
          },
          options: {
            responsive: true,
            plugins: {
              legend: {
                display: true
              },
              title: {
                display: true,
                text: "Payments Per Day"
              }
            },
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        });

      }
    };

    xmlhttp.open("GET","main_server/chartserver?payments=payments",true);
    xmlhttp.send();
}

</script>
 <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Stock Alerts</h4>
                                                                  </div><!-- end card header -->

                                <div class="card-body">
                                    <div class="table-responsive table-card">
                                        <table class="table table-borderless table-hover table-nowrap align-middle mb-0">
                                            <thead class="table-light">
                                                <tr class="text-muted">
                                                    <th scope="col">Product Name</th>
                                                    <th scope="col" style="width: 20%;">Quantity </th>
                                                    <th scope="col">Supplier</th>
                                                </tr>
                                            </thead>

                                            <tbody>
<?php
$sql = "SELECT product_name,supplier,quantity FROM products WHERE status='0' ORDER BY quantity ASC LIMIT 5";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo(" <tr>
                                                    <td class='text-body fw-medium'>{$row["product_name"]}</td>
                                                    <td class='text-danger '>{$row["quantity"]} Products</td>
                                                    <td>
                                                        <a href='#javascript: void(0);' class='text-body fw-medium'>{$row["supplier"]}</a>
                                                    </td>
                                                    
                                                </tr>");
    //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
}

?>
                                               
                                            </tbody><!-- end tbody -->
                                        </table><!-- end table -->
                                    </div><!-- end table responsive -->
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        


                    </div><!--end row-->


                    </div>
                    <!-- end row -->

<?php if($expiring_count > 0){ ?>
<script>
alert("Warning: <?php echo $expiring_count; ?> product(s) are expiring soon!\n\n<?php echo $expiring_list; ?>");
</script>
<?php } ?>
<?php
include("footer.php");
?>