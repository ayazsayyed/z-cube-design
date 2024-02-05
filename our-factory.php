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
	<title> Projects | ZCube Design - Turnkey Interior Design & Build Firm  </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
	<?php include('header.php');?>
</head>
<body>

<section class="factory-banner">
    <div class="background-img">
        <figure>
            <img src="./assets/images/factory-bg.jpg" alt="factory background image">
        </figure>
    </div>
    <div class="content">
        <h1>Make your interior more minimalistic & modern</h1>
        <p>Turn your room with <span>ZCube Furniture</span> into a lot more minimalist and modern with ease and speed</p>
    </div>
</section>

<section class="our-steps">
    <div class="container-fluid">
        <div class="slider steps-slider">
            <div class="slider-wrap">
                <div class="col-left">
                    <img src="./assets/images/best-price.png" alt="best price image">
                </div>
                <div class="col-right">
                    <h5>Best Pricing</h5>
                    <p>Pricing that justifies the quality and precision.</p>
                </div>
            </div>

            <div class="slider-wrap">
                <div class="col-left">
                    <img src="./assets/images/exclusive-catalog-icon.png" alt="exclusive-catalog image">
                </div>
                <div class="col-right">
                    <h5>Exclusive Catalog</h5>
                    <p>Consistent design updates and one-of-a-kind art pieces.</p>
                </div>
            </div>

            <div class="slider-wrap">
                <div class="col-left">
                    <img src="./assets/images/unmatch-quality-icon.png" alt="unmatch-quality image">
                </div>
                <div class="col-right">
                    <h5>Unmatched Quality</h5>
                    <p>Where the art speaks to you directly.</p>
                </div>
            </div>

            <div class="slider-wrap">
                <div class="col-left">
                    <img src="./assets/images/customisation-icon.png" alt="customisation image">
                </div>
                <div class="col-right">
                    <h5>Customisation</h5>
                    <p>Truly making it one-of-your-kind product.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="type-of-furniture">
    <div class="container">
        <div class="title">
            <h2>Types of furniture</h2>
        </div>

        <div class="wrap">
            <ul id="tabs-h" class="tabs">
                <li data-title="Chair">
                    <div class="body-wrap">

                        <div class="slider product-slider">
                            <div class="product-card">
                                <div class="pro-img">
                                    <img src="./assets/images/products/chair/product-img-1.png" alt="Aminy Chair">
                                </div>
                                <div class="product-content">
                                    <span>Chair</span>
                                    <a href="#">Aminy Chair</a>
                                </div>
                            </div>

                            <div class="product-card">
                                <div class="pro-img">
                                <img src="./assets/images/products/chair/product-img-2.png" alt="Wooden Chair">
                                </div>
                                <div class="product-content">
                                    <span>Chair</span>
                                    <a href="#">Wooden Chair</a>
                                </div>
                            </div>

                            <div class="product-card">
                                <div class="pro-img">
                                    <img src="./assets/images/products/chair/product-img-3.png" alt="Lounge Chair">
                                </div>
                                <div class="product-content">
                                    <span>Chair</span>
                                    <a href="#">Lounge Chair</a>
                                </div>
                            </div>

                            <div class="product-card">
                                <div class="pro-img">
                                <img src="./assets/images/products/chair/product-img-4.png" alt="Dining Chair">
                                </div>
                                <div class="product-content">
                                    <span>Chair</span>
                                    <a href="#">Dining Chair</a>
                                </div>
                            </div>

                            <div class="product-card">
                                <div class="pro-img">
                                    <img src="./assets/images/products/chair/product-img-5.png" alt="Rattan Chair">
                                </div>
                                <div class="product-content">
                                    <span>Chair</span>
                                    <a href="#">Rattan Chair</a>
                                </div>
                            </div>

                        </div>  
                         
                    </div>
                </li>

                <li data-title="Sofa">
                     <div class="body-wrap">
                        <div class="slider product-slider">
                            <div class="product-card">
                                <div class="pro-img">
                                    <img src="./assets/images/products/sofa/sofa-img-1.png" alt="Loveseat Sofa">
                                </div>
                                <div class="product-content">
                                    <span>Sofa</span>
                                    <a href="#">Loveseat Sofa</a>
                                </div>
                            </div>

                            <div class="product-card">
                                <div class="pro-img">
                                    <img src="./assets/images/products/sofa/sofa-img-2.png" alt="Corner Sofa">
                                </div>
                                <div class="product-content">
                                    <span>Sofa</span>
                                    <a href="#">Corner Sofa</a>
                                </div>
                            </div>

                            <div class="product-card">
                                <div class="pro-img">
                                    <img src="./assets/images/products/sofa/sofa-img-3.png" alt="Axis Sofa">
                                </div>
                                <div class="product-content">
                                    <span>Sofa</span>
                                    <a href="#">Axis Sofa</a>
                                </div>
                            </div>

                            <div class="product-card">
                                <div class="pro-img">
                                    <img src="./assets/images/products/sofa/sofa-img-4.png" alt="Daybed Sofa">
                                </div>
                                <div class="product-content">
                                    <span>Sofa</span>
                                    <a href="#">Daybed Sofa</a>
                                </div>
                            </div>

                            <div class="product-card">
                                <div class="pro-img">
                                    <img src="./assets/images/products/sofa/sofa-img-5.png" alt="Castered Leather Sofa">
                                </div>
                                <div class="product-content">
                                    <span>Sofa</span>
                                    <a href="#">Castered Leather Sofa</a>
                                </div>
                            </div>
                        </div>  
                    </div>
                </li>

                <li data-title="Wardrobe">
                    <div class="body-wrap">
                        <div class="slider product-slider">
                            <div class="product-card">
                                <div class="pro-img">
                                    <img src="./assets/images/products/wordrobes/wardrobe-img-1.jpg" alt="Sliding Wardrobes">
                                </div>
                                <div class="product-content">
                                    <span>Wardrobes</span>
                                    <a href="#">Sliding Wardrobes</a>
                                </div>
                            </div>

                            <div class="product-card">
                                <div class="pro-img">
                                    <img src="./assets/images/products/wordrobes/wardrobe-img-2.jpg" alt="Walking Wardrobes">
                                </div>
                                <div class="product-content">
                                    <span>Wardrobes</span>
                                    <a href="#">Walking Wardrobes</a>
                                </div>
                            </div>

                            <div class="product-card">
                                <div class="pro-img">
                                    <img src="./assets/images/products/wordrobes/wardrobe-img-3.jpg" alt="Open Wardrobes">
                                </div>
                                <div class="product-content">
                                    <span>Wardrobes</span>
                                    <a href="#">Open Wardrobes</a>
                                </div>
                            </div>

                            <div class="product-card">
                                <div class="pro-img">
                                    <img src="./assets/images/products/wordrobes/wardrobe-img-4.jpg" alt="Hinged Wardrobes">
                                </div>
                                <div class="product-content">
                                    <span>Wardrobes</span>
                                    <a href="#">Hinged Wardrobes</a>
                                </div>
                            </div>

                            <div class="product-card">
                                <div class="pro-img">
                                    <img src="./assets/images/products/wordrobes/wardrobe-img-5.jpg " alt="Mirror Wardrobes">
                                </div>
                                <div class="product-content">
                                    <span>Wardrobes</span>
                                    <a href="#">Mirror Wardrobes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li data-title="Bed">
                    <div class="body-wrap">
                        <div class="slider product-slider">
                            <div class="product-card">
                                <div class="pro-img">
                                    <img src="./assets/images/products/beds/bed-img-1.png" alt="Sleigh Bed">
                                </div>
                                <div class="product-content">
                                    <span>Beds</span>
                                    <a href="#">Sleigh Bed</a>
                                </div>
                            </div>

                            <div class="product-card">
                                <div class="pro-img">
                                    <img src="./assets/images/products/beds/bed-img-2.png" alt="Modular Bed">
                                </div>
                                <div class="product-content">
                                    <span>Beds</span>
                                    <a href="#">Modular Bed</a>
                                </div>
                            </div>

                            <div class="product-card">
                                <div class="pro-img">
                                    <img src="./assets/images/products/beds/bed-img-3.png" alt="Brigantine Bed">
                                </div>
                                <div class="product-content">
                                    <span>Beds</span>
                                    <a href="#">Brigantine Bed</a>
                                </div>
                            </div>

                            <div class="product-card">
                                <div class="pro-img">
                                    <img src="./assets/images/products/beds/bed-img-4.png" alt="Wooden Bed">
                                </div>
                                <div class="product-content">
                                    <span>Beds</span>
                                    <a href="#">Wooden Bed</a>
                                </div>
                            </div>

                            <div class="product-card">
                                <div class="pro-img">
                                    <img src="./assets/images/products/beds/bed-img-5.png" alt="Sheesham Wood Bed">
                                </div>
                                <div class="product-content">
                                    <span>Beds</span>
                                    <a href="#">Sheesham Wood Bed</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li data-title="TV Unit">
                    <div class="body-wrap">
                        <div class="slider product-slider">
                            <div class="product-card">
                                <div class="pro-img">
                                    <img src="./assets/images/products/tv-unit/tv-unit-img-1.png" alt="">
                                </div>
                                <div class="product-content">
                                    <span>Tv Unit</span>
                                    <a href="#">contemporary tv unit</a>
                                </div>
                            </div>

                            <div class="product-card">
                                <div class="pro-img">
                                    <img src="./assets/images/products/tv-unit/tv-unit-img-2.png" alt="">
                                </div>
                                <div class="product-content">
                                    <span>Tv Unit</span>
                                    <a href="#">PU Finish Tv Unit</a>
                                </div>
                            </div>

                            <div class="product-card">
                                <div class="pro-img">
                                    <img src="./assets/images/products/tv-unit/tv-unit-img-3.png" alt="Laminate Tv Unit">
                                </div>
                                <div class="product-content">
                                    <span>Tv Unit</span>
                                    <a href="#">Laminate Tv Unit</a>
                                </div>
                            </div>

                            <div class="product-card">
                                <div class="pro-img">
                                    <img src="./assets/images/products/tv-unit/tv-unit-img-4.png" alt="Veneer Tv Unit">
                                </div>
                                <div class="product-content">
                                    <span>Tv Unit </span>
                                    <a href="#">Veneer Tv Unit </a>
                                </div>
                            </div>

                            <div class="product-card">
                                <div class="pro-img">
                                    <img src="./assets/images/products/tv-unit/tv-unit-img-5.png" alt="Glaas Tv Unit">
                                </div>
                                <div class="product-content">
                                    <span>Tv Unit</span>
                                    <a href="#">Glaas Tv Unit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li data-title="Kitchen">
                    <div class="body-wrap">
                        <div class="slider product-slider">
                            <div class="product-card">
                                <div class="pro-img">
                                    <img src="./assets/images/products/kitchen/kitchen-img-1.jpg" alt="PU Finish Kitchen">
                                </div>
                                <div class="product-content">
                                    <span>Kitchen</span>
                                    <a href="#">PU Finish Kitchen</a>
                                </div>
                            </div>

                            <div class="product-card">
                                <div class="pro-img">
                                    <img src="./assets/images/products/kitchen/kitchen-img-2.png" alt="Laminate Finish kitchen">
                                </div>
                                <div class="product-content">
                                    <span>kitchen</span>
                                    <a href="#">Laminate Finish kitchen</a>
                                </div>
                            </div>

                            <div class="product-card">
                                <div class="pro-img">
                                    <img src="./assets/images/products/kitchen/kitchen-img-3.jpg" alt="Veneer Finish kitchen">
                                </div>
                                <div class="product-content">
                                    <span>kitchen</span>
                                    <a href="#">Veneer Finish kitchen</a>
                                </div>
                            </div>

                            <div class="product-card">
                                <div class="pro-img">
                                    <img src="./assets/images/products/kitchen/kitchen-img-4.jpg" alt="Glass Finish kitchen">
                                </div>
                                <div class="product-content">
                                    <span>kitchen </span>
                                    <a href="#">Glass Finish kitchen</a>
                                </div>
                            </div>

                            <div class="product-card">
                                <div class="pro-img">
                                    <img src="./assets/images/products/kitchen/kitchen-img-5.jpg" alt="Modular Kitchen">
                                </div>
                                <div class="product-content">
                                    <span>kitchen</span>
                                    <a href="#">Modular Kitchen</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

    </div>
