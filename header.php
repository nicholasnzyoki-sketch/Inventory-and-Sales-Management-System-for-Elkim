<?php 
session_start();
if (!isset($_SESSION['loggedin'])) {
echo ("<script LANGUAGE='JavaScript'>
   
    window.location.href='login';
    </script>");
}

?>

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>ELKIM INVENTORY CHEMISTRY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/new-logo-dark.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!-- jsvectormap css -->
    <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />
     <!-- plugin css -->
    <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

 <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <div id="toprightnotification" class="toastify toastify-right toastify-top " style="transform: translate(0px); top: 15px;" ></div>
<script type="text/javascript">
    
    function toastclose() {
        document.getElementById("toprightnotification").classList.remove("on"); 
    }
</script>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box horizontal-logo">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-dark.png" alt="" height="17">
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="" height="17">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

           
            </div>

            <div class="d-flex align-items-center">

                <div class="dropdown d-md-none topbar-head-dropdown header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-search fs-22"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                
                

                
                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-toggle="fullscreen">
                        <i class='bx bx-fullscreen fs-22'></i>
                    </button>
                </div>

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                        <i class='bx bx-moon fs-22'></i>
                    </button>
                </div>

                <div class="dropdown topbar-head-dropdown ms-1 header-item" id="notificationDropdown">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                        <i class='bx bx-bell fs-22'></i>
                       
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">

                        <div class="dropdown-head bg-primary bg-pattern rounded-top">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0 fs-16 fw-semibold text-white"> Notifications </h6>
                                    </div>
                                    
                                </div>
                            </div>

                            

                        </div>

                        <div class="tab-content position-relative" id="notificationItemsTabContent">
                            <div class="tab-pane fade show active py-2 ps-2" id="all-noti-tab" role="tabpanel">
                                <div data-simplebar style="max-height: 300px;" class="pe-2">
                                   <!--  <div class="text-reset notification-item d-block dropdown-item position-relative">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-soft-info text-info rounded-circle fs-16">
                                                    <i class="bx bx-badge-check"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <a href="#!" class="stretched-link">
                                                    <h6 class="mt-0 mb-2 lh-base">Your <b>Elite</b> author Graphic
                                                        Optimization <span class="text-secondary">reward</span> is
                                                        ready!
                                                    </h6>
                                                </a>
                                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                    <span><i class="mdi mdi-clock-outline"></i> Just 30 sec ago</span>
                                                </p>
                                            </div>
                                            <div class="px-2 fs-15">
                                                <div class="form-check notification-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="all-notification-check01">
                                                    <label class="form-check-label" for="all-notification-check01"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="empty-notification-elem">                           <div class="w-25 w-sm-50 pt-3 mx-auto">                             <img src="assets/images/svg/bell.svg" class="img-fluid" alt="user-pic">                         </div>                          <div class="text-center pb-5 mt-2">                             <h6 class="fs-18 fw-semibold lh-base">Hey! You have no any notifications </h6>                          </div>                      </div>

                                    <div class="my-3 text-center view-all">
                                        <button type="button" class="btn btn-soft-success waves-effect waves-light">View
                                            All Notifications <i class="ri-arrow-right-line align-middle"></i></button>
                                    </div>
                                </div>

                            </div>

                            
                          

                            <div class="notification-actions" id="notification-actions">
                                <div class="d-flex text-muted justify-content-center">
                                    Select <div id="select-content" class="text-body fw-semibold px-1">0</div> Result <button type="button" class="btn btn-link link-danger p-0 ms-3" data-bs-toggle="modal" data-bs-target="#removeNotificationModal">Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user" src="<?php echo($_SESSION['profile']);?>" alt="Header Avatar">
                            <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text"><?php echo(strtoupper($_SESSION['fname'] )); echo(" "); echo(strtoupper($_SESSION['lname'])  ); ?></span>
                                <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Active</span>
                            </span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <h6 class="dropdown-header">Welcome <?php echo(strtoupper($_SESSION['fname'] ));?></h6>
                        <a class="dropdown-item" href="javascript:void(0)" onclick="systemupdater(info='Please wait Update in progress',sms='System is now upto date')"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Update System</span></a>
                        <a class="dropdown-item" onclick="systemupdater(info='Please wait Back up in progress',sms='System Back up Complete')"><i class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Back Up </span></a>
                        <a class="dropdown-item" href="javascript:void(0)" onclick="systemrestart()" ><i class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Restart System</span></a>
                        <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas"><span class="badge bg-soft-success text-success mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>

                        <a class="dropdown-item" href="javascript:void(0)" onclick="logout()" ><i class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Log out</span></a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="17">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="dashboard"  >
                                <i class="ri-dashboard-2-line"></i> <span >DASHBOARD</span>
                            </a>
                            
                        </li>
                          <li class="nav-item">
                            <a class="nav-link menu-link" href="sales" >
                                <i class="ri-apps-2-line"></i> <span >CREATE SALE</span>
                            </a>
                        </li> 


                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#producttab" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="producttab">
                                <i class=" ri-stack-line "></i> <span >PRODUCTS</span>
                            </a>
                            <div class="collapse menu-dropdown" id="producttab">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a  class="nav-link" href="products" > Products</a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="catergory"  class="nav-link" > Catergory</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#reporttab" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="producttab">
                                <i class="ri-profile-line"></i> <span >REPORTS</span>
                            </a>
                            <div class="collapse menu-dropdown" id="reporttab">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" class="nav-link" > Profit and Loss</a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="apps-calendar.html" class="nav-link" > Product Quantity</a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="apps-calendar.html" class="nav-link" > Stock Report</a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="apps-calendar.html" class="nav-link" > Product Report</a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="apps-calendar.html" class="nav-link" > Sales Report</a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="apps-calendar.html" class="nav-link" > Users Report</a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="apps-calendar.html" class="nav-link" > Top Selling Products</a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="apps-calendar.html" class="nav-link" > Supplier Report</a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="apps-calendar.html" class="nav-link" > Custom Report</a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="apps-calendar.html" class="nav-link" > Purchase Report</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#payments-report" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEmail" data-key="t-email">Payments Report</a>
                                        <div class="collapse menu-dropdown" id="payments-report">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="apps-mailbox.html" class="nav-link" >Cash Payment</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-mailbox.html" class="nav-link" >Electronic Payment</a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </li>
                                    
                                    
                                </ul>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#userstab" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="producttab">
                                <i class="ri-user-line"></i> <span >PEOPLE</span>
                            </a>
                            <div class="collapse menu-dropdown" id="userstab">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="customers" class="nav-link" > Customers</a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="suppliers" class="nav-link" > Suppliers</a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="system-users" class="nav-link" > System Users</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                      
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#settingstab" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="producttab">
                                <i class="ri-settings-2-line "></i> <span >SETTINGS</span>
                            </a>
                            <div class="collapse menu-dropdown" id="settingstab">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" class="nav-link" > System Settings</a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="javascript:void(0)" onclick="systemupdater(info='Please wait Back up in progress',sms='System Back up Complete')"  class="nav-link" > Back Up</a>
                                    </li>
                                     <li class="nav-item">
                                        <a href="javascript:void(0)" onclick="systemupdater(info='Please wait Update in progress',sms='System is now upto date')" class="nav-link" >Update System</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0)" onclick="systemrestart()" class="nav-link" >Restart System</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="javascript:void(0)" onclick="logout()">
                                <i class="ri-login-circle-line "></i> <span >LOG OUT</span>
                            </a>
                        </li>


                        

                       

                        

                        

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div> 

