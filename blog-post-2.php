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

                        <h2>The Art of Fusion: Blending Styles for Timeless Elegance</h2>

                        <div class="blog-post-img">
                            <img src="./assets/images/project-categories/health-care/deh-kolkata/img-12.jpeg" alt="blog post image">
                        </div>

                        <div class="blog-post-description"  data-scrollreveal="enter bottom over 1.5s">
                            <h5><strong>Introduction</strong></h5>

                            <p>
                                At  Z-Cube Design, we believe in the power of fusion, where diverse styles come together 
                                to create spaces that transcend trends and stand the test of time. In this blog post, we explore the art of 
                                blending styles to achieve a harmonious and timeless elegance. Join us on this design journey as we unravel 
                                the beauty of eclectic interiors that seamlessly merge the old and the new.
                            </p>

                            <h5><strong>Embracing Eclecticism</strong></h5>

                            <p>
                                <strong>The Beauty of Mix and Match</strong>
                                <br>
                                Uncover the secrets of eclectic interior design, where seemingly contrasting elements coalesce into a 
                                cohesive and visually stunning whole. Our designers share tips on how to master the art of mix and match, 
                                ensuring that every piece tells a story while contributing to the overall narrative of the space.
                            </p>

                            <h5><strong>Conclusion</strong></h5>
                            <p>At Z-Cube Design, we celebrate the diversity of design styles and their ability to 
                                coalesce into something truly extraordinary. The art of fusion is about creating spaces that are not bound 
                                by limitations but enriched by the amalgamation of influences. If you're ready to embark on a design 
                                journey that transcends boundaries, we're here to bring your vision to life.

                                <br> <br>

                                Thank you for joining us on this journey through the world of interior design. 
                                Stay inspired, and let your spaces tell the story of who you are.
                                For inquiries or to start your design journey with us, <a href="tel:02226391313">022 – 26391313</a>.

                                <br> <br>

                                Z-Cube Design - Where Style Knows No Boundaries.
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