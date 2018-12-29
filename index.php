<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MG Fitness Center - Gym | Yoga | Weight Loss | Zumba</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Unlimited access to high end equipment's and wide spread workout space. Inclusive of Cardio Workout, Cross Workout, Weight Loss Program, Yoga, Kids Workout, Dance" />
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

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900" rel="stylesheet" disabled>
	
	<!-- Animate.css -->
	<!-- <link rel="stylesheet" href="css/animate.css">  -->
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Fancybox  -->
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">

	<!-- Slick  -->
	<!-- <link rel="stylesheet" href="css/slick.css"> -->

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js" defer="defer"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
<![endif]-->


<!-- Global site tag (gtag.js) - Google Ads: 787043627 --> 
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-787043627" defer="defer"></script> 
<script defer="defer"> 
	window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-787043627'); 
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126967441-1" defer="defer"></script>
<script defer="defer">
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-126967441-1');
</script>

<!-- Event snippet for Form Lead conversion page In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. --> 
<script defer="defer"> 
	function gtag_report_conversion(url) { var callback = function () { if (typeof(url) != 'undefined') { window.location = url; } }; gtag('event', 'conversion', { 'send_to': 'AW-787043627/DQplCP-gvooBEKuqpfcC', 'event_callback': callback }); return false; } 
</script>

<script defer="defer">
	gtag('config', 'AW-787043627/O9udCI2T4YsBEKuqpfcC', {
		'phone_conversion_number': '+919871002689'
	});
</script>

</head>
<body>

