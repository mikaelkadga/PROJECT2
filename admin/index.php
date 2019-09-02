
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
	
	<link rel="stylesheet" href="../css/animate.css">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/icomoon.css">

	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">

	<link rel="stylesheet" href="../css/style.css">
	<script src="../js/modernizr-2.6.2.min.js"></script>
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body class="boxed">

	<!-- Loader -->
	<div class="fh5co-loader"></div>

	<div id="wrap">

	<div id="fh5co-page">
		<header id="fh5co-header" role="banner">
			<div class="container">
				<div class="col-md-4">
				<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
				<div id="fh5co-logo"><a href="index.php"><img src="../images/gambar.png" alt="Free HTML5 Website Template" width="30%" height="30%"></a></div>
				</div>

				<div class="col-md-6">
				<p>Selamat datang di halaman admin, anda masuk sebagai : </p>
				</div>

				<div class="col-md-2">
				<?php
				session_start();
				if (ISSET($_SESSION['username']))
				{
				print $_SESSION['username'];
				print "<br><a href=logout.php>Logout</a>";
				}
				else
				header("location: login1.php");
				?>
				</div>

	<br>

		<?php
			include "koneksi.php";
			$nmr_i=1;
		?>

<br>
<br>
<br>
<br>
<center>
<h3>Pesan Pengunjung Website Seniman Pangan</h3>
</center>
<center>
		<table>

			<tr>
				<td colspan="8" align="center">
					<hr>
				</td>
			</tr>		
			<tr align="center">
				<th>No.</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Pesan</th>
			</tr>
				<?php { ?>
				<?php $sqla = mysql_query ("select * from pesan") or die (mysql_error());
						while($rows=mysql_fetch_array($sqla)){  ?>
			<tr>
				<td><center><?php echo $nmr_i; ?></center></td>
				<td><center><?php echo $rows['nama']; ?></center></td>
				<td><center><?php echo $rows['email']; ?></center></td>
				<td><center><?php echo $rows['pesan']; ?></center></td>
			</tr>
				<?php $nmr_i++; } } ?>

		</table>
</center>


		
	</div>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-chevron-down"></i></a>
	</div>	

	
	<script src="../js/jquery.min.js"></script>
	<script src="../js/jquery.easing.1.3.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/main.js"></script>

	</body>
</html>




	

	
 
 
 

				