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
            <!-- /.box-header -->
            <!-- form start -->
            <?php
				$id = $_GET['id'];
				$sql = "SELECT * FROM reg_inam WHERE id = '$id'";  
				$result=$link->query($sql);
               	$roww = $result->fetch_array()
                //$id = $roww['id'];?>
                
            <form role="form">
              <div class="box-body">
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Name of Enam Waqf</label>
                  <input type="text" onFocus="this.value" name="name" class="form-control" id="id" placeholder="Enter Name" value="<?php echo $roww['name'];?>">
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputPassword1">Address</label>
                  <input type="text" onFocus="this.value" name="address" class="form-control" id="address" placeholder="Enter Address" value="<?php echo $roww['address'];?>">
                </div>
                <div class="form-group col-md-4">
                  <label for="exampleInputPassword1">District</label>
                  <input type="text" onFocus="this.value" name="district" class="form-control" id="district" placeholder="Enter District" value="<?php echo $roww['district'];?>">
                </div>
                <div class="form-group col-md-4">
                  <label for="exampleInputPassword1">Taluka</label>
                  <input type="text" onFocus="this.value" name="taluka" class="form-control" id="taluka" placeholder="Enter Taluka" value="<?php echo $roww['taluka'];?>">
                </div>
                <div class="form-group col-md-4">
                  <label for="exampleInputPassword1">State</label>
                  <input type="text" onFocus="this.value" name="state" class="form-control" id="state" placeholder="Enter State" value="<?php echo $roww['state'];?>">
                </div>
                 <div class="form-group col-md-12">
                  <label for="exampleInputPassword1">Location</label>
                  <input type="text" onFocus="this.value" name="location" class="form-control" id="location" placeholder="Enter Location" value="<?php echo $roww['location'];?>">
                </div>
                 <div class="form-group col-md-12">
                  <label for="exampleInputPassword1">Name of Authority Person</label>
                  <input type="text" onFocus="this.value" name="ap_name" class="form-control" id="ap_name" placeholder="Enter Authority Name" value="<?php echo $roww['ap_name'];?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputPassword1">Mobile No.</label>
                  <input type="text" onFocus="this.value" name="ap_mobile" class="form-control" id="ap_mobile" placeholder=" Mobile No." value="<?php echo $roww['ap_mobile'];?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputPassword1">Designation of Trustee</label>
                  <input type="text" onFocus="this.value" name="ap_designation" class="form-control" id="ap_designation" placeholder="Designation of Trustee" value="<?php echo $roww['ap_designation'];?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputPassword1">Enam Waqf Registration No.</label>
                  <input type="text" onFocus="this.value" name="inam_reg" class="form-control" id="inam_reg" placeholder=" inam waqf reg. no." value="<?php echo $roww['inam_reg'];?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputPassword1">Upload Registration Certificate</label>
                  <input type="file" onFocus="this.value" name="reg_upload" id="reg_upload" class="form-control-file" value="<?php echo $roww['reg_upload'];?>">
                </div>
                <div class="col-md-12"><h4> Enam Waqf Trustee Information </h4></div>
                <table class="table table-stripped table-bordered">
                 <thead>
                  <tr>
                   <th scope="col">Sr.No.</th>
                   <th scope="col">Designation</th>
                   <th scope="col">Name</th>
                   <th scope="col">Mobile No.</th>
                  </tr>
                 </thead>
                 <tbody>
                 
                  <tr>
                   <th scope="row">1</th>
                   <th>President</th>
                   <td><input type="text" name="tp_name" id="tp_name" placeholder="Name" style="margin-bottom: 0px;" value="<?php echo $roww['tp_name'];?>"></td>
                   <td><input type="text" name="tp_mobile" id="tp_mobile" placeholder="Mobile No." style="margin-bottom: 0px;" value="<?php echo $roww['tp_mobile'];?>"></td>
                  </tr>
                  <tr>
                   <th scope="row">2</th>
                   <th>Vice President</th>
                   <td><input type="text" name="tvp_name" id="tvp_name" placeholder="Name" style="margin-bottom: 0px;" value="<?php echo $roww['tvp_name'];?>"></td>
                   <td><input type="text" name="tvp_mobile" id="tnp_mobile" placeholder="Mobile No." style="margin-bottom: 0px;" value="<?php echo $roww['tvp_mobile'];?>"></td>
                  </tr>
                  <tr>
                   <th scope="row">3</th>
                   <th>Secretary</th>
                   <td><input type="text" name="s_name" id="s_name" placeholder="Name" style="margin-bottom: 0px;" value="<?php echo $roww['s_name'];?>"></td>
                   <td><input type="text" name="s_mobile" id="s_mobile" placeholder="Mobile No." style="margin-bottom: 0px;" value="<?php echo $roww['s_mobile'];?>"></td>
                  </tr>
                  <tr>
                   <th scope="row">4</th>
                   <th>General Secretary</th>
                   <td><input type="text" name="gs_name" id="gs_name" placeholder="Name" style="margin-bottom: 0px;" value="<?php echo $roww['gs_name'];?>"></td>
                   <td><input type="text" name="gs_mobile" id="gs_mobile" placeholder="Mobile No." style="margin-bottom: 0px;" value="<?php echo $roww['gs_mobile'];?>"></td>
                  </tr>
                  <tr>
                   <th scope="row">5</th>
                   <th>Treasurer</th>
                   <td><input type="text" name="tr_name" id="tr_name" placeholder="Name" style="margin-bottom: 0px;" value="<?php echo $roww['tr_name'];?>"></td>
                   <td><input type="text" name="tr_mobile" id="tr_mobile" placeholder="Mobile No." style="margin-bottom: 0px;" value="<?php echo $roww['tr_mobile'];?>"></td>
                  </tr>
                  <tr>
                   <th scope="row">6</th>
                   <th>Member</th>
                   <td><input type="text" name="m1_name" id="m1_name" placeholder="Name" style="margin-bottom: 0px;" value="<?php echo $roww['m1_name'];?>"></td>
                   <td><input type="text" name="m1_mobile" id="m1_mobile" placeholder="Mobile No." style="margin-bottom: 0px;" value="<?php echo $roww['m1_mobile'];?>"></td>
                  </tr>
                  <tr>
                   <th scope="row">7</th>
                   <th>Member</th>
                   <td><input type="text" name="m2_name" id="m2_name" placeholder="Name" style="margin-bottom: 0px;" value="<?php echo $roww['m2_name'];?>"></td>
                   <td><input type="text" name="m2_mobile" id="m2_mobile" placeholder="Mobile No." style="margin-bottom: 0px;" value="<?php echo $roww['m2_mobile'];?>"></td>
                  </tr>
                  <tr>
                   <th scope="row">8</th>
                   <th>Member</th>
                   <td><input type="text" name="m3_name" id="m3_name" placeholder="Name" style="margin-bottom: 0px;" value="<?php echo $roww['m3_name'];?>"></td>
                   <td><input type="text" name="m3_mobile" id="m3_mobile" placeholder="Mobile No." style="margin-bottom: 0px;" value="<?php echo $roww['m3_mobile'];?>"></td>
                  </tr>
                  <tr>
                   <th scope="row">9</th>
                   <th>Member</th>
                   <td><input type="text" name="m4_name" id="m4_name" placeholder="Name" style="margin-bottom: 0px;" value="<?php echo $roww['m4_name'];?>"></td>
                   <td><input type="text" name="m4_mobile" id="m4_mobile" placeholder="Mobile No." style="margin-bottom: 0px;" value="<?php echo $roww['m4_mobile'];?>"></td>
                  </tr>
                 </tbody>
                </table>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Enter Building Details</label>
                  <input type="text" onFocus="this.value" name="b_details" class="form-control" id="b_details" placeholder="Enter Property Details" value="<?php echo $roww['b_detail'];?>">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Select Contruction Type</label>
                  <!--<input type="text" onFocus="this.value" name="name" class="form-control" id="id" placeholder="Enter Name">-->
                  <div class="input-select">
                  <select name="c_type" id="c_type">
                  <option value="<?php echo $roww['c_type'];?>"><?php echo $roww['c_type'];?></option>
                  <option value="RCC">RCC</option>
                  <option value="Patra_Roof">Patra Roof</option>
                  <option value="Shed">Shed</option>
                  </select>
                  </div>
                </div> 
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Area in sq.ft.</label>
                  <input type="text" onFocus="this.value" name="area" class="form-control" id="area" placeholder="Enter Area in sq.ft" value="<?php echo $roww['area'];?>">
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Do You Update Regular Audit?(Yes/NO)</label>
                  <input type="text" onFocus="this.value" name="audit" class="form-control" id="audit" placeholder="Yes/No" value="<?php echo $roww['audit'];?>">
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Do You Update Inam Complaince Regulary?(Yes/No)</label>
                  <input type="text" onFocus="this.value" name="complaince" class="form-control" id="complaince" placeholder="Yes/No" value="<?php echo $roww['compliance'];?>">
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">If update details are pending then give pending details.</label>
                  <input type="text" onFocus="this.value" name="if_pending" class="form-control" id="if_pending" placeholder="Enter Details Here" value="<?php echo $roww['if_pending'];?>">
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Is there any building premises authority legal permission issue with your trust?(Yes/No) </label>
                  <input type="text" onFocus="this.value" name="premises" class="form-control" id="premises" placeholder="(Yes/No)" value="<?php echo $roww['premises'];?>">
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">What you Expect from MMNF</label>
                  <input type="text" onFocus="this.value" name="expect" class="form-control" id="expect" placeholder="Enter Here" value="<?php echo $roww['expect'];?>">
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Do you have trust registration of affiliation with MMNF?(Yes/No)</label>
                  <input type="text" onFocus="this.value" name="aff_reg" class="form-control" id="aff_reg" placeholder="(Yes/No" value="<?php echo $roww['aff_reg'];?>">
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Did you join MMNF?(Yes/No)</label>
                  <input type="text" onFocus="this.value" name="join_mmnf" class="form-control" id="join_mmnf" placeholder="Yes/No" value="<?php echo $roww['join_mmnf'];?>">
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">If yes the Upload Registration fee transfer receipt.(Only PDF)</label>
                  <input type="file" name="fee_pdf" class="form-control-file" id="fee_pdt" value="<?php echo $roww['fee_pdf'];?>">
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Details of land with your trust</label>
                  <input type="text" onFocus="this.value" name="land_details" class="form-control" id="land_details" placeholder="Enter Land Details" value="<?php echo $roww['land_details'];?>">
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Do you want advice from MMNF expert team for the development of property?(Yes/No)</label>
                  <input type="text" onFocus="this.value" name="advice" class="form-control" id="advice" placeholder="Enter Here" value="<?php echo $roww['advice'];?>">
                </div>
                
                
                
                 
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" >Submit</button>
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
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>Activity</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
				$sql = 'SELECT * FROM contact_us';  
				$result=$link->query($sql);
                while($row = $result->fetch_array()){  ?>
                  <?php $id = $row['id'];?>
                  <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['subject'];?></td>
                    <td><?php echo $row['message'];?></td>
                    <th></th>
                    <th></th>
                    <th></th>
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