</section>

<section class="how-it-work">
    <div class="container">

        <div class="title">
            <h2>How It Works?</h2>
        </div>

        <div class="wrap">
            <div class="slider we-work-slider">

                <div class="cust-steps step-1">
                    <div class="cust-step-img">
                        <figure>
                            <img src="./assets/images/designing.jpg" alt="designing image">
                        </figure>
                    </div>
                    <div class="cust-stpes-count">
                        <span>1.</span>
                    </div>
                    <div class="content">
                        <h5>Designing</h5>
                        <p>Processing & manufacturing of superior quality products that combine on par industry standard experienced craftsmen and state of the art imported machinery.</p>
                    </div>
                </div>

                <div class="cust-steps step-1">
                    <div class="cust-step-img">
                        <figure>
                            <img src="./assets/images/prototype-img.jpg" alt="prototype">
                        </figure>
                    </div>
                    <div class="cust-stpes-count">
                        <span>2.</span>
                    </div>
                    <div class="content">
                        <h5>Prototype</h5>
                        <p>Processing & manufacturing of superior quality products that combine on par industry standard experienced craftsmen and state of the art imported machinery.</p>
                    </div>
                </div>

                <div class="cust-steps step-1">
                    <div class="cust-step-img">
                        <figure>
                            <img src="./assets/images/production.jpg" alt="production">
                        </figure>
                    </div>
                    <div class="cust-stpes-count">
                        <span>3.</span>
                    </div>
                    <div class="content">
                        <h5>Production</h5>
                        <p>Processing & manufacturing of superior quality products that combine on par industry standard experienced craftsmen and state of the art imported machinery.</p>
                    </div>
                </div>

                <div class="cust-steps step-1">
                    <div class="cust-step-img">
                        <figure>
                            <img src="./assets/images/quality-assessment.jpg" alt="quality assessment">
                        </figure>
                    </div>
                    <div class="cust-stpes-count">
                        <span>4.</span>
                    </div>
                    <div class="content">
                        <h5>Quality Assessment</h5>
                        <p>Compiling finishes with thorough layers of colors, lacquers and sealers to really add to the overall fineness. Designated quality checking team to really priories the refinement.</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<section class="type-of-furniture-work">
    <div class="container">

        <div class="title">
            <h2>Type of furniture work</h2>
            <p>Planning to buy a customized piece made as per your taste and requirement is surely a thing to cherish for. But finding a right team to work on the same is equally challenging. But if you are reading this then we must say you have landed at right place. If you are planning to buy Industrial Furniture which gives you a amalgam of looks with comfort then we will make sure to exceed your expectations in all fronts.</p>
        </div>

        <div class="wrap">
            <div class="slider furniture-work-slider">

                <div class="work-list">
                    <div class="cust-img">
                        <figure>
                            <img src="./assets/images/bespoke-furniture-1.jpg" alt="bespoke furniture">
                        </figure>
                    </div>
                    <div class="content">
                        <h5>Bespoke Furniture</h5>
                    </div>
                </div>

                <div class="work-list">
                    <div class="cust-img">
                        <figure>
                            <img src="./assets/images/wood-work.jpg" alt="wrood work">
                        </figure>
                    </div>
                    <div class="content">
                        <h5>Wood Working</h5>
                    </div>
                </div>

                <div class="work-list">
                    <div class="cust-img">
                        <figure>
                            <img src="./assets/images/modular-kitchen.jpg" alt="modular kitchen">
                        </figure>
                    </div>
                    <div class="content">
                        <h5>Modular</h5>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<section class="machinery cust-first">

    <div class="container">

        <div class="title">
            <h2>Cutting Edge Machines</h2>
            <p>At ZCube Design, our commitment to innovation and precision is powered by state-of-the-art machinery housed within our advanced manufacturing facility. Our machines serve as the backbone of our operations, enabling us to turn creative concepts into tangible realities.</p>
        </div>

        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="content">
                    <h3>Biesse <span>jade 340</span></h3>
                    <p>
                    The Biesse Jade 340 is an automatic single-sided edge banding machine. It's a compact, robust machine with a total length of 5160 mm. 
                    It has a glue pot capacity of about 2 kg and can handle panel heights of 10–60 mm. 
                    The machine can also handle edge materials with a height of 14–64 mm and an edge thickness of 0.4–12 mm. 
                    The Jade 340 is part of the Jade 300 range of automatic single-sided edgebanding machines. The Jade 300 is designed for artisan craftsmen who want to improve and automate.
                    </p>
                    <a href="https://www.biesse.com/in/wood/edgebanding-machines/jade-300" target="_blank" class="learn-more">learn more <span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="machine-image">
                    <img src="./assets/images/machine-img/biesse-img.png" alt="biesse machine image">
                </div>
            </div>
        </div>

        <!-- <div class="row ">
            <div class="col-12 col-lg-6 order-2">
                <div class="content">
                    <h3>HOMAG <span>CENTATEQ P-100</span></h3>
                    <p>
                        The CENTATEQ P-100 is a highly efficient CNC Processing center.  Its automatic tool changer and integrated tool management system optimizing CNC 
                        operations and maximizing output. With a strong focus on precision and durability, this machine is built to deliver top-notch results consistently. 
                        With its compact design and efficient features, the CENTATEQ P-100 is the perfect choice for small to medium-sized cabinet furniture workshops. 
                        It provides reliability, productivity, and operator-friendly functionality while minimizing space requirements.
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-6 order-1">
                <div class="machine-image">
                    <img src="./assets/images/machine-img/homag.png" alt="">
                </div>
            </div>
        </div> -->
    </div>
