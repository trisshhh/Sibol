<?php
require_once 'common/components.php';

//TODO: work on this later, when details are dynamically generated
$companyName = "7/11 Philippines";
?>

<!DOCTYPE html>
<html lang="en">
<?= head($companyName) ?>

<body>
    <?= scrollToTopBtn(); ?>
    <?= navbar("company") ?>

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
                <div class="col-lg-6">
                    <div class="row align-items-center">
                        <!-- Image -->
                        <div class="col-6 col-md-3 text-center order-1">
                            <img src="assets/images/element/category-1.svg" alt="">
                        </div>

                        <!-- Content -->
                        <div class="col-md-6 px-md-5 align-items-center position-relative order-md-2 mb-5 mb-md-0">

                            <!-- Svg decoration -->
                            <figure class="position-absolute top-0 start-0">
                                <svg width="22px" height="22px" viewBox="0 0 22 22">
                                    <polygon class="fill-orange" points="22,8.3 13.7,8.3 13.7,0 8.3,0 8.3,8.3 0,8.3 0,13.7 8.3,13.7 8.3,22 13.7,22 13.7,13.7 22,13.7 "></polygon>
                                </svg>
                            </figure>

                            <!-- Title -->
                            <h2 class="mb-3 font-weight-bold"><?php echo $companyName ?></h2>
                        </div>
                    </div>
                    <!-- Row END -->
                </div>
                <div class="col-lg-6">
                    <div class="card shadow-lg">
                        <img src="uploads/training-programs/7-eleven.png" class="company-img" alt="company logo">
                    </div>
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- ======================= Main Banner END -->

    <!-- ======================= Main Content START -->
    <main>
        <section class="py-5">

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