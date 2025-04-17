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

	<!-- shop section start -->
	<div class="ast_shop_wrapper ast_toppadder70 ast_bottompadder70">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-9 col-sm-12 col-12">
					<div class="ast_shop_main">
						<div class="row">
							<div class="col-lg-4 col-md-6 col-sm-6 col-12">
								<div class="ast_product_section">
									<div class="ast_product_image">
										<a href="shop_single.php"><img src="images/content/NAV.jpg"
												class="img-responsive"></a>
									</div>
									<div class="ast_product_info">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<h4 class="ast_shop_title"><a href="shop_single.php">Navgraha Yantra</a></h4>
										<p>$30.00</p>
										<div class="ast_info_bottom">
											<a href="cart.php" class="ast_add_cart ast_btn">add to cart</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-12">
								<div class="ast_product_section">
									<div class="ast_product_image">
										<a href="shop_single.php"><img src="images/content/rudra.jpg"
												class="img-responsive"></a>
									</div>
									<div class="ast_product_info">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<h4 class="ast_shop_title"><a href="shop_single.php">Rudraksha</a></h4>
										<p>$30.00</p>
										<div class="ast_info_bottom">
											<a href="cart.php" class="ast_add_cart ast_btn">add to cart</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-12">
								<div class="ast_product_section">
									<div class="ast_product_image">
										<a href="shop_single.php"><img src="images/content/lotus.avif"
												class="img-responsive"></a>
									</div>
									<div class="ast_product_info">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<h4 class="ast_shop_title"><a href="shop_single.php">Flowers</a></h4>
										<p>$30.00</p>
										<div class="ast_info_bottom">
											<a href="cart.php" class="ast_add_cart ast_btn">add to cart</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-12">
								<div class="ast_product_section">
									<div class="ast_product_image">
										<a href="shop_single.php"><img src="images/content/gem.avif"
												class="img-responsive"></a>
									</div>
									<div class="ast_product_info">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<h4 class="ast_shop_title"><a href="shop_single.php">gemstones</a></h4>
										<p>$30.00</p>
										<div class="ast_info_bottom">
											<a href="cart.php" class="ast_add_cart ast_btn">add to cart</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-12">
								<div class="ast_product_section">
									<div class="ast_product_image">
										<a href="shop_single.php"><img src="images/content/herb.jpg"
												class="img-responsive"></a>
									</div>
									<div class="ast_product_info">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<h4 class="ast_shop_title"><a href="shop_single.php">jadi-buti</a></h4>
										<p>$30.00</p>
										<div class="ast_info_bottom">
											<a href="cart.php" class="ast_add_cart ast_btn">add to cart</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-12">
								<div class="ast_product_section">
									<div class="ast_product_image">
										<a href="shop_single.php"><img src="images/content/gift.jpg"
												class="img-responsive"></a>
									</div>
									<div class="ast_product_info">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<h4 class="ast_shop_title"><a href="shop_single.php">gift items</a></h4>
										<p>$30.00</p>
										<div class="ast_info_bottom">
											<a href="cart.php" class="ast_add_cart ast_btn">add to cart</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-12">
								<div class="ast_product_section">
									<div class="ast_product_image">
										<a href="shop_single.php"><img src="images/content/yantra.jpg"
												class="img-responsive"></a>
									</div>
									<div class="ast_product_info">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<h4 class="ast_shop_title"><a href="shop_single.php">Yantra</a></h4>
										<p>$30.00</p>
										<div class="ast_info_bottom">
											<a href="cart.php" class="ast_add_cart ast_btn">add to cart</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-12">
								<div class="ast_product_section">
									<div class="ast_product_image">
										<a href="shop_single.php"><img src="images/content/fruits.jpg"
												class="img-responsive"></a>
									</div>
									<div class="ast_product_info">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<h4 class="ast_shop_title"><a href="shop_single.php">gemstones</a></h4>
										<p>$30.00</p>
										<div class="ast_info_bottom">
											<a href="cart.php" class="ast_add_cart ast_btn">add to cart</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-12">
								<div class="ast_product_section">
									<div class="ast_product_image">
										<a href="shop_single.php"><img src="images/content/laddu.jpg"
												class="img-responsive"></a>
									</div>
									<div class="ast_product_info">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i>
										<h4 class="ast_shop_title"><a href="shop_single.php">Sweets</a></h4>
										<p>$30.00</p>
										<div class="ast_info_bottom">
											<a href="cart.php" class="ast_add_cart ast_btn">add to cart</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="ast_pagination">
									<ul class="pagination">
										<li><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a class="active" href="#">Next</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 col-12">
					<div class="ast_shop_sidebar sidebar_wrapper">
						<!-- <aside class="widget widget_search">
						<input type="text" placeholder="Search...">
						<button type="button"><i class="fa fa-search"></i></button>
					</aside> -->
						<aside class="widget widget_filter">
							<h4 class="widget-title">filter by price</h4>
							<div id="slider-range" class="price-filter-range" name="rangeInput"></div>

							<div class="filter_input">
								<input type="text" min=0 max="9900" oninput="validity.valid||(value='0');"
									id="min_price" class="price-range-field" />
								<input type="text" min=0 max="10000" oninput="validity.valid||(value='10000');"
									id="max_price" class="price-range-field" />
							</div>
							<button class="price-range-search ast_btn" id="price-range-submit">Search</button>
						</aside>
						<aside class="widget widget_categories">
							<h4 class="widget-title">Categories</h4>
							<ul>
								<li><a href="#">yantra</a></li>
								<li><a href="#">navgraha yantra</a></li>
								<li><a href="#">books</a></li>
								<li><a href="#">gemstone</a></li>
								<li><a href="#">ring</a></li>
								<li><a href="#">feng shui</a></li>
								<li><a href="#">lucky stones</a></li>
							</ul>
						</aside>
						<aside class="widget widget_latest_product">
							<h4 class="widget-title">new products</h4>
							<ul>
								<li><a href="#">gemstone</a></li>
								<li><a href="#">navgraha yantra</a></li>
								<li><a href="#">rings</a></li>
								<li><a href="#">yantra</a></li>
								<li><a href="#">books</a></li>
							</ul>
						</aside>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- shop section end -->




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
									<p>House No - 22, Vishnu Path<br> Bhatiya Basti, Kadma, Jamsedpur, 831005</p>
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
	<script type="text/javascript" src="js/price_range_script.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"
		type="text/javascript"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<!--Main js file End-->
</body>

</html>