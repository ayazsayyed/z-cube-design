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
                    <h1>Business development</h1>
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
                        <b>Z Cube Design</b> is on the lookout for a dynamic and results-driven Business Development Manager to join our expanding team. 
                        As a Business Development Manager, you will play a crucial role in driving growth, expanding our client base, 
                        and fostering strategic partnerships. If you are a motivated individual with a passion for interior design and a 
                        proven track record in business development, we invite you to apply and contribute to the success of Z Cube Design.
                    </p>

                    <h4>Responsibilities:</h4>

                        <div class="inner-wrap">
                            <h5>Market Research and Analysis:</h5>
                            <ul>
                                <li>Conduct thorough market research to identify trends, competitors, and potential areas for business expansion.</li>
                                <li>Analyze market data to develop effective strategies for business growth.</li>
                            </ul>

                            <h5>Proposal Development:</h5>
                            <ul>
                                <li>Collaborate with the design and project management teams to create compelling proposals for potential clients.</li>
                                <li>Customize proposals to address client needs and showcase the unique value of Z Cube Design.</li>
                            </ul>

                            <h5>Sales Presentations:</h5>
                            <ul>
                                <li>Deliver persuasive and engaging presentations to prospective clients, showcasing the company's capabilities and portfolio.</li>
                                <li>Effectively communicate the benefits of Z Cube Design services to clients.</li>
                            </ul>

                            <h5>Strategic Partnerships:</h5>
                            <ul>
                                <li>Identify and establish strategic partnerships with industry stakeholders, contractors, and other relevant businesses.</li>
                                <li>Leverage partnerships to enhance Z Cube Design market presence and capabilities.</li>
                            </ul>
                        </div>

                        <h4>Qualifications:</h4>

                        <ul>
                            <li>Bachelor's degree in Business, Marketing, or a related field.</li>
                            <li>Proven experience in business development, preferably within the interior design or architecture industry.</li>
                            <li>Strong negotiation and communication skills.</li>
                            <li>Results-oriented with a track record of meeting or exceeding sales targets.</li>
                            <li>Ability to work collaboratively in a fast-paced, creative environment.</li>
                        </ul>

                        <p>
                            If you are a strategic thinker with a passion for driving business growth in the dynamic field of interior 
                            design, we encourage you to apply for the Business Development Manager position at <b>Z Cube Design</b>. 
                            Join us in shaping the future of our business and making a mark in the world of innovative interior design.
                        </p>
                </div>

                <a href="#" class="btn apply-now">Apply now</a>

            </div>
        </div>
    </section>

<?php include('footer.php');?>