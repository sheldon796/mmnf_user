<?php

include("config.php");  

error_reporting (0);

if(isset($_POST['btn_submit']))

{  

		 $name = $_POST['name'];

         $email = $_POST['email'];

         $subject = $_POST['subject'];

         $message = $_POST['message'];

		 

	echo $sql="INSERT INTO `dept_inq_mdc`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";

	

	

	

	$result=$link->query($sql);

	if($result)

	{?>

<script> 

			window.alert("Information Updated")

        	window.location.href="dept_mdc.php";

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

    <div class="img-fill"> <img src="assets/images/MDC_dept/minority_development3.jpg" alt="" class="img-fill">

      <div class="info">

        <div>

          <h5>Departments</h5>

          <h3 style="color:blue;">Minority Development Centre (MDC)</h3>

        </div>

      </div>

    </div>

  </div>

  <!-- // Slide 1 -->

  <!-- Slide 2 -->

  <div class="item">

    <div class="img-fill"> <img src="assets/images/MDC_dept/minority_development3.jpg" alt="" class="img-fill">

      <div class="info">

        <div>

          <h5>Department</h5>

          <h3 style="color:blue;">Minority Development Centre (MDC)</h3>

        </div>

      </div>

    </div>

  </div>

  <!-- // Slide 2 -->

  <!-- Slide 3 -->

  <div class="item">

    <div class="img-fill"> <img src="assets/images/MDC_dept/minority_development3.jpg" alt="" class="img-fill">

      <div class="info">

        <div>

          <h5>Department</h5>

          <h3 style="color:blue;">Minority Development Centre (MDC)</h3>

        </div>

      </div>

    </div>

  </div>

  <!-- // Slide 3 -->

  <!-- Slide 1 -->

  <!-- <div class="item">

    <div class="img-fill"> <img src="assets/images/MDC_dept/dept_ban_mdc (4).jpg" alt="" class="img-fill">

      <div class="info">

        <div>

          <h5>Department</h5>

          <h3>Minority Development Centre <em>(MDC)</em></h3>

        </div>

      </div>

    </div>

  </div> -->

  <!-- // Slide 1 -->

  <!-- Slide 2 -->

  <!-- <div class="item">

    <div class="img-fill"> <img src="assets/images/MDC_dept/dept_ban_mdc (5).jpg" alt="" class="img-fill">

      <div class="info">

        <div>

          <h5>Department</h5>

          <h3>Minority Development Centre <em>(MDC)</em></h3>

        </div>

      </div>

    </div>

  </div> -->

  <!-- // Slide 2 -->

  <!-- Slide 3 -->

  <!-- <div class="item">

    <div class="img-fill"> <img src="assets/images/MDC_dept/dept_ban_mdc (6).jpg" alt="" class="img-fill">

      <div class="info">

        <div>

          <h5>Department</h5>

          <h3>Minority Development Centre <em>(MDC)</em></h3>

        </div>

      </div>

    </div>

  </div> -->

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

            <h4>About MDC Department</h4>

            <!--

							<span>Activities of Department</span>-->
              <p style="text-align: left;">
                <li>MDC is a taluka-level center to facilitate community as a social service center.</li>
                <li>Plan and activate various awareness programs concerned with all MMNF missions.</li>
                <li>Coordinate and correspond to CDC in the concerned area.</li>
                <li>Activate all needful social services powered by MMNF (Online / Offline)</li>
                <li>MDC is a social mall where registered members will get needful social services, an online grocery center, Bilasudi financial development center, polyclinic, courier, post, and bank services.</li>
                <li>MDC is connecting with MMNF missions as </li>
                <li>TECHNOBUIZ for education</li>
                <li>TIJARAT for business.</li>
                <li>BRAINAC for competitive exams.</li>
                <li>TIBBENANI for Healthcare</li>
                <li>HUNAR for skill development</li>
                <li>FATIMA for women empowerment.</li>
                <li>REHBAR for Travel guidance.</li>
                <li>INSANIYAT for Humanity and disaster management.</li>
                <li>AMANAT for work development</li>
                <li>SALAHKAR for human rights and legal</li>
                <li>BILASUDI for financial development</li>
                <li>MARTI for minority affairs with the government.</li>
                <li>DAPTAR for Data Planning Centre / Head office of MMNF</li>
                </p>
              <!-- <p align="justify">MDC is a taluka-level center to facilitate community as a social service center.</p> -->

            <!-- <p align="justify">Minority development center (MDC) is one of Mission program of MMNF.MDC will give solutions to all community are required individually to take benefit of government/non-government support Schemes. MDC is allotted in Taluka wise/city wise/population wise.</p> -->

            <div class="container">

              <div class="row">

                <ul class="car-info col-md-6">

                  <li><i class="flaticon"><img src="images/icons/dept_mdc/shop.png"></i> <small>No. of MDC</small>:

                    <!-- <p>5000</p> -->

                  </li>

                  <li><i class="flaticon"><img src="images/icons/dept_mdc/3.png"></i> <small>Visitor at MDC</small>:

                    <!-- <p>5000</p> -->

                  </li>

                  <li><i class="flaticon"><img src="images/icons/dept_mdc/5.png"></i> <small>Scholarships</small>:

                    <!-- <p>5000</p> -->

                  </li>

                  <li><i class="flaticon"><img src="images/icons/dept_mdc/7.png"></i> <small>Document correction</small>:

                    <!-- <p>5000</p> -->

                  </li>

                </ul>

                <ul class="car-info col-md-6">

                  <li><i class="flaticon"><img src="images/icons/dept_mdc/2.png"></i> <small>Aple sarkar</small>:

                    <!-- <p>5000</p> -->

                  </li>

                  <li><i class="flaticon"><img src="images/icons/dept_mdc/12.png"></i> <small>Educational loans</small>:

                    <!-- <p>5000</p> -->

                  </li>

                  <li><i class="flaticon"><img src="images/icons/dept_mdc/6.png"></i> <small>Business loans</small>:

                    <p>500</p>

                  </li>

                  <li><i class="flaticon"><img src="images/icons/dept_mdc/8.png"></i> <small>Benefit of community</small>:

                    <!-- <p>5000</p> -->

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

               

                <ul style="padding-left: 5px;">

                  <li>Aware community for their legal documentations, government/non-government schemes.</li>

                  <li>To generate scheme wise program & give proper solutions to each beneficiary. </li>

                  <li>To improve upliftment levels of development in various sector.</li>

                </ul>

              </div>

            </div>

          </div>

          <div class="col-md-6">

            <div class="service-item wow fadeIn" data-wow-duration="0.75s"> <img src="assets/images/mission.jpg" class="img-fill">

              <div class="text-content" align="justify">

              

                <ul style="padding-left: 5px;">

                  <li>To build network of NGO’s, Majid’s, Madrasa & government officials to work on Scheme & Program which are benefitted to all community.</li>

                  <li>To train MDC/CDC directors & operators to work daily.</li>

                  <li>To do necessary Survey & make documentation with the help of community development center/NGO’s.</li>

                </ul>

              </div>

            </div>

          </div>

        </div>

        <br>

        <div class="row">

          <div class="col-md-6">

            <div class="service-item wow fadeIn" data-wow-duration="0.75s"> <img src="assets/images/goals.jpg" class="img-fill">

              <div class="text-content" align="justify">

                <!-- <h6>Goals</h6> -->

                <ul style="padding-left: 5px;">

                  <li>To Deliver max benefit to community & improve level of upliftment at various sectors.</li>

                  <li>To get data of community Mohalla wise/Place wise/Taluka wise.</li>

                  <li>To connect maximum needy and eligible citizens to reach all services given by MDC.</li>

                </ul>

                <br>

                <br>

              </div>

            </div>

          </div>

          <div class="col-md-6">

            <div class="service-item wow fadeIn" data-wow-duration="0.75s"> <img src="assets/images/objectives.jpg" class="img-fill">

              <div class="text-content" align="justify">

                <!-- <h6>Objectives </h6> -->

                <ul style="padding-left: 5px;">

                  <li>To Create number of MDC, CDC to do active more social activities & more NGO’s.</li>

                  <li>Make a program for Individuals, CDC, NGO’s, Madrasa, Educational institutions.</li>

                  <li>To create Organization Structure to link all institutes within taluka.</li>

                  <li>With The Help Of CDC, To do family wise Survey, assessment of needs & comply them.</li>

                  <!--<li>Create MDC office with minimum 100 sq. ft area personalized computer, printer, scanner, inverter with broadband facility & necessary furniture in center to hospitalize individuals/group visited to MDC. </li> -->

                </ul>

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

    <p>Mr. Jakirhusan Shikalgar belongs to Electronic Engineer Profession. Engaged in Energy Conservation. He is founder President of Maharashtra Minority NGO forum & secretary of Ideal Education & Social Forum ,Karad district Satara.</p>

  </div>

</div>

</div>

<div class="col-md-4">

<div class="service-item wow fadeIn" data-wow-duration="0.75s">

  <div class="text-content"> <img src="assets/images/trustee/Jakir shikalgar.jpg" class="img-fill">

    <h6 align="center">Jakir shikalgar</h6>

    <p align="center"> Mission Mentor</p>
    <p align="center">+91 8390381731</p>

  </div>

</div>

</div>

        <div class="col-md-8">

          <div class="service-item wow fadeIn" data-wow-duration="0.75s">

            <div class="text-content" align="justify">

              <h6>About Mission President</h6>

              <p>Irfan Sayyed is working as an Mission Director for Mission MDC. He has completed Diploma in Electrical Engineering.He is 40 years old. He is good businessmen & deals in wholesales of paint allied Material. He is vice-president of NGO namely Ideal Education & Social forum, karad, district satara. Also he is a director of School Commite Chairman of H.K.D Urdu high school, Karad & Ayesha lilbanat, a madrasa for girls at Wagheri Taluka Karad.</p>

            </div>

          </div>

        </div>

        <div class="col-md-4">

          <div class="service-item wow fadeIn" data-wow-duration="0.75s">

            <div class="text-content"> <img src="assets/images/MDC/irfan.jpg" class="img-fill">

              <h6 align="center">Mr. Irfan Iqbal Sayyed (Karad) </h6>

              <p align="center"> Mission President</p>
              <p align="center">+91 9850757898</p>

            </div>

          </div>

        </div>

        <div class="col-md-12">

          <div class="row">

            <div class="col-md-3">

              <div class="service-item wow fadeIn" data-wow-duration="0.75s"> <img src="assets/images/testimonial/Mohsin-Bhai-Shaikh.jpg" class="img-fill">

                <div class="text-content" align="center">

                  <h6 align="center">Mohsin Bhai Shaikh (Mumbai)</h6>

                  <p align="center"> Director</p>

                  <small>+91 9987855127</small> </div>

              </div>

            </div>

            <div class="col-md-3">

              <div class="service-item wow fadeIn" data-wow-duration="0.75s"> <img src="assets/images/MDC/Abdul_pardeshi.jpg" class="img-fill">

                <div class="text-content" align="center">

                  <h6 align="center">Abdul Rashid Pardeshi (Mumbai)</h6>

                  <p align="center"> Director</p>

                  <small>+91 8655540123</small> </div>

              </div>

            </div>

            <div class="col-md-3">

              <div class="service-item wow fadeIn" data-wow-duration="0.75s"> <img src="assets/images/testimonial/Abdulhai-Shaikh.jpg" class="img-fill">

                <div class="text-content" align="center">

                  <h6 align="center">Abdulhai Shaikh <br> (Panvel)</h6>

                  <p align="center"> Director</p>

                  <small>+91 8898341580</small> </div>

              </div>

            </div>

            <div class="col-md-3">

              <div class="service-item wow fadeIn" data-wow-duration="0.75s"> <img src="assets/images/testimonial/Ruksona-answari.jpg" class="img-fill">

                <div class="text-content" align="center">

                  <h6 align="center">Rukhsana Ansari <br> (kalyan) </h6>

                  <p align="center"> Director</p>

                  <small>+91 9221518411</small> </div>

              </div>

            </div>
            <div class="col-md-3">

              <div class="service-item wow fadeIn" data-wow-duration="0.75s"> <img src="assets/images/testimonial/rafik-shaikh.jpg" class="img-fill">

                <div class="text-content" align="center">

                  <h6 align="center">Rafik Shaikh <br> (Nagpur) </h6>

                  <p align="center"> Director</p>

                  <small>+91 9923420674</small> </div>

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

              <div class="date-post"> <a href="single-post.html">dd/mm/yy</a> </div>

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

              <div class="date-post"> <a href="single-post.html">dd/mm/yy</a> </div>

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

              <div class="date-post"> <a href="single-post.html">dd/mm/yy</a> </div>

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

              <h2><strong>Our MDC's</strong></h2>

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

            <h4>MDC Name</h4>

            <div class="line-dec2"></div>

            <span>Contact Person & Number</span> </div>

        </div>

        <div class="item wow fadeIn" data-wow-duration="0.75s">

          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7563.685111322724!2d73.73553079999995!3d18.58113560000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1645889613407!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" class="img-fill"></iframe>

          <div class="line-dec"></div>

          <p>Address: Mohalla, Village, Nearest Landmark</p>

          <div class="author-rate"> <img src="images/logo.jpg" alt="">

            <h4>MDC Name</h4>

            <div class="line-dec2"></div>

            <span>Contact Person & Number</span> </div>

        </div>

        <div class="item wow fadeIn" data-wow-duration="0.75s">

          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7563.685111322724!2d73.73553079999995!3d18.58113560000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1645889613407!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" class="img-fill"></iframe>

          <div class="line-dec"></div>

          <p>Address: Mohalla, Village, Nearest Landmark</p>

          <div class="author-rate"> <img src="images/logo.jpg" alt="">

            <h4>MDC Name</h4>

            <div class="line-dec2"></div>

            <span>Contact Person & Number</span> </div>

        </div>

        <div class="item wow fadeIn" data-wow-duration="0.75s">

          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7563.685111322724!2d73.73553079999995!3d18.58113560000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1645889613407!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" class="img-fill"></iframe>

          <div class="line-dec"></div>

          <p>Address: Mohalla, Village, Nearest Landmark</p>

          <div class="author-rate"> <img src="images/logo.jpg" alt="">

            <h4>MDC Name</h4>

            <div class="line-dec2"></div>

            <span>Contact Person & Number</span> </div>

        </div>

        <div class="item wow fadeIn" data-wow-duration="0.75s">

          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7563.685111322724!2d73.73553079999995!3d18.58113560000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1645889613407!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" class="img-fill"></iframe>

          <div class="line-dec"></div>

          <p>Address: Mohalla, Village, Nearest Landmark</p>

          <div class="author-rate"> <img src="images/logo.jpg" alt="">

            <h4>MDC Name</h4>

            <div class="line-dec2"></div>

            <span>Contact Person & Number</span> </div>

        </div>

        <div class="item wow fadeIn" data-wow-duration="0.75s">

          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7563.685111322724!2d73.73553079999995!3d18.58113560000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1645889613407!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" class="img-fill"></iframe>

          <div class="line-dec"></div>

          <p>Address: Mohalla, Village, Nearest Landmark</p>

          <div class="author-rate"> <img src="images/logo.jpg" alt="">

            <h4>MDC Name</h4>

            <div class="line-dec2"></div>

            <span>Contact Person & Number</span> </div>

        </div>

        <div class="item wow fadeIn" data-wow-duration="0.75s">

          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7563.685111322724!2d73.73553079999995!3d18.58113560000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1645889613407!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" class="img-fill"></iframe>

          <div class="line-dec"></div>

          <p>Address: Mohalla, Village, Nearest Landmark</p>

          <div class="author-rate"> <img src="images/logo.jpg" alt="">

            <h4>MDC Name</h4>

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

              <p>Dear President of NGO, If you are interested to register as MDC with us, please click  Registration as MDC and submit necessary information and documents in prescribed forms for new registration as MDC.</p>

              <div class="text-button"> <a href="ref_MDC.php">Register Now <i class="fa fa-arrow-right"></i></a> - </div>

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

<script src="assets/js/custom.js"></script>

</body>

</html>

