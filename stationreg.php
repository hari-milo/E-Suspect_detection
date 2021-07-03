<?php
include 'con1.php';
?>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Crime Record Management</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./AdminLTE/plugins/fontawesome-free/css/all.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="./AdminLTE/dist/css/adminlte.min.css" />
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />

  <link rel="stylesheet" href="Asset/css/style.css" />
  <script type="text/javascript" src="Asset/app/MyApp.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
  <body class="hold-transition layout-top-nav"
  onload="load();">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
      <div class="container">
        

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3 ml-lang" id="navbarCollapse">
          <!-- Left navbar links -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="stationreg.php" class="nav-link">Register</a>
            </li>
            <li class="nav-item">
              <a href="Login.php" class="nav-link">Login</a>
            </li>
          
          </ul>

          <!-- SEARCH FORM -->
        </div>
      </div>
    </nav>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container">
          <div class="row mb-2">
            
            <!-- /.col -->
            <!-- <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Layout</a></li>
                  <li class="breadcrumb-item active">Top Navigation</li>
                </ol>
              </div> -->
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <script>
   function checkPass()
    {
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    var message = document.getElementById('confirmMessage');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    if(pass1.value == pass2.value){
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}  
        </script>
      <!-- Content Wrapper. Contains page content -->
      <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">
                Crime
                <small class="text-red">Record</small>
              </h1>
            </div>
            <!-- /.col -->
            <!-- <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Layout</a></li>
                  <li class="breadcrumb-item active">Top Navigation</li>
                </ol>
              </div> -->
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container">
          <div class="row">
            <!-- /.col-md-12 -->
            <div class="col-md-12">
              <form action="stationreg.php" method="post">
                <div class="card card-success card-outline elevation-2  " data-aos="fade-up">
                  <div class="card-header">
                    <h5 class="card-title m-0">Register here</h5>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xm-12 ">
                        <label for="Name">Station Name *</label>
                        <input type="text" name="txtname" required class="form-control" id="" 
                          placeholder="Please enter Station Name" title="Enter your name" />
                      </div>
                      <div class="col-md-12 col-sm-12 col-xm-12 ">
                        <label for="Name">Address *</label>
                        <textarea name="txtaddres" id="" rows="3" class="form-control"
                          placeholder="Enter current address" title="Enter current address" required></textarea>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xm-12 ">
                        <label for="Name">Email *</label>
                        <input type="text" name="email" required class="form-control" id=""
                          placeholder="Enter your email " title="Enter your email"
                          />
                      </div>
                      <div class="col-md-6 col-sm-6 col-xm-12 ">
                        <label for="Name">Phone Number *</label>
                        <input type="text" name="txtwphone" required class="form-control" id=""
                          placeholder="Enter your Phone Number" title="Enter your Phone Number"
                          pattern="[0-9]{10,12}" />
                      </div>
                      
                      <div class="col-md-6 col-sm-6 col-xm-12 ">
                        <label for="Name">Password *</label>
                        <input type="password" name="pass1" required class="form-control" id="pass1"
                          placeholder="Enter Password" title="Enter Password"
                          pattern="^\S{6,}$" />
                      </div>
                      <div class="col-md-6 col-sm-6 col-xm-12 ">
                        <label for="Name">Confirm Password *</label>
                        <input type="password" name="" required class="form-control" id="pass2"
                          placeholder="Enter Password" title="Enter Password"
                          onkeyup="checkPass(); return false;"/>
                          <span id="confirmMessage" class="confirmMessage"></span>
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
$add=$_POST['txtaddres'];
$email=$_POST['email'];
$phon=$_POST['txtwphone'];
$pass=$_POST['pass1'];
$pass1= md5($pass);
$sql= "INSERT INTO `tbl_policestation`(`Stationname`, `Address`, `Email`, `Phone`, `Pass`) VALUES ('$name','$add','$email','$phon','$pass1')";
if (!mysqli_query($conn,$sql))
        {
    die('error inserting new data');
	}   
 }
?>

     
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="./AdminLTE/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="./AdminLTE/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge("uibutton", $.ui.button);
    </script>
    <!-- Bootstrap 4 -->
    <script src="./AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
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
    <script src="./AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="./AdminLTE/dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="./AdminLTE/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="./AdminLTE/dist/js/demo.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
