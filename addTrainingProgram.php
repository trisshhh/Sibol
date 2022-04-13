<?php
	include("utils/connection.php");
	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$company_name = $_POST['company_name'];
		$program_name = $_POST['program_name'];
		$description = $_POST['description'];
		$lecture = $_POST['lecture'];
		$hours = $_POST['hours'];
		$instructor = $_POST['instructor'];
		$filename = $_FILES["choosefile"]["name"];
		$tempname = $_FILES["choosefile"]["tmp_name"];
		$folder = "uploads/training-programs/".$filename;
		$sql = "insert into training_programs (id, company_name, program_name, description, ratings, lecture, Hours, instructor, Photo) values ('default', '$company_name', '$program_name', '$description', 5.0, '$lecture', '$hours', '$instructor', '$filename')";
		$result = mysqli_query($con, $sql);
		if(empty($program_name)) {
			echo "<script type='text/javascript'>alert('You did not fill out the required field.'); window.location='#'; </script>";
		}
		else if ($result) {
			echo "<script type='text/javascript'>alert('Training Program Added');
				window.location='#';
				</script>";
		}
		else {
			die(mysqli_error($con));
		}

		if (move_uploaded_file($tempname, $folder)) {
			echo "<script type='text/javascript'>alert('Image uploaded successfully');
				</script>";
		}
		else {
			echo "<script type='text/javascript'>alert('Failed to upload image');
				</script>";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<title>Sibol Training and Placement Center - Add Training Programs</title>
	</head>
	<body>
		<div class="container">
		<form method="post" action="" enctype="multipart/form-data">
			<div class="form-group">
			<br>
				<input type="text" class="form-control" name="company_name" placeholder="Company name">
				<br>
				<input type="text" class="form-control" name="program_name" placeholder="Program name">
				<br>
				<input type="text" class="form-control" name="description" placeholder="Program Description">
				<br>
				<input type="number" class="form-control" name="lecture" placeholder="No. of lectures">
				<br>
				<input type="number" class="form-control" name="hours" placeholder="No. of Hours">
				<br>
				<input type="text" class="form-control" name="instructor" placeholder="Instructor">
				<br>
				<label for="formFileSm" class="form-label">Upload Photo</label>
				<input class="form-control form-control-sm" type="file" name="choosefile" value="" />
				<br>
				<div class="text-center">
					<button type="submit" class="btn btn-primary" name="upload">Add Training Program</button>
					<button class="btn btn-info"><a href="#" class="text-light"> Back to Main Menu </a></button>
				</div>
			</div>
			</form>
		</div>
	</body>
</html>
