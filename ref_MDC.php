<?php
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
        	window.location.href="ref_MDC.php";
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
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="description" content="">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta name="author" content="Car Dealer Template">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MMNF</title>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/main.css">
<!-- Slider Pro Css -->
<link rel="stylesheet" href="assets/css/sliderPro.css">
<!-- Owl Carousel Css -->
<link rel="stylesheet" href="assets/css/owl-carousel.css">
<!-- Flat Icons Css -->
<link rel="stylesheet" href="assets/css/flaticon.css">
<!-- Animated Css -->
<link rel="stylesheet" href="assets/css/animated.css">
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<header class="site-header wow fadeIn" data-wow-duration="1s">
  <div id="main-header" class="main-header">
    <div class="container clearfix">
    <div class="logo">
					<a href="index.php"></a>
				</div>
      <div id='cssmenu'>
        <ul>
          
          <li><a href='index.php'>Home</a></li>
          <li><a href='about_us.php'>About</a></li>
          <li><a href='#'>Events</a>
            <ul>
              <!--<li><a href='#'>Sidebar</a>
					            	<ul>
					               		<li><a href='car_listing_sidebar.html'>Car Listing</a></li>
					               		<li><a href='car_grid_sidebar.html'>Car Grid</a></li>
					            	</ul>
					        	</li>
					         	<li><a href='#'>No Sidebar</a>
					            	<ul>
					               		<li><a href='car_listing_no_sidebar.html'>Car Listing</a></li>
					               		<li><a href='car_grid_no_sidebar.html'>Car Grid</a></li>
					            	</ul>
					         	</li>-->
              <li><a href="events.php">Events</a></li>
              <li><a href="acheivements.php">Acheivements</a></li>
              <li><a href="guestlectures.php">Guest Lectures</a></li>
            </ul>
          </li>
          <!--<li class='active'><a href='#'>Blog</a>
					      	<ul>
					         	<li><a href='#'>Sidebar</a>
					            	<ul>
					               		<li><a href='blog_listing_sidebar.html'>Blog Classic</a></li>
					               		<li><a href='blog_grid_sidebar.html'>Blog Grid</a></li>
					            	</ul>
					         	</li>
					         	<li><a href='#'>No Sidebar</a>
					            	<ul>
					               		<li><a href='blog_listing_no_sidebar.html'>Blog Classic</a></li>
					               		<li><a href='blog_grid_no_sidebar.html'>Blog Grid</a></li>
					            	</ul>
					         	</li>
					         	<li><a href="single_post.html">Single Post</a></li>
					      	</ul>		
					   </li>-->
          <li><a href='#'>Departments</a>
            <ul>
              <li><a href="dept_mdc.php">Minority Development Centre (MDC) </a></li>
              <li><a href="dept_cdc.php">Community Development Centre (CDC)</a></li>
              <li><a href="dept_dpc.php">Data and Planning Centre (DPC)</a></li>
              <li><a href="dept_marti.php">Minority Affairs Research & training Institute (MARTI) </a></li>
              <li><a href="dept_ace.php">Academy for Competitive Exam (ACE)</a></li>
              <li><a href="dept_hrnl.php">Human Rights and Legal Forum</a></li>
              <li><a href="dept_sdf.php">Skill Developement Forum</a></li>
              <li><a href="dept_technobuiz.php">Technobuiz-Business School, Technical, Educational and Research Development Centre</a></li>
              <li><a href="dept_bdf.php">Business Development Forum</a></li>
              <li><a href="dept_healthcare.php">Healthcare and Paramedical Training Centre</a></li>
              <li><a href="dept_women_emp.php">Women Empowerment Centre</a></li>
              <li><a href="dept_financial_dev.php">Financial Development Centre</a></li>
              <li><a href="dept_travel.php">Travel and Guidance Centre</a></li>
              <li><a href="dept_disaster_mg.php">Disaster Management Centre</a></li>
              <li><a href="dept_waqi_dev.php">Waqf Development Forum </a></li>
            </ul>
          </li>
           <li><a href='#'>Gallery</a>
          <ul>
           <li><a href="photogallery.php">Photo Gallery</a></li>
           <li><a href="videogallery.php">Video Gallery</a></li>
           <li><a href="newsmedia.php">News Media</a></li>
          </ul>
             </li><li><a href='#'>Registration</a>
            <ul>
              <li><a href="ref_individual.php">Individual</a></li>
              <li><a href="ref_NGO.php">NGO/charity trust</a></li>
              <li><a href="ref_waqftrust.php">Waqf trust</a></li>
              <li><a href="ref_madrsatrust.php">Madrsa trust</a></li>
              <li><a href="ref_kabrastantrust.php">kabrastan trust</a></li>
              <li><a href="ref_inam_waqf.php">Enam waqf</a></li>
              <li><a href="ref_MDC.php">MDC</a></li>
              <li><a href="ref_CDC.php">CDC</a></li>
              <li><a href="ref_MRC.php">MRC</a></li>
              <li><a href="ref_technobuiz.php">Technobuiz</a></li>
              <li><a href="ref_tijarat.php">Tijarat</a></li>
            </ul>
          </li>
          <li><a href='helping_hands.php'>Helping Hands</a></li>
          <li class=''><a href='#'>Contact</a>
          	<ul>
              <li><a href="contact_us.php">Contact</a></li>
              <li><a href="feedback.php">Feedback</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>
