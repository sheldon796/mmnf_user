<?php include("config.php"); 
error_reporting (0);
if(isset($_POST['btn_submit']))
{  
		 $name = $_POST['name'];
		 $mobile = $_POST['mobile'];
		 $email = $_POST['email'];
		 $education = $_POST['education'];
		 $address = $_POST['address'];
		 $o_address = $_POST['o_address'];
		 $w_address = $_POST['w_address'];
		 $b_type = $_POST['b_type'];
		 $b_title = $_POST['b_title'];
		 $shopact = $_POST['shopact'];
		 $gst = $_POST['gst'];
		 $msme = $_POST['msme'];
		 $p_tax = $_POST['p_tax'];
		 $esic = $_POST['esic'];
		 $fassai = $_POST['fassai'];

		 $s_skilled = $_POST['s_skilled'];
		 $s_loan = $_POST['s_loan'];
		 $m_scheme = $_POST['m_scheme'];
		 $f_loan = $_POST['f_loan'];
		 $credit_loan = $_POST['credit_loan'];
		 $b_turnover = $_POST['b_turnover'];
		 $website = $_POST['website'];
		 $app = $_POST['app'];
		 $soc_media = $_POST['soc_media'];
		 $platform = $_POST['platform'];
		 $traning = $_POST['traning'];
		 $account_h = $_POST['account_h'];
		 $coach = $_POST['coach'];
		 $expect = $_POST['expect'];
		 
	echo $sql="INSERT INTO `reg_tijarat`(`name`, `mobile`, `email`, `education`, `address`, `o_address`, `w_address`, `b_type`, `b_title`, `shopact`, `gst`, `msme`, `p_tax`, `esic`, `fassai`, `s_skilled`, `s_loan`, `m_scheme`, `f_loan`, `credit_loan`, `b_turnover`, `website`, `app`, `soc_media`, `platform`, `traning`, `account_h`, `coach`, `expect`) VALUES ('$name',  '$mobile',  '$email',  '$education',  '$address',  '$o_address',  '$w_address',  '$b_type',  '$b_title',  '$shopact',  '$gst',  '$msme',  '$p_tax',  '$esic',  '$fassai',  '$s_skilled',  '$s_loan',  '$m_scheme',  '$f_loan',  '$credit_loan',  '$b_turnover',  '$website',  '$app',  '$soc_media',  '$platform',  '$traning',  '$account_h',  '$coach',  '$expect')";
	
	
	
	$result=$link->query($sql);
	if($result)
	{?>
<script> 
			window.alert("Information Updated")
        	window.location.href="ref_tijarat.php";
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
              <h2>Tijarat <em>Registration</em></h2>
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
                        <h2>Tijarat Registration form</h2>
                      </div>
                    </div>
                    <div class="search-form">
                      <form action="" method="post" role="form"  enctype="multipart/form-data">
                        <div class="row">
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">Name of Bussiness Men/Women</label>
                            <input type="text" onFocus="this.value=''" name="name" id="name" placeholder="Enter the name of Ngo">
                          </div>
                          <div class="col-md-6">
                            <label style="color:#FFFFFF">Mobile</label>
                            <input type="text" onFocus="this.value=''" name="mobile" id="mobile" placeholder="Enter the mobile no +91 xxxxx77">
                          </div>
                          <div class="col-md-6">
                            <label style="color:#FFFFFF">Email Id</label>
                            <input type="text" onFocus="this.value=''" name="email" id="email" placeholder="Enter the Email ngo@4333">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">Education</label>
                            <input type="text" onFocus="this.value=''" name="education" id="education" placeholder="Enter the Education">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">Address</label>
                            <input type="text" onFocus="this.value=''" name="address" id="address" placeholder="Enter full Address">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">Office Address</label>
                            <input type="text" onFocus="this.value=''" name="o_address" id="o_address" placeholder="Enter the Office address">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">Work / Godown</label>
                            <input type="text" onFocus="this.value=''" name="w_address" id="w_address" placeholder="Enter work or godown">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">Type Of Business</label>
                            <input type="text" onFocus="this.value=''" name="b_type" id="b_type" placeholder="Enter the bussiness type.">

                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Title of Business. </label>
                            <input type="text" onFocus="this.value=''" name="b_title" id="b_title" placeholder="Enter the title of business.">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Do you have shopact ? (YES/NO) </label>
                            <input type="text" onFocus="this.value=''" name="shopact" id="shopact" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Do you have GST ? (YES/NO) </label>
                            <input type="text" onFocus="this.value=''" name="gst" id="gst" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Do you have MSME ? (YES/NO) </label>
                            <input type="text" onFocus="this.value=''" name="msme" id="msme" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Do you have professional TAX ? (YES/NO) </label>
                            <input type="text" onFocus="this.value=''" name="p_tax" id="p_tax" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Do you have ESIC ? (YES/NO) </label>
                            <input type="text" onFocus="this.value=''" name="esic" id="esic" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Do you have fassai ? (YES/NO) </label>
                            <input type="text" onFocus="this.value=''" name="fassai" id="fassai" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">Staff with you</label>
                            <div class="input-select">
                              <select name="s_skilled" id="s_skilled">
                                <option >-select-</option>
                                <option value="skilled">skilled</option>
                                <option value="Unskilled">Unskilled</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Do You enjoy Government scheme of subsidy loan ? (YES/NO) </label>
                            <input type="text" onFocus="this.value=''" name="s_loan" id="s_loan" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Do you enjoy minority loan scheme  ? (YES/NO) </label>
                            <input type="text" onFocus="this.value=''" name="m_scheme" id="m_scheme" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Do you require intrest free loan ? (YES/NO) </label>
                            <input type="text" onFocus="this.value=''" name="f_loan" id="f_loan" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Do you have cash / credit loan ? (YES/NO) </label>
                            <input type="text" onFocus="this.value=''" name="credit_loan" id="credit_loan" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">Your Business turnover.</label>
                            <div class="input-select">
                              <select name="b_turnover" id="b_turnover">
                                <option >-select-</option>
                                <option value="upto1">Upto 5 lakh</option>
                                <option value="upto2">Upto 10 lakh</option>
                                <option value="upto3">Upto 25 lakh</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Do you have website ? (YES/NO) </label>
                            <input type="text" onFocus="this.value=''" name="website" id="website" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Do you have mobile app ? (YES/NO) </label>
                            <input type="text" onFocus="this.value=''" name="app" id="app" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#FFFFFF">Which Social / Digital media presence you have ?</label>
                            <div class="input-select">
                              <select name="soc_media" id="soc_media">
                                <option >-select-</option>
                                <option value="fb">Facebook</option>
                                <option value="tw">Twitter</option>
                                <option value="in">Insta</option>
                                <option value="li">Linked in</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Are you linked with E-Commerce platform if yes then give its name. </label>
                            <input type="text" onFocus="this.value=''" name="platform" id="platform" placeholder="Enter the name of platform">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Do you have completed any professional training or transforming lectures, if yes then please write about it ? </label>
                            <input type="text" onFocus="this.value=''" name="training" id="training" placeholder="Enter the detail here">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Are you connected with C.A who handles account  ? </label>
                            <input type="text" onFocus="this.value=''" name="account_h" id="account_h" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Do you have any business coach portfolio manager ? </label>
                            <input type="text" onFocus="this.value=''" name="coach" id="coach" placeholder="IF yes then type YES | If no the type NO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">What you Expect from MMNF for own growth as well as for community upliftment ?</label>
                            <input type="text" onFocus="this.value=''" name="expect" id="expect" placeholder="Enter detail here">
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
