<?php
require_once 'utils/connection.php';
include 'config/constants.php';
require_once 'common/components.php';
require("vendor/autoload.php");

if (isset($_SESSION['user_type']) && $_SESSION['user_type'] === 'community') {
    header('location: community-profile.php');
}

$accountType = "trainee";
$userName = "Lori Ferguson";


?>


<!DOCTYPE html>
<html lang="en">
<?= head("Profile") ?>
</head>

<body>
    <?= scrollToTopBtn(); ?>
    <?= navbar("profile") ?>
    <main>
        <!-- ====================== Page Banner START -->
        <section class="pt-0">
            <div class="container-fluid px-0">
                <div class="bg-primary" style="height:150px; background:url(img/04.png) no-repeat center center; background-size:cover;">
                </div>
            </div>

            <div class="container" style="margin-top: -50px;">
                <div class="row">
                    <div class="col-12">
                        <div class="card bg-transparent card-body pb-0 px-0 mt-2 mt-sm-0">
                            <div class="row d-sm-flex justify-sm-content-between mt-2 mt-md-0">
                                <!-- Avatar -->
                                <div class="col-auto">
                                    <div class="avatar avatar-xxl position-relative mt-n3">
                                        <img class="avatar-img rounded-circle border border-white border-3 shadow" src="uploads/users/worker-blue.webp" alt="Profile">
                                    </div>
                                </div>
                                <!-- Profile info -->
                                <div class="col d-sm-flex justify-content-between align-items-end">
                                    <div>
                                        <h1 class="my-1 fs-4">Lori Ferguson</h1>
                                        <p class="text-success">Employed</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Advanced filter responsive toggler START -->
                        <!-- Divider -->
                        <hr class="d-xl-none">
                        <div class="col-12 col-xl-3 d-flex justify-content-between align-items-center">
                            <a class="h6 mb-0 fw-bold d-xl-none" href="#">Menu</a>
                            <button class="btn btn-primary d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                                <i class="fas fa-sliders-h"></i>
                            </button>
                        </div>
                        <!-- Advanced filter responsive toggler END -->
                    </div>
                </div>
            </div>
        </section>
        <!-- ======================= Page Banner END -->

        <!-- ======================= Page content START -->
        <section class="pt-0 mb-5">
            <div class="container">
                <div class="row">

                    <!-- Left sidebar START -->
                    <div class="col-xl-3">
                        <!-- Responsive offcanvas body START -->
                        <?= profileSidebar("overview") ?>
                        <!-- Responsive offcanvas body END -->
                    </div>
                    <!-- Left sidebar END -->

                    <!-- Main content START -->
                    <div class="col-xl-9">

                        <!-- Counter boxes START -->
                        <div class="row mb-4">
                            <!-- Counter item -->
                            <div class="col-sm-6 col-lg-6 mb-3 mb-lg-0">
                                <div class="d-flex justify-content-center align-items-center p-4 bg-primary-light bg-opacity-15 rounded-3">
                                    <span class="display-6 lh-1 mb-0"><i class="bi bi-book"></i></span>
                                    <div class="ms-4">
                                        <div class="d-flex">
                                            <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="1" data-purecounter-delay="200" data-purecounter-duration="0">1</h5>
                                        </div>
                                        <p class="mb-0 h6 fw-light">Total Training Programs</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Counter item -->
                            <div class="col-sm-6 col-lg-6 mb-3 mb-lg-0">
                                <div class="d-flex justify-content-center align-items-center p-4 bg-primary-light bg-opacity-15 rounded-3">
                                    <span class="display-6 lh-1 mb-0"><i class="bi bi-clipboard-check"></i></span>
                                    <div class="ms-4">
                                        <div class="d-flex">
                                            <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="1" data-purecounter-delay="200" data-purecounter-duration="0">1</h5>
                                        </div>
                                        <p class="mb-0 h6 fw-light">Completed Training Programs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Counter boxes END -->

                        <!-- Card trainee details -->
                        <div class="card border my-4 p-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5>Location</h5>
                                    <!-- Google Map -->
                                    <!-- <div id="map"></div> -->
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d965.3541917243363!2d121.01198942919787!3d14.57530549730876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9bd33c5e7e1%3A0x2a5121c941fdcde0!2s1007%20Del%20Pan%2C%20Santa%20Ana%2C%20Manila%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1649928497316!5m2!1sen!2sph" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                                </div>
                                <div class="col-lg-6">
                                    <h5>Skills</h5>
                                    <div class="d-flex">
                                        <div class="btn btn-outline-secondary m-2">Service</div>
                                        <div class="btn btn-outline-secondary m-2">Retail</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-transparent border rounded-3">
                            <!-- Card header START -->
                            <div class="card-header bg-transparent border-bottom">
                                <h3 class="mb-0">Training Programs</h3>
                            </div>
                            <!-- Card header END -->

                            <!-- Card body START -->
                            <div class="card-body">

                                <!-- Course list table START -->
                                <div class="table-responsive border-0">
                                    <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                                        <!-- Table head -->
                                        <thead>
                                            <tr>
                                                <th scope="col" class="border-0 rounded-start">Program Title</th>
                                                <th scope="col" class="border-0">Status</th>
                                                <th scope="col" class="border-0">Hiring Status</th>
                                        </thead>

                                        <!-- Table body START -->
                                        <tbody>
                                            <!-- Table item -->
                                            <tr>
                                                <!-- Table data -->
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <!-- Image -->
                                                        <div class="w-100px">
                                                            <img src="uploads/training-programs/logo-2.png" class="rounded avatar" alt="">
                                                        </div>
                                                        <div class="mb-0 ms-2">
                                                            <!-- Title -->
                                                            <h6><a href="jobs-training-details.php?">Company 1 Store Cashier</a></h6>
                                                        </div>
                                                    </div>
                                                </td>

                                                <!-- Table data -->
                                                <td>
                                                    <div class="badge bg-success">Graduated</div>
                                                </td>

                                                <!-- Table data -->
                                                <td>
                                                    <div class="badge bg-success">Hired</div>
                                                </td>
                                            </tr>


                                        </tbody>
                                        <!-- Table body END -->
                                    </table>
                                </div>
                                <!-- Course list table END -->

                            </div>
                            <!-- Card body START -->
                        </div>
                        <!-- Main content END -->
                    </div><!-- Row END -->
                </div>
            </div>
        </section>
        <!-- =======================
    Page content END -->

    </main>

    </main>
    <!-- ======================= Footer START -->
    <?= footer() ?>
    <!-- ======================= Footer END -->

    <!-- Vendor Files -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="vendor/purecounter/purecounter.js"></script>
    <script>
        new PureCounter();
    </script>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo GOOGLE_CLOUD_KEY ?>&callback=initMap" async></script>


    <!-- user scripts -->
    <script src="js/scrollTop.js"></script>
    <script src="js/map.js"></script>
    <script>
        AOS.init({
            once: true
        });
    </script>


</body>

</html>