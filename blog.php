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
					<!-- <p>Our Blog</p> -->
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
                    <a href="#">
                        <div class="cust-blog-img">
                            <figure><img src="./assets/images/our-blog/blog-img.webp" alt="blog post image"></figure>
                        </div>
                        <div class="cust-blog-content">
                            <div class="cust-date-categories">
                                <span>Sales and Marketing</span>
                                <p>02-10-2023</p>
                            </div>
                            <h4>title goes here</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus eget justo et iaculis.</p>
                        </div>
                    </a>
                </div>

                <div class="blog-wrap" data-scrollreveal="enter bottom over 1.5s">
                    <a href="#">
                        <div class="cust-blog-img">
                            <figure><img src="./assets/images/our-blog/blog-img.webp" alt="blog post image"></figure>
                        </div>
                        <div class="cust-blog-content">
                            <div class="cust-date-categories">
                                <span>Sales and Marketing</span>
                                <p>02-10-2023</p>
                            </div>
                            <h4>title goes here</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus eget justo et iaculis.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus eget justo et iaculis.</p>
                        </div>
                    </a>
                </div>

                <div class="blog-wrap" data-scrollreveal="enter bottom over 1.5s">
                    <a href="#">
                        <div class="cust-blog-img">
                            <figure><img src="./assets/images/our-blog/blog-img.webp" alt="blog post image"></figure>
                        </div>
                        <div class="cust-blog-content">
                            <div class="cust-date-categories">
                                <span>Sales and Marketing</span>
                                <p>02-10-2023</p>
                            </div>
                            <h4>title goes here</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus eget justo et iaculis.</p>
                        </div>
                    </a>
                </div>

                <!---->

                <div class="blog-wrap" data-scrollreveal="enter bottom over 1.5s">
                    <a href="#">
                        <div class="cust-blog-img">
                            <figure><img src="./assets/images/our-blog/blog-img.webp" alt="blog post image"></figure>
                        </div>
                        <div class="cust-blog-content">
                            <div class="cust-date-categories">
                                <span>Sales and Marketing</span>
                                <p>02-10-2023</p>
                            </div>
                            <h4>title goes here</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus eget justo et iaculis.</p>
                        </div>
                    </a>
                </div>

                <div class="blog-wrap" data-scrollreveal="enter bottom over 1.5s">
                    <a href="#">
                        <div class="cust-blog-img">
                            <figure><img src="./assets/images/our-blog/blog-img.webp" alt="blog post image"></figure>
                        </div>
                        <div class="cust-blog-content">
                            <div class="cust-date-categories">
                                <span>Sales and Marketing</span>
                                <p>02-10-2023</p>
                            </div>
                            <h4>title goes here</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus eget justo et iaculis.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus eget justo et iaculis.</p>
                        </div>
                    </a>
                </div>

                <div class="blog-wrap" data-scrollreveal="enter bottom over 1.5s">
                    <a href="#">
                        <div class="cust-blog-img">
                            <figure><img src="./assets/images/our-blog/blog-img.webp" alt="blog post image"></figure>
                        </div>
                        <div class="cust-blog-content">
                            <div class="cust-date-categories">
                                <span>Sales and Marketing</span>
                                <p>02-10-2023</p>
                            </div>
                            <h4>title goes here</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed luctus eget justo et iaculis.</p>
                        </div>
                    </a>
                </div>
                
            </div>
        </div>

       
    </div>

    <div class="subscribe">
        <div class="container">

            <div class="background-img">
                <img src="./assets/images/your-dream-bg.png" alt="">
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

<script>
var a = 0;
$(window).scroll(function() {
  var oTop = $('#counter').offset().top - window.innerHeight;
  if (a == 0 && $(window).scrollTop() > oTop) {
    $('.counter-value').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },
        {
          duration: 2000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
            //alert('finished');
          }
        });
    });
    a = 1;
  }
});
</script>