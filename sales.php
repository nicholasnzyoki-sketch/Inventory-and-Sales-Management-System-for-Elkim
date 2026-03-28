<?php
include("header.php");
?>
<style type="text/css">
@media print {
  body * {
    visibility: hidden;
  }
  #section-to-print, #section-to-print * {
    visibility: visible;
  }
  #section-to-print {
    position: absolute;
    left: 0;
    top: 0;
  }
  #printx {
    visibility: hidden;
    }
}

@media print {
    @page {
        margin-top: 0;
        margin-bottom: 0;
    }
    body {
        padding-top: 72px;
        padding-bottom: 72px ;
    }
}
@page {
  size: A4;
  margin: 0;
}

</style>

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
                                <h4 class="mb-sm-0" id='title-page-01'>Create Sale</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item active" id='title-page-02'>Create Sale</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                     <span id="update-view"></span>


                    


                     <div class="card">
                        <div class="card-body">
                            <div class="row g-4">
                                
                                <div class="col-lg-7">
                                    <div>
                                        <div class="dropdown float-end">
                                            <button class="btn btn-ghost-primary btn-icon dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle fs-16"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item view-item-btn" href="javascript:void(0);"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>View</a></li>
                                                <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li>
                                            </ul>
                                        </div>
                                        
                                        <h4>+ New Sale</h4>
                                        <div class="hstack gap-3 flex-wrap">
                                            <div class="text-muted">Served by: <a href="#" class="text-primary fw-medium">Sarah Mutunga</a></div>
                                            <div class="vr"></div>
                                            <div class="text-muted">Date : <span class="text-body fw-medium">
                                                <?php
                                                date_default_timezone_set('Africa/Nairobi');
                                                $date = date('j F, Y');
                                                echo ($date);

                                                ?></span></div>
                                            <div class="vr"></div>
                                            <div class="text-muted">Time : 
                                                <span class="text-body fw-medium" id='currenttime'>Loading</span>
                                            </div>
                                            <div class="vr"></div>
                                            <div class=" text-primary" id='saleclear'></div>
                                        </div>
                                        <div class="d-flex flex-wrap gap-2 align-items-center mt-3">
                                            
                                        </div>
                                        <div class="row gy-4 mb-3">
                     <div class="col-md-12">
                        <label class="form-label">Customer<span class="text-danger">*</span></label>
                        <div class="form-icon right">
                        <input type="text"  style="text-transform: uppercase;"  class="form-control form-control-icon dropdown-toggle" placeholder="Select a Customer" id='customerselect' readonly data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" autocomplete="off">
                        <i class="ri-arrow-down-s-line"></i>
                        <div class="dropdown-menu ">

                            <div class="mb-2 p-3">
                                <input type="text" id='cutomersearch' class="form-control form-control-sm"  onkeyup="globalsearch(inputid='cutomersearch',listid='customerlist')" placeholder="Search Customer" >
                            </div>
                            <div class="mx-n3">
                                <div data-simplebar data-simplebar-auto-hide="false" style="max-height: 180px;" class="px-3 " id='customerlist'>
                            <span><a class="dropdown-item" href="javascript:void(0)" onclick="globalselector(id='customerselect',uid='WALKINCUSTOMER',value='WALK IN CUSTOMER')">WALK IN CUSTOMER</a></span>
<?php
include('connection/db.php');

$sql = "SELECT c_id, fname, lname,email,contact,note FROM customers WHERE status='0'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo("<span><a class='dropdown-item' href='javascript:void(0)' onclick=\"globalselector(id='customerselect',uid='{$row["c_id"]}',value='{$row["fname"]} {$row["lname"]}',email='{$row["email"]}',contact='{$row["contact"]}',note='{$row["note"]}')\">{$row["fname"]} {$row["lname"]}</a></span>");

  }
}

?>
                    </div></div></div></div>
                       
                    </div>
                   


                    
                </div>
                    <div class="row gy-4 mb-3">

                    <div class="col-md-8">
                        <label class="form-label">Product<span class="text-danger">*</span></label>
                        <div class="form-icon right">
                        <input type="text"  style="text-transform: uppercase;"  class="form-control form-control-icon dropdown-toggle" placeholder="Select a Product" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" readonly id='productselect' autocomplete="off">
                        <i class="ri-arrow-down-s-line " ></i>
                        <div class="dropdown-menu ">
                            <div class="mb-2 p-3">
                                <input type="text" class="form-control form-control-sm" id='productsearch' onkeyup="globalsearch(inputid='productsearch',listid='productlist')" placeholder="Search product">
                            </div>
                            <div class="mx-n3">
                                <div data-simplebar data-simplebar-auto-hide="false" style="max-height: 180px;" class="px-3 " id='productlist'>
<?php
include('connection/db.php');

$sql = "SELECT product_id, product_name, product_sellprice FROM products WHERE status='0'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo("<span><a class='dropdown-item' href='javascript:void(0)' onclick=\"productselector(id='productselect',uid='{$row["product_id"]}',value='{$row["product_name"]}',sellprice='{$row["product_sellprice"]}')\">{$row["product_name"]}</a></span>");

  }
}

