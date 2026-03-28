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
                    <span id="update-view"></span>

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
                                                           
                                                            
                                                            <li>
                                                                <a class='dropdown-item remove-item-btn' data-bs-toggle='modal' data-bs-target='#confirmation' onclick=\"globaldeleter(id='{$row["s_id"]}',db='suppliers')\">
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