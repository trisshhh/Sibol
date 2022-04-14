<?php
require_once 'common/components.php';

//TODO: change later dynamically updates
$trainingProgramName = "Mechanic";
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
                            <a href="company-details.php" class="fw-bold">Bowheels</a>
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
                <div class="card p-5 shadow-lg">
                    <div class="row">
                        <div class=" col-6 mb-4 justify-content-center align-items-center">
                            <div class="card p-4 bg-primary-light ">
                                <div class="mb-3 d-flex justify-content-between align-items-center">
                                    <div class="">
                                        <h4>Bowheels Mechanic</h4>
                                        <p class="small">Training Program</p>
                                    </div>
                                    <div class="list-group w-50">
                                        <div class="list-group-item">
                                            <h4 class="">Php 500</h4>
                                            <p class="small">Total</p>
                                        </div>
                                        <div class="list-group-item bg-light">
                                            <h6 class=""> - Php 300</h6>
                                            <p class="small">Discount</p>
                                        </div>
                                    </div>
                                </div>
                                <hr style="color:green">

                                <h3 class="text-primary fw-bold">Php 200</h3>
                                <p class="small">Total</p>

                            </div>
                            <form class="card p-2">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Scholarship Code" value="East-Village-50-OFF">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-secondary">Redeem</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-6">
                            <h4 class="mb-3">Payment</h4>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="cc-name">Name on card</label>
                                    <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                    <small class="text-muted">Full name as displayed on card</small>
                                    <div class="invalid-feedback">
                                        Name on card is required
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cc-number">Credit card number</label>
                                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Credit card number is required
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">Expiration</label>
                                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Expiration date required
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">CVV</label>
                                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Security code required
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <button class="btn btn-primary btn-lg btn-block" href="#" data-bs-toggle="modal" data-bs-target="#paymentSuccess" type="submit">Pay and Register</button>

                            <!-- ======================= Payment success modal -->
                            <div class="float-center">
                                <div class="modal fade" id="paymentSuccess" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Success</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" style="color:black">
                                                You have successfully registered for this training program!
                                            </div>
                                            <div class="modal-footer">
                                                <a type="submit" class="btn btn-success" href="profile.php">Okay</a></button>
                                            </div>
                                        </div>
                                    </div>
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