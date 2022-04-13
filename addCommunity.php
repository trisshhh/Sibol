<?php
	include("utils/connection.php");
	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$email = $_POST['email'];
		$comm_name = $_POST['comm_name'];
		$address = $_POST['address'];
		$phone_Num = $_POST['phone_Num'];
		$sql = "insert into communities (id, email, name, address, contact_no) values ('default', '$email', '$comm_name', '$address', '$phone_Num')";
		$result = mysqli_query($con, $sql);
		if(empty($email)) {
			echo "<script type='text/javascript'>alert('You did not fill out the required field.'); window.location='displaydata.php'; </script>";
		}
		else if ($result) {
			echo "<script type='text/javascript'>alert('Community Added');
				window.location='displaydata.php';
				</script>";
		}
		else {
			die(mysqli_error($con));
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<title>Sibol Training and Placement Center - Add Community</title>
	</head>
	<body>
		<div class="container">
		<form method="post" action="" enctype="multipart/form-data">
			<div class="form-group">
			<br>
				<input type="email" class="form-control" name="email" placeholder="Enter email eg:name@example.com">
				<br>
				<input type="text" class="form-control" name="comm_name" placeholder="Enter Community Name">
				<br>
				<input type="text" class="form-control" name="address" placeholder="Enter Address">
				<br>
				<input type="text" class="form-control" id="number" name="phone_Num" placeholder="+63 XXX XXX XXXX" value="+63">
				<br>
				<div class="text-center">
					<button type="submit" class="btn btn-primary" name="upload">Add Community</button>
					<button class="btn btn-info"><a href="#" class="text-light"> Back to Main Menu </a></button>
				</div>
			</div>
			</form>
		</div>
	</body>
</html>
