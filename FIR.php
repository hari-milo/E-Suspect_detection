<?php
include 'Header.php';
include '../con1.php';
$mid=0;
$id=0;
$oid=0;
$pid=0;
session_start();
$pid=$_SESSION['pid'];
$user="Select * from tbl_fir where Station='$pid'";
$result1=  mysqli_query($conn, $user);
if(mysqli_num_rows($result1) != 0 )
{
  while($row=mysqli_fetch_array($result1))
  {
    $oid=$row['Firnumber'];
  }
  $result= explode('/', $oid);
  $mid= $result[0];
  $mid=$mid+1;
  $id=$result[1];  
  $id=$id+1;                                         
}
else
{
  $mid=7843;
  $id=34;
}
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
          <a href="../Php/Terminate.php" class="dropdown-item">
          <a href="../Login.php" class="dropdown-item">
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
                <li class="nav-item ">
                    <a href="Addcate.php" class="nav-link ">
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
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
              FIR 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="FIR.php" class="nav-link active">
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
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link ">
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
                <h1 class="m-0 text-dark">FIR</h1>
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
               
              <form action="FIR.php" method="post">
                <div class="card-header">
                  <h5 class="card-title m-0"><i class="fa fa-user-plus"></i> FIR Details</h5>
                </div>
                  <div class="card-body">
                    <div class="row">
                    <div class="col-md-6 col-sm-6 col-xm-12 ">
                        <label for="Name">FIR Number *</label>
                        <input type="text" name="fir" required class="form-control" id=""
                          placeholder="Format (1432/23)" title="Enter  FIR Number" readonly value="<?php echo $mid."/".$id; ?>"
                          />
                      </div>
                    <div class="col-md-6 col-sm-6 col-xm-12 ">
                        <label for="Name">Station Name *</label>
                        <select name="sata" id="dis" class="form-control" title="Select your District" enabled="false">
                        <option disabled selected>Select Station</option>
                        <?php
                       $sql1 = "SELECT * FROM tbl_policestation where Pid='$pid' order by Stationname ASC";
                        $result1 = mysqli_query($conn, $sql1);
                        while($row=mysqli_fetch_array($result1)) 
                        {
                         $dp_id=$row["Pid"];
                         echo "<option value='$dp_id'style='color: black'>".$row["Stationname"]."</option>";
                        }
                        ?>
                        </select>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xm-12 ">
                        <label for="Name">Crime Type *</label>
                        <select name="crime" id="dis" class="form-control" title="Select your District" enabled="false">
                        <option disabled selected>Select Crime Type</option>
                        <?php
                       $sql1 = "SELECT * FROM tbl_crimecategory order by Categoryname ASC";
                        $result1 = mysqli_query($conn, $sql1);
                        while($row=mysqli_fetch_array($result1)) 
                        {
                         $dp_id=$row["Crimeid"];
                         echo "<option value='$dp_id'style='color: black'>".$row["Categoryname"]."</option>";
                        }
                        ?>
                        </select>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xm-12 ">
                        <label for="Name">Name Accused *</label>
                        <input type="text" name="Accused" required class="form-control" id=""
                          placeholder="Enter your Accused Name " title="Enter  Accused Name"
                          />
                      </div>
                      <hr>
                      <div class="col-md-12 mb-3">
                        <h3 class="card-title text-bold">Complainer Details</h3>
                      </div>
                      <div class="col-sm-6">
                        <label for="">Name</label>
                        <input type="text" name="name" id="" class="form-control" title="Enter Name" placeholder="Enter Name">
                      </div>
                      <div class="col-md-6 col-sm-6 col-xm-12 ">
                        <label for="Name">Gender *</label>
                        <select name="gender" id="" class="form-control" title="Select your gender" required>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                          <option value="Other">Other</option>
                        </select>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xm-12 ">
                        <label for="Name">Phone Number *</label>
                        <input type="text" name="txtwphone" required class="form-control" id=""
                          placeholder="Enter your Phone Number" title="Enter your Phone Number"
                          pattern="[0-9]{10,12}" />
                      </div>
                      <div class="col-md-6 col-sm-6 col-xm-12 ">
                        <label for="Name">Parentage of Applicant *</label>
                        <input type="text" name="poa" required class="form-control" id=""
                          placeholder="Enter Parentage of Applicant" title="Enter Parentage of Applicant"/>
                      </div>
                      <div class="col-md-12 col-sm-12 col-xm-12 ">
                        <label for="Name">Address *</label>
                        <textarea name="txtaddres" id="" rows="3" class="form-control"
                          placeholder="Enter current address" title="Enter current address" required></textarea>
                      </div>
                      <div class="col-sm-6">
                        <label for="">Relation with accused person</label>
                        <input type="text" name="rname" id="" class="form-control" title="Enter Name" placeholder="Enter Name">
                      </div>
                      <div class="col-sm-6">
                        <label for="">Date</label>
                        <input type="date" name="dte" id=""  max="<?php echo date('Y-m-d');?>"
                          value="<?php echo date('Y-m-d');?>" class="form-control" title="Enter Name" placeholder="Enter Name">
                      </div>
                      <div class="col-md-12 col-sm-12 col-xm-12 ">
                        <label for="Name">Police Remark *</label>
                        <textarea name="remark" id="" rows="3" class="form-control"
                          placeholder="Enter Remark" title="Enter Remark" required></textarea>
                      </div>
                      <hr>
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
$sata=$_POST['sata'];
$fir=$_POST['fir'];
$crime=$_POST['crime'];
$poa=$_POST['poa'];
$Accused=$_POST['Accused'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$phone=$_POST['txtwphone'];
$addres=$_POST['txtaddres'];
$remark=$_POST['remark'];
$rname=$_POST['rname'];
$dte=$_POST['dte'];
$rdate=date('Y-m-d');
$sql= "INSERT INTO `tbl_fir`(`Firnumber`, `Station`, `crime`, `Accused`, `Name`, `Gender`, `parentageapplicant`, `Phone`, `Addrs`, `Raccused`, `Fdate`, `Policeremark`, `remarkdate`) VALUES ('$fir','$sata','$crime','$Accused','$name','$gender','$poa','$phone','$addres','$rname','$dte','$remark','$rdate')";
if (!mysqli_query($conn,$sql))
        {
    die('error inserting new data');
	}   
 }
 include 'Footer.php';
?>

      