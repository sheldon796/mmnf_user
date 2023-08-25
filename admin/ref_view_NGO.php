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
              <h3 class="box-title">NGO/ CHARITY TRUST REGISTRATION FORM</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             <?php
				$id = $_GET['id'];
				$sql = "SELECT * FROM reg_nct WHERE id = '$id'";  
				$result=$link->query($sql);
               	$row = $result->fetch_array()
                //$id = $roww['id'];?>
            <form role="form">
              <div class="box-body">
              <div class= "row">
              <div class="col-md-6">
                 <label >Registration Number</label>
                 <input type="number" class="form-control" name="r_no" id="r_no" value="<?php echo $row['r_no'];?>">
               </div>
                <div class="col-md-6">
                 <label >Type of NGO(charity/ Section 8) </label>
                 <input type="text" class="form-control" name="r_no" id="r_no" value="<?php echo $row['t_ngo'];?>">
               </div>
              </div><br>
              <div class="form-group">
                  <label>Name of NGO/charity trust</label>
                  <input type="text" class="form-control" name="trust" id="trust" value="<?php echo $row['n_ngo'];?>">
                </div><br>
              <div class="form-group">
                  <label>Fill Address</label>
                  <input type="text" class="form-control" name="address" id="address" value="<?php echo $row['n_address'];?>">
                </div>
                <div class= "row">
                 <div class="col-md-4">
                <label >District</label>
                 <input type="text" class="form-control"name="district" id="district" value="<?php echo $row['n_district'];?>">
               </div>
               <div class="col-md-4">
                <label >Taluka</label>
                 <input type="text" class="form-control" name="taluka" id="taluka" value="<?php echo $row['n_taluka'];?>">
               </div>
               <div class="col-md-4">
                <label >PIN </label>
                 <input type="number" class="form-control" name="pin" id="pin" value="<?php echo $row['n_pin'];?>">
               </div>
               </div><br>
               <div class="form-group">
                  <label>Official Contact Number</label>
                  <input type="number" class="form-control" name="contact" id="contact" value="<?php echo $row['o_contact'];?>">
                </div><br>
               <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $row['email'];?>">
                </div>
                
                <div class="form-group">
                  <label>Website</label>
                  <input type="text" class="form-control" name="website" id="website" value="<?php echo $row['web'];?>">
                </div><br>
                
                <div class="row">
                <div class="col-md-6">
                  <label>12A</label>
                  <input type="text" class="form-control" name="12_a" id="12_a" value="<?php echo $row['a_12'];?>">
                </div><br>
                
                <div class="col-md-6">
                  <input type="file" id="exampleInputFile" placeholder=" choose file" value="<?php echo $row['a_12_up'];?>">
                </div>
                </div>
                
                
                 <div class="row">
                <div class="col-md-6">
                  <label>80G</label>
                  <input type="text" class="form-control" name="80_g" id="80_g"  value="<?php echo $row['g_80'];?>" >
                </div><br>
                <div class="col-md-6">
                  <input type="file" id="exampleInputFile" placeholder=" choose file" value="<?php echo $row['g_80_up'];?>">
                </div>
                </div>
                
                 <div class="row">
                <div class="col-md-6">
                  <label>FCRA</label>
                  <input type="text" class="form-control" name="fcra" id="fcra" value="<?php echo $row['fcra'];?>">
                </div><br>
                <div class="col-md-6">
                  <input type="file" id="exampleInputFile" placeholder=" choose file" value="<?php echo $row['fcra_up'];?>">
                </div>
                </div>
                


                
                 <div class="row">
                <div class="col-md-6">
                  <label>CSR 1</label>
                  <input type="text" class="form-control" name="csrone" id="csrone" value="<?php echo $row['csr_1'];?>">
                </div><br>
                <div class="col-md-6">
                  <input type="file" id="exampleInputFile" placeholder=" choose file" value="<?php echo $row['csr_1_up'];?>">
                </div>
                </div>
                
                
                 <div class="row">
                <div class="col-md-6">
                  <label>CSR 2</label>
                  <input type="text" class="form-control" name="csrtwo" id="csrtwo" value="<?php echo $row['csr_2'];?>">
                </div><br>
                <div class="col-md-6">
                  <input type="file" id="exampleInputFile" placeholder=" choose file" value="<?php echo $row['csr_2_up'];?>">
                </div>
                </div>
                
                
                 <div class="row">
                <div class="col-md-6">
                  <label>GST</label>
                  <input type="text" class="form-control" name="gst" id="gst" value="<?php echo $row['gst'];?>">
                </div><br>
                <div class="col-md-6">
                  <input type="file" id="exampleInputFile" placeholder=" choose file" value="<?php echo $row['gst_up'];?>">
                </div>
                </div>
                
                
                 <div class="row">
                <div class="col-md-6">
                  <label>MSME Registration</label>
                  <input type="text" class="form-control" name="msme" id="msme" value="<?php echo $row['msme_reg'];?>">
                </div><br>
                <div class="col-md-6">
                  <input type="file" id="exampleInputFile" placeholder=" choose file"  value="<?php echo $row['msme_reg_up'];?>">
                </div>
                </div>
                
                
                 <div class="row">
                <div class="col-md-6">
                  <label>Darpan Reg. Number</label>
                  <input type="text" class="form-control" name="darpan" id="darpan" value="<?php echo $row['dar_reg'];?>">
                </div><br>
                <div class="col-md-6">
                  <input type="file" id="exampleInputFile" placeholder=" choose file" value="<?php echo $row['dar_reg_up'];?>">
                </div>
                </div> 
                
                <div class="form-group">
                  <label>Focus Area 1</label>
                  <input type="text" class="form-control" name="areaone" id="areaone" value="<?php echo $row['f1'];?>">
                </div><br>


                 <div class="form-group">
                  <label>Focus Area 2</label>
                  <input type="text" class="form-control" name="areatwo" id="areatwo" value="<?php echo $row['f2'];?>">
                </div><br>
                
                <div class="form-group">
                  <label>Focus Area 3</label>
                  <input type="text" class="form-control" name="areathree" id="areathree" value="<?php echo $row['f3'];?>">
                </div><br>
                <div class="form-group">
                  <label>Focus Area 4</label>
                  <input type="text" class="form-control" name="areafour" id="areafour" value="<?php echo $row['f4'];?>">
                </div><br>
                <div class="form-group">
                  <label>Focus Area 5</label>
                  <input type="text" class="form-control" name="areafive" id="areafive" value="<?php echo $row['f5'];?>">
                </div><br>
                
                <div class= "row">
                 <div class="col-md-6">
                <label >Authority President Name</label>
                 <input type="text" class="form-control"name="district" id="district" value="<?php echo $row['ap1_name'];?>">
               </div>
               <div class="col-md-3">
                <label >Mobile</label>
                 <input type="number" class="form-control" name="mobile" id="mobile" value="<?php echo $row['ap1_mobile'];?>">
               </div>
               <div class="col-md-3">
                <label >Email </label>
                 <input type="email" class="form-control" name="email" id="email" value="<?php echo $row['ap1_mail'];?>">
               </div>
               </div><br>
               
               <div class= "row">
                 <div class="col-md-6">
                <label >Authority President Name</label>
                 <input type="text" class="form-control"name="district" id="district" value="<?php echo $row['ap2_name'];?>">
               </div>
               <div class="col-md-3">
                <label >Mobile</label>
                 <input type="number" class="form-control" name="mobile" id="mobile" value="<?php echo $row['ap2_mobile'];?>">
               </div>
               <div class="col-md-3">
                <label >Email </label>
                 <input type="email" class="form-control" name="email" id="email" value="<?php echo $row['ap2_mail'];?>">
               </div>
               </div><br>


                
                
                
     

                

              
              
              
              
              
                
              
               <!-- <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div>-->
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
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
                    <th>Registration Number</th>
                    <th>Type of NGO </th>
                    <th>Name of NGO </th>
                    <th>Fill Address </th>
                    <th>District </th>
                    <th>Taluka </th>
                    <th>PIN </th>
                    <th>Off. Contact</th>
                    <th>Email </th>
                    <th>Website </th>
                    <th>A. P. Name </th>
                    <th>A. P. Mobile</th>
                    <th>A. P. Email Id</th>
                    <th>A. P.  Name </th>
                    <th>A. P. Mobile </th>
                    <th>A. P. Email Id</th>
                    <th>Activity</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
				$sql = 'SELECT * FROM reg_nct';  
				$result=$link->query($sql);
                while($row = $result->fetch_array()){  ?>
                  <?php $id = $row['id'];?>
                  <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['r_no'];?></td>
                    <td><?php echo $row['t_ngo'];?></td>
                    <td><?php echo $row['n_ngo'];?></td>
                    <td><?php echo $row['n_address'];?></td>
                    <td><?php echo $row['n_district'];?></td>
                    <td><?php echo $row['n_taluka'];?></td>
                    <td><?php echo $row['n_pin'];?></td>
                    <td><?php echo $row['o_contact'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['web'];?></td>
                    <td><?php echo $row['ap1_name'];?></td>
                    <td><?php echo $row['ap1_mobile'];?></td>
                    <td><?php echo $row['ap1_mail'];?></td>
                    <td><?php echo $row['ap2_name'];?></td>
                    <td><?php echo $row['ap2_mobile'];?></td>
                    <td><?php echo $row['ap2_mail'];?></td>
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
