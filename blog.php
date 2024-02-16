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
	<title> About Us | ZCube Design - Turnkey Interior Design & Build Firm   </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
	<?php include('header.php');?>

	<div class="inner_banner" style="background:url(img/innerbanner/about.jpg) no-repeat">
		<div class="container">		
			<div class="row">
				<div class="col-lg-12">
					<h3>Our Blog</h3>
				</div>
			</div>
		</div>
		<img src="img/innerbanner/about.jpg" class="img-fluid" alt="about us banner image" />
	</div>

	<div id="breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/"><i class="fa fa-home"></i> Home</a></li>
						<li class="breadcrumb-item"><a href="#">Blog</a></li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	
	<div class="our-blog">
        <div class="container">
            <div class="blog-col-wrap">

                <div class="blog-wrap" data-scrollreveal="enter bottom over 1.5s">
                    <div class="cust-blog-img">
                        <figure><img src="./assets/images/our-blog/natural-light.webp" alt="blog post image"></figure>
                    </div>
                    <div class="cust-blog-content">
                        <div class="cust-date-categories">
                            <span>Publish on</span>
                            <p>16th feb 2024</p>
                        </div>
                        <h4>Brighten Your Space: How to Optimize Window Placement for Maximum Natural Light and Visual Impact</h4>
                        <p>
                            Windows are not just openings in your walls; they're opportunities to invite natural light and enhance the visual appeal of your living space.
                        </p>
                        <a href="blog-post-3.php" class="btn"> Continue Reading </a>
                    </div>
                </div>

                <div class="blog-wrap" data-scrollreveal="enter bottom over 1.5s">
                    <div class="cust-blog-img">
                        <figure><img src="./assets/images/our-blog/termite-free-img.webp" alt="blog post image"></figure>
                    </div>
                    <div class="cust-blog-content">
                        <div class="cust-date-categories">
                            <span>Publish on</span>
                            <p>29th dec 2023</p>
                        </div>
                        <h4>The Ultimate Guide to Maintaining Your House Furniture and Keeping it Termite-Free in India</h4>
                        <p>
                            Your home is your sanctuary, and the furniture within it plays a crucial role in creating a 
                            comfortable and inviting living space.
                        </p>
                        <a href="blog-post-2.php" class="btn"> Continue Reading </a>
                    </div>
                </div>

                <div class="blog-wrap" data-scrollreveal="enter bottom over 1.5s">
                    <div class="cust-blog-img">
                        <figure><img src="./assets/images/our-blog/office-space.webp" alt="blog post image"></figure>
                    </div>
                    <div class="cust-blog-content">
                        <div class="cust-date-categories">
                            <span>Publish on</span>
                            <p>27th oct 2023</p>
                        </div>
                        <h4>Designing Your Dream Office in Mumbai? Here Are 7 Essential Things to Plan</h4>
                        <p>
                            Designing an office space in Mumbai requires careful planning and consideration to 
                            ensure a functional, productive, and aesthetically pleasing environment.
                        </p>
                        <a href="blog-post-4.php" class="btn"> Continue Reading </a>
                    </div>
                </div>

                <div class="blog-wrap" data-scrollreveal="enter bottom over 1.5s">
                    <div class="cust-blog-img">
                        <figure><img src="./assets/images/our-blog/online-business.webp" alt="blog post image"></figure>
                    </div>
                    <div class="cust-blog-content">
                        <div class="cust-date-categories">
                            <span>Publish on</span>
                            <p>07th jun 2023</p>
                        </div>
                        <h4>7 Convincing Reasons Why Buying Furniture Online in India is the Way to Go</h4>
                        <p>
                            In recent years, the landscape of furniture shopping in India has undergone a remarkable 
                            transformation, thanks to the emergence of online retailers. Gone are the days of trudging 
                            through crowded stores and limited selections.
                        </p>
                        <a href="blog-post-1.php" class="btn"> Continue Reading </a>
                    </div>
                </div>

                <div class="blog-wrap" data-scrollreveal="enter bottom over 1.5s">
                    <div class="cust-blog-img">
                        <figure><img src="./assets/images/our-blog/blog-img.webp" alt="blog post image"></figure>
                    </div>
                    <div class="cust-blog-content">
                        <div class="cust-date-categories">
                            <span>Publish on</span>
                            <p>20th nov 2022</p>
                        </div>
                        <h4>Dreaming of a Home in Mumbai? Here Are 5 Essential Things to Plan Before Designing Your House</h4>
                        <p>
                            Designing a home in Mumbai is an exciting journey filled with possibilities, but it also requires careful planning to navigate the city's unique challenges and opportunities.                            
                        </p>
                        <a href="blog-post-5.php" class="btn"> Continue Reading </a>
                    </div>
                </div>

                
            </div>
        </div>
       
    </div>

    <div class="subscribe">
        <div class="container">

            <div class="background-img">
                <img src="./assets/images/your-dream-bg.png" alt="background image">
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="wrap">
                        <h2>Stay Up to Date</h2>
                        <p>Subscribe to our newsletter to receive our weekly feed.</p>

                        <form action="">
                            <input class="input w-full rounded-xl" placeholder="Enter your email" type="text">
                            <button class="btn bg-primary-500 hover:bg-primary-800 transition duration-150  rounded-xl text-white shadow-sm px-7">Subscribe</button>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>

<?php include('footer.php');?>