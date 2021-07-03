<?php
include 'Header.php';
include '../con1.php';
session_start();
$pid=$_SESSION['pid'];
?>


  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
      <nav class="main-header navbar navbar-expand navbar-dark navbar-success">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i
        ></a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
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
        <a href="#" class="brand-link text-white navbar-purple">
          <img
            src="../Asset/Image/b28ad6a5a6eb67de25f801ddb4f2e602.jpg"
            alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: .8"
          />
          <span class="brand-text font-weight-light">Crime Record</span>
        </a>
        <div class="sidebar">
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
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
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
            <a href="#" class="nav-link active">
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
                <a href="ViewFir.php" class="nav-link active">
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
      <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark"></h1>
            </div>
          </div>
        </div>
      </div>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <section class="col-lg-12 connectedSortable">
              <div class="card" data-aos="fade-up">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-users mr-1"></i> FIR Details
                  </h3>
                  <div class="card-tools"></div>
                </div>
                <div class="card-body table-responsive">
                  <div class="col-md-3 p-0 ">
                    <form action="" method="post">
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" name="ser" id="ser" title="FIR Number" placeholder="Enter FIR Number" onkeyup="search()"/>
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary" type="button" onclick="search()">
                            <i class="fa fa-search"></i>
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <script>
                    function search() {
                      $.ajax({
                        type: "GET",
                        url: "../Ajax/search2.php?key=" + $('#ser').val(),
                        success: function(data) {
                          document.getElementById("txtHint").innerHTML = data;
                        }
                      });
                    }
                  </script>
                  <div class="row">
                    <div id="txtHint" class="col-md-12 table-responsive" style="max-height: 100vh;overflow-x:scroll">
                      <table id="mytable" class="table table-striped table-hover table-bordered  border-top ">
                        <thead>
                        <tr>
                            <th>FIR </th>
                            <th>Crime Type</th>
                            <th>Name of Accused</th>
                            <th>Complainer Name</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>FIR Date</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $count = mysqli_query($conn, "select * from tbl_fir a,tbl_crimecategory b  where a.crime=b.Crimeid");

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
                                <?php echo $row['Phone'] ?>
                              </td>
                              <td>
                                <?php echo $row['Addrs'] ?>
                              </td>
                            
                              <td>
                                <?php echo $row['Fdate'] ?>
                              </td>
                             
                              <td>
                                <button type="submit" name="view" title="View" value="view" id="<?php echo $row['Firnumber']; ?>" onclick="showdet('<?php echo $row['Firnumber']; ?>')" class="btn bg-gradient-blue btn-sm round-rd elevation-2">
                                  <i class="fas fa-eye"></i>
                                </button>
                           
                                                                        
                                                    
                          </td>

                            </tr>
                          <?php
                          }


                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

              <!-- /.card -->
            </section>
            </div>
            </div>
            </div>
            <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
            <script>  
function showdet(idd){   
    
//     $('.view_data').click(function(){  console.log("halooo");
//    var employee_id = $(this).attr("id"); }); 
   var employee_id = idd;  
           $.ajax({  
                url:"select.php",  
                method:"post",  
                data:{employee_id:employee_id},  
                success:function(data){  
                     $('#employee_detail').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      }
      </script>
     <?php
      include 'Footer.php';
      ?>