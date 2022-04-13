<?php
	include("connection.php");
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Sibol Training and Placement Center - Sign in</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- Vendor Files -->
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" />
	<script src="vendor/bootstrap/js/bootstrap.js"></script>
</head>
<body class="d-flex h-100 text-center text-white bg-dark">
	<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
		<header class="mb-auto">
			<div>
				<img src="#" alt="logo" class="rounded float-start">
				<nav class="nav nav-masthead justify-content-center float-md-end">
					<a class="nav-link active" aria-current="page" href="index.php">Home</a>
					<a class="nav-link" href="results.php">Results</a>
					<a class="nav-link" href="contactus.php">Contact</a>
				</nav>
			</div>
		</header>
		<form method="post" class="form-signin">
			<h1 class="h3 mb-3 fw-normal" style="color: white;">Login here, trainee!</h1>
			<div class="form-floating" style="color: #3d3d44 !important">
			<input type="email" class="form-control" id="email_Add" name="email_Add" placeholder="name@example.com">
			<label for="asd">Email Address</label>
			</div>
			<br>
			<div class="form-floating" style="color: #3d3d44 !important">
			<input type="password" class="form-control" id="inputPassword" name="inputPassword">
			<label for="exampleInputPassword1" class="form-label">Password</label>
			</div>
			<br>
			<div id="recaptcha-container"></div> <!--captcha -->
			<br>
			<button class="w-100 btn btn-lg btn-primary" type="submit" aria-expanded="false" aria-controls="collapseExample" onclick="phoneAuth();">
				Log in
			</button>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<div>
			<p class="mt-5 mb-3 text-muted">A.Y. 2021–2022</p>
		</form>
		<?php
			if($_SERVER['REQUEST_METHOD'] == "POST") {
				$email_Add = $_POST['email_Add'];
				$password = $_POST['inputPassword'];
				if(!empty($email_Add) || !empty($password)) {
					echo "<script type='text/javascript'>alert('You did not fill out the required field.'); </script>";
				}
				else {
					$sql = "select email, password from trainees where email = '$email_Add' AND password = '$password'";
					$result = mysqli_query($con, $sql);
					if ($result) {
						echo "<script type='text/javascript'>alert('Welcome!');
							window.location='#';
							</script>";
					}
					else {
						die(mysqli_error($con));
					}
				}
			}
		?>
	</div>
	<footer class="mt-auto text-white-50">
		<p>Developed by <a href="#" class="text-white">lorem ipsum dolor</a>.</p>
	</footer>
	</div>
	<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase.js"></script>
	<script type="module">
	// Import the functions you need from the SDKs you need
	import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.8/firebase-app.js";
	import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.8/firebase-analytics.js";
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
	<script src="firebase.js" type="text/javascript"></script>
</body>
</html>
