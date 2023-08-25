<?php
//include auth_session.php file on all user panel pages
include("config.php");include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> User Profile</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" href="dist/img/logof.png">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">  <!-- Font Awesome -->
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
      <h1>Help Line  <small><a href="helping_hands_add.php">Add Helping Hands</a></small> | <small><a href="helping_hands_receave.php">Update Receaved Money</a></small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content"  >

      <div class="row">
         
        <!-- /.col -->
        <div class="col-md-12">
          <div class="nav-tabs-custom" style="background-color:#F3F3F3">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#education" data-toggle="tab">Education</a></li>
              <li><a href="#health" data-toggle="tab">Health</a></li>
              <li><a href="#business" data-toggle="tab">Business</a></li>
                <li><a href="#disaster" data-toggle="tab">Disaster </a></li>
                <li><a href="#marriage" data-toggle="tab">Marriage</a></li>
                <li><a href="#ration_kit" data-toggle="tab">Ration Kit</a></li>
                <li><a href="#daily_medicine" data-toggle="tab">Daily Medicine</a></li>
                <li><a href="#homeless" data-toggle="tab">Homeless</a></li>

              
              
            </ul>
            <div class="tab-content"  style="background-color:#F3F3F3">
              <div class="active tab-pane" id="education">
              
              
              
              
              
              
              
              
              
              <div class="row">
         <?php
				$sql = 'SELECT * FROM helping_hands_portal WHERE  category ="Education"  ORDER BY id DESC';  
				$result=$link->query($sql);
                while($row = $result->fetch_array()){  ?>
         <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('dist/img/photo1.png') center center;">
              <h3 class="widget-user-username"><?php echo $row['ngo_name'];?></h3>
              <h5 class="widget-user-desc"><?php echo $row['verifier_name'];?></h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="upload/helping_hands_portal/<?php echo $row['upload'];?>" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo $row['amount'];?></h5>
                    <span class="description-text">Required</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo $row['receaved'];?></h5>
                    <span class="description-text">Receaved</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo $row['pending'];?></h5>
                    <span class="description-text">Pending</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <ul class="nav nav-stacked">
                <li><a href="#"><strong><?php echo $row['name'];?> </strong> </a></li>
                <p style="padding-left:15px; padding-right:15px;" align="justify"><?php echo $row['description'];?>.</p>
                
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
         <!-- /.col -->
         
         
          <?php 	} ?>
      </div>
       
                 
              </div>
              <!-- /.tab-pane -->
              
              
              
              
              
              
              <div class="tab-pane" id="health">
                  
       <div class="row">
         <?php
				$sql = 'SELECT * FROM helping_hands_portal WHERE  category ="Health"  ORDER BY id DESC';  
				$result=$link->query($sql);
                while($row = $result->fetch_array()){  ?>
         <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('dist/img/photo1.png') center center;">
              <h3 class="widget-user-username"><?php echo $row['ngo_name'];?></h3>
              <h5 class="widget-user-desc"><?php echo $row['verifier_name'];?></h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="upload/helping_hands_portal/<?php echo $row['upload'];?>" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo $row['amount'];?></h5>
                    <span class="description-text">Required</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo $row['receaved'];?></h5>
                    <span class="description-text">Receaved</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo $row['pending'];?></h5>
                    <span class="description-text">Pending</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <ul class="nav nav-stacked">
                <li><a href="#"><strong><?php echo $row['name'];?> </strong> </a></li>
                <p style="padding-left:15px; padding-right:15px;" align="justify"><?php echo $row['description'];?>.</p>
                
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
         <!-- /.col -->
         
         
          <?php 	} ?>
      </div>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="business"> 
               
       <div class="row">
         <?php
				$sql = 'SELECT * FROM helping_hands_portal WHERE  category ="Business"  ORDER BY id DESC';  
				$result=$link->query($sql);
                while($row = $result->fetch_array()){  ?>
         <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('dist/img/photo1.png') center center;">
              <h3 class="widget-user-username"><?php echo $row['ngo_name'];?></h3>
              <h5 class="widget-user-desc"><?php echo $row['verifier_name'];?></h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="upload/helping_hands_portal/<?php echo $row['upload'];?>" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo $row['amount'];?></h5>
                    <span class="description-text">Required</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo $row['receaved'];?></h5>
                    <span class="description-text">Receaved</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo $row['pending'];?></h5>
                    <span class="description-text">Pending</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <ul class="nav nav-stacked">
                <li><a href="#"><strong><?php echo $row['name'];?> </strong> </a></li>
                <p style="padding-left:15px; padding-right:15px;" align="justify"><?php echo $row['description'];?>.</p>
                
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
         <!-- /.col -->
         
         
          <?php 	} ?>
      </div>
              </div>
              <!-- /.tab-pane -->
               <div class="tab-pane" id="disaster"> 
               
       <div class="row">
         <?php
				$sql = 'SELECT * FROM helping_hands_portal WHERE  category ="Disaster"  ORDER BY id DESC';  
				$result=$link->query($sql);
                while($row = $result->fetch_array()){  ?>
         <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('dist/img/photo1.png') center center;">
              <h3 class="widget-user-username"><?php echo $row['ngo_name'];?></h3>
              <h5 class="widget-user-desc"><?php echo $row['verifier_name'];?></h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="upload/helping_hands_portal/<?php echo $row['upload'];?>" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo $row['amount'];?></h5>
                    <span class="description-text">Required</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo $row['receaved'];?></h5>
                    <span class="description-text">Receaved</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo $row['pending'];?></h5>
                    <span class="description-text">Pending</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <ul class="nav nav-stacked">
                <li><a href="#"><strong><?php echo $row['name'];?> </strong> </a></li>
                <p style="padding-left:15px; padding-right:15px;" align="justify"><?php echo $row['description'];?>.</p>
                
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
         <!-- /.col -->
         
         
          <?php 	} ?>
      </div>
              </div>
              <!-- /.tab-pane -->
               <div class="tab-pane" id="marriage"> 
               
       <div class="row">
         <?php
				$sql = 'SELECT * FROM helping_hands_portal WHERE  category ="Marriage"  ORDER BY id DESC';  
				$result=$link->query($sql);
                while($row = $result->fetch_array()){  ?>
         <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('dist/img/photo1.png') center center;">
              <h3 class="widget-user-username"><?php echo $row['ngo_name'];?></h3>
              <h5 class="widget-user-desc"><?php echo $row['verifier_name'];?></h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="upload/helping_hands_portal/<?php echo $row['upload'];?>" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo $row['amount'];?></h5>
                    <span class="description-text">Required</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo $row['receaved'];?></h5>
                    <span class="description-text">Receaved</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo $row['pending'];?></h5>
                    <span class="description-text">Pending</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <ul class="nav nav-stacked">
                <li><a href="#"><strong><?php echo $row['name'];?> </strong> </a></li>
                <p style="padding-left:15px; padding-right:15px;" align="justify"><?php echo $row['description'];?>.</p>
                
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
         <!-- /.col -->
         
         
          <?php 	} ?>
      </div>
              </div>
              <!-- /.tab-pane -->
               <div class="tab-pane" id="ration_kit"> 
               
       <div class="row">
         <?php
				$sql = 'SELECT * FROM helping_hands_portal WHERE  category ="Ration Kit"  ORDER BY id DESC';  
				$result=$link->query($sql);
                while($row = $result->fetch_array()){  ?>
         <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('dist/img/photo1.png') center center;">
              <h3 class="widget-user-username"><?php echo $row['ngo_name'];?></h3>
              <h5 class="widget-user-desc"><?php echo $row['verifier_name'];?></h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="upload/helping_hands_portal/<?php echo $row['upload'];?>" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo $row['amount'];?></h5>
                    <span class="description-text">Required</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo $row['receaved'];?></h5>
                    <span class="description-text">Receaved</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo $row['pending'];?></h5>
                    <span class="description-text">Pending</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <ul class="nav nav-stacked">
                <li><a href="#"><strong><?php echo $row['name'];?> </strong> </a></li>
                <p style="padding-left:15px; padding-right:15px;" align="justify"><?php echo $row['description'];?>.</p>
                
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
         <!-- /.col -->
         
         
          <?php 	} ?>
      </div>
              </div>
              <!-- /.tab-pane -->
               <div class="tab-pane" id="daily_medicine"> 
               
       <div class="row">
         <?php
				$sql = 'SELECT * FROM helping_hands_portal WHERE  category ="Daily Medicine"  ORDER BY id DESC';  
				$result=$link->query($sql);
                while($row = $result->fetch_array()){  ?>
         <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('dist/img/photo1.png') center center;">
              <h3 class="widget-user-username"><?php echo $row['ngo_name'];?></h3>
              <h5 class="widget-user-desc"><?php echo $row['verifier_name'];?></h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="upload/helping_hands_portal/<?php echo $row['upload'];?>" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo $row['amount'];?></h5>
                    <span class="description-text">Required</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo $row['receaved'];?></h5>
                    <span class="description-text">Receaved</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo $row['pending'];?></h5>
                    <span class="description-text">Pending</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <ul class="nav nav-stacked">
                <li><a href="#"><strong><?php echo $row['name'];?> </strong> </a></li>
                <p style="padding-left:15px; padding-right:15px;" align="justify"><?php echo $row['description'];?>.</p>
                
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
         <!-- /.col -->
         
         
          <?php 	} ?>
      </div>
              </div>
              <!-- /.tab-pane -->
               <div class="tab-pane" id="Homeless"> 
               
       <div class="row">
         <?php
				$sql = 'SELECT * FROM helping_hands_portal WHERE  category ="Education"  ORDER BY id DESC';  
				$result=$link->query($sql);
                while($row = $result->fetch_array()){  ?>
         <div class="col-md-4">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('dist/img/photo1.png') center center;">
              <h3 class="widget-user-username"><?php echo $row['ngo_name'];?></h3>
              <h5 class="widget-user-desc"><?php echo $row['verifier_name'];?></h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="upload/helping_hands_portal/<?php echo $row['upload'];?>" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo $row['amount'];?></h5>
                    <span class="description-text">Required</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo $row['receaved'];?></h5>
                    <span class="description-text">Receaved</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header"><?php echo $row['pending'];?></h5>
                    <span class="description-text">Pending</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <ul class="nav nav-stacked">
                <li><a href="#"><strong><?php echo $row['name'];?> </strong> </a></li>
                <p style="padding-left:15px; padding-right:15px;" align="justify"><?php echo $row['description'];?>.</p>
                
              </ul>
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
         <!-- /.col -->
         
         
          <?php 	} ?>
      </div>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2022 <a href="https://hudastechnologies.com">Huda's Technologies</a>.</strong> All rights
    reserved.
  </footer>

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
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
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
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
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
