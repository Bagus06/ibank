<?php
	if (isset($_SESSION["login"])) {
		header("location:View/master/app.view.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>I-Bank Class</title>
	<meta charset="UTF-8">
	<meta name="description" content="Cryptocurrency Landing Page Template">
	<meta name="keywords" content="cryptocurrency, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="Public/home/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="Public/home/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="Public/home/css/themify-icons.css"/>
	<link rel="stylesheet" href="Public/home/css/animate.css"/>
	<link rel="stylesheet" href="Public/home/css/owl.carousel.css"/>
	<link rel="stylesheet" href="Public/home/css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section clearfix">
		<div class="container-fluid">
			<a href="index.html" class="site-logo">
				<img src="Public/home/img/logo.png" alt="">
			</a>
			<div class="responsive-bar"><i class="fa fa-bars"></i></div>
			<a href="View/auth/auth.view.php?log=2" class="site-btn">Sign in</a>
			<nav class="main-menu">
				<ul class="menu-list">
					<li><a href="View/master/app">Dashboard</a></li>
					<li><a href="View/master/app"></a></li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 hero-text">
					<h2>Save in <span>I-Bank</span> <br>Class Savings</h2>
					<h4>Use modern I-Bank Class progressive technology to maintain the security of your savings</h4>
				</div>
				<div class="col-md-6">
					<img src="Public/home/img/laptop.png" class="laptop-image" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->


	<!-- About section -->
	<section class="about-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-6 about-text">
					<h2>What is I-Bank Class</h2>
					<h5>I-Bank is an innovative and transparent money saving network.</h5>
					<p>I-Bank Class is a class interest application designed to maintain the security of student money transactions, this application is also designed to facilitate students in checking transactions transparently. This application is also made to minimize the embezzlement of money.</p>
				</div>
			</div>
			<div class="about-img">
				<img src="Public/home/img/about-img.png" alt="">
			</div>
		</div>
	</section>
	<!-- About section end -->


	<!-- Features section -->
	<section class="features-section spad gradient-bg">
		<div class="container text-white">
			<div class="section-title text-center">
				<h2>Our Features</h2>
				<p>I-Bank is a savings application to simplify the class saving process.</p>
			</div>
			<div class="row">
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-world"></i>
					<div class="feature-content">
						<h4>Web Aplications</h4>
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-shield"></i>
					<div class="feature-content">
						<h4>Safe & Secure</h4>
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-wallet"></i>
					<div class="feature-content">
						<h4>Balance Control</h4>
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-headphone-alt"></i>
					<div class="feature-content">
						<h4>Experts Support</h4>
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-exchange-vertical"></i>
					<div class="feature-content">
						<h4>Instant Transactions</h4>
					</div>
				</div>
				<!-- feature -->
				<div class="col-md-6 col-lg-4 feature">
					<i class="ti-panel"></i>
					<div class="feature-content">
						<h4>Transaction Record</h4>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Features section end -->


	<!-- Process section -->
	<section class="process-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h2>Get Started With I-Bank Class</h2>
				<p>Start saving at I-Bank Class A passbook replacement application that facilitates the process of saving and monitoring your money in the absence of unilateral fraud! </p>
			</div>
			<div class="row">
				<div class="col-md-4 process">
					<div class="process-step">
						<figure class="process-icon">
							<img src="Public/home/img/process-icons/1.png" alt="#">
						</figure>
						<h4>Create Your account</h4>
						<p>Make an application to the admin of each class and to create an account. </p>
					</div>
				</div>
				<div class="col-md-4 process">
					<div class="process-step">
						<figure class="process-icon">
							<img src="Public/home/img/process-icons/2.png" alt="#">
						</figure>
						<h4>Tube or take money to the admin</h4>
						<p>Tube / Take your money to the admin of each class.</p>
					</div>
				</div>
				<div class="col-md-4 process">
					<div class="process-step">
						<figure class="process-icon">
							<img src="Public/home/img/process-icons/3.png" alt="#">
						</figure>
						<h4>Monitor your money in this blog</h4>
						<p>Monitor the progress of your money through this website transparently without cheating or report if there is fraud through the message feature on the website. </p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Process section end -->


	<!-- Fact section -->
	<section class="fact-section gradient-bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="fact">
						<h2>60</h2>
						<p>Member <br> Students</p>
						<i class="ti-user"></i>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="fact">
						<h2>100%</h2>
						<p>Security  <br> transaction</p>
						<i class="ti-lock"></i>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-4">
					<div class="fact">
						<h2>240</h2>
						<p>Secure <br> of Transaction</p>
						<i class="ti-shield"></i>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Fact section end -->


	<!-- Team section -->
	<section class="team-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h2>Team</h2>
				<span>People who contribute to the making of i-bank applications</span>
			</div>
		</div>
		<div class="team-members clearfix">
			<!-- Team member -->
			<div class="member">
				<div class="member-text">
					<div class="member-img set-bg" data-setbg="Public/home/img/member/1.jpg"></div>
					<h2>Tom Binegar</h2>
					<span>Business Development</span>
				</div>
				<div class="member-social">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-linkedin"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
				</div>
				<div class="member-info">
					<div class="member-img mf set-bg" data-setbg="Public/home/img/member/1.jpg"></div>
					<div class="member-meta">
						<h2>Tom Binegar</h2>
						<span>Marketing Director</span>
					</div>
					<p>Jackson Nash is a full-time faculty member of the Marketing and Behavioural Science Division at the Sauder School of Business at UBC. He leads the Entrepreneurship Group, in the undergraduate and graduate programs, teaching actively in both of these.</p>
				</div>
			</div>
			<!-- Team member -->
			<div class="member">
				<div class="member-text">
					<div class="member-img set-bg" data-setbg="Public/home/img/member/2.jpg"></div>
					<h2>Jackson Nash</h2>
					<span>Business Development</span>
				</div>
				<div class="member-social">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-linkedin"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
				</div>
				<div class="member-info">
					<div class="member-img mf set-bg" data-setbg="Public/home/img/member/2.jpg"></div>
					<div class="member-meta">
						<h2>Jackson Nash</h2>
						<span>Marketing Director</span>
					</div>
					<p>Jackson Nash is a full-time faculty member of the Marketing and Behavioural Science Division at the Sauder School of Business at UBC. He leads the Entrepreneurship Group, in the undergraduate and graduate programs, teaching actively in both of these.</p>
				</div>
			</div>
			<!-- Team member -->
			<div class="member">
				<div class="member-text">
					<div class="member-img set-bg" data-setbg="Public/home/img/member/3.jpg"></div>
					<h2>Tom Binegar</h2>
					<span>Business Development</span>
				</div>
				<div class="member-social">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-linkedin"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
				</div>
				<div class="member-info">
					<div class="member-img mf set-bg" data-setbg="Public/home/img/member/3.jpg"></div>
					<div class="member-meta">
						<h2>Aaron Ballance</h2>
						<span>Ceo Bitcoin</span>
					</div>
					<p>Jackson Nash is a full-time faculty member of the Marketing and Behavioural Science Division at the Sauder School of Business at UBC. He leads the Entrepreneurship Group, in the undergraduate and graduate programs, teaching actively in both of these.</p>
				</div>
			</div>
			<!-- Team member -->
			<div class="member">
				<div class="member-text">
					<div class="member-img set-bg" data-setbg="Public/home/img/member/4.jpg"></div>
					<h2>Melissa Barth</h2>
					<span>Product Manager</span>
				</div>
				<div class="member-social">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-linkedin"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
				</div>
				<div class="member-info">
					<div class="member-img mf set-bg" data-setbg="Public/home/img/member/4.jpg"></div>
					<div class="member-meta">
						<h2>Melissa Barth</h2>
						<span>Product Manager</span>
					</div>
					<p>Jackson Nash is a full-time faculty member of the Marketing and Behavioural Science Division at the Sauder School of Business at UBC. He leads the Entrepreneurship Group, in the undergraduate and graduate programs, teaching actively in both of these.</p>
				</div>
			</div>
			<!-- Team member -->
			<div class="member">
				<div class="member-text">
					<div class="member-img set-bg" data-setbg="Public/home/img/member/5.jpg"></div>
					<h2>Katy Abrams</h2>
					<span>Head of Design</span>
				</div>
				<div class="member-social">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-linkedin"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
				</div>
				<div class="member-info">
					<div class="member-img mf set-bg" data-setbg="Public/home/img/member/5.jpg"></div>
					<div class="member-meta">
						<h2>Katy Abrams</h2>
						<span>Head of Design</span>
					</div>
					<p>Jackson Nash is a full-time faculty member of the Marketing and Behavioural Science Division at the Sauder School of Business at UBC. He leads the Entrepreneurship Group, in the undergraduate and graduate programs, teaching actively in both of these.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Team section -->


	<!-- Newsletter section -->
	<section class="newsletter-section gradient-bg">
		<div class="container text-white">
			<div class="section-title text-center">
				<h2>Meet Our Admin Class</h2>
				<p>Admin in Class I-Bank can always help you with your questions!!</p>
			</div>
			<div class="row">
				<div class="col-lg-8 push-8">
					<img src="img/quote.png" alt="" class="quote mb-5">
					<div class="review-text-slider owl-carousel">
						<div class="review-text">
							<p>"Bitcoin is exciting because it shows how cheap it can be. Bitcoin is better than currency in that you don’t have to be physically in the same place and, of course, for large transactions, currency can get pretty inconvenient.”</p>
						</div>
						<div class="review-text">
							<p>"Bitcoin is exciting because it shows how cheap it can be. Bitcoin is better than currency in that you don’t have to be physically in the same place and, of course, for large transactions, currency can get pretty inconvenient.”</p>
						</div>
						<div class="review-text">
							<p>"Bitcoin is exciting because it shows how cheap it can be. Bitcoin is better than currency in that you don’t have to be physically in the same place and, of course, for large transactions, currency can get pretty inconvenient.”</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 pr-0 pull-3">
					<div class="review-meta-slider owl-carousel pt-5">
						<div class="author-meta">
							<div class="author-avatar set-bg" data-setbg="Public/home/img/review/1.jpg"></div>
							<div class="author-name">
								<h4>Aaron Ballance</h4>
								<p>Ceo Bitcoin</p>
							</div>
						</div>
						<div class="author-meta">
							<div class="author-avatar set-bg" data-setbg="Public/home/img/review/2.jpg"></div>
							<div class="author-name">
								<h4>Jackson Nash</h4>
								<p>Head of Design</p>
							</div>
						</div>
						<div class="author-meta">
							<div class="author-avatar set-bg" data-setbg="Public/home/img/review/3.jpg"></div>
							<div class="author-name">
								<h4>Katy Abrams</h4>
								<p>Product Manager</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Newsletter section end -->



	<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h2>Latest Champion</h2>
				<p>The champion holder is the highest amount of classy savings.</p>
			</div>
			<div class="row">
				<!-- blog item -->
				<div class="col-md-4">
					<div class="blog-item">
						<figure class="blog-thumb">
							<img src="Public/home/img/blog/1.jpg" alt="">
						</figure>
						<div class="blog-text">
							<h4 class="blog-title"><a href="">XI RPL</a></h4>
							<div class="post-meta">
								<a href=""><span>by</span> Admin</a>
								<a href=""><i class="fa fa-user"></i> 234 Students</a>
								<a href=""><i class="fa fa-dollar"></i></i> 08 Rupiah</a>
							</div>
						</div>
					</div>
				</div>
				<!-- blog item -->
				<div class="col-md-4">
					<div class="blog-item">
						<figure class="blog-thumb">
							<img src="Public/home/img/blog/2.jpg" alt="">
						</figure>
						<div class="blog-text">
							<h4 class="blog-title"><a href="">XI RPL</a></h4>
							<div class="post-meta">
								<a href=""><span>by</span> Admin</a>
								<a href=""><i class="fa fa-user"></i> 234 Students</a>
								<a href=""><i class="fa fa-dollar"></i></i> 08 Rupiah</a>
							</div>
						</div>
					</div>
				</div>
				<!-- blog item -->
				<div class="col-md-4">
					<div class="blog-item">
						<figure class="blog-thumb">
							<img src="Public/home/img/blog/3.jpg" alt="">
						</figure>
						<div class="blog-text">
							<h4 class="blog-title"><a href="">XI RPL</a></h4>
							<div class="post-meta">
								<a href=""><span>by</span> Admin</a>
								<a href=""><i class="fa fa-user"></i> 234 Students</a>
								<a href=""><i class="fa fa-dollar"></i></i> 08 Rupiah</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="row spad">
				<div class="col-md-6 col-lg-3 footer-widget">
					<img src="Public/home/img/logo.png" class="mb-4" alt="">
					<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese mollit anim id est laborum.</p>
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
				</div>
				<div class="col-md-6 col-lg-2 offset-lg-1 footer-widget">
					<h5 class="widget-title">Resources</h5>
					<ul>
						<li><a href="#">How to Buy Coin</a></li>
						<li><a href="#">Coin Overview</a></li>
						<li><a href="#">Blog News</a></li>
						<li><a href="#">How to Sell Coin</a></li>
						<li><a href="#">Purchase Theme</a></li>
					</ul>
				</div>
				<div class="col-md-6 col-lg-2 offset-lg-1 footer-widget">
					<h5 class="widget-title">Quick Links</h5>
					<ul>
						<li><a href="#">Network Stats</a></li>
						<li><a href="#">Block Explorers</a></li>
						<li><a href="#">Governance</a></li>
						<li><a href="#">Exchange Markets</a></li>
						<li><a href="#">Get Theme</a></li>
					</ul>
				</div>
				<div class="col-md-6 col-lg-3 footer-widget pl-lg-5 pl-3">
					<h5 class="widget-title">Follow Us</h5>
					<div class="social">
						<a href="" class="facebook"><i class="fa fa-facebook"></i></a>
						<a href="" class="google"><i class="fa fa-google-plus"></i></a>
						<a href="" class="instagram"><i class="fa fa-instagram"></i></a>
						<a href="" class="twitter"><i class="fa fa-twitter"></i></a>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="row">
					<div class="col-lg-4 store-links text-center text-lg-left pb-3 pb-lg-0">
						<a href=""><img src="Public/home/img/appstore.png" alt="" class="mr-2"></a>
						<a href=""><img src="Public/home/img/playstore.png" alt=""></a>
					</div>
					<div class="col-lg-8 text-center text-lg-right">
						<ul class="footer-nav">
							<li><a href="">DPA</a></li>
							<li><a href="">Terms of Use</a></li>
							<li><a href="">Privacy Policy </a></li>
							<li><a href="">support@company.com</a></li>
							<li><a href="">(123) 456-7890</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<!--====== Javascripts & Jquery ======-->
	<script src="Public/home/js/jquery-3.2.1.min.js"></script>
	<script src="Public/home/js/owl.carousel.min.js"></script>
	<script src="Public/home/js/main.js"></script>
</body>
</html>
