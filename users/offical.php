<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="images/logo.png" rel="icon">
    <title>MMNF</title> <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css"> <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css"> <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css"> <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css"> <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css"> <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed" style="background-color:#c0b1c7">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center"> <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="250" width="250"> </div> <!-- Navbar --> <?php include "navbar.php" ; ?> <?php include "aside.php" ; ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div> <!-- /.content-header -->
            <section class="content mt-4">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h5>Organization</h5>
                                </div>
                                <div class="icon"> <i class="ion ion-bag"></i> </div> <a href="organization.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h5>Institutional</h5>
                                </div>
                                <div class="icon"> <i class="ion ion-stats-bars"></i> </div> <a href="institutional.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h5>Think Tank</h5>
                                </div>
                                <div class="icon"> <i class="ion ion-person-add"></i> </div> <a href="think_tank.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h5>Trustee</h5>
                                </div>
                                <div class="icon"> <i class="ion ion-pie-graph"></i> </div> <a href="trustee.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="small-box bg-gray">
                                <div class="inner">
                                    <h5>Offical</h5>
                                </div>
                                <div class="icon"> <i class="ion ion-bag"></i> </div> <a href="offical.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="small-box bg-pink">
                                <div class="inner">
                                    <h5>Staff</h5>
                                </div>
                                <div class="icon"> <i class="ion ion-stats-bars"></i> </div> <a href="staff.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
            </section> <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <!-- /.content -->
        </div> <!-- /.content-wrapper -->
        <footer class="main-footer"> <span>© 2023-25. All rights reserved MMNF | Designed and build in India by <a href="hudastechnologies.com/" target="_blank">Huda's Technologies</a>.</span>
            <div class="float-right d-none d-sm-inline-block"> <b>Version</b> 3.2.0 </div>
        </footer> <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside> <!-- /.control-sidebar -->
    </div> <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script> <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script> <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script> <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script> <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script> <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script> <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script> <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script> <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script> <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script> <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script> <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script> <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>