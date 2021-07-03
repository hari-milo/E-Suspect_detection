<?php
include 'Header.php';
include '../con1.php';
session_start();
$pid=$_SESSION['pid'];
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
            </ul>
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
                <a href="Criminal.php" class="nav-link active">
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
                <h1 class="m-0 text-dark">Criminal Details</h1>
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
               
              <form action="Criminal.php" method="post" enctype="multipart/form-data">
                <div class="card-header">
                  <h5 class="card-title m-0"><i class="fa fa-user-plus"></i> Add here</h5>
                </div>
                  <div class="card-body">
                    <div class="row">
                    <div class="col-md-6 col-sm-6 col-xm-12 ">
                        <label for="Name">Select FIR Number*</label>
                        <select name="firnumber" id="firnumber" class="form-control" title="Select your FIR Number" enabled="false">
                        <option disabled selected>Select FIR Number</option>
                        <?php
                       $sql1 = "SELECT * FROM tbl_fir where Station='$pid' and Policeremark='Charge Sheet Issued'";
                        $result1 = mysqli_query($conn, $sql1);
                        while($row=mysqli_fetch_array($result1)) 
                        {
                         $dp_id=$row["Firnumber"];
                         echo "<option value='$dp_id'style='color: black'>".$row["Firnumber"]."</option>";
                        }
                        ?>
                        </select>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xm-12 ">
                        <label for="Name">Crime Date *</label>
                        <input type="date" name="crdte" required class="form-control" id=""
                          placeholder="Enter your Police-Id " title="Enter your Police-Id"
                          />
                      </div>
                      <div class="col-md-6 col-sm-6 col-xm-12 ">
                        <label for="Name">Crime Time *</label>
                        <input type="time" name="crdtime" required class="form-control" id=""
                          placeholder="Enter your Police-Id " title="Enter your Police-Id"
                          />
                      </div>
                      <div class="col-md-6 col-sm-6 col-xm-12 ">
                        <label for="Name">Select Prison*</label>
                        <select name="Prison" id="dis" class="form-control" title="Select Prison" enabled="false">
                        <option disabled selected>Select Prison</option>
                        <?php
                       $sql1 = "SELECT * FROM tbl_prison order by Prison ASC";
                        $result1 = mysqli_query($conn, $sql1);
                        while($row=mysqli_fetch_array($result1)) 
                        {
                         $dp_id=$row["Prisonid"];
                         echo "<option value='$dp_id'style='color: black'>".$row["Prison"]."</option>";
                        }
                        ?>
                        </select>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xm-12 ">
                        <label for="Name">Select Court*</label>
                        <select name="Court" id="dis" class="form-control" title="Select Court" enabled="false">
                        <option disabled selected>Select Court</option>
                        <?php
                       $sql1 = "SELECT * FROM tbl_court order by Courtname ASC";
                        $result1 = mysqli_query($conn, $sql1);
                        while($row=mysqli_fetch_array($result1)) 
                        {
                         $dp_id=$row["Courtid"];
                         echo "<option value='$dp_id'style='color: black'>".$row["Courtname"]."</option>";
                        }
                        ?>
                        </select>
                      </div>
                      <hr>
                      <div class="col-md-12 mb-3">
                        <h3 class="card-title text-bold">Criminal Details</h3>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xm-12 ">
                        <label for="Name">Name *</label>
                        <input type="text" name="name" required class="form-control" id=""
                          placeholder="Enter your Police Name " title="Enter your Police Name"
                          />
                      </div>
                      <div class="col-md-6 col-sm-6 col-xm-12 ">
                        <label for="Name">Phone Number *</label>
                        <input type="text" name="txtwphone" required class="form-control" id=""
                          placeholder="Enter your Phone Number" title="Enter your Phone Number"
                          pattern="[0-9]{10,12}" />
                      </div>
                      <div class="col-md-6 col-sm-6 col-xm-12 ">
                        <label for="Name">Height *</label>
                        <input type="text" name="Height" required class="form-control" id=""
                          placeholder="Enter Height " title="Enter Height"
                          />
                      </div>
                      <div class="col-md-6 col-sm-6 col-xm-12 ">
                        <label for="Name">Weight *</label>
                        <input type="text" name="Weight" required class="form-control" id=""
                          placeholder="Enter Weight " title="Enter Weight"
                          />
                      </div>
                      <div class="col-md-6 col-sm-6 col-xm-12 ">
                        <label for="Name">DOB *</label>
                        <input type="date" name="dob" required class="form-control" id=""
                          placeholder="Enter Date of birth " title="Enter Date of birth"
                          />
                      </div>
                      <div class="col-md-12 col-sm-12 col-xm-12 ">
                        <label for="Name">Address *</label>
                        <textarea name="Address" id="" rows="3" class="form-control"
                          placeholder="Enter current address" title="Enter current address" required></textarea>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xm-12 ">
                        <label for="Name">City *</label>
                        <input type="text" name="city" required class="form-control" id=""
                          placeholder="Enter City " title="Enter City"
                          />
                      </div>
                      <div class="col-md-6 col-sm-6 col-xm-12 ">
                        <label for="Name">State *</label>
                        <input type="text" name="State" required class="form-control" id=""
                          placeholder="Enter State " title="Enter State"
                          />
                      </div>
                      <div class="col-md-6 col-sm-6 col-xm-12 ">
                        <label for="Name">Country *</label>
                        <input type="text" name="country" required class="form-control" id=""
                          placeholder="Enter Country " title="Enter Country"
                          />
                      </div>
                      <div class="col-md-6 col-sm-6 col-xm-12 ">
                        <label for="Name">Zipcode *</label>
                        <input type="text" name="zipcode" required class="form-control" id=""
                          placeholder="Enter Zipcode " title="Enter Zipcode"
                          />
                      </div>
                      <div class="col-md-6 col-sm-6 col-xm-12 ">
                        <label for="Name">Photo *</label>
                        <input type="file" name="fileupload" required class="form-control" id=""
                          placeholder="Enter Zipcode " title=""
                          />
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
      <script src="../sweetalert.js"></script>
      <?php  
