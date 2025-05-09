<?php $title = "Get in Touch with Oxford Book US";
$desc = "Have questions, requests, or inquiries? Reach out to our dedicated team. Contact us today to discuss your project!";
include "include/header.php"; ?>

<div class="mainBanner innerBanner">
    <div class="container aboutusBanner" style="background-image:url(assets/images/banner/contact-us-banner.webp)">
        <div class="banner-content banner-content2">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <h1 class="banner-heading text-white">
                        Contact Us
                    </h1>
                </div>
            </div>
        </div>
        <div>
            <img src="assets/images/vector1.webp" alt="image" class="vector1" loading="lazy">
            <img src="assets/images/vector2.webp" alt="image" class="vector2" loading="lazy">
        </div>
    </div>
</div>

<section class="contact-page">
    <div class="oc"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="info-form">
                    <div class="sec-heading">
                        <h2>
                            <span>Work With </span> Us
                        </h2>
                    </div>

                    <form action="email.php" class="contact-form" method="GET">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" name="name" placeholder="Name" class="form-control" required="">
                                <input type="email" name="email"placeholder="Email Address" class="form-control" required="">
                                <input type="tel" class="form-control" required="" name="phone" minlength="7" maxlength="14" placeholder="Your Phone">
                            </div>
                            <div class="col-md-12">
                                <textarea name="message" class="form-control" required="" placeholder="Enter a brief description about your book"></textarea>
                            </div>                            
                            <div class="col-md-12 ">                                
                                <input type="submit" class="submit-btn" value="Get Started">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5 offset-md-1">
                <div class="detail-contact">
                    <div class="sec-heading">
                        <h2>
                            Connect with Our Experts Today!
                        </h2>
                    </div>
                    <ul class="contact-ul org">
                        <li>
                            <img src="assets/images/cont1-black.webp" alt="image">
                            <a href="javascript:;"> live Chat</a>
                        </li>
                        <li>
                            <img src="assets/images/cont2-black.webp" alt="image">
                            <a href="tel:+1 (302) 597-7704">
                                +1 (302) 597-7704 <span>Call us now</span>
                            </a>
                        </li>                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "include/publishbook-section.php"; ?>

<?php include "include/testimonials-section.php"; ?>

<?php include "include/cta-two-section.php"; ?>

<?php include "include/footer.php"; ?>