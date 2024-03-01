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
	<title> Contact Us | ZCube Design - Turnkey Interior Design & Build Firm  </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
	<?php include('header.php');?>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

    <div class="inner_banner" style="background:url(build/img/innerbanner/about.jpg) no-repeat">
		<div class="container">		
			<div class="row">
				<div class="col-lg-12">
					<!-- <p> ABOUT US</p> -->
					<h3> Apply Job </h3>
				</div>
			</div>
		</div>
		<img src="build/img/innerbanner/about.jpg" class="img-fluid" alt="about us banner image" />
	</div>

    <section class="apply-for-job">
        <div class="container">
            <div class="wrap">

                <div class="page-title">
                    <h1>Senior Interior Designer</h1>
                    <a href="#" class="btn apply-now">Apply now</a>
                </div>

                <div class="exp-social">

                    <div class="exp">
                        <ul>
                            <li>5+ Years of experience</li>
                            <li>Full Time</li>
                        </ul>
                    </div>

                    <div class="social-icon">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>

                </div>

                <div class="content">
                    <h4>about job post</h4>
                    <p>
                        Z Cube Design is seeking an experienced and creative Senior Interior Designer to join our innovative team. 
                        As a Senior Interior Designer, you will play a key role in shaping and executing design concepts, 
                        transforming spaces, and bringing our clients' visions to life. If you have a proven track record 
                        in interior design, a passion for excellence, and the ability to lead design projects, we invite 
                        you to apply and contribute to the continued success of Z Cube Design.
                    </p>


                    <h4>Responsibilities:</h4>

                        <div class="inner-wrap">
                            <h5>Design Conceptualization:</h5>
                            <ul>
                                <li>Lead the conceptualization and development of innovative and aesthetically pleasing interior design concepts.</li>
                                <li>Collaborate with clients to understand their vision, requirements, and preferences.</li>
                            </ul>

                            <h5>Material and Finishes Selection:</h5>
                            <ul>
                                <li>Source and select materials, finishes, and furnishings that align with the design concept and meet client expectations.</li>
                                <li>Stay updated on industry trends and incorporate innovative design elements into projects.</li>
                            </ul>

                            <h5>Client Interaction:</h5>
                            <ul>
                                <li>Act as a primary point of contact for clients, presenting design proposals and addressing client feedback.</li>
                                <li>Nurture client relationships, ensuring satisfaction and successful project outcomes.</li>
                            </ul>
                        </div>

                        <h4>Qualifications:</h4>

                        <ul>
                            <li> Bachelor's degree in Interior Design or a related field.</li>
                            <li> Proven experience as a Senior Interior Designer with a strong portfolio of successful projects.</li>
                            <li>Proficiency in design software (e.g., AutoCAD, 3Ds Max, Photoshop).</li>
                            <li>Excellent communication and presentation skills.</li>
                            <li>Strong leadership abilities and a collaborative mindset.</li>
                        </ul>

                        <p>
                            If you are a seasoned interior design professional with a flair for creativity and leadership, 
                            we encourage you to apply for the Senior Interior Designer position at Z Cube Design. 
                            Join us in creating exceptional, functional, and inspiring interior spaces for our clients.
                        </p>
                </div>

                <a href="#" class="btn apply-now">Apply now</a>
                
            </div>
        </div>
    </section>

<?php include('footer.php');?>