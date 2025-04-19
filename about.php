<?php
session_start();
?>

<!DOCTYPE html>

<html lang="en">
<!-- Begin Head -->

<head>
	<title>NITYA PUJAN</title>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta name="description" content="Astrology">
	<meta name="keywords" content="Astrology, signs, gemstones, tarot, horoscopes, cards, numerology, Zodiac">
	<meta name="author" content="hsoft">
	<meta name="MobileOptimized" content="320">
	<!--Srart Style -->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Favicon Link -->
	<link rel="shortcut icon" type="image/png" href="images/header/favicon.png">
</head>

<body>
	<!-- Header Start -->
	<div class="ast_top_header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="ast_contact_details">
						<ul>
						<li><i class="fa fa-phone" aria-hidden="true"></i> +918235903436</li>
							<li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> barunpnd6@gmail.com</a>
							</li>
						</ul>
					</div>
					<div class="ast_autho_wrapper">
						<ul>
							<?php if (isset($_SESSION['username'])): ?>
								<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>
										<?php echo htmlspecialchars($_SESSION['username']); ?></a></li>
								<li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
							<?php else: ?>
								<li><a class="popup-with-zoom-anim" href="#login-dialog"><i class="fa fa-sign-in"
											aria-hidden="true"></i> Log In</a></li>
								<li><a class="popup-with-zoom-anim" href="#signup-dialog"><i class="fa fa-user-plus"
											aria-hidden="true"></i> Sign Up</a></li>
							<?php endif; ?>



						</ul><!---->
						<div id="login-dialog" class="zoom-anim-dialog mfp-hide">
							<h1>Login Form</h1>
							<form>
								<input type="text" placeholder="Email">
								<input type="password" placeholder="Password">
								<div class="ast_login_data">
									<label class="tp_custom_check" for="remember_me">Remember me <input type="checkbox"
											name="ast_remember_me" value="yes" id="ast_remember_me"><span
											class="checkmark"></span>
									</label>
									<a href="#">Forgot password ?</a>
								</div>
								<button type="submit" class="ast_btn">Login</button>
								<p>Create An Account ? <a href="#">SignUp</a></p>
							</form>
						</div>
						<div id="signup-dialog" class="zoom-anim-dialog mfp-hide">
							<h1>signup form</h1>
							<form>
								<input type="text" placeholder="Name">
								<input type="text" placeholder="Email">
								<input type="password" placeholder="Password">
								<input type="text" placeholder="Mobile Number">
								<select>
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select>
								<button type="submit" class="ast_btn">submit</button>
								<p>Have An Account ? <a href="#">Login</a></p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="ast_header_bottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3 col-10">
					<div class="ast_logo">
						<a href="index.php"><img src="images/content/logo-transparent-png.png" alt="Logo"
								title="Logo"></a>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-9 col-2">
					<div class="ast_main_menu_wrapper">
						<div class="ast_menu">
							<ul>
								<li class="as_submenu_li"><a href="index.php">home</a>
								</li>
								<li><a href="about.php">about</a></li>
								<li><a href="services.php">services</a></li>

								<li><a href="appointments.php">appointment</a></li>
								<li class="as_submenu_li"><a href="#">shop</a>
									<ul class="submenu">
										<li><a href="shop.php">shop</a></li>

										<li><a href="cart.php">cart</a></li>
										<li><a href="checkout.php">checkout</a></li>
									</ul>
								</li>

								<li><a href="contact-us.php">contact</a></li>
							</ul>
						</div>
					</div>
					<button class="ast_menu_btn"><i class="fa fa-bars" aria-hidden="true"></i></button>
				</div>
			</div>
		</div>
	</div>
	<!-- Header End -->
	<!--Breadcrumb start-->
	<div class="ast_pagetitle">
		<div class="ast_ig_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="page_title">
						<h2>About Us</h2>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12">
					<ul class="breadcrumb">
						<li><a href="index.php">home</a></li>
						<li>//</li>
						<li><a href="about.php">About us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--Breadcrumb end-->
	<!--About Us Start-->
	<div class="ast_about_wrapper ast_about_wrapper_01">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-12 col-12">
					<div class="ast_about_info_img">
						<img src="images/content/logo-transparent-png.png" alt="About">
					</div>
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 col-12">
					<div class="ast_about_info">
						<h4>Know About Nitya Pujan</h4>
						<p>Nitya Pujan is a sacred platform created to bring the divine essence of Sanatan Dharma into
							every home. We specialize in organizing all types of Hindu religious ceremonies with
							authenticity, devotion, and a commitment to Vedic principles. From daily pujas to elaborate
							festivals and rituals, we help you stay connected with your spiritual roots.</p>
						<p>Our network includes highly experienced and verified Panditjis who perform ceremonies with
							full devotion and scriptural accuracy. Whether it is a Griha Pravesh, Namkaran Sanskar,
							Pitru Dosh Nivaran, Rudrabhishek, or Shrimad Bhagwat Katha, we ensure that every step of the
							puja is performed in the correct manner with proper vidhi and mantras.</p>
						<p>At Nitya Pujan, we believe that devotion has no boundaries. That’s why we also cater to NRI
							families and destination events, offering puja services across India and abroad. You can
							book a Pandit online anytime, anywhere — effortlessly and with complete trust.</p>
						<p>Our goal is to make Vedic rituals accessible, meaningful, and convenient in today’s
							fast-paced world. Through Nitya Pujan, bring peace, prosperity, and positive energy into
							your life — one puja at a time.</p>


					</div>
				</div>
			</div>
		</div>
	</div>
	<!--About Us End-->
	<!--WhyWe Us Start-->
	<div class="ast_whywe_wrapper ast_toppadder70 ast_bottompadder70">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="ast_heading">
						<h1>Why <span>Choose Us</span></h1>
						<p>we believe that every ritual is a sacred bridge between the
							devotee and the divine. Our team of highly experienced and authentic Vedic Pandits ensures
							that each puja, katha, or sanskar is performed with spiritual purity, scriptural accuracy,
							and complete devotion.</p>


					</div>
				</div>
				<div class="ast_whywe_info row">
					<div class="col-lg-4 col-md-6 col-sm-12 col-12">
						<div class="ast_whywe_info_box">
							<span><img src="images/content/pandit.png" alt=""></span>
							<div class="ast_whywe_info_box_info">
								<p>90+ Expert Pandits</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 col-12">
						<div class="ast_whywe_info_box">
							<span><img src="images/content/accessibility.png" alt=""></span>
							<div class="ast_whywe_info_box_info">
								<p>🕉️ 24x7, 365 Days Availability</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 col-12">
						<div class="ast_whywe_info_box">
							<span><img  src="images/content/geo.svg" alt=""></span>
							<div class="ast_whywe_info_box_info">
								<p>🌐 Instant Access Jamshedpur</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 col-12">
						<div class="ast_whywe_info_box">
							<span><img src="images/content/ARS.png" alt=""></span>
							<div class="ast_whywe_info_box_info">
								<p>Accurate Remedial Solutions</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 col-12">
						<div class="ast_whywe_info_box">
							<span><img src="images/content/pg.png" alt=""></span>
							<div class="ast_whywe_info_box_info">
								<p>Privacy Guaranteed</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 col-12">
						<div class="ast_whywe_info_box">
							<span><img src="images/content/trust.jpg" alt=""></span>
							<div class="ast_whywe_info_box_info">
								<p>Trusted by million clients</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--WhyWe Us End-->
	<!--Timer Section start -->
	<div class="ast_timer_wrapper ast_toppadder70 ast_bottompadder40">
		<div class="ast_img_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="ast_heading">
						<h1>now <span>we have</span></h1>
						<p>We bring sacred traditions and spiritual wisdom to your home with expert Panditjis and authentic Vedic rituals tailored to your needs.</p>

					</div>
				</div>
				<div class="ast_counter_wrapper row">
					<div class="col-lg-3 col-md-3 col-sm-6 col-12">
						<div class="ast_counter">
							<span><img src="images/content/timer_1.png" alt="timer"></span>
							<h2 class="timer" data-from="0" data-to="1" data-speed="2000"></h2>
							<h4>Offices Jamshedpur</h4>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-12">
						<div class="ast_counter">
							<span><img src="images/content/timer_2.png" alt="timer"></span>
							<h2 class="timer" data-from="0" data-to="60" data-speed="5000"></h2>
							<h4>skilled Acharyas</h4>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-12">
						<div class="ast_counter">
							<span><img src="images/content/timer_3.png" alt="timer"></span>
							<h2 class="timer" data-from="0" data-to="20" data-speed="5000"></h2>
							<h4>Cities Covered</h4>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6 col-12">
						<div class="ast_counter">
							<span><img src="images/content/timer_4.png" alt="timer"></span>
							<h2 class="timer" data-from="0" data-to="15" data-speed="5000"></h2>
							<h4>Years of Experiences</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Timer Section end -->
	<!-- Testimonials Start-->
	<div class="ast_testimonial_wrapper ast_toppadder70 ast_bottompadder70">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="ast_heading">
						<h1>what client<span> says</span></h1>
						<p>Our clients have experienced divine blessings and peace through our spiritual services.
							Here's what they have to say.</p>
					</div>
				</div>
				<div class="col-lg-10 col-md-12 col-sm-12 col-12 offset-lg-1 offset-md-0 offset-sm-0 offset-0">
					<div class="ast_testimonials_slider">
						<div class="owl-carousel owl-theme">

							<div class="item">
								<div class="ast_testimonials_slider_box">
									<img src="images/content/test.png" alt="Testimonial">
									<div class="ast_testimonials_slider_box_text">
										<p>The Satyanarayan Pooja conducted by Nitya Pujan brought immense positivity to
											our home. The Panditji was humble and explained every ritual with clarity.
										</p>
										<h4>Anjali Sharma, <span>Homemaker, Delhi</span></h4>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="ast_testimonials_slider_box">
									<img src="images/content/test.png" alt="Testimonial">
									<div class="ast_testimonials_slider_box_text">
										<p>I booked a Griha Pravesh puja through Nitya Pujan. The process was seamless
											and the energy during the ceremony was divine. Thank you for the blessings.
										</p>
										<h4>Rohan Verma, <span>IT Professional, Bengaluru</span></h4>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="ast_testimonials_slider_box">
									<img src="images/content/test.png" alt="Testimonial">
									<div class="ast_testimonials_slider_box_text">
										<p>During Navratri, we booked daily Durga Pooja and felt truly connected to the
											divine. Highly recommend Nitya Pujan for any religious service.</p>
										<h4>Savita Joshi, <span>Teacher, Pune</span></h4>
									</div>
								</div>
							</div>

							<div class="item">
								<div class="ast_testimonials_slider_box">
									<img src="images/content/test.png" alt="Testimonial">
									<div class="ast_testimonials_slider_box_text">
										<p>I was guided very well during the online Kundali consultation. The
											astrologer's predictions and remedies really helped me overcome obstacles.
										</p>
										<h4>Amit Trivedi, <span>Businessman, Ahmedabad</span></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonials End-->
	<!-- Download wrapper start-->

	<!-- Download wrapper End-->
	<!-- Footer wrapper start-->
	<div class="ast_footer_wrapper ast_toppadder70 ast_bottompadder20">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="ast_footer_info">
						<p>In today’s busy world, staying connected to our spiritual roots brings peace and balance.
							Nitya Pujan offers authentic Vedic rituals, daily worship guidance, and personalized Puja
							services to help you nurture your faith and devotion — all in a simple and accessible way.
						</p>

						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6 col-12">
					<div class="widget text-widget">
						<h4 class="widget-title">Our Newsletter</h4>
						<div class="ast_newsletter">
							<p>Stay connected with Nitya Pujan for spiritual updates, important tithi reminders,
								festival-specific rituals, and special offers on Pujas and Jaaps. Receive divine
								insights directly in your inbox to keep your daily devotion on track.</p>
							<div class="ast_newsletter_box">
								<input type="text" placeholder="Email">
								<button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-2 col-sm-6 col-12">
					<div class="widget text-widget">
						<h4 class="widget-title">Our Services</h4>
						<div class="ast_servicelink">
							<ul>
								<li><a href="services.php">Griha Pravesh Pooja</a></li>
								<li><a href="services.php">Namkaran Sanskar</a></li>
								<li><a href="services.php">Marriage Pooja</a></li>
								<li><a href="services.php">Satyanarayan Katha</a></li>
								<li><a href="services.php">Ganesh Chaturthi Pooja</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-2 col-sm-6 col-12">
					<div class="widget text-widget">
						<h4 class="widget-title">Quick Links</h4>
						<div class="ast_sociallink">
							<ul>
								<li><a href="about.php">About</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="team.html">Astrologers</a></li>
								<li><a href="error.html">404 Error</a></li>
								<li><a href="contact-us.php">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-2 col-md-2 col-sm-6 col-12">
					<div class="widget text-widget">
						<h4 class="widget-title">Get in Touch</h4>
						<div class="ast_gettouch">
							<ul>
								<li><i class="fa fa-home" aria-hidden="true"></i>
									<p>House No - 22, Vishnu Path<br> Bhatiya Basti, Kadma, Jamshedpur, 831005</p>
								</li>
								<li><i class="fa fa-at" aria-hidden="true"></i> <a
										href="#">barunpnd6@gmail.com</a><br><a href="#"></a></li>
								<li><i class="fa fa-phone" aria-hidden="true"></i>
									<p>+918235903436</p>
									<p>+917250163436</p>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- New Payment Widget Column -->
				<!-- New Payment Widget Column -->
				<div class="col-lg-2 col-md-2 col-sm-6 col-12">
					<div class="widget text-widget">
						<h4 class="widget-title">Payment Info</h4>
						<div class="ast_payment_info">

							<!-- QR Image -->
							<div class="payment-qr">
								<img src="images/content/scanner.png" alt="QR Code">
							</div>

							<!-- Payment Details Styled -->
							<div class="payment-details"
								style="color: #fff; background-color: #222; padding: 10px; border-radius: 8px;">
								<p style="margin: 4px 0;"><strong>Bank:</strong> Canara Bank</p>
								<p style="margin: 4px 0;"><strong>Account No:</strong> 4909101002221</p>
								<p style="margin: 4px 0;"><strong>IFSC:</strong> CNRB0004909</p>
								<p style="margin: 4px 0;"><strong>A/C Holder:</strong> Barun Pandey</p>
							</div>

						</div>
					</div>
				</div>




				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="ast_copyright_wrapper">
						<p>&copy; Copyright 2025, All Rights Reserved, <a href="#">NITYA PUJAN</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Footer wrapper End-->
	<!--Main js file Style-->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/jquery.countTo.js"></script>
	<script type="text/javascript" src="js/jquery.appear.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<!--Main js file End-->
</body>

</html>