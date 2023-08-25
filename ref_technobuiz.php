<?php include("config.php"); 
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
        	window.location.href="ref_technobuiz.php";
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
              <h2>Technobuiz<em>Registration</em></h2>
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
                        <h2>Technobuiz  Registration form</h2>
                      </div>
                    </div>
                    <div class="search-form">
                      <form action="" method="post" role="form"  enctype="multipart/form-data">
                        <div class="row">
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Name of Trust</label>
                            <input type="text" onFocus="this.value=''" name="name" id="name" placeholder="Enter Name of Trust">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Title of institute</label>
                            <input type="text" onFocus="this.value=''" name="title" id="title" placeholder="Enter the title of institute">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Address</label>
                            <input type="text" onFocus="this.value=''" name="address" id="address" placeholder="Enter full Address">
                          </div>
                          <div class="col-md-4">
                            <label style="color:#ffffff;">District</label>
                            <input type="text" onFocus="this.value=''" name="district" id="district" placeholder="Enter District">
                          </div>
                          <div class="col-md-4">
                            <label style="color:#ffffff;">Taluka</label>
                            <input type="text" onFocus="this.value=''" name="talukha" id="talukha" placeholder="Enter Taluka">
                          </div>
                          <div class="col-md-4">
                            <label style="color:#ffffff;">State</label>
                            <input type="text" onFocus="this.value=''" name="state" id="state" placeholder="Enter State">
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
                                <td><input type="text" placeholder="Name" name="ap_name" id="ap_name" style="margin-bottom: 0px;"></td>
                                <td><input type="text" placeholder="Mobile" name="ap_mobile" id="ap_mobile" style="margin-bottom: 0px;"></td>
                                <td><input type="text" placeholder="Designation"  name="ap_designation" id="ap_designation" style="margin-bottom: 0px;"></td>
                              </tr>
                            </tbody>
                          </table>
                          <br>
                          <br>
                          <div class="col-md-6">
                            <label style="color:#ffffff;">Student Strength </label>
                            <input type="text" onFocus="this.value=''" name="s_strength" id="s_strength" placeholder="Enter Student strength">
                          </div>
                          <div class="col-md-6">
                            <label style="color:#ffffff;">Education Availability</label>
                            <div class="input-select">
                              <select name="e_type" id="e_type">
                                <option >-Select Education-</option>
                                <option value="Primary">Primary</option>
                                <option value="Secondary">Secondary</option>
                                <option value="Higher_secondary">Higher_secondary</option>
                                <option value="Junior_college">Junior college</option>
                                <option value="Senior_college">Senior college</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Do you have proffessional courses,if yes then give the name of course ? </label>
                            <input type="text" onFocus="this.value=''" name="course" id="course" placeholder="Enter the name of course">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">How much strength does staff have ?</label>
                          </div>
                          <div class="col-md-6">
                            <input type="text" onFocus="this.value=''" name="teaching" id="teaching" placeholder="Enter the Strength of teaching staff">
                          </div>
                          <div class="col-md-6">
                            <input type="text" onFocus="this.value=''" name="non_teaching" id="non_teaching" placeholder="Enter the Strength of non teaching staff">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Medium Of Teaching</label>
                            <div class="input-select">
                              <select name="m_type" id="m_type">
                                <option >-Select Language-</option>
                                <option value="English">English</option>
                                <option value="Hindi">Hindi</option>
                                <option value="Marathi">Marathi</option>
                                <option value="Urdu">Urdu</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Do you have Registered with YCMOU / IGNOU ? (YES/NO) </label>
                            <input type="text" onFocus="this.value=''" name="reg" id="reg" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">How much Infrastructure does Institute have:</label>
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
                                <td><input type="text" name="infra_class_sq" id="infra_class_sq" placeholder="Enter the no of classroom" style="margin-bottom: 0px;"></td>
                                <td><input name="infra_class_yn" id="infra_class_yn" type="checkbox" value=""></td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <th>Grounds</th>
                                <td><input type="text" name="infra_ground_sq" id="infra_ground_sq" placeholder="enter area" style="margin-bottom: 0px;"></td>
                                <td><input name="infra_ground_yn" id="infra_ground_yn" type="checkbox" value=""></td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <th>Computer Labs</th>
                                <td><input type="text" name="infra_lab_sq" id="infra_lab_sq" placeholder="Enter area" style="margin-bottom: 0px;"></td>
                                <td><input name="infra_lab_yn" id="infra_lab_yn" type="checkbox" value=""></td>
                              </tr>
                              <tr>
                                <th scope="row">4</th>
                                <th>Library</th>
                                <td><input type="text" name="infra_lib_sq" id="infra_lib_sq" placeholder="Enter area" style="margin-bottom: 0px;"></td>
                                <td><input name="infra_lib_yn" id="infra_lib_yn" type="checkbox" value=""></td>
                              </tr>
                              <tr>
                                <th scope="row">5</th>
                                <th>Laboratory</th>
                                <td><input type="text" name="infra_lob_sq" id="infra_lob_sq" placeholder="Enter area" style="margin-bottom: 0px;"></td>
                                <td><input name="infra_lob_yn" id="infra_lob_yn" type="checkbox" value=""></td>
                              </tr>
                              <tr>
                                <th scope="row">6</th>
                                <th>Internet Availability</th>
                                <td><input  type=""  style="margin-bottom: 0px;"></td>
                                <td><input name="infra_wifi_yn" id="infra_wifi_yn" type="checkbox" value=""></td>
                              </tr>
                            </tbody>
                          </table>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Institute Status</label>
                            <div class="input-select">
                              <select name="institute" id="institute">
                                <option >-Select institute-</option>
                                <option value="Aided">Aided</option>
                                <option value="Non_Aided">Non_Aided</option>
                                <option value="Permanent">Permanent</option>
                                <option value="Minority">Minority</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">Do you take benifit of Govt / CSR Funds for Infrastructure development ?</label>
                            <input type="text" onFocus="this.value=''" name="gov_enjoy" id="gov_enjoy" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">Do you have NIOS / MIOS Registration ?</label>
                            <input type="text" onFocus="this.value=''" name="reg_nios" id="reg_nios" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">Do you have External Student exam center ?</label>
                            <input type="text" onFocus="this.value=''" name="reg_center" id="reg_center" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">Do you have any additional coaching activities, if yes then give details. </label>
                            <input type="text" onFocus="this.value=''" name="add_activity" id="add_activity" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="col-md-12">
                            <div class="input-select">
                              <label style="color:#FFFFFF">Upload Registration fee transfer details with MMNF.</label>
                              <input name="upload_fee_transfer" type="file" class="form-control-file">
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
                            <label style="color:#FFFFFF">Upload Trusty Adhar document ? <small>(only PDF)</small></label>
                            <input name="upload_trusty" id="upload_trusty" type="file" class="form-control-file">
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
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">What kind of Support you Expect from MMNF ?</label>
                            <input type="text" onFocus="this.value=''" name="support" id="support" placeholder="Type Here">
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
