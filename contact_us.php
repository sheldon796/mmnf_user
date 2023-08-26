

 <?php

include("config.php");  

error_reporting (0);

if(isset($_POST['btn_submit']))

{  

		 $name = $_POST['name'];

         $email = $_POST['email'];

         $subject = $_POST['subject'];

         $message = $_POST['message'];

		 

	echo $sql="INSERT INTO `contact_us`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";

	

	

	

	$result=$link->query($sql);

	if($result)

	{?>

		<script> 

			window.alert("Information Updated")

        	window.location.href="contact_us.php";

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



	

	

	

	

	<div id="search">

	    <button type="button" class="close">×</button>

	    <form>

	        <input type="search" value="" placeholder="type keyword(s) here" />

	        <button type="submit" class="primary-button"><a href="#">Search <i class="fa fa-search"></i></a></button>

	    </form>

	</div>

	

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

								<p><a href="index.php">Homepage</a> / <em> Contact Us</em></p>

								<h2>Contact <em>Us</em></h2>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>



	<div class="contact-us wow fadeIn" data-wow-delay="0.5s" data-wow-duration="1s">

		<div id="map"></div>

	</div>



	<section>

		<div class="contact-content wow fadeIn" data-wow-delay="0.5s" data-wow-duration="1s">

			<div class="container">

				<div class="row">

					<div class="col-md-8">

						<div class="send-message">

							<div class="sep-section-heading">

								<h2>Send Us <em>Message</em></h2>

							</div>

							<form id="" action="#" method="POST" enctype="multipart/form-data">

								<div class="row">

									<div class=" col-md-4 col-sm-4 col-xs-6">

										<input type="text" class="blog-search-field" name="name" id="name" placeholder="Your name..." value="">

									</div>

									<div class="col-md-4 col-sm-4 col-xs-6">

										<input type="text" class="blog-search-field"  name="email" id="email" placeholder="Your email..." value="">

									</div>

									<div class="col-md-4 col-sm-4 col-xs-12">

										<input type="text" class="subject"  name="subject" id="subject" placeholder="Subject..." value="">

									</div>

								</div>

								<div class="row">

									<div class="col-md-12 col-sm-12">

										<textarea id="message" class="input" name="message" placeholder="Message..."></textarea>

									</div>

								</div>

								<div class="row">

									<div class="submit-coment col-md-12">

										<div class="primary-button">

											<button type="submit" class="btn btn-primary" name="btn_submit">Send Message</button>

										</div>

									</div>

								</div>

							</form>

						</div>

					</div>

					<div class="col-md-4">

						<div class="contact-info">

							<div class="sep-section-heading">

								<h2>Contact <em>Informations</em></h2>

							</div>

							<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati accusamus a iure nulla, sed non ex nobis eius esse distinctio imps sunt quia sint quis quisquam odio repellat.</p>-->

							<div class="info-list">

												<ul>

								<li><i class="fa fa-phone"></i><span><a href="tel:+91 9850757898">+91 8390381731</a></span></li>

								<li><i class="fa fa-envelope"></i><span><a href="mailto:mmnf.secaratory@gmail.com">mmnf.in2018@gmail.com</a></span></li>

								<li><i class="fa fa-map-marker"></i><span>Regd Office: Alsure Khed, District Ratanagiri, Maharastra.</span></li>
								<li><i class="fa fa-map-marker"></i><span>Pune Office: 1st Flore Kohinoor Arked, Next To Shahnai Hall, Santosh Nagar, Katraj Pune.</span></li>

							</ul>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</section>



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

<!--    <script src="assets/js/custom.js"></script>-->



    <!-- Google Map -->

    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>

    <script src="assets/js/jquery.gmap3.min.js"></script>



	<!-- Google Map Init-->

   <script>

		// Initialize and add the map

		

		 

		function initMap() {

		  // The location of Uluru

		  var uluru = {lat: 18.477248648935447, lng: 73.88680460883778};

		  // The map, centered at Uluru

		  var map = new google.maps.Map(

		      document.getElementById('map'), {zoom: 4, center: uluru});

		  // The marker, positioned at Uluru

		  var marker = new google.maps.Marker({position: uluru, map: map});

		}

    </script>

    <!--Load the API from the specified URL

    * The async attribute allows the browser to render the page while the API loads

    * The key parameter will contain your own API key (which is not needed for this tutorial)

    * The callback parameter executes the initMap() function

    -->

    <script async defer

    src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap">

    </script>



</body>

</html>