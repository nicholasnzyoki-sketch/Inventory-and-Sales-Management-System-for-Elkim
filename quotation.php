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
                                <h4 class="mb-sm-0" id='title-page-01'>Suppliers</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item active" id='title-page-02'>Suppliers</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="row justify-content-center">
                        <div class="col-xxl-9">
                            <div class="card">
                                 <div class="card-header border-0 align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">Quotation Overview</h4>
                                            <div>
                                                <button type="button" class="btn btn-soft-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#create-supplier">
                                                  + CREATE
                                                </button>
                                                
                                                
                                               
                                            </div>
                                        </div><!-- end card header -->

                                <form class="needs-validation" novalidate id="invoice_form">
                                    <div class="card-body border-bottom border-bottom-dashed p-4">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="profile-user mx-auto  mb-3">
                                                    <input id="profile-img-file-input" type="file" class="profile-img-file-input" />
                                                    <label for="profile-img-file-input" class="d-block" tabindex="0">
                                                        <span class="overflow-hidden border border-dashed d-flex align-items-center justify-content-center rounded" style="height: 60px; width: 256px;">
                                                            <img src="assets/images/logo-dark.png" class="card-logo card-logo-dark user-profile-image img-fluid" alt="logo dark">
                                                            <img src="assets/images/logo-light.png" class="card-logo card-logo-light user-profile-image img-fluid" alt="logo light">
                                                        </span>
                                                    </label>
                                                </div>
                                               
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4 ms-auto">
                                                <div class="mb-2">
                                                    <input type="text" class="form-control bg-light border-0" id="registrationNumber" maxlength="50" placeholder="Business Name" required />
                                                    
                                                </div>
                                                <div class="mb-2">
                                                    <textarea class="form-control bg-light border-0" id="companyAddress" rows="3" placeholder="Company Address" required></textarea>
                                                </div>
                                                <div class="mb-2">
                                                    <input type="email" class="form-control bg-light border-0" id="companyWebsite" placeholder="Business Email" required />
                                                    
                                                </div>
                                                <div>
                                                    <input type="text" class="form-control bg-light border-0" data-plugin="cleave-phone" id="compnayContactno" placeholder="Phone Contact" required />
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>

                                    
                                    <div class="card-body p-4">
                                        <div class="table-responsive">
                                            <table class="invoice-table table table-borderless table-nowrap mb-0">
                                                <thead class="align-middle">
                                                    <tr class="table-active">
                                                        <th scope="col" style="width: 50px;">#</th>
                                                        <th scope="col">
                                                            Product Details
                                                        </th>
                                                        <th scope="col" style="width: 120px;">Price (Ksh)</th>
                                                        
                                                        <th scope="col" style="width: 120px;">Quantity</th>
                                                        <th scope="col" class="text-end" style="width: 150px;">Amount</th>
                                                        <th scope="col" class="text-end" style="width: 105px;"></th>
                                                    </tr>
                                                </thead>
                                                <tbody id="newlink">
                                                    <tr id="1" class="product">
                                                        <th scope="row" class="product-id">1</th>
                                                        <td class="text-start">
                                                            <div class="mb-2">
                                                                
                                                                 <select class="form-control bg-light border-0" >
                                                                    <option selected disabled>Select Product</option>
                                                                    <option value="1">One</option>
                                                                    <option value="2">Two</option>
                                                                    <option value="3">Three</option>
                                                                </select>
                                                                
                                                            </div>
                                                            
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control product-price bg-light border-0" id="price"  value="20" readonly />
                                                            
                                                        </td>
                                                        <td>
                                                            <div class="input-step">
                                                                
                                                                <input type="number" class="product-quantity" id="product-qty-1" value="1" min='0'>
                                                                
                                                            </div>
                                                        </td>
                                                        <td class="text-end">
                                                            <div>
                                                                <input type="text" class="form-control bg-light border-0 product-line-price" id="productPrice-1" placeholder="$0.00" readonly />
                                                            </div>
                                                        </td>
                                                        <td class="product-removal">
                                                            <a href="javascript:void(0)" ><i class=" ri-delete-bin-2-line align-middle text-danger"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <tbody>
                                                    <tr id="newForm" style="display: none;"><td class="d-none" colspan="5"><p>Add New Form</p></td></tr>
                                                    <tr>
                                                        <td colspan="5">
                                                            <a href="javascript:new_link()" id="add-item" class="btn btn-soft-secondary fw-medium"><i class="ri-add-fill me-1 align-bottom"></i> Add Item</a>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-top border-top-dashed mt-2">
                                                        <td colspan="3"></td>
                                                        <td colspan="2" class="p-0">
                                                            <table class="table table-borderless table-sm table-nowrap align-middle mb-0">
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">Sub Total</th>
                                                                        <td style="width:150px;">
                                                                            <input type="text" class="form-control bg-light border-0" id="cart-subtotal" placeholder="$0.00" readonly />
                                                                        </td>
                                                                    </tr>
                                                                    
                                                                    <tr>
                                                                        <th scope="row">Discount <small class="text-muted">(%)</small></th>
                                                                        <td>
                                                                            <input type="text" class="form-control bg-light border-0" id="cart-discount" placeholder="$0.00" readonly />
                                                                        </td>
                                                                    </tr>
                                                                    
                                                                    <tr class="border-top border-top-dashed">
                                                                        <th scope="row">Total Amount</th>
                                                                        <td>
                                                                            <input type="text" class="form-control bg-light border-0" id="cart-total" placeholder="$0.00" readonly />
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!--end table-->
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--end table-->
                                        </div>
                                        
                                        <div class="mt-4">
                                            <label for="exampleFormControlTextarea1" class="form-label text-muted text-uppercase fw-semibold">NOTE:</label>
                                            <textarea class="form-control " id="exampleFormControlTextarea1" placeholder="Notes" rows="2" required></textarea>
                                        </div>
                                        <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                                            <button type="submit" class="btn btn-success"><i class="ri-printer-line align-bottom me-1"></i> Save</button>
                                            <a href="javascript:void(0);" class="btn btn-primary"><i class="ri-download-2-line align-bottom me-1"></i> Download Invoice</a>
                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->



                   <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                               <div class="card-header border-0 align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">Suppliers</h4>
                                            <div>
                                                <button type="button" class="btn btn-soft-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#create-supplier">
                                                  + ADD SUPPLIER
                                                </button>
                                                
                                                <button type="button" class="btn btn-soft-secondary btn-sm">
                                                    EXPORT
                                                </button>
                                               
                                            </div>
                                        </div><!-- end card header -->
                                <div class="card-body">
                                    <table id="scroll-horizontal" class="table nowrap align-middle" style="width:100%">
                                        <thead>
                                            <tr>
                                               
                                                <th>#</th>
                                                <th>First Name</th>
                                               
                                                <th>Email Address</th>
                                                <th>Contact</th>
                                                <th>Note</th>
                                                
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php
include('connection/db.php');
$sql = "SELECT s_id,sname,email,contact,note,status FROM suppliers WHERE status='0' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $count=0;
    while($row = $result->fetch_assoc()) {
        $count=$count+1;
        $note=substr($row["note"],0,25)." ....";
    //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    echo("<tr>
                                                <td>{$count}</td>
                                                <td>{$row["sname"]}</td>
                                                
                                                <td>{$row["email"]}</td>
                                                
                                                <td>{$row["contact"]}</td>
                                                <td>{$note}</td>
                                                
                                                <td>
                                                    <div class='dropdown d-inline-block'>
                                                        <button class='btn btn-soft-secondary btn-sm dropdown' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
                                                            <i class='ri-more-fill align-middle'></i>
                                                        </button>
                                                        <ul class='dropdown-menu dropdown-menu-end'>
                                                            <li><a href='#!' class='dropdown-item'><i class='ri-eye-fill align-bottom me-2 text-muted'></i> View</a></li>
                                                            <li><a class='dropdown-item edit-item-btn'><i class='ri-pencil-fill align-bottom me-2 text-muted'></i> Edit</a></li>
                                                            <li>
                                                                <a class='dropdown-item remove-item-btn'>
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