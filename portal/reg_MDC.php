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
		 $city = $_POST['city'];
		 $charity_reg = $_POST['charity_reg'];
		 $up_certificate = $_POST['up_certificate'];
		 $a_name = $_POST['a_name'];
		 $designation = $_POST['designation'];
		 $m_id = $_POST['m_id'];
		 $mob_no = $_POST['mob_no'];
		 $e_id = $_POST['e_id'];
		 $website = $_POST['website'];
		 $op_name = $_POST['op_name'];
		 $op_mob = $_POST['op_mob'];
		 $op_edu = $_POST['op_edu'];

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

		 $space = $_POST['space'];
		 $addr = $_POST['addr'];
		 $location = $_POST['location'];
		 $w_time = $_POST['w_time'];

		 $table = $_POST['table'];
		 $chairs = $_POST['chairs'];
		 $cupboard = $_POST['cupboard'];
		 $pc = $_POST['pc'];
		 $printer = $_POST['printer'];
		 $scanner = $_POST['scanner'];
		 $internet = $_POST['internet'];
		 $up_insideimg = $_POST['up_insideimg'];
		 $up_outsideimg = $_POST['up_outsideimg'];
		 $up_boarding = $_POST['up_boarding'];
		 $up_regfee = $_POST['up_regfee'];
		 $acc_masjids = $_POST['acc_masjids'];
		 $to_masjids = $_POST['to_masjids'];
		 $inst_city = $_POST['inst_city'];
		 $inst_taluka = $_POST['inst_taluka'];
		 $up_list = $_POST['up_list'];
		 $up_address = $_POST['up_address'];
		 $up_contact = $_POST['up_contact'];
		 $t_notary = $_POST['t_notary'];
		 $t_stamp = $_POST['t_stamp'];
		 $css_centre = $_POST['css_centre'];
		 $bc_bank = $_POST['bc_bank'];
		 $ins_advisor = $_POST['ins_advisor'];
		 $int_mrc = $_POST['int_mrc'];
		 $min_exp = $_POST['min_exp'];
		 $service = $_POST['service'];
		 $contribution = $_POST['contribution'];
		 $note_mdc = $_POST['note_mdc'];
		 $note_mmnf = $_POST['note_mmnf'];
		 
		 
	echo $sql="INSERT INTO `reg_mdc`(`name`, `address`, `taluka`, `district`, `state`, `city`, `charity_reg`, `up_certificate`, `a_name`, `designation`, `m_id`, `mob_no`, `e_id`, `website`, `op_name`, `op_mob`, `op_edu`, `tp_name`, `tp_mobile`, `tvp_name`, `tvp_mobile`, `s_name`, `s_mobile`, `gs_name`, `gs_mobile`, `tr_name`, `tr_mobile`, `m1_name`, `m1_mobile`, `m2_name`, `m2_mobile`, `m3_name`, `m3_mobile`, `m4_name`, `m4_mobile`, `space`, `addr`, `location`, `w_time`, `tables`, `chairs`, `cupboard`, `printer`, `scanner`, `internet`, `up_insideimg`, `up_outsideimg`, `up_boarding`, `up_regfee`, `acc_masjids`, `to_masjids`, `inst_city`, `inst_taluka`, `up_list`, `up_address`, `up_contact`, `t_notary`, `t_stamp`, `css_center`, `bc_bank`, `ins_advisor`, `int_mrc`, `min_exp`, `service`, `contribution`, `note_mdc`, `note_mmnf`) VALUES 
	
	
	('$name', '$address', '$taluka', '$district', '$state', '$city', '$charity_reg', '$up_certificate', '$a_name', '$designation', '$m_id', '$mob_no', '$e_id', '$website', '$op_name', '$op_mob', '$op_edu', '$tp_name', '$tp_mobile', '$tvp_name', '$tvp_mobile', '$s_name', '$s_mobile', '$gs_name', '$gs_mobile', '$tr_name', '$tr_mobile', '$m1_name', '$m1_mobile', '$m2_name', '$m2_mobile', '$m3_name', '$m3_mobile', '$m4_name', '$m4_mobile', '$space', '$addr', '$location', '$w_time', '$tables', '$chairs', '$cupboard', '$printer', '$scanner', '$internet', '$up_insideimg', '$up_outsideimg', '$up_boarding', '$up_regfee', '$acc_masjids', '$to_masjids', '$inst_city', '$inst_taluka', '$up_list', '$up_address', '$up_contact', '$t_notary', '$t_stamp', '$css_center', '$bc_bank', '$ins_advisor', '$int_mrc', '$min_exp', '$service', '$contribution', '$note_mdc', '$note_mmnf')";
	
	
	
	$result=$link->query($sql);
	if($result)
	{?>
<script> 
			window.alert("Information Updated")
        	window.location.href="reg_MDC.php";
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
  <title>Minority Development Centre Registration </title>
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
        <li class="active">Minority Development Centre Registration </li>
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
              <h3 class="box-title">Minority Development Centre Registration </h3>
            </div>
            <form action="" method="post" role="form"  enctype="multipart/form-data">
                        
            <div class="box-body">
                          <div class="form-group">
                            <label>Name of NGO </label>
                            <input class="form-control" type="text"  name="name" id="name" placeholder="Enter the name of NGO">
                          </div>
                          <div class="form-group">
                            <label>Address</label>
                            <input class="form-control" type="text"  name="address" id="address" placeholder="Enter full Address">
                          </div>
                          <div class="form-group">
                            <label>District </label>
                            <input class="form-control" type="text"  name="district" id="district"  placeholder="District">
                          </div>
                          <div class="form-group">
                            <label>Taluka</label>
                            <input class="form-control" type="text"  name="taluka" id="taluka"  placeholder="Taluka">
                          </div>
                          <div class="form-group">
                            <label>State </label>
                            <input class="form-control" type="text"  name="state" id="state"  placeholder="State">
                          </div>
                          <div class="form-group">
                            <label>City </label>
                            <input class="form-control" type="text"  name="city" id="city"  placeholder="City">
                          </div>
                          <div class="form-group">
                            <label>Charity Registration No</label>
                            <input class="form-control" type="text"  name="charity_reg" id="charity_reg" placeholder=" Registration No">
                          </div>
                          <div class="form-group">
                            <div class="input-select">
                              <label>Upload Registration Certificate</label>
                              <input class="form-control" name="up_certificate" id="up_certificate" type="file" >
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Name of Authority Person</label>
                            <input class="form-control" type="text"  name="a_name" id="a_name" placeholder="Enter the name of Authority Person ">
                          </div>
                          <div class="form-group">
                            <label>Degination </label>
                            <input class="form-control" type="text"  name="designation" id="designation"  placeholder="Degination of Trustee">
                          </div>
                          <div class="form-group">
                            <label>Member id Number with MMNF.</label>
                            <input class="form-control" type="text"  name="m_id" id="m_id" placeholder="member id no">
                          </div>
                          <div class="form-group">
                            <label>Mobile No</label>
                            <input class="form-control" type="text"  name="mob_no" id="mob_no"  placeholder="Enter Mobile No +91 xxxxxx88">
                          </div>
                          <div class="form-group">
                            <label>Email Id</label>
                            <input class="form-control" type="text"  name="e_id" id="e_id" placeholder="Email mmnf@1322">
                          </div>
                          <div class="form-group">
                            <label>Website name if have.</label>
                            <input class="form-control" type="text"  name="website" id="website" placeholder="Enter name of website">
                          </div>
                          <div class="form-group">
                            <label>Operator Name of MDC.</label>
                            <input class="form-control" type="text"  name="op_name" id="op_name" placeholder="Enter the operator name ">
                          </div>
                          <div class="form-group">
                            <label>Mobile No</label>
                            <input class="form-control" type="text"  name="op_mob" id="op_mob"  placeholder="Enter Mobile No +91 xxxxxx88">
                          </div>
                          <div class="form-group">
                            <label>Education</label>
                            <input class="form-control" type="text"  name="op_edu" id="op_edu" placeholder="Enter Education">
                          </div>
                          
                          <h5>Details of all Trusty:</h5>
                           
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
                                <td><input class="form-control"  type="text" name="m2_name" id="m2_name"  placeholder="Mame" style="margin-bottom: 0px;"></td>
                                <td><input class="form-control" type="text" name="m2_mobile" id="m2_mobile" placeholder="Mobile" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">8</th>
                                <th>Member</th>
                                <td><input class="form-control" type="text" name="m3_name" id="m3_name" placeholder="Name" style="margin-bottom: 0px;"></td>
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
                            <label>Details about MDC: </label>
                          </div>
                          <div class="form-group">
                            <label>Space </label>
                            <input class="form-control" type="text"  name="space" id="space" placeholder="Enter space in sq.ft ">
                          </div>
                          <div class="form-group">
                            <label>Address</label>
                            <input class="form-control" type="text"  name="addr" id="addr" placeholder="Enter the address">
                          </div>
                          <div class="form-group">
                            <label>Location</label>
                            <input class="form-control" type="text"  name="location" id="location" placeholder="Enter the location">
                          </div>
                          <div class="form-group">
                            <label>Working Time</label>
                            <input class="form-control" type="text"  name="w_time" id="w_time" placeholder="Enter working time">
                          </div>
                          <h5>Furniture With MDC:</h5>
                          <br>
                          <br>
                          <table class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Sr.No</th>
                                <th scope="col">Type</th>
                                <th style="text-align:center">Yes / No</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <th> Table</th>
                                <td><input class="form-control"  type="checkbox" name="table" id="table" placeholder="Mobile" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <th>Chairs</th>
                                <td><input class="form-control" type="checkbox" name="chairs" id="chairs" placeholder="Chair" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <th>Cupboard</th>
                                <td><input class="form-control" type="checkbox" name="cupboard" id="cupboard" placeholder="Cupboard" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">4</th>
                                <th>PC</th>
                                <td><input class="form-control" type="checkbox" name="pc" id="pc" placeholder="PC" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">5</th>
                                <th>Printer</th>
                                <td><input class="form-control" type="checkbox" name="printer" id="printer" placeholder="Printer" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">6</th>
                                <th>Scanner</th>
                                <td><input class="form-control" type="checkbox" name="scanner" id="scanner" placeholder="Scanner" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">7</th>
                                <th>Internet</th>
                                <td><input class="form-control" type="checkbox" name="internet" id="internet" placeholder="Internet" style="margin-bottom: 0px;"></td>
                              </tr>
                            </tbody>
                          </table>
                          <div class="form-group">
                            <div class="input-select">
                              <label>Upload Inside image of MDC</label>
                              <input class="form-control" name="up_insideimg" id="up_insideimg" type="file" >
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-select">
                              <label>Upload Outside image of MDC</label>
                              <input class="form-control" name="up_outsideimg" id="up_outsideimg" type="file" >
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-select">
                              <label>Upload Nameboard image of MDC</label>
                              <input class="form-control" name="up_boarding" id="up_boarding" type="file" >
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-select">
                              <label>Upload MDC Registration fee Transfer receipt / screenshoot</label>
                              <input class="form-control" name="up_regfee" id="up_regfee" type="file" >
                            </div>
                          </div>
                          <div class="form-group">
                            <label>How many Masjid , which is accessible to you ?</label>
                            <input class="form-control" type="text"  name="acc_masjids" id="acc_masjids" placeholder="Enter detail">
                          </div>
                          <div class="form-group">
                            <label>Total how many masjid are there in your city ? </label>
                            <input class="form-control" type="text"  name="to_masjids" id="to_masjids" placeholder="Enter detail">
                          </div>
                          <div class="form-group">
                            <label>How many Educational institutions are there in your city ? </label>
                            <input class="form-control" type="text"  name="inst_city" id="inst_city" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <label>How many Educational institutions in your Taluka ? </label>
                            <input class="form-control" type="text"  name="inst_taluka" id="inst_taluka" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <div class="input-select">
                              <label>Upload Institution list.</label>
                              <input class="form-control" name="up_list" id="up_list" type="file" >
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Address</label>
                            <input class="form-control" type="text"  name="up_address" id="up_address" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <label>Contact Number</label>
                            <input class="form-control" type="text"  name="up_contact" id="up_contact" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <label>Are you tie-up with any Notary ?</label>
                            <input class="form-control" type="text"  name="t_notary" id="t_notary" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <label>Are you tie-up with any stamp Vender ?</label>
                            <input class="form-control" type="text"  name="t_stamp" id="t_stamp" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <label>Do you have CSS Center ?</label>
                            <input class="form-control" type="text"  name="css_center" id="css_center" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <label>Do you have BC of any Notionalise bank ?</label>
                            <input class="form-control" type="text"  name="bc_bank" id="bc_bank" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <label>Do you have insurance adviser ?</label>
                            <input class="form-control" type="text"  name="ins_advisor" id="ins_advisor" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <label>Are you intrested in MRC (Medical Relief Center) ?</label>
                            <input class="form-control" type="text"  name="int_mrc" id="int_mrc" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <label>How much mininum expenses to run MDC ?</label>
                            <input class="form-control" type="text"  name="min_exp" id="min_exp" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <label>Do you give service free to benifical ?</label>
                            <input class="form-control" type="text"  name="service" id="service" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <label>How much monthly contribution will give by your NGO to MMNF or social responsibility ? </label>
                            <input class="form-control" type="text"  name="contribution" id="contribution" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="form-group">
                            <label>Give short note on your suggestion for MDC.</label>
                            <input class="form-control"  type="text"  name="note_mdc" id="note_mdc" placeholder="Enter detail here">
                          </div>
                          <div class="form-group">
                            <label>Give short note on your suggestion for MMNF.</label>
                            <input class="form-control" type="text"  name="note_mmnf" id="note_mmnf" placeholder="Enter detail here">
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
