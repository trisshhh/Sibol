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

$imageUploader = new ImageUploader();

// Compulsory
$imageUploader->setPath("uploads/users/");   // The directory where images will be uploaded

// The rest are optional
$imageUploader->setSalt("my_application_specific_salt");  // It is used while hashing image names
$imageUploader->setMinFileSize(0);                           // Set minimum file size in bytes
$imageUploader->setMaxFileSize(100000);                      // Set maximum file size in bytes

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
                                <div class="col d-sm-flex justify-content-between align-items-center">
                                    <h1 class="my-1 fs-4">Lori Ferguson</h1>
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
                                            <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="9" data-purecounter-delay="200" data-purecounter-duration="0">9</h5>
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
                                            <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="52" data-purecounter-delay="200" data-purecounter-duration="0">52</h5>
                                        </div>
                                        <p class="mb-0 h6 fw-light">Completed Training Programs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Counter boxes END -->

                        <div class="card bg-transparent border rounded-3">
                            <!-- Card header START -->
                            <div class="card-header bg-transparent border-bottom">
                                <h3 class="mb-0">My Training Programs</h3>
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
                                                <th scope="col" class="border-0 rounded-start">Course Title</th>
                                                <th scope="col" class="border-0">Total Lectures</th>
                                                <th scope="col" class="border-0">Completed Lecture</th>
                                                <th scope="col" class="border-0 rounded-end">Action</th>
                                            </tr>
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
                                                            <img src="assets/images/courses/4by3/08.jpg" class="rounded" alt="">
                                                        </div>
                                                        <div class="mb-0 ms-2">
                                                            <!-- Title -->
                                                            <h6><a href="#">7/11 Clerk Training</a></h6>
                                                            <!-- Info -->
                                                            <div class="overflow-hidden">
                                                                <h6 class="mb-0 text-end">85%</h6>
                                                                <div class="progress progress-sm bg-primary bg-opacity-10">
                                                                    <div class="progress-bar bg-primary aos aos-init aos-animate" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                                <!-- Table data -->
                                                <td>56</td>

                                                <!-- Table data -->
                                                <td>40</td>

                                                <!-- Table data -->
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-primary-soft me-1 mb-1 mb-md-0"><i class="bi bi-play-circle me-1"></i>Continue</a>
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

    <!-- user scripts -->
    <script src="js/scrollTop.js"></script>
    <script>
        AOS.init({
            once: true
        });
    </script>
</body>

</html>