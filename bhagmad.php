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
										<li><a href="shop_single.php">shop single</a></li>
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
<div class="ast_img_overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="page_title">
					<h2>service single</h2>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
				<ul class="breadcrumb">
					<li><a href="index.php">home</a></li>
					<li>//</li>
					<li><a href="service.html">service</a></li>
					<li>//</li>
					<li><a href="girha_pravesh.html">service single</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--Breadcrumb end-->
<!--Blog section start-->
<div class="ast_blog_wrapper ast_toppadder80 ast_bottompadder80">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-8 col-sm-12 col-12">
				<div class="ast_blog_box">
					<div class="ast_blog_img">
						<img src="images/content/bhagmad.png" alt="Blog" title="Blog">
					</div>
					<div class="ast_blog_info">
    <h3 class="ast_blog_info_heading">Significance of Griha Pravesh Puja in Hindu Tradition</h3>
    <p class="ast_blog_info_details">Griha Pravesh Puja marks a sacred beginning in a new home, invoking blessings of peace, prosperity, and protection from negative energies. It is an auspicious ceremony performed before entering a new house to purify the space and seek divine grace. Following Vastu Shastra and astrological timing ensures the positive flow of energy within the home.</p>
    <p class="ast_blog_info_details">This ritual typically includes Ganesh Puja, Navagraha Shanti, and Vastu Puja. It is believed to bring harmony among family members and remove any doshas related to the house. Our expert priests conduct the puja with precision and devotion, ensuring a spiritually uplifting experience as you step into your new abode.</p>
</div>

				</div>
				<div class="ast_blog_comment_wrapper">
					<h4 class="ast_blog_heading">all comments</h4>
					<ul>
	<li>
		<div class="ast_blog_comment">
			<div class="ast_comment_image">
				<img src="https://dummyimage.com/70x70" alt="">
			</div>
			<div class="ast_comment_text">
				<h5 class="ast_bloger_name">Pandit Rajesh Sharma</h5>
				<span class="ast_blog_date">April 5, 2025</span>
				<p class="ast_blog_post">The Griha Pravesh puja listed here is exactly as per Vedic traditions. A perfect service for those entering a new home with spiritual intent.</p>
			</div>
		</div>
	</li>

	<li>
		<div class="ast_blog_comment">
			<div class="ast_comment_image">
				<img src="https://dummyimage.com/70x70" alt="">
			</div>
			<div class="ast_comment_text">
				<h5 class="ast_bloger_name">Neha Tripathi</h5>
				<span class="ast_blog_date">April 6, 2025</span>
				<p class="ast_blog_post">Yes, we had our Griha Pravesh done last month through Nitya Pujan, and it was a truly divine experience. Highly recommend their services.</p>
			</div>
		</div>
	</li>

	<li>
		<div class="ast_blog_comment">
			<div class="ast_comment_image">
				<img src="https://dummyimage.com/70x70" alt="">
			</div>
			<div class="ast_comment_text">
				<h5 class="ast_bloger_name">Ankit Verma</h5>
				<span class="ast_blog_date">April 7, 2025</span>
				<p class="ast_blog_post">The detailed rituals for Durga Puja are very helpful. I appreciate how everything is rooted in tradition yet made accessible for us online.</p>
			</div>
		</div>
	</li>

	<li>
		<div class="ast_blog_comment">
			<div class="ast_comment_image">
				<img src="https://dummyimage.com/70x70" alt="">
			</div>
			<div class="ast_comment_text">
				<h5 class="ast_bloger_name">Suman Joshi</h5>
				<span class="ast_blog_date">April 8, 2025</span>
				<p class="ast_blog_post">The explanations about each puja and the process really help those unfamiliar with the rituals. Nitya Pujan is doing a great job keeping our traditions alive.</p>
			</div>
		</div>
	</li>
</ul>



				</div>
				<div class="ast_blog_message_wrapper">
					<h4 class="ast_blog_heading">Leave a reply</h4>
					<div class="ast_blog_messages">
						<form>
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-12">
									<textarea rows="5" placeholder="Your Message"></textarea>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-12">
									<input type="text" placeholder="Name*">
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-12">
									<input type="email" placeholder="Email*">
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-12">
									<a href="#" id="ed_submit" class="ast_btn">reply</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-12 col-12">
				<div class="sidebar_wrapper">
		
				</div>
			</div>
		</div>
	</div>
</div>
<!--Blog section end-->
<!-- Download wrapper start-->
<div class="ast_download_wrapper ast_toppadder70 ast_bottompadder70">
	<div class="container">
	
	</div>
</div>
<!-- Download wrapper End-->

<!-- Footer wrapper start-->
<div class="ast_footer_wrapper ast_toppadder70 ast_bottompadder20">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="ast_footer_info">
					<img src="https://dummyimage.com/160x64" alt="Logo">
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
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
					<h4 class="widget-title">our newsletter</h4>
					<div class="ast_newsletter">
						<p>Making it look like readable English.The point of using Lorem Ipsum is that it has a more-or less normal distribution of letters.</p>
						<div class="ast_newsletter_box">
							<input type="text" placeholder="Email">
							<button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>						
						</div>
					</div>				
				</div>			
			</div>
			<div class="col-lg-2 col-md-2 col-sm-6 col-12">
				<div class="widget text-widget">
					<h4 class="widget-title">our services</h4>
					<div class="ast_servicelink">
						<ul>
							<li><a href="services.php">Griha Pravesh</a></li>
							<li><a href="services.php">Navratri Pooja</a></li>
							<li><a href="services.php">Weeding Pooja</a></li>
							<li><a href="services.php">Bhagwat Katha</a></li>
							<li><a href="services.php">Puran Katha</a></li>
						</ul>
					</div>				
				</div>			
			</div>
			<div class="col-lg-2 col-md-2 col-sm-6 col-12">
				<div class="widget text-widget">
					<h4 class="widget-title">quick links</h4>
					<div class="ast_sociallink">
						<ul>
							<li><a href="about.php">about</a></li>
							<li><a href="blog.html">blog</a></li>
							<li><a href="team.html">Astrologers</a></li>
							<li><a href="error.html">404 error</a></li>
							<li><a href="contact-us.php">contact</a></li>
						</ul>
					</div>				
				</div>			
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 col-12">
				<div class="widget text-widget">
					<h4 class="widget-title">get in touch</h4>
					<div class="ast_gettouch">
						<ul>
							<li><i class="fa fa-home" aria-hidden="true"></i> <p>2794, Hayhurst Lane Bloomfield Township, MI 48302</p></li>
							<li><i class="fa fa-at" aria-hidden="true"></i> <a href="#">support@website.com</a><a href="#">info@website.com</a></li>
							<li><i class="fa fa-phone" aria-hidden="true"></i> <p>+1800 326 3264</p><p>+1800 326 3234</p></li>
						</ul>
					</div>				
				</div>			
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="ast_copyright_wrapper">
					<p>&copy; Copyright 2022, All Rights Reserved, <a href="#">astrology</a></p>				
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