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
                            <h1 class="m-0">Academy for Competitive Exam</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Academy for Competitive Exam</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div> <!-- /.content-header -->
            <!-- Main content -->
            <!-- Button trigger modal -->
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">About us</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        </div>
                        <div class="modal-body">
                            <p align="justify"> This brainchild connected over 300 NGOs from 31 districts in Maharashtra. Now a recognized state organization, MMNF focuses on projects like Minority Development Centre (MDC), Community Development Centre (CDC), and more, empowering NGOs and the community across the state.MMNF is committed to connect and co-relate all NGOS from all corners of the state to empower them & to empower the community at large. MMNF creates a state level federation of Minority NGO’s, as well as create a bunch of expert persons, which called as Knowledge Tank with the help of Knowledge tank, MMNF always trying to give solutions to community in education, health, Industry, business, skills, legal, financial etc. to up-liftment of community in all manner.</p>
                        </div>
                        <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active"> <img class="d-block " src="images/9.jpg" alt="First slide"> </div>
                                    <div class="carousel-item"> <img class="d-block " src="images/9.jpg" alt="Second slide"> </div>
                                    <div class="carousel-item"> <img class="d-block " src="images/9.jpg" alt="Third slide"> </div>
                                </div> <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="sr-only">Next</span> </a>
                            </div>
                        </div>
                        <div class="col-lg-8 ">
                            <div class="card">
                                <div class="card-body">
                                    <h4><b>Academy for Competitive Exam</b></h4>
                                    <p align="justify">The Maharashtra Minority NGO Forum's roots are intertwined with Jakir Shikalgar's life and social work. In September 2018, he realized the need for collective efforts to bring about revolutionary change. Thus, he initiated WhatsApp groups to address untouched issues, providing solutions and forming MMNF.</p> <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal" style="background-color:#b84463; color: white;"> Read More </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content pt-4">
                <div class="container-fluid">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4  col-lg-3  col-sm-12 col-xs-12"> <a href="#">
                                    <div class="info-box bg-red" style="border-radius:10px;"> <span class="info-box-icon"><i class="fa fa-user"></i></span>
                                        <div class="info-box-content"> <span class="info-box-text">Registration </span> <span class="info-box-number">Individual Beneficiary</span>
                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div> <span class="progress-description"><i class="fa fa-arrow-circle-right"></i> Click here for details</span>
                                        </div>
                                    </div>
                                </a> </div>
                            <div class="col-md-12  col-lg-3  col-sm-12 col-xs-12"> <a href="#">
                                    <div class="info-box bg-green" style="border-radius:10px;"> <span class="info-box-icon"><i class="fa fa-users"></i></span>
                                        <div class="info-box-content"> <span class="info-box-text">Events</span> <span class="info-box-number">Family Beneficiary</span>
                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div> <span class="progress-description"><i class="fa fa-arrow-circle-right"></i> Click here for details</span>
                                        </div>
                                    </div>
                                </a> </div>
                            <div class="col-md-12 col-lg-3  col-sm-12 col-xs-12"> <a href="#">
                                    <div class="info-box bg-yellow" style="border-radius:10px;"> <span class="info-box-icon"><i class="fa fa-flag-checkered"></i></span>
                                        <div class="info-box-content"> <span class="info-box-text">Government Scheems</span> <span class="info-box-number">Schemes</span>
                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div> <span class="progress-description"><i class="fa fa-arrow-circle-right"></i> Click here for details</span>
                                        </div>
                                    </div>
                                </a> </div>
                            <div class="col-md-12  col-lg-3  col-sm-12 col-xs-12"> <a href="#">
                                    <div class="info-box bg-purple" style="border-radius:10px;"> <span class="info-box-icon"><i class="fas fa-comments"></i></span>
                                        <div class="info-box-content"> <span class="info-box-text">Comments</span> <span class="info-box-number">Services</span>
                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div> <span class="progress-description"><i class="fa fa-arrow-circle-right"></i> Click here for details</span>
                                        </div>
                                    </div>
                                </a> </div>
                            <div class="col-md-12  col-lg-3  col-sm-12 col-xs-12"><a href="#">
                                    <div class="info-box bg-gray" style="border-radius:10px;"> <span class="info-box-icon"><i class="far fa-copy"></i></span>
                                        <div class="info-box-content"> <span class="info-box-text">Documents </span> <span class="info-box-number">Document Bank</span>
                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div> <span class="progress-description"><i class="fa fa-arrow-circle-right"></i> Click here for details</span>
                                        </div>
                                    </div>
                                </a> </div>
                            <div class="col-md-12 col-lg-3  col-sm-12 col-xs-12"> <a href="#">
                                    <div class="info-box bg-orange" style="border-radius:10px;"> <span class="info-box-icon"><i class="far fa-copy"></i></span>
                                        <div class="info-box-content"> <span class="info-box-text">Schemes</span> <span class="info-box-number">Applied Schemes Status</span>
                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div> <span class="progress-description"><i class="fa fa-arrow-circle-right"></i> Click here for details</span>
                                        </div>
                                    </div>
                                </a> </div>
                            <div class="col-md-12  col-lg-3  col-sm-12 col-xs-12"> <a href="#">
                                    <div class="info-box bg-blue" style="border-radius:10px;"> <span class="info-box-icon"><i class="fa fa-balance-scale"></i></span>
                                        <div class="info-box-content"> <span class="info-box-text">Government Scheems</span> <span class="info-box-number">Eligibility </span>
                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div> <span class="progress-description"> <i class="fa fa-arrow-circle-right"></i> Click here for details</span>
                                        </div>
                                    </div>
                                </a> </div>
                            <div class="col-md-12  col-lg-3  col-sm-12 col-xs-12"> <a href="#">
                                    <div class="info-box bg-pink" style="border-radius:10px;"> <span class="info-box-icon"><i class="fa fa-balance-scale"></i></span>
                                        <div class="info-box-content"> <span class="info-box-text">MDC Office Management</span> <span class="info-box-number">Adminstration </span>
                                            <div class="progress">
                                                <div class="progress-bar" style="width: 100%"></div>
                                            </div> <span class="progress-description"> <i class="fa fa-arrow-circle-right"></i> Click here for details</span>
                                        </div>
                                    </div>
                                </a> </div>
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