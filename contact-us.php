<?php

include dirname(__FILE__) . DIRECTORY_SEPARATOR . "includes/header.php";

include dirname(__FILE__) . DIRECTORY_SEPARATOR . "includes/navbar.php";
?>
<!-- ======= Contact Us Section ======= -->
<section class="bg-black">
    <div class="py-5 position-relative" id="c4-help">
        <div class="py-5px-5 mx-5">
        <h3 class="mb-5 text-start h2 ybo-light-blue2">How we can help you?</h3>
        <h3 class="mb-5 text-start h1 text-light">“Committed to excellence<br>in serving our community.”</h3>
        </div>
    </div>
</section>
<section id="contact" class="contact container-fluid ybo-bg-light">
    <div class="container ybo-container pb-5">
        <!-- <h1 class="py-2 text-center ybo-text-gold pt-3" id="ybo-page-head"><?php echo $page_label ; ?></h1> -->
        <div class="row d-flex align-items-center pt-5">
            <div class="col-lg-4 reveal">
                <!-- <h4>Contcact Info</h4> -->
                <br>
                <div class="info">
                    <div class="open-hours">
                        <!-- <i class="bi bi-clock"></i> -->
                        <img class="img-fluid p-1" src="images/logos/24-7.png" alt="">
                        <h4 class="ybo-text-gold">Availability:</h4>
                        <p class="ybo-text-darkgreen text-decoration-none" >
                            Mon - Friday: 8am to 5pm<br>
                            Customer Service - 24/7
                        </p>
                    </div>        
                    <hr>
                    <div class="phone">
                        <!-- <i class="bi bi-phone"></i> -->
                        <img class="img-fluid p-1" src="images/logos/phone.png" alt="">
                        <h4 class="ybo-text-gold">Call:</h4>
                        <p><a class="ybo-text-darkgreen text-decoration-none" title="Call Us" href="tel:#"></a><a class="ybo-text-darkgreen text-decoration-none" title="Call Us" href="tel:#">(403)865-9967</a></p>
                    </div>                    
                    <hr>            
                    <div class="address">
                        <!-- <i class="bi bi-geo-alt"></i> -->
                        <img class="img-fluid p-1" src="images/logos/location.png" alt="">
                        <h4 class="ybo-text-gold">Location:</h4>
                        <p><a class="ybo-text-darkgreen text-decoration-none" title="Our Location" href="#">Address Details</a></a></p>
                    </div>
                    <hr>
                    <div class="email">
                        <!-- <i class="bi bi-envelope"></i> -->
                        <img class="img-fluid p-1" src="images/logos/email.png" alt="">
                        <h4 class="ybo-text-gold">Email:</h4>
                        <p><a class="ybo-text-darkgreen text-decoration-none" title="E-mail Us" href="mailto: .com">
info@c4solution.ca</a></p>
                    </div>

                </div>
            </div>

            <div class="col-lg-8 mt-5 mt-lg-0 reveal">
                <h4 class="text-center ybo-text-darkgreen">Fill the Form</h4>
                  <form action="ybo-WQELC66AE6czc1" method="post" enctype="multipart/form-data" class="php-email-form text-dark" data-aos="fade-up" data-aos-delay="300">
                    <div class="row gy-4">

                      <div class="col-md-12">
                        <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                      </div>

                      <div class="col-md-6">
                        <input type="text" name="phone" class="form-control" placeholder="Contact No." required="">
                      </div>


                      <div class="col-md-6 ">
                        <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                      </div>


                      <div class="col-md-12">
                        <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                      </div>

                      <div class="col-md-12 text-center">
                        <!-- <div class="loading">Loading</div> -->
                        <!-- <div class="error-message text-light"></div> -->
                        <!-- <div class="sent-message">Your message has been sent. Thank you!</div> -->

                        <!-- <button type="submit">Send Message</button> -->
                        <button type="submit" id="sendMailBtn" name="sendMailBtn" title="Submit Message" "submit" class="btn">Submit</button></div>
                        <!-- <button id="sendMailBtn" name="sendMailBtn" type="submit">Submit</button> -->
                      

                    </div>
                  </form>>
            </div>
        </div>
    </div>
</section>


<?php 
include( dirname(__FILE__) . DIRECTORY_SEPARATOR . 'includes/our-services.php'); 
include( dirname(__FILE__) . DIRECTORY_SEPARATOR . 'includes/footer.php'); 
?>
