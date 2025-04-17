<?php
session_start();
?>

<!DOCTYPE html>

<html lang="hi">

<script>
	function googleTranslateElementInit() {
		new google.translate.TranslateElement({
			pageLanguage: 'en',
			includedLanguages: 'en,hi',
			layout: google.translate.TranslateElement.InlineLayout.SIMPLE
		}, 'google_translate_element');
	}
</script>

<!-- Load Google Translate Script -->
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<head>
	<div id="google_translate_element"></div>

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
	<!-- Facebook Pixel Code -->
	<script>
		!function (f, b, e, v, n, t, s) {
			if (f.fbq) return; n = f.fbq = function () {
				n.callMethod ?
					n.callMethod.apply(n, arguments) : n.queue.push(arguments)
			}; if (!f._fbq) f._fbq = n;
			n.push = n; n.loaded = !0; n.version = '2.0'; n.queue = []; t = b.createElement(e); t.async = !0;
			t.src = v; s = b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t, s)
		}(window,
			document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '1624167494576352');
		fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
			src="https://www.facebook.com/tr?id=1624167494576352&ev=PageView&noscript=1" /></noscript>
	<!-- DO NOT MODIFY -->
	<!-- End Facebook Pixel Code -->
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
							<form method="POST" action="login.php">
								<input type="text" name="email" placeholder="Email" required>
								<input type="password" name="password" placeholder="Password" required>
								<div class="ast_login_data"></div>
								<button type="submit" class="ast_btn">Login</button>
								<p>Create An Account ? <a class="popup-with-zoom-anim" href="#signup-dialog">SignUp</a>
								</p>
							</form>
						</div>

						<div id="signup-dialog" class="zoom-anim-dialog mfp-hide">
							<h1>Signup Form</h1>
							<form action="signup.php" method="POST">
								<input type="text" name="name" placeholder="Name" required>
								<input type="email" name="email" placeholder="Email" required>
								<input type="password" name="password" placeholder="Password" required>
								<input type="text" name="mobile" placeholder="Mobile Number" required>

								<select name="gender" required>
									<option value="" disabled selected>Select Gender</option>
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select>

								<button type="submit" class="ast_btn">Submit</button>
								<p>Have An Account? <a class="popup-with-zoom-anim" href="#login-dialog">Login</a></p>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="ast_header_bottom">
		<div class="container">
			<div class="row align-items-center">
				<!-- Logo -->
				<div class="col-6 col-sm-4 col-md-3">
					<div class="ast_logo">
						<a href="index.php"><img src="images/content/logo-transparent-png.png" alt="Logo"
								title="Logo"></a>
					</div>
				</div>

				<!-- Navigation -->
				<div class="col-6 col-sm-8 col-md-9">
					<div class="ast_main_menu_wrapper">
						<div class="ast_menu">
							<ul>
								<li><a href="index.php">home</a></li>
								<li><a href="about.php">about</a></li>
								<li><a href="services.php">services</a></li>
								<li><a href="appointments.php">appointment</a></li>
								<li class="as_submenu_li">
									<a class="dropdown-toggle" href="#">shop</a>
									<ul class="submenu dropdown">
										<li><a href="shop.html">shop</a></li>

										<li><a href="cart.html">cart</a></li>
										<li><a href="checkout.html">checkout</a></li>
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
	<!--Slider Start-->
	<div class="ast_slider_wrapper">
		<div class="ast_banner_text">
			<div class="starfield">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="ast_waves">
				<div class="ast_wave"></div>
				<div class="ast_wave"></div>
				<div class="ast_wave"></div>
			</div>
			<div class="ast_waves2">
				<div class="ast_wave"></div>
				<div class="ast_wave"></div>
				<div class="ast_wave"></div>
			</div>
			<div class="ast_waves3">
				<div class="ast_wave"></div>
				<div class="ast_wave"></div>
				<div class="ast_wave"></div>
			</div>
			<div class="container">
				<div class="ast_bannertext_wrapper">
					<h1>भक्ति: अस्माकं संकल्पः</h1>

					<ul class="ast_toppadder40 ast_bottompadder50">
						<li>Bhagwat Katha</li>
						<li>Festival Pooja</li>
						<li>Wedding Ceremony</li>
					</ul>
					<a href="appointments.php" class="ast_btn">Book A Pandit</a>
				</div>
			</div>
		</div>
	</div>
	<!--Slider End-->
	<!--About Us Start-->
	<div class="ast_about_wrapper ast_toppadder70 ast_bottompadder70">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="ast_heading">
						<h1>About <span>NITYA PUJAN</span></h1>
						<p>Nitya Pujan is your trusted platform for performing sacred Hindu rituals with devotion and
							authenticity. From daily Pujas to special ceremonies, our experienced Panditjis ensure every
							spiritual need is fulfilled with Vedic precision and faith.</p>

					</div>
				</div>
				<div class="col-lg-5 col-md-12 col-sm-12 col-12">
					<div class="ast_about_info_img">
						<img src="images/content/logo-transparent-png.png" alt="About">
					</div>
				</div>
				<div class="col-lg-7 col-md-12 col-sm-12 col-12">
					<div class="ast_about_info">
						<h4>Know About <span>NITYA PUJAN</span></h4>
						<p>NITYA PUJAN is a divine initiative devoted to upholding and spreading the sacred values of
							Sanatan Dharma. We are committed to bringing the grace of authentic Vedic Pandits and the
							purity of traditional Hindu rituals to your home anywhere, anytime. Rooted in the ancient
							wisdom of the Vedas and Puranas, we specialize in conducting all types of spiritual
							ceremonies including Grah Shanti, Havan, Yagna, Sanskar Vidhi, Pitra Dosh Nivaran, and
							various forms of Pujan and Kathas.</p>

						<p>Whether it is a joyous occasion like a Vivah Sanskar (Hindu Wedding), Naamkaran Sanskar,
							Griha Pravesh, or spiritual observances like Satyanarayan Katha, Rudrabhishek, Durga
							Saptashati Path, or Shrimad Bhagwat Katha—our learned and experienced Panditjis perform
							every ritual with utmost devotion (Shraddha), discipline, and strict adherence to Vedic
							scriptures (Shastra Maryada).</p>

						<p>We also provide spiritually enriching storytelling sessions such as Ram Katha, Shiv Maha
							Purana, and Devi Bhagwat Mahapuran, guided by qualified Kathavachaks. Our goal is not just
							to perform rituals, but to awaken divine consciousness, bring inner peace, and connect every
							soul to its spiritual roots.</p>

						<p>From holy cities in India to NRI communities across the globe, NITYA PUJAN offers sacred
							services for destination weddings, festival celebrations, and customized rituals infusing
							every moment with blessings, bhakti (devotion), and tradition. Let us be your spiritual
							companion in every step of your life's journey.</p>

						<a href="about.php" class="ast_btn">know more</a>
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
								<p>🌐 Instant Access Jamsedpur</p>
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
	<!--Services Start-->
	<div class="ast_service_wrapper ast_toppadder70 ast_bottompadder50">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="ast_heading">
						<h1>Our <span>Services</span></h1>
						<p>We offer a wide range of Vedic rituals and astrology services including Pujas, Jaaps, and
							spiritual consultations by experienced Panditjis—bringing tradition, faith, and peace right
							to your doorstep.</p>
					</div>
				</div>

				<!-- Griha Pravesh -->
				<div class="col-lg-4 col-md-6 col-sm-12 col-12">
					<div class="ast_service_box">
						<img src="images/content/sv5.png" alt="Griha Pravesh Puja">
						<h4>Griha Pravesh</h4>
						<p>A sacred housewarming ceremony that purifies and blesses your new home with positive energy
							and divine grace.</p>
						<div class="clearfix"></div>
						<a href="service_single.php" class="ast_btn">read more</a>
					</div>
				</div>

				<!-- Vastu Shastra -->
				<div class="col-lg-4 col-md-6 col-sm-12 col-12">
					<div class="ast_service_box">
						<img src="images/content/sv6.png" alt="Vastu Shastra">
						<h4>Vastu Shastra</h4>
						<p>Ancient architectural wisdom that aligns your living space with cosmic energies for harmony,
							prosperity, and peace.</p>
						<div class="clearfix"></div>
						<a href="vastu.php" class="ast_btn">read more</a>
					</div>
				</div>

				<!-- Satyanarayan Katha -->
				<div class="col-lg-4 col-md-6 col-sm-12 col-12">
					<div class="ast_service_box">
						<img src="images/content/sv4.png" alt="Satyanarayan Puja">
						<h4>Satyanarayan Katha</h4>
						<p>A devotional ritual to invoke Lord Vishnu's blessings for well-being, prosperity, and
							spiritual upliftment at home.</p>
						<div class="clearfix"></div>
						<a href="satyanarayan.php" class="ast_btn">read more</a>
					</div>
				</div>

				<!-- Marriage Puja -->
				<div class="col-lg-4 col-md-6 col-sm-12 col-12">
					<div class="ast_service_box">
						<img src="images/content/sv3.png" alt="Marriage Puja">
						<h4>Marriage Puja</h4>
						<p>Performed to ensure a blissful and harmonious married life, invoking divine blessings for the
							couple’s future.</p>
						<div class="clearfix"></div>
						<a href="mirrage.php" class="ast_btn">read more</a>
					</div>
				</div>

				<!-- Bhagwat Katha -->
				<div class="col-lg-4 col-md-6 col-sm-12 col-12">
					<div class="ast_service_box">
						<img src="images/content/sv2.png" alt="Bhagwat Katha">
						<h4>Bhagwat Katha</h4>
						<p>A soulful narration of Lord Krishna’s divine leelas that brings spiritual wisdom, peace, and
							devotion to your life.</p>
						<div class="clearfix"></div>
						<a href="bhagmad.php" class="ast_btn">read more</a>
					</div>
				</div>

				<!-- Shiv Puran Katha -->
				<div class="col-lg-4 col-md-6 col-sm-12 col-12">
					<div class="ast_service_box">
						<img src="images/content/sv1.png" alt="Shiv Puran Katha">
						<h4>Shiv Puran Katha</h4>
						<p>Dedicated to Lord Shiva, this powerful Katha invokes transformation, protection, and divine
							blessings in your life.</p>
						<div class="clearfix"></div>
						<a href="shivpuran.php" class="ast_btn">read more</a>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!--Services End-->
	<!--WeDo Start-->
	<div class="ast_wedo_wrapper ast_toppadder70 ast_bottompadder50">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="ast_heading">
						<h1>Daily <span>Routines</span></h1>
						<p>Embrace the divine rhythm of life through our guided daily rituals rooted in Vedic
							traditions. From morning prayers and Sandhya Vandanam to personalized mantra chanting and
							spiritual practices, we help you maintain a sacred connection with the Almighty every day.
						</p>
					</div>
				</div>

				<!-- Column 1: Vedic Astrology + Baby Names -->
				<div class="col-lg-4 col-md-6 col-sm-12 col-12">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="ast_vedic_astrology">
								<h4>Vedic Astrology</h4>
								<ul>
									<li>
										<a href="#">
											<img src="images/content/vas_1.png" alt="Sun Sign">
											<div class="ast_vedic_astro_info">
												<h5>Sun Sign</h5>
												<p>Understand your core self and purpose through your Surya (Sun) sign
													according to Vedic astrology.</p>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="images/content/vas_2.png" alt="Moon Sign">
											<div class="ast_vedic_astro_info">
												<h5>Moon Sign</h5>
												<p>Explore your emotions and inner mind with insights from your Chandra
													(Moon) sign.</p>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="images/content/vas_3.png" alt="Planets">
											<div class="ast_vedic_astro_info">
												<h5>Planets</h5>
												<p>Discover how planetary movements shape your destiny and influence
													your daily energies.</p>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="images/content/vas_4.png" alt="Ascendant">
											<div class="ast_vedic_astro_info">
												<h5>Ascendant</h5>
												<p>Your Lagna (Ascendant) reveals your outer personality and physical
													life path.</p>
											</div>
										</a>
									</li>
								
									<li>
										<a href="#">
											<img src="images/content/vas_6.png" alt="Nakshatras">
											<div class="ast_vedic_astro_info">
												<h5>Nakshatras</h5>
												<p>Explore the 27 Vedic lunar constellations and their influence on your
													personality and fate.</p>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="ast_vedic_astrology">
								<h4>Baby Names by Nakshatra</h4>
								<div class="ast_vedic_astro_box">
									<img src="images/content/Baby-names.jpg" alt="Baby">
									<p>Select meaningful names for your newborn based on their birth nakshatra and
										planetary alignment.</p>
								
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Column 2: Astrology Advice -->
				<div class="col-lg-4 col-md-6 col-sm-12 col-12">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="ast_vedic_astrology">
								<h4>Astrology Advice</h4>
								<ul>
									<li>
										<a href="#">
											<img src="images/content/vad_1.png" alt="Career">
											<div class="ast_vedic_astro_info">
												<h5>Career</h5>
												<p>Find the ideal career path aligned with your planetary strengths and
													karmic blueprint.</p>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="images/content/vad_2.png" alt="Relationship">
											<div class="ast_vedic_astro_info">
												<h5>Relationship</h5>
												<p>Gain clarity in love and compatibility through Kundli matching and
													astrological remedies.</p>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="images/content/vad_3.png" alt="Finance">
											<div class="ast_vedic_astro_info">
												<h5>Finance</h5>
												<p>Enhance prosperity and avoid financial obstacles with precise
													astrological guidance.</p>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="images/content/vad_4.png" alt="Business">
											<div class="ast_vedic_astro_info">
												<h5>Business</h5>
												<p>Discover favorable timings and business ventures through your chart
													analysis.</p>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="images/content/vad_5.png" alt="Education">
											<div class="ast_vedic_astro_info">
												<h5>Education</h5>
												<p>Unlock your academic potential with astrological support for focused
													learning.</p>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="images/content/vad_6.png" alt="Health">
											<div class="ast_vedic_astro_info">
												<h5>Health</h5>
												<p>Identify health patterns and preventive remedies based on planetary
													influences.</p>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="images/content/vad_7.png" alt="Ask A Question">
											<div class="ast_vedic_astro_info">
												<h5>Ask A Question</h5>
												<p>Receive personal answers to life’s challenges with Prashna Kundli
													techniques.</p>
											</div>
										</a>
									</li>
									<li>
										<a href="#">
											<img src="images/content/vad_8.png" alt="Love Remedies">
											<div class="ast_vedic_astro_info">
												<h5>Love Remedies</h5>
												<p>Balance your love life with mantra, yantra, and gemstone
													recommendations.</p>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Column 3: Vastu + Kundli -->
				<div class="col-lg-4 col-md-6 col-sm-12 col-12">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="ast_vedic_astrology">
								<h4>Vastu Shastra</h4>
								<div class="ast_vedic_astro_box">
									<img src="images/content/vastu.jpg" alt="Vastu">
									<p>Align your living spaces with Vastu principles to invite peace, prosperity, and
										positivity into your home.</p>
						
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="ast_vedic_astrology">
								<h4>Birth Journal (Kundli)</h4>
								<div class="ast_vedic_astro_box">
									<img src="images/content/Lagna-Kundli.jpg" alt="Kundli">
									<p>Create and analyze your detailed Janam Kundli (birth chart) to understand your
										life path and future opportunities.</p>
							
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!--WeDo End-->
	<!--Team Start-->
	<div class="ast_team_wrapper ast_toppadder70 ast_bottompadder50">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="ast_heading">
						<h1>Our <span>Experts</span></h1>
						<p>Our experienced Vedic Pandits bring deep knowledge of Sanatan Dharma, performing every ritual
							with devotion and precision. Trust NITYA PUJAN for authentic, scripture-based spiritual
							guidance.</p>

					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="ast_team_box">
						<img src="images/content/pandit.png" alt="team">
						<h4><a href="team_single.html">Acharya Barun Pandey</a></h4>
						<p>Acharya Jee</p>
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="ast_team_box">
						<img src="images/content/pandit.png" alt="team">
						<h4><a href="team_single.html">Acharya Sachin Pandey</a></h4>
						<p>Acharya Jee</p>
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="ast_team_box">
						<img src="images/content/pandit.png" alt="team">
						<h4><a href="team_single.html">Ach. Satyandra Mishra</a></h4>
						<p>Acharya Jee</p>
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="ast_team_box">
						<img src="images/content/pandit.png" alt="team">
						<h4><a href="team_single.html">Acharya Ravi Pathak</a></h4>
						<p>Acharya Jee</p>
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Team end-->
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
							<h4>Offices Jamsedpur</h4>
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
	<!--Price Start-->
	<div class="ast_packages_wrapper ast_toppadder70 ast_bottompadder70">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="ast_heading ast_bottompadder20">
						<h1>Price <span>Packages</span></h1>
						<p>Choose from a range of thoughtfully designed puja and astrology service packages to suit your
							spiritual needs. Each package offers unique rituals, consultations, and personalized
							guidance to support your journey with divine blessings.</p>

					</div>
				</div>
			</div>
			<div class="ast_packages_mainbox">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-12 col-12">
						<div class="ast_packages_box">
							<h3>Essential Package</h3>
							<div class="ast_price">
								<h2>₹ 501</h2>
								<p>per Pooja</p>
							</div>
							<ul>
								<li><i class="fa fa-check" aria-hidden="true"></i>Mundan Sanskar</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Satyanarayan Katha</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Bhoomi Pujan</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Ganesh Pujan</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Vishwakarma Pujan</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Saraswati Pujan</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Website Pujan</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Chaturdashi Pujan</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Navagraha Jaap</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Mahamrityunjaya Jaap</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Katyayani Jaap</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Vastu Jaap</li>
							</ul>
							<div class="clearfix"></div>
							<a href="appointments.php" class="ast_btn">purchase now</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 col-12">
						<div class="ast_packages_box">
							<h3>Basic Package</h3>
							<div class="ast_price">
								<h2>₹ 501</h2>
								<p>per Puja</p>
							</div>
							<ul>
								<li><i class="fa fa-check" aria-hidden="true"></i>Hari Talika Puja</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Jivit Putrika Vrat</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Amla Navami</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Sarva Ekadashi Puja</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Tulsi Vivah</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Kartik Mahalaya</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Mahalaya Amavasya</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Sharada Puja</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Pinda Daan</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Tripindi Shraddha</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Mukha Shraddha</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Tripindi Shraddha</li>


							</ul>


							<div class="clearfix"></div>
							<a href="appointments.php" class="ast_btn">purchase now</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 col-12">
						<div class="ast_packages_box active">

							<h3>Standard Package</h3>
							<div class="ast_price">
								<h2>₹ 5001</h2>
								<p>per Puja</p>
							</div>
							<ul>

								<li><i class="fa fa-check" aria-hidden="true"></i>Standard Puja for Family/Couples</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Griha Pravesh(Nutan/Jirnadi)</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Rudravishek Puja</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Navratri(Samanya) Puja</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Mool Shnati pija</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Standard Puja for Family/Couples</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Online & In-person Booking</li>
								<li><i class="fa fa-times" aria-hidden="true"></i>Personal Pandit Assignment</li>
								<li></li>
							</ul>
							<div class="clearfix"></div>
							<a href="appointments.php" class="ast_btn">purchase now</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 col-12">
						<div class="ast_packages_box">
							<h3>Pro Package</h3>
							<div class="ast_price">
								<h2>₹ 11001</h2>
								<p>per Puja</p>
							</div>
							<ul>
								<li><i class="fa fa-check" aria-hidden="true"></i>All Standard Features Included</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Personal Pandit Assigned</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Multiple Pooja Options</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Weeding Ceremony</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Navratri Puja(Sampurn)</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Priority Muhurat Booking</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Daily Horoscope Guidance</li>
								<li><i class="fa fa-check" aria-hidden="true"></i>Premium Support</li>
								<li></li>
								<li></li>
							</ul>
							<div class="clearfix"></div>
							<a href="appointments.php" class="ast_btn">purchase now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--Price End-->
	<!--Overview wrapper start -->
	<div class="ast_overview_wrapper ast_toppadder100 ast_bottompadder100">
		<div class="ast_img_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="ast_overview_info">
						<h1>Daily Planetary <span>Overview</span></h1>
						<p>At Nitya Pujan, we understand that the success and sanctity of every puja, havan, or
							spiritual ritual depends on divine timing. Our Daily Planetary Overview offers you Vedic
							insights into the most auspicious planetary positions and muhurats for performing religious
							ceremonies.
							Whether you’re planning a Griha Pravesh, Satyanarayan Katha, Mundan Sanskar, Marriage Puja,
							or Shanti Havan, knowing the planetary alignments ensures that your rituals are done in
							harmony with cosmic energies.
							Consult our daily overview to find the best times for booking a Panditjee, initiating
							rituals, or beginning spiritual practices. Let the stars guide your devotion.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Overview wrapper end -->
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
	<!-- fotter section -->
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
	<script type="text/javascript" src="js/custom.js"></script>
	<!--Main js file End-->
</body>

</html>