<!-- Spinner Start -->
<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-secondary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-light px-5 d-none d-lg-block">
    <div class="row justify-content-between gx-0 align-items-center">
        <div class="col-lg-5 text-center text-lg-start mb-lg-0">
            <div class="d-flex">
                <a href="mailto:Smstradingcorporation22@gmail.com" class="text-muted me-4"><i
                        class="fas fa-envelope text-secondary me-2"></i>Smstradingcorporation22@gmail.com</a>
                <a href="tel:919843407196" class="text-muted me-0"><i class="fas fa-phone-alt text-secondary me-2"></i>+91
                    9843407196</a>
            </div>
        </div>
        <div class="col-lg-3 row-cols-1  mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i
                        class="fab fa-twitter fw-normal text-secondary"></i></a>
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i
                        class="fab fa-facebook-f fw-normal text-secondary"></i></a>
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i
                        class="fab fa-linkedin-in fw-normal text-secondary"></i></a>
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i
                        class="fab fa-instagram fw-normal text-secondary"></i></a>
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle" href=""><i
                        class="fab fa-youtube fw-normal text-secondary"></i></a>
            </div>
        </div>

    </div>
</div>



<style>
.side_nav{
    /* background-color: #2b873a !important;
    outline: 7px solid #2b873a !important;
    border: 2px dashed white; */
}
</style>
<!-- <section class=" py-3 ">
    <div class="container-fluid  ">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <h5> SMS TRADING CORPORATION</h5>
            </div>
            <div class="col-lg-5  side_nav">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center">
                            <img src="image/icon/call.png" class="mx-2" height="50px" width="50px" alt="">
                            <div class="lh-sm">
                                <a href="" class="fs-4 d-block p-0 m-0">435345345</a>
                                <p class="p-0 m-0"><small>CALL US TODAY</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center">
                            <img src="image/icon/mail2.png" class="mx-2  - " height=" " width=" " alt="">
                            <div class="lh-sm">
                                <a href="" class="fs-4 d-block p-0 m-0">435345345</a>
                                <p class="p-0 m-0"><small>CALL US TODAY</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg_pos"></div>
        </div>
    </div>
</section> -->
<div class="container-fluid nav-bar p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            SMS TRADING CORPORATION
            <!-- <img src="logo.jpg" class="logo" height="70px" width="130px" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="service.php" class="nav-item nav-link">Service</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link" data-bs-toggle="dropdown"><span class="dropdown-toggle">Products</span></a>
                    <div class="dropdown-menu m-0">
                        <?php
                        include "config.php";

                        $select = "SELECT * from `pro` ";
                        $qu = mysqli_query($con, $select);
                        $s_no = 1;
                        while ($row = mysqli_fetch_array($qu)) {

                        ?>
                            <a href="product.php?id=<?php echo $row['id'] ?>" class="dropdown-item"><?php echo $row['name'] ?></a>
                        <?php } ?>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar & Hero End -->