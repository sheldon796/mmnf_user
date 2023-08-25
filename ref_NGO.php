<?php include("config.php"); ?>
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
<script>  
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
              <h2>NGO / Charity trust <em>Registration</em></h2>
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
                        <h2>NGO / Charity trust Registration Form</h2>
                      </div>
                    </div>
                    <div class="search-form">
                      <form action="" method="post" role="form"  enctype="multipart/form-data">
                        <div class="row">
                          <div class="col-md-6">
                            <label style="color:#ffffff;">Registration Number</label>
                            <input type="text"  name="r_no" id="r_no" placeholder="Enter Registration Number">
                          </div>
                          <div class="col-md-6">
                            <label style="color:#ffffff;">Type of NGO (Charity / Section 8)</label>
                            <input type="text"  name="t_ngo" id="t_ngo" placeholder="Enter Type of NGO">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Name of NGO / Charity trust</label>
                            <input type="text"  name="n_ngo" id="n_ngo" placeholder="Enter Name of NGO ">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Fill Address</label>
                            <input type="text"  name="n_address" id="n_address" placeholder="Enter Full Address">
                          </div>
                          <div class="col-md-4">
                            <label style="color:#ffffff;">District</label>
                            <input type="text"  name="n_district" id="n_district" placeholder="Enter District">
                          </div>
                          <div class="col-md-4">
                            <label style="color:#ffffff;">Taluka</label>
                            <input type="text"  name="n_taluka" id="n_taluka" placeholder="Enter Taluka">
                          </div>
                          <div class="col-md-4">
                            <label style="color:#ffffff;">PIN</label>
                            <input type="text"  name="n_pin" id="n_pin" placeholder="Enter PIN">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Official Contact Number</label>
                            <input type="text"  name="o_contact" id="o_contact" placeholder="Enter Official Contact Number +91 xxxxxxx98">
                          </div>
                          <div class="col-md-6">
                            <label style="color:#ffffff;">Email</label>
                            <input type="text"  name="email" id="email" placeholder="Enter Email mmnf@gmail.com">
                          </div>
                          <div class="col-md-6">
                            <label style="color:#ffffff;">Website</label>
                            <input type="text"  name="web" id="web" placeholder="Enter Website">
                          </div>
                          <div class="col-md-6">
                            <label style="color:#ffffff;">12A</label>
                            <input type="text"  name="a_12" id="a_12" placeholder="12A">
                          </div>
                          <div class="col-md-6">
                            <label style="color:#ffffff;">Upload 12A Certificate <small>(PDF Only)</small></label>
                            <div class="input-select">
                              <input name="a_12_up" type="file" class="form-control-file">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <label style="color:#ffffff;">80G</label>
                            <input type="text"  name="g_80" id="g_80" placeholder="80G">
                          </div>
                          <div class="col-md-6">
                            <label style="color:#ffffff;">Upload 80G Certificate <small>(PDF Only)</small></label>
                            <div class="input-select">
                              <input name="g_80_up" type="file" class="form-control-file">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <label style="color:#ffffff;">FCRA</label>
                            <input type="text"  name="fcra" id="fcra" placeholder="FCRA">
                          </div>
                          <div class="col-md-6">
                            <label style="color:#ffffff;">Upload FCRA Certificate <small>(PDF Only)</small></label>
                            <div class="input-select">
                              <input name="fcra_up" type="file" class="form-control-file">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <label style="color:#ffffff;">CSR 1</label>
                            <input type="text"  name="csr_1" id="csr_1" placeholder="CSR 1">
                          </div>
                          <div class="col-md-6">
                            <label style="color:#ffffff;">Upload CSR 1 Certificate <small>(PDF Only)</small></label>
                            <div class="input-select">
                              <input name="csr_1_up" type="file" class="form-control-file">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <label style="color:#ffffff;">CSR 2 </label>
                            <input type="text"  name="csr_2" id="csr_2" placeholder="CSR 2 ">
                          </div>
                          <div class="col-md-6">
                            <label style="color:#ffffff;">Upload CSR 2 Certificate <small>(PDF Only)</small></label>
                            <div class="input-select">
                              <input name="csr_2_up" type="file" class="form-control-file">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <label style="color:#ffffff;">GST</label>
                            <input type="text"  name="gst" id="gst" placeholder="GST">
                          </div>
                          <div class="col-md-6">
                            <label style="color:#ffffff;">Upload GST Certificate <small>(PDF Only)</small></label>
                            <div class="input-select">
                              <input name="gst_up" type="file" class="form-control-file">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <label style="color:#ffffff;">MSME Registration</label>
                            <input type="text"  name="msme_reg" id="msme_reg" placeholder="MSME Registration">
                          </div>
                          <div class="col-md-6">
                            <label style="color:#ffffff;">Upload MSME Certificate <small>(PDF Only)</small></label>
                            <div class="input-select">
                              <input name="msme_reg_up" type="file" class="form-control-file">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <label style="color:#ffffff;">Darpan Reg. Number</label>
                            <input type="text"  name="dar_reg" id="dar_reg" placeholder="Darpan Reg. Number">
                          </div>
                          <div class="col-md-6">
                            <label style="color:#ffffff;">Upload Darpan Certificate <small>(PDF Only)</small></label>
                            <div class="input-select">
                              <input name="dar_reg_up" type="file" class="form-control-file">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Focus Area 1</label>
                            <input type="text"  name="f1" id="f1" placeholder="Focus Area 1">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Focus Area 2</label>
                            <input type="text"  name="f2" id="f2" placeholder="Focus Area 2">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Focus Area 3</label>
                            <input type="text"  name="f3" id="f3" placeholder="Focus Area 3">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Focus Area 4</label>
                            <input type="text"  name="f4" id="f4" placeholder="Focus Area 4">
                          </div>
                          <div class="col-md-12">
                            <label style="color:#ffffff;">Focus Area 5</label>
                            <input type="text"  name="f5" id="f5" placeholder="Focus Area 5">
                          </div>
                          <!-- <p>Autharity Person 1</p><br>-->
                          <div class="col-md-6">
                            <label style="color:#ffffff;">Authority President Name</label>
                            <input type="text"  name="ap1_name" id="ap1_name" placeholder="Authority President Name">
                          </div>
                          <div class="col-md-3">
                            <label style="color:#ffffff;">Mobile</label>
                            <input type="text"  name="ap1_mobile" id="ap1_mobile" placeholder="Mobile">
                          </div>
                          <div class="col-md-3">
                            <label style="color:#ffffff;">Email Id</label>
                            <input type="text"  name="ap1_mail" id="ap1_mail" placeholder="Email">
                          </div>
                          <!-- <p>Autharity Person 2</p><br>-->
                          <div class="col-md-6">
                            <label style="color:#ffffff;">Authority President Name</label>
                            <input type="text"  name="ap2_name" id="ap2_name" placeholder="Authority President Name">
                          </div>
                          <div class="col-md-3">
                            <label style="color:#ffffff;">Mobile</label>
                            <input type="text"  name="ap2_mobile" id="ap2_mobile" placeholder="Mobile">
                          </div>
                          <div class="col-md-3">
                            <label style="color:#ffffff;">Email Id</label>
                            <input type="text"  name="ap2_mail" id="ap2_mail" placeholder="Email">
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
