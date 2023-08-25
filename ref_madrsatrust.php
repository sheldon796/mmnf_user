<?php
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
        	window.location.href="ref_madrsatrust.php";
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
              <h2>Madrasa Trust <em>Registration</em></h2>
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
                        <h2>Madrasa Trust Registration form</h2>
                      </div>
                    </div>
                    <div class="search-form">
                      <form action="" method="post" role="form"  enctype="multipart/form-data">
                        <div class="row">
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Name of Trust</label>
                            <input type="text" onFocus="this.value=''"  name="name" id="name" placeholder="Enter Name of Trust">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Title of Madrasa</label>
                            <input type="text" onFocus="this.value=''" name="title" id="title" placeholder="Enter the Title of madrasa Trust">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Full Address</label>
                            <input type="text" onFocus="this.value=''" name="address" id="address" placeholder="Enter full Address">
                          </div>
                          <div class="col-md-4">
                            <label style="color:#ffffff;">District</label>
                            <input type="text" onFocus="this.value=''" name="district" id="district" placeholder="Enter District">
                          </div>
                          <div class="col-md-4">
                            <label style="color:#ffffff;">Taluka</label>
                            <input type="text" onFocus="this.value=''" name="taluka" id="taluka" placeholder="Enter Taluka">
                          </div>
                          <div class="col-md-4">
                            <label style="color:#ffffff;">State</label>
                            <input type="text" onFocus="this.value=''" name="state" id="state" placeholder="Enter State">
                          </div>
                          <div class="col-md-6">
                            <label style="color:#ffffff;">Student Strength</label>
                            <input type="text" onFocus="this.value=''" name="s_strength" id="s_strength" placeholder="Enter Student Strength">
                          </div>
                          <div class="col-md-6">
                            <label style="color:#ffffff;"> Courses available</label>
                            <div class="input-select">
                              <select name="course" id="course">
                                <option >-Select Course-</option>
                                <option value="RCC">RCC</option>
                                <option value="Patra Roof">Patra Roof</option>
                                <option value="Shed">Shed</option>
                              </select>
                            </div>
                          </div>
                          <h5>Person Details who linked with MMNF :</h5>
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
                                <td><input type="text" placeholder="Name" name="p_name" id="p_name" style="margin-bottom: 0px;"></td>
                                <td><input type="text" placeholder="Mobile" name="p_mobile" id="p_mobile" style="margin-bottom: 0px;"></td>
                                <td><input type="text" placeholder="Designation"  name="p_designation" id="p_designation" style="margin-bottom: 0px;"></td>
                              </tr>
                            </tbody>
                          </table>
                          <div class="col-md-6">
                            <label style="color:#ffffff;">Classroom Details</label>
                            <div class="input-select">
                              <select name="class" id="class">
                                <option>-Select-</option>
                                <option value="RCC">RCC</option>
                                <option value="Patra Roof">Patra Roof</option>
                                <option value="Shed">Shed</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <label style="color:#ffffff;">Constucted Area in Sq.ft</label>
                            <input type="text" onFocus="this.value=''" name="area" id="area" placeholder="Area in Sq.ft">
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
                                <td><input type="text" name="u1_name" id="u1_name" placeholder="Enter Name" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="u1_mobile" id="u1_mobile" placeholder="Enter Mobile No" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="u1_qualification" id="u1_qualification" placeholder="Enter Qualification" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="d1_qualification" id="d1_qualification" placeholder="Enter Degree Qualification" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td><input type="text" name="u2_name" id="u2_name" placeholder="Enter Name" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="u2_mobile" id="u2_mobile" placeholder="Enter Mobile No" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="u2_qualification" id="u2_qualification" placeholder="Enter Qualification" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="d2_qualification" id="d2_qualification" placeholder="Enter Degree Qualification" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td><input type="text" name="u3_name" id="u3_name" placeholder="Enter Name" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="u3_mobile" id="u3_mobile" placeholder="Enter Mobile No" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="u3_qualification" id="u3_qualification" placeholder="Enter Qualification" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="d3_qualification" id="d3_qualification" placeholder="Enter Degree Qualification" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td><input type="text" name="u4_name" id="u4_name" placeholder="Enter Name" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="u4_mobile" id="u4_mobile" placeholder="Enter Mobile No" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="u4_qualification" id="u4_qualification" placeholder="Enter Qualification" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="d4_qualification" id="d4_qualification" placeholder="Enter Degree Qualification" style="margin-bottom: 0px;"></td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td><input type="text" name="u5_name" id="u5_name" placeholder="Enter Name" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="u5_mobile" id="u5_mobile" placeholder="Enter Mobile No" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="u5_qualification" id="u5_qualification" placeholder="Enter Qualification" style="margin-bottom: 0px;"></td>
                                <td><input type="text" name="d5_qualification" id="d5_qualification" placeholder="Enter Degree Qualification" style="margin-bottom: 0px;"></td>
                              </tr>
                            </tbody>
                          </table>
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">Do You Have Own Premises ? (YES / NO)</label>
                            <input type="text" onFocus="this.value=''" name="premise" id="premise" placeholder="if yes then type YES | if no then type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">Is Ground Available to Play Student ? (YES / NO) </label>
                            <input type="text" onFocus="this.value=''"  name="av_ground" id="av_ground" placeholder="if yes then type YES | if no then type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">Is Dining Hall Available ? (YES / NO)</label>
                            <input type="text" onFocus="this.value=''" name+"av_dining" id="av_dining" placeholder="if yes then type YES | if no then type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">What is Source of Portable Water ?</label>
                            <input type="text" onFocus="this.value=''" name="source_water" id="source_water" placeholder="Enter detail here">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">Do you Have Medical Emergency kit ? (YES / NO)</label>
                            <input type="text" onFocus="this.value=''" name="em_mkit" id="em_mkit" placeholder="if yes then type YES | if no then type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">Do you take beneift of Madrasa Modernisation scheme of State Govt ? (YES / NO)</label>
                            <input type="text" onFocus="this.value=''" name="govt_scheme" id="govt_scheme" placeholder="if yes then type YES | if no then type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">Do you take benifit of SPQEM Scheme of Central Govt ? (YES / NO)</label>
                            <input type="text" onFocus="this.value=''"  name="cgovt_scheme" id="cgovt_scheme" placeholder="if yes then type YES | if no then type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">Do you have U-Diar Code of Education Dept ? (YES / NO)</label>
                            <input type="text" onFocus="this.value=''" name="diar_code" id="diar_code" placeholder="if yes then type YES | if no then type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">How many Teachers with Madrasa for Teaching Regional language(English, Maths, Science, Skill Courses etc.)</label>
                            <input type="text" onFocus="this.value=''" name="rl_teachers" id="rl_teachers" placeholder="enter no of teachers">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">Do you update with regular audit ? (YES / NO)</label>
                            <input type="text" onFocus="this.value=''" name="r_audit" id="r_audit" placeholder="if yes then type YES | if no then type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">Do you update with Waqf / Charity Compliance ? (YES / NO)</label>
                            <input type="text" onFocus="this.value=''" name="compliance" id="compliance" placeholder="if yes then type YES | if no then type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">Do you give passout Student's detail to MMNF for the purpose of their financial progress(education,job,skill training,business development) ? (YES / NO)</label>
                            <input type="text" onFocus="this.value=''" name="p_financial" id="p_financial" placeholder="if yes then type YES | if no then type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">Do you have any commercial activities for fund raising ? (YES / NO)</label>
                            <input type="text" onFocus="this.value=''" name="f_raising" id="f_raising" placeholder="if yes then type YES | if no then type NO">
                          </div>
                          <div class="col-md-12">
                            <div class="input-select">
                              <label style="color:#FFFFFF">Upload MMNF registration fee transfer receipt.</label>
                              <input  type="file" name="fee_receipt"  id="fee_receipt" class="form-control-file" >
                            </div>
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
