<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Skill Development Forum</title>
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
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="fixed hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php 
  include 'header.php';
  include 'aside.php';
  
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Skill Development Forum</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Department</a></li>
        <li class="active">Skill Development Forum</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-4">
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile"> <img class="profile-user-img img-responsive img-circle" src="dist/img/logo.png" alt="User profile picture">
              <h3 class="profile-username text-center">SDF</h3>
              <p class="text-muted text-center">Skill Development Forum</p>
              <div class="col-md-6"><a href="tel:+919850757898" class="btn btn-primary btn-block"><i class="fa fa-phone"></i><b> Call</b></a></div>
              <div class="col-md-6"><a href="https://api.whatsapp.com/send?phone=9850757898" class="btn btn-success btn-block"><i class="fa fa-whatsapp"></i><b> Message</b></a> </div>
              
              </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">









              <div class="col-md-12  col-sm-6 col-xs-12"> <a href="#">
                  <div class="info-box bg-aqua" style="border-radius:10px;"> <span class="info-box-icon"><i class="fa fa-user"></i></span>
                    <div class="info-box-content"> <span class="info-box-text">------ </span> <span class="info-box-number"> Student Registration</span>
                      <div class="progress">
                        <div class="progress-bar" style="width: 100%"></div>
                      </div>
                      <span class="progress-description"><i class="fa fa-arrow-circle-right"></i> Click here for details</span> </div> 
                  </div>
                  </a> 
                </div> 
                <div class="col-md-12  col-sm-6 col-xs-12"> <a href="#">
                  <div class="info-box bg-aqua" style="border-radius:10px;"> <span class="info-box-icon"><i class="fa fa-user"></i></span>
                    <div class="info-box-content"> <span class="info-box-text">------ </span> <span class="info-box-number"> Skill Centre Registration</span>
                      <div class="progress">
                        <div class="progress-bar" style="width: 100%"></div>
                      </div>
                      <span class="progress-description"><i class="fa fa-arrow-circle-right"></i> Click here for details</span> </div> 
                  </div>
                  </a> 
                </div> 
                 <div class="col-md-12  col-sm-6 col-xs-12"> <a href="#">
                  <div class="info-box bg-aqua" style="border-radius:10px;"> <span class="info-box-icon"><i class="fa fa-user"></i></span>
                    <div class="info-box-content"> <span class="info-box-text">------ </span> <span class="info-box-number"> Schemes</span>
                      <div class="progress">
                        <div class="progress-bar" style="width: 100%"></div>
                      </div>
                      <span class="progress-description"><i class="fa fa-arrow-circle-right"></i> Click here for details</span> </div> 
                  </div>
                  </a> 
                </div> 
                <div class="col-md-12  col-sm-6 col-xs-12"> <a href="#">
                  <div class="info-box bg-aqua" style="border-radius:10px;"> <span class="info-box-icon"><i class="fa fa-user"></i></span>
                    <div class="info-box-content"> <span class="info-box-text">------ </span> <span class="info-box-number"> Services</span>
                      <div class="progress">
                        <div class="progress-bar" style="width: 100%"></div>
                      </div>
                      <span class="progress-description"><i class="fa fa-arrow-circle-right"></i> Click here for details</span> </div> 
                  </div>
                  </a> 
                </div> 
                 <div class="col-md-12  col-sm-6 col-xs-12"> <a href="#">
                  <div class="info-box bg-aqua" style="border-radius:10px;"> <span class="info-box-icon"><i class="fa fa-user"></i></span>
                    <div class="info-box-content"> <span class="info-box-text">------ </span> <span class="info-box-number"> Skill Centre with Us</span>
                      <div class="progress">
                        <div class="progress-bar" style="width: 100%"></div>
                      </div>
                      <span class="progress-description"><i class="fa fa-arrow-circle-right"></i> Click here for details</span> </div> 
                  </div>
                  </a> 
                </div> 
                <div class="col-md-12  col-sm-6 col-xs-12"> <a href="#">
                  <div class="info-box bg-aqua" style="border-radius:10px;"> <span class="info-box-icon"><i class="fa fa-user"></i></span>
                    <div class="info-box-content"> <span class="info-box-text">------ </span> <span class="info-box-number"> Skill Courses List</span>
                      <div class="progress">
                        <div class="progress-bar" style="width: 100%"></div>
                      </div>
                      <span class="progress-description"><i class="fa fa-arrow-circle-right"></i> Click here for details</span> </div> 
                  </div>
                  </a> 
                </div> 
                 <div class="col-md-12  col-sm-6 col-xs-12"> <a href="#">
                  <div class="info-box bg-aqua" style="border-radius:10px;"> <span class="info-box-icon"><i class="fa fa-user"></i></span>
                    <div class="info-box-content"> <span class="info-box-text">------ </span> <span class="info-box-number"> Skill University &  Govt</span>
                      <div class="progress">
                        <div class="progress-bar" style="width: 100%"></div>
                      </div>
                      <span class="progress-description"><i class="fa fa-arrow-circle-right"></i> Click here for details</span> </div> 
                  </div>
                  </a> 
                </div> 
                




                <div class="col-md-12  col-sm-6 col-xs-12"> <a href="#">
                  <div class="info-box bg-aqua" style="border-radius:10px;"> <span class="info-box-icon"><i class="fa fa-user"></i></span>
                    <div class="info-box-content"> <span class="info-box-text">------ </span> <span class="info-box-number"> Centres</span>
                      <div class="progress">
                        <div class="progress-bar" style="width: 100%"></div>
                      </div>
                      <span class="progress-description"><i class="fa fa-arrow-circle-right"></i> Click here for details</span> </div> 
                  </div>
                  </a> 
                </div> 
                 <div class="col-md-12  col-sm-6 col-xs-12"> <a href="#">
                  <div class="info-box bg-aqua" style="border-radius:10px;"> <span class="info-box-icon"><i class="fa fa-user"></i></span>
                    <div class="info-box-content"> <span class="info-box-text">------ </span> <span class="info-box-number"> Private Centres</span>
                      <div class="progress">
                        <div class="progress-bar" style="width: 100%"></div>
                      </div>
                      <span class="progress-description"><i class="fa fa-arrow-circle-right"></i> Click here for details</span> </div> 
                  </div>
                  </a> 
                </div>
                <div class="col-md-12  col-sm-6 col-xs-12"> <a href="#">
                  <div class="info-box bg-aqua" style="border-radius:10px;"> <span class="info-box-icon"><i class="fa fa-user"></i></span>
                    <div class="info-box-content"> <span class="info-box-text">------ </span> <span class="info-box-number"> Skilled Strength With Us</span>
                      <div class="progress">
                        <div class="progress-bar" style="width: 100%"></div>
                      </div>
                      <span class="progress-description"><i class="fa fa-arrow-circle-right"></i> Click here for details</span> </div> 
                  </div>
                  </a> 
                </div> 
                 <div class="col-md-12  col-sm-6 col-xs-12"> <a href="#">
                  <div class="info-box bg-aqua" style="border-radius:10px;"> <span class="info-box-icon"><i class="fa fa-user"></i></span>
                    <div class="info-box-content"> <span class="info-box-text">------ </span> <span class="info-box-number"> OJT/Apprenticeship</span>
                      <div class="progress">
                        <div class="progress-bar" style="width: 100%"></div>
                      </div>
                      <span class="progress-description"><i class="fa fa-arrow-circle-right"></i> Click here for details</span> </div> 
                  </div>
                  </a> 
                </div> 
                <div class="col-md-12  col-sm-6 col-xs-12"> <a href="#">
                  <div class="info-box bg-aqua" style="border-radius:10px;"> <span class="info-box-icon"><i class="fa fa-user"></i></span>
                    <div class="info-box-content"> <span class="info-box-text">------ </span> <span class="info-box-number"> Notifications
</span>
                      <div class="progress">
                        <div class="progress-bar" style="width: 100%"></div>
                      </div>
                      <span class="progress-description"><i class="fa fa-arrow-circle-right"></i> Click here for details</span> </div> 
                  </div>
                  </a> 
                </div> 
                 <div class="col-md-12  col-sm-6 col-xs-12"> <a href="#">
                  <div class="info-box bg-aqua" style="border-radius:10px;"> <span class="info-box-icon"><i class="fa fa-user"></i></span>
                    <div class="info-box-content"> <span class="info-box-text">------ </span> <span class="info-box-number"> Our Team</span>
                      <div class="progress">
                        <div class="progress-bar" style="width: 100%"></div>
                      </div>
                      <span class="progress-description"><i class="fa fa-arrow-circle-right"></i> Click here for details</span> </div> 
                  </div>
                  </a> 
                </div>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-8">
           <div class="box box-success box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Skill Development Forum</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <img src="dist/img/sdf.jpg" class="img-responsive">
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
