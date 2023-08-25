<?php include("config.php"); 
include("auth_session.php"); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Contact Us</title>
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
                <p> Website Administrator </p>
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
      <h1>MMNF</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Contact Us</a></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
      <div class="col-md-8">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
             <?php
				$id = $_GET['id'];
				$sql = "SELECT * FROM reg_tijarat WHERE id = '$id'";  
				$result=$link->query($sql);
               	$row = $result->fetch_array()
                //$id = $roww['id'];?>
                ``, `mobile`, `email`, `education`, `address`, `o_address`, `w_address`, `b_type`, `b_title`, `shopact`, `gst`, `msme`, `p_tax`, `esic`, `fassai`, `s_skilled`, `s_loan`, `m_scheme`, `f_loan`, `credit_loan`, `b_turnover`, `website`, `app`, `soc_media`, `platform`, `traning`, `account_h`, `coach`, `expect`
                
                <div class="box-body">
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                            <label for="exampleInputEmail1">Name of Trust</label>
                            <input type="text" class="form-control" name="name" id="name"  value="<?php echo $row[''];?>">
                          </div>
                           <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" name="title" id="title"  value="<?php echo $row[''];?>">
                          </div>
                          <div  class="form-group">
                            <label for="exampleInputEmail1" >Address</label>
                            <input type="text" class="form-control" name="address" id="address"  value="<?php echo $row[''];?>">
                          </div>
                           <div class="form-group">
                            <label for="exampleInputEmail1">Email id</label>
                            <input type="text" class="form-control" name="email" id="email"  value="<?php echo $row[''];?>">
                          </div>
                           <div  class="form-group">
                            <label for="exampleInputEmail1">Education</label>
                            <input type="text" class="form-control" name="education" id="education"  value="<?php echo $row[''];?>">
                          </div>
                           
                           <div class="form-group">
                            <label for="exampleInputEmail1">Office Address</label>
                            <input type="text" class="form-control" name="o_address" id="o_address"  value="<?php echo $row[''];?>">
                          </div>
                           <div class="form-group">
                            <label for="exampleInputEmail1">Work / Godown</label>
                            <input type="text" class="form-control" name="w_address" id="w_address"  value="<?php echo $row[''];?>">
                          </div>
                           <div  class="form-group">
                            <label  for="exampleInputEmail1">Type Of Business</label>
                            <input type="text" class="form-control" name="b_type" id="b_type"  value="<?php echo $row[''];?>">

                          </div>
                           <div  class="form-group">
                            <label  for="exampleInputEmail1">Title of Business. </label>
                            <input type="text" class="form-control" name="b_title" id="b_title"  value="<?php echo $row[''];?>">
                          </div>
                           <div  class="form-group">
                            <label  for="exampleInputEmail1">Do you have shopact ? (YES/NO) </label>
                            <input type="text" class="form-control" name="shopact" id="shopact"  value="<?php echo $row[''];?>">
                          </div>
                           <div  class="form-group">
                            <label  for="exampleInputEmail1">Do you have GST ? (YES/NO) </label>
                            <input type="text" class="form-control" name="gst" id="gst"  value="<?php echo $row[''];?>">
                          </div>
                           <div  class="form-group">
                            <label  for="exampleInputEmail1">Do you have MSME ? (YES/NO) </label>
                            <input type="text" class="form-control" name="msme" id="msme"  value="<?php echo $row[''];?>">
                          </div>
                           <div  class="form-group">
                            <label  for="exampleInputEmail1">Do you have professional TAX ? (YES/NO) </label>
                            <input type="text" class="form-control" name="p_tax" id="p_tax"  value="<?php echo $row[''];?>">
                          </div>
                           <div  class="form-group">
                            <label  for="exampleInputEmail1">Do you have ESIC ? (YES/NO) </label>
                            <input type="text" class="form-control" name="esic" id="esic"  value="<?php echo $row[''];?>">
                          </div>
                           <div  class="form-group">
                            <label  for="exampleInputEmail1">Do you have fassai ? (YES/NO) </label>
                            <input type="text" class="form-control" name="fassai" id="fassai"  value="<?php echo $row[''];?>">
                          </div>
                          
                           <div  class="form-group">
                            <label for="exampleInputEmail1">Staff with you</label>
                            <div class="input-select">
                              <select name="s_skilled" id="s_skilled">
                                <option >-select-</option>
                                <option  value="<?php echo $row[''];?>">skilled</option>
                                <option  value="<?php echo $row[''];?>">Unskilled</option>
                              </select>
                            </div>
                          </div>
                           <div  class="form-group">
                            <label for="exampleInputEmail1">Do You enjoy Government scheme of subsidy loan ? (YES/NO) </label>
                            <input type="text" class="form-control" name="s_loan" id="s_loan"  value="<?php echo $row[''];?>">
                          </div>
                           <div  class="form-group">
                            <label for="exampleInputEmail1">Do you enjoy minority loan scheme  ? (YES/NO) </label>
                            <input type="text" class="form-control" name="m_scheme" id="m_scheme"  value="<?php echo $row[''];?>">
                          </div>
                           <div  class="form-group">
                            <label for="exampleInputEmail1">Do you require intrest free loan ? (YES/NO) </label>
                            <input type="text" class="form-control" name="f_loan" id="f_loan"  value="<?php echo $row[''];?>">
                          </div>
                           <div  class="form-group">
                            <label for="exampleInputEmail1">Do you have cash / credit loan ? (YES/NO) </label>
                            <input type="text" class="form-control" name="credit_loan" id="credit_loan"  value="<?php echo $row[''];?>">
                          </div>
                           <div  class="form-group">
                            <label for="exampleInputEmail1">Your Business turnover.</label>
                            <div class="input-select">
                              <select name="b_turnover" id="b_turnover">
                                <option >-select-</option>
                                <option  value="<?php echo $row[''];?>">Upto 5 lakh</option>
                                <option  value="<?php echo $row[''];?>">Upto 10 lakh</option>
                                <option  value="<?php echo $row[''];?>">Upto 25 lakh</option>
                              </select>
                            </div>
                          </div>
                           <div  class="form-group">
                            <label for="exampleInputEmail1">Do you have website ? (YES/NO) </label>
                            <input type="text" class="form-control" name="website" id="website"  value="<?php echo $row[''];?>">
                          </div>
                           <div  class="form-group">
                            <label for="exampleInputEmail1">Do you have mobile app ? (YES/NO) </label>
                            <input type="text" class="form-control" name="app" id="app"  value="<?php echo $row[''];?>">
                          </div>
                           <div  class="form-group">
                            <label for="exampleInputEmail1">Which Social / Digital media presence you have ?</label>
                            <div class="input-select">
                              <select name="soc_media" id="soc_media">
                                <option >-select-</option>
                                <option  value="<?php echo $row[''];?>">Facebook</option>
                                <option  value="<?php echo $row[''];?>">Twitter</option>
                                <option  value="<?php echo $row[''];?>">Insta</option>
                                <option  value="<?php echo $row[''];?>">Linked in</option>
                              </select>
                            </div>
                          </div>
                           <div  class="form-group">
                            <label for="exampleInputEmail1">Are you linked with E-Commerce platform if yes then give its name. </label>
                            <input type="text" class="form-control" name="platform" id="platform"  value="<?php echo $row[''];?>">
                          </div>
                           <div  class="form-group">
                            <label for="exampleInputEmail1">Do you have completed any professional training or transforming lectures, if yes then please write about it ? </label>
                            <input type="text" class="form-control" name="training" id="training"  value="<?php echo $row[''];?>">
                          </div>
                           <div  class="form-group">
                            <label for="exampleInputEmail1">Are you connected with C.A who handles account  ? </label>
                            <input type="text" class="form-control" name="account_h" id="account_h"  value="<?php echo $row[''];?>">
                          </div>
                           <div  class="form-group">
                            <label for="exampleInputEmail1">Do you have any business coach portfolio manager ? </label>
                            <input type="text" class="form-control" name="coach" id="coach"  value="<?php echo $row[''];?>">
                          </div>
                           <div  class="form-group">
                            <label for="exampleInputEmail1">What you Expect from MMNF for own growth as well as for community upliftment ?</label>
                            <input type="text" class="form-control" name="expect" id="expect"  value="<?php echo $row[''];?>">
                          </div>
                           <div class="box-footer" align="center">
                <button type="submit" class="btn btn-primary" >Submit</button>
                </div>
                        </div>
                      </form>
          </div>
          </div>
        <div class="col-xs-4">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Contact Us</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Trust Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Education</th>
                    <th>Address</th>
                    <th>Business Type</th>
                     <th>Business Title</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
				$sql = 'SELECT * FROM reg_tijarat';  
				$result=$link->query($sql);
                while($row = $result->fetch_array()){  ?>
                  <?php $id = $row['id'];?>
                  <tr>
                  <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['mobile'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['education'];?></td>
                  <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['b_type'];?></td>
                      <td><?php echo $row['b_title'];?></td>

                    <th><div class="btn-group"><a href="" class="btn btn-primary"> <span><strong>View</strong></span> </a> </div></th>
                    <td><div class="btn-group"> <a href="events_achievement_edit.php?id=<?php echo $row['id'];?>" class="btn btn-warning"> <span><strong>Edit</strong></span> </a> <a href="delete.php?cid=<?php echo $id;?>" class="btn btn-danger"> <span><strong>Delete</strong></span> </a> </div></td>
                  </tr>
                  <?php
				}
				?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
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
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
