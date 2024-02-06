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
	<title> Team | ZCube Design - Turnkey Interior Design & Build Firm  </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
	<?php include('header.php');?>

</head>
<body>

	<div class="inner_banner" style="background:url(img/innerbanner/contact.jpg) no-repeat">
		<div class="container">		
			<div class="row">
				<div class="col-lg-12">
					<p> Our Team </p>
					<h3> Meet Our Team </h3>
				</div>
			</div>
		</div>
		<img src="img/innerbanner/contact.jpg" class="img-fluid" />
	</div>

	<div id="breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/"><i class="fa fa-home"></i> Home</a></li>
						<li class="breadcrumb-item"><a href="#">Team</a></li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	
	<section class="" id="team"> 	
		<div class="container">

			<div class="entry-title">
				<h2>"Your Interior Design Dream Team"</h2>
				<p>
					At Z Cube Design, we take immense pride in the dedicated and talented individuals who make up our dynamic team. Each member 
					of our team brings a unique set of skills, a passion for creativity, and a commitment to excellence in the field of interior design. 
					Allow us to introduce you to the faces behind our inspiring projects:
					Our team's collective passion is to create spaces that exceed your expectations, whether it's a cozy home, a productive workspace, or 
					a unique commercial environment. We look forward to collaborating with you and turning your interior design dreams into a reality. 
					Discover the Z Cube Design difference today!
				</p>
				<a href="#" class="btn">  </a>
			</div>

			<div class="card-details">

				<div class="team-wrap text-center box-1" data-toggle="modal" data-target="#mohammed_hashim">
					<div class="picture">
						<a href="javascript:void(0)">
							<figure>
								<img src="./assets/images/team-photo/hashim-Hebsur.jpg" class="img-fluid d-block w-100" alt="hashim hebsur" />
							</figure>
						</a>
					</div>
					<div class="p-details">
						<h6>Director</h6>
						<h4>Hashim Hebsur</h4>
						<p>Bringing more than two decades of experience in interior design, he prioritizes delivering high-quality projects promptly. </p>
						<a href="mailto:hashim@zcubedesign.com"> hashim@zcubedesign.com</a>
					</div>
				</div>

				<div class="team-wrap text-center box-2" data-toggle="modal" data-target="#mohammed_sajid">
					<div class="picture">
						<a href="javascript:void(0)">
						<figure>
								<img src="./assets/images/team-photo/sajid-Hebsur.jpg" class="img-fluid d-block w-100" alt="sajid hebsur" />
							</figure>
						</a>
					</div>
					<div class="p-details">
						<h6>Associate Director</h6>
						<h4>Sajid Hebsur</h4>
						<p>Sajid Hebsur has 12+ years of experience, He handles project management & execution across all verticals.</p>

						<a href="mailto:sajid@zcubedesign.com"> sajid@zcubedesign.com </a>
					</div>
				</div>

				<div class="team-wrap text-center box-4" data-toggle="modal" data-target="#poonam">
					<div class="picture">
						<a href="javascript:void(0)">
							<figure>
								<img src="./assets/images/team-photo/poonam.jpg" class="img-fluid d-block w-100" alt="poonam" />
							</figure>
						</a>
					</div>
					<div class="p-details">
						<h6>Finance & Documentation</h6>
						<h4>Poonam Gupta</h4>
						<p> Our Finance & Documentation expert excels, ensuring financial integrity and streamlined documentation, crucial to our organizational success.</p>

						<a href="mailto:accounts@zcubedesign.com">accounts@zcubedesign.com</a>
					</div>
				</div>

				<div class="team-wrap text-center box-3" data-toggle="modal" data-target="#sharuk">
					<div class="picture">
						<a href="javascript:void(0)">
							<figure>
								<img src="./assets/images/team-photo/saharukh.jpg" class="img-fluid d-block w-100" alt="saharuk" />
							</figure>
						</a>
					</div>
					<div class="p-details">
						<h6>Project Head</h6>
						<h4>Shahrukh Patel</h4>
						<p>Our project head leads with creativity and precision, transforming spaces with unparalleled design expertise and efficiency.</p>

						<a href="mailto:project@zcubedesign.com">project@zcubedesign.com</a>
					</div>
				</div>

				<div class="team-wrap text-center box-3" data-toggle="modal" data-target="#rehan">
					<div class="picture">
						<a href="javascript:void(0)">
							<figure>
								<img src="./assets/images/team-photo/rehan.jpg" class="img-fluid d-block w-100" alt="rehan" />
							</figure>
						</a>
					</div>
					<div class="p-details">
						<h6>Project Head</h6>
						<h4>Rehan Markar</h4>
						<p>Adeptly balances creativity and efficiency, consistently achieving stellar outcomes for our interior design projects.</p>

						<a href="mailto:project@zcubedesign.com">project@zcubedesign.com</a>
					</div>
				</div>

			</div>

			<!--
			<div class="row justify-content-md-center">
				<div class="col-lg-11">
					<div class="row justify-content-md-center">
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
							<div class="card">
								<a class="d-block" data-toggle="modal" data-target="#mohammed_hashim">
									<img src="img/team/mohammed_hashim.png" class="img-fluid d-block w-100" />
									<h5> Mohammed Hashim  <small class="d-block"> DIRECTOR </small> </h5> 
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
							<div class="card">
								<a class="d-block" data-toggle="modal" data-target="#sumit_jaiswal">
									<img src="img/team/sumit_jaiswal.png" class="img-fluid d-block w-100" />
									<h5> Sumit Jaiswal  <small class="d-block"> ASSOCIATE DIRECTOR ( MEP ) </small> </h5> 
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
							<div class="card">
								<a class="d-block" data-toggle="modal" data-target="#mohammed_hashim">
									<img src="img/team/mohammed_hashim.png" class="img-fluid d-block w-100" />
									<h5> Mohammed Hashim  <small class="d-block"> DIRECTOR </small> </h5> 
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
							<div class="card">
								<a class="d-block" data-toggle="modal" data-target="#sumit_jaiswal">
									<img src="img/team/sumit_jaiswal.png" class="img-fluid d-block w-100" />
									<h5> Sumit Jaiswal  <small class="d-block"> ASSOCIATE DIRECTOR ( MEP ) </small> </h5> 
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
							<div class="card">
								<a class="d-block" data-toggle="modal" data-target="#mohammed_hashim">
									<img src="img/team/mohammed_hashim.png" class="img-fluid d-block w-100" />
									<h5> Mohammed Hashim  <small class="d-block"> DIRECTOR </small> </h5> 
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
							<div class="card">
								<a class="d-block" data-toggle="modal" data-target="#sumit_jaiswal">
									<img src="img/team/sumit_jaiswal.png" class="img-fluid d-block w-100" />
									<h5> Sumit Jaiswal  <small class="d-block"> ASSOCIATE DIRECTOR ( MEP ) </small> </h5> 
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
							<div class="card">
								<a class="d-block" data-toggle="modal" data-target="#mohammed_hashim">
									<img src="img/team/mohammed_hashim.png" class="img-fluid d-block w-100" />
									<h5> Mohammed Hashim  <small class="d-block"> DIRECTOR </small> </h5> 
								</a>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
							<div class="card">
								<a class="d-block" data-toggle="modal" data-target="#sumit_jaiswal">
									<img src="img/team/sumit_jaiswal.png" class="img-fluid d-block w-100" />
									<h5> Sumit Jaiswal  <small class="d-block"> ASSOCIATE DIRECTOR ( MEP ) </small> </h5> 
								</a>
							</div>
						</div>
					</div>  
				</div>  
			</div>  
			-->
			
		</div> <!-- Container -->		
	</section> <!--  -->
	
	
