<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<?php
ob_start();
session_start();
?>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Crime Record</title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="./AdminLTE/plugins/fontawesome-free/css/all.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="./AdminLTE/dist/css/adminlte.min.css" />
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />

    <link rel="stylesheet" href="./Asset/css/style.css" />
    <script type="text/javascript" src="./Asset/app/MyApp.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <!-- Navbar -->

        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="container">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6 mx-auto">
                            <h1 class=" text-dark text-center">
                                Crime
                                <small class="text-red">Record</small>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <!-- /.col-md-12 -->
                        <div class="col-lg-4 mx-auto">
                            <form action="login.php" method="post">
                                <div class="card card-success card-outline elevation-2  " data-aos="fade-up">
                                    <div class="card-header">
                                        <h5 class="card-title m-0">Login here</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-md-12 mb-2">
                                                <label for="">Username *</label>
                                                <input type="text" name="txtuname" class="form-control" required
                                                    placeholder="Enter your Username" title="Enter Username"
                                                    autocomplete="off">
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="">Password *</label>
                                                <input type="password" name="txtpass" class="form-control" required
                                                    placeholder="Enter your Password" title="Enter your Password"
                                                    autocomplete="off">
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <button type="submit" class="btn btn-primary fa-pull-right elevation-2" name="login">
                                                    <i class="fas fa-sign-in-alt"></i></i> Login
                                                </button>
                                                <a href="stationreg.php" class=" fa-pull-right mr-3 ">
                                                    Signup ?
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <script src="./sweetalert.js"></script>
                            <?php
                             include './con1.php';
                                if(isset($_POST['login']))
                                {
                                            $email=$_POST['txtuname'];
                                            $pass=$_POST['txtpass'];
                                            $pass1=md5($pass);
                                            $user="Select * from tbl_policestation where 	Email ='$email' and  	Pass='$pass1'";
                                            $result2=  mysqli_query($conn, $user);
                                            if( $email=="admin" && $pass=="admin1234")
                                                     {
                                
                                                            $_SESSION['admin']=$email;

                                                        header('location: ./Admin/Home.php');
                                                     }
                                                    if(mysqli_num_rows($result2) != 0 )
                                                    {
                                                        while($row=mysqli_fetch_array($result2))
                                                        {
                                                            $pid=$row['Pid'];
                                                            $_SESSION['pid']=$pid;
                                                        }
                                                        header('location: ./PoliceStation/Home.php');
                                                    }
                                                            //echo $Position;
                                                 else
                                                 {
                                                    echo "<script>swal('error!','Invalid Username and Password!','error' ) </script>";
                                                 }
                                }


                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./AdminLTE/plugins/jquery/jquery.min.js"></script>
    <script src="./AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="./AdminLTE/dist/js/adminlte.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>



</body>

</html>