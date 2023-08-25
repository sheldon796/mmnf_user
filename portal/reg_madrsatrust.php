<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?><?php
include("config.php");  
error_reporting (0);
if(isset($_POST['btn_submit']))
{    
		 $name = $_POST['name'];
		 $title = $_POST['title'];
		 $address = $_POST['address'];
		 $district = $_POST['district'];
		 $taluka = $_POST['taluka'];
		 $state = $_POST['state'];

		 $s_strength = $_POST['s_strength'];
		 $course = $_POST['course'];

		 $p_name = $_POST['p_name'];
		 $p_mobile = $_POST['p_mobile'];
		 $p_designation = $_POST['p_designation'];

		 $class = $_POST['class'];
		 $area = $_POST['area'];

		 $u1_name = $_POST['u1_name'];
		 $u1_mobile = $_POST['u1_mobile'];
		 $u1_qualification = $_POST['u1_qualification'];
		 $d1_qualification = $_POST['d1_qualification'];
		 $u2_name = $_POST['u2_name'];
		 $u2_mobile = $_POST['u2_mobile'];
		 $u2_qualification = $_POST['u2_qualification'];
		 $d2_qualification = $_POST['d2_qualification'];
		 $u3_name = $_POST['u3_name'];
		 $u3_mobile = $_POST['u3_mobile'];
		 $u3_qualification = $_POST['u3_qualification'];
		 $d3_qualification = $_POST['d3_qualification'];
		 $u4_name = $_POST['u4_name'];
		 $u4_mobile = $_POST['u4_mobile'];
		 $u4_qualification = $_POST['u4_qualification'];
		 $d4_qualification  = $_POST['d4_qualification'];
		 $u5_name = $_POST['u5_name'];
		 $u5_mobile = $_POST['u5_mobile'];
		 $u5_qualification = $_POST['u5_qualification'];
		 $d5_qualification = $_POST['d5_qualification'];

		 $premise = $_POST['premise'];
		 $av_ground = $_POST['av_ground'];
		 $av_dining = $_POST['av_dining'];
		 $source_water = $_POST['source_water'];
		 $em_mkit = $_POST['em_mkit'];
		 $govt_scheme = $_POST['govt_scheme'];
		 $cgovt_scheme = $_POST['cgovt_scheme'];
		 $diar_code = $_POST['diar_code'];
		 $rl_teachers = $_POST['rl_teachers'];
		 $r_audit = $_POST['r_audit'];
		 $compliance = $_POST['compliance'];
		 $p_financial = $_POST['p_financial'];
		 $f_raising = $_POST['f_raising'];
		 $fee_receipt = $_POST['fee_receipt'];

		 
	 $sql="INSERT INTO `reg_madrasa`(`name`, `title`, `address`, `district`, `taluka`, `state`, `s_strength`, `course`, `p_name`, `p_mobile`, `p_designation`, `class`, `area`, `u1_name`, `u1_mobile`, `u1_qualification`, `d1_qualification`, `u2_name`, `u2_mobile`, `u2_qualification`, `d2_qualification`, `u3_name`, `u3_mobile`, `u3_qualification`, `d3_qualification`, `u4_name`, `u4_mobile`, `u4_qualification`, `d4_qualification`, `u5_name`, `u5_mobile`, `u5_qualification`, `d5_qualification`, `premise`, `av_ground`, `av_dining`, `source_water`, `em_mkit`, `govt_scheme`, `cgovt_scheme`, `diar_code`, `rl_teachers`, `r_audit`, `compliance`, `p_financial`, `f_raising`, `fee_receipt`) VALUES ('$name', '$title', '$address', '$district', '$taluka', '$state', '$s_strength', '$course', '$p_name', '$p_mobile', '$p_designation', '$class', '$area', '$u1_name', '$u1_mobile', '$u1_qualification', '$d1_qualification', '$u2_name', '$u2_mobile', '$u2_qualification', '$d2_qualification', '$u3_name', '$u3_mobile', '$u3_qualification', '$d3_qualification', '$u4_name', '$u4_mobile', '$u4_qualification', '$d4_qualification', '$u5_name', '$u5_mobile', '$u5_qualification', '$d5_qualification', '$premise', '$av_ground', '$av_dining', '$source_water', '$em_mkit', '$govt_scheme', '$cgovt_scheme', '$diar_code', '$rl_teachers', '$r_audit', '$compliance', '$p_financial', '$f_raising', '$fee_receipt')";
	
	
	
	$result=$link->query($sql);
	if($result)
	{?>
<script> 
			window.alert("Information Updated")
        	window.location.href="reg_madrsatrust.php";
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
<title>Madarsa Trust Registration </title>
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
      <h1>Registration Form</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="registration.php">Registration </a></li>
        <li class="active">Madarsa Trust Registration </li>
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
              <h3 class="box-title">Madarsa Trust Registration </h3>
            </div>
            <form action="" method="post" role="form"  enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label>Name of Trust</label>
                  <input  class="form-control" type="text" onFocus="this.value=''"  name="name" id="name" placeholder="Enter Name of Trust">
                </div>
                <div class="form-group">
                  <label>Title of Madrasa</label>
                  <input  class="form-control" type="text" onFocus="this.value=''" name="title" id="title" placeholder="Enter the Title of madrasa Trust">
                </div>
                <div class="form-group">
                  <label>Full Address</label>
                  <input  class="form-control" type="text" onFocus="this.value=''" name="address" id="address" placeholder="Enter full Address">
                </div>
                <div class="form-group">
                  <label>District</label>
                  <input  class="form-control" type="text" onFocus="this.value=''" name="district" id="district" placeholder="Enter District">
                </div>
                <div class="form-group">
                  <label>Taluka</label>
                  <input  class="form-control" type="text" onFocus="this.value=''" name="taluka" id="taluka" placeholder="Enter Taluka">
                </div>
                <div class="form-group">
                  <label>State</label>
                  <input  class="form-control" type="text" onFocus="this.value=''" name="state" id="state" placeholder="Enter State">
                </div>
                <div class="form-group">
                  <label>Student Strength</label>
                  <input  class="form-control" type="text" onFocus="this.value=''" name="s_strength" id="s_strength" placeholder="Enter Student Strength">
                </div>
                <div class="form-group">
                  <label> Courses available</label>
                  <div class="input-select">
                    <select name="course" id="course" class="form-control">
                      <option >-Select Course-</option>
                      <option value="RCC">RCC</option>
                      <option value="Patra Roof">Patra Roof</option>
                      <option value="Shed">Shed</option>
                    </select>
                  </div>
                </div>
                <h5>Person Details who linked with MMNF :</h5>
                  
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Sr.No</th>
                      <th scope="col">Person name</th>
                      <th scope="col">Mobile No</th>
                      <th scope="col">Designation</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td><input  class="form-control" type="text" placeholder="Name" name="p_name" id="p_name" style="margin-bottom: 0px;"></td>
                      <td><input  class="form-control" type="text" placeholder="Mobile" name="p_mobile" id="p_mobile" style="margin-bottom: 0px;"></td>
                      <td><input  class="form-control" type="text" placeholder="Designation"  name="p_designation" id="p_designation" style="margin-bottom: 0px;"></td>
                    </tr>
                  </tbody>
                </table>
                <div class="form-group">
                  <label>Classroom Details</label>
                  <div class="input-select">
                    <select name="class" id="class" class="form-control">
                      <option>-Select-</option>
                      <option value="RCC">RCC</option>
                      <option value="Patra Roof">Patra Roof</option>
                      <option value="Shed">Shed</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label>Constucted Area in Sq.ft</label>
                  <input  class="form-control" type="text" onFocus="this.value=''" name="area" id="area" placeholder="Area in Sq.ft">
                </div>
                 
                <h5>Ulema's with Madrasa :</h5>
                <br>
                <br>
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Sr.No</th>
                      <th scope="col">Name</th>
                      <th scope="col">Mobile No</th>
                      <th scope="col">Qualification</th>
                      <th scope="col">Degree Qualification</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td><input  class="form-control" type="text" name="u1_name" id="u1_name" placeholder="Enter Name" style="margin-bottom: 0px;"></td>
                      <td><input  class="form-control" type="text" name="u1_mobile" id="u1_mobile" placeholder="Enter Mobile No" style="margin-bottom: 0px;"></td>
                      <td><input  class="form-control" type="text" name="u1_qualification" id="u1_qualification" placeholder="Enter Qualification" style="margin-bottom: 0px;"></td>
                      <td><input  class="form-control" type="text" name="d1_qualification" id="d1_qualification" placeholder="Enter Degree Qualification" style="margin-bottom: 0px;"></td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td><input  class="form-control" type="text" name="u2_name" id="u2_name" placeholder="Enter Name" style="margin-bottom: 0px;"></td>
                      <td><input  class="form-control" type="text" name="u2_mobile" id="u2_mobile" placeholder="Enter Mobile No" style="margin-bottom: 0px;"></td>
                      <td><input  class="form-control" type="text" name="u2_qualification" id="u2_qualification" placeholder="Enter Qualification" style="margin-bottom: 0px;"></td>
                      <td><input  class="form-control" type="text" name="d2_qualification" id="d2_qualification" placeholder="Enter Degree Qualification" style="margin-bottom: 0px;"></td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td><input  class="form-control" type="text" name="u3_name" id="u3_name" placeholder="Enter Name" style="margin-bottom: 0px;"></td>
                      <td><input  class="form-control" type="text" name="u3_mobile" id="u3_mobile" placeholder="Enter Mobile No" style="margin-bottom: 0px;"></td>
                      <td><input  class="form-control" type="text" name="u3_qualification" id="u3_qualification" placeholder="Enter Qualification" style="margin-bottom: 0px;"></td>
                      <td><input  class="form-control" type="text" name="d3_qualification" id="d3_qualification" placeholder="Enter Degree Qualification" style="margin-bottom: 0px;"></td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td><input  class="form-control" type="text" name="u4_name" id="u4_name" placeholder="Enter Name" style="margin-bottom: 0px;"></td>
                      <td><input  class="form-control" type="text" name="u4_mobile" id="u4_mobile" placeholder="Enter Mobile No" style="margin-bottom: 0px;"></td>
                      <td><input  class="form-control" type="text" name="u4_qualification" id="u4_qualification" placeholder="Enter Qualification" style="margin-bottom: 0px;"></td>
                      <td><input  class="form-control" type="text" name="d4_qualification" id="d4_qualification" placeholder="Enter Degree Qualification" style="margin-bottom: 0px;"></td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td><input  class="form-control" type="text" name="u5_name" id="u5_name" placeholder="Enter Name" style="margin-bottom: 0px;"></td>
                      <td><input  class="form-control" type="text" name="u5_mobile" id="u5_mobile" placeholder="Enter Mobile No" style="margin-bottom: 0px;"></td>
                      <td><input  class="form-control" type="text" name="u5_qualification" id="u5_qualification" placeholder="Enter Qualification" style="margin-bottom: 0px;"></td>
                      <td><input  class="form-control" type="text" name="d5_qualification" id="d5_qualification" placeholder="Enter Degree Qualification" style="margin-bottom: 0px;"></td>
                    </tr>
                  </tbody>
                </table>
                <div class="form-group">
                  <label>Do You Have Own Premises ? (YES / NO)</label>
                  <input  class="form-control" type="text" onFocus="this.value=''" name="premise" id="premise" placeholder="if yes then type YES | if no then type NO">
                </div>
                <div class="form-group">
                  <label>Is Ground Available to Play Student ? (YES / NO) </label>
                  <input  class="form-control" type="text" onFocus="this.value=''"  name="av_ground" id="av_ground" placeholder="if yes then type YES | if no then type NO">
                </div>
                <div class="form-group">
                  <label>Is Dining Hall Available ? (YES / NO)</label>
                  <input  class="form-control" type="text" onFocus="this.value=''" name+"av_dining" id="av_dining" placeholder="if yes then type YES | if no then type NO">
                </div>
                <div class="form-group">
                  <label>What is Source of Portable Water ?</label>
                  <input  class="form-control" type="text" onFocus="this.value=''" name="source_water" id="source_water" placeholder="Enter detail here">
                </div>
                <div class="form-group">
                  <label>Do you Have Medical Emergency kit ? (YES / NO)</label>
                  <input  class="form-control" type="text" onFocus="this.value=''" name="em_mkit" id="em_mkit" placeholder="if yes then type YES | if no then type NO">
                </div>
                <div class="form-group">
                  <label>Do you take beneift of Madrasa Modernisation scheme of State Govt ? (YES / NO)</label>
                  <input  class="form-control" type="text" onFocus="this.value=''" name="govt_scheme" id="govt_scheme" placeholder="if yes then type YES | if no then type NO">
                </div>
                <div class="form-group">
                  <label>Do you take benifit of SPQEM Scheme of Central Govt ? (YES / NO)</label>
                  <input  class="form-control" type="text" onFocus="this.value=''"  name="cgovt_scheme" id="cgovt_scheme" placeholder="if yes then type YES | if no then type NO">
                </div>
                <div class="form-group">
                  <label>Do you have U-Diar Code of Education Dept ? (YES / NO)</label>
                  <input  class="form-control" type="text" onFocus="this.value=''" name="diar_code" id="diar_code" placeholder="if yes then type YES | if no then type NO">
                </div>
                <div class="form-group">
                  <label>How many Teachers with Madrasa for Teaching Regional language(English, Maths, Science, Skill Courses etc.)</label>
                  <input  class="form-control" type="text" onFocus="this.value=''" name="rl_teachers" id="rl_teachers" placeholder="enter no of teachers">
                </div>
                <div class="form-group">
                  <label>Do you update with regular audit ? (YES / NO)</label>
                  <input  class="form-control" type="text" onFocus="this.value=''" name="r_audit" id="r_audit" placeholder="if yes then type YES | if no then type NO">
                </div>
                <div class="form-group">
                  <label>Do you update with Waqf / Charity Compliance ? (YES / NO)</label>
                  <input  class="form-control" type="text" onFocus="this.value=''" name="compliance" id="compliance" placeholder="if yes then type YES | if no then type NO">
                </div>
                <div class="form-group">
                  <label>Do you give passout Student's detail to MMNF for the purpose of their financial progress(education,job,skill training,business development) ? (YES / NO)</label>
                  <input  class="form-control" type="text" onFocus="this.value=''" name="p_financial" id="p_financial" placeholder="if yes then type YES | if no then type NO">
                </div>
                <div class="form-group">
                  <label>Do you have any commercial activities for fund raising ? (YES / NO)</label>
                  <input  class="form-control" type="text" onFocus="this.value=''" name="f_raising" id="f_raising" placeholder="if yes then type YES | if no then type NO">
                </div>
                <div class="form-group">
                  <div class="input-select">
                    <label>Upload MMNF registration fee transfer receipt.</label>
                    <input  class="form-control"  type="file" name="fee_receipt"  id="fee_receipt" >
                  </div>
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
