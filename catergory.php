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
                                <h4 class="mb-sm-0" id='title-page-01'>Product Catergory</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item active" id='title-page-02'>Product Catergory</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <span id="update-view"></span>

                   <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                               <div class="card-header border-0 align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">Catergory </h4>
                                            <div>
                                                <button type="button" class="btn btn-soft-secondary btn-sm" onclick="formresetter(form='catergory')" data-bs-toggle="modal" data-bs-target="#create-catergory">
                                                   + CATERGORY
                                                </button>
                                                <button type="button" class="btn btn-soft-secondary btn-sm" onclick="exportTableToExcel('scroll-horizontal', 'CATERGORY')">
                                                  EXPORT
                                                </button>
                                                
                                               
                                            </div>
                                        </div><!-- end card header -->
                                <div class="card-body">
                                    <table id="scroll-horizontal"  class="table nowrap align-middle" style="width:100%">
                                        <thead>
                                            <tr>
                                               
                                                <th>#</th>
                                                
                                                <th>Catergory Name</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
<?php
include('connection/db.php');
$sql = "SELECT catergory_id, catergory_name FROM catergory WHERE status='0'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $count=0;
    while($row = $result->fetch_assoc()) {
        $count=$count+1;
    echo(" <tr>
                                               
                                                <td>{$count}</td>
                                                
                                               
                                                <td class='text-primary'><b>{$row["catergory_name"]}</b></td>
                                               
                                                <td>
                                                    <div class='dropdown d-inline-block'>
                                                        <button class='btn btn-soft-secondary btn-sm dropdown' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
                                                            <i class='ri-more-fill align-middle'></i>
                                                        </button>
                                                        <ul class='dropdown-menu dropdown-menu-end'>
                                                            
                                                            <li><a class='dropdown-item edit-item-btn' data-bs-toggle='modal' data-bs-target='#create-catergory'  onclick=\"globaleditor(modal='catergory',id='{$row["catergory_id"]}')\"><i class='ri-pencil-fill align-bottom me-2 text-muted'></i> Edit</a></li>
                                                            <li>
                                                                <a class='dropdown-item remove-item-btn' data-bs-toggle='modal' data-bs-target='#confirmation' onclick=\"globaldeleter(id='{$row["catergory_id"]}',db='catergory')\">
                                                                    <i class='ri-delete-bin-fill align-bottom me-2 text-muted'></i> Delete
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>");
  }
}

?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-lg-4">
                             <form action="javascript:void(0);" onsubmit="getnewcategory()">

                            <div class="card">
                               <div class="card-header border-0 align-items-center d-flex">
                                            <h4 class="card-title mb-0 flex-grow-1">Create Catergory</h4>
                                            
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="row gy-4 mb-3">
                                        <div class="col-md-12">
                                        <div>
                                            <label class="form-label">Catergory Name<span class="text-danger">*</span></label>
                                            <input type="text"  style="text-transform: uppercase;" id="catergory" class="form-control" placeholder="Enter Catergory Name" required="" autocomplete="off" minlength="3" maxlength="50" value="" title="from 3 upto 50 characters">
                                        </div>
                                    </div>
                                </div>

                                <input type="text" id='catergoryaction' value="create" hidden >
                                <div class="d-grid gap-2" >
                                <button class="btn btn-primary" type="submit">SAVE</button>
                                
                                </div>



                                </div>
                            </div>
                
                        </div></form>

                    </div><!--end row-->

<?php
include("footer.php");
?>