</section>

<section class="machinery-list">
    <div class="container">
        <div class="row">

            <div class="col-6 col-md-3 col-lg-3">
                <div class="wrap">
                    <div class="m-img">
                        <img src="./assets/images/machine-img/machine-img-1.png" alt="machine 1">
                    </div>
                    <div class="m-content">
                        <h5>Multi Boring Machine</h5>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3 col-lg-3">
                <div class="wrap">
                    <div class="m-img">
                        <img src="./assets/images/machine-img/machine-img-2.png" alt="machine 2">
                    </div>
                    <div class="m-content">
                        <h5>Panel Saw UPS 3200A</h5>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3 col-lg-3">
                <div class="wrap">
                    <div class="m-img">
                        <img src="./assets/images/machine-img/machine-img-3.png" alt="machine 3">
                    </div>
                    <div class="m-content">
                        <h5>Spray Paint Booth</h5>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3 col-lg-3">
                <div class="wrap">
                    <div class="m-img">
                        <img src="./assets/images/machine-img/machine-img-4.png" alt="machine 4">
                    </div>
                    <div class="m-content">
                        <h5>Platen Cold Press</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="machinery-list">
    <div class="container">
        <div class="list-wrap">
            <ul>
                <li class="machine-l">
                    <img src="./assets/images/machine-img/machine-img-1.png" alt="">
                </li>
                <li class="machine-l">
                    <img src="./assets/images/machine-img/machine-img-2.png" alt="">
                </li>
                <li class="machine-l">
                    <img src="./assets/images/machine-img/machine-img-3.png" alt="">
                </li>
                <li class="machine-l">
                    <img src="./assets/images/machine-img/machine-img-4.png" alt="">
                </li>
                <li class="machine-l">
                    <img src="./assets/images/machine-img/machine-img-5.png" alt="">
                </li>
                <li class="machine-l">
                    <img src="./assets/images/machine-img/machine-img-6.png" alt="">
                </li>
                <li class="machine-l">
                    <img src="./assets/images/machine-img/machine-img-7.png" alt="">
                </li>
                <li class="machine-l">
                    <img src="./assets/images/machine-img/machine-img-8.png" alt="">
                </li>
            </ul>
        </div>
    </div>
