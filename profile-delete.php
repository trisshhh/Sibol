<?php
require_once 'utils/connection.php';
include 'config/constants.php';
require_once 'common/components.php';

require("vendor/autoload.php");

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
                        <?= profileSidebar("delete") ?>
                        <!-- Responsive offcanvas body END -->
                    </div>
                    <!-- Left sidebar END -->

                    <!-- Main content START -->
                    <div class="col-xl-9">
                        <div class="card border p-4">
                            <h2 class="fw-bold text-danger"><i class="bi bi-exclamation-triangle"></i> Delete Profile</h2>
                            <p>Are you sure you want to delete your profile?</p>
                            <div class="d-flex">
                                <a href="utils/delete-profile.php" class="btn btn-danger">Delete</a>
                            </div>
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