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
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
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
    <div class="container-fluid bg-breadcrumb" style="background-image: url(image/banner/aboutus.jpg);background-position:bottom">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Products</h1>
                <ol class="breadcrumb justify-content-center text-white mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html" class="text-white">Home</a></li>
                    <li class="breadcrumb-item active text-secondary">Products</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->
    <!--  -->
    <section>
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-3 my-3">
                    <div class="btn_box">
                        <?php
                        include "config.php";
                        $select = "SELECT * from `pro`";
                        $qu = mysqli_query($con, $select);
                        $s_no = 1;
                        while ($row = mysqli_fetch_array($qu)) {

                        ?>
                            <a href="product.php?id=<?php echo $row['id'] ?>"><button class="text-start"><?php echo $row['name'] ?></button></a>
                        <?php } ?>
                    </div>
                    <div class="contact_box px-4 mt-3">
                        <div class="row">
                            <div class="col-12 border  py-5">
                                <img src="" alt="">
                                <h4 class="mt-3 text-white">Contact Us</h4>
                                <p class="text-white">Lorem ipsum dolor sit amet consectetur.</p>
                                <a href="tel:919789658397" class="my-3 text-white d-block">+91 9789658397</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 my-3">
                    <?php
                    include "config.php";
                    $id = $_GET['id'];
                    $select = "SELECT * from `pro` where `id`='$id'";
                    $qu = mysqli_query($con, $select);
                    $s_no = 1;
                    while ($row = mysqli_fetch_array($qu)) {

                    ?>

                        <img src="<?php echo $row['image'] ?>" class="rounded border border-2 shadow-lg" height="300px" style="object-fit: cover;" width="100%" alt="">
                        <h4 class="my-4"><?php echo $row['name'] ?></h4>
                        <?php echo $row['content'] ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <?php
include "footer.php";

?>