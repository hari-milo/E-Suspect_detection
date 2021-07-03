<?php
include '../con1.php';
?>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Crime Record Management</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="../AdminLTE/plugins/fontawesome-free/css/all.min.css"
    />
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Tempusdominus Bbootstrap 4 -->
    <link
      rel="stylesheet"
      href="../AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"
    />
    <!-- iCheck -->
    <!-- <link rel="stylesheet" href="../../AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->
    <!-- JQVMap -->
    <!-- <link rel="stylesheet" href="../../AdminLTE/plugins/jqvmap/jqvmap.min.css"> -->
    <!-- Theme style -->
    <link rel="stylesheet" href="../AdminLTE/dist/css/adminlte.min.css" />
    <!-- overlayScrollbars -->
    <link
      rel="stylesheet"
      href="../AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"
    />
    <!-- Daterange picker -->
    <!-- <link rel="stylesheet" href="../../AdminLTE/plugins/daterangepicker/daterangepicker.css"> -->
    <!-- summernote -->
    <!-- <link rel="stylesheet" href="../../AdminLTE/plugins/summernote/summernote-bs4.css"> -->
    <!-- Google Font: Source Sans Pro -->
    <link
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="../Asset/css/style.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>

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

          <a href="../clogin.php" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> Change Password
          </a>
          <div class="dropdown-divider"></div>
          <a href="../Php/Terminate.php" class="dropdown-item">
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
                <a href="" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>FIR History</p>
                </a>
              </li>
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
                <h1 class="m-0 text-dark">FIR Details</h1>
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
                  <h5 class="card-title m-0"><i class="fa fa-user-plus"></i> Search here</h5>
                </div>
                  <div class="card-body">
                    <div class="row">
                    <div class="col-md-3 p-0 ">
                    <form action="" method="post">
                      <div class="input-group mb-3">
                        <!-- <input type="text" class="form-control" name="ser" id="ser" title="Name, id, Status" placeholder="Type keyword" onkeyup="showUser(this.value)" /> -->
                        <input type="text" class="form-control" name="ser" id="ser" title="Name, id, Status" placeholder="Type keyword" onkeyup="search()" />
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary" type="button" onclick="search()">
                            <i class="fa fa-search"></i>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                    </div>
              </div>
            </div>
                  
               
                <script>
                    // function to perform search based on multiple inputs
                    function search() {
                      $.ajax({
                        type: "GET",
                        url: "ajax/search.php?fromDate=" + $('#fromDate').val() + "&toDate=" + $('#toDate').val() + "&pId=" + $('#panchayatId').val() + "&key=" + $('#ser').val(),
                        success: function(data) {
                          document.getElementById("txtHint").innerHTML = data;
                        }
                      });
                    }
                  </script>
                  <!-- code for searching ends here -->
                  <div class="row">
                    <div id="txtHint" class="col-md-12 table-responsive" style="max-height: 100vh;overflow-x:scroll">
                      <table id="mytable" class="table table-striped table-hover table-bordered  border-top ">
                        <thead>
                          <tr>
                            <th>FIR Number</th>
                            <th>Crime Type</th>
                            <th>Name of Accused</th>
                            <th>Complainer Name</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>Address</th>

                            <th>FIR Date</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $count = mysqli_query($conn, "select * from tbl_fir a,tbl_crimecategory b  where a.crime=b.Crimeid  and a.Station='1'");

                          while ($row = mysqli_fetch_array($count)) {

                          ?>

                            <tr>
                              <td>
                                <?php echo $row['Firnumber'] ?>
                              </td>
                              <td>
                                <?php echo $row['Categoryname'] ?>
                              </td>
                              <td>
                                <?php echo $row['Accused'] ?>
                              </td>
                              <td>
                                <?php echo $row['Name'] ?>
                              </td>
                              <td>
                                <?php echo $row['Gender'] ?>
                              </td>
                              <td>
                                <?php echo $row['parentageapplicant'] ?>
                              </td>
                              <td>
                                <?php echo $row['Phone'] ?>
                              </td>
                              <td>
                                <?php echo $row['Addrs'] ?>
                              </td>
                              <td>
                                <?php echo $row['Raccused'] ?>
                              </td>
                              <td>
                                <?php echo $row['Fdate'] ?>
                              </td>
                              <td>
                                <?php echo $row['Policeremark'] ?>
                              </td>
                              <td>
                                <?php echo $row['remarkdate'] ?>
                              </td>
                              <td>
                                <button type="submit" name="view" title="View" value="view" id="<?php echo $row['Pid']; ?>" onclick="showdet('<?php echo $row['Pid']; ?>')" class="btn bg-gradient-blue btn-sm round-rd elevation-2">
                                  <i class="fas fa-eye"></i>
                                </button>
                              </td>
                                
                              <td>
                                                                            <a href="Updateprson3.php?pid=<?php echo $row['Pid']?>" class="btn bg-gradient-indigo btn-sm round-rd elevation-2" title="Edit details"><i class="fas fa-pen"></i
                            ></a>
                                                                        </td>
                                                                        <td>
                            <a
                              href="../Php/Coronadelete.php?pid=<?php echo $row['Pid']; ?>"
                              class="btn bg-gradient-warning btn-sm round-rd elevation-2"
                              title="Edit details"
                              ><i class="fas fa-trash-alt"></i
                            ></a>
                          </td>

                            </tr>


                          <?php
                          }


                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
               
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
?>

      <footer class="main-footer">
       
        <div class="float-right d-none d-sm-inline-block">
          <!-- <b>Version</b> 3.0.3-pre -->
        </div>
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../AdminLTE/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../AdminLTE/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge("uibutton", $.ui.button);
    </script>
    <!-- Bootstrap 4 -->
    <script src="../AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <!-- <script src="../../AdminLTE/plugins/chart.js/Chart.min.js"></script> -->
    <!-- Sparkline -->
    <!-- <script src="../../AdminLTE/plugins/sparklines/sparkline.js"></script> -->
    <!-- JQVMap -->
    <!-- <script src="../../AdminLTE/plugins/jqvmap/jquery.vmap.min.js"></script> -->
    <!-- <script src="../../AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
    <!-- jQuery Knob Chart -->
    <!-- <script src="../../AdminLTE/plugins/jquery-knob/jquery.knob.min.js"></script> -->
    <!-- daterangepicker -->
    <!-- <script src="../../AdminLTE/plugins/moment/moment.min.js"></script> -->
    <!-- <script src="../../AdminLTE/plugins/daterangepicker/daterangepicker.js"></script> -->
    <!-- Tempusdominus Bootstrap 4 -->
    <!-- <script src="../../AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script> -->
    <!-- Summernote -->
    <!-- <script src="../../AdminLTE/plugins/summernote/summernote-bs4.min.js"></script> -->
    <!-- overlayScrollbars -->
    <script src="../AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../AdminLTE/dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../AdminLTE/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../AdminLTE/dist/js/demo.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
