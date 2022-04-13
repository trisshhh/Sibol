<?php
include("utils/connection.php");
include 'config/constants.php';
require_once("common/components.php");
?>

<!DOCTYPE html>
<html lang="en-US">
<?= head("Trainee Signup"); ?>

<body>
	<?= scrollToTopBtn(); ?>
	<?= navbarMinimal() ?>
	
	<!-- Section: Design Block -->
	<section class="">
		<!-- Jumbotron -->
		<div class="px-4 py-5 px-md-5 text-center text-lg-start">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 mb-5 mb-lg-0">
						<h1 class="fw-bold ls-tight">
							Training to
							<span class="text-primary">employment</span>
						</h1>
						<span class="lead">Sign up as a trainee</span>

						<div class="card shadow mt-4">
							<div class="card-body py-5 px-md-5">
								<form method="post" class="form-signin">
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
										<input type="email" class="form-control" id="asd" name="email_Add" placeholder="name@example.com">
										<label for="asd">Email Address</label>
									</div>

									<!-- Password input -->
									<div class="form-floating mb-4" style="color: #3d3d44 !important">
										<input type="password" class="form-control" id="exampleInputPassword1" name="inputPassword">
										<label for="exampleInputPassword1" class="form-label">Password</label>
									</div>

									<!-- Phone number input -->
									<div class="form-floating mb-4" style="color: #3d3d44 !important">
										<input type="text" class="form-control" id="number" name="phone_Num" placeholder="+63 XXX XXX XXXX" value="+63">
										<label for="floatingInput">Phone Number (+63XXXXXXXXXX)</label>
									</div>

									<div id="recaptcha-container"></div>

									<!--captcha -->
									<br>

									<button class="w-100 btn btn-lg btn-primary mb-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" onclick="phoneAuth();">
										Send OTP
									</button>

									<div class="collapse" id="collapseExample">
										<div class="form-floating mb-4" style="color: #3d3d44 !important">
											<input type="text" class="form-control" id="verificationCode" name="otp_code" placeholder="XXXXXX">
											<label for="floatingInput">OTP</label>
										</div>

										<div class="form-floating" style="color: #3d3d44 !important"> </div>

										<button class="w-100 btn btn-lg btn-primary mb-4" onclick="codeverify();" type="submit">Submit</button>
									</div>

									<!-- Register buttons -->
									<div class="text-center">
										<p>or sign up with:</p>
										<button type="button" class="btn btn-link btn-floating mx-1">
											<i class="bi bi-google"></i>
										</button>
									</div>

									<?php
									if ($_SERVER['REQUEST_METHOD'] == "POST") {
										$fname = $_POST['fname'];
										$lname = $_POST['lname'];
										$email_Add = $_POST['email_Add'];
										$phone_Num = $_POST['phone_Num'];
										$otp_code = $_POST['otp_code'];
										$password = $_POST['inputPassword'];
										if (!empty($item_name) || !empty($item_stud_num)) {
											echo "<script type='text/javascript'>alert('You did not fill out the required field.'); window.location='signin.php'; </script>";
										} else {
											$sql = "insert into trainees (id, email, fname, lname, password, contact_no) values ('default', '$email_Add', '$fname', '$lname', '$password', '$phone_Num')";
											$result = mysqli_query($con, $sql);
											if ($result) {
												echo "<script type='text/javascript'>alert('Welcome!');
							window.location='landpage.php';
							</script>";
											} else {
												die(mysqli_error($con));
											}
										}
									}
									?>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Jumbotron -->
	</section>
	<!-- Section: Design Block -->

	<!-- ======================= Footer START -->
	<?= footer() ?>
	<!-- ======================= Footer END -->

	<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase.js"></script>
	<script type="module">
		// Import the functions you need from the SDKs you need
		import {
			initializeApp
		} from "https://www.gstatic.com/firebasejs/9.6.8/firebase-app.js";
		import {
			getAnalytics
		} from "https://www.gstatic.com/firebasejs/9.6.8/firebase-analytics.js";
		// TODO: Add SDKs for Firebase products that you want to use
		// https://firebase.google.com/docs/web/setup#available-libraries
		// Your web app's Firebase configuration
		// For Firebase JS SDK v7.20.0 and later, measurementId is optional
		const firebaseConfig = {
			apiKey: "AIzaSyAlyrAXFpcA6wLoQwA35qvKVb-cFJdfYmM",
			authDomain: "voting-system-f947d.firebaseapp.com",
			projectId: "voting-system-f947d",
			storageBucket: "voting-system-f947d.appspot.com",
			messagingSenderId: "1093143912073",
			appId: "1:1093143912073:web:f3de2acd09258008d0b058",
			measurementId: "G-QHCQV6ET4B"
		};
		// Initialize Firebase
		firebase.initializeApp(firebaseConfig);
		firebase.analytics();
	</script>
	<script src="js/firebase.js" type="text/javascript"></script>

	<!-- Vendor Files -->
	<script src="vendor/bootstrap/js/bootstrap.bundle.js"></script>

	<!-- user scripts -->
	<script src="js/scrollTop.js"></script>

</body>

</html>