?>
</div></div></div></div>
                       
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">Quantity<span class="text-danger">*</span></label>
                        <input type="number" id='productqty' min='1' value='1' class="form-control" autocomplete="off">
                    </div>
                    <div class="col-md-2" id='add-button' style="display: none;">
                        <label class="form-label">Action</label>
                        <button type="button" id='add-btn-action'class="btn w-xs  btn-secondary form-control"><b><i class="ri-add-line align-bottom"></i> Add</b></button>
                    </div>
                </div>
                <div class="row mt-4" id="added-products">
                    
                    

                </div><p></p>
                <div class="row gy-4 mb-3" id='more-options' style="display: none;">
                        <div class="col-md-9">
                             <label class="form-label">Payment Method<span class="text-danger">*</span></label>
                             <div class="form-icon right">
                        <input type="text"  style="text-transform: uppercase;"  class="form-control form-control-icon dropdown-toggle" placeholder="Select a Payment Method" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" readonly id='paymentselect' autocomplete="off">
                        <i class="ri-arrow-down-s-line " ></i>
                        <div class="dropdown-menu ">
                            <div class="mb-2 p-3">
                                <input type="text" class="form-control form-control-sm" id='paymentsearch' onkeyup="globalsearch(inputid='paymentsearch',listid='paymentmethods')" placeholder="Search product">
                            </div>
                            <div id='paymentmethods'>
                            <span><a class="dropdown-item" href="javascript:void(0)" onclick="paymentselector(value='CASH')">CASH</a></span>
                            <span><a class="dropdown-item" href="javascript:void(0)" onclick="paymentselector(value='MOBILE MONEY')">MOBILE MONEY</a></span>
                            <span><a class="dropdown-item" href="javascript:void(0)" onclick="paymentselector(value='BANK TRANSER')">BANK TRANSER</a></span>
                            </div></div></div>

                            
                        </div>
                        <div class="col-md-3" id="finished">
                            <!-- <label class="form-label">Finish</label>
                            <button type="button" class="btn w-xs  btn-success form-control"><b><i class="ri-save-line align-bottom"></i> Save</b></button> -->
                            
                        </div>

                    </div>
                                        
                                        
                                        
                                         
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-lg-5" id='section-to-print'>
                                    <div class="sticky-side-div">
                                        <div class="card ribbon-box border shadow-none right">
                                            <a href="javascript:void(0)"><div class="ribbon-two ribbon-two-primary " id='printx'><span onclick="window.print()"><i class=" ri-printer-line  align-bottom"></i> Print</span></div></a>
                                             <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card-header border-bottom-dashed p-4">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <img src="assets/images/new-logo-dark.png" class="card-logo card-logo-dark" alt="logo dark" height="17">
                                                    <img src="assets/images/logo.png" class="card-logo card-logo-light" alt="logo light" height="17">
                                                    
                                                </div>
                                                <div class="flex-shrink-0 mt-sm-0 mt-3">
                                                    <h6><span class="fw-normal"><b>ELKIM CHEMISTRY</b></span></h6>
                                                    <h6><span id="email">Email:elkimpipeline@gmail.com</span></h6>
                                                    <h6><span id="email">Contact: 0712451384</span></h6>
                                                    <h6><span id="email">Address: Pipeline,Nairobi,Kenya</span></h6>
                                                    <h6 class="mb-0"><span id="realtime"></span></h6>


                                                </div>
                                            </div>
                                        </div>
                                        <!--end card-header-->
                                    </div><!--end col-->
                                    
                                    
                                    <div class="col-lg-12">
                                        <div class="card-body p-4">
                                            <div class="table-responsive">
                                                <table class="table table-borderless text-center table-nowrap align-middle mb-0">
                                                    <thead>
                                                        <tr class="table-active">
                                                            <th scope="col" style="width: 50px;">#</th>
                                                            <th scope="col">Product Details</th>
                                                            <th scope="col">Price (Ksh)</th>
                                                            <th scope="col">Qty</th>
                                                            <th scope="col" class="text-end">Amount</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="products-list">
                                                        
                                                    </tbody>
                                                </table><!--end table-->
                                            </div>
                                            <div class="border-top border-top-dashed mt-2">
                                                <table class="table table-borderless table-nowrap align-middle mb-0 ms-auto" style="width:250px">
                                                    <tbody>
                                                        <tr>
                                                            <td>Sub Total</td>
                                                            <td class="text-end" id="subtotal">0</td>
                                                        </tr>
                                                        
                                                        <tr class="border-top border-top-dashed fs-15">
                                                            <th scope="row">Total Amount (Ksh)</th>
                                                            <th class="text-end" id="grandtotal">0</th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!--end table-->
                                            </div>
                                        </div>
                                        <!--end card-body-->
                                    </div><!--end col-->
                                </div><!--end row-->
                                            
                                        </div>
                                       
                                    </div>
                                </div><!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                    </div><!--end card-->




                   



<?php
include("footer.php");
?> 