<?php 
	require_once $_SERVER['DOCUMENT_ROOT']."/designer/robust/PHPMailer/src/Exception.php";
	require_once $_SERVER['DOCUMENT_ROOT']."/designer/robust/PHPMailer/src/PHPMailer.php";
	require_once $_SERVER['DOCUMENT_ROOT']."/designer/robust/PHPMailer/src/SMTP.php";
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;	
	if($_POST["submit"]) {
		$From = 'Nextraone';
		$FromEmail = 'noreply@nextraone.com';
		$recipient="ashish.kumar@nextraworld.com";
		$sender=@$_POST["sender"];
		$senderEmail=@$_POST["senderEmail"];
		$senderNumber=@$_POST["senderNum"];
		
		//PHPMailer Object
		$mail = new PHPMailer();
		//From email address and name
		$mail->From = $FromEmail;
		$mail->FromName = $From;

		//To address and name
		$mail->addAddress($recipient, "Ashish");

		//Address to which recipient will reply
		$mail->addReplyTo($senderEmail, $sender);

		//CC and BCC
		/* $mail->addCC("cc@example.com");
		$mail->addBCC("bcc@example.com"); */

		//Send HTML or Plain Text email
		$mail->isHTML(true);
		$subject="Registration For Gym";
		$mailBody="Name: $sender<br>Email: $senderEmail<br><br>$senderNumber";
		$mail->Subject = $subject;
		$mail->Body = $mailBody;
		//$mail->AltBody = "This is the plain text version of the email content";

		if(!$mail->send()) 
		{
			echo "Mailer Error: " . $mail->ErrorInfo;
		} 
		else 
		{
			header('Location: thank-you.php');die;
		}
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
									<img src="images/logo-new.png" alt="MG Fitness Center - Gym">
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
					<div class="col-md-12 intro-wrap">
						<div class="intro-flex">
							<div class="one-third intro-img" style="background-image: url(images/intro-img-1.jpg)">
								<div class="desc">
									<h3>Cross Workout</h3>
									<p>Light-hearted workout to cover working on easy excercise filled with a lot of fun</p>
									<button type="button" class="btn btn-primary btn-lg btn-learn" data-toggle="modal" data-target="#myModal">
										Join Classes
									</button>
								</div>
							</div>
							<div class="one-third intro-img" style="background-image: url(images/intro-img-2.jpg)">
								<div class="desc">
									<h3>Zumba</h3>
									<p>Personal Training involving aggresive dance workout to make your work fun</p>
									<button type="button" class="btn btn-primary btn-lg btn-learn" data-toggle="modal" data-target="#myModal">
										Join Classes
									</button>
								</div>
							</div>
							<div class="one-third intro-img" style="background-image: url(images/intro-img-3.jpg)">
								<div class="desc">
									<h3>Yoga</h3>
									<p>Yogic trainers with peaceful atmosphere for daily flow of your Yoga energy.</p>
									<button type="button" class="btn btn-primary btn-lg btn-learn" data-toggle="modal" data-target="#myModal">
										Join Classes
									</button>
								</div>
							</div>
							<div class="one-third intro-img" style="background-image: url(images/t1.jpg)">
								<div class="desc">
									<h3>weight loss Program</h3>
									<p>Personalized Weight Loss Programs Designed by our Experts trainer to give prompt visible results.</p>
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
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading">
						<h2>Being fit is attractive</h2>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-gym"></i>
							</span>
							<div class="desc">
								<h3>Cardio Program</h3>
								<p>A dynamic cardiovascular workout utilizing boxing and martial arts style training to improve strength, agility and endurance.</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-weightlifting"></i>
							</span>
							<div class="desc">
								<h3>Body Tech</h3>
								<p>Body Tech (or core conditioing) is a mix of aerobic, muscle-toning class, focused on core strength.</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-man"></i>
							</span>
							<div class="desc">
								<h3>ZUMBA</h3>
								<p>Personal Training involving aggresive dance workout to make your work fun</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-meditation"></i>
							</span>
							<div class="desc">
								<h3>YOGA</h3>
								<p>Yogic trainers with peaceful atmosphere for daily flow of your Yoga energy.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="colorlib-contact" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<h2 class="text-center">Get In Touch</h2>
						<?php 
						if($_POST["getintouchsubmit"]) {
							//$recipient="paritosh.singh@nextraworld.com";
							
							// Always set content-type when sending HTML email
							$subject = 'MG Fitness Center';
							$From = 'Nextraone';
							$FromEmail = 'noreply@nextraone.com';
							$headers = "MIME-Version: 1.0" . "\r\n";
							$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

							// More headers
							$headers .= "From: $From <$FromEmail>" . "\r\n";
							//$headers .= 'Cc: myboss@example.com' . "\r\n";

							$recipient="ashish.kumar@nextraworld.com";
							$senderSubject=@$_POST["senderSubject"];
							$sender=@$_POST["sender"];
							$senderEmail=@$_POST["senderEmail"];
							$senderNum=@$_POST["senderNum"];
							$mailBody="Name: $sender\nEmail: $senderEmail\nNumber: $senderNum\n\n";
							mail($recipient, $subject, $mailBody, $headers);
							header('Location: thank-you.php');die;
						}
						?>
						<form method="POST">
							<div class="row form-group">
								<div class="col-md-12">
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
									<input type="text" id="num" name="senderNum" class="form-control" placeholder="Your phone number" required>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12 text-center">
									<input type="submit" class="btn btn-primary btn-learn btn-submit" name="getintouchsubmit" value="Submit">
								</div>
							</div>
						</form>		
					</div>
				</div>
			</div>
		</div>
		<div id="colorlib-schedule">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading">
						<h2>Our Class Schedule</h2>
						<p>Regular Timing - <strong>6:00 A.M To 10:00 P.M</strong> </p>
					</div>
				</div>
				<div class="row">
					<div class="schedule text-center">
						<div class="col-md-12">
							<ul class="week">
								<li data-tab="sunday"><a href="javascript:void()">Sunday</a></li>
								<li class="active" data-tab="monday"><a href="javascript:void()">Monday</a></li>
								<li data-tab="tuesday"><a href="javascript:void()">Tuesday</a></li>
								<li data-tab="wednesday"><a href="javascript:void()">Wednesday</a></li>
								<li data-tab="thursday"><a href="javascript:void()">Thursday</a></li>
								<li data-tab="friday"><a href="javascript:void()">Friday</a></li>
								<li data-tab="saturday"><a href="javascript:void()">Saturday</a></li>
							</ul>
						</div>
						<div class="schedule-flex" id="sunday">
							<strong>6:00 A.M To 2:00 P.M</strong>
						</div>
						<div class="schedule-flex active" id="monday">
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
								<h3>Cross Workout Workout</h3>
							</div>
						</div>
						<div class="schedule-flex" id="tuesday">
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
								<h3>Cross Workout Workout</h3>
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
								<h3>Cross Workout Workout</h3>
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
								<h3>Cross Workout Workout</h3>
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
								<h3>Cross Workout Workout</h3>
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
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading">
						<h2>What People Says</h2>
						<h3>Success Stories</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="row">
							<div class="owl-carousel1">
								<div class="item">
									<div class="testimony-slide">
										<div class="testimony-wrap">
											<blockquote>
												<span>Tanisha</span>
												<p>Exercise is something that makes you look better and feel better. When done in combination with proper guidance its benefits are enhanced.It’s here that the trainers encourage you to push your limits to the next level thereby helping you move a step closer to your fitness goal.The staff is very friendly and they go out of there way to make you feel welcome and get to know you. Moreover with a variety of exercise combinations like zumba, weight training, cardio and cross workout you surely are never gonna get bored.Being a member of this gym for past couple of years , I just have to say that it's worth every penny you invest.</p>
											</blockquote>
											<div class="figure-img" style="background-image: url(images/tanisha_mg.jpg);"></div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide">
										<div class="testimony-wrap">
											<blockquote>
												<span>Anima Jain</span>
												<p>This is an incredibly friendly gym with a great range of equipment, especially cross workout section which pushes to your limits, PTs who actually look like they enjoy their job and the management are warm, available and attentive to the needs of the members.</p>
											</blockquote>
											<div class="figure-img" style="background-image: url(images/anima_mg.jpg);"></div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide">
										<div class="testimony-wrap">
											<blockquote>
												<span>Vikas</span>
												<p>'A Pleasant Surprise!'<br />
												Nice, bold, clean and very modern. It'll take me some time to get used to cross workout routine but I'm very impressed I have to say. Never short of gear to use and I'm always inspired to work out. Money well spent - nice one!</p>
											</blockquote>
											<div class="figure-img" style="background-image: url(images/vikas_mg.jpg);"></div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-slide">
										<div class="testimony-wrap">
											<blockquote>
												<span>Srisha</span>
												<p>I have been doing my workout in MG gym almost since 2 years. The gym provides great facilities and training. Within 2 years of span gym got expanded to 3 floors from one floor which include various forms of workouts like cross workout, strength, functional training etc. The overall performance of gym is really fantastic when compared other gyms in Patparganj. Yes MG is known for "discover your shape" .</p>
											</blockquote>
											<div class="figure-img" style="background-image: url(images/srisha_mg.jpg);"></div>
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
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading">
						<h2>Our Classes</h2>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="owl-carousel2">
							<div class="item">
								<div class="classes">
									<div class="classes-img" style="background-image: url(images/classes-1.jpg);"></div>
									<div class="desc">
										<h3><a href="#">Aerobics</a></h3>
										<p>Rhythmic stretching and strength training routines with the goal of improving flexibility, muscular strength, and cardio-vascular fitness</p>
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
									<div class="classes-img" style="background-image: url(images/classes-2.jpg);"></div>
									<div class="desc">
										<h3><a href="#">Circuit Training</a></h3>
										<p>Endurance training on "circuit" witht complete prescribed exercises in the Program</p>
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
									<div class="classes-img" style="background-image: url(images/classes-5.jpg);"></div>
									<div class="desc">
										<h3><a href="#">Power Yoga</a></h3>
										<p>Yoga including building internal heat, increased stamina, strength, and flexibility, as well as stress reduction</p>
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
									<div class="classes-img" style="background-image: url(images/classes-6.jpg);"></div>
									<div class="desc">
										<h3><a href="#">Personal Trainer</a></h3>
										<p>Certified Personal Trainer guidance for Cross Workout Training, Weight Loss Management, High Intensity Interval Training.</p>
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
									<div class="classes-img" style="background-image: url(images/c2.jpg);"></div>
									<div class="desc">
										<h3><a href="#">Weight Lifting</a></h3>
										<p>Professional Weightlifter's and world-class athlete who’s here to help you perfect your shape</p>
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
									<div class="classes-img" style="background-image: url(images/classes-3.jpg);"></div>
									<div class="desc">
										<h3><a href="#">Cross Workout</a></h3>
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
									<div class="classes-img" style="background-image: url(images/c3.jpg);"></div>
									<div class="desc">
										<h3><a href="#">Functional Training</a></h3>
										<p>Semi- Private Training to help you build strength, power, and mobility that translates beyond the gym</p>
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
									<div class="classes-img" style="background-image: url(images/blog-4.jpg);"></div>
									<div class="desc">
										<h3><a href="#">Zumba</a></h3>
										<p>Personal Training involving aggresive dance workout to make your work fun</p>
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
									<div class="classes-img" style="background-image: url(images/CrossWorkout1.jpg);"></div>
									<div class="desc">
										<h3><a href="#">Body Tech</a></h3>
										<p>Body Tech (or core conditioing) is a mix of aerobic, muscle-toning class, focused on core strength.</p>
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
									<div class="classes-img" style="background-image: url(images/classes-1.jpg);"></div>
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
									<div class="classes-img" style="background-image: url(images/classes-5.jpg);"></div>
									<div class="desc">
										<h3><a href="#">Kids Yoga</a></h3>
										<p>Fun, light-hearted way to intrduce kids to yoga in thier life and added life energy level</p>
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
									<div class="classes-img" style="background-image: url(images/classes-3.jpg);"></div>
									<div class="desc">
										<h3><a href="#">Kids Dance</a></h3>
										<p>Give your kids opportunity to learn dance, express themselves creatively jive to the beat of music</p>
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
									<div class="classes-img" style="background-image: url(images/classes-2.jpg);"></div>
									<div class="desc">
										<h3><a href="#">MMA Boxing</a></h3>
										<p>Training by proffesional MMA fighter to up the level of your practical defence n strenght training.</p>
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
									<div class="classes-img" style="background-image: url(images/classes-2.jpg);"> </div>
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
									<div class="classes-img" style="background-image: url(images/classes-3.jpg);"> </div>
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
		<div id="plans" class="colorlib-classes">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading">
						<h2>Choose the Perfect Plan for you</h2>
					</div>
				</div>					
				<div class="row">
					<!-- <div class="col-lg-4">
						<div class="single-price">
							<div class="top-sec d-flex justify-content-between">
								<div class="top-left">
									<h4>Silver</h4>
								</div>
								<div class="top-right">
									<h1>&#8377; 14,000</h1>
								</div>
							</div>
							<div class="bottom-sec">
								<p>
									“Few would argue that, despite the advancements
								</p>
							</div>
							<div class="end-sec">
								<ul>
									<li>7 Days a Week</li>
									<li>Dedicated Trainer Allocated</li>
									<li>Diet Plan Inculuded</li>
									<li>Morning and Evening Batches</li>
								</ul>
								<button class="primary-btn price-btn mt-20" data-toggle="modal" data-target="#myModal">Purchase Plan<span class="lnr lnr-arrow-right"><i class="icon-arrow-right3"></i></span></button>
							</div>								
						</div> 
					</div> -->
					<div class="col-sm-4 col-sm-offset-2">
						<div class="single-price">
							<div class="top-sec d-flex justify-content-between">
								<div class="top-left">
									<h4>Gold</h4>
								</div>
								<div class="top-right">
									<h1>&#8377; 18,800</h1>
								</div>
							</div>
							<div class="end-sec">
								<ul>
									<li>7 Days a Week</li>
									<li>Diet Plan Inculuded</li>
									<li>Morning and Evening Batches</li>
								</ul>
								<button class="primary-btn price-btn mt-20" data-toggle="modal" data-target="#myModal">Purchase Plan<span class="lnr lnr-arrow-right"><i class="icon-arrow-right3"></i></span></button>
							</div>								
						</div> 
					</div>	
					<div class="col-sm-4">
						<div class="single-price">
							<div class="top-sec d-flex justify-content-between">
								<div class="top-left">
									<h4>Platinum</h4>
								</div>
								<div class="top-right">
									<h1>&#8377; 22,000</h1>
								</div>
							</div>
							<div class="end-sec">
								<ul>
									<li>7 Days a Week</li>
									<li>Diet Plan Inculuded</li>
									<li>Morning and Evening Batches</li>
								</ul>
								<button class="primary-btn price-btn mt-20" data-toggle="modal" data-target="#myModal">Purchase Plan<span class="lnr lnr-arrow-right"><i class="icon-arrow-right3"></i></span></button>
							</div>								
						</div> 
					</div>							
				</div>
				<!-- <div class="row visible-xs">
					<div class="center">
						<div class="single-price">
							<div class="top-sec d-flex justify-content-between">
								<div class="top-left">
									<h4>Standard</h4>
									<p>For the <br>individuals</p>
								</div>
								<div class="top-right">
									<h1>&#8377; 14,000</h1>
								</div>
							</div>
							<div class="bottom-sec">
								<p>
									“Few would argue that, despite the advancements
								</p>
							</div>
							<div class="end-sec">
								<ul>
									<li>7 Days a Week</li>
									<li>Dedicated Trainer Allocated</li>
									<li>Diet Plan Inculuded</li>
									<li>Morning and Evening Batches</li>
								</ul>
								<button class="primary-btn price-btn mt-20" data-toggle="modal" data-target="#myModal">Purchase Plan<span class="lnr lnr-arrow-right"><i class="icon-arrow-right3"></i></span></button>
							</div>								
						</div>
						<div class="single-price">
							<div class="top-sec d-flex justify-content-between">
								<div class="top-left">
									<h4>Business</h4>
									<p>For the <br>small Company</p>
								</div>
								<div class="top-right">
									<h1>&#8377; 18,800</h1>
								</div>
							</div>
							<div class="bottom-sec">
								<p>
									“Few would argue that, despite the advancements
								</p>
							</div>
							<div class="end-sec">
								<ul>
									<li>7 Days a Week</li>
									<li>Dedicated Trainer Allocated</li>
									<li>Diet Plan Inculuded</li>
									<li>Morning and Evening Batches</li>
								</ul>
								<button class="primary-btn price-btn mt-20" data-toggle="modal" data-target="#myModal">Purchase Plan<span class="lnr lnr-arrow-right"><i class="icon-arrow-right3"></i></span></button>
							</div>								
						</div> 
						<div class="single-price">
							<div class="top-sec d-flex justify-content-between">
								<div class="top-left">
									<h4>Ultimate</h4>
									<p>For the <br>large Company</p>
								</div>
								<div class="top-right">
									<h1>&#8377; 22,000</h1>
								</div>
							</div>
							<div class="bottom-sec">
								<p>
									“Few would argue that, despite the advancements
								</p>
							</div>
							<div class="end-sec">
								<ul>
									<li>7 Days a Week</li>
									<li>Dedicated Trainer Allocated</li>
									<li>Diet Plan Inculuded</li>
									<li>Morning and Evening Batches</li>
								</ul>
								<button class="primary-btn price-btn mt-20" data-toggle="modal" data-target="#myModal">Purchase Plan<span class="lnr lnr-arrow-right"><i class="icon-arrow-right3"></i></span></button>
							</div>								
						</div> 
					</div>
				</div> -->
			</div>
		</div>
		<div class="colorlib-classes colorlib-light-grey" id="gallery">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading">
						<h2>gallery</h2>
					</div>
					<div class="col-xs-12">
						<div class="gallery-wrap">
							<div class="item">
								<a data-fancybox="gallery" href="images/Banner 4.jpg"><img src="images/Banner 4.jpg"></a>	
							</div>
							<div class="item">
								<a data-fancybox="gallery" href="images/mg-misc1.jpg"><img src="images/mg-misc1.jpg"></a>	
							</div>
							<div class="item">
								<a data-fancybox="gallery" href="images/CrossWorkout1.jpg"><img src="images/CrossWorkout1.jpg"></a>	
							</div>
							<div class="item">
								<a data-fancybox="gallery" href="images/in_action1.jpg"><img src="images/in_action1.jpg"></a>	
							</div>
							<div class="item">
								<a data-fancybox="gallery" href="images/mg-misc2.jpg"><img src="images/mg-misc2.jpg"></a>	
							</div>
							<div class="item">
								<a data-fancybox="gallery" href="images/mg-misc4.jpg"><img src="images/mg-misc4.jpg"></a>	
							</div>
							<div class="item">
								<a data-fancybox="gallery" href="images/mg-misc5.jpg"><img src="images/mg-misc5.jpg"></a>	
							</div>
							<div class="item">
								<a data-fancybox="gallery" href="images/mg-misc6.jpg"><img src="images/mg-misc6.jpg"></a>	
							</div>
							<div class="item">
								<a data-fancybox="gallery" href="images/mg-misc7.jpg"><img src="images/mg-misc7.jpg"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="colorlib-contact2">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
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
					<div class="col-md-6 col-md-offset-3">
						<h2 class="text-center">Get In Touch</h2>
						<?php 
						if($_POST["submit3"]) {
							//$recipient="paritosh.singh@nextraworld.com";
							$recipient="ashish.kumar@nextraworld.com";
							$senderSubject=@$_POST["senderSubject"];
							$sender=@$_POST["sender"];
							$senderEmail=@$_POST["senderEmail"];
							$senderNum=@$_POST["senderNum"];
							$mailBody="Name: $sender\nEmail: $senderEmail\nNumber: $senderNum\n\n";
							mail($recipient, $mailBody, "From: $sender <$senderEmail>");
							header('Location: thank-you.php');die;
						}
						?>
						<form method="POST">
							<div class="row form-group">
								<div class="col-md-12">
									<input type="text" id="fname2" name="sender" class="form-control" placeholder="Your Name" required>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<input type="text" id="email2" name="senderEmail" class="form-control" placeholder="Your email address" required>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<input type="text" id="num2" name="senderNum" class="form-control" placeholder="Your phone number" required>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-12 text-center">
									<input type="submit" class="btn btn-primary btn-learn btn-submit" name="submit3" value="Submit">
								</div>
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
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading">
						<h2>Arrange A Call Back</h2>
						<p>Leave your contact number and our executive will get in touch with you shortly.</p>
					</div>
				</div>
				<div class="row">
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
						<p>
							More than 10 year old Fitness Club with unlimited access to high end equipment's and wide spread workout space. Inclusive of Cardio Workout, Cross Workout, Weight Loss Program, Yoga, Kids Workout, Dance
						</p>
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
								<li><a href="#classes"><i class="icon-check"></i> Classes</a></li>
								<li><a href="#colorlib-testimony"><i class="icon-check"></i> Testimonials</a></li>
								<li><a href="#colorlib-contact"><i class="icon-check"></i> Contact</a></li>
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

	<ul class="btn-wrap visible-xs">
		<li>
			<a href="tel:9871002689"><i class="icon-phone"></i></a>
		</li>
		<li>
			<a href="mailto:info@mg-dys.com"><i class="icon-envelope"></i></a>
		</li>
	</ul>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js" defer="defer"></script>
	<!-- Stellar Parallax -->
	<!-- <script src="js/jquery.stellar.min.js"></script> -->
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js" defer="defer"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js" defer="defer"></script>
	<!-- Magnific Popup -->
	<!-- <script src="js/jquery.magnific-popup.min.js"></script> -->
	<!-- <script src="js/magnific-popup-options.js"></script> -->
	<!-- Counters -->
	<script src="js/jquery.countTo.js" defer="defer"></script>

	<script src="js/jquery.validate.min.js" defer="defer"></script>

	<!-- Fancybox  -->
	<script src="js/jquery.fancybox.min.js" defer="defer"></script>

	<!-- Slick  -->
	<!-- <script src="js/slick.min.js"></script> -->

	<!-- Main -->
	<script src="js/main.js" defer="defer"></script>

	<!--Start of Tawk.to Script-->
	<script type="text/javascript" defer="defer">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
			var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
			s1.async=true;
			s1.src='https://embed.tawk.to/5ba9bfefb156da713cb3c5db/default';
			s1.charset='UTF-8';
			s1.setAttribute('crossorigin','*');
			s0.parentNode.insertBefore(s1,s0);
		})();
	</script>
	<!--End of Tawk.to Script-->

	<script defer="defer">
		window.addEventListener('load',function(){
			Tawk_API = Tawk_API || {};
			Tawk_API.onChatStarted = function(){
				gtag('event', 'conversion', {'send_to': 'AW-787043627/p82XCIn22IsBEKuqpfcC'});
			};
		})
	</script>

</body>
</html>

