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
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<?php include('header.php');?>
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
	</section>

	<section id="about" class="cut-sec-1">
		<div class="dots"></div>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12 col-lg-6" data-scrollreveal="enter left over 1.5s">
					<div class="content about_text">
						<h5 class="sub_title orange"> WHO WE ARE </h5>
						<h1> We Are Expert In Space Utilisation.  </h1>
						<p class="d-none"> Z cube Design Pvt. Ltd. is a Turnkey Interior Design & Build firm based in Mumbai. We work with a single minded goal – to create aesthetics spaces that are a joy to live & work in ergonomically. And we do this, by establishing a precise collaboration between design team, execution team and the client. Z cube Design are team of Artisans. Designers. Architects. Interior designers.
							<br /> Project management consultants, Planners. Strategists. Experience designers. We are Innovators. Ideators. Creators. Happy to solve on-site problems. And with every project, every client, we seek results. Results that support the Hallmark of our Firm that Is On-Time Completion of Projects.</p>
						<br />
						<p> Z Cube Design Pvt Ltd, a prominent Mumbai-based turnkey Interior Design & Build firm, excels in the art of space utilization. Our expertise lies in transforming spaces into functional, aesthetically pleasing environments. With a dedicated team of professionals, we cater to diverse projects, whether residential, commercial, or hospitality. Our turnkey solutions encompass the entire project, from initial concept to final execution, ensuring a seamless experience. We take pride in our ability to harmonize form and function, creating spaces that inspire and elevate lifestyles. At Z Cube Design, we're committed to making your interior design dreams a reality while optimizing every inch of your space. </p> 
						<a href="/about-us.php" class="btn btn-theme" aria-label="continue reading"> Continue Reading <span><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> </div>
				</div>
				<div class="col-12 col-lg-6">
					<div class="about-image-wrap">
						<figure> <img src="./assets/images/collarge-images/home-about-us.webp" class="img-fluid" alt="about us section image" alt="about us image" /> </figure>
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
						<div class="icon"> <img src="build/img/icon/price.png" class="img-fluid d-block" alt="Reasonable Prices" /> </div>
						<div class="content">
							<h4> Reasonable Prices </h4>
							<p>Exceptional interior design at affordable prices – style within your reach.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4" data-scrollreveal="enter bottom over 1.5s">
					<div class="service-wrap">
						<div class="icon"> <img src="build/img/icon/price.png" class="img-fluid d-block" alt="Exclusive Design" /> </div>
						<div class="content">
							<h4>Exclusive Design </h4>
							<p>Crafting exclusive interiors tailored to your distinct vision and lifestyle.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4" data-scrollreveal="enter bottom over 1.5s">
					<div class="service-wrap">
						<div class="icon"> <img src="build/img/icon/price.png" class="img-fluid d-block" alt="Professional Team" /> </div>
						<div class="content">
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
				<p> "Explore our showcase of featured interior design projects. From elegant living rooms to modern kitchens and luxurious bedrooms, our portfolio demonstrates our versatility and commitment to crafting unique spaces. Immerse yourself in a world of design inspiration and discover what we can create for your home. Browse now." </p>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row justify-content-md-center">
				<div class="col-lg-12" data-scrollreveal="enter top over 1.5s">

					<div class="slider featured-projects" id="owlroot">
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
						<div class="owl-item slider our-clients">
							<div class="item">
								<div class="desk-v">
									<figure> <img src="./assets/images/client-logo/logo-1.webp" alt="sabyasachi logo"> </figure>
								</div>
								<div class="mob-v">
									<figure> <img src="./assets/images/client-logo/logo-1.webp" alt="sabyasachi logo"> </figure>
									<figure> <img src="./assets/images/client-logo/logo-2.webp" alt="sabyasachi logo"> </figure>
								</div>
							</div>
							<div class="item">
								<div class="desk-v">
									<figure> <img src="./assets/images/client-logo/logo-2.webp" alt="manish malhotra"> </figure>
								</div>
								<div class="mob-v">
									<figure> <img src="./assets/images/client-logo/logo-3.webp" alt="247 park"> </figure>
									<figure> <img src="./assets/images/client-logo/logo-4.webp" alt="al amal hospital"> </figure>
								</div>
							</div>
							<div class="item">
								<div class="desk-v">
									<figure> <img src="./assets/images/client-logo/logo-3.webp" alt="247 park"> </figure>
								</div>
								<div class="mob-v">
									<figure> <img src="./assets/images/client-logo/logo-5.webp" alt="annet"> </figure>
									<figure> <img src="./assets/images/client-logo/logo-6.webp" alt="asianpaint"> </figure>
								</div>
							</div>
							<div class="item">
								<div class="desk-v">
									<figure> <img src="./assets/images/client-logo/logo-4.webp" alt="al amal hospital"> </figure>
								</div>
								<div class="mob-v">
									<figure> <img src="./assets/images/client-logo/logo-7.webp" alt="apollo"> </figure>
									<figure> <img src="./assets/images/client-logo/logo-8.webp" alt="asianpaint"> </figure>
								</div>
							</div>
							<div class="item">
								<div class="desk-v">
									<figure> <img src="./assets/images/client-logo/logo-5.webp" alt="annet"> </figure>
								</div>
								<div class="mob-v">
									<figure> <img src="./assets/images/client-logo/logo-9.webp" alt="the beer cafe"> </figure>
									<figure> <img src="./assets/images/client-logo/logo-10.webp" alt="cbre"> </figure>
								</div>
							</div>
							<div class="item">
								<div class="desk-v">
									<figure> <img src="./assets/images/client-logo/logo-6.webp" alt="asianpaint"> </figure>
								</div>
								<div class="mob-v">
									<figure> <img src="./assets/images/client-logo/logo-11.webp" alt="chhatrapati shivaji internation airport"> </figure>
									<figure> <img src="./assets/images/client-logo/logo-12.webp" alt="doctor agarwal clinic"> </figure>
								</div>
							</div>
							<div class="item">
								<div class="desk-v">
									<figure> <img src="./assets/images/client-logo/logo-7.webp" alt="apollo"> </figure>
								</div>
								<div class="mob-v">
									<figure> <img src="./assets/images/client-logo/logo-13.webp" alt=" deutsche Bank"> </figure>
									<figure> <img src="./assets/images/client-logo/logo-14.webp" alt="fortune"> </figure>
								</div>
							</div>
							<div class="item">
								<div class="desk-v">
									<figure> <img src="./assets/images/client-logo/logo-8.webp" alt="asianpaint"> </figure>
								</div>
								<div class="mob-v">
									<figure> <img src="./assets/images/client-logo/logo-15.webp" alt="future group"> </figure>
									<figure> <img src="./assets/images/client-logo/logo-16.webp" alt="hh global"> </figure>
								</div>
							</div>
							<div class="item">
								<div class="desk-v">
									<figure> <img src="./assets/images/client-logo/logo-9.webp" alt="the beer cafe"> </figure>
								</div>
								<div class="mob-v">
									<figure> <img src="./assets/images/client-logo/logo-17.webp" alt="income taxt department"> </figure>
									<figure> <img src="./assets/images/client-logo/logo-18.webp" alt="indoco"> </figure>
								</div>
							</div>
							<div class="item">
								<div class="desk-v">
									<figure> <img src="./assets/images/client-logo/logo-10.webp" alt="cbre"> </figure>
								</div>
								<div class="mob-v">
									<figure> <img src="./assets/images/client-logo/logo-19.webp" alt="indo count"> </figure>
									<figure> <img src="./assets/images/client-logo/logo-20.webp" alt="jcb"> </figure>
								</div>
							</div>
							<div class="item">
								<div class="desk-v">
									<figure> <img src="./assets/images/client-logo/logo-11.webp" alt="chhatrapati shivaji internation airport"> </figure>
								</div>
								<div class="mob-v">
									<figure> <img src="./assets/images/client-logo/logo-21.webp" alt="lion international"> </figure>
									<figure> <img src="./assets/images/client-logo/logo-22.webp" alt="lupi"> </figure>
								</div>
							</div>
							<div class="item">
								<div class="desk-v">
									<figure> <img src="./assets/images/client-logo/logo-12.webp" alt="doctor agarwal clinic"> </figure>
								</div>
								<div class="mob-v">
									<figure> <img src="./assets/images/client-logo/logo-23.webp" alt="mccann worldgroup"> </figure>
									<figure> <img src="./assets/images/client-logo/logo-24.webp" alt="megha property"> </figure>
								</div>
							</div>
							<div class="item">
								<div class="desk-v">
									<figure> <img src="./assets/images/client-logo/logo-13.webp" alt=" deutsche Bank"> </figure>
								</div>
								<div class="mob-v">
									<figure> <img src="./assets/images/client-logo/logo-25.webp" alt="metro shoes"> </figure>
									<figure> <img src="./assets/images/client-logo/logo-26.webp" alt="moneygram"> </figure>
								</div>
							</div>
							<div class="item">
								<div class="desk-v">
									<figure> <img src="./assets/images/client-logo/logo-14.webp" alt="fortune"> </figure>
								</div>
								<div class="mob-v">
									<figure> <img src="./assets/images/client-logo/logo-27.webp" alt="mumbai port trust"> </figure>
									<figure> <img src="./assets/images/client-logo/logo-28.webp" alt="newquest"> </figure>
								</div>
							</div>
							<div class="item">
								<div class="desk-v">
									<figure> <img src="./assets/images/client-logo/logo-15.webp" alt="future group"> </figure>
								</div>
								<div class="mob-v">
									<figure> <img src="./assets/images/client-logo/logo-29.webp" alt="nielsen"> </figure>
									<figure> <img src="./assets/images/client-logo/logo-30.webp" alt="nsw goverment"> </figure>
								</div>
							</div>
							<div class="item">
								<div class="desk-v">
									<figure> <img src="./assets/images/client-logo/logo-16.webp" alt="hh global"> </figure>
								</div>
								<div class="mob-v">
									<figure> <img src="./assets/images/client-logo/logo-31.webp" alt="hh global"> </figure>
									<figure> <img src="./assets/images/client-logo/logo-32.webp" alt="hh global"> </figure>
								</div>
							</div>
							<div class="item">
								<div class="desk-v">
									<figure> <img src="./assets/images/client-logo/logo-17.webp" alt="income taxt department"> </figure>
								</div>
								<div class="mob-v">
									<figure> <img src="./assets/images/client-logo/logo-33.webp" alt="hh global"> </figure>
									<figure> <img src="./assets/images/client-logo/logo-34.webp" alt="hh global"> </figure>
								</div>
							</div>
							<div class="item">
								<div class="desk-v">
									<figure> <img src="./assets/images/client-logo/logo-18.webp" alt="indoco"> </figure>
								</div>
								<div class="mob-v">
									<figure> <img src="./assets/images/client-logo/logo-35.webp" alt="hh global"> </figure>
									<figure> <img src="./assets/images/client-logo/logo-36.webp" alt="hh global"> </figure>
								</div>
							</div>
							<div class="item">
								<div class="desk-v">
									<figure> <img src="./assets/images/client-logo/logo-19.webp" alt="indo count"> </figure>
								</div>
								<div class="mob-v">
									<figure> <img src="./assets/images/client-logo/logo-37.webp" alt="hh global"> </figure>
									<figure> <img src="./assets/images/client-logo/logo-38.webp" alt="hh global"> </figure>
								</div>
							</div>
							<div class="item">
								<div class="desk-v">
									<figure> <img src="./assets/images/client-logo/logo-20.webp" alt="jcb"> </figure>
								</div>
								<div class="mob-v">
									<figure> <img src="./assets/images/client-logo/logo-39.webp" alt="hh global"> </figure>
									<figure> <img src="./assets/images/client-logo/logo-40.webp" alt="hh global"> </figure>
								</div>
							</div>
							<div class="item">
								<div class="desk-v">
									<figure> <img src="./assets/images/client-logo/logo-21.webp" alt="lion international"> </figure>
								</div>
								<div class="mob-v">
									<figure> <img src="./assets/images/client-logo/logo-41.webp" alt="hh global"> </figure>
									<figure> <img src="./assets/images/client-logo/logo-42.webp" alt="hh global"> </figure>
								</div>
							</div>
							<div class="item">
								<div class="desk-v">
									<figure> <img src="./assets/images/client-logo/logo-22.webp" alt="lupi"> </figure>
								</div>
								<div class="mob-v">
									<figure> <img src="./assets/images/client-logo/logo-43.webp" alt="hh global"> </figure>
									<figure> <img src="./assets/images/client-logo/logo-44.webp" alt="hh global"> </figure>
								</div>
							</div>
							<div class="item">
								<div class="desk-v">
									<figure> <img src="./assets/images/client-logo/logo-23.webp" alt="mccann worldgroup"> </figure>
								</div>
								<div class="mob-v">
									<figure> <img src="./assets/images/client-logo/logo-45.webp" alt="hh global"> </figure>
									<figure> <img src="./assets/images/client-logo/logo-46.webp" alt="hh global"> </figure>
								</div>
							</div>
							<div class="item">
								<div class="desk-v">
									<figure> <img src="./assets/images/client-logo/logo-24.webp" alt="megha property"> </figure>
								</div>
								<div class="mob-v">
									<figure> <img src="./assets/images/client-logo/logo-47.webp" alt="hh global"> </figure>
									<figure> <img src="./assets/images/client-logo/logo-48.webp" alt="hh global"> </figure>
								</div>
							</div>
							<div class="item">
								<div class="desk-v">
									<figure> <img src="./assets/images/client-logo/logo-25.webp" alt="metro shoes"> </figure>
								</div>
								<div class="mob-v">
									<figure> <img src="./assets/images/client-logo/logo-49.webp" alt="hh global"> </figure>
									<figure> <img src="./assets/images/client-logo/logo-50.webp" alt="hh global"> </figure>
								</div>
							</div>
							<div class="item">
								<div class="desk-v">
									<figure> <img src="./assets/images/client-logo/logo-26.webp" alt="moneygram"> </figure>
								</div>
								<div class="mob-v">
									<figure> <img src="./assets/images/client-logo/logo-51.webp" alt="hh global"> </figure>
									<figure> <img src="./assets/images/client-logo/logo-52.webp" alt="hh global"> </figure>
								</div>
							</div>
							<div class="item">
								<div class="desk-v">
									<figure> <img src="./assets/images/client-logo/logo-27.webp" alt="mumbai port trust"> </figure>
								</div>
								<div class="mob-v">
									<figure> <img src="./assets/images/client-logo/logo-53.webp" alt="hh global"> </figure>
									<figure> <img src="./assets/images/client-logo/logo-54.webp" alt="hh global"> </figure>
								</div>
							</div>
							<div class="item">
								<div class="desk-v">
									<figure> <img src="./assets/images/client-logo/logo-28.webp" alt="newquest"> </figure>
								</div>
								<div class="mob-v">
									<figure> <img src="./assets/images/client-logo/logo-1.webp" alt="sabyasachi logo"> </figure>
									<figure> <img src="./assets/images/client-logo/logo-2.webp" alt="sabyasachi logo"> </figure>
								</div>
							</div>
							<div class="item">
								<div class="desk-v">
									<figure> <img src="./assets/images/client-logo/logo-29.webp" alt="nielsen"> </figure>
								</div>
								<div class="mob-v">
									<figure> <img src="./assets/images/client-logo/logo-3.webp" alt="247 park"> </figure>
									<figure> <img src="./assets/images/client-logo/logo-4.webp" alt="al amal hospital"> </figure>
								</div>
							</div>
							<div class="item">
								<div class="desk-v">
									<figure> <img src="./assets/images/client-logo/logo-30.webp" alt="nsw goverment"> </figure>
								</div>
								<div class="mob-v">
									<figure> <img src="./assets/images/client-logo/logo-5.webp" alt="annet"> </figure>
									<figure> <img src="./assets/images/client-logo/logo-6.webp" alt="asianpaint"> </figure>
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
					<h5 class="sub_title orange"> HOW WE WORK </h5>
					<h3> 3 Easy steps to get interior design </h3>
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
	
	<section class="our-blog home">
		<div class="container">
			<div class="entry-title">
				<h2>From Concept to Creation: Our Interior Design Blog</h2> </div>
			<div class="blog-col-wrap">
				<div class="blog-wrap" data-scrollreveal="enter bottom over 1.5s">
					<div class="cust-blog-img">
						<figure><img src="./assets/images/our-blog/natural-light.webp" alt="blog post image"></figure>
					</div>
					<div class="cust-blog-content">
						<div class="cust-date-categories"> <span>Publish on</span>
							<p>16th feb 2024</p>
						</div>
						<h4>Brighten Your Space: How to Optimize Window Placement for Maximum Natural Light and Visual Impact</h4>
						<p> Windows are not just openings in your walls; they're opportunities to invite natural light and enhance the visual appeal of your living space. </p> 
						<a href="blog-post-3" class="btn" aria-label="continue reading"> Continue Reading </a> </div>
				</div>
				<div class="blog-wrap" data-scrollreveal="enter bottom over 1.5s">
					<div class="cust-blog-img">
						<figure><img src="./assets/images/our-blog/termite-free-img.webp" alt="blog post image"></figure>
					</div>
					<div class="cust-blog-content">
						<div class="cust-date-categories"> <span>Publish on</span>
							<p>29th dec 2023</p>
						</div>
						<h4>The Ultimate Guide to Maintaining Your House Furniture and Keeping it Termite-Free in India</h4>
						<p> Your home is your sanctuary, and the furniture within it plays a crucial role in creating a comfortable and inviting living space. </p> 
						<a href="blog-post-2" class="btn" aria-label="continue reading"> Continue Reading </a> </div>
				</div>
			</div>
		</div>
	</section>
		
	<section id="about">
		<div class="dots"></div>
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-12 col-lg-8 text-center" data-scrollreveal="enter left over 1.5s">
					<h5 class="sub_title orange"> YOU DREAM IT, WE DESIGN IT</h5>
					<h2> We can build you the Furniture of your dreams  </h2>
					<br />
					<p> "Turn your dream Furniture into a reality with us! Our expert team is ready to create the perfect Furniture space tailored to your style and needs. From design to installation, we're here to make your culinary dreams come true. Let's build the Furniture you've always wanted." </p>
					<br /> <a href="/contact-us.php" class="btn btn-theme" aria-label="schedule a chat"> SCHEDULE A CHAT  <span><i class="fa fa-angle-right" aria-hidden="true"></i></span> </a> </div>
			</div>
		</div>
	</section>


<?php include('footer.php');?>