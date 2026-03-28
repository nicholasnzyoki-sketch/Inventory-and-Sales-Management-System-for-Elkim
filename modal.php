
<div id="sale-modal" class="modal fade" tabindex="-1"  style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Modal Heading</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body">

                                <form class="needs-validation" novalidate id="invoice_form">
                                    <div class="card-body border-bottom border-bottom-dashed p-4">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="mb-2">
                                                    <input type="text" class="form-control bg-light border-0" id="registrationNumber" maxlength="50" value="SHEE CABINET CHEMISTRY" placeholder="Business Name" required />
                                                    
                                                </div>
                                                
                                                <div class="mb-2">
                                                    <input type="email" class="form-control bg-light border-0" id="companyWebsite" placeholder="Business Email" required />
                                                    
                                                </div>
                                                <div>
                                                    <input type="text" class="form-control bg-light border-0" data-plugin="cleave-phone" id="compnayContactno" placeholder="Phone Contact" required />
                                                    
                                                </div>
                                                
                                               
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4 ms-auto">
                                                <div class="mb-2">
                                                    <input type="text" class="form-control bg-light border-0" id="registrationNumber" maxlength="50" placeholder="Business Name" required />
                                                    
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
            
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary ">Save Changes</button>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->





<div id="create-supplier" class="modal fade" tabindex="-1" style="display: none;">
    <div class="modal-dialog ribbon-box border shadow-none mb-lg-0">
        <form action="javascript:void(0);" onsubmit="getnewsupplier()">

        <div class="modal-content">
            
             

            <div class="modal-header">
                <h5 class="modal-title" >Add Supplier</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body">
                <span id='supplierwaiter'></span>
                

                <div class="row gy-4 mb-3">
                    <div class="col-md-12">
                        <div>
                            <label class="form-label">Supplier Name<span class="text-danger">*</span></label>
                            <input type="text" style="text-transform: uppercase;" id="supplier" class="form-control" placeholder="Enter Supplier name" required="" minlength="3" maxlength="50" value="" title="from 3 upto 50 characters">
                        </div>
                    </div>
                    
                </div>
                <div class="row gy-4 mb-3">
                    <div class="col-md-6">
                        <div>
                            <label class="form-label">Contact</label>
                            <input type="text" style="text-transform: uppercase;" id="contact1" class="form-control" placeholder="Enter Contact Details " minlength="3" maxlength="50" value="" title="from 3 upto 50 characters">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label class="form-label">Email Address</label>
                            <input type="email" id="email1" class="form-control" placeholder="Enter Email address "  value="" title="from 3 upto 50 characters">
                        </div>
                    </div>

                </div>
                <div class="row gy-4 mb-3">
                    <div class="col-md-12">
                        <div>
                            <label class="form-label">Note</label>
                           
                            <textarea style="text-transform: uppercase;" id='note1' class="form-control" placeholder="Any relevant info about Supplier"></textarea>
                        </div>
                    </div>
                </div>
                
                <input type="text" id='customerformaction1' value="create" hidden >
                
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary ">Save Changes</button>
            </div>

        </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->





<div id="create-customer" class="modal fade" tabindex="-1" style="display: none;">
    <div class="modal-dialog ribbon-box border shadow-none mb-lg-0">
        <form action="javascript:void(0);"  onsubmit="getnewcustomer(id='',task='create')" id='customer-form'>

        <div class="modal-content">
            
             

            <div class="modal-header">
                <h5 class="modal-title" >Add Customer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body">
                <span id='customerwaiter'></span>

                <div class="row gy-4 mb-3">
                    <div class="col-md-6">
                        <div>
                            <label class="form-label">First Name<span class="text-danger">*</span></label>
                            <input type="text" style="text-transform: uppercase;" id="firstname" class="form-control" placeholder="Enter First name" required="" minlength="3" maxlength="50" value="" title="from 3 upto 50 characters">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label class="form-label">Last Name <span class="text-danger">*</span></label>
                            <input type="text" style="text-transform: uppercase;" id="lastname" class="form-control" placeholder="Enter Last Name" required minlength="3" maxlength="50" value="" title="from 3 upto 50 characters">
                        </div>
                    </div>
                </div>
                <div class="row gy-4 mb-3">
                    <div class="col-md-6">
                        <div>
                            <label class="form-label">Contact</label>
                            <input type="text" style="text-transform: uppercase;" id="contact" class="form-control" placeholder="Enter Contact Details " minlength="3" maxlength="50" value="" title="from 3 upto 50 characters">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label class="form-label">Email Address</label>
                            <input type="email" id="email" class="form-control" placeholder="Enter Email address "  value="" title="from 3 upto 50 characters">
                        </div>
                    </div>

                </div>
                <div class="row gy-4 mb-3">
                    <div class="col-md-12">
                        <div>
                            <label class="form-label">Note</label>
                           
                            <textarea style="text-transform: uppercase;" id='note' class="form-control" placeholder="Any relevant info about customer"></textarea>
                        </div>
                    </div>
                </div>
                
                <input type="text" id='customerformaction' value="create" hidden >
                
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary ">Save Changes</button>
            </div>

        </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->





