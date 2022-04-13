<?php
require_once 'common/components.php';
?>

<!DOCTYPE html>
<html lang="en">
<?= head("Community Signup") ?>

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
							Support your
							<span class="text-primary">citizens</span>
						</h1>
						<span class="lead">Sign up as a community</span>

						<div class="card shadow mt-4">
							<div class="card-body py-5 px-md-5">
								<form method="post" class="form-signin">
									<!-- Name input -->
									<div class="form-floating mb-4" style="color: #3d3d44 !important">
										<input type="text" class="form-control" id="asd" name="name" placeholder="East Village">
										<label for="asd">Community Name</label>
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

	<!-- Vendor Files -->
	<script src="vendor/bootstrap/js/bootstrap.bundle.js"></script>

	<!-- user scripts -->
	<script src="js/scrollTop.js"></script>
</body>

</html>
