<?php
require_once 'utils/connection.php';
include 'config/constants.php';
require_once 'common/components.php';

require("vendor/autoload.php");

$accountType = "trainee";
$userName = "Lori Ferguson";

if (isset($_SESSION['user']))
    $id = $_GET['userID'];
else
    $id = "1";


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $contact_no = $_POST['contact_no'];
    $skills = $_POST['skills'];
    $sql = "update trainees set fname='$fname', lname='$lname', email='$email', contact_no='$contact_no' where id=$id";
    $result = mysqli_query($con, $sql);
    if (empty($email) || empty($fname)) {
        echo "<script type='text/javascript'>alert('You did not fill out the required field.'); window.location='displaydata.php'; </script>";
    } else if ($result) {
        echo "<script type='text/javascript'>alert('Record Updated.');
					window.location='displaydata.php';
					</script>";
    } else {
        die(mysqli_error($con));
    }

    $sql = "update skills set skills='$skills' where id=$id";
    $result = mysqli_query($con, $sql);
    if (empty($skills)) {
        echo "<script type='text/javascript'>alert('You did not fill out the skills field.'); window.location='displaydata.php'; </script>";
    } else if ($result) {
        echo "<script type='text/javascript'>alert('Record Updated.');
					window.location='displaydata.php';
					</script>";
    } else {
        die(mysqli_error($con));
    }
}


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
                        <?= profileSidebar("edit") ?>
                        <!-- Responsive offcanvas body END -->
                    </div>
                    <!-- Left sidebar END -->

                    <!-- Main content START -->
                    <div class="col-xl-9">

                        <div class="card bg-transparent border rounded-3">
                            <!-- Card header START -->
                            <div class="card-header bg-transparent border-bottom">
                                <h3 class="mb-0">Edit Profile</h3>
                            </div>
                            <!-- Card header END -->

                            <!-- Card body START -->
                            <div class="card-body">
                                <form method="post" action="" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <!-- 2 column grid layout with text inputs for the first and last names -->
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-floating" style="color: #3d3d44 !important">
                                                    <input type="text" class="form-control" id="fname" name="fname" placeholder="qwerty">
                                                    <label for="floatingInput">First name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-floating" style="color: #3d3d44 !important">
                                                    <input type="text" class="form-control" id="lname" name="lname" placeholder="qwerty">
                                                    <label for="floatingInput">Last name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Email input -->
                                        <div class="form-floating mb-4" style="color: #3d3d44 !important">
                                            <input type="email" class="form-control" id="asd" name="email" placeholder="name@example.com">
                                            <label for="asd">Email Address</label>
                                        </div>

                                        <!-- Phone number input -->
                                        <div class="form-floating mb-4" style="color: #3d3d44 !important">
                                            <input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="+63 XXX XXX XXXX" value="+63">
                                            <label for="floatingInput">Phone Number (+63XXXXXXXXXX)</label>
                                        </div>

                                        <div class="input-group mb-4">
                                            <span class="input-group-text">Skills</span>
                                            <textarea class="form-control" name="skills"></textarea>
                                        </div>

                                        <label for="">Location: </label>
                                        <!-- Google Map -->
                                        <div id="map"></div>

                                        <br>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary" name="upload">Update Record</button>
                                            <button class="btn btn-info"><a href="displaydata.php" class="text-light"> Back </a></button>
                                        </div>


                                    </div>
                                </form>
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