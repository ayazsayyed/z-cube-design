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
                    <h1>Project manager</h1>
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
                    <p>Z Cube Design is seeking a talented and experienced Project Manager to join our dynamic team. 
                        As a Project Manager, you will play a pivotal role in overseeing and coordinating our interior
                        design projects from conception to completion. If you have a passion for design, a keen eye 
                        for detail, and the ability to manage multiple aspects of a project simultaneously, we invite you to apply.
                    </p>

                    <h4>Responsibilities:</h4>

                        <div class="inner-wrap">
                            <h5>Project Planning and Coordination:</h5>
                            <ul>
                                <li>Develop and execute comprehensive project plans, outlining timelines, milestones, and deliverables.</li>
                                <li>Collaborate with the design team to ensure project objectives align with client expectations and design standards.</li>
                            </ul>

                            <h5>Client Communication:</h5>
                            <ul>
                                <li>Serve as the main point of contact for clients, providing regular updates and ensuring their vision is realized throughout the project.</li>
                                <li>Address client inquiries and concerns promptly, fostering positive and lasting client relationships.</li>
                            </ul>

                            <h5>Quality Assurance:</h5>
                            <ul>
                                <li>Uphold the highest standards of quality in design and construction, conducting regular site visits to ensure compliance with project specifications.</li>
                                <li>Implement and maintain quality control processes to deliver exceptional results.</li>
                            </ul>
                        </div>

                        <h4>Qualifications:</h4>

                        <ul>
                            <li>Proven experience in project management within the interior design or related industry.</li>
                            <li>Strong organizational and multitasking skills.</li>
                            <li>Excellent communication and interpersonal abilities.</li>
                            <li>Proficient in project management software and tools.</li>
                            <li>Bachelor's degree in Project Management, Interior Design, Architecture, or a related field.</li>
                        </ul>

                        <p>If you're passionate about transforming spaces and leading successful projects, we welcome you to apply for the Project Manager position at Z Cube Design. Join our team and be a part of creating exceptional and inspiring interior designs.</p>
                        
                </div>

                <a href="#" class="btn apply-now">Apply now</a>

            </div>
        </div>
    </section>

<?php include('footer.php');?>