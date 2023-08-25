<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?><?php include("config.php"); 
error_reporting (0);
if(isset($_POST['btn_submit']))
{   
		$name = $_POST['name'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$qualification = $_POST['qualification'];
		$occ = $_POST['occ'];
		$experty = $_POST['experty'];
		$s_experience = $_POST['s_experience'];
		$age_group = $_POST['age_group'];
		$gender = $_POST['gender'];
		$r_join = $_POST['r_join'];
	 
	 
	  $sql="INSERT INTO `reg_individual`( `name`, `mobile`, `email`, `address`, `qualification`, `occ`, `experty`, `s_experience`, `age_group`, `gender`, `r_join`) VALUES ('$name', '$mobile', '$email', '$address', '$qualification', '$occ', '$experty', '$s_experience', '$age_group', '$gender', '$r_join')";
	$result=$link->query($sql);
	if($result)
	{
	?>
<script> 
			window.alert("Information Updated")
        	window.location.href="ref_individual.php";
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
<title>Individual  Registration</title>
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
        <li class="active">Individual  Registration</li>
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
              <h3 class="box-title">Individual  Registration</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="submit.php" method="post" role="form"  enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text"   name="name" id="name" placeholder="Enter Full Name"class="form-control">
                </div>
                <div class="form-group">
                  <label>Mobile</label>
                  <input type="text"  name="mobile" id="mobile" placeholder="Enter Mobile Number +91 xxxxxxxx98"class="form-control">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text"  name="email" id="email" placeholder="Enter Email ID mmnf@gmai.com"class="form-control">
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" name="address" id="address" placeholder="Enter Full Address"class="form-control">
                </div>
                <div class="form-group">
                  <label>Qualification</label>
                  <div class="input-select">
                    <select name="qualification" id="qualificaton"class="form-control">
                      <option>-Select-</option>
                      <option value="SSC">SSC</option>
                      <option value="HSC">HSC</option>
                      <option value="Graduate">Graduate</option>
                      <option value="Post-Graduate">Post-Graduate</option>
                      <option value="Docrate">Docrtate</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label>Occupation</label>
                  <input type="text"  name="occ" id="occ" placeholder="Enter Occupation"class="form-control">
                </div>
                <div class="form-group">
                  <label>Experty</label>
                  <input type="text"  name="experty" id="experty" placeholder="Enter Experty"class="form-control">
                </div>
                <div class="form-group">
                  <label>Social Experience</label>
                  <div class="input-select">
                    <select name="s_experience" id="s_experience"class="form-control">
                      <option>-Select-</option>
                      <option value="Education">Education</option>
                      <option value="Health">Health</option>
                      <option value="Urban_Development">Urban Development</option>
                      <option value="Rural_Development">Rural Development</option>
                      <option value="Enviroment">Environment</option>
                      <option value="Business_Development">Business Development</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label>Age Group</label>
                  <div class="input-select">
                    <select name="age_group" id="age_group"class="form-control">
                      <option >-Select-</option>
                      <option value="Below 15">Below 15</option>
                      <option value="15-20">15-20</option>
                      <option value="20-25">20-25</option>
                      <option value="25-30">25-30</option>
                      <option value="30-35">30-35</option>
                      <option value="35-40">35-40</option>
                      <option value="Above 40">Above 40</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label>Gender</label>
                  <div class="input-select">
                    <select name="gender" id="gender" class="form-control">
                      <option >-Select</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Others">Others</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label>Reason of joining</label>
                  <input type="text"class="form-control"  name="r_join" id="r_join" placeholder="Enter The Reason of joining">
                </div>
              </div>
              <div class="box-footer">
                <div class="form-group">
                  <button type="submit" class="btn btn-warning" name="btn_submit">Submit</button>
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
