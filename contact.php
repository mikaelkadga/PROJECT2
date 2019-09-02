<?php
//error_reporting(E_ALL ^ E_NOTICE);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Seniman Pangan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

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

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<!-- <link rel="shortcut icon" href="favicon.ico"> -->
	
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/icomoon.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<link rel="stylesheet" href="css/style.css">
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body class="boxed">

	<?php include("koneksi.php"); ?>

	<!-- Loader -->
	<div class="fh5co-loader"></div>

	<div id="wrap">

	<div id="fh5co-page">
		<header id="fh5co-header" role="banner">
			<div class="container">
				<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
				<div id="fh5co-logo"><a href="index.php"><img src="images/gambar.png" alt="Free HTML5 Website Template" width="30%" height="30%"></a></div>
				<nav id="fh5co-main-nav" role="navigation">
					<ul>
						<li><a href="about.php">About Us</a></li>
						<li class="has-sub">
							<!--<div class="drop-down-menu">
								<a href="services.html">Services</a>
								<div class="dropdown-menu-wrap">
									<ul>
										<li><a href="#">Web Development</a></li>
											<li><a href="#">Web Design</a></li>
										<li><a href="#">Graphic Design</a></li>
										<li><a href="#">Branding</a></li>
									</ul>
								</div>
							</div>-->
						</li>
						<li><a href="activity.php">Our Activity</a></li>
						<li><a href="farm.php">Farmpreneur</a></li>
						<li><a href="contact.php">Contact</a></li>		
						<li><a href="admin/login1.php">Login</a></li>

						<!--<li class="has-sub">
							<div class="drop-down-menu">
								<a href="#">Contact</a>
								<<div class="dropdown-menu-wrap">
									<ul>
										<li><a href="right-sidebar.html">Right Sidebar</a></li>
										<li><a href="left-sidebar.html">Left Sidebar</a></li>
										
									</ul>
								</div>
							</div>
						</li>-->
						<!--<li class="cta"><a href="contact.html">Contact</a></li>-->
					</ul>
				</nav>
			</div>
		</header>
		<!-- Header -->

		<div id="fh5co-intro" class="fh5co-section">
			<div class="container">
				<div class="row row-bottom-padded-sm">
					<div class="col-md-8 col-md-offset-2 text-center ts-intro">
						<h1>Get In Touch</h1>
						<p class="fh5co-lead">Connect with us</p>
					</div>
				</div>
				<div class="row row-bottom-padded-sm">
					<div class="col-md-6" id="fh5co-content">
						<form action="#" method="post">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" class="form-control" id="name" name="nama">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" name="email">
							</div>
							<div class="form-group">
								<label for="message">Message</label>
								<textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-primary" value="Send Message" name="submit">
							</div>
						</form>
					</div>
					<div class="col-md-4 col-md-push-1 col-sm-12 col-sm-push-0" id="fh5co-sidebar">
						<div class="fh5co-contact-info">
							<h3>Contact Info</h3>
							<address>
								 Vida Bekasi, Jl. Raya Setu Bantar Gebang No 308, Padurenan
							</address>
							<p>Tel: + 1235 2355 98</p>
							<p>Email: info@senimanpangan.com</p>
							<p>Website: <a href="index.php">www.senimanpangan.com</a></p>
						</div>
						
					</div>
				</div>
				

			</div>

		<?php
		$nama=$_POST['nama'];
		$email=$_POST['email'];
		$message=$_POST['message'];
		$tgl=date('Y-m-d');
		if(isset($_POST['submit']))
		{
			$simpan = "insert into pesan (nama, email, pesan, tglPesan) values ('$nama','$email','$message', '$tgl')";
			$sql = mysql_query($simpan);
			//print_r($simpan);
			echo "<script>alert('Data Pesan Berhasil Disimpan!')</script>";
		}	
		?>

		</div>

		<footer id="fh5co-footer" role="contentinfo">
			<div class="container">
				<div class="row row-bottom-padded-sm">
					<div class="col-md-4 col-sm-12">
						<div class="fh5co-footer-widget">
							<h3>About Us</h3>
							<p>Seniman Pangan is a platform launched by javaraindonesia to enable young farmers, fishermen, foragers transform themselves into food entrepreneurs and gain economic opportunities to build rural economy and reclaim dignity of their professions.</p>
						</div>
					</div>
					<div class="col-md-3 col-md-push-1 col-sm-12 col-sm-push-0">
						<div class="fh5co-footer-widget">
							<h3>Quick Links</h3>
							<ul class="fh5co-footer-link">
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php">About Us</a></li>
								<li><a href="activity.php">Our Activity</a></li>
								<li><a href="farm.php">Farmpreneur</a></li>
								<li><a href="contact.php">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-md-push-2 col-sm-12 col-sm-push-0">
						
						<div class="fh5co-footer-widget">
							<h3>Follow us</h3>
							<ul class="fh5co-social">

								<li class="instagram"><a href="https://www.instagram.com/senimanpangan/"><i class="icon-instagram"></i></a></li>
								
							</ul>
						</div>
					</div>
				</div>

				
			</div>
		</footer>
	</div>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-chevron-down"></i></a>
	</div>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>

