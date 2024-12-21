<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="../assert/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assert/css/sb-admin-2.min.css" rel="stylesheet">

</head>


<body id="page-top">

<div class="main">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SD Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Student Data</span></a>
            </li>

            <!-- Divider -->
            


            <!-- Nav Item - Pages Collapse Menu -->

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Pages
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="create.php" target="_blank">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Form</span>
                </a>
               
            </li>

            
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="read.php" target="_blank">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data</span></a>
            </li>

           <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="update.php" target="_blank">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Update</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            
            <li class="nav-item">
                <a class="nav-link" href="login.php" target="_blank">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>LOGIN</span></a>
            </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
            
            <li class="nav-item">
                <a class="nav-link" href="singup.php" target="_blank">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>SIGN UP</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

         

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="assert/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Student Information</h1>
                        
                                
                    </div>
                    <div>
                    
<div class="container-fluid">
<div class="container ">
    <div class="row">
        <div class="col">
        <div class="bg-dark text-white text-center rounded p-2 m-2 display-5">Admission form</div>
            <form action="progarm.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <!-- name -->
                    <label for="" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="name" required>
                    </div>
                    <div class="col">
                        <!-- fname -->
                    <label for="" class="form-label">Father Name</label>
                    <input type="text" class="form-control" name="fname" placeholder="father name" required>
                    </div>
                    </div>
                    
                    <div class="row">
                        <div class="col">
                            <!-- address -->
                            <label for="" class="form-label">Address</label>
                            <textarea name="address" class="form-control" required></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <!-- age -->
                            <label for="" class="form-label">Age</label>
                            <input type="number" name="age" class="form-control" required> 
                        </div>
                        <div class="col">
                            <!-- dob -->
                            <label for="" class="form-label">DOB</label>
                            <input type="date" name="dob" class="form-control" required> 
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <!-- dom -->
                            <label for="" class="form-label">Domicile</label>
                            <input type="text" name="dom" class="form-control" placeholder="...." required>
                        </div>
                        <div class="col">
                            <!-- rel -->
                            <label for="" class="form-label">Religion</label>
                            <input type="text"name="rel" class="form-control" placeholder="...." required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <!-- num -->
                             <label for="" class="form-label">Phone No</label>
                            <input type="number" placeholder="Number" name="num" class="form-control" required> 
                        </div>
                        <div class="col">
                            <!-- cnic -->
                            <label for="" class="form-label">Cnic No</label>
                            <input type="number" class="form-control" name="cnic" placeholder="don't add dash" required> 
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <!-- email -->
                            <label for="" class="form-label">Email ID</label>
                            <input type="email" name="email" class="form-control" placeholder="abc@gmail.com" required>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col">
                            <!-- gender -->
                            <p>Gender</p>
                            <label for="" class="form-label">Male</label>
                            <input type="radio" class="form-radio-input" name="gender" value="Male" required>
                            <label for="" class="form-label">Female</label>
                            <input type="radio"  class="form-radio-input" name="gender" value="Female" required> 
                        </div>
                        <div class="col">
                            <!-- trade -->
                            <label for="" class="form-label">Trade</label>
                            <input type="text" placeholder="Course name" name="trade" class="form-control" required>
                        </div>
                    </div>

                    
                    <div class="row">
                        <div class="col">
                            <!-- gender -->
                            <p>Hobbies</p>
                            <input type="checkbox" class="form-check-input" name="hoby[]" value="Cricket" >Cricket &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" class="form-check-input" name="hoby[]" value="Editing" >Editing &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <br>
                            <input type="checkbox" class="form-check-input" name="hoby[]" value="Cooking" >Cooking &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="checkbox" class="form-check-input" name="hoby[]" value="Dancing" >Dancing &nbsp;&nbsp;&nbsp;&nbsp;
                            <span class="was-validated">

                            </span>
                            </div>
                        <div class="col">
                            <!-- trade -->
                            <p>Country</p>
                            <select name="dropdown" >
                                <option selected disabled>Choose country</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Iran">Iran</option>
                                <option value="China">China</option>
                                <option value="Turkey">Turkey</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <!-- img -->
                            <label for="" class="form-label">Image</label>
                            <input type="file" class="form-control" name="img" required>
                        </div>
                    </div>
                    <!-- btn_submit -->
                    <input type="submit" class="btn btn-lg btn-outline-dark mt-3" name="btn_submit">
                    <!-- form end -->
                </form>
        </div>
    </div>
</div>
</div>
</div>
                   
                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
<!-- end .main container -->
</div>    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../assert/vendor/jquery/jquery.min.js"></script>
    <script src="../assert/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assert/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assert/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../assert/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../assert/js/demo/chart-area-demo.js"></script>
    <script src="../assert/js/demo/chart-pie-demo.js"></script>

</body>

</html>