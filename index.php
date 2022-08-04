<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Shop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Google Icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- Flat Icons -->
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">

    <!-- Box Icons -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>

    <!-- owl-carousel cdn -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.theme.default.min.css">

    <!-- Favicons -->
    <link href="assets/logo/logo.png" rel="icon">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">Arsha</a></h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li class="dropdown"><a href="#"><span>Catagory</span> <span
                                class="material-symbols-outlined">expand_more</span></a>
                        <ul>
                            <li><a href="#">Juice</a></li>
                            <li><a href="#">Burger</a></li>
                            <li><a href="#">Coffee</a></li>
                            <li><a href="#">Soup</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Reviews</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

                    <?php
                    session_start();
                    if (isset($_SESSION['user_email'])) {
                        echo "<li><a href='admin/dashboard.php'><img class='rounded-circle border' src='assets/profile/profile.png'
                        alt='' height='50px' width='50px' srcset=''></a></li>";
                    } else {
                        echo "<li><a class='getstarted scrollto' id='home-login-btn' data-bs-toggle='modal'
                        data-bs-target='#modalLogin' style='cursor: pointer;'>Login</a></li>";
                    }
                    ?>
                </ul>
                <span class="material-symbols-outlined mobile-nav-toggle">menu</span>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- Start login form -->
    <div class="modal" tabindex="-1" id="modalLogin">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header justify-content-center d-flex">
                    <h5 class="modal-title">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="serverSite/loginSubmit.php" method="POST" id="loginForm">
                        <div class="form-group">
                            <label for="loginEmail">Email Address</label>
                            <input type="email" class="form-control" id="login-email" name="loginEmail"
                                placeholder="Enter email">
                            <span id="erroremail" style="color: red;"></span>
                        </div><br>
                        <div class="form-group">
                            <label for="loginPassword">Password</label>
                            <input type="text" class="form-control" id="login-password" name="loginPassword"
                                placeholder="Password">
                            <span id="errorpass" style="color: red;"></span>
                        </div><br>
                        <div class="d-grid col-6 mx-auto">
                            <button type="submit" class="btn btn-outline-primary text-uppercase btn-block"
                                style="font-weight: 600; transition: .3s;"
                                onclick="return loginValidation()">Login</button>
                        </div>
                    </form><br>
                    <div class="justify-content-center d-flex">
                        <p class="d-inline">I have not an account?</p>
                        <p class="signin-end-text d-inline" id="reg-btn" data-bs-toggle="modal"
                            data-bs-target="#modalRegistration" aria-label="Close">Register now
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End login form -->

    <!-- registration bootstrap -->
    <div class="modal" tabindex="-1" id="modalRegistration">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header justify-content-center d-flex">
                    <h5 class="modal-title">Registration</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="serverSite/registrationSubmit.php" method="POST" id="registrationForm">
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" id="registration-name" name="name"
                                placeholder="Enter your name">
                            <span id="errorname" style="color: red;"></span>
                        </div><br>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="registration-email" name="email"
                                placeholder="Enter email">
                            <span id="erroremail" style="color: red;"></span>
                        </div><br>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" id="registration-password" name="password"
                                placeholder="Password">
                            <span id="errorpass" style="color: red;"></span>
                        </div><br>
                        <div class="d-grid col-6 mx-auto">
                            <button type="submit" class="btn btn-outline-success text-uppercase btn-block"
                                style="font-weight: 600; transition: .3s;"
                                onclick="return registrationValidation()">Register</button>
                        </div>
                    </form><br>
                    <div class="justify-content-center d-flex">
                        <p class="d-inline">I have an account?</p>
                        <p class="signin-end-text d-inline" id="login-btn" data-bs-toggle="modal"
                            data-bs-target="#modalLogin" aria-label="Close">Login now</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End registration -->

    <!-- Hero section -->
    <section class="hero-section">
        <div class="hero-slider owl-carousel">

            <?php
            include 'serversite/fetchIndexPageData.php';

            while ($row = mysqli_fetch_array($result)) {
                echo "
            <div class='hs-item set-bg' data-setbg='$row[s_img_path]'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-xl-6 col-lg-7 text-white'>
                            <span>$row[s_subtitle]</span>
                            <h2>$row[s_title]</h2>
                            <p>$row[s_description]</p>
                            <a href='#' class='site-btn sb-line'>DISCOVER</a>
                            <a href='#' class='site-btn sb-white'>ADD TO CART</a>
                        </div>
                    </div>
                    <div class='offer-card text-white'>
                        <span>from</span>
                        <h2>$row[s_offer_price]</h2>
                        <p>$row[s_offer_name]</p>
                    </div>
                </div>
            </div>
            ";
            }
            ?>
        </div>
        <div class="container">
            <div class="slide-num-holder" id="snh-1"></div>
        </div>
    </section>
    <!-- Hero section end -->

    <!-- letest product section -->
    <section class="top-letest-product-section">
        <div class="container">
            <div class="section-title">
                <h2>LATEST PRODUCTS</h2>
            </div>
            <div class="product-slider owl-carousel">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="assets/product/1.jpg" alt="" class="img-thumbnail">
                        <div class="pi-links">
                            <a href="#" class="add-card"><span
                                    class="material-symbols-outlined shop">shopping_cart</span>
                                <p>ADD TOCART</p>
                            </a>
                            <a href="#" class="wishlist-btn"><span class="material-symbols-outlined">favorite</span></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Flamboyant Pink Top </p>
                    </div>
                </div>
                <div class="product-item">
                    <div class="pi-pic">
                        <div class="tag-new">New</div>
                        <img src="assets/product/2.jpg" alt="" class="img-thumbnail">
                        <div class="pi-links">
                            <a href="#" class="add-card"><span
                                    class="material-symbols-outlined shop">shopping_cart</span>
                                <p>ADD TOCART</p>
                            </a>
                            <a href="#" class="wishlist-btn"><span class="material-symbols-outlined">favorite</span></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Flamboyant Pink Top </p>
                    </div>
                </div>
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="assets/product/3.jpg" alt="" class="img-thumbnail">
                        <div class="pi-links">
                            <a href="#" class="add-card"><span
                                    class="material-symbols-outlined shop">shopping_cart</span>
                                <p>ADD TOCART</p>
                            </a>
                            <a href="#" class="wishlist-btn"><span class="material-symbols-outlined">favorite</span></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Flamboyant Pink Top </p>
                    </div>
                </div>
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="assets/product/4.jpg" alt="" class="img-thumbnail">
                        <div class="pi-links">
                            <a href="#" class="add-card"><span
                                    class="material-symbols-outlined shop">shopping_cart</span>
                                <p>ADD TOCART</p>
                            </a>
                            <a href="#" class="wishlist-btn"><span class="material-symbols-outlined">favorite</span></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Flamboyant Pink Top </p>
                    </div>
                </div>
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="assets/product/6.jpg" alt="" class="img-thumbnail">
                        <div class="pi-links">
                            <a href="#" class="add-card"><span
                                    class="material-symbols-outlined shop">shopping_cart</span>
                                <p>ADD TOCART</p>
                            </a>
                            <a href="#" class="wishlist-btn"><span class="material-symbols-outlined">favorite</span></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Flamboyant Pink Top </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- letest product section end -->

    <!-- Product filter section -->
    <section class="product-filter-section">
        <div class="container">
            <div class="section-title">
                <h2>BROWSE TOP SELLING PRODUCTS</h2>
            </div>
            <div class="row">
                <ul class="product-filter-menu">
                    <li><a href="#">TOPS</a></li>
                    <li><a href="#">JUMPSUITS</a></li>
                    <li><a href="#">LINGERIE</a></li>
                    <li><a href="#">JEANS</a></li>
                    <li><a href="#">DRESSES</a></li>
                    <li><a href="#">COATS</a></li>
                    <li><a href="#">JUMPERS</a></li>
                    <li><a href="#">LEGGINGS</a></li>
                </ul>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-4 col-6">
                    <div class="card">
                        <img src="assets/product/5.jpg" class="card-img-top" alt="...">
                        <div class="pl-links">
                            <a href="#" class="add-card"><span
                                    class="material-symbols-outlined shop">shopping_cart</span>
                                <p>ADD TOCART</p>
                            </a>
                            <a href="#" class="wishlist-btn"><span class="material-symbols-outlined">favorite</span></a>
                        </div>
                        <div class="card-body pi-text">
                            <div class="d-flex justify-content-between">
                                <p>Flamboyant Pink Top</p>
                                <h5>$35,00</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-4 col-6">
                    <div class="card">
                        <img src="assets/product/6.jpg" class="card-img-top" alt="...">
                        <div class="pl-links">
                            <a href="#" class="add-card"><span
                                    class="material-symbols-outlined shop">shopping_cart</span>
                                <p>ADD TOCART</p>
                            </a>
                            <a href="#" class="wishlist-btn"><span class="material-symbols-outlined">favorite</span></a>
                        </div>
                        <div class="card-body pi-text">
                            <div class="d-flex justify-content-between">
                                <p>Flamboyant Pink Top </p>
                                <h5>$35,00</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-4 col-6">
                    <div class="card">
                        <img src="assets/product/7.jpg" class="card-img-top" alt="...">
                        <div class="pl-links">
                            <a href="#" class="add-card"><span
                                    class="material-symbols-outlined shop">shopping_cart</span>
                                <p>ADD TOCART</p>
                            </a>
                            <a href="#" class="wishlist-btn"><span class="material-symbols-outlined">favorite</span></a>
                        </div>
                        <div class="card-body pi-text">
                            <div class="d-flex justify-content-between">
                                <p>Flamboyant Pink Top </p>
                                <h5>$35,00</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-4 col-6">
                    <div class="card">
                        <img src="assets/product/8.jpg" class="card-img-top" alt="...">
                        <div class="pl-links">
                            <a href="#" class="add-card"><span
                                    class="material-symbols-outlined shop">shopping_cart</span>
                                <p>ADD TOCART</p>
                            </a>
                            <a href="#" class="wishlist-btn"><span class="material-symbols-outlined">favorite</span></a>
                        </div>
                        <div class="card-body pi-text">
                            <div class="d-flex justify-content-between">
                                <p>Flamboyant Pink Top </p>
                                <h5>$35,00</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-4 col-6">
                    <div class="card">
                        <img src="assets/product/9.jpg" class="card-img-top" alt="...">
                        <div class="pl-links">
                            <a href="#" class="add-card"><span
                                    class="material-symbols-outlined shop">shopping_cart</span>
                                <p>ADD TOCART</p>
                            </a>
                            <a href="#" class="wishlist-btn"><span class="material-symbols-outlined">favorite</span></a>
                        </div>
                        <div class="card-body pi-text">
                            <div class="d-flex justify-content-between">
                                <p>Flamboyant Pink Top </p>
                                <h5>$35,00</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-4 col-6">
                    <div class="card">
                        <img src="assets/product/10.jpg" class="card-img-top" alt="...">
                        <div class="pl-links">
                            <a href="#" class="add-card"><span
                                    class="material-symbols-outlined shop">shopping_cart</span>
                                <p>ADD TOCART</p>
                            </a>
                            <a href="#" class="wishlist-btn"><span class="material-symbols-outlined">favorite</span></a>
                        </div>
                        <div class="card-body pi-text">
                            <div class="d-flex justify-content-between">
                                <p>Flamboyant Pink Top </p>
                                <h5>$35,00</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-4 col-6">
                    <div class="card">
                        <img src="assets/product/11.jpg" class="card-img-top" alt="...">
                        <div class="pl-links">
                            <a href="#" class="add-card"><span
                                    class="material-symbols-outlined shop">shopping_cart</span>
                                <p>ADD TOCART</p>
                            </a>
                            <a href="#" class="wishlist-btn"><span class="material-symbols-outlined">favorite</span></a>
                        </div>
                        <div class="card-body pi-text">
                            <div class="d-flex justify-content-between">
                                <p>Flamboyant Pink Top </p>
                                <h5>$35,00</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-4 col-6">
                    <div class="card">
                        <img src="assets/product/12.jpg" class="card-img-top" alt="...">
                        <div class="pl-links">
                            <a href="#" class="add-card"><span
                                    class="material-symbols-outlined shop">shopping_cart</span>
                                <p>ADD TOCART</p>
                            </a>
                            <a href="#" class="wishlist-btn"><span class="material-symbols-outlined">favorite</span></a>
                        </div>
                        <div class="card-body pi-text">
                            <div class="d-flex justify-content-between">
                                <p>Flamboyant Pink Top </p>
                                <h5>$35,00</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center pt-5">
                    <button class="site-btn sb-line sb-dark">LOAD MORE</button>
                </div>
            </div>
    </section>
    <!-- Product filter section end -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email" style="outline: none;"><input type="submit"
                                value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Arsha</h3>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; 2022 Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
            </div>
            <div class="credits">Designed by <a href="https://yousufislam191.github.io/resume"
                    target="_blank">Yousuf</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><span
            class="material-symbols-outlined">arrow_upward</span></a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

    <!-- owl-carousel cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js"></script>

    <!-- Template Custom JS File -->
    <script src="js/main.js"></script>
    <script src="js/login.js"></script>
    <script src="js/registration.js"></script>
</body>

</html>