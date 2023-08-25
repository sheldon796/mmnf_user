<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?><?php
include("config.php");  
error_reporting (0);
if(isset($_POST['btn_submit']))
{  
		 $name = $_POST['name']; 
		 $address = $_POST['address'];
		 $taluka = $_POST['taluka'];
		 $district = $_POST['district'];
		 $state = $_POST['state'];
		 $mdc_reg = $_POST['mdc_reg'];

		 $ap_name = $_POST['ap_name'];
		 $ap_mobile = $_POST['ap_mobile'];
		 $ap_designation = $_POST['ap_designation'];
		 $w_time = $_POST['w_time'];

		 $d_name = $_POST['d_name'];
		 $d_qualification = $_POST['d_qualification'];
		 $d_mobile = $_POST['d_mobile'];
		 $space = $_POST['space'];
		 $lab = $_POST['lab'];

		 $p_name = $_POST['p_name'];
		 $p_qualification = $_POST['p_qualification'];
		 $p_mobile = $_POST['p_mobile'];

		 
	echo $sql="INSERT INTO `reg_mrc`(`name`, `address`, `taluka`, `district`, `state`, `mdc_reg`, `ap_name`, `ap_mobile`, `ap_designation`, `w_time`, `d_name`, `d_qualification`, `d_mobile`, `space`, `lab`, `p_name`, `p_qualification`, `p_mobile`) VALUES ('$name',  '$address',  '$taluka',  '$district',  '$state',  '$mdc_reg',  '$ap_name',  '$ap_mobile',  '$ap_designation',  '$w_time',  '$d_name',  '$d_qualification',  '$d_mobile',  '$space',  '$lab',  '$p_name',  '$p_qualification',  '$p_mobile')";
	
	
	
	$result=$link->query($sql);
	if($result)
	{?>
<script> 
			window.alert("Information Updated")
        	window.location.href="reg_MRC.php";
        </script>
<?php
	}
	else 
	{?>
<script> window.alert("Unable to Update")</script>
<?php 
	}
}
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Medical Releaf Centre Registration </title>
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
      <h1>Registration Form</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="registration.php">Registration </a></li>
        <li class="active">Medical Releaf Centre Registration </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Medical Releaf Centre Registration </h3>
            </div>
             
            <form action="" method="post" role="form"  enctype="multipart/form-data">
                         <div class="box-body">
                          <div class="form-group">
                            <label>Name of NGO</label>
                            <input class="form-control"type="text" onFocus="this.value=''" name="name" id="name" placeholder="Enter Name of NGO">
                          </div>
                          <div class="form-group">
                            <label>Address</label>
                            <input class="form-control"type="text" onFocus="this.value=''" name="address" id="address" placeholder="Enter full Address">
                          </div>
                          <div class="form-group">
                            <label>District</label>
                            <input class="form-control"type="text" onFocus="this.value=''" name="district" id="district" placeholder="Enter District">
                          </div>
                          <div class="form-group">
                            <label>Taluka</label>
                            <input class="form-control"type="text" onFocus="this.value=''" name="taluka" id="taluka" placeholder="Enter Taluka">
                          </div>
                          <div class="form-group">
                            <label>State</label>
                            <input class="form-control"type="text" onFocus="this.value=''" name="state" id="state" placeholder="Enter State">
                          </div>
                          <div class="form-group">
                            <label>MMNF's MDC Registration Number</label>
                            <input class="form-control"type="text" onFocus="this.value=''" name="mdc_reg" id="mdc_reg" placeholder="Enter MRC Registration no">
                          </div>
                          <div class="form-group">
                            <label>Name of Authority Person who manage MRC Responsibility.</label>
                            <input class="form-control"type="text" onFocus="this.value=''" name="ap_name" id="ap_name" placeholder="Enter Name of Authority Person ">
                          </div>
                          <div class="form-group">
                            <label>Mobile No</label>
                            <input class="form-control"type="text" onFocus="this.value=''" name="ap_mobile" id="ap_mobile" placeholder="Enter Mobile +91 xxxxxxxx87">
                          </div>
                          <div class="form-group">
                            <label>Designation of Authority Person</label>
                            <input class="form-control"type="text" onFocus="this.value=''" name="ap_designation" id="ap_designation" placeholder="Enter Degination of Trustee">
                          </div>
                          <div class="form-group">
                            <label>On Work Time</label>
                            <input class="form-control"type="text" onFocus="this.value=''" name="w_time" id="w_time" placeholder="Enter your  Work Time">
                          </div>
                          <div class="form-group">
                            <label>Name of care taker/ Dr. of MRC.</label>
                            <input class="form-control"type="text" onFocus="this.value=''" name="d_name" id="d_name" placeholder="Enter the name of care taker/ Dr. of MRC.">
                          </div>
                          <div class="form-group">
                            <label>Qualification of care taker.</label>
                            <input class="form-control"type="text" onFocus="this.value=''"  name="d_qualification" id="d_qualification" placeholder="Enter the Qualification of care taker">
                          </div>
                          <div class="form-group">
                            <label>Mobile No Of care taker.</label>
                            <input class="form-control"type="text" onFocus="this.value=''" name="d_mobile" id="d_mobile" placeholder="Enter the Mobile no +91 xxxxxx87">
                          </div>
                          <div class="form-group">
                            <label>Space Available for MRC, Excluding MDC</label>
                            <input class="form-control"type="text" onFocus="this.value=''" name="space" id="space" placeholder="Enter the area in sq.ft.">
                          </div>
                          <div class="form-group">
                            <label>Do You Have a pathology lab/ collection center?</label>
                            <input class="form-control"type="text" onFocus="this.value=''" name="lab" id="lab" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          
                          <h7> Give Details of Muslim person in your city who is working in medical field. :</h7>
                          
                          <table class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Sr.No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Qualification</th>
                                <th scope="col">Mobile no</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td><input class="form-control"type="text" name="p_name" id="p_name" placeholder="Enter Name" style="margin-bottom: 0px;"></td>
                                <td><input class="form-control"type="text" name="p_qualification" id="p_qualification" placeholder="Enter Qualification" style="margin-bottom: 0px;"></td>
                                <td><input class="form-control"type="text" name="p_mobile" id="p_mobile" placeholder="Enter Mobile No" style="margin-bottom: 0px;"></td>
                              </tr>
                            </tbody>
                          </table>
                          
                        </div>
                        <div class="box-footer">
                <div class="col-md-12" align="center">
                            <button type="submit" class="btn btn-warning" name="btn_submit"><strong>Submit</strong></button>
                          </div>
              </div>
            
                      </form>
            
            
          </div> 

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-4">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Important Information</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
              <div class="box-body">
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button> 
              </div>
             
          </div> 
        </div>
        <!--/.col (right) -->
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
