<?php

include("config.php");  

error_reporting (0);

if(isset($_POST['btn_submit']))

{  

		 $name = $_POST['name'];

         $email = $_POST['email'];

         $subject = $_POST['subject'];

         $message = $_POST['message'];

		 

	echo $sql="INSERT INTO `dept_inq_travel`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";

	

	

	

	$result=$link->query($sql);

	if($result)

	{?>

<script> 

			window.alert("Information Updated")

        	window.location.href="dept_travel.php";

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

    <button type="submit" class="primary-button">Search <i class="fa fa-search"></i></button>

  </form>

</div>

<header class="site-header wow fadeIn" data-wow-duration="1s">

  <div id="main-header" class="main-header">

    <div class="container clearfix">

      <div class="logo"> <a href="index.php"></a> </div>

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

<div class="Modern-Slider">

  <!-- Slide 1 -->

  <div class="item">

    <div class="img-fill"> <img src="assets/images/MDC_dept/travel.jpg" alt="" class="img-fill">

      <div class="info">

        <div >

          <h5>Department</h5>

          <h3 style="color:yellow;">Travel and Guidance Centre (Rahbar)</h3>

        </div>

      </div>

    </div>

  </div>

  <!-- // Slide 1 -->

  <!-- Slide 2 -->

  <div class="item">

    <div class="img-fill"> <img src="assets/images/MDC_dept/travel.jpg" alt="" class="img-fill">

      <div class="info">

        <div>

          <h5>Department</h5>

          <h3 style="color:yellow;">Travel and Guidance Centre (Rahbar)</h3>

        </div>

      </div>

    </div>

  </div>

  <!-- // Slide 2 -->

  <!-- Slide 3 -->

  <div class="item">

    <div class="img-fill"> <img src="assets/images/MDC_dept/travel.jpg" alt="" class="img-fill">

      <div class="info">

        <div>

          <h5>Department</h5>

          <h3 style="color:yellow;">Travel and Guidance Centre (Rahbar)</h3>

        </div>

      </div>

    </div>

  </div>

  <!-- // Slide 3 -->

</div>

<!--

	<section class="top-slider-features wow fadeIn" data-wow-duration="1.5s">

		<div class="container">

			<div class="row">

				<div class="col-md-12">

					<div class="slider-top-features">

						<div id="owl-top-features" class="owl-carousel owl-theme">

							<div class="item car-item">

								<div class="thumb-content">

									<a href="single_car.html"><img src="http://placehold.it/370x260" alt=""></a>								</div>

								<div class="down-content">

									<a href="single_car.html"><h4>Perfect Sport Car</h4></a>

									<span>$36.000</span>								</div>

							</div>

							<div class="item car-item">

								<div class="thumb-content">

									<a href="single_car.html"><img src="http://placehold.it/370x260" alt=""></a>								</div>

								<div class="down-content">

									<a href="single_car.html"><h4>Perfect Sport Car</h4></a>

									<span>$36.000</span>								</div>

							</div>

							<div class="item car-item">

								<div class="thumb-content">

									<a href="single_car.html"><img src="http://placehold.it/370x260" alt=""></a>								</div>

								<div class="down-content">

									<a href="single_car.html"><h4>Perfect Sport Car</h4></a>

									<span>$36.000</span>								</div>

							</div>

							<div class="item car-item">

								<div class="thumb-content">

									<a href="single_car.html"><img src="http://placehold.it/370x260" alt=""></a>								</div>

								<div class="down-content">

									<a href="single_car.html"><h4>Perfect Sport Car</h4></a>

									<span>$36.000</span>								</div>

							</div>

							<div class="item car-item">

								<div class="thumb-content">

									<a href="single_car.html"><img src="http://placehold.it/370x260" alt=""></a>								</div>

								<div class="down-content">

									<a href="single_car.html"><h4>Perfect Sport Car</h4></a>

									<span>$36.000</span>								</div>

							</div>

							<div class="item car-item">

								<div class="thumb-content">

									<a href="single_car.html"><img src="http://placehold.it/370x260" alt=""></a>								</div>

								<div class="down-content">

									<a href="single_car.html"><h4>Perfect Sport Car</h4></a>

									<span>$36.000</span>								</div>

							</div>

							<div class="item car-item">

								<div class="thumb-content">

									<a href="single_car.html"><img src="http://placehold.it/370x260" alt=""></a>								</div>

								<div class="down-content">

									<a href="single_car.html"><h4>Perfect Sport Car</h4></a>

									<span>$36.000</span>								</div>

							</div>

							<div class="item car-item">

								<div class="thumb-content">

									<a href="single_car.html"><img src="http://placehold.it/370x260" alt=""></a>								</div>

								<div class="down-content">

									<a href="single_car.html"><h4>Perfect Sport Car</h4></a>

									<span>$36.000</span>								</div>

							</div>

						</div>

					</div>

			  </div>

			</div>

		</div>

	</section>



-->

<div class="recent-car single-car wow fadeIn" data-wow-delay="0.5s" data-wow-duration="1s">

  <div class="container">

    <div class="recent-car-content">

      <div class="row">

        <div class="col-md-6">

          <div id="single-car" class="slider-pro">

            <div class="sp-slides">

              <div class="sp-slide"> <img class="sp-image" src="assets/images/bbbb/1.jpg" alt="" /> </div>

              <div class="sp-slide"> <img class="sp-image" src="assets/images/bbbb/2.jpg" alt="" /> </div>

              <div class="sp-slide"> <img class="sp-image" src="assets/images/bbbb/3.jpg" alt="" /> </div>

              <div class="sp-slide"> <img class="sp-image" src="assets/images/bbbb/4.jpg" alt="" /> </div>

              <div class="sp-slide"> <img class="sp-image" src="assets/images/bbbb/5.jpg" alt="" /> </div>

            </div>

            <!-- <div class="sp-thumbnails"> <img class="sp-thumbnail" src="assets/images/bbbb/1.jpg" alt="" /> <img class="sp-thumbnail" src="assets/images/bbbb/1.jpg" alt="" /> <img class="sp-thumbnail" src="assets/images/bbbb/1.jpg" alt="" /> <img class="sp-thumbnail" src="assets/images/bbbb/1.jpg" alt="" /> <img class="sp-thumbnail" src="assets/images/bbbb/1.jpg" alt="" /> </div> -->

          </div>

        </div>

        <div class="col-md-6">

          <div class="car-details">

            <h4>About Rahbar  Department</h4>

            <span>Activities of Department</span>
            <p>
              <li>Rahbar is a travel guidance center.</li>
              <li>Safe and secure travel guidance at affordable, economical charges.</li>
              <li>Develop Musafirkhana, hostel, hotel, resort, tourism centre.</li>
              <li>Support to book travel trips, railway, bus, flight, tickets, passport, Visa etc.</li>
              <li>Guide to financial planning for Haj, Umrah tour.</li>
              <li>Create job / business opportunities in travel / tourism industry. </li>
            </p>

            <!-- <p>Now a days, Safe & affordable lodging , boarding facilities are hectic job in case of traveliing anywhere away from home. </p>

            <p>In this case , Travel & Guidance Centre will provide all type of able guidelines to travel safely within state, India as well as foreign tour.</p> -->

            <div class="container">

              <div class="row">

                <ul class="car-info col-md-6">

                  <li><i class="flaticon flaticon-calendar"></i>

                    <p>Haj Tour Agencies</p>

                  </li>

                  <li><i class="flaticon flaticon-speed"></i>

                    <p>Omrah Tour Agencies</p>

                  </li>

                  <li><i class="flaticon flaticon-road"></i>

                    <p>Genaral Tour Agencies</p>

                  </li>

                  <li><i class="flaticon flaticon-fuel"></i>

                    <p>Resort Connected</p>

                  </li>
                   <li><i class="flaticon flaticon-fuel"></i>

                    <p>Tourism Destination Connected</p>

                  </li>

                </ul>

                <ul class="car-info col-md-6">

                  <li><i class="flaticon flaticon-art"></i>

                    <p>Hotels Connected</p>

                  </li>

                  <li><i class="flaticon flaticon-shift"></i>

                    <p>Ticket Booking Agencies</p>

                  </li>

                  <li><i class="flaticon flaticon-car"></i>

                    <p>Families Tour Package</p>

                  </li>

                  <li><i class="flaticon flaticon-motor"></i>

                    <p>Group Tour </p>

                  </li>

                </ul>

              </div>

            </div>

          </div>

        </div>

      </div>

      <div class="col-md-12">

        <div class="row">

          <div class="col-md-6">

            <div class="service-item wow fadeIn" data-wow-duration="0.75s"> <img src="assets/images/vision.jpg" class="img-fill">

              <div class="text-content" align="justify">

                <!-- <h6>Vision</h6> -->

                <ul style="padding-left: 5px;">

                  <li>Create a network nationwide & specially for Haj/Umrah tour.</li>

                  <li>Make affordable & safe lodging , boarding facilities.</li>

                  <li>To Promote travel, tourism buisness and social enterprise with NGO'S. </li>

                  <li>Create Entreprenuership & Employment.</li>

                </ul>

              </div>

            </div>

          </div>

          <div class="col-md-6">

            <div class="service-item wow fadeIn" data-wow-duration="0.75s"> <img src="assets/images/mission.jpg" class="img-fill">

              <div class="text-content" align="justify">

                <!-- <h6>Mission</h6> -->

                <ul style="padding-left: 5px;">

                  <li>To Collect data of each travel & tour destination.</li>

                  <li>To Identify proper places with afford abilities.</li>

                  <li>To Create chain of Hotels/Resorts/Restaurants to easy access for tourist.</li>

                </ul>
                <br>

              </div>

            </div>

          </div>

          <div class="col-md-6" style="margin-top:30px;">

            <div class="service-item wow fadeIn" data-wow-duration="0.75s"> <img src="assets/images/goals.jpg" class="img-fill">

              <div class="text-content" align="justify">

                <!-- <h6>Goals</h6> -->

                <ul style="padding-left: 5px;">

                  <li> To develop online system to easy access & monitor each tourist to safe travel.</li>

                  <li>To improve network in tour, travel business for Trustworthy service with humanity. </li>

                </ul>

              </div>

            </div>

          </div>

          <div class="col-md-6" style="margin-top:30px;">

            <div class="service-item wow fadeIn" data-wow-duration="0.75s"> <img src="assets/images/objectives.jpg" class="img-fill">

              <div class="text-content" align="justify">

                <!-- <h6>Objective</h6> -->

                <ul style="padding-left: 5px;">

                  <li>To develop easy accessible, affordable service to each tourist and promote Tour & Travel or a social Enterprise Business opportunity.</li>

                </ul>

                <br>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>

<section>

  <div class="features-search-section">

    <div class="container">

      <div class="row">

        <div class="col-md-8">

          <div class="service-item wow fadeIn" data-wow-duration="0.75s">

            <div class="text-content" align="justify">

              <h6>About Mission Mentor</h6>

            </div>

          </div>

        </div>

        <div class="col-md-4">

          <div class="service-item wow fadeIn" data-wow-duration="0.75s">

            <div class="text-content"> <img src="assets/images/testimonial/Faheem-Qureshi.jpg" class="img-fill">

              <h6 align="center"> Faheem Qureshi (Nagpur) </h6>
              <p align="center">President</p>
              <p align="center">+91 8698792599</p>

            </div>

          </div>

        </div>

        <div class="col-md-12">

          <div class="row">
             <div class="col-md-3">

              <div class="service-item wow fadeIn" data-wow-duration="0.75s"> <img src="assets/images/testimonial/rafik-shaikh.jpg" class="img-fill">

                <div class="text-content">

                  <h6 align="center">Rafik Shaikh <br>(Nagpur) </h6>

                  <p align="center">Director</p>
                  <p align="center">+91 8237070701 </p>

                </div>

              </div>

            </div>

            <div class="col-md-3">

              <div class="service-item wow fadeIn" data-wow-duration="0.75s"> <img src="assets/images/testimonial/no_image.jpg" class="img-fill">

                <div class="text-content">

                  <h6 align="center">Rafik solanki <br>(Boisar) </h6>

                  <p align="center">Director</p>
                  <p align="center">+91  </p>

                </div>

              </div>

            </div>

            <div class="col-md-3">

              <div class="service-item wow fadeIn" data-wow-duration="0.75s"> <img src="assets/images/testimonial/no_image.jpg" class="img-fill">

                <div class="text-content">

                  <h6 align="center">Irfan kazi <br> (Mumbai)  </h6>

                  <p align="center">Director</p>
                  <p align="center">+91 7302566342 </p>

                </div>

              </div>

            </div>

            <div class="col-md-3">

              <div class="service-item wow fadeIn" data-wow-duration="0.75s"> <img src="assets/images/testimonial/no_image.jpg" class="img-fill">

                <div class="text-content">

                  <h6 align="center">Shoeb Shaikh <br>(Nanded)</h6>

                  <p align="center">Director</p>
                  <p align="center">+91 8888889421  </p>

                </div>

              </div>

            </div>

            <div class="col-md-3">

              <div class="service-item wow fadeIn" data-wow-duration="0.75s"> <img src="assets/images/testimonial/no_image.jpg" class="img-fill">

                <div class="text-content">

                  <h6 align="center">Ajmal Khan Nahik </h6>

                  <p align="center">Director</p>
                  <p align="center">+91 9421023495 </p>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</section>

<section>

  <div class="latest-news">

    <div class="container">

      <div class="latest-news-content">

        <div class="row">

          <div class="col-md-12">

            <div class="section-heading">

              <div class="icon"> <i class="fa fa-file"></i> </div>

              <div class="text-content">

                <h2>Latest News & Events</h2>

                <span>Here are our latest posts</span> </div>

            </div>

          </div>

        </div>

      </div>

    </div>

    <div class="container">

      <div class="row">

        <div class="col-md-4">

          <div class="item wow fadeIn" data-wow-duration="0.75s">

            <div class="thumb-content">

              <div class="date-post"> <a href="single-post.html">dd/yy/mm</a> </div>

              <div class="thumb-inner"> <a href="single-post.html"><img src="http://placehold.it/370x260" alt=""></a> </div>

            </div>

            <div class="down-content"> <a href="single_car.html">

              <h4></h4>

              </a> <span>Posted by: <em>Admin</em></span>

              <p></p>

              <div class="text-button"> <a href="single-post.html">Continue Reading <i class="fa fa-arrow-right"></i></a> </div>

            </div>

          </div>

        </div>

        <div class="col-md-4">

          <div class="item wow fadeIn" data-wow-duration="0.75s">

            <div class="thumb-content">

              <div class="date-post"> <a href="single-post.html">dd/yy/mm</a> </div>

              <div class="thumb-inner"> <a href="single-post.html"><img src="http://placehold.it/370x260" alt=""></a> </div>

            </div>

            <div class="down-content"> <a href="single_car.html">

              <h4></h4>

              </a> <span>Posted by: <em>Admin</em></span>

              <p></p>

              <div class="text-button"> <a href="single-post.html">Continue Reading <i class="fa fa-arrow-right"></i></a> </div>

            </div>

          </div>

        </div>

        <div class="col-md-4">

          <div class="item wow fadeIn" data-wow-duration="0.75s">

            <div class="thumb-content">

              <div class="date-post"> <a href="single-post.html">dd/yy/mm</a> </div>

              <div class="thumb-inner"> <a href="single-post.html"><img src="http://placehold.it/370x260" alt=""></a> </div>

            </div>

            <div class="down-content"> <a href="single_car.html">

              <h4></h4>

              </a> <span>Posted by: <em>Admin</em></span>

              <p></p>

              <div class="text-button"> <a href="single-post.html">Continue Reading <i class="fa fa-arrow-right"></i></a> </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</section>

<section>

  <div class="testimonials">

    <div class="container"><br>

      <br>

      <div class="row">

        <div class="col-md-12">

          <div class="section-heading">

            <div class="text-content">

              <h2><strong>Our Travel & Guidance Center</strong></h2>

            </div>

          </div>

        </div>

      </div>

      <div id="owl-testimonials" class="owl-carousel owl-theme">

        <div class="item wow fadeIn" data-wow-duration="0.75s">

          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7563.685111322724!2d73.73553079999995!3d18.58113560000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1645889613407!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" class="img-fill"></iframe>

          <div class="line-dec"></div>

          <p>Address: Mohalla, Village, Nearest Landmark</p>

          <div class="author-rate"> <img src="images/logo.jpg" alt="">

            <h4>TGC Name</h4>

            <div class="line-dec2"></div>

            <span>Contact Person & Number</span> </div>

        </div>

        <div class="item wow fadeIn" data-wow-duration="0.75s">

          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7563.685111322724!2d73.73553079999995!3d18.58113560000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1645889613407!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" class="img-fill"></iframe>

          <div class="line-dec"></div>

          <p>Address: Mohalla, Village, Nearest Landmark</p>

          <div class="author-rate"> <img src="images/logo.jpg" alt="">

            <h4>TGC Name</h4>

            <div class="line-dec2"></div>

            <span>Contact Person & Number</span> </div>

        </div>

        <div class="item wow fadeIn" data-wow-duration="0.75s">

          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7563.685111322724!2d73.73553079999995!3d18.58113560000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1645889613407!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" class="img-fill"></iframe>

          <div class="line-dec"></div>

          <p>Address: Mohalla, Village, Nearest Landmark</p>

          <div class="author-rate"> <img src="images/logo.jpg" alt="">

            <h4>TGC Name</h4>

            <div class="line-dec2"></div>

            <span>Contact Person & Number</span> </div>

        </div>

        <div class="item wow fadeIn" data-wow-duration="0.75s">

          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7563.685111322724!2d73.73553079999995!3d18.58113560000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1645889613407!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" class="img-fill"></iframe>

          <div class="line-dec"></div>

          <p>Address: Mohalla, Village, Nearest Landmark</p>

          <div class="author-rate"> <img src="images/logo.jpg" alt="">

            <h4>TGC Name</h4>

            <div class="line-dec2"></div>

            <span>Contact Person & Number</span> </div>

        </div>

        <div class="item wow fadeIn" data-wow-duration="0.75s">

          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7563.685111322724!2d73.73553079999995!3d18.58113560000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1645889613407!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" class="img-fill"></iframe>

          <div class="line-dec"></div>

          <p>Address: Mohalla, Village, Nearest Landmark</p>

          <div class="author-rate"> <img src="images/logo.jpg" alt="">

            <h4>TGC Name</h4>

            <div class="line-dec2"></div>

            <span>Contact Person & Number</span> </div>

        </div>

        <div class="item wow fadeIn" data-wow-duration="0.75s">

          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7563.685111322724!2d73.73553079999995!3d18.58113560000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1645889613407!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" class="img-fill"></iframe>

          <div class="line-dec"></div>

          <p>Address: Mohalla, Village, Nearest Landmark</p>

          <div class="author-rate"> <img src="images/logo.jpg" alt="">

            <h4>TGC Name</h4>

            <div class="line-dec2"></div>

            <span>Contact Person & Number</span> </div>

        </div>

        <div class="item wow fadeIn" data-wow-duration="0.75s">

          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7563.685111322724!2d73.73553079999995!3d18.58113560000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1645889613407!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" class="img-fill"></iframe>

          <div class="line-dec"></div>

          <p>Address: Mohalla, Village, Nearest Landmark</p>

          <div class="author-rate"> <img src="images/logo.jpg" alt="">

            <h4>TGC Name</h4>

            <div class="line-dec2"></div>

            <span>Contact Person & Number</span> </div>

        </div>

      </div>

    </div>

  </div>

</section>

<div class="blog-page">

  <div class="container">

    <div class="row">

      <div class="col-md-10 offset-md-1">

        <div class="blog-classic-post">

          <div class="item">

            <div class="down-content"> <a href="#">

              <h4>Appeal to Join</h4>

              </a>

              <p>Now a days, Affordable and proper tour travel guidance is important.we may travel safe ,secure with insured to all.we will guide varified tour agencies and connect with travel agencies, hotels, resorts,visa passport agencies.As well as we may try to enter in our persons in this tourism industry.This is the upcoming Evergreen industry in business sector.We MMNF is currently linked with all maharashtra and in future linked with all india.Hence we appeal to individuals,NGOs,Travel agencies , please join with us.</p>

              <div class="text-button"> <a href="#">Continue Reading <i class="fa fa-arrow-right"></i></a> </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>

<section>

  <div class="contact-content wow fadeIn animated" data-wow-delay="0.5s" data-wow-duration="1s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.5s; -moz-animation-delay: 0.5s; animation-delay: 0.5s;">

    <div class="container">

      <div class="row">

        <div class="col-md-8">

          <div class="send-message">

            <div class="sep-section-heading">

              <h2>Send Us <em>Feedback</em></h2>

            </div>

            <form action="#" method="POST" enctype="multipart/form-data">

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

<hr>

<section>

  <div class="our-clients">

    <div class="container">

      <div class="row">

        <div class="col-md-12">

          <div class="section-heading">

            <div class="text-content">

              <h2><strong>NGO’S & ORGANIZATIONS WITH US</strong></h2>

            </div>

          </div>

        </div>

      </div>

      <div class="row">

        <div class="col-md-12">

          <div id="owl-clients" class="owl-carousel owl-theme">

            <?php

				$sql = 'SELECT * FROM advertisements   ORDER BY id DESC';  

				$result=$link->query($sql);

                while($row = $result->fetch_array()){  ?>

            <div class="item"> <img src="admin/upload/advertisements/<?php echo $row['upload'];?>" alt=""> </div>

            <?php }?>

            <!--<div class="item"> <img src="assets/images/Cilents & Partners/clinets (1).jpg" alt=""> </div>

            <div class="item"> <img src="assets/images/Cilents & Partners/clinets (2).jpg" alt=""> </div>

            <div class="item"> <img src="assets/images/Cilents & Partners/clinets (3).jpg" alt=""> </div>

            <div class="item"> <img src="assets/images/Cilents & Partners/clinets (4).jpg" alt=""> </div>

            <div class="item"> <img src="assets/images/Cilents & Partners/clinets (5).jpg" alt=""> </div>

            <div class="item"> <img src="assets/images/Cilents & Partners/clinets (6).jpg" alt=""> </div>

            <div class="item"> <img src="assets/images/Cilents & Partners/clinets (7).jpg" alt=""> </div>

            <div class="item"> <img src="assets/images/Cilents & Partners/clinets (8).jpg" alt=""> </div>

            <div class="item"> <img src="assets/images/Cilents & Partners/clinets (9).jpg" alt=""> </div>

            <div class="item"> <img src="assets/images/Cilents & Partners/clinets (10).jpg" alt=""> </div>

            <div class="item"> <img src="assets/images/Cilents & Partners/clinets (11).jpg" alt=""> </div>

            <div class="item"> <img src="assets/images/Cilents & Partners/clinets (12).jpg" alt=""> </div>-->

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

            <h2>Travel & Guidance Departments</h2>

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

<script src="assets/js/custom.js"></script>

</body>

</html>

