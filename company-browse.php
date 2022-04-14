<?php
require_once 'common/components.php';

?>

<!DOCTYPE html>
<html lang="en">
<?= head("company-browse"); ?>

<body>
    <?= scrollToTopBtn(); ?>
    <?= navbar("company-browse"); ?>
    <!-- Header END -->

    <!-- ======================= Main Banner START -->
    <section class="py-5 py-lg-4 bg-primary-light position-relative">
        <!-- Svg decoration -->
        <figure class="position-absolute bottom-0 start-0 d-none d-lg-block">
            <svg width="822.2px" height="301.9px" viewBox="0 0 822.2 301.9">
                <path class="fill-warning opacity-5" d="M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z"></path>
            </svg>
        </figure>

        <div class="container position-relative">
            <div class="row">
                <div class="col-12">
                    <div class="row justify-content-center align-items-center">
                        <!-- Content -->
                        <div class="col-md-6 px-md-5 text-center position-relative order-md-2 mb-5 mb-md-0">

                            <!-- Svg decoration -->
                            <figure class="position-absolute top-0 start-0">
                                <svg width="22px" height="22px" viewBox="0 0 22 22">
                                    <polygon class="fill-orange" points="22,8.3 13.7,8.3 13.7,0 8.3,0 8.3,8.3 0,8.3 0,13.7 8.3,13.7 8.3,22 13.7,22 13.7,13.7 22,13.7 "></polygon>
                                </svg>
                            </figure>

                            <!-- Title -->
                            <h2 class="mb-3 font-weight-bold">Are you looking for a specific company?</h2>
                            <p class="mb-3">Grow with the skills that are tailored to specific company-browse.</p>

                            <!-- Search -->
                            <form class="bg-body rounded p-2 shadow-lg mb-3">
                                <div class="input-group">
                                    <input class="form-control border-0 me-1" type="search" placeholder="Search for company">
                                    <button type="submit" class="btn btn-dark mb-0 rounded">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Row END -->
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- ======================= Main Banner END -->

    <!-- ======================= Main Content START -->
    <main>
        <section class="py-5">
            <div class="container">
                <!-- Main content START -->
                <div class="row">
                    <!-- Course Grid START -->
                    <div class="row g-4">
                        <!-- Card item START -->
                        <div class="col-sm-6 col-xl-4">
                            <div class="card shadow h-100">
                                <!-- Image -->
                                <img src="uploads/training-programs/7-eleven.webp" class="card-img-top" alt="course image">
                                <!-- Card body -->
                                <div class="card-body">
                                    <h5 class="card-title"><a href="company-details.php" class="stretched-link">7/11 Philippines</a></h5>
                                    <p class="small">Manila, Philippines</p>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                    </div>
                    <!-- Course Grid END -->

                    <!-- Pagination START -->
                    <div class="col-12">
                        <nav class="mt-4 d-flex justify-content-center" aria-label="navigation">
                            <ul class="pagination pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                                <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="bi bi-arrow-left"></i></a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                                <li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#">..</a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#">6</a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#"><i class="bi bi-arrow-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Pagination END -->
                </div>
                <!-- Main content END -->
            </div>
        </section>
    </main>
    <!-- ======================= Main Content END -->


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