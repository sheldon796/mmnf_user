<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?><?php include("config.php"); 
error_reporting (0);
if(isset($_POST['btn_submit']))
{  
		 $name = $_POST['name'];
		 $title = $_POST['title'];
		 $address = $_POST['address'];
		 $district = $_POST['district'];
		 $talukha = $_POST['talukha'];
		 $state = $_POST['state'];

		 $ap_name = $_POST['ap_name'];
		 $ap_mobile = $_POST['ap_mobile'];
		 $ap_designation = $_POST['ap_designation'];
		 $s_strength = $_POST['s_strength'];
		 $e_type = $_POST['e_type'];
		 $course = $_POST['course'];

		 $teaching = $_POST['teaching'];
		 $non_teaching = $_POST['non_teaching'];
		 $m_type = $_POST['m_type'];
		 $reg = $_POST['reg'];

		 $infra_class_sq = $_POST['infra_class_sq'];
		 $infra_class_yn = $_POST['infra_class_yn'];
		 $infra_ground_sq = $_POST['infra_ground_sq'];
		 $infra_ground_yn = $_POST['infra_ground_yn'];
		 $infra_lab_sq	 = $_POST['infra_lab_sq'];
		 $infra_lab_yn = $_POST['infra_lab_yn'];
		 $infra_lib_sq = $_POST['infra_lib_sq'];
		 $infra_lib_yn = $_POST['infra_lib_yn'];
		 $infra_lob_sq = $_POST['infra_lob_sq'];
		 $infra_lob_yn = $_POST['infra_lob_yn'];
		 $infra_wifi_yn = $_POST['infra_wifi_yn'];
		 $institute = $_POST['institute'];
		 $gov_enjoy = $_POST['gov_enjoy'];
		 $reg_nios = $_POST['reg_nios'];
		 $reg_center = $_POST['reg_center'];
		 $add_activity = $_POST['add_activity'];

		 $upload_fee_transfer = $_POST['upload_fee_transfer'];

		 $tp_name = $_POST['tp_name'];
		 $tp_mobile = $_POST['tp_mobile'];
		 $tvp_name = $_POST['tvp_name'];
		 $tvp_mobile = $_POST['tvp_mobile'];
		 $s_name = $_POST['s_name'];
		 $s_mobile = $_POST['s_mobile'];
		 $gs_name = $_POST['gs_name'];
		 $gs_mobile = $_POST['gs_mobile'];
		 $tr_name = $_POST['tr_name'];
		 $tr_mobile = $_POST['tr_mobile'];
		 $m1_name = $_POST['m1_name'];
		 $m1_mobile = $_POST['m1_mobile'];
		 $m2_name = $_POST['m2_name'];
		 $m2_mobile = $_POST['m2_mobile'];
		 $m3_name = $_POST['m3_name'];
		 $m3_mobile = $_POST['m3_mobile'];
		 $m4_name = $_POST['m4_name'];
		 $m4_mobile = $_POST['m4_mobile'];
		 $upload_trusty = $_POST['upload_trusty'];
		 $support = $_POST['support'];

		 
	echo $sql="INSERT INTO `reg_technobuiz`(`name`, `title`, `address`, `district`, `talukha`, `state`, `ap_name`, `ap_mobile`, `ap_designation`, `s_strength`, `e_type`, `course`, `teaching`, `non_teaching`, `m_type`, `reg`, `infra_class_sq`, `infra_class_yn`, `infra_ground_sq`, `infra_ground_yn`, `infra_lab_sq`, `infra_lab_yn`, `infra_lib_sq`, `infra_lib_yn`, `infra_lob_sq`, `infra_lob_yn`, `infra_wifi_yn`, `institute`, `gov_enjoy`, `reg_nios`, `reg_center`, `add_activity`, `upload_fee_transfer`, `tp_name`, `tp_mobile`, `tvp_name`, `tvp_mobile`, `s_name`, `s_mobile`, `gs_name`, `gs_mobile`, `tr_name`, `tr_mobile`, `m1_name`, `m1_mobile`, `m2_name`, `m2_mobile`, `m3_name`, `m3_mobile`, `m4_name`, `m4_mobile`, `upload_trusty`, `support`) VALUES 
	
	('$name',  '$title',  '$address',  '$district',  '$talukha',  '$state',  '$ap_name',  '$ap_mobile',  '$ap_designation',  '$s_strength',  '$e_type',  '$course',  '$teaching',  '$non_teaching',  '$m_type',  '$reg',  '$infra_class_sq',  '$infra_class_yn',  '$infra_ground_sq',  '$infra_ground_yn',  '$infra_lab_sq',  '$infra_lab_yn',  '$infra_lib_sq',  '$infra_lib_yn',  '$infra_lob_sq',  '$infra_lob_yn',  '$infra_wifi_yn',  '$institute',  '$gov_enjoy',  '$reg_nios',  '$reg_center',  '$add_activity',  '$upload_fee_transfer',  '$tp_name',  '$tp_mobile',  '$tvp_name',  '$tvp_mobile',  '$s_name',  '$s_mobile',  '$gs_name',  '$gs_mobile',  '$tr_name',  '$tr_mobile',  '$m1_name',  '$m1_mobile',  '$m2_name',  '$m2_mobile',  '$m3_name',  '$m3_mobile',  '$m4_name',  '$m4_mobile',  '$upload_trusty',  '$support')";
	
	
	
	$result=$link->query($sql);
	if($result)
	{?>
<script> 
			window.alert("Information Updated")
        	window.location.href="reg_technobuiz.php";
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
  <title>Technobuiz Registration </title>
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
        <li class="active">Technobuiz Registration </li>
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
              <h3 class="box-title">Technobuiz Registration</h3>
            </div>
            
            
            
              
                <form action="" method="post" role="form"  enctype="multipart/form-data">
                         <div class="box-body">
                          <div class="form-group">
                            <labelName of Trust</label>
                            <input class="form-control"type="text" onFocus="this.value=''" name="name" id="name" placeholder="Enter Name of Trust">
                          </div>
                          <div class="form-group">
                            <labelTitle of institute</label>
                            <input class="form-control"type="text" onFocus="this.value=''" name="title" id="title" placeholder="Enter the title of institute">
                          </div>
                          <div class="form-group">
                            <labelAddress</label>
                            <input class="form-control"type="text" onFocus="this.value=''" name="address" id="address" placeholder="Enter full Address">
                          </div>
                          <div class="form-group">
                            <labelDistrict</label>
                            <input class="form-control"type="text" onFocus="this.value=''" name="district" id="district" placeholder="Enter District">
                          </div>
                          <div class="form-group">
                            <labelTaluka</label>
                            <input class="form-control"type="text" onFocus="this.value=''" name="talukha" id="talukha" placeholder="Enter Taluka">
                          </div>
                          <div class="form-group">
                            <labelState</label>
                            <input class="form-control"type="text" onFocus="this.value=''" name="state" id="state" placeholder="Enter State">
                          </div>
                          
                          <h5>Authority Person Details who linked with MMNF :</h5>
                          <br>
                          <br>
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
                                <td><input class="form-control"type="text" placeholder="Name" name="ap_name" id="ap_name" style="margin-bottom: 0px;"></td>
                                <td><input class="form-control"type="text" placeholder="Mobile" name="ap_mobile" id="ap_mobile" style="margin-bottom: 0px;"></td>
                                <td><input class="form-control"type="text" placeholder="Designation"  name="ap_designation" id="ap_designation" style="margin-bottom: 0px;"></td>
                              </tr>
                            </tbody>
                          </table>
                          <br>
                          <br>
                          <div class="form-group">
                            <labelStudent Strength </label>
                            <input class="form-control"type="text" onFocus="this.value=''" name="s_strength" id="s_strength" placeholder="Enter Student strength">
                          </div>
                          <div class="form-group">
                            <labelEducation Availability</label>
                            <div class="input-select">
                              <select name="e_type" id="e_type" class="form-control">
                                <option >-Select Education-</option>
                                <option value="Primary">Primary</option>
                                <option value="Secondary">Secondary</option>
                                <option value="Higher_secondary">Higher_secondary</option>
                                <option value="Junior_college">Junior college</option>
                                <option value="Senior_college">Senior college</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <labelDo you have proffessional courses,if yes then give the name of course ? </label>
                            <input class="form-control"type="text" onFocus="this.value=''" name="course" id="course" placeholder="Enter the name of course">
                          </div>
                          <div class="form-group">
                            <label>How much strength does staff have ?</label>
                          </div>
                          <div class="form-group">
                            <input class="form-control"type="text" onFocus="this.value=''" name="teaching" id="teaching" placeholder="Enter the Strength of teaching staff">
                          </div>
                          <div class="form-group">
                            <input class="form-control"type="text" onFocus="this.value=''" name="non_teaching" id="non_teaching" placeholder="Enter the Strength of non teaching staff">
                          </div>
                          <div class="form-group">
                            <labelMedium Of Teaching</label>
                            <div class="input-select">
                              <select name="m_type" id="m_type" class="form-control">
                                <option >-Select Language-</option>
                                <option value="English">English</option>
                                <option value="Hindi">Hindi</option>
                                <option value="Marathi">Marathi</option>
                                <option value="Urdu">Urdu</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <labelDo you have Registered with YCMOU / IGNOU ? (YES/NO) </label>
                            <input class="form-control"type="text" onFocus="this.value=''" name="reg" id="reg" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <label>How much Infrastructure does Institute have:</label>
                          </div>
                          <br>
                          <br>
                          <table class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Sr.No</th>
                                <th scope="col">Type</th>
                                <th scope="col">Enter In Sq.ft</th>
                                <th scope="col">Yes</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <th> Number Of Classrooms</th>
                                <td><input class="form-control"type="text" name="infra_class_sq" id="infra_class_sq" placeholder="Enter the no of classroom" style="margin-bottom: 0px;"></td>
                                <td><input class="form-control"name="infra_class_yn" id="infra_class_yn" type="checkbox" value=""></td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <th>Grounds</th>
                                <td><input class="form-control"type="text" name="infra_ground_sq" id="infra_ground_sq" placeholder="enter area" style="margin-bottom: 0px;"></td>
                                <td><input class="form-control"name="infra_ground_yn" id="infra_ground_yn" type="checkbox" value=""></td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <th>Computer Labs</th>
                                <td><input class="form-control"type="text" name="infra_lab_sq" id="infra_lab_sq" placeholder="Enter area" style="margin-bottom: 0px;"></td>
                                <td><input class="form-control"name="infra_lab_yn" id="infra_lab_yn" type="checkbox" value=""></td>
                              </tr>
                              <tr>
                                <th scope="row">4</th>
                                <th>Library</th>
                                <td><input class="form-control"type="text" name="infra_lib_sq" id="infra_lib_sq" placeholder="Enter area" style="margin-bottom: 0px;"></td>
                                <td><input class="form-control"name="infra_lib_yn" id="infra_lib_yn" type="checkbox" value=""></td>
                              </tr>
                              <tr>
                                <th scope="row">5</th>
                                <th>Laboratory</th>
                                <td><input class="form-control"type="text" name="infra_lob_sq" id="infra_lob_sq" placeholder="Enter area" style="margin-bottom: 0px;"></td>
                                <td><input class="form-control"name="infra_lob_yn" id="infra_lob_yn" type="checkbox" value=""></td>
                              </tr>
                              <tr>
                                <th scope="row">6</th>
                                <th>Internet Availability</th>
                                <td><input class="form-control" type=""  style="margin-bottom: 0px;"></td>
                                <td><input class="form-control "name="infra_wifi_yn" id="infra_wifi_yn" type="checkbox" value=""></td>
                              </tr>
                            </tbody>
                          </table>
                          <div class="form-group">
                            <labelInstitute Status</label>
                            <div class="input-select">
                              <select name="institute" id="institute" class="form-control">
                                <option >-Select institute-</option>
                                <option value="Aided">Aided</option>
                                <option value="Non_Aided">Non_Aided</option>
                                <option value="Permanent">Permanent</option>
                                <option value="Minority">Minority</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Do you take benifit of Govt / CSR Funds for Infrastructure development ?</label>
                            <input class="form-control"type="text" onFocus="this.value=''" name="gov_enjoy" id="gov_enjoy" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <label>Do you have NIOS / MIOS Registration ?</label>
                            <input class="form-control"type="text" onFocus="this.value=''" name="reg_nios" id="reg_nios" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <label>Do you have External Student exam center ?</label>
                            <input class="form-control"type="text" onFocus="this.value=''" name="reg_center" id="reg_center" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <label>Do you have any additional coaching activities, if yes then give details. </label>
                            <input class="form-control"type="text" onFocus="this.value=''" name="add_activity" id="add_activity" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <div class="input-select">
                              <label>Upload Registration fee transfer details with MMNF.</label>
                              <input class="form-control"name="upload_fee_transfer" type="file" >
                            </div>
                          </div>
                          <br>
                          <br>
                          <h5>Trusty Details :</h5>
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
                                <td><input class="form-control"type="text" name="tp_name" id="tp_name" placeholder="Name" style="margin-bottom: 0px;"></td>
                                <td><input class="form-control"type="text" name="tp_mobile" id="tp_mobile" placeholder="Mobile" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <th>Vice President</th>
                                <td><input class="form-control"type="text" name="tvp_name" id="tvp_name" placeholder="Name" style="margin-bottom: 0px;"></td>
                                <td><input class="form-control"type="text" name="tvp_mobile" id="tvp_mobile" placeholder="Mobile" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <th>Secretary</th>
                                <td><input class="form-control"type="text" name="s_name" id="s_name" placeholder="Name" style="margin-bottom: 0px;"></td>
                                <td><input class="form-control"type="text" name="s_mobile" id="s_mobile" placeholder="Mobile" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">4</th>
                                <th>General Secretary</th>
                                <td><input class="form-control"type="text" name="gs_name" id="gs_name" placeholder="Name" style="margin-bottom: 0px;"></td>
                                <td><input class="form-control"type="text" name="gs_mobile" id="gs_mobile" placeholder="Mobile" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">5</th>
                                <th>Treasurer</th>
                                <td><input class="form-control"type="text" name="tr_name" id="tr_name" placeholder="Name" style="margin-bottom: 0px;"></td>
                                <td><input class="form-control"type="text" name="tr_mobile" id="tr_mobile" placeholder="Mobile" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">6</th>
                                <th>Member</th>
                                <td><input class="form-control"type="text" name="m1_name" id="m1_name" placeholder="Name" style="margin-bottom: 0px;"></td>
                                <td><input class="form-control"type="text" name="m1_mobile" id="m1_mobile" placeholder="Mobile" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">7</th>
                                <th>Member</th>
                                <td><input class="form-control" type="text" name="m2_name" id="m2_name"  placeholder="Mame" style="margin-bottom: 0px;"></td>
                                <td><input class="form-control"type="text" name="m2_mobile" id="m2_mobile" placeholder="Mobile" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">8</th>
                                <th>Member</th>
                                <td><input class="form-control"type="text" name="m3_name" id="m3_name" placeholder="Name" style="margin-bottom: 0px;"></td>
                                <td><input class="form-control"type="text" name="m3_mobile" id="m3_mobile" placeholder="Mobile" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">9</th>
                                <th>Member</th>
                                <td><input class="form-control"type="text" name="m4_name" id="m4_name"  placeholder="Name" style="margin-bottom: 0px;"></td>
                                <td><input class="form-control"type="text" name="m4_mobile" id="m4_mobile" placeholder="Mobile" style="margin-bottom: 0px;"></td>
                              </tr>
                            </tbody>
                          </table>
                          <div class="form-group">
                            <label>Upload Trusty Adhar document ? <small>(only PDF)</small></label>
                            <input class="form-control"name="upload_trusty" id="upload_trusty" type="file" >
                          </div>
                           
                          <div class="form-group">
                            <label>What kind of Support you Expect from MMNF ?</label>
                            <input class="form-control"type="text" onFocus="this.value=''" name="support" id="support" placeholder="Type Here">
                          </div>
                          
                        </div>
                        <div class="box-footer">
               <div class="form-group" align="center">
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
