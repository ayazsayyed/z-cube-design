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
		<img src="img/innerbanner/about.jpg" class="img-fluid" alt="about us banner image" />
	</div>

	<div class="blog-post-page">
        <div class="container">
            <div class="blog-post-wrap">

                <div class="blog-wrap">
                    <div class="cust-blog-content">

                        <div class="cust-date-categories">
                            <span>Sales and Marketing</span>
                            <p>2023-feb-10</p>
                        </div>

                        <h2>Transforming Spaces: A Glimpse into Our Interior Design Excellence</h2>

                        <div class="blog-post-img">
                            <img src="./assets/images/project-categories/commercial/deutsche-bank/3d-images/3d-image-4.jpg" alt="blog post image">
                        </div>

                        <div class="blog-post-description"  data-scrollreveal="enter bottom over 1.5s">
                            <h5><strong>Introduction</strong></h5>

                            <p>
                                Welcome to Z-Cube Design, where we turn ordinary spaces into extraordinary experiences. 
                                In this blog post, we invite you to embark on a journey through the artistry of interior design, exploring 
                                the transformative power of our creative solutions. Join us as we share insights, trends, and success stories 
                                that reflect our passion for crafting spaces that tell unique stories.
                            </p>

                            <h5><strong>Crafting Environments, Creating Memories</strong></h5>

                            <p><strong>The Essence of Interior Design</strong></p>
                            <p>
                                At Z-Cube Design, we believe that interior design is not just about aesthetics but 
                                a reflection of your lifestyle and personality. Our team of seasoned designers brings a blend of creativity 
                                and functionality to every project, ensuring each space is a harmonious extension of its inhabitants.
                            </p>

                            <h5><strong>Conclusion</strong></h5>
                            <p>
                                At Z-Cube Design, our commitment goes beyond creating visually stunning spaces; we aim to elevate your lifestyle 
                                and enhance your well-being through thoughtful and innovative design. Whether you are looking to revamp your 
                                living room, office, or commercial space, we are here to turn your dreams into reality.
                                <br> <br>
                                Thank you for joining us on this journey through the world of interior design. 
                                Stay inspired, and let your spaces tell the story of who you are.
                                For inquiries or to start your design journey with us, <a href="tel:02226391313">022 – 26391313</a>.
                                <br> <br>
                                Z-Cube Design - Where Every Space Tells a Story.
                            </p>
                        </div>

                        <div class="blog-post-per"  data-scrollreveal="enter bottom over 1.5s">
                            <div class="per-wrap">
                                <div class="cust-img">
                                    <img src="" alt="profile image">
                                </div>
                                <div class="cust-name-desig">
                                    <span>abc author name </span>
                                    <p>authore position</p>
                                </div>
                            </div>
                            <div class="per-description">
                                <p>
                                    Donec consequat tortor risus, at auctor felis consequat a. Donec quis dolor sem. Sed sollicitudin 
                                    magna in hendrerit pulvinar. Vestibulum non quam velit.</p>
                            </div>
                        </div>

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