if(isset($_POST['submit']))
 {
$firnumber=$_POST['firnumber'];
$crdte=$_POST['crdte'];
$crdtime=$_POST['crdtime'];
$Prison=$_POST['Prison'];
$Court=$_POST['Court'];
$name=$_POST['name'];
$phone=$_POST['txtwphone'];
$Height=$_POST['Height'];
$Weight=$_POST['Weight'];
$dob=$_POST['dob'];
$Address=$_POST['Address'];
$city=$_POST['city'];
$State=$_POST['State'];
$country=$_POST['country'];
$zipcode=$_POST['zipcode'];
$file=$_FILES['fileupload'];
$filename=$_FILES['fileupload']['name'];
$fileTmpName=$_FILES['fileupload']['tmp_name'];
$fileSize=$_FILES['fileupload']['size'];
$fileError=$_FILES['fileupload']['error'];
$filetype=$_FILES['fileupload']['type'];
$fileExt= explode('.', $filename);
$fileActualExt=  strtolower(end($fileExt));
$allowed= array('jpg','jpeg','png');
$criminalid=0;
$count = mysqli_query($conn, "select * from tbl_criminaldetails where Phone = '$phone' 
and Height='$Height' and Weight='$Weight' and DOB='$dob'");
if(mysqli_num_rows($count) != 0 )
{
  while ($row = mysqli_fetch_array($count)) 
  {
    $criminalid=$row['Crmid'];
  }
  $sql= "INSERT INTO `tbl_case`(`Firnumber`, `Crmid`) VALUES ('$firnumber','$criminalid')";
if (!mysqli_query($conn,$sql))
        {
    die('error inserting new data');
	}
  $query="update tbl_fir set Policeremark='Completed' where Firnumber='$firnumber'";
  if(mysqli_query($conn, $query))
  {
    echo "<script>swal('Good job!','Case Details added successfully!','success' ) </script>"; 
  } 
   
}
else
{
if(in_array($fileActualExt, $allowed))
{
    if($fileError === 0)
    { 
        if($fileSize<1000000)
        {
            $fileNameNew= uniqid('',true).".".$fileActualExt;
            $filedest="./Timage/".$fileNameNew;
            move_uploaded_file($fileTmpName,$filedest);
$sql= "INSERT INTO `tbl_criminaldetails`(`Firnumber`, `Crimedate`, `Crimetime`, `Prison`, `Court`, `Name`, `Height`, `Weight`, `DOB`, `Phone`, `Address`, `City`, `State`, `Country`, `Zipcode`, `Photo`) VALUES ('$firnumber','$crdte','$crdtime','$Prison','$Court','$name','$Height','$Weight','$dob','$phone','$Address','$city','$State','$country','$zipcode','$filedest')";
if (!mysqli_query($conn,$sql))
        {
    die('error inserting new data');
	}   
        }
        else 
        {
            echo"Too big";
        }  
    }
    else 
    {         echo"There was an error";
    
    }
}
 else
  {
    echo"You Cann't upload File";
  } 
  $count = mysqli_query($conn, "select * from tbl_criminaldetails where Phone = '$phone' 
and Height='$Height' and Weight='$Weight' and DOB='$dob'");
  while ($row = mysqli_fetch_array($count)) 
  {
    $criminalid=$row['Crmid'];
  }
  $sql= "INSERT INTO `tbl_case`(`Firnumber`, `Crmid`) VALUES ('$firnumber','$criminalid')";
  if (!mysqli_query($conn,$sql))
          {
      die('error inserting new data');
    } 
    $query="update tbl_fir set Policeremark='Completed' where Firnumber='$firnumber'";
if(mysqli_query($conn, $query))
{
  echo "<script>swal('Good job!','Criminal Details added successfully!','success' ) </script>"; 
}
     
} 
 }
?>

<?php
      include 'Footer.php';
      ?>