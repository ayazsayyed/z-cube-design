
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">   

	<link rel="icon" type="image/png" href="img/favicon.ico"/>
    <link rel="apple-touch-icon" href="img/favicon.ico" />
	
	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css?family=Heebo:400,500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500&family=Space+Grotesk:wght@300;400;500;600&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/vanilla-tabs.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/vanilla-tabs.min.css"/>
	
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css?v=1.1" rel="stylesheet">
	<link href="assets/css/stylenew.css?v=1.1" rel="stylesheet">
	
	<script src="js/jquery-1.11.0.js"></script>

</head>

<body id="page-top"> 
	
	<header class="header_menu_area white_menu">

		<div class="top_header">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-9 col-md-8">
						<div class="contact-us">
							<a href="tel:02248251313"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp; Call Us: 022 - 48251313</a> 
							<a href="mailto:info@zcubedesign.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> &nbsp; Email : info@zcubedesign.com</a>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 social text-right">
						<a href="assets/pdf/ZDPL-Work-Profile.pdf" download="ZDPL-Work-Profile.pdf" class="btn btn-theme">download portfolio <span><i class="fa fa-download" aria-hidden="true"></i></span></a>
						<!-- <a href=""> <i class="fa fa-facebook" aria-hidden="true"></i> </a>
						<a href="#"> <i class="fa fa-pinterest-p" aria-hidden="true"></i> </a> 
						<a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i> </a>  -->
					</div>
				</div>
			</div>
		</div>	

		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand logo" href="index.php">
					<img alt="" src="img/logo_w.png" class="img-fluid" alt="z cube design logo" />
					<img alt="" src="./assets/images/sticky-logo.png" class="logo_dark_1 img-fluid" alt="z cube design logo" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
				<div class="collapse navbar-collapse" style="position:relative;" id="navbarSupportedContent">
					<ul class="nav navbar-nav ml-auto text-right">
						<?php include('nav.php'); ?>
					</ul>
				</div>
			</nav>
		</div>
		
	</header>

	<header class="full_header content-white mobile_menu">
		<div class="float-left">
			<a href="index.php" class="logo">
				<img alt="" src="img/logo_w.png" class="img-fluid" alt="z cube design logo" />
				<img alt="" src="./assets/images/sticky-logo.png" class="img-fluid" alt="z cube design logo" />
			</a>
		</div>
		<div class="float-right">
			<div class="bar_menu">
				<i class="lnr lnr-menu"></i>
			</div>
		</div>
	</header>

	<div class="click-capture"></div>

	<div class="side_menu">
		<span class="close-menu lnr lnr-cross right-boxed"></span>
		<ul class="menu-list right-boxed ">
			<?php include('nav.php'); ?>
		</ul>
		<div class="menu-footer right-boxed">
			<div class="social-list">
				<a class="icon ion-social-facebook" target="_blank" href="https://www.facebook.com/conceptanddesign.co"> </a>
				<a class="icon ion-social-instagram" target="_blank" href="https://www.instagram.com/zcubedesignpvtltd"> </a>
			</div>
			<div class="copy"> &copy; <?php echo date("Y"); ?> ZCube Design. All Rights Reserved </div>
		</div>
	</div>
	