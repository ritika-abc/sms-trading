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
    <!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">  -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> -->

    <!-- Libraries Stylesheet -->
    <!-- <link href="lib/animate/animate.min.css" rel="stylesheet"> -->
    <!-- <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> -->

    <!-- <link rel="stylesheet" href="lib/animate/animate.css"> -->
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- owl -->
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.green.min.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/docs/assets/css/animate.css">
    <script src="OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
    <script src="OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>

</head>

<body>
    <?php
    include "header.php";
    ?>

    <!-- Carousel Start -->
    <!-- <div class="carousel-header">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="image/banner/1.jpg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="text-center p-4" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.1s">Solution For All Type Of Visas</h4>
                                <h1 class="display-1 text-capitalize text-white mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.3s">Immigration Process Starts Here!</h1>
                                <p class="text-white mb-4 mb-md-5 fs-5 wow fadeInUp" data-wow-delay="0.5s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                </p>
                                <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5 wow fadeInUp" data-wow-delay="0.7s" href="#">More Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/carousel-2.jpg" class="img-fluid" alt="Image">
                        <div class="carousel-caption">
                            <div class="text-center p-4" style="max-width: 900px;">
                                <h5 class="text-white text-uppercase fw-bold mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.1s">Solution For All Type Of Visas</h5>
                                <h1 class="display-1 text-capitalize text-white mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.3s">Best Visa Immigrations Services</h1>
                                <p class="text-white mb-4 mb-md-5 fs-5 wow fadeInUp" data-wow-delay="0.5s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                </p>
                                <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5 wow fadeInUp" data-wow-delay="0.7s" href="#">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-secondary wow fadeInLeft" data-wow-delay="0.2s" aria-hidden="false"></span>
                    <span class="visually-hidden-focusable">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-secondary wow fadeInRight" data-wow-delay="0.2s" aria-hidden="false"></span>
                    <span class="visually-hidden-focusable">Next</span>
                </button>
            </div>
        </div> -->
    <!-- Carousel End -->
    <div class="">
        <div class="owl-carousel slider">
            <img src="image/banner/1.jpg" alt="">
            <img src="image/banner/1.jpg" alt="">
        </div>
    </div>

    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h4 class="modal-title text-secondary mb-0" id="exampleModalLabel">Search by keyword</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords"
                            aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->

    <style>

    </style>

    <section class="py-5" style="background-color: rgb(248 249 250);">
        <div class="container">
            <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3"> Service</h5>
                </div>
                <h1 class="display-5 mb-4">Our Service</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 my-3">
                    <div class="shadow-lg text-center py-5 px-1 rounded h-100">
                        <img src="image/icon/1.png" alt="">
                        <h4>Quality Sourcing</h4>
                        <p>We are committed to delivering products that meet the highest industry standards. Our team works with trusted suppliers who share our commitment to quality and sustainability, ensuring that our customers receive only the best. Each product is carefully sourced and inspected to guarantee freshness, durability, and safety.</p>
                        <!-- <p>We meticulously select our ingredients from trusted local farmers, ensuring that every product meets our high standards of quality and sustainability. This commitment guarantees you receive only the best.</p> -->
                        <a href="service.php">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-3">
                    <div class="shadow-lg text-center py-5 px-1 rounded h-100">
                        <img src="image/icon/2.png" alt="">
                        <h4>Custom Orders</h4>
                        <p>We are committed to delivering products that meet the highest industry standards. Our team works with trusted suppliers who share our commitment to quality and sustainability, ensuring that our customers receive only the best. Each product is carefully sourced and inspected to guarantee freshness, durability, and safety.</p>
                        <!-- <p>Looking for something specific? We provide custom orders tailored to your needs. Whether you’re a chef, a retailer, or a health-conscious individual, we can accommodate bulk purchases or unique product requests.</p> -->
                        <a href="service.php">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 my-3 col-md-6">
                    <div class="shadow-lg text-center py-5 px-1 rounded h-100">
                        <img src="image/icon/3.png" alt="">
                        <h4>Customer Support</h4>
                        <p>Customer satisfaction is at the heart of everything we do. Our customer support team is always available to assist with any inquiries, orders, or concerns you may have. We believe in building long-term relationships with our clients, and our support team is here to ensure that your experience with SMS Trading Corporation is smooth, efficient, and hassle-free.</p>
                        <!-- <p>Our dedicated customer support team is here to assist you. Whether you have questions about our products or need assistance with your order, we’re just a message away.</p> -->
                        <a href="service.php">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="a">
        <!-- About Start -->
        <div class="container-fluid py-5">
            <div class="container py-5 bg-white">
                <div class="row g-5">
                    <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.1s">
                        <!-- <div class="bg-light rounded">
                                <img src="img/about-2.png" class="img-fluid w-100" style="margin-bottom: -7px;" alt="Image">
                                <img src="img/about-3.jpg" class="img-fluid w-100 border-bottom border-5 border-primary" style="border-top-right-radius: 300px; border-top-left-radius: 300px;" alt="Image">
                            </div> -->
                        <img src="image/about.jpg" height="auto" width="100%" alt="">
                    </div>
                    <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.3s">
                        <h5 class="sub-title pe-3">Welcome To </h5>
                        <h1 class="display-6 text-danger mb-4"> SMS TRADING CORPORATION
                        </h1>
                        <p class="mb-4">Welcome to SMS Trading Corporation, a premier supplier and exporter of high-quality products that meet the diverse needs of businesses and consumers around the world. With a strong focus on excellence, we have built a reputation as a trusted partner for a wide range of industries, offering products that span steels, tiles, sanitarywares, agricultural commodities, specialty foods, and much more.</p>
                        <h5>Our Commitment to Sustainability</h5>
                        <p>We are committed to promoting sustainable business practices, ensuring that our operations are environmentally friendly and socially responsible. From sourcing materials to packaging and logistics, we strive to minimize our environmental impact and promote eco-friendly alternatives. Our goal is to contribute positively to the communities we serve and ensure that our business practices align with global sustainability standards.</p>
                        <a href="" class="btn btn-outline-primary px-3">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
    </section>




    <!-- Services Start -->
    <div class="container-fluid service overflow-hidden pt-5">
        <div class="container py-5">
            <div class="section-title text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">Products</h5>

                </div>
                <h1 class="display-5 mb-4">Our Products </h1>
                <img src="image/banner/1 (1).png" height="40px" width="200px" alt="">

            </div>
            <div class="row g-4">
                <div class="col-12 col-md-6   col-lg-3 my-4 cards_animation " data-aos="zoom-in-down">

                    <div class="cat_inner  border d-block rounded-top  text-capitalize p-3 shadow-lg rounded ">
                        <div class="cat_icon pro_box border border-4 border-dark"><img src="image/coconut.jpg"
                                height="250px" width="100%" style="object-fit:cover" alt="Cover image 1">
                        </div>
                        <div class="cat_name mt-3 fw-bold  mx-2 text-danger">Coconut</div>
                        <div class="mt-3">
                            <a href="" class="btn btn-sm btn-dark">Enquiry</a>
                            <a href="" class="btn btn-sm btn-danger">Details</a>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-6   col-lg-3 my-4 cards_animation " data-aos="zoom-in-down">
                    <div class="cat_inner  border d-block rounded-top  text-capitalize p-3 shadow-lg rounded ">
                        <div class="cat_icon pro_box border border-4 border-dark"><img src="image/rice.jpg"
                                height="250px" width="100%" style="object-fit:cover" alt="Cover image 1">
                        </div>
                        <div class="cat_name mt-3 fw-bold  mx-2 text-danger">Rice</div>
                        <div class="mt-3">
                            <a href="" class="btn btn-sm btn-dark">Enquiry</a>
                            <a href="" class="btn btn-sm btn-danger">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6   col-lg-3 my-4 cards_animation " data-aos="zoom-in-down">
                    <div class="cat_inner  border d-block rounded-top  text-capitalize p-3 shadow-lg rounded ">
                        <div class="cat_icon pro_box border border-4 border-dark"><img src="image/TILES.jpg"
                                height="250px" width="100%" style="object-fit:cover" alt="Cover image 1">
                        </div>
                        <div class="cat_name mt-3 fw-bold  mx-2 text-danger">TILES</div>
                        <div class="mt-3">
                            <a href="" class="btn btn-sm btn-dark">Enquiry</a>
                            <a href="" class="btn btn-sm btn-danger">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6   col-lg-3 my-4 cards_animation " data-aos="zoom-in-down">
                    <div class="cat_inner  border d-block rounded-top  text-capitalize p-3 shadow-lg rounded ">
                        <div class="cat_icon pro_box border border-4 border-dark"><img src="image/steel.jpg"
                                height="250px" width="100%" style="object-fit:cover" alt="Cover image 1">
                        </div>
                        <div class="cat_name mt-3 fw-bold  mx-2 text-danger">steel</div>
                        <div class="mt-3">
                            <a href="" class="btn btn-sm btn-dark">Enquiry</a>
                            <a href="" class="btn btn-sm btn-danger">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6   col-lg-3 my-4 cards_animation " data-aos="zoom-in-down">
                    <div class="cat_inner  border d-block rounded-top  text-capitalize p-3 shadow-lg rounded ">
                        <div class="cat_icon pro_box border border-4 border-dark"><img src="image/JAGGERY.jpg"
                                height="250px" width="100%" style="object-fit:cover" alt="Cover image 1">
                        </div>
                        <div class="cat_name mt-3 fw-bold  mx-2 text-danger">JAGGERY</div>
                        <div class="mt-3">
                            <a href="" class="btn btn-sm btn-dark">Enquiry</a>
                            <a href="" class="btn btn-sm btn-danger">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6   col-lg-3 my-4 cards_animation " data-aos="zoom-in-down">
                    <div class="cat_inner  border d-block rounded-top  text-capitalize p-3 shadow-lg rounded ">
                        <div class="cat_icon pro_box border border-4 border-dark"><img src="image/potato.jpg"
                                height="250px" width="100%" style="object-fit:cover" alt="Cover image 1">
                        </div>
                        <div class="cat_name mt-3 fw-bold  mx-2 text-danger">POTATO</div>
                        <div class="mt-3">
                            <a href="" class="btn btn-sm btn-dark">Enquiry</a>
                            <a href="" class="btn btn-sm btn-danger">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6   col-lg-3 my-4 cards_animation " data-aos="zoom-in-down">
                    <div class="cat_inner  border d-block rounded-top  text-capitalize p-3 shadow-lg rounded ">
                        <div class="cat_icon pro_box border border-4 border-dark"><img src="image/onion.jpg"
                                height="250px" width="100%" style="object-fit:cover" alt="Cover image 1">
                        </div>
                        <div class="cat_name mt-3 fw-bold  mx-2 text-danger">Onion</div>
                        <div class="mt-3">
                            <a href="" class="btn btn-sm btn-dark">Enquiry</a>
                            <a href="" class="btn btn-sm btn-danger">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6   col-lg-3 my-4 cards_animation " data-aos="zoom-in-down">
                    <div class="cat_inner  border d-block rounded-top  text-capitalize p-3 shadow-lg rounded ">
                        <div class="cat_icon pro_box border border-4 border-dark"><img src="image/GINGER.jpg"
                                height="250px" width="100%" style="object-fit:cover" alt="Cover image 1">
                        </div>
                        <div class="cat_name mt-3 fw-bold  mx-2 text-danger">GINGER</div>
                        <div class="mt-3">
                            <a href="" class="btn btn-sm btn-dark">Enquiry</a>
                            <a href="" class="btn btn-sm btn-danger">Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a class="btn btn-primary border-secondary rounded-pill py-3 px-5 wow fadeInUp"
                        data-wow-delay="0.1s" href="#">View More Products</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->
    <!-- Feature Start -->
    <div class="b">
        <div class="container overflow-hidden py-5 px-lg-0">
            <div class="container   py-5 px-lg-0">
                <div class="row g-5 mx-lg-0">
                    <div class="col-lg-6 feature-text wow fadeInUp bg-white py-4 shadow-lg rounded" data-wow-delay="0.1s">
                        <!-- <h6 class="text-secondary text-uppercase mb-3">Our Product Features</h6> -->
                        <h1 class="mb-5">Our Product Features</h1>
                        <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s">

                            <div class="ms-4">
                                <h5 class="text-danger"> Premium Quality</h5>
                                <p class="mb-0 justify">We source our products directly from trusted farms and suppliers who follow strict quality control measures. This ensures that every batch of Gram Leaves, Gram Stem, and Nannari Root is pure, unadulterated, and free from harmful chemicals, pesticides, or preservatives. When you choose our products, you're choosing the best nature has to offer.
                                </p>
                            </div>
                        </div>
                        <div class="d-flex mb-5 wow fadeIn" data-wow-delay="0.5s">

                            <div class="ms-4">
                                <h5 class="text-danger">Consistency & Reliability
                                </h5>
                                <p class="mb-0 justify">We believe in providing our customers with consistent and reliable products. Our food products like jaggery, sugar, and spices, as well as construction materials like steel and tiles, are carefully sourced and processed to ensure uniformity in quality and availability. With SMS Trading Corporation, you can rely on a steady supply of products, whether in bulk or custom orders.</p>
                            </div>
                        </div>
                        <div class="d-flex mb-0 wow fadeInUp" data-wow-delay="0.7s">

                            <div class="ms-4">
                                <h5 class="text-danger">Freshness & Natural Ingredients</h5>
                                <p class="mb-0 justify">For our agricultural and food products, freshness is a top priority. We work closely with farmers and trusted suppliers to ensure that our produce—such as onions, potatoes, ginger, garlic, and exotic fruits like dragon fruit—arrives at your doorstep in the freshest condition. Our natural oils and organic products are sourced with a focus on purity and sustainability, ensuring that you receive healthy, chemical-free ingredients.</p>
                            </div>
                        </div>
                        <div class="text- ">
                            <a class="btn btn-primary mx-4 border-secondary mt-4 rounded-pill py-3 px-5 wow fadeInUp"
                                data-wow-delay="0.1s" href="#">Services</a>
                        </div>
                    </div>
                    <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <div class="bg3"></div>
                            <!-- <img src="image/export.jpg" height="100%" width="100%" style="object-fit: cover;" alt=""> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <?php
    include "footer.php";
    ?>