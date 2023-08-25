<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?><?php include("config.php"); ?>
<?php  
error_reporting (0);
if(isset($_POST['btn_submit']))
{  
		 
		 
		 $r_no = $_POST['r_no'];
         $t_ngo = $_POST['t_ngo'];
         $n_ngo = $_POST['n_ngo'];
         $n_address = $_POST['n_address'];
         $n_district = $_POST['n_district'];
         $n_taluka = $_POST['n_taluka'];
         $n_pin = $_POST['n_pin'];
         $o_contact = $_POST['o_contact'];
         $email = $_POST['email'];
         $web = $_POST['web'];
        

 		 
		 
$a_12_up = $_FILES['a_12_up']['name'];
$g_80_up = $_FILES['g_80_up']['name'];
$fcra_up = $_FILES['fcra_up']['name'];
$csr_1_up = $_FILES['csr_1_up']['name'];
$csr_2_up = $_FILES['csr_2_up']['name'];
$gst_up = $_FILES['gst_up']['name'];
$msme_reg_up = $_FILES['msme_reg_up']['name'];
$dar_reg_up = $_FILES['dar_reg_up']['name'];

$target_dir = "images_uploaded/";
$target_file1 = $target_dir . basename($a_12_up);
$target_file2 = $target_dir . basename($g_80_up);
$target_file3 = $target_dir . basename($fcra_up);
$target_file4 = $target_dir . basename($csr_1_up);
$target_file5 = $target_dir . basename($csr_2_up);
$target_file6 = $target_dir . basename($gst_up);
$target_file7 = $target_dir . basename($msme_reg_up);
$target_file8 = $target_dir . basename($dar_reg_up);


$imageFileType1 = strtolower(pathinfo($target_file1, PATHINFO_EXTENSION)); 
$imageFileType2 = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION)); 
$imageFileType3 = strtolower(pathinfo($target_file3, PATHINFO_EXTENSION)); 
$imageFileType4 = strtolower(pathinfo($target_file4, PATHINFO_EXTENSION)); 
$imageFileType5 = strtolower(pathinfo($target_file5, PATHINFO_EXTENSION)); 
$imageFileType6 = strtolower(pathinfo($target_file6, PATHINFO_EXTENSION)); 
$imageFileType7 = strtolower(pathinfo($target_file7, PATHINFO_EXTENSION)); 
$imageFileType8 = strtolower(pathinfo($target_file8, PATHINFO_EXTENSION)); 


$check1 = getimagesize($_FILES['a_12_up']['tmp_name']);
$check2 = getimagesize($_FILES['g_80_up']['tmp_name']);
$check3 = getimagesize($_FILES['fcra_up']['tmp_name']);
$check4 = getimagesize($_FILES['csr_1_up']['tmp_name']);
$check5 = getimagesize($_FILES['csr_2_up']['tmp_name']);
$check6 = getimagesize($_FILES['gst_up']['tmp_name']);
$check7 = getimagesize($_FILES['msme_reg_up']['tmp_name']);
$check8 = getimagesize($_FILES['dar_reg_up']['tmp_name']);

$extension1 = substr($a_12_up, strlen($a_12_up)-4,strlen($a_12_up));
$extension2 = substr($g_80_up, strlen($g_80_up)-4,strlen($g_80_up));
$extension3 = substr($fcra_up, strlen($fcra_up)-4,strlen($fcra_up));
$extension4 = substr($csr_1_up, strlen($csr_1_up)-4,strlen($csr_1_up));
$extension5 = substr($csr_2_up, strlen($csr_2_up)-4,strlen($csr_2_up));
$extension6 = substr($gst_up, strlen($gst_up)-4,strlen($gst_up));
$extension7 = substr($msme_reg_up, strlen($msme_reg_up)-4,strlen($msme_reg_up));
$extension8 = substr($dar_reg_up, strlen($dar_reg_up)-4,strlen($dar_reg_up));

$allowed_extensions = array(".jpg",".png",".pdf");

