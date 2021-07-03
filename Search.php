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
        </ul>

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
                <a href="Search.php" class="nav-link active">
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
               
              <form action="Search.php" method="post"  enctype="multipart/form-data">
                <div class="card-header">
                  <h5 class="card-title m-0"><i class="fa fa-user-plus"></i> Search here</h5>
                </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xm-12 ">
                        <label for="Name">Upload Photo*</label>
                        <input type="file" name="fileupload" required class="form-control" id="" 
                          placeholder="Please enter Category Name" title="Enter your Category name" />
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
               

              
      <?php  
if(isset($_POST['submit']))
 {
    $target_dir = "./uploads/";
    $target_file = $target_dir . basename($_FILES["fileupload"]["name"]);
    move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file);
    
    $output=shell_exec("C:\\xampp\\htdocs\\CrimeRecord\\PoliceStation\\search.py   $target_file");
    echo($output);
    $result= explode(',', $output);
    $match=$result[0];
    print($match);
    if($match>50)
    {
        $id=$result[1];
        $id1=str_replace(' ', '', $id);
        $criminal="Select * from tbl_criminaldetails where 	Crmid =$id1";
      //  echo $criminal;
        $result1=  mysqli_query($conn, $criminal);
        if ($row = mysqli_fetch_array($result1)) 
        {
            $actimage=$row['Photo'];
            $real=shell_exec("C:\\xampp\\htdocs\\CrimeRecord\\PoliceStation\\face.py  $target_file $actimage");
            //print_r($real);
            if ($real==1)
            {
                $criminal1="Select * from tbl_criminaldetails where Crmid=$id1";
                $result2=  mysqli_query($conn, $criminal1);
                ?>
    
      <hr>
                      <div class="col-md-6 mb-3">
                        <h3 class="card-title text-bold">Criminal Details</h3>
                      </div>
                      <?php
                      
                      while ($row = mysqli_fetch_array($result2))
                      {
                      
                      ?>
                      <br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                                              <div class="card-inner p-3 d-flex flex-column align-items-center"> <img src="<?php echo $row['Photo'] ?>" width="100">
                    </div>
                     <br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                        <h3 class="card-title">Criminal Name : <?php echo $row['Name'] ?></h3>
                      </div>
                      <br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                        <h3 class="card-title">Height : <?php echo $row['Height'] ?></h3>
                      </div>
                      <br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                        <h3 class="card-title">Weight : <?php echo $row['Weight'] ?></h3>
                      </div>
                      <br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                        <h3 class="card-title">DOB : <?php echo $row['DOB'] ?></h3>
                      </div>
                      <br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                        <h3 class="card-title">Phone : <?php echo $row['Phone'] ?></h3>
                      </div>
                      <br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                        <h3 class="card-title">Address : <?php echo $row['Address'] ?></h3>
                      </div>
                      <br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                        <h3 class="card-title">City : <?php echo $row['City'] ?></h3>
                      </div><br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                        <h3 class="card-title">State : <?php echo $row['State'] ?></h3>
                      </div>
                      <br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                        <h3 class="card-title" align="center">Country : <?php echo $row['Country'] ?></h3>
                      </div>
                      <br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                        <h3 class="card-title">Zipcode : <?php echo $row['Zipcode'] ?></h3>
                      </div>
                      <div class="">
                       
                      </div>
                      <br>
    
                      <?php
                      }
                      ?>
                      <hr>
                      <div class="col-md-6 mb-3">
                        <h3 class="card-title text-bold">Case Details</h3>
                      </div>
                      <?php
                      $criminal2="Select * from tbl_criminaldetails a, tbl_fir b, tbl_prison c,tbl_court d,tbl_chargesheet e,tbl_policestation f where b.Station=f.Pid and a.Firnumber=b.Firnumber and a.Prison=c.Prisonid and a.Court=d.Courtid and a.Firnumber=e.Firnumber and a.Crmid=$id1";
                      $result3=  mysqli_query($conn, $criminal2);
                      $criminal3="Select count(Firnumber) as a,Firnumber from tbl_case where Crmid=$id1";
                      $result4=  mysqli_query($conn, $criminal3);
                      $a=array();
                      $number=0;
                      while ($row2 = mysqli_fetch_array($result4))
                      {
                        $number=$row2['a'];
                      }
                      $criminal4="Select Firnumber from tbl_case where Crmid=$id1";
                      $result5=  mysqli_query($conn, $criminal4);
                      while ($row3 = mysqli_fetch_array($result5))
                      {
                        array_push($a,$row3['Firnumber']);
                      }
                      ?>
                       <br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                        <h3 class="card-title">Number of cases : <?php echo $number; ?></h3>
                      </div>
                      <br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                        <h3 class="card-title">FIR Numbers : <?php foreach ( $a as $value )
                        {
                            echo  "$value ,";
                        }  ?></h3>
                      </div>
                      <?php
                      if ($row1 = mysqli_fetch_array($result3))
                      {
                      ?>
                      <br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                        <h3 class="card-title">Station Name : <?php echo $row1['Stationname'] ?></h3>
                      </div>
                      <br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                        <h3 class="card-title">Court Name : <?php echo $row1['Courtname'] ?></h3>
                      </div>
                      <br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                        <h3 class="card-title">Prison Name : <?php echo $row1['Prison'] ?></h3>
                      </div>
                      <br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                        <h3 class="card-title">Crime Date : <?php echo $row1['Crimedate'] ?></h3>
                      </div>
                      <br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                        <h3 class="card-title">Crime Time : <?php echo $row1['Crimetime'] ?></h3>
                      </div>
                      <?php
                      }
                      }
                      else
                      {
                      ?>
                       <br>
                      <div class="col-md-6 col-sm-6 col-xm-12"><h3>Criminal Details not found</h3>
                     <div class="card-inner p-3 d-flex flex-column align-items-center"> <img src="<?php echo $target_file; ?>" width="100">
                    </div>
                      <?php
                      }
                      }
                      }
                    elseif($match==-1)
                    {
                      $id1=$result[1];
                      $id=str_replace(' ', '', $id1);
                      $criminal2="Select * from tbl_criminaldetails where Crmid=$id";
                      $result2=  mysqli_query($conn, $criminal2);
                ?>
    
      <hr>
                      <div class="col-md-6 mb-3">
                        <h3 class="card-title text-bold">Criminal Details</h3>
                      </div>
                      <?php
                      
                      while ($row = mysqli_fetch_array($result2))
                      {
                      
                      ?>
                      <br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                                              <div class="card-inner p-3 d-flex flex-column align-items-center"> <img src="<?php echo $row['Photo'] ?>" width="100">
                    </div>
                     <br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                        <h3 class="card-title">Criminal Name : <?php echo $row['Name'] ?></h3>
                      </div>
                      <br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                        <h3 class="card-title">Height : <?php echo $row['Height'] ?></h3>
                      </div>
                      <br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                        <h3 class="card-title">Weight : <?php echo $row['Weight'] ?></h3>
                      </div>
                      <br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                        <h3 class="card-title">DOB : <?php echo $row['DOB'] ?></h3>
                      </div>
                      <br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                        <h3 class="card-title">Phone : <?php echo $row['Phone'] ?></h3>
                      </div>
                      <br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                        <h3 class="card-title">Address : <?php echo $row['Address'] ?></h3>
                      </div>
                      <br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                        <h3 class="card-title">City : <?php echo $row['City'] ?></h3>
                      </div><br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                        <h3 class="card-title">State : <?php echo $row['State'] ?></h3>
                      </div>
                      <br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                        <h3 class="card-title" align="center">Country : <?php echo $row['Country'] ?></h3>
                      </div>
                      <br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                        <h3 class="card-title">Zipcode : <?php echo $row['Zipcode'] ?></h3>
                      </div>
                      <div class="">
                       
                      </div>
                      <br>
    
                      <?php
                      }
                      ?>
                      <hr>
                      <div class="col-md-6 mb-3">
                        <h3 class="card-title text-bold">Case Details</h3>
                      </div>
                      <?php
                      $criminal2="Select * from tbl_criminaldetails a, tbl_fir b, tbl_prison c,tbl_court d,tbl_chargesheet e,tbl_policestation f where b.Station=f.Pid and a.Firnumber=b.Firnumber and a.Prison=c.Prisonid and a.Court=d.Courtid and a.Firnumber=e.Firnumber and a.Crmid=$id";
                      $result3=  mysqli_query($conn, $criminal2);
                      $criminal3="Select count(Firnumber) as a,Firnumber from tbl_case where Crmid=$id";
                      $result4=  mysqli_query($conn, $criminal3);
                      $a=array();
                      $number=0;
                      while ($row2 = mysqli_fetch_array($result4))
                      {
                        $number=$row2['a'];
                      }
                      $criminal4="Select Firnumber from tbl_case where Crmid=$id";
                      $result5=  mysqli_query($conn, $criminal4);
                      while ($row3 = mysqli_fetch_array($result5))
                      {
                        array_push($a,$row3['Firnumber']);
                      }
                      ?>
                       <br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                        <h3 class="card-title">Number of cases : <?php echo $number; ?></h3>
                      </div>
                      <br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                        <h3 class="card-title">FIR Numbers : <?php foreach ( $a as $value )
                        {
                            echo  "$value ,";
                        }  ?></h3>
                      </div>
                      <?php
                      if ($row1 = mysqli_fetch_array($result3))
                      {
                      ?>
                       
                      <br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                        <h3 class="card-title">Station Name : <?php echo $row1['Stationname'] ?></h3>
                      </div>
                      <br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                        <h3 class="card-title">Court Name : <?php echo $row1['Courtname'] ?></h3>
                      </div>
                      <br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                        <h3 class="card-title">Prison Name : <?php echo $row1['Prison'] ?></h3>
                      </div>
                      <br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                        <h3 class="card-title">Crime Date : <?php echo $row1['Crimedate'] ?></h3>
                      </div>
                      <br>
                      <div class="col-md-6 col-sm-6 col-xm-12">
                        <h3 class="card-title">Crime Time : <?php echo $row1['Crimetime'] ?></h3>
                      </div>
                      <?php
                      }
                      //echo $id;
                    }
                      else
                      {
                        ?>
                        <br>
                      <div class="col-md-6 col-sm-6 col-xm-12"><h3>Criminal Details not found</h3>
                     <div class="card-inner p-3 d-flex flex-column align-items-center"> <img src="<?php echo $target_file; ?>" width="100">
                    </div>
                        <?php
                      }
                      }
                      ?>
            </section>
             
             </div>
             
             </div>
             
             </div>
             </div>
 
            
             </div>
             <?php
include 'Footer.php';
?>

     