<?php include('footer.php');?>
 
 
<!-- Modal -->
<div class="modal fade" id="mohammed_hashim" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body d-flex align-items-center justify-content-between">
		<div class="side-left">
			<div class="card">
				<figure>
					<img src="./assets/images/team-photo/hashim-Hebsur.jpg" class="img-fluid d-block w-100" alt="hashim hebsur" />
				</figure>
			</div>
		</div>
		<div class="side-right">
			<div class="content">
				<h4>Mohammed Hashim</h4>
				<h6>Director</h6>
				<ul class="social d-flex"> 
					<li><a href="mailto:hashim@zcubedesign.com"><i class="fa fa-envelope" aria-hidden="true"></i>hashim@zcubedesign.com</a></li>
				</ul>
				<p>Bringing more than two decades of experience in interior design, he prioritizes delivering high-quality projects promptly.</p>
				<p>
					Mohammed Hashim embarked on his professional journey right after earning an Interior Design degree from St. Francis, Borivali, in 2000. Over the two ensuing decades, he has demonstrated remarkable growth, ascending from a junior designer to the Director of Zcube Design Private Limited. Throughout his career, Mohammed Hashim has successfully managed diverse projects, spanning commercial, high-end residential, hospitality, and retail sectors across India. Renowned for his passionate business approach, he is recognized for delivering high-quality projects ahead of schedule with meticulous attention to detail.
				</p>
			</div>
		</div>
      </div> 
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="mohammed_sajid" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body d-flex align-items-center justify-content-between">
		<div class="side-left">
			<div class="card">
				<figure>
					<img src="./assets/images/team-photo/sajid-Hebsur.jpg" class="img-fluid d-block w-100" alt="sajid hebsur" />
				</figure>
			</div>
		</div>
		<div class="side-right">
			<div class="content">
				<h4>Sajid Hebsur</h4>
				<h6>ASSOCIATE DIRECTOR</h6>
				<ul class="social d-flex"> 
					<li><a href="mailto:sajid@zcubedesign.com"><i class="fa fa-envelope" aria-hidden="true"></i>sajid@zcubedesign.com</a></li>
				</ul>
				<p> Sajid Hebsur has 12+ years of experience, He handles project management & execution across all verticals.</p>
				<p>
					Experienced in project management, sustainability, and construction, with a proven track record in high-end residential interiors and commercial turnkey projects.He has effectively & collectively managed and grew the entire firm while supervising a workforce of over twenty-five site managers. Value engineering, project estimation, cost control, bargaining, and implementation.
				</p>
			</div>
		</div>
      </div> 
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="sharuk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body d-flex align-items-center justify-content-between">
		<div class="side-left">
			<div class="card">
				<figure>
					<img src="./assets/images/team-photo/saharukh.jpg" class="img-fluid d-block w-100" alt="saharuk" />
				</figure>
			</div>
		</div>
		<div class="side-right">
			<div class="content">
				<h4>Shahruk Patel</h4>
				<h6>Project Head</h6>
				<ul class="social d-flex"> 
					<li><a href="mailto:project@zcubedesign.com"><i class="fa fa-envelope" aria-hidden="true"></i>project@zcubedesign.com</a></li>
				</ul>
				<p>Our project head leads with creativity and precision, transforming spaces with unparalleled design expertise and efficiency.</p>
				<p>
					As the esteemed project head at our interior design firm, Shahrukh seamlessly combines creativity and precision in every endeavor. Leading with a keen eye for design aesthetics and efficient project management, they transform spaces into works of art. Their ability to navigate challenges with grace ensures that each project exceeds expectations. With an unwavering commitment to excellence, our project head plays a pivotal role in shaping the distinctive and captivating designs that define our firm's success.
				</p>
			</div>
		</div>
      </div> 
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="poonam" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body d-flex align-items-center justify-content-between">
		<div class="side-left">
			<div class="card">
				<figure>
					<img src="./assets/images/team-photo/poonam.jpg" class="img-fluid d-block w-100" alt="poonam" />
				</figure>
			</div>
		</div>
		<div class="side-right">
			<div class="content">
				<h4>Poonam Gupta</h4>
				<h6>Finance & Documentation</h6>
				<ul class="social d-flex"> 
					<li><a href="mailto:accounts@zcubedesign.com"><i class="fa fa-envelope" aria-hidden="true"></i>accounts@zcubedesign.com</a></li>
				</ul>
				<p>Our Finance & Documentation expert excels, ensuring financial integrity and streamlined documentation, crucial to our organizational success.</p>
				<p>
					As the invaluable Finance and Documentation specialist in our team, she adeptly manages intricate financial transactions, demonstrating unparalleled precision. Her meticulous approach extends to maintaining comprehensive documentation, ensuring compliance and transparency. With unwavering commitment, she plays a pivotal role in our organizational success by contributing to financial integrity. Her expertise not only streamlines processes but also establishes a foundation of trust, reflecting her indispensable role in the seamless functioning of our firm.
				</p>
			</div>
		</div>
      </div> 
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="rehan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body d-flex align-items-center justify-content-between">
		<div class="side-left">
			<div class="card">
				<figure>
					<img src="./assets/images/team-photo/rehan.jpg" class="img-fluid d-block w-100" alt="rehan" />
				</figure>
			</div>
		</div>
		<div class="side-right">
			<div class="content">
				<h4>Rehan Markar</h4>
				<h6>Project Head</h6>
				<ul class="social d-flex"> 
					<li><a href="mailto:project@zcubedesign.com"><i class="fa fa-envelope" aria-hidden="true"></i>project@zcubedesign.com</a></li>
				</ul>
				<p>Rehan adeptly balances creativity and efficiency, consistently achieving stellar outcomes for our interior design projects.</p>
				<p>
				Rehan is a dynamic force in our interior design firm, infusing projects with creativity and precision. With a sharp design sensibility and effective project management, he consistently produce outstanding results.
				</p>
			</div>
		</div>
      </div> 
    </div>
  </div>
</div>