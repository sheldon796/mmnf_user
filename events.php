<?php include("config.php"); ?>
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
<!--								<p><a href="index.php">Homepage</a> / <em> Events</em></p>
-->								<h2>Our <em>Events</em></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
     

	<div class="blog-page">
		<div class="container">
			
            
            <div class="row">
            
				<div class="col-md-12 col-12">
					<div class="blog-classic-post">
                    <div class="row">
                    
                    <?php
				$sql = 'SELECT * FROM events_achievement   ORDER BY id DESC';  
				$result=$link->query($sql);
                while($row = $result->fetch_array()){  ?>
                <?php $id = $row['id'];?>
                    
                     <div class="col-md-4  col-sm-6">
						<div class="item">
					 		<div class="thumb-content">
								<div class="date-post">
									<a href="#"><?php echo $row['datee'];?></a>
								</div>
								<div class="thumb-inner">
									<a href="#"><?php echo $row['upload'];?>
                                    </a>
								</div>
							</div>
							<div class="down-content">
								<a href="#"><h4><?php echo $row['title'];?></h4></a>
								
								<p><?php echo $row['description'];?>
</p>	
															
							</div>
					  	</div>
                        </div>
                        
                         <?php
				}
				?>
        
                        <div class="col-md-4 col-sm-6">
					  	<div class="item">
					 		<div class="thumb-content">
								<div class="date-post">
									<a href="#">**/**/****</a>
								</div>
								<div class="thumb-inner">
									<a href="#"><iframe  class="embed-responsive" src="https://www.youtube.com/embed/Zvp7UZC6TCU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
								</div>
							</div>
							<div class="down-content">
								<a href="#"><h4>Aims and Objective of Maharashtra Minority NGO Forum</h4></a>
								
								<p>Zakir Shikalgar Maharashtra Minority NGO Forum ke Aims and Objective bayan karte huye .. Anjuman islam karimi Hall CST Mumbai Conference mai </p>	
															
							</div>
					  	</div>
                        </div>
                        <div class="col-md-4  col-sm-6">
					  	<div class="item">
					 		<div class="thumb-content">
								<div class="date-post">
									<a href="#">25 Nov 2018</a>
								</div>
								<div class="thumb-inner">
                                	<a href="#">
									 <iframe  class="embed-responsive" src="https://www.youtube.com/embed/rWNXxtGEePM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                     </a>
								</div>
							</div>
							<div class="down-content">
								<a href="#"><h4>Speech on Community development</h4></a>
								
								<p>very important speech by Ahsan Sayyed Role of NGO in Community development  At historical karimi laibrery  Anjuman Islam C.S.T. mumbai. held on 25th Nov, 2018 org. by Maharashtra minority NGO forum </p>	
															
							</div>
					  	</div>
                        </div>
                        
                        <div class="col-md-4  col-sm-6">
					  	<div class="item">
					 		<div class="thumb-content">
								<div class="date-post">
									<a href="#">**/**/****</a>
								</div>
								<div class="thumb-inner">
									<a href="#"><iframe  class="embed-responsive" src="https://www.youtube.com/embed/4bqN7fi4Tl4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
								</div>
							</div>
							<div class="down-content">
								<a href="#"><h4>Speech By Dr Shaikh Abdullah</h4></a>
								
								<p>Best Speech By Dr Shaikh Abdullah vice President Anjuman islam, Conference Of Maharashtra Minority NGO Forum, At Anjuman-i-Islam Karimi Library </p>	
															
							</div>
					  	</div>
                        </div>
                        <div class="col-md-4  col-sm-6">
					  	<div class="item">
					 		<div class="thumb-content">
								<div class="date-post">
									<a href="#">**/**/****</a>
								</div>
								<div class="thumb-inner">
									<a href="#"><iframe  class="embed-responsive" src="https://www.youtube.com/embed/-YedjYr03vs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
								</div>
							</div>
							<div class="down-content">
								<a href="#"><h4>Speech on NGO funding and CSR</h4></a>
								
								<p>Speech By RIYAZ PIRZADE Topic Of NGO funding and CSR and how to get certification under various Sections under Charities Commission Act. Grand Conference of MAHARASHTRA MINIORITY NGO FORUM</p>	
															
							</div>
					  	</div>
                        </div>
                        <div class="col-md-4  col-sm-6">
					  	<div class="item">
					 		<div class="thumb-content">
								<div class="date-post">
									<a href="#">**/**/****</a>
								</div>
								<div class="thumb-inner">
									<a href="#"><iframe  class="embed-responsive" src="https://www.youtube.com/embed/V-DeHtdCYDU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
								</div>
							</div>
							<div class="down-content">
								<a href="#"><h4>Speech on   Wakf properties and procedure</h4></a>
								
								<p>Speech by Salim Mulla topic of  Wakf properties and procedure and how can we benefit the society through proper use of Wakf property</p>	
															
							</div>
					  	</div>
                        </div>
                        <div class="col-md-4  col-sm-6">
					  	<div class="item">
					 		<div class="thumb-content">
								<div class="date-post">
									<a href="#">**/**/****</a>
								</div>
								<div class="thumb-inner">
									<a href="#"><iframe  class="embed-responsive" src="https://www.youtube.com/embed/HMCG3OEEuWs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
								</div>
							</div>
							<div class="down-content">
								<a href="#"><h4>Speech by farhan makba  </h4></a>
								
								<p>Speech by farhan makba  Conference of Maharashtra Miniority NGO Forum At  karimi laibrery , Anjuman Islam C.S.T. mumbai.</p>	
															
							</div>
					  	</div>
                        </div>
                        <div class="col-md-4  col-sm-6">
					  	<div class="item">
					 		<div class="thumb-content">
								<div class="date-post">
									<a href="#">**/**/****</a>
								</div>
								<div class="thumb-inner">
									<a href="#"><iframe  class="embed-responsive" src="https://www.youtube.com/embed/AcECmXYU5Hc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
								</div>
							</div>
							<div class="down-content">
								<a href="#"><h4>Speech on revelation on wakf property</h4></a>
								
								<p>Maulana Danish Lambe's big revelation on wakf property Waqf property How to find out about the wakf property through 3,500 RTI. ‎</p>	
															
							</div>
					  	</div>
                        </div>
                        <!-- <div class="col-md-4 col-4">
					  	<div class="item">
					 		<div class="thumb-content">
								<div class="date-post">
									<a href="#">**/**/****</a>
								</div>
								<div class="thumb-inner">
									<a href="#"><iframe src="https://www.youtube.com/embed/p3WsSeQIPbE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="embed-responsive"></iframe></a>
								</div>
							</div>
							<div class="down-content">
								<a href="#"><h4>Speech by Aziz Mulla sahab</h4></a>
								
								<p>Speech by Aziz Mulla sahab president of Conference Maharashtra Miniority NGO Forum At  karimi laibrery , Anjuman Islam C.S.T. Mumbai.</p>	
															
							</div>
					  	</div>
                        </div> -->
                         
                        
                        
                        
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
    <script src="assets/js/custom.js"></script>

</body>
</html>