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

                        <h2>Blog post title goes here </h2>

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
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo est eget consequat imperdiet. 
                                Suspendisse laoreet scelerisque lobortis. Mauris facilisis hendrerit nulla at vehicula. Suspendisse potenti. 
                                Ut in nulla a purus bibendum convallis. Suspendisse id nunc maximus, suscipit nte ac, vulputate massa. 
                                Sed ut nunc suscipit, bibendum arcu a, interdum elit. Nullam laoreet mollis dictum. Ut suscipit, 
                                magna at elementum iaculis, erat erat fermentum justo, sit amet ultrices enim leo sit amet purus. 
                                Nulla sed erat molestie, auctor mauris lobortis, iaculis justo.
                            </p>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo est eget consequat imperdiet. 
                                Suspendisse laoreet scelerisque lobortis. Mauris facilisis hendrerit nulla at vehicula. Suspendisse potenti. 
                                Ut in nulla a purus bibendum convallis. Suspendisse id nunc maximus, suscipit nte ac, vulputate massa. 
                                Sed ut nunc suscipit, bibendum arcu a, interdum elit. Nullam laoreet mollis dictum. Ut suscipit, 
                                magna at elementum iaculis, erat erat fermentum justo, sit amet ultrices enim leo sit amet purus. 
                                Nulla sed erat molestie, auctor mauris lobortis, iaculis justo.
                            </p>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo est eget consequat imperdiet. 
                                Suspendisse laoreet scelerisque lobortis. Mauris facilisis hendrerit nulla at vehicula. Suspendisse potenti. 
                                Ut in nulla a purus bibendum convallis. Suspendisse id nunc maximus, suscipit nte ac, vulputate massa. 
                                Sed ut nunc suscipit, bibendum arcu a, interdum elit. Nullam laoreet mollis dictum. Ut suscipit, 
                                magna at elementum iaculis, erat erat fermentum justo, sit amet ultrices enim leo sit amet purus. 
                                Nulla sed erat molestie, auctor mauris lobortis, iaculis justo.
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