<div class="page-heading wow fadeIn" data-wow-duration="0.5s">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heading-content-bg wow fadeIn" data-wow-delay="0.75s" data-wow-duration="1s">
          <div class="row">
            <div class="heading-content col-md-12">
              <p><a href="index.php">Homepage</a> / <em> Registration</em> / <em> Listing</em></p>
              <h2>MDC <em>Registration</em></h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="on-listing wow fadeIn" data-wow-delay="0.5s" data-wow-duration="1s">
  <div class="container">
    <div class="recent-car-content">
      <div class="row">
        <div class="col-md-4">
       <div class="row">
            <div class="col-md-12">
              <div class="car-item">
                <div class="row">
                  <div class="col-md-12">
                    <div class="down-content" style="padding:20px;"> <a href="#">
                      <h4>Terms and conditions</h4>
                      </a>
                      <div class="line-dec"></div>
                      <p>Areas of collaboration: In state of Maharashtra.</p>
                      <p>We never support to any political party as member of MMNF.</p>
                      <p>Individual registration will be lapsed if found misbehavior in character or if individual found as legal fraud or seen in any illegal activity.</p>
                      <p>Period of membership is primary basis and it’s valid for one year.</p>
                      <p>If any special membership will make available, it will be open to all registered members.</p>
                      <p>After KYC verification you will be awarded as registered member.</p>
                      <p>You have to pay directly to LSF any charges payable to get social service available with MMNF platform.</p>
                      <p>MMNF/LSF will give separate ID to each registered member to utilize services offered.</p>
                      <p>You have to support by your any type of donation to MMNF, LSF and your connected NGO as priority.</p>
                      <p>Mis-utilization of MMNF activity and digital platform will be taken by legal action against you.</p>
                      <p>You have to honor all authorities of MMNF, LSF and associated NGO with MMNF.</p>
                      <p>All intellectual information is owned by MMNF/LSF.</p>
                      <p>Any individual benefit, financial grant, help if eligible will paid by online.</p>
                      <p>You have to make a own social record as a registered member of MMNF.</p>
                      <p>You will be permissible to join political party as your wish.</p>
                      <p>You may commit to devote time, money, knowledge for the betterment of the community.</p>
                      <p>We declare that following signatories are solely committed and follow the all described in this MOU and binded to do social activities jointly under MMNF banner.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="sidebar-widgets">
            <div class="row">
              <div class="col-md-12">
                <div class="sidebar-widget">
                  <div class="search-content">
                    <div class="search-heading">
                      <div class="icon"> <i class="fa fa-newspaper-o"></i> </div>
                      <div class="text-content">
                        <h2>MDC Registration Form</h2>
                      </div>
                    </div>
                    <div class="search-form">
                      <form action="" method="post" role="form"  enctype="multipart/form-data">
                        <div class="row">
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">Name of NGO </label>
                            <input type="text"  name="name" id="name" placeholder="Enter the name of NGO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">Address</label>
                            <input type="text"  name="address" id="address" placeholder="Enter full Address">
                          </div>
                          <div class="col-md-3">
                            <label style="color:#FFFFFF">District </label>
                            <input type="text"  name="district" id="district"  placeholder="District">
                          </div>
                          <div class="col-md-3">
                            <label style="color:#FFFFFF">Taluka</label>
                            <input type="text"  name="taluka" id="taluka"  placeholder="Taluka">
                          </div>
                          <div class="col-md-3">
                            <label style="color:#FFFFFF">State </label>
                            <input type="text"  name="state" id="state"  placeholder="State">
                          </div>
                          <div class="col-md-3">
                            <label style="color:#FFFFFF">City </label>
                            <input type="text"  name="city" id="city"  placeholder="City">
                          </div>
                          <div class="col-md-6">
                            <label style="color:#FFFFFF">Charity Registration No</label>
                            <input type="text"  name="charity_reg" id="charity_reg" placeholder=" Registration No">
                          </div>
                          <div class="col-md-6">
                            <div class="input-select">
                              <label style="color:#FFFFFF">Upload Registration Certificate</label>
                              <input name="up_certificate" id="up_certificate" type="file" class="form-control-file">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">Name of Authority Person</label>
                            <input type="text"  name="a_name" id="a_name" placeholder="Enter the name of Authority Person ">
                          </div>
                          <div class="col-md-6">
                            <label style="color:#FFFFFF">Degination </label>
                            <input type="text"  name="designation" id="designation"  placeholder="Degination of Trustee">
                          </div>
                          <div class="col-md-6">
                            <label style="color:#FFFFFF">Member id Number with MMNF.</label>
                            <input type="text"  name="m_id" id="m_id" placeholder="member id no">
                          </div>
                          <div class="col-md-6">
                            <label style="color:#FFFFFF">Mobile No</label>
                            <input type="text"  name="mob_no" id="mob_no"  placeholder="Enter Mobile No +91 xxxxxx88">
                          </div>
                          <div class="col-md-6">
                            <label style="color:#FFFFFF">Email Id</label>
                            <input type="text"  name="e_id" id="e_id" placeholder="Email mmnf@1322">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">Website name if have.</label>
                            <input type="text"  name="website" id="website" placeholder="Enter name of website">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">Operator Name of MDC.</label>
                            <input type="text"  name="op_name" id="op_name" placeholder="Enter the operator name ">
                          </div>
                          <div class="col-md-6">
                            <label style="color:#FFFFFF">Mobile No</label>
                            <input type="text"  name="op_mob" id="op_mob"  placeholder="Enter Mobile No +91 xxxxxx88">
                          </div>
                          <div class="col-md-6">
                            <label style="color:#FFFFFF">Education</label>
                            <input type="text"  name="op_edu" id="op_edu" placeholder="Enter Education">
                          </div>
                          <style>
													  th{
													  color:#FFFFFF;
													  }
													  td{
													  color:#FFFFFF;
													  
													  }
													  
													  h5{
													 color:#FFFFFF;
													 }
                                                      h7{
													 color:#FFFFFF;
													 }
													   h8{
													 color:#FFFFFF;
													 }
													  </style>
                          <h5>Details of all Trusty:</h5>
                          <br>
                          <br>
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
                                <td><input type="text" name="tp_name" id="tp_name" placeholder="Name" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="tp_mobile" id="tp_mobile" placeholder="Mobile" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <th>Vice President</th>
                                <td><input type="text" name="tvp_name" id="tvp_name" placeholder="Name" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="tvp_mobile" id="tvp_mobile" placeholder="Mobile" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <th>Secretary</th>
                                <td><input type="text" name="s_name" id="s_name" placeholder="Name" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="s_mobile" id="s_mobile" placeholder="Mobile" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">4</th>
                                <th>General Secretary</th>
                                <td><input type="text" name="gs_name" id="gs_name" placeholder="Name" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="gs_mobile" id="gs_mobile" placeholder="Mobile" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">5</th>
                                <th>Treasurer</th>
                                <td><input type="text" name="tr_name" id="tr_name" placeholder="Name" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="tr_mobile" id="tr_mobile" placeholder="Mobile" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">6</th>
                                <th>Member</th>
                                <td><input type="text" name="m1_name" id="m1_name" placeholder="Name" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="m1_mobile" id="m1_mobile" placeholder="Mobile" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">7</th>
                                <th>Member</th>
                                <td><input  type="text" name="m2_name" id="m2_name"  placeholder="Mame" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="m2_mobile" id="m2_mobile" placeholder="Mobile" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">8</th>
                                <th>Member</th>
                                <td><input type="text" name="m3_name" id="m3_name" placeholder="Name" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="m3_mobile" id="m3_mobile" placeholder="Mobile" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">9</th>
                                <th>Member</th>
                                <td><input type="text" name="m4_name" id="m4_name"  placeholder="Name" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="m4_mobile" id="m4_mobile" placeholder="Mobile" style="margin-bottom: 0px;"></td>
                              </tr>
                            </tbody>
                          </table>
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">Details about MDC: </label>
                          </div>
                          <div class="col-md-6">
                            <label style="color:#FFFFFF">Space </label>
                            <input type="text"  name="space" id="space" placeholder="Enter space in sq.ft ">
                          </div>
                          <div class="col-md-6">
                            <label style="color:#FFFFFF">Address</label>
                            <input type="text"  name="addr" id="addr" placeholder="Enter the address">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">Location</label>
                            <input type="text"  name="location" id="location" placeholder="Enter the location">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">Working Time</label>
                            <input type="text"  name="w_time" id="w_time" placeholder="Enter working time">
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
                                <td><input  type="checkbox" name="table" id="table" placeholder="Mobile" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <th>Chairs</th>
                                <td><input type="checkbox" name="chairs" id="chairs" placeholder="Chair" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <th>Cupboard</th>
                                <td><input type="checkbox" name="cupboard" id="cupboard" placeholder="Cupboard" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">4</th>
                                <th>PC</th>
                                <td><input type="checkbox" name="pc" id="pc" placeholder="PC" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">5</th>
                                <th>Printer</th>
                                <td><input type="checkbox" name="printer" id="printer" placeholder="Printer" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">6</th>
                                <th>Scanner</th>
                                <td><input type="checkbox" name="scanner" id="scanner" placeholder="Scanner" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">7</th>
                                <th>Internet</th>
                                <td><input type="checkbox" name="internet" id="internet" placeholder="Internet" style="margin-bottom: 0px;"></td>
                              </tr>
                            </tbody>
                          </table>
                          <div class="col-md-12">
                            <div class="input-select">
                              <label style="color:#FFFFFF">Upload Inside image of MDC</label>
                              <input name="up_insideimg" id="up_insideimg" type="file" class="form-control-file">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="input-select">
                              <label style="color:#FFFFFF">Upload Outside image of MDC</label>
                              <input name="up_outsideimg" id="up_outsideimg" type="file" class="form-control-file">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="input-select">
                              <label style="color:#FFFFFF">Upload Nameboard image of MDC</label>
                              <input name="up_boarding" id="up_boarding" type="file" class="form-control-file">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="input-select">
                              <label style="color:#FFFFFF">Upload MDC Registration fee Transfer receipt / screenshoot</label>
                              <input name="up_regfee" id="up_regfee" type="file" class="form-control-file">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">How many Masjid , which is accessible to you ?</label>
                            <input type="text"  name="acc_masjids" id="acc_masjids" placeholder="Enter detail">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Total how many masjid are there in your city ? </label>
                            <input type="text"  name="to_masjids" id="to_masjids" placeholder="Enter detail">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">How many Educational institutions are there in your city ? </label>
                            <input type="text"  name="inst_city" id="inst_city" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">How many Educational institutions in your Taluka ? </label>
                            <input type="text"  name="inst_taluka" id="inst_taluka" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="col-md-12">
                            <div class="input-select">
                              <label style="color:#FFFFFF">Upload Institution list.</label>
                              <input name="up_list" id="up_list" type="file" class="form-control-file">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <label style="color:#ffffff;">Address</label>
                            <input type="text"  name="up_address" id="up_address" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="col-md-6">
                            <label style="color:#ffffff;">Contact Number</label>
                            <input type="text"  name="up_contact" id="up_contact" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Are you tie-up with any Notary ?</label>
                            <input type="text"  name="t_notary" id="t_notary" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Are you tie-up with any stamp Vender ?</label>
                            <input type="text"  name="t_stamp" id="t_stamp" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Do you have CSS Center ?</label>
                            <input type="text"  name="css_center" id="css_center" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Do you have BC of any Notionalise bank ?</label>
                            <input type="text"  name="bc_bank" id="bc_bank" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Do you have insurance adviser ?</label>
                            <input type="text"  name="ins_advisor" id="ins_advisor" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Are you intrested in MRC (Medical Relief Center) ?</label>
                            <input type="text"  name="int_mrc" id="int_mrc" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">How much mininum expenses to run MDC ?</label>
                            <input type="text"  name="min_exp" id="min_exp" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Do you give service free to benifical ?</label>
                            <input type="text"  name="service" id="service" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">How much monthly contribution will give by your NGO to MMNF or social responsibility ? </label>
                            <input type="text"  name="contribution" id="contribution" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Give short note on your suggestion for MDC.</label>
                            <input  type="text"  name="note_mdc" id="note_mdc" placeholder="Enter detail here">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Give short note on your suggestion for MMNF.</label>
                            <input type="text"  name="note_mmnf" id="note_mmnf" placeholder="Enter detail here">
                          </div>
                          <div class="col-md-12" align="center">
                            <button type="submit" class="btn btn-warning" name="btn_submit"><strong>Submit</strong></button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="footer-item">
          <div class="what-offer">
            <h2>Departments</h2>
            <ul>
              <li style="margin-bottom:5px;"><a href="dept_mdc.php" style="padding:0px;">Minority Development Centre (MDC) </a></li>
              <li style="margin-bottom:5px;"><a href="dept_cdc.php" style="padding:0px;">Community Development Centre (CDC)</a></li>
              <li style="margin-bottom:5px;"><a href="dept_dpc.php" style="padding:0px;">Data and Planning Centre (DPC)</a></li>
              <li style="margin-bottom:5px;"><a href="dept_marti.php" style="padding:0px;">Minority Affairs Research & training Institute (MARTI) </a></li>
              <li style="margin-bottom:5px;"><a href="dept_ace.php" style="padding:0px;">Academy for Competitive Exam (ACE)</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="footer-item">
          <div class="what-offer">
            <h2>&nbsp;</h2>
            <ul>
              <li style="margin-bottom:5px;"><a href="dept_hrnl.php"  style="padding:0px;">Human Rights and Legal Forum</a></li>
              <li style="margin-bottom:5px;"><a href="dept_sdf.php" style="padding:0px;">Skill Developement Forum</a></li>
              <li style="margin-bottom:5px;"><a href="dept_technobuiz.php" style="padding:0px;">Technobuiz-Business School, Technical, Educational and Research Development Centre</a></li>
              <li style="margin-bottom:5px;"><a href="dept_bdf.php" style="padding:0px;">Business Development Forum</a></li>
              <li style="margin-bottom:5px;"><a href="dept_healthcare.php" style="padding:0px;">Healthcare and Paramedical Training Centre</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="footer-item">
          <div class="need-help">
            <h2>&nbsp;</h2>
            <ul>
              <li style="margin-bottom:5px;"><a href="dept_women_emp.php" style="padding:0px;">Women Empowerment Centre</a></li>
              <li style="margin-bottom:5px;"><a href="dept_financial_dev.php" style="padding:0px;">Financial Development Centre</a></li>
              <li style="margin-bottom:5px;"><a href="dept_travel.php" style="padding:0px;">Travel and Guidance Centre</a></li>
              <li style="margin-bottom:5px;"><a href="dept_disaster_mg.php" style="padding:0px;">Disaster Management Centre</a></li>
              <li style="margin-bottom:5px;"><a href="dept_waqi_dev.php" style="padding:0px;">Waqf Development Forum </a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="footer-item">
          <div class="quick-search">
            <h2>Quick Search</h2>
            <ul>  
              <li style="margin-bottom:5px;"><a href="terms_conditions.php" style="padding:0px;">Terms and Conditions </a></li>
              <li style="margin-bottom:5px;"><a href="privacy-policy.php" style="padding:0px;">Privacy-Policy </a></li>
              <li style="margin-bottom:5px;"><a href="shipment-policy.php" style="padding:0px;">Shipment Policy</a></li>
              <li style="margin-bottom:5px;"><a href="refund_cancellation-policy.php" style="padding:0px;">Refund/Cancellation Policy</a></li>
              <li style="margin-bottom:5px;"><a href="contact_us.php" style="padding:0px;">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="sub-footer">
          <p>Copyright 2022-23. All rights reserved by: <a href="http://www.hudastechnologies.com/">Huda's Technologies</a></p>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="assets/js/jquery-1.11.0.min.js"></script>
<!-- Slider Pro Js -->
<script src="assets/js/sliderpro.min.js"></script>
<!-- Slick Slider Js -->
<script src="assets/js/slick.js"></script>
<!-- Owl Carousel Js -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- Boostrap Js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Boostrap Js -->
<script src="assets/js/wow.animation.js"></script>
<!-- Custom Js -->
<!--<script src="assets/js/custom.js"></script>-->
</body>
</html>
