<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="exto-responsive-nav">
        <div class="container">
            <div class="exto-responsive-menu">
                <div class="logo">
                    <a href="index.html">
                        <img src="assets/img/logo/logo.png" class="main-logo" alt="logo" width="140px" style="border-radius: 10px;">
                        <img src="assets/img/logo/logo.png" class="white-logo" alt="logo" style="border-radius: 10px;">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="exto-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo/logo.png" class="main-logo" alt="logo" width="160px" style="border-radius: 20px;">
                    <img src="assets/img/logo/logo.png" class="white-logo" alt="logo" style="border-radius: 20px;">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link <?php echo ($page == 'home')? 'active': '' ?>">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/about" class="nav-link <?php echo ($page == 'about')? 'active': '' ?>">
                                About 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/service" class="nav-link <?php echo ($page == 'service')? 'active': '' ?>">
                                Services
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/project" class="nav-link <?php echo ($page == 'project')? 'active': '' ?>">
                                Projects
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/pricing" class="nav-link <?php echo ($page == 'pricing')? 'active': '' ?>">
                                Pricing
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/contact" class="nav-link <?php echo ($page == 'contact')? 'active': '' ?>">
                                Contact
                            </a>
                        </li>
                    </ul>
                    <div class="others-options startup-option">
                        <div class="sidebar-menu" data-bs-toggle="modal" data-bs-target="#myModal2">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->

<!-- Start Sidebar Modal -->
<div class="sidebar-modal">  
    <div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <i class="fa fa-times"></i>
                        </span>
                    </button>
                    <h2 class="modal-title" id="myModalLabel2">
                        <a href="/">
                            <img src="assets/img/logo/logo.png" alt="Logo" style="border-radius: 50px;">
                        </a>
                    </h2>
                </div>
                <div class="modal-body">
                    <div class="sidebar-modal-widget">
                        <h3 class="title">Welcome To IntelleX</h3>
                        <img src="assets/img/about.jpg" alt="">
                        <p>Forward-thinking website development agency specializing in creating sleek, user-friendly, and high-performance websites for businesses of all sizes.</p>
                    </div>
                    <div class="sidebar-modal-widget">
                        <h3 class="title">Contact Info</h3>
                        <ul class="contact-info">
                            <li>
                                <i class="fa fa-map-marker"></i>
                                Address
                                <span>6C Raja St, TVS Tolgate, Trichy</span>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                Email
                                <span>intellex.webcompany@gmail.com</span>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                Phone
                                <span>9629080081</span>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-modal-widget">
                        <h3 class="title">Connect With Us</h3>
                        <ul class="social-list">
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com/" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" target="_blank">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Sidebar Modal -->