<div id="create-product" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog ribbon-box border shadow-none mb-lg-0">
    	<form action="javascript:void(0);" onsubmit="getnewproduct()" id='kino'>

        <div class="modal-content">
        	<span id='profit-view'></span>
        	 

            <div class="modal-header">
                <h5 class="modal-title" id="productlabel">Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body">
                <span id='waiter'></span>
            	

            	<div class="row gy-4 mb-3">
                    <div class="col-md-6">
                        <div>
                            <label class="form-label">Product Name<span class="text-danger">*</span></label>
                            <input type="text" id="productname" style="text-transform: uppercase;" class="form-control" placeholder="Enter Product name" required="" minlength="3" maxlength="50" value="" title="from 3 upto 50 characters">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label class="form-label">Generic Name <i class=" ri-error-warning-line align-bottom fs-9 " data-bs-toggle="tooltip" data-bs-placement="top" title="Popular name known by customers"></i></label>
                            <input type="text" id="genericname" style="text-transform: uppercase;"  class="form-control" placeholder="Enter Generic Name"  minlength="3" maxlength="50" value="" title="from 3 upto 50 characters">
                        </div>
                    </div>
                </div>
                <div class="row gy-4 mb-3">
                    <div class="col-md-6">
                        <div>
                            <label class="form-label">Product Catergory<span class="text-danger">*</span></label>
                             <select class="form-select mb-3" id='product-catergory' required>
							    <option value="" selected disabled>Select Catergory</option>
<?php
$sql = "SELECT catergory_name FROM catergory WHERE status='0'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
    echo("<option value='{$row["catergory_name"]}'>{$row["catergory_name"]}</option>");
  }
} else {
  echo ("<option readonly>Add Catergory</option>");
}
?>
							</select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <label class="form-label">Supplier<span class="text-danger">*</span></label>
                            <select class="form-select mb-3" id='product-supplier' required>
							    <option value="" selected>Select Supplier</option>
<?php
$sql = "SELECT sname FROM suppliers WHERE status='0'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
    echo("<option value='{$row["sname"]}'>{$row["sname"]}</option>");
  }
} else {
  echo ("<option readonly>Add Supplier</option>");
}
?>
							</select>
                        </div>
                    </div>
                </div>
                <input type="text" id='formaction' value="create" hidden >
                <input type="text" id='product-id' value="" hidden >

                <div class="row gy-4 mb-3">
                    
                    <div class="col-md-4">
                        <div>
                            <label class="form-label">Original Price<span class="text-danger">*</span></label>
                            <input type="text" id="original-price" oninput="profiter()" class="form-control" placeholder="Price Ksh" required pattern="[0-9]+">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="form-label">Selling Price<span class="text-danger">*</span></label>
                            <input type="text" id="selling-price" class="form-control" oninput="profiter()" placeholder="Price Ksh" required="" pattern="[0-9]+">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="form-label">Quantity<span class="text-danger">*</span></label>
                            <input type="text" id="quantity" class="form-control" placeholder="Quantity" required="" pattern="[0-9]+">
                        </div>
                    </div>
                    <div class =" col-md-4">
                        <div>
                            <label class="form-label">Arrival Date</label>
                            <input type="date" name="arrivaldate" id= "arrival-date" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <label class="form-label">Expiry Date<span class="text-danger">*</span></label>
                            <input type="date" name="expirydate" id="expiry-date" class="form-control">
                        </div>
                    </div> 
                </div>
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary ">Save Changes</button>
            </div>

        </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

 




<div id="create-catergory" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog ribbon-box border shadow-none mb-lg-0">
        <form action="javascript:void(0);" id='caterform' onsubmit="getnewcategory()">

        <div class="modal-content">
            
             

            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add Catergory</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body">
                <span id='catergorywaiter'></span>
                

                <div class="row gy-4 mb-3">
                    <div class="col-md-12">
                        <div>
                            <label class="form-label">Catergory Name<span class="text-danger">*</span></label>
                            <input type="text"  style="text-transform: uppercase;" id="catergoryvalue" class="form-control" placeholder="Enter Catergory" required="" minlength="3" maxlength="50" value="" title="from 3 upto 50 characters">
                        </div>
                    </div>
                    
                </div>
                <div class="row gy-4 mb-3">
                    <div class="col-md-12">
                        <input type="text" id='catergoryactions' value="create" hidden>
                        
                    </div>
                </div>
                
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary ">Save Changes</button>
            </div>

        </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

 

<!-- //////CONFIMARION -->


<div id='confirmation' class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body text-center p-5">
                    
                    <img src="assets/images/warning-icon.png" width="20%">
                    
                    <div class="mt-4">
                        <h4 class="mb-3">Are Sure?</h4>
                        <p class="text-muted mb-4" id='warningsms'>This action cannot be reversed</p>
                        <div class="hstack gap-2 justify-content-center">
                            <a href="javascript:void(0);" id='warningconfirm' data-bs-dismiss="modal" class="btn btn-success">Yes! Trash</a>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No! Close</button>
                            
                        </div>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>


