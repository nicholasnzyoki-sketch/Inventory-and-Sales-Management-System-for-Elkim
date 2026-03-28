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


                    <div class="row">
                      <div class="col-xl-6">
                                        <div class="card">
                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">System Users</h4>
                                                <div class="flex-shrink-0">
                                                    <button type="button" class="btn btn-soft-info btn-sm" data-bs-toggle="modal" data-bs-target="#myModal">
                                                        <i class="ri-file-list-3-line align-middle"></i> Create User
                                                    </button>
                                                </div>
                                            </div><!-- end card header -->

                                            <div class="card-body">
                                                <div class="table-responsive table-card">
                                                    <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                                        <thead class="text-muted table-light">
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">System User</th>
                                                                <th scope="col">Email</th>
                                                                
                                                                <th scope="col">Status</th>
                                                                <th scope="col">Action</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
<?php
$sql = "SELECT userid, fname, lname,email,profile,user_type FROM accounts WHERE status='0'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $count=0;
  while($row = $result->fetch_assoc()) {
    $count=$count+1;
    echo(" <tr id='{$row["userid"]}'>
    <td>
        <a href='javascript:void(0)' class='fw-medium link-primary'>#{$count}</a>
    </td>
    <td>
        <div class='d-flex align-items-center'>
            <div class='flex-shrink-0 me-2'>
                <img src='{$row["profile"]}' alt='' class='avatar-xs rounded-circle' />
            </div>
            <div class='flex-grow-1'>{$row["fname"]} {$row["lname"]}</div>
        </div>
    </td>
    <td>{$row["email"]}</td>

    <td>
        <span class='badge badge-soft-success'>Active</span>
    </td>
    <td>
        <a href='javascript:void(0);'  onclick=\"deluser(id='{$row["userid"]}')\" data-bs-toggle='modal' data-bs-target='#confirmation' class='link-danger fs-15'><i class='ri-delete-bin-line'></i></a></span>
    </td>

    </tr>");
    //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
}

?>

                                                            
                                                        </tbody><!-- end tbody -->
                                                    </table><!-- end table -->
                                                </div>
                                            </div>
                                        </div> <!-- .card-->
                                    </div> <!-- .col-->
                                    <div class="col-xl-6">
                                    <div class="card">
                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">+ Create User</h4>
                                               
                                                
                                            </div><!-- end card header -->
                                        </div>
                                        <div class="card-body" style="background-color: whitesmoke;">
                                            <div class="text-center">
                                        <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                                            <img id="blah" src="assets/images/av5c8336583e291842624.png" class="rounded-circle avatar-md img-thumbnail user-profile-image" alt="user-profile-image">
                                            <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                                <input accept="image/*" type='file' id="imgInp" name="imgInp"  type="file" class="profile-img-file-input" >
                                                <label for="imgInp" class="profile-photo-edit avatar-xs">
                                                    <span class="avatar-title rounded-circle bg-light text-body">
                                                        <i class="ri-camera-fill"></i>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                            <form action="javascript:void(0);"onsubmit="createuser()">
                                            <div class="row gy-4 mb-3">
                                            <div class="col-md-6">
                                                <div>
                                                    <label class="form-label">First Name<span class="text-danger">*</span></label>
                                                    <input type="text"  style="text-transform: uppercase;" id="ufname" class="form-control" placeholder="Enter Catergory" required="" minlength="3" maxlength="50" value="" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div>
                                                    <label class="form-label">Last Name<span class="text-danger">*</span></label>
                                                    <input type="text"  style="text-transform: uppercase;" id="ulname" class="form-control" placeholder="Enter Catergory" required="" minlength="3" maxlength="50" value="" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row gy-4 mb-3">
                                            <div class="col-md-6">
                                                <div>
                                                    <label class="form-label">Email<span class="text-danger">*</span></label>
                                                    <input type="text"   id="uemail" class="form-control" placeholder="Enter Catergory" required="" minlength="3" maxlength="50" value="" title="from 3 upto 50 characters">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div>
                                                    <label class="form-label">Password<span class="text-danger">*</span></label>
                                                    <input type="text"  style="text-transform: uppercase;" id="upassword" class="form-control" placeholder="Enter Catergory" required="" minlength="3" maxlength="50" value="" title="from 3 upto 50 characters">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row gy-4 mb-3">
                                            <div class="col-md-6">
                                                <div>
                                                    <label class="form-label">User Type<span class="text-danger">*</span></label>
                                                    
                                                     <select class="form-select mb-3" id='usertype' required>
                                                        <option  disabled>Select User type</option>
                                                        <option value="1">Normal User</option>
                                                        <option value="0">Admin User</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                               
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2" >
                                            <button class="btn btn-primary" type="submit">Button</button>
                                        </div>



                                        </div>

                                    </div>
                                </div> <!-- end row-->
                                <p></p>
                            </form>



                   
<?php
include("footer.php");
?>