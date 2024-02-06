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

                        <h2>Illuminating Spaces: The Magic of Lighting in Interior Design</h2>

                        <div class="cust-author">
                            <div class="col-left">
                                <img src="" alt="">
                            </div>
                            <div class="col-right">
                                <span>Author Name</span>
                                <p>Author</p>
                            </div>
                        </div>

                        <div class="blog-post-img">
                            <img src="./assets/images/our-blog/blog-post/blog-post-1.jpg" alt="">
                        </div>

                        <div class="blog-post-description"  data-scrollreveal="enter bottom over 1.5s">
                            <h5><strong>Introduction</strong></h5>

                            <p>
                                Welcome to Z-Cube Design, where we believe that lighting is the unsung hero of interior 
                                design. In this blog post, we shine a spotlight on the transformative power of lighting and how it can elevate 
                                the mood, functionality, and aesthetics of any space. Join us on a journey through the art of illumination, 
                                as we explore the nuances of lighting design and its profound impact on the ambiance of your home or office.
                            </p>

                            <h5><strong>Understanding Lighting Basics</strong></h5>

                            <p>
                                <strong>The Three Layers of Lighting</strong>
                                <br>
                                Uncover the secrets of effective lighting design by exploring the three fundamental layers: ambient, task, 
                                and accent lighting. Our experts break down each layer, offering insights into how they work together to 
                                create a well-balanced and inviting atmosphere.
                            </p>

                            <h5><strong>Lighting for Different Spaces</strong></h5>
                            <p>
                                <strong>Kitchen Brilliance</strong>
                                <br>
                                Discover the key to achieving a well-lit and functional kitchen. From task lighting over workspaces to 
                                ambient lighting for dining areas, our designers share tips on creating a bright and inviting culinary haven.
                            </p>

                            <p>
                                <strong>Bedroom Serenity</strong>
                                <br>
                                Find out how to create a calming and cozy bedroom retreat with the right lighting choices. 
                                Explore the use of warm, soft lighting to induce relaxation and the importance of task lighting for reading 
                                or dressing areas.
                            </p>

                            <h5><strong>Conclusion</strong></h5>
                            <p>
                                At Z-Cube Design, we believe that lighting is an art form that can breathe life into 
                                any space. Whether you're looking to create a cozy nook or a vibrant work environment, our team is here to 
                                guide you through the intricacies of lighting design.

                                <br> <br>
                                For inquiries or to start your design journey with us, <a href="tel:02226391313">022 – 26391313</a>.

                                <br> <br>

                                Z-Cube Design -  Illuminating Your World, One Space at a Time.
                            </p>
                        </div>

                        <div class="blog-post-per"  data-scrollreveal="enter bottom over 1.5s">
                            <div class="per-wrap">
                                <div class="cust-img">
                                    <img src="" alt="">
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