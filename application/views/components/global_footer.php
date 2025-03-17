<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



        <!-- jQuery Min JS -->
        <script data-cfasync="false" src="assets/js/email-decode.min.js"></script>
        <script src="assets/js/jquery.min.js"></script>
        <!-- Bootstrap Bundle Min JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!-- MeanMenu JS  -->
        <script src="assets/js/jquery.meanmenu.js"></script>
        <!-- Appear Min JS -->
        <script src="assets/js/jquery.appear.min.js"></script>
        <!-- Odometer Min JS -->
        <script src="assets/js/odometer.min.js"></script>
        <!-- Owl Carousel Min JS -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Magnific Popup Min JS -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Nice Select Min JS -->
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <!-- WOW Min JS -->
        <script src="assets/js/wow.min.js"></script>
        <!-- Form Validator JS -->
		<script src="assets/js/form-validator.min.js"></script>
        <!-- Ajaxchimp Min JS -->
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
		<!-- Contact JS -->
		<script src="assets/js/contact-form-script.js"></script>
        <!-- Particles JS -->
        <script src="assets/js/particles.min.js"></script>
        <!-- Progressbar Min JS -->
        <script src="assets/js/progressbar.min.js"></script>
        <!-- Main JS -->
        <script src="assets/js/main.js"></script>
        <script>
            $(document).ready(function () {
                $('#consultationForm').submit(function (e) {
                    e.preventDefault();

                    
                    var formData = $(this).serialize();
                    $('#response').html('<div class="alert alert-info" role="alert">Sending email... <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span></div>');
                    
                    $.ajax({
                        url: '<?php echo base_url('welcome/consulting_send_email'); ?>',
                        type: 'POST',
                        data: formData,
                        dataType: 'json',
                        success: function(response) {
                            $('#response').html('');
                            if(response.status) {
                                $("#consultationForm")[0].reset();
                                $('#response').html('<div class="alert alert-success" role="alert">' + response.message + '</div>');
                            } else {
                                $('#response').html('<div class="alert alert-danger" role="alert">' + response.message + '</div>');
                            }
                        },
                        error: function() {
                            $('#response').html('<div class="alert alert-danger" role="alert">There was an error sending the email.</div>');
                        }
                    });
                });

                $('#contactForm').submit(function (e) {
                    e.preventDefault();

                    
                    var formData = $(this).serialize();
                    $('#response').html('<div class="alert alert-info" role="alert">Sending email... <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span></div>');
                    
                    $.ajax({
                        url: '<?php echo base_url('welcome/contact_send_email'); ?>',
                        type: 'POST',
                        data: formData,
                        dataType: 'json',
                        success: function(response) {
                            $('#response').html('');
                            if(response.status) {
                                $("#contactForm")[0].reset();
                                $('#response').html('<div class="alert alert-success" role="alert">' + response.message + '</div>');
                            } else {
                                $('#response').html('<div class="alert alert-danger" role="alert">' + response.message + '</div>');
                            }
                        },
                        error: function() {
                            $('#response').html('<div class="alert alert-danger" role="alert">There was an error sending the email.</div>');
                        }
                    });
                });
            });
        </script>
    </body >
</html>