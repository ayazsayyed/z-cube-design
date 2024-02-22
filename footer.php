	<footer id="footer" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">

				<div class="col-12 col-lg-5 footer_logo pb-20">
					<a href="#" class="footer-logo-link" aria-label="logo"> <img src="build/img/logo_w.png" class="img-fluid" alt="z cube design footer logo"> </a>
					<p>
						Discover our impressive portfolio! Download now to explore our diverse range of projects, showcasing creativity and expertise. 
						From stunning designs to successful outcomes, our portfolio reflects our commitment to excellence.
					</p>
					<a href="assets/pdf/ZDPL-Work-Profile.pdf" aria-label="profile pdf" download="ZDPL-Work-Profile.pdf" class="btn btn-theme download-portfolio">Download Portfolio <span><i class="fa fa-download" aria-hidden="true"></i></span></a>
				</div>

				<div class="col-12 col-lg-3 col-md-6 col-sm-6 pb-20">
					<div class="site-footer__columns__column wow fadeInDownFixed">
						<div class="site-footer__columns__column__inner text">
							<p>
								FIND US <br />
								401, Richa Industrial Estate, <br />Off New Link Rd, Andheri West, <br /> Mumbai, Maharashtra 400053
							</p>

							<ul class="contact-us">
								<li><a href="mailto:info@zcubedesign.com" aria-label="info@zcubedesign.com"><span><i class="fa fa-envelope" aria-hidden="true"></i></span> info@zcubedesign.com </a></li>
								<li><a href="tel:02226391313" aria-label="02226391313"><span><i class="fa fa-phone" aria-hidden="true"></i></span> 022 – 26391313</a></li>
								<li><a href="tel:02226392323" aria-label="02226392323"><span><i class="fa fa-phone" aria-hidden="true"></i></span> 022 – 26392323</a></li>
								<li><a href="https://maps.app.goo.gl/pxH2w6nf5paLDxdF9" target="_blank" class="map" aria-label="find on map"><span><i class="fa fa-map-marker" aria-hidden="true"></i></span>Find on map</a></li>
							</ul>
						</div>	
					</div>
				</div>

				<div class="col-12 col-lg-4 col-md-6 col-sm-6">
					<div class="site-footer__columns__column wow fadeInDownFixed">
						<div class="site-footer__columns__column__inner">
							<p class="mb-0">USEFULL LINKS</p>
							<ul id="menu-footer-menu" class="clearfix">
								<?php include('footer-nav.php'); ?> 
							</ul>
						</div>
					</div>
					<div class="site-footer__columns__column wow fadeInDownFixed">
						<div class="site-footer__columns__column__inner">
							<p class="mb-0">SOCIAL LINKS</p>
							<ul class="social-m">
								<li><a href="https://www.facebook.com/conceptanddesign.co" class="facebook" aria-label="facebook"> <i class="fa fa-facebook" aria-hidden="true"></i> </a></li>
								<li><a href="https://www.instagram.com/zcubedesignpvtltd" target="_blank" class="instagram" aria-label="instagram"> <i class="fa fa-instagram" aria-hidden="true"></i> </a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container copyright">
			<div class="row">
				<div class="col-12 col-md-12 col-lg-6">
					<p>© <?php echo date("Y"); ?> Z CUBE DESIGN. ALL RIGHTS RESERVED. </p>
				</div>
				<div class="col-12 col-md-12 col-lg-6 text-lg-right d-none">
					<p>Developed by <a href="https://www.t-fusion.tech/" target="_blank" title="T-Fusion Technologies" aria-label="T-fusion">T-Fusion.tech</a></p>
				</div>
			</div>
		</div>
	</footer>
 
	</body>
</html>
	<!-- <script src="assets/js/jquery-1.11.0.js"></script> -->
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<!-- Slider Section Start -->
	<script src="assets/js/banner/jquery.themepunch.tools.min.js"></script>
	<script src="assets/js/banner/jquery.themepunch.revolution.min.js"></script>
	<script src="assets/js/banner/revolution.extension.slideanims.min.js"></script>
	<script src="assets/js/banner/revolution.extension.parallax.min.js"></script>
	<script src="assets/js/banner/theme.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="https://cdn.usebootstrap.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="assets/js/tabs.js"></script>
	<script src="assets/js/vanilla-tabs.min.js"></script>
	<script src="assets/js/api.js"></script>
	<script src="assets/js/custom.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>
		// create horizontal tabs
		new VanillaTabs({
			'selector': '#tabs-h',	// default is ".tabs"
			'type': 'horizontal', 	// can be horizontal / vertical / accordion
			'responsiveBreak': 991,	// tabs become accordion on this device width
			'activeIndex' : 0				// active tab index (starts from 0 ). Can be -1 for accordions.
		});
	</script>