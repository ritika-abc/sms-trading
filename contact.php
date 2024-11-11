<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Travisa - Visa & Immigration Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
<?php
include "header.php";
?>
        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html" class="text-white">Home</a></li>
          
                    <li class="breadcrumb-item active text-secondary">Contact</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- Contact Start -->
        <div class="container-fluid contact overflow-hidden py-5">
            <div class="container py-5">
                <div class="row g-5 mb-5">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="sub-style">
                            <h5 class="sub-title text-primary pe-3">Quick Contact</h5>
                        </div>
                        <h1 class="display-5 mb-4">How Can We Assist You?</h1>
                        <p class="mb-5">At Muthu Traders, we are dedicated to providing the best customer experience and ensuring that all your needs are met. Whether you have questions about our range of natural products, need assistance with an order, or want to learn more about how our products can benefit your health and wellness, our team is here to help. Please feel free to reach out via phone, email, or through our social media channels. We value your feedback and strive to provide timely, personalized support. Let us know how we can assist you today – we look forward to hearing from you!</p>
                        <div class="d-flex border-bottom mb-4 pb-4">
                            <i class="fas fa-map-marked-alt fa-4x text-primary bg-light p-3 rounded"></i>
                            <div class="ps-3">
                                <h5>Location</h5>
                                <p> Mullai Nagar , THOOTHUKUDI-628 002 , Tamil-Nadu ,India</p>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-xl-12">
                                <div class="d-flex">
                                    <i class="fas fa-tty fa-3x text-primary"></i>
                                    <div class="ps-3">
                                        <h5 class="mb-3">Quick Contact</h5>
                                        <div class="mb-3">
                                            <h6 class="mb-0">Phone:</h6>
                                            <a href="tel:919789658397" class="fs-5 text-primary"> +91 9789658397</a>
                                        </div>
                                        <div class="mb-3">
                                            <h6 class="mb-0">Email:</h6>
                                            <a href="mail:muthutraders97@gmail.com" class="fs-5 text-primary">muthutraders97@gmail.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                             
                        </div>
                         
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3">
                        <div class="sub-style">
                            <h5 class="sub-title text-primary pe-3">Let’s Connect</h5>
                        </div>
                        <h1 class="display-5 mb-4">Send Your Message</h1>
                       
                        <form>
                            <div class="row g-4">
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="phone" class="form-control" id="phone" placeholder="Phone">
                                        <label for="phone">Your Phone</label>
                                    </div>
                                </div>                               
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 160px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Contact End -->

        <?php
include "footer.php";

?>