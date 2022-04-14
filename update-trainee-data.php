<?php
	include("utils/connection.php");
		$id = $_GET['updateid'];
		if($_SERVER['REQUEST_METHOD'] == "POST") {
			$email = $_POST['email'];
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$contact_no = $_POST['contact_no'];
			$sql = "update trainees set fname='$fname', lname='$lname', email='$email', contact_no='$contact_no' where id=$id";
			$result = mysqli_query($con, $sql);
			if(empty($email) || empty($fname)) {
				echo "<script type='text/javascript'>alert('You did not fill out the required field.'); window.location='displaydata.php'; </script>";
			}
			else if ($result) {
				echo "<script type='text/javascript'>alert('Record Updated.');
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
		<title>Sibol Training and Placement Center - Update Record</title>
	</head>
	<body>
		<div class="container">
		<form method="post" action="" enctype="multipart/form-data">
			<div class="form-group">
			<br>
				<input type="text" class="form-control" name="fname" placeholder="First name" >
				<br>
				<input type="text" class="form-control" name="lname" placeholder="Last name">
				<br>
				<input type="email" class="form-control" name="email" placeholder="Email">
				<br>
				<input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="+63 XXX XXX XXXX" value="+63">
				<br>
				<div class="text-center">
					<button type="submit" class="btn btn-primary" name="upload">Update Record</button>
					<button class="btn btn-info"><a href="displaydata.php" class="text-light"> Back </a></button>
				</div>
			</div>
			</form>
		</div>
	</body>
</html>
