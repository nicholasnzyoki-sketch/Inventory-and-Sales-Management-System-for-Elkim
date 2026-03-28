<?php
include("header.php");
?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                     <!-- start page title -->
                    <div class="row" id='title-page'>
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0" id='title-page-01'>Products</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item active" id='title-page-02'>Products</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <span id="update-view"></span>

                   <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                               <div class="card-header border-0 align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">Products</h4>
                                            <div>
                                                <button type="button" onclick="formresetter(form='product')" class="btn btn-soft-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#create-product" >
                                                   CREATE PRODUCT
                                                </button>
                                                
                                                <button type="button" class="btn btn-soft-secondary btn-sm" onclick="exportTableToExcel('scroll-horizontal', 'PRODUCT')">
                                                    EXPORT
                                                </button>
                                               
                                            </div>
                                        </div><!-- end card header -->
                                <div class="card-body">
                                    <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                                        <thead>
                                            <tr>
                                               
                                                <th>#</th>
                                               
                                                <th>Product Name</th>
                                                <th>Product Catergoy</th>
                                                <th>Product Original Price</th>
                                                <th>Product Selling Price</th>
                                                <th>Quantity</th>
                                                <th>Suplier</th>
                                                
                                                
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php
include('connection/db.php');
$sql = "SELECT product_id, product_name, product_generic,product_catergory,product_arrival,product_expiry,product_orgprice,product_sellprice,supplier,quantity,status FROM products WHERE (status='0' OR status='1')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $count=0;
    while($row = $result->fetch_assoc()) {
        $count=$count+1;
    //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    echo("<tr>
                                                <td>{$count}</td>
                                                
                                                <td><a href='#!'>{$row["product_name"]}</a></td>
                                                <td>{$row["product_catergory"]}</td>
                                                
                                                <td>{$row["product_orgprice"]}</td>
                                                <td>{$row["product_sellprice"]}</td>
                                                <td>{$row["quantity"]}</td>
                                                <td>{$row["supplier"]}</td>
                                                
                                                
                                                <td>
                                                    <div class='dropdown d-inline-block'>
                                                        <button class='btn btn-soft-secondary btn-sm dropdown' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
                                                            <i class='ri-more-fill align-middle'></i>
                                                        </button>
                                                        <ul class='dropdown-menu dropdown-menu-end'>
                                                            
                                                            <li><a class='dropdown-item edit-item-btn' data-bs-toggle='modal' data-bs-target='#create-product'  onclick=\"globaleditor(modal='products',id='{$row["product_id"]}')\"><i class='ri-pencil-fill align-bottom me-2 text-muted'></i> Edit</a></li>
                                                            <li>
                                                                <a class='dropdown-item remove-item-btn' data-bs-toggle='modal' data-bs-target='#confirmation' onclick=\"globaldeleter(id='{$row["product_id"]}',db='products')\">
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

<?php
include("footer.php");
?>