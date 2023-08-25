<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?><?php
include("config.php");  
error_reporting (0);
if(isset($_POST['btn_submit']))
{  
		 
		 
$name = $_POST['name']; $address = $_POST['address']; $taluka = $_POST['taluka']; $district = $_POST['district']; $state = $_POST['state']; 


$location = $_POST['location']; $ap_name = $_POST['ap_name']; $ap_mobile = $_POST['ap_mobile']; $ap_designation = $_POST['ap_designation']; $inam_reg = $_POST['inam_reg']; $reg_upload = $_POST['reg_upload']; $tp_name = $_POST['tp_name']; $tp_mobile = $_POST['tp_mobile']; $tvp_name = $_POST['tvp_name']; $tvp_mobile = $_POST['tvp_mobile']; $s_name = $_POST['s_name']; $s_mobile = $_POST['s_mobile']; $gs_name = $_POST['gs_name']; $gs_mobile = $_POST['gs_mobile']; $tr_name = $_POST['tr_name']; $tr_mobile = $_POST['tr_mobile']; $m1_name = $_POST['m1_name']; $m1_mobile = $_POST['m1_mobile']; $m2_name = $_POST['m2_name']; $m2_mobile = $_POST['m2_mobile']; $m3_name = $_POST['m3_name']; $m3_mobile = $_POST['m3_mobile']; $m4_name = $_POST['m4_name']; $m4_mobile = $_POST['m4_mobile']; $b_detail = $_POST['b_detail']; $c_type = $_POST['c_type']; $area = $_POST['area']; $audit = $_POST['audit']; $compliance = $_POST['compliance']; $if_pending = $_POST['if_pending']; $premises = $_POST['premises']; $expect = $_POST['expect']; $aff_reg = $_POST['aff_reg']; $join_mmnf = $_POST['join_mmnf']; $fee_pdf = $_POST['fee_pdf']; $land_details = $_POST['land_details']; $advice = $_POST['advice'];

		 
	echo $sql="INSERT INTO `reg_inam`(`name`, `address`, `taluka`, `district`, `state`,`location`, `ap_name`, `ap_mobile`, `ap_designation`, `inam_reg`, `reg_upload`, `tp_name`, `tp_mobile`, `tvp_name`, `tvp_mobile`, `s_name`, `s_mobile`, `gs_name`, `gs_mobile`, `tr_name`, `tr_mobile`, `m1_name`, `m1_mobile`, `m2_name`, `m2_mobile`, `m3_name`, `m3_mobile`, `m4_name`, `m4_mobile`, `b_detail`, `c_type`, `area`, `audit`, `compliance`, `if_pending`, `premises`, `expect`, `aff_reg`, `join_mmnf`, `fee_pdf`, `land_details`, `advice`) VALUES ('$name', '$address', '$taluka', '$district', '$state', '$location', '$ap_name', '$ap_mobile', '$ap_designation', '$inam_reg', '$reg_upload', '$tp_name', '$tp_mobile', '$tvp_name', '$tvp_mobile', '$s_name', '$s_mobile', '$gs_name', '$gs_mobile', '$tr_name', '$tr_mobile', '$m1_name', '$m1_mobile', '$m2_name', '$m2_mobile', '$m3_name', '$m3_mobile', '$m4_name', '$m4_mobile', '$b_detail', '$c_type', '$area', '$audit', '$compliance', '$if_pending', '$premises', '$expect', '$aff_reg', '$join_mmnf', '$fee_pdf', '$land_details', '$advice')";
	
	
	
	$result=$link->query($sql);
	if($result)
	{?>
<script> 
			window.alert("Information Updated")
        	window.location.href="reg_inam_waqf.php";
        </script>
<?php
	}
	else 
	{?>
<script> window.alert("Unable to Update")</script>
<?php 
	}
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Iman Waqf  Registration </title>
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
        <li class="active">Iman Waqf  Registration</li>
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
              <h3 class="box-title">Iman Waqf  Registration</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form action="" method="post" role="form"  enctype="multipart/form-data">
                        <div class="box-body">
                          <div class="form-group">
                            <label>Name of Enam Waqf </label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="name" id="name" placeholder="Enter the name of Enam Waqf">
                          </div>
                          <div class="form-group">
                            <label>Address</label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="address" id="address" placeholder="Enter full Address">
                          </div>
                          <div class="form-group">
                            <label>District </label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="district" id="district"  placeholder="District">
                          </div>
                          <div class="form-group">
                            <label>Taluka</label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="taluka" id="taluka"  placeholder="Taluka">
                          </div>
                          <div class="form-group">
                            <label>State </label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="state" id="state"  placeholder="State">
                          </div>
                          <div class="form-group">
                            <label>Location</label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="location" id="location" placeholder="Location">
                          </div>
                          <div class="form-group">
                            <label>Name of Authority Person</label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="ap_name" id="ap_name" placeholder="Enter the name of Authority Person ">
                          </div>
                          <div class="form-group">
                            <label>Mobile No</label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="ap_mobile" id="ap_mobile"  placeholder="Enter Mobile No +91 xxxxxx88">
                          </div>
                          <div class="form-group">
                            <label>Degination of Trustee</label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="ap_degination" id="ap_degination"  placeholder="Degination of Trustee">
                          </div>
                          <div class="form-group">
                            <label>Enam Waqf Registration No</label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="inam_reg" id="inam_reg" placeholder="inam Waqf Registration No">
                          </div>
                          <div class="form-group">
                            <div class="input-select">
                              <label>Upload Registration Certificate</label>
                              <input class="form-control" name="reg_upload" id="reg_upload" type="file" >
                            </div>
                          </div>
                         
                          <h5>Enam waqf Trustee Information</h5>
                           
                          <table class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Sr.No</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Name</th>
                                <th scope="col">Mobile No</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <th> President</th>
                                <td><input class="form-control" type="text" name="tp_name" id="tp_name" placeholder="Name" style="margin-bottom: 0px;"></td>
                                <td><input class="form-control" type="text" name="tp_mobile" id="tp_mobile" placeholder="Mobile" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <th>Vice President</th>
                                <td><input class="form-control" type="text" name="tvp_name" id="tvp_name" placeholder="Name" style="margin-bottom: 0px;"></td>
                                <td><input class="form-control" type="text" name="tvp_mobile" id="tvp_mobile" placeholder="Mobile" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <th>Secretary</th>
                                <td><input class="form-control" type="text" name="s_name" id="s_name" placeholder="Name" style="margin-bottom: 0px;"></td>
                                <td><input class="form-control" type="text" name="s_mobile" id="s_mobile" placeholder="Mobile" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">4</th>
                                <th>General Secretary</th>
                                <td><input class="form-control" type="text" name="gs_name" id="gs_name" placeholder="Name" style="margin-bottom: 0px;"></td>
                                <td><input class="form-control" type="text" name="gs_mobile" id="gs_mobile" placeholder="Mobile" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">5</th>
                                <th>Treasurer</th>
                                <td><input class="form-control" type="text" name="tr_name" id="tr_name" placeholder="Name" style="margin-bottom: 0px;"></td>
                                <td><input class="form-control" type="text" name="tr_mobile" id="tr_mobile" placeholder="Mobile" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">6</th>
                                <th>Member</th>
                                <td><input class="form-control" type="text" name="m1_name" id="m1_name" placeholder="Name" style="margin-bottom: 0px;"></td>
                                <td><input class="form-control" type="text" name="m1_mobile" id="m1_mobile" placeholder="Mobile" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">7</th>
                                <th>Member</th>
                                <td><input class="form-control"  type="text" name="m2_name" id="m2_name"  placeholder="Name" style="margin-bottom: 0px;"></td>
                                <td><input class="form-control" type="text" name="m2_mobile" id="m2_mobile" placeholder="Mobile" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">8</th>
                                <th>Member</th>
                                <td><input class="form-control" type="text" name="tp_name" id="m3_name" placeholder="Name" style="margin-bottom: 0px;"></td>
                                <td><input class="form-control" type="text" name="m3_mobile" id="m3_mobile" placeholder="Mobile" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">9</th>
                                <th>Member</th>
                                <td><input class="form-control" type="text" name="m4_name" id="m4_name"  placeholder="Name" style="margin-bottom: 0px;"></td>
                                <td><input class="form-control" type="text" name="m4_mobile" id="m4_mobile" placeholder="Mobile" style="margin-bottom: 0px;"></td>
                              </tr>
                            </tbody>
                          </table>
                          <div class="form-group">
                            <label>Enter Building Details </label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="b_detail" id="b_detail" placeholder="Enter Property Details ">
                          </div>
                          <div class="form-group">
                            <label>Select Constructon Type</label>
                            <div class="input-select">
                              <select name="c_type" id="c_type"  class="form-control">
                                <option >-Select Constructon Type-</option>
                                <option value="RCC">RCC</option>
                                <option value="Patra_Roof">Patra Roof</option>
                                <option value="Shed">Shed</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Area in Sq.ft</label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="area" id="area" placeholder="Enter Area in Sq.ft">
                          </div>
                          <div class="form-group"> </div>
                          <div class="form-group">
                            <label>Do you update regular audit ? (YES/NO) </label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="audit" id="audit" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <label>Do you update inam compliance regularly ? (YES/NO) </label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="compliance" id="compliance" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <label>If update details are pending then give pending details. </label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="if_pending" id="if_pending" placeholder="Enter detail here">
                          </div>
                          <div class="form-group">
                            <label>Is there any building premises authority legal permission issue with your trust ? (YES/NO) </label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="premises" id="premises" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <label>What you Expect from MMNF ?</label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="expect" id="expect" placeholder="Enter detail here">
                          </div>
                          <div class="form-group">
                            <label>Do you have trust registration or affiliation with MMNF ? (YES/NO)</label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="aff_reg" id="aff_reg" placeholder="Do you have trust registration or affiliation with mmnf? ">
                          </div>
                          <div class="form-group">
                            <label>Did you join MMNF ? (YES/NO)</label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="join_mmnf" id="join_mmnf" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <label>If yes then Upload Registration fee transfer receipt. <small>(only PDF)</small></label>
                            <input class="form-control" name="fee_pdf" id="fee_pdf" type="file" >
                          </div>
                          <div class="form-group">
                            <label>Details of land with your trust.</label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="land_details" id="land_details" placeholder="Enter land details">
                          </div>
                          <div class="form-group">
                            <label>Do you want advice from MMNF expert team for the developement of property ? (YES/NO)</label>
                            <input class="form-control" type="text" onFocus="this.value=''" name="advice" id="advice" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          
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
