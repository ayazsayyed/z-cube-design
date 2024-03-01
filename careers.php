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

	<div class="inner_banner" style="background:url(build/img/innerbanner/contact.jpg) no-repeat">
		<div class="container">		
			<div class="row">
				<div class="col-lg-12">
					<p> Career </p>
					<h3> Join us Now </h3>
				</div>
			</div>
		</div>
		<img src="build/img/innerbanner/contact.jpg" class="img-fluid" alt="contact us background"/>
	</div>

	<div id="breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/"><i class="fa fa-home"></i> Home</a></li>
						<li class="breadcrumb-item"><a href="#">Contact Us</a></li>
					</ol>
				</div>
			</div>
		</div>
	</div>

    <section class="careers">
        <div class="container">
            <div class="entry-title">
                <h3>Shape Spaces and Ignite Creativity</h3>
                <p>Embark on a fulfilling career with Z-Cube-Design, where design meets innovation, and creativity transforms spaces. <br />
                    As a leading interior design company, we are always on the lookout for talented individuals who share our 
                    passion for creating captivating environments.
                </p>
            </div>
        </div>
    </section>

    <section class="why-chose-us">
        <div class="container">
            <div class="entry-title">
                <h3>Why work with us?</h3>
            </div>

            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="content">
                        <h5>Creative Hub</h5>
                        <p>Join a dynamic team at the forefront of design innovation, crafting distinctive spaces. Inspire with your creativity and contribute to our visionary projects.</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="content">
                        <h5>Client-Centric Excellence</h5>
                        <p>Be part of a client-focused culture, shaping environments that surpass expectations. Collaborate with experts, ensuring your designs leave a lasting impact.</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="content">
                        <h5>Your Career, Our Priority</h5>
                        <p>Experience personalized growth at Z-cube-Design. From mentorship to skill development, we invest in your success, fostering a fulfilling and progressive interior design career.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="current-opening">
        <div class="container">
            <div class="entry-title">
                <h3>Explore Exciting Opportunities with Us</h3>
                <p>Join our dynamic team! Discover fulfilling career opportunities that align with your skills and passion. <br>Explore our current openings and take the next step in your professional journey.</p>
            </div>
            <div class="row">
                <div class="opening-wrap">
                    
                    <div class="accordion" id="accordionExample">

                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Management
                                        <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">

                                    <div class="list-job-detail">
                                        <div class="job-title">
                                            <h5>Project Manager </h5>
                                        </div>
                                        <div class="experience">
                                            <h5>Experience: 5 Years</h5>
                                        </div>
                                        <div class="apply-now">
                                            <a href="job_project_manager.php" target="_blank">Apply Now <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span></a>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                   Designer

                                   <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                </button>
                            </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="list-job-detail">
                                        <div class="job-title">
                                            <h5>Senior Interior Designer </h5>
                                        </div>
                                        <div class="experience">
                                            <h5>Experience: 5 Years</h5>
                                        </div>
                                        <div class="apply-now">
                                            <a href="job_seniour_interior_designer.php" target="_blank">Apply Now <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Business
                                    <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                </button>
                            </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="list-job-detail">
                                        <div class="job-title">
                                            <h5>Business Development Executive (BDE)</h5>
                                        </div>
                                        <div class="experience">
                                            <h5>Experience: 5 Years</h5>
                                        </div>
                                        <div class="apply-now">
                                            <a href="job_business_development.php" target="blank">Apply Now <span><i class="fa fa-arrow-right" aria-hidden="true"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="apply-form">
        <div class="container">
            <div class="entry-title">
                <h5>
                    If you haven't come across a fitting position, no need to fret. <br> Simply submit your details and resume, and we'll reach out to you when a suitable opportunity arises.                
                </h5>
            </div>

            <div class="row">
                <div class="col-12 col-md-8">
                    <form name="job-form"  method="post"  id="job-applicaiton-form" onSubmit="return validatePopUpForm(this)">
                        <div class="col-md-12">
                            <div class="form-group cust-error">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo $name;?>">
                                <span id="nameErr"  class="error-message"><?php echo $nameErr;?></span>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="phone">Contact</label>
                                <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact" value="<?php echo $contact;?>">
                                <span id="contactErr" class="error-message"><?php echo $contactErr;?></span>									
                            </div>					
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email">Email-ID</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $email;?>">
                                <span id="emailErr" class="error-message"><?php echo $emailErr;?></span>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group cust-error">
                                <label for="city">City</label>
                                <input type="text" class="form-control" id="city" name="city" placeholder="City">
                                <span id="cityErr"  class="error-message"><?php echo $nameErr;?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12">
                                <label>Position Applied For </label>
                                <input type="text" class="form-control" id="positon-applied" name="positon-applied" placeholder="Positon Applied For">
                                <span id="messageErr" class="error-message"><?php echo $messageErr;?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12">
                            <label for="education-qualification">Education Qualification</label>
                            <select id="education-qualification" name="education-qualification">
                                <option value="" selected="selected" disabled="disabled">Education Qualification</option>
                                <option value="High School Diploma">High School Diploma</option>
                                <option value="Associate's Degree">Associate's Degree</option>
                                <option value="Bachelor Degree">Bachelor's Degree</option>
                                <option value="Master Degree">Master's Degree</option>
                                <option value="Other">Other</option>
                            </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12">
                            <label for="total-experience">Total Experience</label>
                            <select id="total-experience" name="total-experience">
                                <option value="" selected="selected" disabled="disabled">Total Experience</option>
                                <option value="1">0 - 1year</option>
                                <option value="2">1 - 3years</option>
                                <option value="3">3 - 5years</option>
                                <option value="4">5 - 7years</option>
                            </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12">
                                <label for="formFileSm" class="form-label">Small file input example</label>
                                <input class="form-control form-control-sm" id="formFileSm" type="file">
                            </div>
                        </div>
                        
                    
                        <div class="col-lg-12 form-group submit">
                            <input type="submit" name="submit" class="btn block more_about_us dark submite" value="Submit">
                        </div>	
                        
                        <!-- <div class="col-lg-12 form-group submit">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#thankyou-sub"> modal </a>
                        </div>	 -->
                        <div class="clear"> </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

	
<?php include('footer.php');?>
 