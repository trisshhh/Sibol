<?php
require_once 'utils/connection.php';
include 'config/constants.php';
require_once 'common/components.php';
?>


<!DOCTYPE html>
<html lang="en-US">

<?= head("Sibol Training and Placement Center"); ?>

<body>
    <?= scrollToTopBtn(); ?>
    <?= navbar(""); ?>
    <!-- Header END -->

    <!-- **************** MAIN CONTENT START **************** -->
    <main>
        <!-- ======================= Main Banner START -->
        <section class="position-relative overflow-hidden mt-5 pt-5 pt-lg-3">
            <!-- Content START -->
            <div class="container">
                <!-- Title -->
                <div class="row align-items-center g-5">
                    <!-- Left content START -->
                    <div class="col-lg-5 col-xl-6 position-relative z-index- text-lg-start mb-5 mb-sm-0">
                        <!-- Title -->
                        <h1 class="mb-0 display-5 font-weight-bold">Empowering people through
                            <span class="position-relative">employment
                                <!-- SVG START -->
                                <span class="position-absolute top-50 start-50 translate-middle ms-3 z-index-n1">
                                    <svg width="300px" height="62.1px" enable-background="new 0 0 366 62.1" viewBox="0 0 366 62.1" xmlns="http://www.w3.org/2000/svg">
                                        <path class="fill-warning" d="m322.5 25.3c0 1.4 2.9 0.8 3.1 1.6 0.8 1.1-1.1 1.3-0.6 2.4 13.3 0.9 26.9 1.7 40.2 4-2.5 0.7-4.9 1.6-7.3 1.1-4-0.9-8.2-1-12.2-1.2-8.5-0.5-16.9-1.9-25.5-1.7h-3.1c2.6 0.6 4.8 0.4 5.7 2.2-7.3 0.4-14.1-0.8-21.2-1.1-0.2 0.6-0.5 1.2-0.8 1.8 21.3 0.7 42.5 1.6 64.3 4.6-4.2 1.6-7.7 1-10.8 0.8-6.8-0.5-13.5-1.3-20.3-1.9-0.9-0.1-2.3-0.1-2.9 0.2-2.2 1.6-4.3 0.6-7 0.4 1.4-1 2.5 0.5 3.9-0.8-5.6-1-10.7 0.6-15.9 0s-10.5-0.6-16.6-0.8c2 1.6 4.6 1.3 6.2 1.4 4.9 0 9.9 0.8 14.8 0.7 5.3-0.1 10.4 0.5 15.5 0.9 3.2 0.3 6.7-0.1 9.9-0.4 1.1-0.1 0.5 0.3 0.6 0.6 0.5 0.9 2.2 0.8 3.6 0.8 5.1-0.1 10.1 0.6 14.8 1.5 0.8 0.1 1.5 0 1.7 0.7 0 0.7-0.8 0.6-1.5 0.8-3.9 1.2-7.4-0.2-11.1-0.2-2 0-4.3-1.5-6 0.5-0.3 0.4-1.4 0.1-2.2-0.1-4.5-0.8-9.1-0.5-13.8-1.5-2.3-0.5-5.6 0.1-8.4 0.5-4 0.5-8-0.7-12.1-0.9-3.4-0.2-7.1-0.5-10.5-0.7-7.1-0.3-14.2-1.2-22.3-0.4 4.9 1.1 9.4 1.2 13.8 1.2 9.7 0 19.2 2.3 28.9 1.6 7.3 3.2 15.9 1.5 23.8 2.9 4.9 0.8 10.1 0.8 15.2 1.2 0.5 0 0.8 0.3 1.1 0.9-20-2.1-40.2-1.4-60.8-3 4.9 2.1 10.8-0.3 15.3 2.7-8 1.9-15.8-0.9-23.5-0.1 2.8 1.4 7.1 1.1 9.3 3.3 0.5 0.5 0.2 1.1-1.2 1.3 2.3 1 3.4-2.1 5.7-0.4 0.2-0.6 0.2-1 0.3-1.5 0.8-0.3 2 0.8 1.5 1.5-0.2 0.1 0 0.3 0 0.5 18.7 0.4 37.3 1.7 56.2 3.6-1.7 1.1-2.8 1.2-4.2 1.1-7.1-0.5-14.1-0.9-21.2-1.4-3.1-0.2-6.3-0.4-9.4-0.4-7.6-0.2-15-0.7-22.4-1-9-0.4-17.9-0.1-26.9-0.1-1.2 0-2.9-0.4-3.9 1 14.8 0.3 29.7 0.6 44.4 1.1 14.8 0.6 29.9 1.3 44.2 4.2-4.3 1-8.8 0.9-13 0.5-5.3-0.5-10.5-1.1-15.8-1.2-11.4-0.3-22.9-0.9-34.3-1.2-17.6-0.4-35.4-0.3-53.1-0.4-10.8-0.1-21.7-0.2-32.5 0-17.8 0.4-35.7 0.2-53.5 0.5-13.1 0.3-26.3 0.1-39.4 0.5-11.1 0.3-22.4 0.6-33.6 1-13.1 0.6-26.1 0.2-39.3 0.4-3.9 0.1-7.6 0.2-11.8-0.2 0.9-1.2 2.3-1.3 3.9-1.3 8.4 0.2 16.6-0.4 24.9-0.9 3.9-0.2 7.9-0.4 11.9 0.2 2.5 0.4 5.3-0.3 8-0.4 7.3-0.4 14.7-0.7 22-0.9 11.9-0.5 23.7-1.2 35.6-0.8 7.7 0.2 15.3-0.6 22.9-0.1 2.3 0.2 4.3-0.5 6.5-1h-17.6c-9.6 0-19-0.1-28.6 0-8 0.1-16.1 0.3-24 0.8-2.6 0.2-5.4 0.1-8.2 0.1-10.1 0.3-20.1 0.6-30.2 0.5-5.4 0-10.7-0.1-15.9 0.6-2.3 0.3-4-1.3-6.5-0.6 0.2 0.4 0.5 0.9 0.6 1.5-1.9 0-4 0.4-4.9-0.1-4.2-2.2-9.4-1.5-14.1-2.3-1.7-0.3-3.7-0.1-4.3-1.5-0.5-1.3 1.9-1.5 2.6-2.6-4.2-1.4-4.6-5-8.5-7.2-1.5 0.2-0.9 2.8-4.2 1.3 0.3 2.4 4.5 3.9 2.8 6.4-2.3 0.3-3.2-0.8-4.2-1.7-2.5-4-5.1-8.4-5.1-12.7 0.2-6.8 0.2-13.8 3.6-20.4 0.3-0.5 0.3-1 0.8-1.4 0.9-0.9 1.2-2.4 3.6-2.1 2.2 0.2 2.5 1.5 2.6 2.6 0.2 1.4 1.5 1.8 3.2 2.5 0.9-1.4 0.5-2.9 2.6-3.7 0.2-0.1 0.3-0.4 0.3-0.4-3.1-2.2 1.2-2.2 2.3-3.3-3.1-1.8-4-4.3-3.7-7-1.5-0.3-3.1-0.4-4.5 0-1.7 0.6-2.2-0.5-2.9-1 0.6-0.5 0.8-1.1 2.2-1.3 7.6-0.9 15.2-1.7 22.9-2 20-0.7 39.9-0.9 59.9-1 11.9-0.1 23.8 0.4 35.6 1.1 3.6 0.2 7.1-0.9 10.7-0.5 7.9 0.9 15.8 0.3 23.8 0.5 7.3 0.1 14.4-0.6 21.7-0.1 12.2 0.9 24.4 0.3 36.7 0.6 9.4 0.3 18.9 0.4 28.2 1 11.9 0.7 23.8 1.3 35.6 2 11.1 0.6 22.4 0.5 33.3 2 7.1 1 14.4 1.1 21.3 2.4 4 0.7 8.2 1.6 12.4 1.9 2.2 0.2 0.9 1 1.5 1.5-4-0.8-8-0.8-12.1-1.4-4.3-0.7-8.5-1-12.8 0.4-2.9 1-6.3 0.2-9.3-0.1-10.2-1.1-20.6-1.6-30.8-2.4-12.1-0.9-24.3-1.4-36.4-2.1-9.9-0.6-20-0.5-29.9-1-11.4-0.6-22.7 0-34.2-0.5-6.3-0.3-12.3-0.3-18.5-0.4-4.2-0.1-8.4 1.3-12.8 0.3 0.6 0.2 1.2 0.7 1.9 0.7 10.5 0 20.9 1.9 31.6 1.7 6.5-0.1 13.1 0.2 19.8 0.8 3.2 0.3 6.3-0.4 9.7-0.1 7.6 0.7 15.5 0.5 23 0.8 12.4 0.5 24.7 0.4 37.1 1.1 13.3 0.7 26.8 2.1 39.9 4.1 6.2 0.9 12.7 1.5 19.2 1.7 0.6 0 1.1 0.1 1.5 0.5-4.6 0.1-9.3 0-13.9-0.5-0.6 1.1 1.4 0.9 1.5 1.9-9.7 1.6-19.6-1.4-29.4-0.1 2.2 1.4 5.1 1 7.4 1 7.3 0.1 14.1 1.3 21.2 1.9 2.8 0.3 5.9 0 8.5 0.8 1.5 0.5 4.6-1.1 4.9 1.3 4-0.7 7.3 1.5 11.1 1.2 4-0.3 7.7 0.6 11.6 1.1 0.8 0.1 2.2 0.3 2.3 1.1 0.2 1-1.1 1.2-2 1.5-3.4 1-6.7-0.4-10.1-0.4-0.9 0-2-0.2-2.9-0.2-9.4 0.1-18.8-1.3-28.3-1.8-6-0.4-12.1-0.9-18.1-1.3 0 0.2 0 0.4-0.2 0.6 6.1 0.5 12.1 1.4 18.3 0.7z"></path>
                                    </svg>
                                </span>
                                <!-- SVG END -->
                            </span>
                        </h1>

                        <!-- Content -->
                        <p class="my-4 lead">Helping out-of-school youth, assisting communities and empowering them in their future through training and employment.</p>

                        <!-- Info -->
                        <ul class="list-inline position-relative justify-content-center justify-content-lg-start mb-4">
                            <li class="list-inline-item me-2"> <i class="bi bi-patch-check-fill h6 me-1"></i>Learn with mentors</li>
                            <li class="list-inline-item me-2"> <i class="bi bi-patch-check-fill h6 me-1"></i>Get trained</li>
                            <li class="list-inline-item"> <i class="bi bi-patch-check-fill h6 me-1"></i>Get hired</li>
                        </ul>

                        <div class="d-sm-flex align-items-center justify-content-center justify-content-lg-start">
                            <!-- Button -->
                            <!-- TODO: fix folder sructure -->
                            <a href="signup-trainee.php" class="btn btn-lg btn-primary me-2 mb-4 mb-sm-0">Get Started</a>
                        </div>
                    </div>
                    <!-- Left content END -->

                    <!-- Right content START -->
                    <div class="col-lg-7 col-xl-6 text-center position-relative">
                        <!-- Image -->
                        <div class="position-relative">
                            <img src="img/hero-img.png" alt="Hero Image">
                        </div>
                    </div>
                    <!-- Right content END -->
                </div>
            </div>
            <!-- Content END -->
        </section>
        <!-- ======================= Main Banner END -->

        <!-- ======================= Why US START -->
        <section class="mt-5 py-5 py-lg-3 bg-light">
            <div class="container py-5">
                <!-- Category START -->
                <div class="row g-4">
                    <!-- Category item -->
                    <div class="col-sm-6 col-lg-12 col-xl-3" data-aos="fade-up">
                        <h2 class="font-weight-bold">Employment made accessible to everyone.</h2>
                        <p>Lorem ipsum dolorem</p>
                    </div>

                    <!-- Category item -->
                    <div class="col-sm-6 col-lg-4 col-xl-3" data-aos="fade-up">
                        <div class="card card-body shadow h-100 p-4">
                            <h5 class="text-primary">Direct recruitment</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                    </div>

                    <!-- Category item -->
                    <div class="col-sm-6 col-lg-4 col-xl-3" data-aos="fade-up">
                        <div class="card card-body shadow h-100 p-4">
                            <h5 class="text-primary">Direct recruitment</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                    </div>

                    <!-- Category item -->
                    <div class="col-sm-6 col-lg-4 col-xl-3" data-aos="fade-up">
                        <div class="card card-body shadow h-100 p-4">
                            <h5 class="text-primary">Direct recruitment</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                    </div>
                </div>
                <!-- Category END -->
            </div>
        </section>
        <!-- ======================= Why US END -->

        <!-- ======================= Community START -->
        <section class="mt-5 py-5 py-lg-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <!-- Title -->
                    <h2 class="h1 mb-4 text-center font-weight-bold" data-aos="fade-up">Are You a Community?</h2>

                    <!-- Left side START -->
                    <div class="col-lg-6">
                        <p class="mb-4" data-aos="fade-up">Are you looking for a way to provide employment to youth in your community? <?= WEBSITE_NAME ?> helps you achieve this.</p>

                        <!-- List -->
                        <ul class="list-inline vstack gap-4 flex-wrap mb-4">
                            <!-- Item -->
                            <li class="list-inline-item d-sm-flex" data-aos="fade-up">
                                <div class="icon-md text-white bg-success rounded flex-shrink-0">
                                    <span class="bi bi-check"></span>
                                </div>
                                <div class="ms-0 ms-sm-3 mt-2 mt-sm-0">
                                    <h5 class="mb-0">Guaranteed jobs for the youth</h5>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse auctor ullamcorper nulla.</p>
                                </div>
                            </li>
                            <!-- Item -->
                            <li class="list-inline-item d-sm-flex" data-aos="fade-up">
                                <div class="icon-md text-white bg-success rounded flex-shrink-0">
                                    <span class="bi bi-check"></span>
                                </div>
                                <div class="ms-0 ms-sm-3 mt-2 mt-sm-0">
                                    <h5 class="mb-0">Lorem ipsum dolorem</h5>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse auctor ullamcorper nulla. </p>
                                </div>
                            </li>
                            <!-- Item -->
                            <li class="list-inline-item d-sm-flex" data-aos="fade-up">
                                <div class="icon-md text-white bg-success rounded flex-shrink-0">
                                    <span class="bi bi-check"></span>
                                </div>
                                <div class="ms-0 ms-sm-3 mt-2 mt-sm-0">
                                    <h5 class="mb-0">Affordable pricing plans</h5>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse auctor ullamcorper nulla. </p>
                                </div>
                            </li>
                        </ul>

                        <!-- Button -->
                        <a href="signup-community.php" class="btn btn-lg btn-outline-primary mt-4" data-aos="fade-up">Sign up as a community</a>
                    </div>
                    <!-- Left side END -->

                    <!-- Right side START -->
                    <div class="col-lg-6" data-aos="fade-up">
                        <!-- Image -->
                        <img src="img/team.png" class="rounded-2" alt="">
                    </div>
                    <!-- Right side END -->
                </div>
            </div>
        </section>
        <!-- ======================= Community END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    <!-- ======================= Footer START -->
    <?= footer() ?>
    <!-- ======================= Footer END -->

    <!-- Vendor Files -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.js"></script>

    <!-- user scripts -->
    <script src="js/scrollTop.js"></script>
    <script>
        AOS.init({
            once: true
        });
    </script>


</html>