if($check1 == false || $check2 == false || $check3 == false || $check4 == false || $check5 == false || $check6 == false || $check7 == false || $check8 == false ){
$message =  mysqli_error($con);

}
else{
move_uploaded_file($_FILES["a_12_up"]["tmp_name"], $target_file1);
move_uploaded_file($_FILES["g_80_up"]["tmp_name"], $target_file2);
move_uploaded_file($_FILES["fcra_up"]["tmp_name"], $target_file3);
move_uploaded_file($_FILES["csr_1_up"]["tmp_name"], $target_file4);
move_uploaded_file($_FILES["csr_2_up"]["tmp_name"], $target_file5);
move_uploaded_file($_FILES["gst_up"]["tmp_name"], $target_file6);
move_uploaded_file($_FILES["msme_reg_up"]["tmp_name"], $target_file7);
move_uploaded_file($_FILES["dar_reg_up"]["tmp_name"], $target_file8);

		 
		$f1 = $_POST['f1'];
         $f2 = $_POST['f2'];
         $f3 = $_POST['f3'];
         $f4 = $_POST['f4'];
         $f5 = $_POST['f5'];
         $ap1_name = $_POST['ap1_name'];
         $ap1_mobile = $_POST['ap1_mobile'];
         $ap1_mail = $_POST['ap1_mail'];
         $ap2_name = $_POST['ap2_name'];
         $ap2_mobile = $_POST['ap2_mobile'];
         $ap2_mail = $_POST['ap2_mail'];
		
		
		
		}
		 
	echo $sql="INSERT INTO `reg_nct`(`r_no`, `t_ngo`, `n_ngo`, `n_address`, `n_district`, `n_taluka`, `n_pin`, `o_contact`, `email`, `web`, `a_12`, `a_12_up`, `g_80`, `g_80_up`, `fcra`, `fcra_up`, `csr_1`, `csr_1_up`, `csr_2`, `csr_2_up`, `gst`, `gst_up`, `msme_reg`, `msme_reg_up`, `dar_reg`, `dar_reg_up`, `f1`, `f2`, `f3`, `f4`, `f5`, `ap1_name`, `ap1_mobile`, `ap1_mail`, `ap2_name`, `ap2_mobile`, `ap2_mail`) VALUES ('$r_no', '$t_ngo', '$n_ngo', '$n_address', '$n_district', '$n_taluka',  '$n_pin', '$o_contact', '$email', '$web', '$a_12', '$a_12_up', '$g_80', '$g_80_up', '$fcra', '$fcra_up',  '$csr_1',  '$csr_1_up', '$csr_2', '$csr_2_up',  '$gst', '$gst_up',  '$msme_reg', '$msme_reg_up',   '$dar_reg', '$dar_reg_up', '$f1',  '$f2', '$f3',  '$f4', '$f5', '$ap1_name', '$ap1_mobile', '$ap1_mail',   '$ap2_name',  '$ap2_mobile',  '$ap2_mail' )";
	
	
	
	$result=$link->query($sql);
	if($result)
	{?>
<script>  window.alert("Information Updated")
        	window.location.href="reg_NGO.php";
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
  <title>NGO/Charity Trust Registration </title>
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
        <li class="active">NGO/Charity Trust Registration </li>
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
              <h3 class="box-title">NGO/Charity Trust Registration  </h3>
            </div>
       
       
       
       
       
       <form action="" method="post" role="form"  enctype="multipart/form-data">
                            <div class="box-body">
                          <div class="form-group">
                            <label>Registration Number</label>
                            <input type="text"  name="r_no" id="r_no" placeholder="Enter Registration Number" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Type of NGO (Charity / Section 8)</label>
                            <input type="text"  name="t_ngo" id="t_ngo" placeholder="Enter Type of NGO" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Name of NGO / Charity trust</label>
                            <input type="text"  name="n_ngo" id="n_ngo" placeholder="Enter Name of NGO " class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Fill Address</label>
                            <input type="text"  name="n_address" id="n_address" placeholder="Enter Full Address" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>District</label>
                            <input type="text"  name="n_district" id="n_district" placeholder="Enter District" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Taluka</label>
                            <input type="text"  name="n_taluka" id="n_taluka" placeholder="Enter Taluka" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>PIN</label>
                            <input type="text"  name="n_pin" id="n_pin" placeholder="Enter PIN" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Official Contact Number</label>
                            <input type="text"  name="o_contact" id="o_contact" placeholder="Enter Official Contact Number +91 xxxxxxx98" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Email</label>
                            <input type="text"  name="email" id="email" placeholder="Enter Email mmnf@gmail.com" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Website</label>
                            <input type="text"  name="web" id="web" placeholder="Enter Website" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>12A</label>
                            <input type="text"  name="a_12" id="a_12" placeholder="12A" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Upload 12A Certificate <small>(PDF Only)</small></label>
                            <div class="input-select">
                              <input name="a_12_up" type="file" class="form-control-file" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label>80G</label>
                            <input type="text"  name="g_80" id="g_80" placeholder="80G" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Upload 80G Certificate <small>(PDF Only)</small></label>
                            <div class="input-select">
                              <input name="g_80_up" type="file" class="form-control-file" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label>FCRA</label>
                            <input type="text"  name="fcra" id="fcra" placeholder="FCRA" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Upload FCRA Certificate <small>(PDF Only)</small></label>
                            <div class="input-select">
                              <input name="fcra_up" type="file" class="form-control-file" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label>CSR 1</label>
                            <input type="text"  name="csr_1" id="csr_1" placeholder="CSR 1" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Upload CSR 1 Certificate <small>(PDF Only)</small></label>
                            <div class="input-select">
                              <input name="csr_1_up" type="file" class="form-control-file" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label>CSR 2 </label>
                            <input type="text"  name="csr_2" id="csr_2" placeholder="CSR 2 " class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Upload CSR 2 Certificate <small>(PDF Only)</small></label>
                            <div class="input-select">
                              <input name="csr_2_up" type="file" class="form-control-file" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label>GST</label>
                            <input type="text"  name="gst" id="gst" placeholder="GST" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Upload GST Certificate <small>(PDF Only)</small></label>
                            <div class="input-select">
                              <input name="gst_up" type="file" class="form-control-file" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label>MSME Registration</label>
                            <input type="text"  name="msme_reg" id="msme_reg" placeholder="MSME Registration" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Upload MSME Certificate <small>(PDF Only)</small></label>
                            <div class="input-select">
                              <input name="msme_reg_up" type="file" class="form-control-file" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Darpan Reg. Number</label>
                            <input type="text"  name="dar_reg" id="dar_reg" placeholder="Darpan Reg. Number" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Upload Darpan Certificate <small>(PDF Only)</small></label>
                            <div class="input-select">
                              <input name="dar_reg_up" type="file" class="form-control-file" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Focus Area 1</label>
                            <input type="text"  name="f1" id="f1" placeholder="Focus Area 1" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Focus Area 2</label>
                            <input type="text"  name="f2" id="f2" placeholder="Focus Area 2" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Focus Area 3</label>
                            <input type="text"  name="f3" id="f3" placeholder="Focus Area 3" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Focus Area 4</label>
                            <input type="text"  name="f4" id="f4" placeholder="Focus Area 4" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Focus Area 5</label>
                            <input type="text"  name="f5" id="f5" placeholder="Focus Area 5" class="form-control">
                          </div>
                          <!-- <p>Autharity Person 1</p><br>-->
                          <div class="form-group">
                            <label>Authority President Name</label>
                            <input type="text"  name="ap1_name" id="ap1_name" placeholder="Authority President Name" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Mobile</label>
                            <input type="text"  name="ap1_mobile" id="ap1_mobile" placeholder="Mobile" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Email Id</label>
                            <input type="text"  name="ap1_mail" id="ap1_mail" placeholder="Email" class="form-control">
                          </div>
                          <!-- <p>Autharity Person 2</p><br>-->
                          <div class="form-group">
                            <label>Authority President Name</label>
                            <input type="text"  name="ap2_name" id="ap2_name" placeholder="Authority President Name" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Mobile</label>
                            <input type="text"  name="ap2_mobile" id="ap2_mobile" placeholder="Mobile" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Email Id</label>
                            <input type="text"  name="ap2_mail" id="ap2_mail" placeholder="Email" class="form-control">
                          </div>
                          
                          </div>
                         
                         
                        <div class="box-footer">
                <div class="col-md-12" align="center">
                            <button type="submit" class="btn btn-warning" name="btn_submit"  class="form-control">Submit</button>
                          </div>
              </div>
                      </form>
                      </div>
             
          </div>
          
        
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
