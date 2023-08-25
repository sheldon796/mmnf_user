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
		 
		 
	echo $sql="INSERT INTO `reg_mdc`(`name`, `address`, `taluka`, `district`, `state`, `city`, `charity_reg`, `up_certificate`, `a_name`, `designation`, `m_id`, `mob_no`, `e_id`, `website`, `op_name`, `op_mob`, `op_edu`, `tp_name`, `tp_mobile`, `tvp_name`, `tvp_mobile`, `s_name`, `s_mobile`, `gs_name`, `gs_mobile`, `tr_name`, `tr_mobile`, `m1_name`, `m1_mobile`, `m2_name`, `m2_mobile`, `m3_name`, `m3_mobile`, `m4_name`, `m4_mobile`, `space`, `addr`, `location`, `w_time`, `tables`, `chairs`, `cupboard`, `printer`, `scanner`, `internet`, `up_insideimg`, `up_outsideimg`, `up_boarding`, `up_regfee`, `acc_masjids`, `to_masjids`, `inst_city`, `inst_taluka`, `up_list`, `up_address`, `up_contact`, `t_notary`, `t_stamp`, `css_center`, `bc_bank`, `ins_advisor`, `int_mrc`, `min_exp`, `servive`, `contribution`, `note_mdc`, `note_mmnf`) VALUES 
	
	
	('$name', '$address', '$taluka', '$district', '$state', '$city', '$charity_reg', '$up_certificate', '$a_name', '$designation', '$m_id', '$mob_no', '$e_id', '$website', '$op_name', '$op_mob', '$op_edu', '$tp_name', '$tp_mobile', '$tvp_name', '$tvp_mobile', '$s_name', '$s_mobile', '$gs_name', '$gs_mobile', '$tr_name', '$tr_mobile', '$m1_name', '$m1_mobile', '$m2_name', '$m2_mobile', '$m3_name', '$m3_mobile', '$m4_name', '$m4_mobile', '$space', '$addr', '$location', '$w_time', '$tables', '$chairs', '$cupboard', '$printer', '$scanner', '$internet', '$up_insideimg', '$up_outsideimg', '$up_boarding', '$up_regfee', '$acc_masjids', '$to_masjids', '$inst_city', '$inst_taluka', '$up_list', '$up_address', '$up_contact', '$t_notary', '$t_stamp', '$css_center', '$bc_bank', '$ins_advisor', '$int_mrc', '$min_exp', '$servive', '$contribution', '$note_mdc', '$note_mmnf')";
	
	
	
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
          <li><a href='#'>Registration</a>
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
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <div class="car-item">
                <div class="row">
                  <div class="col-md-12">
                    <div class="down-content" style="padding:20px;"> <a href="#">
                      <h4>Title</h4>
                      </a>
                      <div class="line-dec"></div>
                      <div class="box-body table-responsive no-padding">
                     <table class="table table-responsive table-hover  " width="100%" border="2">
                     <thead>
                         <tr>
                            <th>Sr.</th>
                            <th>df sfs dfsd </th>
                            <th>sdf sdf sd </th>
                            <th>sdf sdf sd fsdfs d</th>
                            <th>gsdgsdfgsd sd gsdf gsdf sd;</th>
                            <th>bxs xsdf hsdf ghsdfg sdfg dfsg dfg dsg sg sdg sdfgh sdh fgh fgfg hfg hfg fgh fg hfg fgh fghfghfghfgfghfgg hfg fg fg fg</th>
                             
                          </tr>
                     </thead>
                     <tbody>
  <tr>
    <td>1</td>
    <td>vhj</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>2</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>3</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  </tbody>
</table>

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
