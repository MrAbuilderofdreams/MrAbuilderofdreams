<?php
// Inizio della sessione (utile se vuoi gestire sessioni utente)
session_start();

// Include del file di configurazione
require 'config.php';

// Eventuali altre inclusioni di file PHP possono essere aggiunte qui
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tooplate's Little Fashion</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/slick.css"/>
    <link href="css/tooplate-little-fashion.css" rel="stylesheet">
</head>

<body>

    <section class="preloader">
        <div class="spinner">
            <span class="sk-inner-circle"></span>
        </div>
    </section>

    <main>
        <!-- Navbar Section -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a class="navbar-brand" href="index.html">
                    <strong><span>Little</span> Fashion</strong>
                </a>

                <div class="d-lg-none">
                    <a href="sign-in.html" class="bi-person custom-icon me-3"></a>
                    <a href="product-detail.html" class="bi-bag custom-icon"></a>
                </div>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">Story</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="products.html">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="faq.html">FAQs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>
                    <div class="d-none d-lg-block">
                        <a href="sign-in.html" class="bi-person custom-icon me-3"></a>
                        <a href="product-detail.html" class="bi-bag custom-icon"></a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Slideshow Section -->
        <section class="slick-slideshow">
            <div class="slick-custom">
                <img src="images/slideshow/medium-shot-business-women-high-five.jpeg" class="img-fluid" alt="">
                <div class="slick-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-10">
                                <h1 class="slick-title">Cool Fashion</h1>
                                <p class="lead text-white mt-lg-3 mb-lg-5">Little fashion template comes with total 8 HTML pages provided by Tooplate website.</p>
                                <a href="about.html" class="btn custom-btn">Learn more about us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Altri elementi dello slideshow... -->
        </section>

        <!-- About Section -->
        <section class="about section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="mb-5">Get started with <span>Little</span> Fashion</h2>
                    </div>
                    <div class="col-lg-2 col-12 mt-auto mb-auto">
                        <ul class="nav nav-pills mb-5 mx-auto justify-content-center align-items-center" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Introduction</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-youtube-tab" data-bs-toggle="pill" data-bs-target="#pills-youtube" type="button" role="tab" aria-controls="pills-youtube" aria-selected="true">How we work?</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-skill-tab" data-bs-toggle="pill" data-bs-target="#pills-skill" type="button" role="tab" aria-controls="pills-skill" aria-selected="false">Capabilities</button>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-10 col-12">
                        <div class="tab-content mt-2" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="row">
                                    <div class="col-lg-7 col-12">
                                        <img src="images/pim-chu-z6NZ76_UTDI-unsplash.jpeg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-5 col-12">
                                        <div class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5">
                                            <h4 class="mb-3">Good <span>Design</span> Ideas for <span>your</span> fashion</h4>
                                            <p>Little Fashion templates comes with <a href="sign-in.html">sign in</a> / <a href="sign-up.html">sign up</a> pages, product listing / product detail, about, FAQs, and contact page.</p>
                                            <p>Since this HTML template is based on Bootstrap 5 CSS library, you can feel free to add more components as you need.</p>
                                            <div class="mt-2 mt-lg-auto">
                                                <a href="about.html" class="custom-link mb-2">
                                                    Learn more about us
                                                    <i class="bi-arrow-right ms-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Altri tab... -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Front Product Section -->
        <section class="front-product">
            <div class="container-fluid p-0">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12">
                        <img src="images/retail-shop-owner-mask-social-distancing-shopping.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="px-5 py-5 py-lg-0">
                            <h2 class="mb-4"><span>Retail</span> shop owners</h2>
                            <p class="lead mb-4">Credits go to Unsplash and FreePik websites for images used in this Little Fashion by Tooplate.</p>
                            <a href="products.html" class="custom-link">
                                Explore Products
                                <i class="bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Product Section -->
        <section class="featured-product section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="mb-5">Featured Products</h2>
                    </div>
                    <div class="col-lg-4 col-12 mb-3">
                        <div class="product-thumb">
                            <a href="product-detail.html">
                                <img src="images/product/evan-mcdougall-qnh1odlqOmk-unsplash.jpeg" class="img-fluid product-image" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Include footer and scripts here, se necessario -->
    <footer>
        <!-- Footer content -->
    </footer>

    <!-- Script inclusions -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>