</section> -->

<section class="machinery cust-sec">
    <div class="container">
        <div class="row ">
            <div class="col-12 col-lg-6 order-2">
                <div class="content">
                    <h3>HOMAG <span>CENTATEQ P-100</span></h3>
                    <p>
                        The CENTATEQ P-100 is a highly efficient CNC Processing center.  Its automatic tool changer and integrated tool management system optimizing CNC 
                        operations and maximizing output. With a strong focus on precision and durability, this machine is built to deliver top-notch results consistently. 
                        With its compact design and efficient features, the CENTATEQ P-100 is the perfect choice for small to medium-sized cabinet furniture workshops. 
                        It provides reliability, productivity, and operator-friendly functionality while minimizing space requirements.
                    </p>
                    <a href="https://indiashop.homag.com/products/centateq-p-100"  target="_blank" class="learn-more">learn more <span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                </div>
            </div>
            <div class="col-12 col-lg-6 order-1">
                <div class="machine-image">
                    <img src="./assets/images/machine-img/homag.png" alt="homag machine">
                </div>
            </div>
        </div> 
    </div>
</section>

<section class="dream-today">
    <div class="container">
        <div class="wrap">

            <div class="background-img">
                <figure>
                    <img src="./assets/images/your-dream-bg.png" alt="your dream background image">
                </figure>
            </div>

            <div class="inner-wrap">
                <div class="cust-img">
                    <img src="./assets/images/how-to-become-a-successful-real-estate-agent.png" alt="real estate agrent">
                </div>
                <div class="content">
                    <div class="col-left">
                        <h3>COMPLETE YOUR DREAM Project...</h3>
                    </div>
                    <div class="col-right">
                        <a href="contact-us.php" class="btn">Contact Now</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include('footer.php'); ?>
