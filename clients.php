<?php include('mailer.php');?>
<?php
$page = basename($_SERVER['SCRIPT_NAME']);
$page = str_replace('','',$page);
$page = str_replace('.php','',$page);

$page_head = $page;
$page_head = str_replace('_',' ',$page_head);
$page_head =str_replace('.php','',$page_head);
$page_head = ucwords($page_head);
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en"><!--<![endif]-->
<head>
	<title> Clients | ZCube Design - Turnkey Interior Design & Build Firm  </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
	<?php include('header.php');?>

</head>
<body>
	<div class="inner_banner" style="background:url(build/img/innerbanner/contact.jpg) no-repeat">
		<div class="container">		
			<div class="row">
				<div class="col-lg-12">
					<p> Our Clients </p>
					<h3> Clients </h3>
				</div>
			</div>
		</div>
		<img src="build/img/innerbanner/contact.jpg" class="img-fluid" alt="banner image" />
	</div>

	<div id="breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/"><i class="fa fa-home"></i> Home</a></li>
						<li class="breadcrumb-item"><a href="#">Clients</a></li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<section class="some-f-client">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title">
						<h2 class="text-center">Brands, That Trusts.</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6 col-md-4 col-lg-4">
					<div class="f-client">
						<figure>
							<img src="./assets/images/client-logo/logo-8.webp" alt="asianpaint"></figure>
					</div>
				</div>
				<div class="col-6 col-md-4 col-lg-4">
					<div class="f-client">
						<figure>
							<img src="./assets/images/client-logo/logo-57.webp" alt="relaince industries limited"></figure>
					</div>
				</div>
				<div class="col-6 col-md-4 col-lg-4">
					<div class="f-client">
						<figure>
							<img src="./assets/images/client-logo/logo-1.webp" alt="sabyasachi logo"></figure>
					</div>
				</div>
				<div class="col-6 col-md-4 col-lg-4">
					<div class="f-client">
						<figure>
							<img src="./assets/images/client-logo/logo-2.webp" alt="manish malhotra"></figure>
					</div>
				</div>

				<div class="col-6 col-md-4 col-lg-4">
					<div class="f-client">
						<figure>
							<img src="./assets/images/client-logo/logo-58.webp" alt="dr agarwal eye hospital"></figure>
					</div>
				</div>

				<div class="col-6 col-md-4 col-lg-4">
					<div class="f-client">
						<figure>
							<img src="./assets/images/client-logo/logo-6.webp" alt="asian paint "></figure>
					</div>
				</div>

			</div>
		</div>
	</section>
	
	<section class="" id="clients"> 	
		<div class="container">
			<div class="row justify-content-md-center align-items-center">

				<div class="col-12 col-lg-4">
					<div class="title">
						<h2>Our Clients</h2>
					</div>
					<div class="content">
						<p>"At Z Cube Design, our clients are at the heart of everything we do. We take immense pride in fostering strong partnerships that drive mutual success. With a commitment to understanding their unique needs, we collaborate closely to deliver tailored solutions that exceed expectations. Our diverse portfolio spans across industries, showcasing our adaptability and dedication to client satisfaction. Join our network of satisfied clients and experience the unparalleled service and expertise that define us."</p>
					</div>
				</div>

				<div class="col-12 col-lg-8">
					<div class="owl-carousel owl-theme our-clients-p slick-slider">
						<div class="item">
							<div class="itam-wrap">
								<figure>
									<img src="./assets/images/client-logo/logo-1.webp" alt="sabyasachi logo">
								</figure>
								<figure>
									<img src="./assets/images/client-logo/logo-28.webp" alt="newquest">
								</figure>
							</div>
						</div>
						<div class="item zoom">
							<div class="itam-wrap">
								<figure>
									<img src="./assets/images/client-logo/logo-2.webp" alt="manish malhotra">
								</figure>
								<figure>
									<img src="./assets/images/client-logo/logo-29.webp" alt="nielsen">
								</figure>
							</div>
						</div>

						<div class="item">
							<div class="itam-wrap">
								<figure>
									<img src="./assets/images/client-logo/logo-3.webp" alt="247 park">
								</figure>
								<figure>
									<img src="./assets/images/client-logo/logo-30.webp" alt="nsw goverment">
								</figure>
							</div>
						</div>

						<div class="item">
							<div class="itam-wrap">
								<figure>
									<img src="./assets/images/client-logo/logo-4.webp" alt="al amal hospital">
								</figure>
								<figure>
									<img src="./assets/images/client-logo/logo-31.webp" alt="panache">
								</figure>
							</div>
						</div>

						<div class="item">
							<div class="itam-wrap">
								<figure>
									<img src="./assets/images/client-logo/logo-5.webp" alt="annet">
								</figure>
								<figure>
									<img src="./assets/images/client-logo/logo-32.webp" alt="prudental">
								</figure>
							</div>
						</div>


						<div class="item">
							<div class="itam-wrap">
								<figure>
									<img src="./assets/images/client-logo/logo-6.webp" alt="asianpaint">
								</figure>
								<figure>
									<img src="./assets/images/client-logo/logo-33.webp" alt="qantas">
								</figure>
							</div>
						</div>

						<div class="item">
							<div class="itam-wrap">
								<figure>
									<img src="./assets/images/client-logo/logo-7.webp" alt="apollo">
								</figure>
								<figure>
									<img src="./assets/images/client-logo/logo-34.webp" alt="rakshri">
								</figure>
							</div>
						</div>

						<div class="item">
							<div class="itam-wrap">
								<figure>
									<img src="./assets/images/client-logo/logo-8.webp" alt="asianpaint">
								</figure>
								<figure>
									<img src="./assets/images/client-logo/logo-35.webp" alt="rajshri">
								</figure>
							</div>
						</div>

						<div class="item">
							<div class="itam-wrap">
								<figure>
									<img src="./assets/images/client-logo/logo-9.webp" alt="the beer cafe">
								</figure>
								<figure>
									<img src="./assets/images/client-logo/logo-36.webp" alt="real image">
								</figure>
							</div>
						</div>

						<div class="item">
							<div class="itam-wrap">
								<figure>
									<img src="./assets/images/client-logo/logo-10.webp" alt="cbre">
								</figure>
								<figure>
									<img src="./assets/images/client-logo/logo-37.webp" alt="relaince samrt">
								</figure>
							</div>
						</div>


						<div class="item">
							<div class="itam-wrap">
								<figure>
									<img src="./assets/images/client-logo/logo-11.webp" alt="chhatrapati shivaji internation airport">
								</figure>
								<figure>
									<img src="./assets/images/client-logo/logo-38.webp" alt="rbs">
								</figure>
							</div>
						</div>
						<div class="item zoom">
							<div class="itam-wrap">
								<figure>
									<img src="./assets/images/client-logo/logo-12.webp" alt="doctor agarwal clinic">
								</figure>
								<figure>
									<img src="./assets/images/client-logo/logo-39.webp" alt="royal bank scotland">
								</figure>
							</div>
						</div>

						<div class="item">
							<div class="itam-wrap">
								<figure>
									<img src="./assets/images/client-logo/logo-13.webp" alt=" deutsche Bank">
								</figure>
								<figure>
									<img src="./assets/images/client-logo/logo-40.webp" alt="royal canin">
								</figure>
							</div>
						</div>

						<div class="item">
							<div class="itam-wrap">
								<figure>
									<img src="./assets/images/client-logo/logo-14.webp" alt="fortune">
								</figure>
								<figure>
									<img src="./assets/images/client-logo/logo-41.webp" alt="sahara">
								</figure>
							</div>
						</div>

						<div class="item">
							<div class="itam-wrap">
								<figure>
									<img src="./assets/images/client-logo/logo-15.webp" alt="future group">
								</figure>
								<figure>
									<img src="./assets/images/client-logo/logo-42.webp" alt="square yards">
								</figure>
							</div>
						</div>


						<div class="item">
							<div class="itam-wrap">
								<figure>
									<img src="./assets/images/client-logo/logo-16.webp"  alt="hh global">
								</figure>
								<figure>
									<img src="./assets/images/client-logo/logo-43.webp" alt="sva">
								</figure>
							</div>
						</div>

						<div class="item">
							<div class="itam-wrap">
								<figure>
									<img src="./assets/images/client-logo/logo-17.webp" alt="income taxt department">
								</figure>
								<figure>
									<img src="./assets/images/client-logo/logo-44.webp" alt="tema">
								</figure>
							</div>
						</div>

						<div class="item">
							<div class="itam-wrap">
								<figure>
									<img src="./assets/images/client-logo/logo-18.webp" alt="indoco">
								</figure>
								<figure>
									<img src="./assets/images/client-logo/logo-45.webp" alt="teva">
								</figure>
							</div>
						</div>

						<div class="item">
							<div class="itam-wrap">
								<figure>
									<img src="./assets/images/client-logo/logo-19.webp" alt="indo count">
								</figure>
								<figure>
									<img src="./assets/images/client-logo/logo-46.webp" alt="the commomwealth">
								</figure>
							</div>
						</div>

						<div class="item">
							<div class="itam-wrap">
								<figure>
									<img src="./assets/images/client-logo/logo-20.webp" alt="jcb">
								</figure>
								<figure>
									<img src="./assets/images/client-logo/logo-47.webp" alt="the spara kitchen">
								</figure>
							</div>
						</div>

						<div class="item">
							<div class="itam-wrap">
								<figure>
									<img src="./assets/images/client-logo/logo-21.webp" alt="lion international">
								</figure>
								<figure>
									<img src="./assets/images/client-logo/logo-48.webp" alt="log">
								</figure>
							</div>
						</div>
						<div class="item zoom">
							<div class="itam-wrap">
								<figure>
									<img src="./assets/images/client-logo/logo-22.webp" alt="lupi">
								</figure>
								<figure>
									<img src="./assets/images/client-logo/logo-49.webp" alt="opulentus">
								</figure>
							</div>
						</div>

						<div class="item">
							<div class="itam-wrap">
								<figure>
									<img src="./assets/images/client-logo/logo-23.webp" alt="mccann worldgroup">
								</figure>
								<figure>
									<img src="./assets/images/client-logo/logo-50.webp" alt="tourism australia">
								</figure>
							</div>
						</div>

						<div class="item">
							<div class="itam-wrap">
								<figure>
									<img src="./assets/images/client-logo/logo-24.webp" alt="megha property">
								</figure>
								<figure>
									<img src="./assets/images/client-logo/logo-51.webp" alt="victoria">
								</figure>
							</div>
						</div>

						<div class="item">
							<div class="itam-wrap">
								<figure>
									<img src="./assets/images/client-logo/logo-25.webp" alt="metro shoes">
								</figure>
								<figure>
									<img src="./assets/images/client-logo/logo-52.webp" alt="walsone">
								</figure>
							</div>
						</div>


						<div class="item">
							<div class="itam-wrap">
								<figure>
									<img src="./assets/images/client-logo/logo-26.webp" alt="moneygram">
								</figure>
								<figure>
									<img src="./assets/images/client-logo/logo-53.webp" alt="wework">
								</figure>
							</div>
						</div>

						<div class="item">
							<div class="itam-wrap">
								<figure>
									<img src="./assets/images/client-logo/logo-27.webp" alt="mumbai port trust">
								</figure>
								<figure>
									<img src="./assets/images/client-logo/logo-54.webp" alt="wild">
								</figure>
							</div>
						</div>
						
					</div>
				</div>
				
			</div>  
		</div> <!-- Container -->		
	</section> <!--  -->
	
	
<?php include('footer.php');?>
