<?php

//include auth_session.php file on all user panel pages

include("auth_session.php");

?>

<!DOCTYPE html>

<html>

<head>

<title>Dashboard</title>

<meta charset="utf-8"> 



<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Tell the browser to be responsive to screen width -->

<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<link rel="icon" href="dist/img/logof.png">

<!-- Bootstrap 3.3.7 -->

<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">

<!-- Font Awesome -->

<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">

<!-- Ionicons -->

<link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">

<!-- Theme style -->

<link rel="stylesheet" href="dist/css/AdminLTE.min.css">

<!-- AdminLTE Skins. Choose a skin from the css/skins

       folder instead of downloading all of them to reduce the load. -->

<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

<!-- Morris chart -->

<link rel="stylesheet" href="bower_components/morris.js/morris.css">

<!-- jvectormap -->

<link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">

<!-- Date Picker -->

<link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

<!-- Daterange picker -->

<link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">

<!-- bootstrap wysihtml5 - text editor -->

<link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

<!--[if lt IE 9]>

  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <![endif]-->

<!-- Google Font -->

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>

<body class="fixed hold-transition skin-blue sidebar-mini  ">

<div class="wrapper">

  <?php 

  include 'header.php';

  include 'aside.php';

  

  ?>

  <!-- Left side column. contains the logo and sidebar -->

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <h1> Dashboard </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

        <li class="active">Dashboard</li>

      </ol>

    </section>

    <!-- Main content -->

    <section class="content">

      <!-- Small boxes (Stat box) -->

      <div class="row"><div class="col-lg-4 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-aqua" style="border-radius:10px;">

            <div class="inner"> <span class="info-box-number">About Us</span>

              <p>Know more about us in detail</p>

            </div>

            <div class="icon"> <i class="ion ion-plus-circled"></i> </div>

            <a href="https://mmnf.in/" class="small-box-footer">Click Here  <i class="fa fa-arrow-circle-right"></i></a> </div>

        </div>

        <div class="col-lg-4 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-aqua" style="border-radius:10px;">

            <div class="inner"><span class="info-box-number">Registration</span>

              <p>Click here to get registered</p>

            </div>

            <div class="icon"> <i class="ion ion-plus-circled"></i> </div>

            <a href="registration.php" class="small-box-footer">Click Here  <i class="fa fa-arrow-circle-right"></i></a> </div>

        </div>

        

        <div class="col-lg-4 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-green" style="border-radius:10px;">

            <div class="inner"> <span class="info-box-number">Matrimonial</span>

              <p>Matchmaking service</p>

            </div>

            <div class="icon"> <i class="ion ion-plus-circled"></i> </div>

            <a href="matrimoniall.php" class="small-box-footer">Click Here  <i class="fa fa-arrow-circle-right"></i></a> </div>

        </div>

        <div class="col-lg-4 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-yellow" style="border-radius:10px;">

            <div class="inner"> <span class="info-box-number">Help Line</span>

              <p>Important communication</p>

            </div>

            <div class="icon"> <i class="ion ion-plus-circled"></i> </div>

            <a href="helpline.php" class="small-box-footer">Click Here  <i class="fa fa-arrow-circle-right"></i></a> </div>

        </div>

        <div class="col-lg-4 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-yellow" style="border-radius:10px;">

            <div class="inner"> <span class="info-box-number">Helping Hands</span>

              <p>Croud Funding</p>

            </div>

            <div class="icon"> <i class="ion ion-plus-circled"></i> </div>

            <a href="helping_hands.php" class="small-box-footer">Click Here  <i class="fa fa-arrow-circle-right"></i></a> </div>

        </div>

        <div class="col-lg-4 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-aqua" style="border-radius:10px;">

            <div class="inner"> <span class="info-box-number">Donations<br>

              </span>

              <p> 80G, 12a,12b…</p>

            </div>

            <div class="icon"> <i class="ion ion-plus-circled"></i> </div>

            <a href="donations.php" class="small-box-footer">Click Here  <i class="fa fa-arrow-circle-right"></i></a> </div>

        </div>

        

        





 

 







 











        

        

        <div class="col-lg-4 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-yellow" style="border-radius:10px;">

            <div class="inner"> <span class="info-box-number">Jobs</span>

              <p>For Employees and Employers  </p>

            </div>

            <div class="icon"> <i class="ion ion-plus-circled"></i> </div>

            <a href="jobs.php" class="small-box-footer">Click Here  <i class="fa fa-arrow-circle-right"></i></a> </div>

        </div>

        <div class="col-lg-4 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-yellow" style="border-radius:10px;">

            <div class="inner"> <span class="info-box-number">Mera Bazar</span>

              <p>E-Commerce Platform</p>

            </div>

            <div class="icon"> <i class="ion ion-plus-circled"></i> </div>

            <a href="https://hudastechnologies.co.in/mera_bazar/" class="small-box-footer">Click Here  <i class="fa fa-arrow-circle-right"></i></a> </div>

        </div>

        <div class="col-lg-4 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-aqua" style="border-radius:10px;">

            <div class="inner"> <span class="info-box-number">Government Resolutions<br>

              </span>

              <p>List of all Government GR’s </p>

            </div>

            <div class="icon"> <i class="ion ion-plus-circled"></i> </div>

            <a href="governmentresolutions.php" class="small-box-footer">Click Here  <i class="fa fa-arrow-circle-right"></i></a> </div>

        </div>

        

        

        

        

      </div>

      <!-- /.row -->

      

      

      

      

      

      <!-- Main row -->

      <div class="row">

        <div class="col-md-12">

          <!-- Application buttons -->

          <div class="box">

            <div class="box-header">

              <h3 class="box-title">Our Departments</h3>

             

            </div>

            <div class="box-body">

              <div class="row"> <a href="dept_profile_mdc.php">

                <div class="col-md-4 col-sm-6 col-xs-12">

                  <div class="info-box" style="border-radius:10px; background-color:#A569BD; color:#FFFFFF"> <span class="info-box-icon"><i class="fa fa-newspaper-o"></i></span>

                    <div class="info-box-content"> <span class="info-box-text">.....</span> <span class="info-box-number"><small>Minority Development Centre</small></span>

                      <div class="progress">

                        <div class="progress-bar" style="width: 100%"></div>

                      </div>

                      <span class="progress-description"><i class="fa fa-arrow-circle-right"></i>  </span> </div>

                    <!-- /.info-box-content -->

                  </div>

                  <!-- /.info-box -->

                </div>

                </a>

                <!-- /.col --><a href="dept_profile_cdc.php">

                <div class="col-md-4 col-sm-6 col-xs-12">

                  <div class="info-box" style="border-radius:10px; background-color:#5DADE2; color:#FFFFFF"> <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>

                    <div class="info-box-content"> <span class="info-box-text">.....</span> <span class="info-box-number"><small>Community Development Centre</small></span>

                      <div class="progress">

                        <div class="progress-bar" style="width: 100%"></div>

                      </div>

                      <span class="progress-description"><i class="fa fa-arrow-circle-right"></i> Dapter  </span> </div>

                    <!-- /.info-box-content -->

                  </div>

                  <!-- /.info-box -->

                </div></a>

                <!-- /.col -->

                

                <a href="dept_profile_dpc.php">

                <div class="col-md-4 col-sm-6 col-xs-12">

                  <div class="info-box" style="border-radius:10px;background-color:#52BE80; color:#FFFFFF"> <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

                    <div class="info-box-content"> <span class="info-box-text">.....</span> <span class="info-box-number"><small>Data and Planning Centre</small></span>

                      <div class="progress">

                        <div class="progress-bar" style="width: 100%"></div>

                      </div>

                      <span class="progress-description"><i class="fa fa-arrow-circle-right"></i>   </span> </div>

                    <!-- /.info-box-content -->

                  </div>

                  <!-- /.info-box -->

                </div>

                </a>

                <!-- /.col -->

                









                <a href="dept_profile_mar.php">

                <div class="col-md-4 col-sm-6 col-xs-12">

                  <div class="info-box" style="border-radius:10px; background-color:#F1C40F; color:#FFFFFF"> <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>

                    <div class="info-box-content"> <span class="info-box-text">.....</span> <span class="info-box-number"><small>Minority Affairs Research</small></span>

                      <div class="progress">

                        <div class="progress-bar" style="width: 100%"></div>

                      </div>

                      <span class="progress-description"><i class="fa fa-arrow-circle-right"></i> Marit  </span> </div>

                    <!-- /.info-box-content -->

                  </div>

                  <!-- /.info-box -->

                </div>

                 </a>

                <!-- /.col -->

                

                <a href="dept_profile_ace.php">

                <div class="col-md-4 col-sm-6 col-xs-12">

                  <div class="info-box" style="border-radius:10px; background-color:#AAB7B8 ; color:#FFFFFF"> <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>

                    <div class="info-box-content"> <span class="info-box-text">.....</span> <span class="info-box-number"><small>Academy for Competitive Exam</small></span>

                      <div class="progress">

                        <div class="progress-bar" style="width: 100%"></div>

                      </div>

                      <span class="progress-description"><i class="fa fa-arrow-circle-right"></i> Brainac </span> </div>

                    <!-- /.info-box-content -->

                  </div>

                  <!-- /.info-box -->

                </div>

                 </a>

                <!-- /.col -->

                

                <a href="dept_profile_hrlf.php">

                <div class="col-md-4 col-sm-6 col-xs-12">

                  <div class="info-box " style="border-radius:10px; background-color:#CCCCFF ; color:#FFFFFF"> <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>

                    <div class="info-box-content"> <span class="info-box-text">.....</span> <span class="info-box-number"><small>Human Rights and Legal Center</small></span>

                      <div class="progress">

                        <div class="progress-bar" style="width: 100%"></div>

                      </div>

                      <span class="progress-description"><i class="fa fa-arrow-circle-right"></i> Salahkar  </span> </div>

                    <!-- /.info-box-content -->

                  </div>

                  <!-- /.info-box -->

                </div>

                 </a>

                <!-- /.col -->

                









                <a href="dept_profile_sdf.php">

                <div class="col-md-4 col-sm-6 col-xs-12">

                  <div class="info-box" style="border-radius:10px; background-color:#B8ABAA; color:#FFFFFF"> <span class="info-box-icon"><i class="fa fa-user-secret"></i></span>

                    <div class="info-box-content"> <span class="info-box-text">.....</span> <span class="info-box-number"><small>Skill Development Center</small></span>

                      <div class="progress">

                        <div class="progress-bar" style="width: 100%"></div>

                      </div>

                      <span class="progress-description"><i class="fa fa-arrow-circle-right"></i> Hunar  </span> </div>

                    <!-- /.info-box-content -->

                  </div>

                  <!-- /.info-box -->

                </div>

                 </a>

                <!-- /.col -->

                

                <a href="dept_profile_technobiz.php">

                <div class="col-md-4 col-sm-6 col-xs-12">

                  <div class="info-box" style="border-radius:10px; background-color:#9C27B0; color:#FFFFFF"> <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>

                    <div class="info-box-content"> <span class="info-box-text">.....</span> <span class="info-box-number"><small>Educational Research & Development center</small></span>

                      <div class="progress">

                        <div class="progress-bar" style="width: 100%"></div>

                      </div>

                      <span class="progress-description"><i class="fa fa-arrow-circle-right"></i> Technobuiz  </span> </div>

                    <!-- /.info-box-content -->

                  </div>

                  <!-- /.info-box -->

                </div>

                </a>

                <!-- /.col -->

                

                <a href="dept_profile_bdf.php">

                <div class="col-md-4 col-sm-6 col-xs-12">

                  <div class="info-box" style="border-radius:10px; background-color:#558B2F ; color:#FFFFFF"> <span class="info-box-icon"><i class="fa fa-building-o"></i></span>

                    <div class="info-box-content"> <span class="info-box-text">.....</span> <span class="info-box-number"><small>Business Research & Development Center</small></span>

                      <div class="progress">

                        <div class="progress-bar" style="width: 100%"></div>

                      </div>

                      <span class="progress-description"><i class="fa fa-arrow-circle-right"></i> Tijarat  </span> </div>

                    <!-- /.info-box-content -->

                  </div>

                  <!-- /.info-box -->

                </div>

                 </a>

                <!-- /.col -->

                

                <a href="dept_profile_health.php">

                <div class="col-md-4 col-sm-6 col-xs-12">

                  <div class="info-box bg-green" style="border-radius:10px;"> <span class="info-box-icon"><i class="fa fa-heartbeat"></i></span>

                    <div class="info-box-content"> <span class="info-box-text">.....</span> <span class="info-box-number"><small>Healthcare and Paramedical Center</small></span>

                      <div class="progress">

                        <div class="progress-bar" style="width: 100%"></div>

                      </div>

                      <span class="progress-description"><i class="fa fa-arrow-circle-right"></i> Tibbenani  </span> </div>

                    <!-- /.info-box-content -->

                  </div>

                  <!-- /.info-box -->

                </div>

                 </a>

                <!-- /.col -->

                









                <a href="dept_profile_wec.php">

                <div class="col-md-4 col-sm-6 col-xs-12">

                  <div class="info-box bg-yellow" style="border-radius:10px;"> <span class="info-box-icon"><i class="fa fa-female"></i></span>

                    <div class="info-box-content"> <span class="info-box-text">.....</span> <span class="info-box-number"><small>Women Empowerment Centre</small></span>

                      <div class="progress">

                        <div class="progress-bar" style="width: 100%"></div>

                      </div>

                      <span class="progress-description"><i class="fa fa-arrow-circle-right"></i> Fatima  </span> </div>

                    <!-- /.info-box-content -->

                  </div>

                  <!-- /.info-box -->

                </div>

                </a>

                <!-- /.col -->

                

                <a href="dept_profile_fdc.php">

                <div class="col-md-4 col-sm-6 col-xs-12">

                  <div class="info-box bg-red" style="border-radius:10px;"> <span class="info-box-icon"><i class="fa fa-money"></i></span>

                    <div class="info-box-content"> <span class="info-box-text">.....</span> <span class="info-box-number"><small>Financial Development Centre</small></span>

                      <div class="progress">

                        <div class="progress-bar" style="width: 100%"></div>

                      </div>

                      <span class="progress-description"><i class="fa fa-arrow-circle-right"></i> Bilasudi  </span> </div>

                    <!-- /.info-box-content -->

                  </div>

                  <!-- /.info-box -->

                </div>

                </a>

                <!-- /.col -->

                

                <a href="dept_profile_tgc.php">

                <div class="col-md-4 col-sm-6 col-xs-12">

                  <div class="info-box bg-aqua" style="border-radius:10px;"> <span class="info-box-icon"><i class="fa fa-plane"></i></span>

                    <div class="info-box-content"> <span class="info-box-text">.....</span> <span class="info-box-number"><small>Travel and Guidance Centre</small></span>

                      <div class="progress">

                        <div class="progress-bar" style="width: 100%"></div>

                      </div>

                      <span class="progress-description"><i class="fa fa-arrow-circle-right"></i> Rahbar  </span> </div>

                    <!-- /.info-box-content -->

                  </div>

                  <!-- /.info-box -->

                </div>

                </a>

                <!-- /.col -->

                

                <a href="dept_profile_dmc.php">

                <div class="col-md-4 col-sm-6 col-xs-12">

                  <div class="info-box bg-green" style="border-radius:10px;"> <span class="info-box-icon"><i class="fa fa-free-code-camp"></i></span>

                    <div class="info-box-content"> <span class="info-box-text">.....</span> <span class="info-box-number"><small> Humanity & Disaster Management Centre</small></span>

                      <div class="progress">

                        <div class="progress-bar" style="width: 100%"></div>

                      </div>

                      <span class="progress-description"><i class="fa fa-arrow-circle-right"></i> Insaniyat  </span> </div>

                    <!-- /.info-box-content -->

                  </div>

                  <!-- /.info-box -->

                </div>

                 </a>

                <!-- /.col -->

                

                <a href="dept_profile_wdf.php">

                <div class="col-md-4 col-sm-6 col-xs-12">

                  <div class="info-box bg-yellow" style="border-radius:10px;"> <span class="info-box-icon"><i class="fa fa-university"></i></span>

                    <div class="info-box-content"> <span class="info-box-text">.....</span> <span class="info-box-number"><small>Waqf Development Center</small></span>

                      <div class="progress">

                        <div class="progress-bar" style="width: 100%"></div>

                      </div>

                      <span class="progress-description"><i class="fa fa-arrow-circle-right"></i> Amanat  </span> </div>

                    <!-- /.info-box-content -->

                  </div>

                  <!-- /.info-box -->

                </div>

                 </a>

                <!-- /.col -->               </div>

            </div>

            <!-- /.box-body -->

          </div>

          <!-- /.box -->

        </div>

      </div>

      <!-- Main row -->

      <div class="row">

      

        <section class="col-lg-12">

          <!-- Map box -->

          <div class="box box-solid bg-light-blue-gradient">

            <div class="box-header">

              <!-- tools box -->

              <div class="pull-right box-tools">

                <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip"

                        title="Date range"> <i class="fa fa-calendar"></i></button>

                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"

                        data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"> <i class="fa fa-minus"></i></button>

              </div>

              <!-- /. tools -->

              <i class="fa fa-map-marker"></i>

              <h3 class="box-title"> Visitors </h3>

            </div>

            <div class="box-body">

              <div id="world-map" style="height: 250px; width: 100%;"></div>

            </div>

            <!-- /.box-body-->

            <div class="box-footer no-border">

              <div class="row">

                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">

                  <div id="sparkline-1"></div>

                  <div class="knob-label">Visitors</div>

                </div>

                <!-- ./col -->

                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">

                  <div id="sparkline-2"></div>

                  <div class="knob-label">Online</div>

                </div>

                <!-- ./col -->

                <div class="col-xs-4 text-center">

                  <div id="sparkline-3"></div>

                  <div class="knob-label">Exists</div>

                </div>

                <!-- ./col -->

              </div>

              <!-- /.row -->

            </div>

          </div>

          

        </section>

        <!-- right col -->

      </div>

      <!-- /.row (main row) -->

    </section>

    <!-- /.content -->

  </div>

  <!-- /.content-wrapper -->

  <footer class="main-footer">

    <div class="pull-right hidden-xs"> <b>Version</b> 2.4.0 </div>

    <strong>Copyright &copy; 2014-2022 <a href="https://hudastechnologies.com">Huda's Technologies</a>.</strong> All rights

    reserved. </footer>

  <!-- Control Sidebar -->

  <aside class="control-sidebar control-sidebar-dark">

    <!-- Create the tabs -->

    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">

      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>

    </ul>

    <!-- Tab panes -->

    <div class="tab-content">

      <!-- Home tab content -->

      <div class="tab-pane" id="control-sidebar-home-tab">

        <h3 class="control-sidebar-heading">Recent Activity</h3>

        <ul class="control-sidebar-menu">

          <li> <a href="javascript:void(0)"> <i class="menu-icon fa fa-birthday-cake bg-red"></i>

            <div class="menu-info">

              <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

              <p>Will be 23 on April 24th</p>

            </div>

            </a> </li>

          <li> <a href="javascript:void(0)"> <i class="menu-icon fa fa-user bg-yellow"></i>

            <div class="menu-info">

              <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

              <p>New phone +1(800)555-1234</p>

            </div>

            </a> </li>

          <li> <a href="javascript:void(0)"> <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

            <div class="menu-info">

              <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

              <p>nora@example.com</p>

            </div>

            </a> </li>

          <li> <a href="javascript:void(0)"> <i class="menu-icon fa fa-file-code-o bg-green"></i>

            <div class="menu-info">

              <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

              <p>Execution time 5 seconds</p>

            </div>

            </a> </li>

        </ul>

        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>

        <ul class="control-sidebar-menu">

          <li> <a href="javascript:void(0)">

            <h4 class="control-sidebar-subheading"> Custom Template Design <span class="label label-danger pull-right">70%</span> </h4>

            <div class="progress progress-xxs">

              <div class="progress-bar progress-bar-danger" style="width: 70%"></div>

            </div>

            </a> </li>

          <li> <a href="javascript:void(0)">

            <h4 class="control-sidebar-subheading"> Update Resume <span class="label label-success pull-right">95%</span> </h4>

            <div class="progress progress-xxs">

              <div class="progress-bar progress-bar-success" style="width: 95%"></div>

            </div>

            </a> </li>

          <li> <a href="javascript:void(0)">

            <h4 class="control-sidebar-subheading"> Laravel Integration <span class="label label-warning pull-right">50%</span> </h4>

            <div class="progress progress-xxs">

              <div class="progress-bar progress-bar-warning" style="width: 50%"></div>

            </div>

            </a> </li>

          <li> <a href="javascript:void(0)">

            <h4 class="control-sidebar-subheading"> Back End Framework <span class="label label-primary pull-right">68%</span> </h4>

            <div class="progress progress-xxs">

              <div class="progress-bar progress-bar-primary" style="width: 68%"></div>

            </div>

            </a> </li>

        </ul>

        <!-- /.control-sidebar-menu -->

      </div>

      <!-- /.tab-pane -->

      <!-- Stats tab content -->

      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>

      <!-- /.tab-pane -->

      <!-- Settings tab content -->

      <div class="tab-pane" id="control-sidebar-settings-tab">

        <form method="post">

          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">

            <label class="control-sidebar-subheading"> Report panel usage

            <input type="checkbox" class="pull-right" checked>

            </label>

            <p> Some information about this general settings option </p>

          </div>

          <!-- /.form-group -->

          <div class="form-group">

            <label class="control-sidebar-subheading"> Allow mail redirect

            <input type="checkbox" class="pull-right" checked>

            </label>

            <p> Other sets of options are available </p>

          </div>

          <!-- /.form-group -->

          <div class="form-group">

            <label class="control-sidebar-subheading"> Expose author name in posts

            <input type="checkbox" class="pull-right" checked>

            </label>

            <p> Allow the user to show his name in blog posts </p>

          </div>

          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">

            <label class="control-sidebar-subheading"> Show me as online

            <input type="checkbox" class="pull-right" checked>

            </label>

          </div>

          <!-- /.form-group -->

          <div class="form-group">

            <label class="control-sidebar-subheading"> Turn off notifications

            <input type="checkbox" class="pull-right">

            </label>

          </div>

          <!-- /.form-group -->

          <div class="form-group">

            <label class="control-sidebar-subheading"> Delete chat history <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a> </label>

          </div>

          <!-- /.form-group -->

        </form>

      </div>

      <!-- /.tab-pane -->

    </div>

  </aside>

  <!-- /.control-sidebar -->

  <!-- Add the sidebar's background. This div must be placed

       immediately after the control sidebar -->

  <div class="control-sidebar-bg"></div>

</div>

<!-- ./wrapper -->

<!-- jQuery 3 -->

<script src="bower_components/jquery/dist/jquery.min.js"></script>

<!-- jQuery UI 1.11.4 -->

<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<script>

  $.widget.bridge('uibutton', $.ui.button);

</script>

<!-- Bootstrap 3.3.7 -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Morris.js charts -->

<script src="bower_components/raphael/raphael.min.js"></script>

<script src="bower_components/morris.js/morris.min.js"></script>

<!-- Sparkline -->

<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>

<!-- jvectormap -->

<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>

<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<!-- jQuery Knob Chart -->

<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>

<!-- daterangepicker -->

<script src="bower_components/moment/min/moment.min.js"></script>

<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- datepicker -->

<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<!-- Bootstrap WYSIHTML5 -->

<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<!-- Slimscroll -->

<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<!-- FastClick -->

<script src="bower_components/fastclick/lib/fastclick.js"></script>

<!-- AdminLTE App -->

<script src="dist/js/adminlte.min.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<script src="dist/js/pages/dashboard.js"></script>

<!-- AdminLTE for demo purposes -->

<script src="dist/js/demo.js"></script>

</body>

</html>

