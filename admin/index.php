<?php include("config.php"); 

include("auth_session.php"); ?>

<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>Homa page</title>

<!-- Tell the browser to be responsive to screen width -->

<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

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

<link rel="stylesheet" href="css/font-awesome.css">

<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">

</head>

<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->

    <a href="index.php" class="logo">

    <!-- mini logo for sidebar mini 50x50 pixels -->

    <span class="logo-mini"><b>MMNF</b></span>

    <!-- logo for regular state and mobile devices -->

    <span class="logo-lg"><b>MMNF</b></span> </a>

    <!-- Header Navbar: style can be found in header.less -->

    <nav class="navbar navbar-static-top">

      <!-- Sidebar toggle button-->

      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"> <span class="sr-only">Toggle navigation</span> </a>

      <div class="navbar-custom-menu">

        <ul class="nav navbar-nav">

          <li class="dropdown user user-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> <span class="hidden-xs">Website Administrator</span> </a>

            <ul class="dropdown-menu">

              <!-- User image -->

              <li class="user-header"> <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p> MMNF <small>Administrator</small> </p>

              </li>

              <!-- Menu Body -->

              <!-- Menu Footer-->

              <li class="user-footer">

                <div class="pull-right"> <a href="logout.php" class="btn btn-default btn-flat">Sign out</a> </div>

              </li>

            </ul>

          </li>

        </ul>

      </div>

    </nav>

  </header>

  <!-- Left side column. contains the logo and sidebar -->

  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->

    <section class="sidebar">

      <!-- Sidebar user panel -->

      <div class="user-panel">

        <div class="pull-left image"> <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> </div>

        <div class="pull-left info">

          <p>Website Administrator</p>

          <a href="#"><i class="fa fa-circle text-success"></i> Online</a> </div>

      </div>

      <!-- search form -->

      <!-- /.search form -->

      <!-- sidebar menu: : style can be found in sidebar.less -->

      <?php include("navigation.php"); ?>

    </section>

    <!-- /.sidebar -->

  </aside>

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <h1> Dashboard <small>Control panel</small> </h1>

      <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

        <li class="active">Dashboard</li>

      </ol>

    </section>

    <!-- Main content -->

    <section class="content">

      <!-- Small boxes (Stat box) -->

      <div class="row">

        <div class="col-lg-4 col-xs-6">

          <!-- small box -->

          







          <div class="small-box bg-aqua" style="background-color:#993300">

            <div class="inner">

              <h3>Our Sponsors  </h3>

              <p>Notice Board</p>

            </div>

            <div class="icon"> <i class="ion ion-bag"></i> </div>

            <a href="sponsors.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> </div>

        </div>

        <!-- ./col -->

        <div class="col-lg-4 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-green">

            <div class="inner">

              <h3>NGO With Us</h3>

              <p>Notice Board</p>

            </div>

            <div class="icon"> <i class="ion ion-stats-bars"></i> </div>

            <a href="advertisements.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> </div>

        </div>

        <!-- ./col -->

        <div class="col-lg-4 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-yellow">

            <div class="inner">

              <h3>Notice Board </h3>

              <p>Notice Board</p>

            </div>

            <div class="icon"> <i class="ion ion-person-add"></i> </div>

            <a href="notice_board.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> </div>

        </div>

        <!-- ./col -->

        

      </div>

      <!-- /.row -->

      <div class="row">

        <div class="col-lg-4 col-xs-6">

          <!-- small box -->

          







          <div class="small-box bg-aqua">

            <div class="inner">

              <h3>Events</h3>

              <p>Notice Board</p>

            </div>

            <div class="icon"> <i class="ion ion-bag"></i> </div>

            <a href="events.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> </div>

        </div>

        <!-- ./col -->

        <div class="col-lg-4 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-green">

            <div class="inner">

              <h3>Achievements</h3>

              <p>Notice Board</p>

            </div>

            <div class="icon"> <i class="ion ion-stats-bars"></i> </div>

            <a href="achievements.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> </div>

        </div>

        <!-- ./col -->

        <div class="col-lg-4 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-yellow">

            <div class="inner">

              <h3>Guest Lecture</h3>

              <p>Notice Board</p>

            </div>

            <div class="icon"> <i class="ion ion-person-add"></i> </div>

            <a href="guest_lecture.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> </div>

        </div>

        <!-- ./col -->

        

      </div>

      <!-- /.row -->

      

      <div class="row">

        <div class="col-lg-4 col-xs-6">

          <!-- small box -->

          







          <div class="small-box bg-aqua">

            <div class="inner">

              <h3>Photo Gallery</h3>

              <p>Notice Board</p>

            </div>

            <div class="icon"> <i class="ion ion-bag"></i> </div>

            <a href="photogallery.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> </div>

        </div>

        <!-- ./col -->

        <div class="col-lg-4 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-green">

            <div class="inner">

              <h3>Video Gallery</h3>

              <p>Notice Board</p>

            </div>

            <div class="icon"> <i class="ion ion-stats-bars"></i> </div>

            <a href="videogallery.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> </div>

        </div>

        <!-- ./col -->

        <div class="col-lg-4 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-yellow">

            <div class="inner">

              <h3>News & Media</h3>

              <p>Notice Board</p>

            </div>

            <div class="icon"> <i class="ion ion-person-add"></i> </div>

            <a href="news_media.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> </div>

        </div>

        <!-- ./col -->

        

      </div>

      <!-- /.row -->

      

      <div class="row">

        <div class="col-lg-4 col-xs-6">

          <!-- small box -->

          







          <div class="small-box bg-aqua">

            <div class="inner">

              <h3>Helping Hands </h3>

              <p>Notice Board</p>

            </div>

            <div class="icon"> <i class="ion ion-bag"></i> </div>

            <a href="helping_hands.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> </div>

        </div>

        <!-- ./col -->

        <div class="col-lg-4 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-green">

            <div class="inner">

              <h3>Contact Us</h3>

              <p>Notice Board</p>

            </div>

            <div class="icon"> <i class="ion ion-stats-bars"></i> </div>

            <a href="contact_us.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> </div>

        </div>

        <!-- ./col -->

        <div class="col-lg-4 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-yellow">

            <div class="inner">

              <h3>Feedback</h3>

              <p>Notice Board</p>

            </div>

            <div class="icon"> <i class="ion ion-person-add"></i> </div>

            <a href="result_notice_board.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> </div>

        </div>

        <!-- ./col -->

        

      </div>

      <!-- /.row -->

      

      <div class="row">

        <div class="col-lg-4 col-xs-6">

          <!-- small box -->

          







          <div class="small-box bg-aqua">

            <div class="inner">

              <h3>General </h3>

              <p>Notice Board</p>

            </div>

            <div class="icon"> <i class="ion ion-bag"></i> </div>

            <a href="general_notice_board.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> </div>

        </div>

        <!-- ./col -->

        <div class="col-lg-4 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-green">

            <div class="inner">

              <h3>Exam </h3>

              <p>Notice Board</p>

            </div>

            <div class="icon"> <i class="ion ion-stats-bars"></i> </div>

            <a href="exam_notice_board.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> </div>

        </div>

        <!-- ./col -->

        <div class="col-lg-4 col-xs-6">

          <!-- small box -->

          <div class="small-box bg-yellow">

            <div class="inner">

              <h3>Result </h3>

              <p>Notice Board</p>

            </div>

            <div class="icon"> <i class="ion ion-person-add"></i> </div>

            <a href="result_notice_board.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> </div>

        </div>

        <!-- ./col -->

        

      </div>
 
      

      

      

       

      

    </section>

    <!-- /.content -->

  </div>

  <!-- /.content-wrapper -->

  <footer class="main-footer">

    <div class="pull-right hidden-xs"> <b>Version</b> 2.4.0 </div>

    <strong>Copyright &copy; 2022-2023 <a href="hudastechnologies.com">Huda's Technologies</a>.</strong> All rights

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

