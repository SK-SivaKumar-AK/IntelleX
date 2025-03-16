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
                            <h2>Contact</h2>
                            <ul>
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Contact Box Area -->
		<section class="contact-box">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-contact-box">
							<i class="fa fa-map-marker"></i>
							<div class="content-title">
								<h3>Address</h3>
								<p>6C Raja St, TVS Tolgate, Trichy</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-contact-box">
							<i class="fa fa-envelope"></i>
							<div class="content-title">
								<h3>Email</h3>
								<span>intellex.webcompany@gmail.com</span>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
						<div class="single-contact-box">
							<i class="fa fa-phone"></i>
							<div class="content-title">
								<h3>Phone</h3>
								<span>9629080081</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Box Area -->

        <!-- Start Contact Area -->
		<section class="contact-area pb-100">
			<div class="container">
				<div class="section-title">
					<h2>Drop us a message for any query</h2>
					<p>If you have an idea, we would love to hear about it.</p>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<div class="contact-form">
							<form id="contactForm">
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    
									<div class="col-lg-6">
										<div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    
									<div class="col-lg-6">
										<div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Phone">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    
									<div class="col-lg-6">
										<div class="form-group">
                                            <input type="text" name="subject" id="subject" required data-error="Please enter your subject" class="form-control" placeholder="Subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    
									<div class="col-lg-12">
										<div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="Your Message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    
									<div class="col-lg-12">
                                        <button type="submit" class="default-btn">Send Message</button>
                                        
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Area -->

        <?php $this->load->view('components/footer'); ?>

        <!-- Start Go Top Section -->
        <div class="go-top">
            <i class="fas fa-chevron-up"></i>
            <i class="fas fa-chevron-up"></i>
        </div>
        <!-- End Go Top Section -->
