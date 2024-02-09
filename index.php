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
	<title> ZCube Design - Turnkey Interior Design & Build Firm </title>
	<?php include('header.php');?>
	<!--
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>
	-->
<style>
.nav_height { display:none; } 
.navbar .logo_light { display:block; }
.navbar .logo_dark { display:none; }
.navbar-shrink .jewels_light { display:none; }
.navbar-shrink .jewels_dark { display:block; }
.navbar-shrink .navbar-nav>li>a, .navbar-shrink .navbar-nav>li>p a, .navbar-shrink .navbar-nav>li>p, .navbar-shrink  .account > .dropdown > a   { color:#666 !important;  }

.navbar-nav>li>a { color:#fff; }

@media (max-width: 992px) {
.navbar { background:#fff; margin-top:-2px; position:fixed; padding:5px 0; min-height:70px; display:block;
-webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.25); -moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.25); box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.25); }
.navbar .navbar-nav { margin-top:8px; }
.navbar .logo_light { display:none; }
.navbar .logo_dark { display:block; }
.navbar .navbar-nav>li>a { color:#666 !important; }
}
</style>
	<section id="home">
		<?php include('banner.php');?>
	</section> <!--  -->

	<section id="about" class="cut-sec-1">
		<div class="dots"></div>		
		<div class="container">		
			<div class="row align-items-center">
				<div class="col-12 col-lg-6" data-scrollreveal="enter left over 1.5s">
					<div class="content about_text">
						<h5 class="sub_title orange"> WHO WE ARE </h1>
						<h1> We Are Expert In Space Utilisation.  </h1>
						<p class="d-none"> Z cube Design Pvt. Ltd. is a Turnkey Interior Design & Build firm based in Mumbai. We work with a single minded goal – to create aesthetics spaces that are a joy to live & work in ergonomically. And we do this, by establishing a precise collaboration between design team, execution team and the client. Z cube Design are team of Artisans. Designers. Architects. Interior designers. <br />
							Project management consultants, Planners. Strategists. Experience designers. We are Innovators. Ideators. Creators. Happy to solve on-site problems. And with every project, every client, we seek results. Results that support the Hallmark of our Firm that Is On-Time Completion of Projects.</p>
						<br />
						<p>
							Z Cube Design Pvt Ltd, a prominent Mumbai-based turnkey Interior Design & Build firm, excels in the art of space utilization. 
							Our expertise lies in transforming spaces into functional, aesthetically pleasing environments. With a dedicated team of professionals, 
							we cater to diverse projects, whether residential, commercial, or hospitality. Our turnkey solutions encompass the entire project, from initial 
							concept to final execution, ensuring a seamless experience. We take pride in our ability to harmonize form and function, creating spaces that 
							inspire and elevate lifestyles. At Z Cube Design, we're committed to making your interior design dreams a reality while optimizing every inch 
							of your space.
						</p>
						<a href="/about-us.php" class="btn btn-theme"> Continue Reading <span><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a>
					</div>
				</div>
				<div class="col-12 col-lg-6">
					<div class="about-image-wrap">
						<figure>
							<img src="./assets/images/collarge-images/home-about-us.png" class="img-fluid" alt="about us section image" alt="about us image" />
						</figure>
					</div> 
				</div>
			</div>	
		</div>	
	</section>
 
	<section class="services">	 
		<div class="container">	
			<div class="row justify-content-md-center">
				<div class="col-lg-4 col-md-4 col-sm-4" data-scrollreveal="enter bottom over 1.5s">
					<div class="service-wrap">
						<div class="icon"> 
							<img src="img/icon/price.png" class="img-fluid d-block" alt="price image" /> 
						</div>
						<div class="content">
							<h4> Reasonable Prices </h4>
							<p>Exceptional interior design at affordable prices – style within your reach.</p>
						</div>
					</div>
				</div> 
				<div class="col-lg-4 col-md-4 col-sm-4" data-scrollreveal="enter bottom over 1.5s">
					<div class="service-wrap">
						<div class="icon"> 
							<img src="img/icon/design.png" class="img-fluid d-block" alt="design image" /> 
						</div>
						<div  class="content">
							<h4>Exclusive Design </h4>
							<p>Crafting exclusive interiors tailored to your distinct vision and lifestyle.</p>
						</div>
					</div>
					
				</div> 
				<div class="col-lg-4 col-md-4 col-sm-4" data-scrollreveal="enter bottom over 1.5s">
					<div class="service-wrap">
						<div class="icon"> 
							<img src="img/icon/team.png" class="img-fluid d-block" alt="team image" /> 
						</div> 
						<div  class="content">
							<h4>Professional Team </h4>
							<p>Our skilled team ensures impeccable design and execution for every project.</p>
						</div>
					</div>
					
				</div> 
			</div>
		</div> 
	</section>

	<section class="projects"> 

		<div class="container">
			<div class="entry-title w-60" data-scrollreveal="enter bottom over 1.5s">
				<h1> Featured Projects</h1>
				<p> "Explore our showcase of featured interior design projects. From elegant living rooms to modern kitchens and luxurious bedrooms, 
					our portfolio demonstrates our versatility and commitment to crafting unique spaces. Immerse yourself in a world of design inspiration 
					and discover what we can create for your home. Browse now."
				</p>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row justify-content-md-center">
				<div class="col-lg-12" data-scrollreveal="enter top over 1.5s">
					<div class="owl-carousel" id="owlroot"> 
					<!--
						<div class="item">
							<div class="projects_item">
								<img src="img/projects/slide_1.jpg" class="img-fluid d-block" />
								<div class="hover">
									<a href="#"><i class="ion-android-arrow-forward"></i></a>
									<div class="project_text">
										<h5>Commercial</h5>
										<a href="#"> <h4> Office Space  <span> </span></h4> </a>
									</div>
								</div>
							</div>
						</div>  
						<div class="item">
							<div class="projects_item">
								<img src="img/projects/slide_6.jpg" class="img-fluid d-block" />
								<div class="hover">
									<a href="#"><i class="ion-android-arrow-forward"></i></a>
									<div class="project_text">
										<h5>Commercial</h5>
										<a href="#"> <h4> Office Space  <span> </span></h4> </a>
									</div>
								</div>
							</div>
						</div>  
						<div class="item">
							<div class="projects_item">
								<img src="img/projects/slide_2.jpg" class="img-fluid d-block" />
								<div class="hover">
									<a href="#"><i class="ion-android-arrow-forward"></i></a>
									<div class="project_text">
										<h5>Commercial</h5>
										<a href="#"> <h4> Office Space  <span> </span></h4> </a>
									</div>
								</div>
							</div>
						</div> 
						<div class="item">
							<div class="projects_item">
								<img src="img/projects/slide_3.jpg" class="img-fluid d-block" />
								<div class="hover">
									<a href="#"><i class="ion-android-arrow-forward"></i></a>
									<div class="project_text">
										<h5>Commercial</h5>
										<a href="#"> <h4> Office Space  <span> </span></h4> </a>
									</div>
								</div>
							</div>
						</div>  
						<div class="item">
							<div class="projects_item">
								<img src="img/projects/slide_4.jpg" class="img-fluid d-block" />
								<div class="hover">
									<a href="#"><i class="ion-android-arrow-forward"></i></a>
									<div class="project_text">
										<h5>Commercial</h5>
										<a href="#"> <h4> Office Space  <span> </span></h4> </a>
									</div>
								</div>
							</div>
						</div>  
						<div class="item">
							<div class="projects_item">
								<img src="img/projects/slide_5.jpg" class="img-fluid d-block" />
								<div class="hover">
									<a href="#"><i class="ion-android-arrow-forward"></i></a>
									<div class="project_text">
										<h5>Commercial</h5>
										<a href="#"> <h4> Office Space  <span> </span></h4> </a>
									</div>
								</div>
							</div>
						</div>
						-->
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="our-client">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12" data-scrollreveal="enter top over 1.5s">
					<div class="contain">
						<div id="our-client-slide" class="owl-carousel owl-theme">

							<div class="item">
								<div class="desk-v">
									<figure>
										<img src="./assets/images/client-logo/logo-1.png" alt="sabyasachi logo">
									</figure>
								</div>

								<div class="mob-v">
									<figure>
										<img src="./assets/images/client-logo/logo-1.png" alt="sabyasachi logo">
									</figure>
									<figure>
										<img src="./assets/images/client-logo/logo-2.png" alt="sabyasachi logo">
									</figure>
								</div>
							</div>

							<div class="item">
								<div class="desk-v">
									<figure>
										<img src="./assets/images/client-logo/logo-2.png" alt="manish malhotra">
									</figure>
								</div>
								<div class="mob-v">
									<figure>
										<img src="./assets/images/client-logo/logo-3.png" alt="247 park">
									</figure>
									<figure>
										<img src="./assets/images/client-logo/logo-4.png" alt="al amal hospital">
									</figure>
								</div>
								
							</div>

							<div class="item">
								<div class="desk-v">
									<figure>
										<img src="./assets/images/client-logo/logo-3.png" alt="247 park">
									</figure>
								</div>
								<div class="mob-v">
									<figure>
										<img src="./assets/images/client-logo/logo-5.png" alt="annet">
									</figure>
									<figure>
										<img src="./assets/images/client-logo/logo-6.png" alt="asianpaint">
									</figure>
								</div>
								
							</div>

							<div class="item">
								<div class="desk-v">
									<figure>
										<img src="./assets/images/client-logo/logo-4.png" alt="al amal hospital">
									</figure>
								</div>
								<div class="mob-v">
									<figure>
										<img src="./assets/images/client-logo/logo-7.png" alt="apollo">
									</figure>
									<figure>
										<img src="./assets/images/client-logo/logo-8.png" alt="asianpaint">
									</figure>
								</div>
							</div>

							<div class="item">
								<div class="desk-v">
									<figure>
										<img src="./assets/images/client-logo/logo-5.png" alt="annet">
									</figure>
								</div>
								<div class="mob-v">
									<figure>
										<img src="./assets/images/client-logo/logo-9.png" alt="the beer cafe">
									</figure>
									<figure>
										<img src="./assets/images/client-logo/logo-10.png" alt="cbre">
									</figure>
								</div>
								
							</div>

							<div class="item">
								<div class="desk-v">
									<figure>
										<img src="./assets/images/client-logo/logo-6.png" alt="asianpaint">
									</figure>
								</div>
								<div class="mob-v">
									<figure>
										<img src="./assets/images/client-logo/logo-11.png" alt="chhatrapati shivaji internation airport">
									</figure>
									<figure>
										<img src="./assets/images/client-logo/logo-12.png" alt="doctor agarwal clinic">
									</figure>
								</div>
								
							</div>

							<div class="item">
								<div class="desk-v">
									<figure>
										<img src="./assets/images/client-logo/logo-7.png" alt="apollo">
									</figure>
								</div>
								<div class="mob-v">
									<figure>
										<img src="./assets/images/client-logo/logo-13.png" alt=" deutsche Bank">
									</figure>
									<figure>
										<img src="./assets/images/client-logo/logo-14.png" alt="fortune">
									</figure>
								</div>
								
							</div>

							<div class="item">
								<div class="desk-v">
									<figure>
										<img src="./assets/images/client-logo/logo-8.png" alt="asianpaint">
									</figure>
								</div>
								<div class="mob-v">
									<figure>
										<img src="./assets/images/client-logo/logo-15.png" alt="future group">
									</figure>
									<figure>
										<img src="./assets/images/client-logo/logo-16.png" alt="hh global">
									</figure>
								</div>
							</div>

							<div class="item">
								<div class="desk-v">
									<figure>
										<img src="./assets/images/client-logo/logo-9.png" alt="the beer cafe">
									</figure>
								</div>
								<div class="mob-v">
									<figure>
										<img src="./assets/images/client-logo/logo-17.png" alt="income taxt department">
									</figure>
									<figure>
										<img src="./assets/images/client-logo/logo-18.png" alt="indoco">
									</figure>
								</div>
							</div>

							<div class="item">
								<div class="desk-v">
									<figure>
										<img src="./assets/images/client-logo/logo-10.png" alt="cbre">
									</figure>
								</div>
								<div class="mob-v">
									<figure>
										<img src="./assets/images/client-logo/logo-19.png" alt="indo count">
									</figure>
									<figure>
										<img src="./assets/images/client-logo/logo-20.png" alt="jcb">
									</figure>
								</div>
								
							</div>

							<div class="item">
								<div class="desk-v">
									<figure>
										<img src="./assets/images/client-logo/logo-11.png" alt="chhatrapati shivaji internation airport">
									</figure>
								</div>
								<div class="mob-v">
									<figure>
										<img src="./assets/images/client-logo/logo-21.png" alt="lion international">
									</figure>
									<figure>
										<img src="./assets/images/client-logo/logo-22.png" alt="lupi">
									</figure>
								</div>
							</div>

							<div class="item">
								<div class="desk-v">
									<figure>
										<img src="./assets/images/client-logo/logo-12.png" alt="doctor agarwal clinic">
									</figure>
								</div>
								<div class="mob-v">
									<figure>
										<img src="./assets/images/client-logo/logo-23.png" alt="mccann worldgroup">
									</figure>
									<figure>
										<img src="./assets/images/client-logo/logo-24.png" alt="megha property">
									</figure>
								</div>
							</div>

							<div class="item">
								<div class="desk-v">
									<figure>
										<img src="./assets/images/client-logo/logo-13.png" alt=" deutsche Bank">
									</figure>
								</div>
								<div class="mob-v">
									<figure>
										<img src="./assets/images/client-logo/logo-25.png" alt="metro shoes">
									</figure>
									<figure>
										<img src="./assets/images/client-logo/logo-26.png" alt="moneygram">
									</figure>
								</div>
							</div>

							<div class="item">
								<div class="desk-v">
									<figure>
										<img src="./assets/images/client-logo/logo-14.png" alt="fortune">
									</figure>
								</div>
								<div class="mob-v">
									<figure>
										<img src="./assets/images/client-logo/logo-27.png" alt="mumbai port trust">
									</figure>
									<figure>
										<img src="./assets/images/client-logo/logo-28.png" alt="newquest">
									</figure>
								</div>
								
							</div>

							<div class="item">
								<div class="desk-v">
									<figure>
										<img src="./assets/images/client-logo/logo-15.png" alt="future group">
									</figure>
								</div>
								<div class="mob-v">
									<figure>
										<img src="./assets/images/client-logo/logo-29.png" alt="nielsen">
									</figure>
									<figure>
										<img src="./assets/images/client-logo/logo-30.png" alt="nsw goverment">
									</figure>
								</div>
							</div>



							

							<div class="item">
								<div class="desk-v">
									<figure>
										<img src="./assets/images/client-logo/logo-16.png" alt="hh global">
									</figure>
								</div>
								<div class="mob-v">
									<figure>
										<img src="./assets/images/client-logo/logo-31.png" alt="hh global">
									</figure>
									<figure>
										<img src="./assets/images/client-logo/logo-32.png" alt="hh global">
									</figure>
								</div>
							</div>

							<div class="item">
								<div class="desk-v">
									<figure>
										<img src="./assets/images/client-logo/logo-17.png" alt="income taxt department">
									</figure>
								</div>
								<div class="mob-v">
									<figure>
										<img src="./assets/images/client-logo/logo-33.png" alt="hh global">
									</figure>
									<figure>
										<img src="./assets/images/client-logo/logo-34.png" alt="hh global">
									</figure>
								</div>
							</div>

							<div class="item">
								<div class="desk-v">
									<figure>
										<img src="./assets/images/client-logo/logo-18.png" alt="indoco">
									</figure>
								</div>
								<div class="mob-v">
									<figure>
										<img src="./assets/images/client-logo/logo-35.png" alt="hh global">
									</figure>
									<figure>
										<img src="./assets/images/client-logo/logo-36.png" alt="hh global">
									</figure>
								</div>
							</div>

							<div class="item">
								<div class="desk-v">
									<figure>
										<img src="./assets/images/client-logo/logo-19.png" alt="indo count">
									</figure>
								</div>
								<div class="mob-v">
									<figure>
										<img src="./assets/images/client-logo/logo-37.png" alt="hh global">
									</figure>
									<figure>
										<img src="./assets/images/client-logo/logo-38.png" alt="hh global">
									</figure>
								</div>
							</div>

							<div class="item">
								<div class="desk-v">
									<figure>
										<img src="./assets/images/client-logo/logo-20.png" alt="jcb">
									</figure>
								</div>
								<div class="mob-v">
									<figure>
										<img src="./assets/images/client-logo/logo-39.png" alt="hh global">
									</figure>
									<figure>
										<img src="./assets/images/client-logo/logo-40.png" alt="hh global">
									</figure>
								</div>
							</div>

							<div class="item">
								<div class="desk-v">
									<figure>
										<img src="./assets/images/client-logo/logo-21.png" alt="lion international">
									</figure>
								</div>
								<div class="mob-v">
									<figure>
										<img src="./assets/images/client-logo/logo-41.png" alt="hh global">
									</figure>
									<figure>
										<img src="./assets/images/client-logo/logo-42.png" alt="hh global">
									</figure>
								</div>
							</div>

							<div class="item">
								<div class="desk-v">
									<figure>
										<img src="./assets/images/client-logo/logo-22.png" alt="lupi">
									</figure>
								</div>
								<div class="mob-v">
									<figure>
										<img src="./assets/images/client-logo/logo-43.png" alt="hh global">
									</figure>
									<figure>
										<img src="./assets/images/client-logo/logo-44.png" alt="hh global">
									</figure>
								</div>
							</div>
							
							<div class="item">
								<div class="desk-v">
									<figure>
										<img src="./assets/images/client-logo/logo-23.png" alt="mccann worldgroup">
									</figure>
								</div>
								<div class="mob-v">
									<figure>
										<img src="./assets/images/client-logo/logo-45.png" alt="hh global">
									</figure>
									<figure>
										<img src="./assets/images/client-logo/logo-46.png" alt="hh global">
									</figure>
								</div>
							</div>

							<div class="item">
								<div class="desk-v">
									<figure>
										<img src="./assets/images/client-logo/logo-24.png" alt="megha property">
									</figure>
								</div>
								<div class="mob-v">
									<figure>
										<img src="./assets/images/client-logo/logo-47.png" alt="hh global">
									</figure>
									<figure>
										<img src="./assets/images/client-logo/logo-48.png" alt="hh global">
									</figure>
								</div>
							</div>

							<div class="item">
								<div class="desk-v">
									<figure>
										<img src="./assets/images/client-logo/logo-25.png" alt="metro shoes">
									</figure>
								</div>
								<div class="mob-v">
									<figure>
										<img src="./assets/images/client-logo/logo-49.png" alt="hh global">
									</figure>
									<figure>
										<img src="./assets/images/client-logo/logo-50.png" alt="hh global">
									</figure>
								</div>
							</div>

							<div class="item">
								<div class="desk-v">
									<figure>
										<img src="./assets/images/client-logo/logo-26.png" alt="moneygram">
									</figure>
								</div>
								<div class="mob-v">
									<figure>
										<img src="./assets/images/client-logo/logo-51.png" alt="hh global">
									</figure>
									<figure>
										<img src="./assets/images/client-logo/logo-52.png" alt="hh global">
									</figure>
								</div>
							</div>

							<div class="item">
								<div class="desk-v">
									<figure>
										<img src="./assets/images/client-logo/logo-27.png" alt="mumbai port trust">
									</figure>
								</div>
								<div class="mob-v">
									<figure>
										<img src="./assets/images/client-logo/logo-53.png" alt="hh global">
									</figure>
									<figure>
										<img src="./assets/images/client-logo/logo-54.png" alt="hh global">
									</figure>
								</div>
							</div>

							<div class="item">
								<div class="desk-v">
									<figure>
										<img src="./assets/images/client-logo/logo-28.png" alt="newquest">
									</figure>
								</div>
								<div class="mob-v">
									<figure>
										<img src="./assets/images/client-logo/logo-1.png" alt="sabyasachi logo">
									</figure>
									<figure>
										<img src="./assets/images/client-logo/logo-2.png" alt="sabyasachi logo">
									</figure>
								</div>
							</div>

							<div class="item">
								<div class="desk-v">
									<figure>
										<img src="./assets/images/client-logo/logo-29.png" alt="nielsen">
									</figure>
								</div>
								<div class="mob-v">
									<figure>
										<img src="./assets/images/client-logo/logo-3.png" alt="247 park">
									</figure>
									<figure>
										<img src="./assets/images/client-logo/logo-4.png" alt="al amal hospital">
									</figure>
								</div>
							</div>

							<div class="item">
								<div class="desk-v">
									<figure>
										<img src="./assets/images/client-logo/logo-30.png" alt="nsw goverment">
									</figure>
								</div>
								<div class="mob-v">
									<figure>
										<img src="./assets/images/client-logo/logo-5.png" alt="annet">
									</figure>
									<figure>
										<img src="./assets/images/client-logo/logo-6.png" alt="asianpaint">
									</figure>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section id="how_we_work">
		<div class="dots"></div>		
		<div class="container">		
			<div class="row justify-content-md-center">
				<div class="col-12 col-lg-3" data-scrollreveal="enter left over 1.5s">
					<h5 class="sub_title orange"> HOW WE WORK </h1>
					<h1> 3 Easy steps to get interior design </h1>
					<p> "Discover our process: Consult, Design, Transform. Your dream interior awaits!"</p> 
				</div> 
				<div class="col-12 col-lg-3 col-md-4">
					<div class="thumb"> 
						<h1> 01 </h1>
						<h3> Consultation </h3>
						<p>Unlock your dream space with a tailored interior design consultation.</p> 
					</div> 
				</div> 
				<div class="col-12 col-lg-3 col-md-4">
					<div class="thumb"> 
						<h1> 02 </h1>
						<h3> Design & Planning </h3>
						<p> Watch your ideas come to life with our professional designs.</p> 
					</div> 
				</div> 
				<div class="col-12 col-lg-3 col-md-4">
					<div class="thumb"> 
						<h1> 03 </h1>
						<h3> Execution </h3>
						<p> Sit back as we bring your dream interior to reality. Start today!</p> 
					</div> 
				</div> 
			</div>	
		</div>	
	</section>

	<div class="our-blog home">
        <div class="container">

			<div class="entry-title">
				<h2>From Concept to Creation: Our Interior Design Blog</h2>
			</div>

            <div class="blog-col-wrap">

                <div class="blog-wrap" data-scrollreveal="enter bottom over 1.5s" data-sr-init="true" data-sr-complete="true">
                    <a href="blog-post-1.php" target="_blank">
                        <div class="cust-blog-img">
                            <figure><img src="./assets/images/project-categories/commercial/deutsche-bank/img-6.jpg" alt="blog post image"></figure>
                        </div>
                        <div class="cust-blog-content">
                            <div class="cust-date-categories">
                                <span>Sales and Marketing</span>
                                <p>02-10-2023</p>
                            </div>
                            <h4>Transforming Spaces: A Glimpse into Our Interior Design Excellence</h4>
                            <p>
                                Welcome to Z-Cube Design, where we turn ordinary spaces into extraordinary experiences. 
                                In this blog post, we invite you to embark on a journey through the artistry of interior design, exploring 
                                the transformative power of our creative solutions.
                            </p>
                        </div>
                    </a>
                </div>

                <div class="blog-wrap" data-scrollreveal="enter bottom over 1.5s" data-sr-init="true" data-sr-complete="true">
                    <a href="blog-post-2.php" target="_blank">
                        <div class="cust-blog-img">
                            <figure><img src="./assets/images/project-categories/health-care/deh-kolkata/img-9.jpeg" alt="blog post image"></figure>
                        </div>
                        <div class="cust-blog-content">
                            <div class="cust-date-categories">
                                <span>Sales and Marketing</span>
                                <p>02-10-2023</p>
                            </div>
                            <h4>The Art of Fusion: Blending Styles for Timeless Elegance</h4>
                            <p>
                                At Z-Cube Design, we believe in the power of fusion, where diverse styles come 
                                together to create spaces that transcend trends and stand the test of time. 
                            </p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
	
	<section id="about">
		<div class="dots"></div>		
		<div class="container">		
			<div class="row justify-content-md-center">
				<div class="col-12 col-lg-8 text-center" data-scrollreveal="enter left over 1.5s">
					<h5 class="sub_title orange"> YOU DREAM IT, WE DESIGN IT</h1>
					<h1> We can build you the Furniture of your dreams  </h1>
					<br />
					<p>
						"Turn your dream Furniture into a reality with us! Our expert team is ready to create the perfect Furniture space tailored to your style and needs. 
						From design to installation, we're here to make your culinary dreams come true. Let's build the Furniture you've always wanted."
					</p>
					<br />
					<a href="/contact-us.php" class="btn btn-theme"> SCHEDULE A CHAT  <span><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a>
				</div> 
			</div>	
		</div>	
	</section>
 
<?php include('footer.php');?>
 
<!--
<script>
    $(document).ready(function () {
        var owl = $("#owlroot");
        owl.owlCarousel({
            autoPlay: 3000,
            items: 4,
            pagination: true,
            stopOnHover: true,
            navigation: false,
            itemsDesktop: [1280, 4],
            itemsDesktopSmall: [979, 3],
            itemsTablet: [600, 3], //3 items between 600 and 0
            itemsMobile: [480, 1], // itemsMobile disabled - inherit from itemsTablet option			
        });
        // Custom Navigation Events
        $(".next").click(function () {
            owl.trigger('owl.next');
        })
        $(".prev").click(function () {
            owl.trigger('owl.prev');
        })
    });
</script>
-->