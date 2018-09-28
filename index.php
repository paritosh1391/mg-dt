
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MG Fitness Center - Gym | Yoga | BodyBuilding | Aerobics</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<link rel="shortcut icon" href="favicon.ico" />


	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css"> 
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>

	<?php 
	if($_POST["submit"]) {
		$recipient="paritosh.singh@nextraworld.com";
		$subject="Form to email message";
		$sender=@$_POST["sender"];
		$senderEmail=@$_POST["senderEmail"];
		$senderNumber=@$_POST["senderNumber"];
		$mailBody="Name: $sender\nEmail: $senderEmail\n\n$senderNumber";
		mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
		$thankYou="<div class='success-msg'><p><img src='images/fitness.png' alt=''>Thank you! Your message has been sent.</p></div>";
	}
	?>

	<div class="success-msg-wrap">
		<?php echo $thankYou;?>			
	</div>
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div id="colorlib-logo">
								<a href="index.html">
									<img src="images/logo.PNG" alt="MG Fitness Center - Gym">
								</a> 
							</div>
						</div>
						<div class="col-md-10 text-right menu-1">
							<ul>
								<li class="active"><a href="javascript:void()">Home</a></li>
								<li><a href="#classes">Classes</a></li>
								<li><a href="#colorlib-schedule">Schedule</a></li>
								<li><a href="#colorlib-contact">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
					<li style="background-image: url(images/img_bg_2.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
									<div class="slider-text-inner text-center">
										<h1>This is a Lifestyle There is no Finish Line</h1>
										<p>
											<button type="button" class="btn btn-primary btn-lg btn-learn" data-toggle="modal" data-target="#myModal">
												Join Classes
											</button>
										</p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(images/img_bg_1.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
									<div class="slider-text-inner text-center">
										<h1>Don't Stop When it Hurts, Stop When You're Done</h1>
										<p>
											<button type="button" class="btn btn-primary btn-lg btn-learn" data-toggle="modal" data-target="#myModal">
												Join Classes
											</button>
										</p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(images/img_bg_3.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
									<div class="slider-text-inner text-center">
										<h1>Stop Wishing, Start Doing</h1>
										<p>
											<button type="button" class="btn btn-primary btn-lg btn-learn" data-toggle="modal" data-target="#myModal">
												Join Classes
											</button>
										</p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(images/img_bg_4.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
									<div class="slider-text-inner text-center">
										<h1>Working Out is a Reward not a Punishment</h1>
										<p>
											<button type="button" class="btn btn-primary btn-lg btn-learn" data-toggle="modal" data-target="#myModal">
												Join Classes
											</button>
										</p>
									</div>
								</div>
							</div>
						</div>
					</li>	
				</ul>
			</div>
		</aside>
		
		<div id="colorlib-intro">
			<div class="container">
				<div class="row">
					<div class="col-md-12 intro-wrap animate-box">
						<div class="intro-flex">
							<div class="one-third intro-img" style="background-image: url(images/intro-img-1.jpg)">
								<div class="desc">
									<h3>Body Building</h3>
									<p>Which roasted parts of sentences fly into your mouth.</p>
									<button type="button" class="btn btn-primary btn-lg btn-learn" data-toggle="modal" data-target="#myModal">
										Join Classes
									</button>
								</div>
							</div>
							<div class="one-third intro-img" style="background-image: url(images/intro-img-2.jpg)">
								<div class="desc">
									<h3>Yoga Program</h3>
									<p>Which roasted parts of sentences fly into your mouth.</p>
									<button type="button" class="btn btn-primary btn-lg btn-learn" data-toggle="modal" data-target="#myModal">
										Join Classes
									</button>
								</div>
							</div>
							<div class="one-third intro-img" style="background-image: url(images/intro-img-3.jpg)">
								<div class="desc">
									<h3>Aerobics Classes</h3>
									<p>Which roasted parts of sentences fly into your mouth.</p>
									<button type="button" class="btn btn-primary btn-lg btn-learn" data-toggle="modal" data-target="#myModal">
										Join Classes
									</button>
								</div>
							</div>
							<div class="one-third intro-img" style="background-image: url(images/intro-img-2.jpg)">
								<div class="desc">
									<h3>Yoga Program</h3>
									<p>Which roasted parts of sentences fly into your mouth.</p>
									<button type="button" class="btn btn-primary btn-lg btn-learn" data-toggle="modal" data-target="#myModal">
										Join Classes
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		

		<div id="colorlib-services">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Being fit is attractive</h2>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="flaticon-gym"></i>
							</span>
							<div class="desc">
								<h3>Cardio Program</h3>
								<p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="flaticon-weightlifting"></i>
							</span>
							<div class="desc">
								<h3>Body Building</h3>
								<p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="flaticon-martial-arts"></i>
							</span>
							<div class="desc">
								<h3>Karate Classes</h3>
								<p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center animate-box">
						<div class="services">
							<span class="icon">
								<i class="flaticon-gloves"></i>
							</span>
							<div class="desc">
								<h3>Boxing Program</h3>
								<p>Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-schedule" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Our Class Schedule</h2>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
					</div>
				</div>
				<div class="row">
					<div class="schedule text-center animate-box">
						<div class="col-md-12">
							<ul class="week">
								<li class="active" data-tab="sunday"><a href="javascript:void()">Sunday</a></li>
								<li data-tab="monday"><a href="javascript:void()">Monday</a></li>
								<li data-tab="tuesday"><a href="javascript:void()">Tuesday</a></li>
								<li data-tab="wednesday"><a href="javascript:void()">Wednesday</a></li>
								<li data-tab="thursday"><a href="javascript:void()">Thursday</a></li>
								<li data-tab="friday"><a href="javascript:void()">Friday</a></li>
								<li data-tab="saturday"><a href="javascript:void()">Saturday</a></li>
							</ul>
						</div>
						<div class="schedule-flex active" id="sunday">
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-gym"></i></span></p>
								<p class="time"><span>8:15AM - 9:15AM</span></p>
								<h3>Zumba</h3>
								<p class="trainer"><span>Tom Scott</span></p>
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-exercise-2"></i></span></p>
								<p class="time"><span>06am - 8am</span></p>
								<h3>Loose Weight Program</h3>
								<p class="trainer"><span>Tom Scott</span></p>
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-meditation"></i></span></p>
								<p class="time"><span>06am - 8am</span></p>
								<h3>Yoga Classes</h3>
								<p class="trainer"><span>Tom Scott</span></p>
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-gloves"></i></span></p>
								<p class="time"><span>06am - 8am</span></p>
								<h3>Boxing Program</h3>
								<p class="trainer"><span>Tom Scott</span></p>
							</div>
						</div>
						<div class="schedule-flex" id="monday">
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-gym"></i></span></p>
								<p class="time"><strong>Morning</strong> <span>11 AM - 12 PM</span></p>
								<p class="time"><strong>Evening</strong> <span>7 PM - 8 PM</span></p>
								<h3>Zumba</h3>
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-exercise-2"></i></span></p>
								<p class="time"><strong>Morning</strong> <span>9:00 AM - 9:30 AM</span></p>
								<p class="time"><strong>Evening</strong> <span>8:00 PM - 8:30 PM</span></p>
								<h3>Body Tech</h3>
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-meditation"></i></span></p>
								<p class="time"><strong>Morning</strong> <span>7:15 AM - 8:15 AM</span></p>
								<p class="time"><strong>Morning</strong> <span>10:00 AM - 11:00 AM</span></p>
								<h3>Yoga</h3>
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-gloves"></i></span></p>
								<p class="time">
									<strong>Morning</strong> 
									<span>6:30 AM - 7:30AM</span>
									<span>8:00 AM - 9:00AM</span>
									<span>9:30 AM - 10:30AM</span>
									<span>11:00 AM - 12:00AM</span>
								</p>
								<p class="time">
									<strong>Evening</strong> 
									<span>5:30 pm - 6:30 pm</span>
									<span>7:00 pm - 8:00 pm</span>
									<span>8:00 pm - 9:00 pm</span>
									<span>9:00 pm - 10:00 pm</span>
								</p>
								<h3>Cross Fit Workout</h3>
							</div>
						</div>
						<div class="schedule-flex" id="tuesday">
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-gym"></i></span></p>
								<p class="time"><strong>Morning</strong> <span>8:15 AM - 9:15 PM</span></p>
								<p class="time"><strong>Evening</strong> <span>7 PM - 8 PM</span></p>
								<h3>Zumba</h3>
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-exercise-2"></i></span></p>
								<p class="time"><strong>Morning</strong> <span>9:00 AM - 9:30 AM</span></p>
								<p class="time"><strong>Evening</strong> <span>8:00 PM - 8:30 PM</span></p>
								<h3>Body Tech</h3>
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-meditation"></i></span></p>
								<p class="time"><strong>Morning</strong> <span>7:15 AM - 8:15 AM</span></p>
								<p class="time"><strong>Morning</strong> <span>11:00 AM - 12:00 PM</span></p>
								<h3>Yoga</h3>
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-gloves"></i></span></p>
								<p class="time">
									<strong>Morning</strong> 
									<span>6:30 AM - 7:30AM</span>
									<span>8:00 AM - 9:00AM</span>
									<span>9:30 AM - 10:30AM</span>
									<span>11:00 AM - 12:00AM</span>
								</p>
								<p class="time">
									<strong>Evening</strong> 
									<span>5:30 pm - 6:30 pm</span>
									<span>7:00 pm - 8:00 pm</span>
									<span>8:00 pm - 9:00 pm</span>
									<span>9:00 pm - 10:00 pm</span>
								</p>
								<h3>Cross Fit Workout</h3>
							</div>
						</div>
						<div class="schedule-flex" id="wednesday">
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-gym"></i></span></p>
								<p class="time"><strong>Afternoon</strong> <span>12 PM - 1 PM</span></p>
								<p class="time"><strong>Evening</strong> <span>7 PM - 8 PM</span></p>
								<h3>Zumba</h3>
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-exercise-2"></i></span></p>
								<p class="time"><strong>Morning</strong> <span>9:00 AM - 9:30 AM</span></p>
								<p class="time"><strong>Evening</strong> <span>8:00 PM - 8:30 PM</span></p>
								<h3>Body Tech</h3>
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-meditation"></i></span></p>
								<p class="time"><strong>Morning</strong> <span>7:15 AM - 8:15 AM</span></p>
								<p class="time"><strong>Morning</strong> <span>11:00 AM - 12:00 PM</span></p>
								<h3>Yoga</h3>
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-gloves"></i></span></p>
								<p class="time">
									<strong>Morning</strong> 
									<span>6:30 AM - 7:30AM</span>
									<span>8:00 AM - 9:00AM</span>
									<span>9:30 AM - 10:30AM</span>
									<span>11:00 AM - 12:00AM</span>
								</p>
								<p class="time">
									<strong>Evening</strong> 
									<span>5:30 pm - 6:30 pm</span>
									<span>7:00 pm - 8:00 pm</span>
									<span>8:00 pm - 9:00 pm</span>
									<span>9:00 pm - 10:00 pm</span>
								</p>
								<h3>Cross Fit Workout</h3>
							</div>
						</div>
						<div class="schedule-flex" id="thursday">
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-gym"></i></span></p>
								<p class="time"><strong>Morning</strong> <span>8:15 AM - 9:15 AM</span></p>
								<p class="time"><strong>Evening</strong> <span>7 PM - 8 PM</span></p>
								<h3>Zumba</h3>
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-exercise-2"></i></span></p>
								<p class="time"><strong>Morning</strong> <span>9:00 AM - 9:30 AM</span></p>
								<p class="time"><strong>Evening</strong> <span>8:00 PM - 8:30 PM</span></p>
								<h3>Body Tech</h3>
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-meditation"></i></span></p>
								<p class="time"><strong>Morning</strong> <span>7:15 AM - 8:15 AM</span></p>
								<p class="time"><strong>Morning</strong> <span>11:00 AM - 12:00 PM</span></p>
								<h3>Yoga</h3>
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-gloves"></i></span></p>
								<p class="time">
									<strong>Morning</strong> 
									<span>6:30 AM - 7:30AM</span>
									<span>8:00 AM - 9:00AM</span>
									<span>9:30 AM - 10:30AM</span>
									<span>11:00 AM - 12:00AM</span>
								</p>
								<p class="time">
									<strong>Evening</strong> 
									<span>5:30 pm - 6:30 pm</span>
									<span>7:00 pm - 8:00 pm</span>
									<span>8:00 pm - 9:00 pm</span>
									<span>9:00 pm - 10:00 pm</span>
								</p>
								<h3>Cross Fit Workout</h3>
							</div>
						</div>
						<div class="schedule-flex" id="friday">
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-gym"></i></span></p>
								<p class="time"><strong>Morning</strong> <span>11 AM - 12 PM</span></p>
								<p class="time"><strong>Evening</strong> <span>7 PM - 8 PM</span></p>
								<h3>Zumba</h3>
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-exercise-2"></i></span></p>
								<p class="time"><strong>Morning</strong> <span>9:00 AM - 9:30 AM</span></p>
								<p class="time"><strong>Evening</strong> <span>8:00 PM - 8:30 PM</span></p>
								<h3>Body Tech</h3>
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-meditation"></i></span></p>
								<p class="time"><strong>Morning</strong> <span>7:15 AM - 8:15 AM</span></p>
								<p class="time"><strong>Morning</strong> <span>10:00 AM - 11:00 AM</span></p>
								<h3>Yoga</h3>
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-gloves"></i></span></p>
								<p class="time">
									<strong>Morning</strong> 
									<span>6:30 AM - 7:30AM</span>
									<span>8:00 AM - 9:00AM</span>
									<span>9:30 AM - 10:30AM</span>
									<span>11:00 AM - 12:00AM</span>
								</p>
								<p class="time">
									<strong>Evening</strong> 
									<span>5:30 pm - 6:30 pm</span>
									<span>7:00 pm - 8:00 pm</span>
									<span>8:00 pm - 9:00 pm</span>
									<span>9:00 pm - 10:00 pm</span>
								</p>
								<h3>Cross Fit Workout</h3>
							</div>
						</div>
						<div class="schedule-flex" id="saturday">
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-gym"></i></span></p>
								<p class="time"><span>8:15AM - 9:15AM</span></p>
								<h3>Zumba</h3>
								<p class="trainer"><span>Tom Scott</span></p>
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-exercise-2"></i></span></p>
								<p class="time"><span>06am - 8am</span></p>
								<h3>Loose Weight Program</h3>
								<p class="trainer"><span>Tom Scott</span></p>
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-meditation"></i></span></p>
								<p class="time"><span>06am - 8am</span></p>
								<h3>Yoga Classes</h3>
								<p class="trainer"><span>Tom Scott</span></p>
							</div>
							<div class="entry-forth">
								<p class="icon"><span><i class="flaticon-gloves"></i></span></p>
								<p class="time"><span>06am - 8am</span></p>
								<h3>Boxing Program</h3>
								<p class="trainer"><span>Tom Scott</span></p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-testimony" class="testimony-img" style="background-image: url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>What People Says</h2>
						<h3>Success Stories</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="row animate-box">
							<div class="owl-carousel1">
								<div class="item">
									<div class="testimony-slide">
										<div class="testimony-wrap">
											<blockquote>
												<span>Sophia Foster Loose 20LBS in just 2 months</span>
												<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
											</blockquote>
											<div class="figure-img" style="background-image: url(images/person1.jpg);"></div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide">
										<div class="testimony-wrap">
											<blockquote>
												<span>John Collins</span>
												<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
											</blockquote>
											<div class="figure-img" style="background-image: url(images/person2.jpg);"></div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide">
										<div class="testimony-wrap">
											<blockquote>
												<span>Adam Ross</span>
												<p>Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
											</blockquote>
											<div class="figure-img" style="background-image: url(images/person3.jpg);"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-classes colorlib-light-grey" id="classes">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Our Classes</h2>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="owl-carousel2">
							<div class="item">
								<div class="classes">
									<div class="classes-img" style="background-image: url(images/classes-1.jpg);">
										<span class="price text-center">$25.00<br><small>/month</small></span>
									</div>
									<div class="desc">
										<h3><a href="#">Aerobics</a></h3>
										<p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
										<p>
											<button type="button" class="btn btn-primary btn-lg btn-learn" data-toggle="modal" data-target="#myModal">
												Learn More <i class="icon-arrow-right3"></i>
											</button>
										</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="classes">
									<div class="classes-img" style="background-image: url(images/classes-2.jpg);">
										<span class="price text-center">$25.00<br><small>/month</small></span>
									</div>
									<div class="desc">
										<h3><a href="#">Circuit Training</a></h3>
										<p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
										<p>
											<button type="button" class="btn btn-primary btn-lg btn-learn" data-toggle="modal" data-target="#myModal">
												Learn More <i class="icon-arrow-right3"></i>
											</button>
										</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="classes">
									<div class="classes-img" style="background-image: url(images/classes-3.jpg);">
										<span class="price text-center">$25.00<br><small>/month</small></span>
									</div>
									<div class="desc">
										<h3><a href="#">Power Yoga</a></h3>
										<p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
										<p>
											<button type="button" class="btn btn-primary btn-lg btn-learn" data-toggle="modal" data-target="#myModal">
												Learn More <i class="icon-arrow-right3"></i>
											</button>
										</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="classes">
									<div class="classes-img" style="background-image: url(images/classes-1.jpg);">
										<span class="price text-center">$25.00<br><small>/month</small></span>
									</div>
									<div class="desc">
										<h3><a href="#">Personal Trainer</a></h3>
										<p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
										<p>
											<button type="button" class="btn btn-primary btn-lg btn-learn" data-toggle="modal" data-target="#myModal">
												Learn More <i class="icon-arrow-right3"></i>
											</button>
										</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="classes">
									<div class="classes-img" style="background-image: url(images/classes-2.jpg);">
										<span class="price text-center">$25.00<br><small>/month</small></span>
									</div>
									<div class="desc">
										<h3><a href="#">Weight Lifting</a></h3>
										<p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
										<p>
											<button type="button" class="btn btn-primary btn-lg btn-learn" data-toggle="modal" data-target="#myModal">
												Learn More <i class="icon-arrow-right3"></i>
											</button>
										</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="classes">
									<div class="classes-img" style="background-image: url(images/classes-3.jpg);">
										<span class="price text-center">$25.00<br><small>/month</small></span>
									</div>
									<div class="desc">
										<h3><a href="#">Cross Fit</a></h3>
										<p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
										<p>
											<button type="button" class="btn btn-primary btn-lg btn-learn" data-toggle="modal" data-target="#myModal">
												Learn More <i class="icon-arrow-right3"></i>
											</button>
										</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="classes">
									<div class="classes-img" style="background-image: url(images/classes-1.jpg);">
										<span class="price text-center">$25.00<br><small>/month</small></span>
									</div>
									<div class="desc">
										<h3><a href="#">Functional Training</a></h3>
										<p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
										<p>
											<button type="button" class="btn btn-primary btn-lg btn-learn" data-toggle="modal" data-target="#myModal">
												Learn More <i class="icon-arrow-right3"></i>
											</button>
										</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="classes">
									<div class="classes-img" style="background-image: url(images/classes-2.jpg);">
										<span class="price text-center">$25.00<br><small>/month</small></span>
									</div>
									<div class="desc">
										<h3><a href="#">Zumba</a></h3>
										<p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
										<p>
											<button type="button" class="btn btn-primary btn-lg btn-learn" data-toggle="modal" data-target="#myModal">
												Learn More <i class="icon-arrow-right3"></i>
											</button>
										</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="classes">
									<div class="classes-img" style="background-image: url(images/classes-3.jpg);">
										<span class="price text-center">$25.00<br><small>/month</small></span>
									</div>
									<div class="desc">
										<h3><a href="#">Body Tech Classes</a></h3>
										<p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
										<p>
											<button type="button" class="btn btn-primary btn-lg btn-learn" data-toggle="modal" data-target="#myModal">
												Learn More <i class="icon-arrow-right3"></i>
											</button>
										</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="classes">
									<div class="classes-img" style="background-image: url(images/classes-1.jpg);">
										<span class="price text-center">$25.00<br><small>/month</small></span>
									</div>
									<div class="desc">
										<h3><a href="#">Kids Cross Work Out</a></h3>
										<p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
										<p>
											<button type="button" class="btn btn-primary btn-lg btn-learn" data-toggle="modal" data-target="#myModal">
												Learn More <i class="icon-arrow-right3"></i>
											</button>
										</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="classes">
									<div class="classes-img" style="background-image: url(images/classes-2.jpg);">
										<span class="price text-center">$25.00<br><small>/month</small></span>
									</div>
									<div class="desc">
										<h3><a href="#">Kids Yoga</a></h3>
										<p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
										<p>
											<button type="button" class="btn btn-primary btn-lg btn-learn" data-toggle="modal" data-target="#myModal">
												Learn More <i class="icon-arrow-right3"></i>
											</button>
										</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="classes">
									<div class="classes-img" style="background-image: url(images/classes-3.jpg);">
										<span class="price text-center">$25.00<br><small>/month</small></span>
									</div>
									<div class="desc">
										<h3><a href="#">Kids Dance</a></h3>
										<p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
										<p>
											<button type="button" class="btn btn-primary btn-lg btn-learn" data-toggle="modal" data-target="#myModal">
												Learn More <i class="icon-arrow-right3"></i>
											</button>
										</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="classes">
									<div class="classes-img" style="background-image: url(images/classes-1.jpg);">
										<span class="price text-center">$25.00<br><small>/month</small></span>
									</div>
									<div class="desc">
										<h3><a href="#">MMA Boxing</a></h3>
										<p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
										<p>
											<button type="button" class="btn btn-primary btn-lg btn-learn" data-toggle="modal" data-target="#myModal">
												Learn More <i class="icon-arrow-right3"></i>
											</button>
										</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="classes">
									<div class="classes-img" style="background-image: url(images/classes-2.jpg);">
										<span class="price text-center">$25.00<br><small>/month</small></span>
									</div>
									<div class="desc">
										<h3><a href="#">High Intensity Interval Training</a></h3>
										<p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
										<p>
											<button type="button" class="btn btn-primary btn-lg btn-learn" data-toggle="modal" data-target="#myModal">
												Learn More <i class="icon-arrow-right3"></i>
											</button>
										</p>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="classes">
									<div class="classes-img" style="background-image: url(images/classes-3.jpg);">
										<span class="price text-center">$25.00<br><small>/month</small></span>
									</div>
									<div class="desc">
										<h3><a href="#">Drastic transformation Program</a></h3>
										<p>Pointing has no control about the blind texts it is an almost unorthographic life</p>
										<p>
											<button type="button" class="btn btn-primary btn-lg btn-learn" data-toggle="modal" data-target="#myModal">
												Learn More <i class="icon-arrow-right3"></i>
											</button>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>

		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 animate-box fadeInUp animated-fast">
						<h2>Contact Information</h2>
						<div class="row">
							<div class="col-md-12">
								<div class="contact-info-wrap-flex">
									<div class="con-info">
										<p>
											<span><i class="icon-location-2"></i></span> E – 43, Stret No. 15, Madhu Vihar, <br> Patparganj, Delhi 110092
										</p>
									</div>
									<div class="con-info">
										<p>
											<span><i class="icon-phone3"></i></span> <a href="tel:9871002689">+91 9871002689</a>
										</p>
									</div>
									<div class="con-info">
										<p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@mg-dys.com">info@mg-dys.com</a></p>
									</div>
									<div class="con-info">
										<p><span><i class="icon-globe"></i></span> <a href="www.mg-dys.com">www.mg-dys.com</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-10 col-md-offset-1 animate-box fadeInUp animated-fast">
						<h2>Get In Touch</h2>
						<?php 
						if($_POST["submit"]) {
							$recipient="paritosh.singh@nextraworld.com";
							$senderSubject=@$_POST["senderSubject"];
							$sender=@$_POST["sender"];
							$senderEmail=@$_POST["senderEmail"];
							$senderSubject=@$_POST["senderSubject"];
							$message=@$_POST["message"];
							$mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";
							mail($recipient, $senderSubject, $mailBody, "From: $sender <$senderEmail>");
							$thankYou="<p>Thank you! Your message has been sent.</p>";
						}
						?>
						<form method="POST">
							<div class="row form-group">
								<div class="col-md-6">
									<input type="text" id="fname" name="sender" class="form-control" placeholder="Your Name" required>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<input type="text" id="email" name="senderEmail" class="form-control" placeholder="Your email address" required>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<input type="text" id="subject" name="senderSubject" class="form-control" placeholder="Your subject of this message" required>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us" required></textarea>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-primary btn-learn btn-submit" name="submit" value="Submit">
							</div>
						</form>		
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-subscribe" class="subs-img" style="background-image: url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<h2>Arrange A Call Back</h2>
						<p>Leave your contact number and our executive will get in touch with you shortly.</p>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-6 col-md-offset-3">
						<div class="row">
							<div class="col-md-12">
								<form class="form-inline qbstp-header-subscribe">
									<div class="col-three-forth">
										<div class="form-group">
											<input type="text" class="form-control" id="email" placeholder="Enter your number">
										</div>
									</div>
									<div class="col-one-third">
										<div class="form-group">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer id="colorlib-footer">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3">
						<div class="footer-logo">
							<a href="index.html">
								<img src="images/logo-footer.PNG" alt="">
							</a>
						</div>
					</div>
					<div class="col-md-4 colorlib-widget">
						<h4>About Us</h4>
						<p>Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="https://www.instagram.com/mgfitnessdys/" target="_blank"><i class="icon-instagram"></i></a></li>
								<li><a href="https://www.facebook.com/mgfitnessdys/" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="https://www.youtube.com/channel/UCJR2qjty9dAp6YJil7fYN7Q" target="_blank"><i class="icon-youtube"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-2 colorlib-widget">
						<h4>Quick Links</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#"><i class="icon-check"></i> About Us</a></li>
								<li><a href="#"><i class="icon-check"></i> Testimonials</a></li>
								<li><a href="#"><i class="icon-check"></i> Classes</a></li>
								<li><a href="#"><i class="icon-check"></i> Contact</a></li>
							</ul>
						</p>
					</div>

					<div class="col-md-3 colorlib-widget">
						<h4>Contact Info</h4>
						<ul class="colorlib-footer-links">
							<li>E – 43, Stret No. 15, Madhu Vihar,  <br> Patparganj, Delhi 110092</li>
							<li><a href="tel:9871002689"><i class="icon-phone"></i> +91 9871002689</a></li>
							<li><a href="mailto:info@mg-dys.com"><i class="icon-envelope"></i> info@mg-dys.com</a></li>
							<li><a href="www.mg-dys.com"><i class="icon-location4"></i> www.mg-dys.com</a></li>
						</ul>
					</div>
				</div>
			</div>
			</footer>
		</div>

		<div class="gototop js-top">
			<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
		</div>

		

		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Contact Us</h4>
					</div>
					<div class="modal-body">
						<form method="POST">
							<div class="form-group">
								<input type="text" class="form-control" name="sender" placeholder="Full Name" required>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="senderEmail" placeholder="Email" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="senderNumber" placeholder="Phone Number" required>
							</div>
							<input type="submit" class="btn btn-primary btn-learn btn-submit" name="submit" value="Submit">
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal -->

		<!-- jQuery -->
		<script src="js/jquery.min.js"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Waypoints -->
		<script src="js/jquery.waypoints.min.js"></script>
		<!-- Stellar Parallax -->
		<script src="js/jquery.stellar.min.js"></script>
		<!-- Flexslider -->
		<script src="js/jquery.flexslider-min.js"></script>
		<!-- Owl carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Magnific Popup -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/magnific-popup-options.js"></script>
		<!-- Counters -->
		<script src="js/jquery.countTo.js"></script>

		<script src="js/jquery.validate.min.js"></script>
		<!-- Main -->
		<script src="js/main.js"></script>

	</body>
	</html>

