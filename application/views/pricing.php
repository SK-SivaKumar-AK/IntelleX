<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>




<!-- Preloader Area -->
<div class="preloader-area">
    <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>
</div>
<!-- End Preloader Area -->

<?php $this->load->view('components/header'); ?>

<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Pricing</h2>
                    <ul>
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>Pricing</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Pricing Section -->
<section class="pricing-section ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="pricing-area-content">
                    <span>The support</span>
                    <h3>Management is easy when getting support properly</h3>
                    <p>Management becomes much easier when you receive the right support at the right time.</p>
                    <p>With the right guidance and resources, tackling challenges and achieving goals becomes a smooth and efficient process.</p>
                </div>
                <div class="pricing-btn-wrap">
                    <div class="price-btn">
                        <a href="#" class="price-btn-one">
                            Pricing Plan
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-pricing-box">
                    <div class="pricing-header">
                        <h3>Static Website</h3>
                    </div>
                    <div class="price">
                        $2000/- <span>Yearly</span>
                    </div>
                    <ul class="pricing-features">
                        <li>
                            <i class="fa fa-arrow-right"></i> 
                            Design (1-5 pages)
                        </li>
                        <li>
                            <i class="fa fa-arrow-right"></i> 
                            Mobile responsiveness
                        </li>
                        <li>
                            <i class="fa fa-arrow-right"></i> 
                            SEO-friendly setup
                        </li>
                        <li>
                            <i class="fa fa-arrow-right"></i> 
                            Hosting and domain setup
                        </li>
                        <li>
                            <i class="fa fa-arrow-right"></i> 
                            Maintanence
                        </li>
                    </ul>   
                    <div class="buy-btn">
                        <a href="contact.html" class="buy-btn-one">Get Info</a>
                    </div>
                </div>   
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-pricing-box table-price">
                    <div class="pricing-header">
                        <h3>Dynamic Website</h3>
                    </div>
                    <div class="price">
                        $4000/- <span>Yearly</span>
                    </div>
                    <ul class="pricing-features">
                        <li>
                            <i class="fa fa-arrow-right"></i> 
                            Design (1-10 pages)
                        </li>
                        <li>
                            <i class="fa fa-arrow-right"></i> 
                            Mobile responsiveness
                        </li>
                        <li>
                            <i class="fa fa-arrow-right"></i> 
                            Multiple Database
                        </li>
                        <li>
                            <i class="fa fa-arrow-right"></i> 
                            SEO-friendly setup
                        </li>
                        <li>
                            <i class="fa fa-arrow-right"></i> 
                            Hosting and domain setup
                        </li>
                        <li>
                            <i class="fa fa-arrow-right"></i> 
                            Maintanence
                        </li>
                    </ul>  
                    <div class="buy-btn">
                        <a href="#" class="buy-btn-one">Get Info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Pricing Section -->

<!-- Start Saying Section -->
<!-- <section class="saying-section ptb-100">
    <div class="container">
        <div class="saying-title">
            <h3>What is saying clients about us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolet, consectetur adipiscing  seore suspendisse ultrices gravir.</p>
        </div>
        <div class="saying-slides owl-carousel owl-theme">
            <div class="saying-single-item">
                <div class="saying-content-text">
                    <h3>It’s Amazing Agency i made ever</h3>
                    <p>Lorem ipsum dolor sit ametipisicing elit, sed do eiusmod tempor incididunt ut labore et Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                </div>
                <div class="saying-info">
                    <div class="say-image">
                        <img src="assets/img/say-image/1.jpg" alt="image">
                    </div>
                    <h4>Ketax Andon</h4>
                    <span>Bussiness Solution</span>
                </div>
            </div>
            <div class="saying-single-item">
                <div class="saying-content-text">
                    <h3>It’s Amazing Agency i made ever</h3>
                    <p>Lorem ipsum dolor sit ametipisicing elit, sed do eiusmod tempor incididunt ut labore et Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                </div>
                <div class="saying-info">
                    <div class="say-image">
                        <img src="assets/img/say-image/2.jpg" alt="image">
                    </div>
                    <h4>Kolil Ward</h4>
                    <span>CEO Manager</span>
                </div>
            </div>
            <div class="saying-single-item">
                <div class="saying-content-text">
                    <h3>It’s Amazing Agency i made ever</h3>
                    <p>Lorem ipsum dolor sit ametipisicing elit, sed do eiusmod tempor incididunt ut labore et Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                </div>
                <div class="saying-info">
                    <div class="say-image">
                        <img src="assets/img/say-image/3.jpg" alt="image">
                    </div>
                    <h4>Jandhu Dew</h4>
                    <span>Marketing Manager</span>
                </div>
            </div>
            <div class="saying-single-item">
                <div class="saying-content-text">
                    <h3>It’s Amazing Agency i made ever</h3>
                    <p>Lorem ipsum dolor sit ametipisicing elit, sed do eiusmod tempor incididunt ut labore et Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                </div>
                <div class="saying-info">
                    <div class="say-image">
                        <img src="assets/img/say-image/4.jpg" alt="image">
                    </div>
                    <h4>Andon Smait</h4>
                    <span>Bussiness Solution</span>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- End Saying Section -->

<!-- Start Request Section -->
<section class="request-section ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="request-area">
                    <h3>Submit a Request</h3>
                    <div class="request-form">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Whats Your Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Phone Number">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Time for call">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Message">
                            </div>
                            <button type="submit" class="btn btn-primary">Call For Consultent</button>
                        </form>
                    </div>
                </div>    
            </div>

            <div class="col-lg-6">
                <div class="request">
                    <img src="assets/img/request.jpg" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Request Section -->

<?php $this->load->view('components/footer'); ?>

<!-- Start Go Top Section -->
<div class="go-top">
    <i class="fas fa-chevron-up"></i>
    <i class="fas fa-chevron-up"></i>
</div>
<!-- End Go Top Section -->
