<?php
require_once 'common/components.php';

//TODO: change later dynamically updates
$trainingProgramName = "Service Crew";
$trainingProgramDesc = "Training program description. Lorem ipsum dolorem";

?>

<!DOCTYPE html>
<html lang="en">
<?= head($trainingProgramName); ?>

<body>
    <?= scrollToTopBtn() ?>
    <?= navbar("training") ?>

    <!-- ======================= Main Banner START -->
    <section class="py-5 bg-primary-light position-relative">
        <!-- Svg decoration -->
        <figure class="position-absolute bottom-0 start-0 d-none d-lg-block">
            <svg width="822.2px" height="301.9px" viewBox="0 0 822.2 301.9">
                <path class="fill-warning opacity-5" d="M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z"></path>
            </svg>
        </figure>

        <div class="container position-relative">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <!-- Content -->
                        <div class="col-md-6 px-md-5 position-relative order-md-2 mb-5 mb-md-0">
                            <!-- Svg decoration -->
                            <figure class="position-absolute top-0 start-0">
                                <svg width="22px" height="22px" viewBox="0 0 22 22">
                                    <polygon class="fill-orange" points="22,8.3 13.7,8.3 13.7,0 8.3,0 8.3,8.3 0,8.3 0,13.7 8.3,13.7 8.3,22 13.7,22 13.7,13.7 22,13.7 "></polygon>
                                </svg>
                            </figure>

                            <h5><span class="badge bg-warning">Customer Service</span></h5>

                            <!-- Title -->
                            <h1 class="mb-3 font-weight-bold"><?php echo $trainingProgramName ?></h1>

                            <!-- Company -->
                            <a href="company-details.php" class="fw-bold">7/11 Philippines</a>
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
                <div class="card shadow-lg p-5">
                    <div class="d-flex mb-4">
                        <h3 class="me-3"><span class="badge bg-success">Recommended <p class="small mb-0">Skills match: 90% </p></span></h3>
                        <h3><span class="badge bg-warning">Moderately Far <p class="small mb-0">Proximity: Within 5km </p></span></h3>
                    </div>
                    <div class="row gy-3 mb-3">
                        <!-- Slots column -->
                        <div class="col-lg-4">

                            <div class="card p-3 bg-light text-center shadow mb-3">
                                <span class="bi bi-people"></span>
                                <p class="fw-bold">Slots</p>
                                <p class="display-6">9/10</p>
                                <p class="small">Details about the training program will be sent to registered trainees once the slots have been filled.</p>
                            </div>
                            <a class="btn btn-primary w-100" href="jobs-training-register.php">Register</a>
                        </div>

                        <!-- Details column -->
                        <div class="col-lg-8">
                            <!-- Program description -->
                            <h4>Description</h4>
                            <p class="mb-3"><?php echo $trainingProgramDesc ?></p>

                            <!-- Program Key Learnings-->
                            <h4>What You'll Learn</h4>
                            <ul>
                                <li>Introduction to 7/11 stores.</li>
                                <li>Management of inventory.</li>
                                <li>Stocking and organizing</li>
                            </ul>

                            <!-- Tags -->
                            <h4>Tags and Skills</h4>
                            <div class="d-flex">
                                <div class="btn btn-outline-secondary m-2">Service</div>
                                <div class="btn btn-outline-secondary m-2">Retail</div>
                            </div>
                        </div>
                    </div>
                </div>
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