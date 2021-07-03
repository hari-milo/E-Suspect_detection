<?php
include 'Header.php';
include '../con1.php';
?>


  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-dark navbar-success">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i
        ></a>
            </li>
            <!-- <li class="nav-item d-none d-sm-inline-block">
      <a href="index3.html" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
    </li> -->
        </ul>

        <!-- SEARCH FORM -->
        <!-- <form class="form-inline ml-3">
    <div class="input-group input-group-sm">
      <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form> -->

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->

            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header"><i class="fas fa-cogs"></i> Manage account</span
          >
          <div class="dropdown-divider"></div>

          
          <div class="dropdown-divider"></div>
          <a href="../Login.php" class="dropdown-item">
            <i class="fas fa-sign-out-alt mr-2"></i>Logout
          </a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
    </ul>
  </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-light-green elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link text-white navbar-purple">
          <img
            src="../Asset/Image/b28ad6a5a6eb67de25f801ddb4f2e602.jpg"
            alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: .8"
          />
          <span class="brand-text font-weight-light">Crime Record</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img
                src="../Asset/Image/b28ad6a5a6eb67de25f801ddb4f2e602.jpg"
                class="img-circle elevation-2"
                alt="User Image"
              />
            </div>
            <div class="info">
              <a href="#" class="d-block"></a>
              <a href="#" class="d-block"><?php echo date("d-M-Y");?></a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
with font-awesome or any other icon font library -->
<li class="nav-item ">
  <a href="home.php" class="nav-link " >
      <i class="nav-icon fas fa-user"></i>
      <p>
          Home
      </p>
  </a>
</li>
                <li class="nav-item active">
                    <a href="Addcate.php" class="nav-link active">
                        <i class="nav-icon fas fa-plus-circle"></i>
                        <p>
                        Crime Details
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="police.php" class="nav-link ">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                        Police Registration 
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              FIR 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="FIR.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Firhistory.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>FIR History</p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="Chargesheethistory.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chargesheet History</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="ViewFir.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View FIR</p>
                </a>
              </li>
              <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              Criminal Details
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="Criminal.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Search.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Search</p>
                </a>
              </li>
              
            </ul>
            </ul>
          </li>
                
            </ul>
        </nav>
        </div>
      </aside>
  
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Crime Details</h1>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
              <!-- Left col -->
              <section class="col-lg-12 connectedSortable">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="card" data-aos="fade-up">
                  <div class="card-header">
                    
                    <div class="card-tools"></div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive">
                    <div class="col-md-12">
              <div class="card card-warning card-outline elevation-2  " data-aos="fade-up">
               
              <form action="Addcate.php" method="post">
                <div class="card-header">
                  <h5 class="card-title m-0"><i class="fa fa-user-plus"></i> Add here</h5>
                </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xm-12 ">
                        <label for="Name">Category Name *</label>
                        <input type="text" name="txtname" required class="form-control" id="" 
                          placeholder="Please enter Category Name" title="Enter your Category name" />
                      </div>
                      <div class="col-md-12 col-sm-12 col-xm-12 ">
                        <label for="Name">Description *</label>
                        <textarea name="txtaddres" id="" rows="3" class="form-control"
                          placeholder="Enter  Description" title="Enter Description" required></textarea>
                      </div>
                      
                      <div class="col-md-12 my-2">
                      <button type="submit" class="btn btn-primary fa-pull-right elevation-2" title="Submit  form" name="submit">
                        Submit
                      </button>
                      <button type="reset" class="btn btn-secondary fa-pull-right elevation-2 mr-3"
                        title="Clear form detail">
                        Clear
                      </button>
                    </div>
              </div>
            </div>
                  </div>
                  <!-- /.card-body -->
                </div>

                <!-- /.card -->

                <!-- /.card -->
              </section>
              <!-- /.Left col -->
            </div>
            <!-- /.row (main row) -->
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <?php  
if(isset($_POST['submit']))
 {
$name=$_POST['txtname'];
$des=$_POST['txtaddres'];
$sql= "INSERT INTO `tbl_crimecategory`(`Categoryname`, `Description`) VALUES ('$name','$des')";
if (!mysqli_query($conn,$sql))
        {
    die('error inserting new data');
	}   
 }
 include 'Footer.php';
?>

     