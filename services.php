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
<!--Breadcrumb end-->
<!--Services Start-->
<div class="ast_service_wrapper ast_toppadder70 ast_bottompadder50">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
				<div class="ast_service_box">
					<img src="images/content/sv5.png" alt="Service">
					<h4>Griha Pravesh</h4>
					<p>Puja performed before entering a new home to invite prosperity and peace.</p>
					<div class="clearfix"></div>
					<a href="service_single.php" class="ast_btn">read more</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
				<div class="ast_service_box">
					<img src="images/content/sv6.png" alt="Service">
					<h4>Namkaran</h4>
					<p>Naming ceremony for a newborn as per astrological traditions.</p>
					<div class="clearfix"></div>
					<a href="service_single1.php" class="ast_btn">read more</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
				<div class="ast_service_box">
					<img src="images/content/sv4.png" alt="Service">
					<h4>Marriage Puja</h4>
					<p>Rituals to bless the union of two souls for a prosperous married life.</p>
					<div class="clearfix"></div>
					<a href="service_single.php" class="ast_btn">read more</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
				<div class="ast_service_box">
					<img src="images/content/sv3.png" alt="Service">
					<h4>Navratri Puja</h4>
					<p>Dedicated worship of Goddess Durga across nine powerful nights.</p>
					<div class="clearfix"></div>
					<a href="service_single.php" class="ast_btn">read more</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
				<div class="ast_service_box">
					<img src="images/content/sv2.png" alt="Service">
					<h4>Ganesh Chaturthi Puja</h4>
					<p>Celebration of Lord Ganesha's birth, invoking wisdom and wealth.</p>
					<div class="clearfix"></div>
					<a href="service_single.php" class="ast_btn">read more</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
				<div class="ast_service_box">
					<img src="images/content/sv1.png" alt="Service">
					<h4>Satyanarayan Puja</h4>
					<p>Performed for happiness, success, and well-being of the family.</p>
					<div class="clearfix"></div>
					<a href="service_single.php" class="ast_btn">read more</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
				<div class="ast_service_box">
					<img src="images/content/sv7.png" alt="Service">
					<h4>Vijayadashami Puja</h4>
					<p>Marks the triumph of good over evil, performed at Dussehra's end.</p>
					<div class="clearfix"></div>
					<a href="service_single.php" class="ast_btn">read more</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
				<div class="ast_service_box">
					<img src="images/content/sv8.png" alt="Service">
					<h4>Guru Puja</h4>
					<p>A ritual offering reverence and gratitude to one's spiritual teacher.</p>
					<div class="clearfix"></div>
					<a href="service_single.php" class="ast_btn">read more</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
				<div class="ast_service_box">
					<img src="images/content/sv9.png" alt="Service">
					<h4>Durga Puja</h4>
					<p>A grand celebration of Goddess Durga’s power and victory over evil.</p>
					<div class="clearfix"></div>
					<a href="service_single.php" class="ast_btn">read more</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!--Services End-->
<!--WeDo Start-->

<!--WeDo End-->
<!--Timer Section start -->
<div class="ast_timer_wrapper ast_toppadder70 ast_bottompadder40">
    <div class="ast_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="ast_heading">
                    <h1>now <span>we have</span></h1>
                    <p>We proudly serve with devotion and expertise, offering trusted spiritual guidance across India.</p>
                </div>
            </div>
            <div class="ast_counter_wrapper row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="ast_counter">
                        <span><img src="images/content/timer_1.png" alt="timer"></span>
                        <h2 class="timer" data-from="0" data-to="1" data-speed="2000"></h2>
                        <h4>Office in India</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="ast_counter">
                        <span><img src="images/content/timer_2.png" alt="timer"></span>
                        <h2 class="timer" data-from="0" data-to="50" data-speed="2000"></h2>
                        <h4>Skilled Pandits</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="ast_counter">
                        <span><img src="images/content/timer_3.png" alt="timer"></span>
                        <h2 class="timer" data-from="0" data-to="2" data-speed="2000"></h2>
                        <h4>Cities Covered</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                    <div class="ast_counter">
                        <span><img src="images/content/timer_4.png" alt="timer"></span>
                        <h2 class="timer" data-from="0" data-to="7" data-speed="2000"></h2>
                        <h4>Years of Experience</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Timer Section end -->
<!-- Download wrapper start-->
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
									<p>House No - 22, Vishnu Path<br> Bhatiya Basti, Kadma, Jamsedpur, 831005</p>
								</li>
								<li><i class="fa fa-at" aria-hidden="true"></i> <a
										href="#">barunpnd6@gmail.com</a><br><a href="#">info@website.com</a></li>
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