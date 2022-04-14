<?php
	include("utils/connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Sibol Training and Placement Center - Display data</title>
	
</head>
<body>
	<div class="container">
	<br>
	<div class="text-center">
		<button class="btn btn-primary"><a href="signup-trainee.php" class="text-light"> Register new trainee </a></button>
		<button class="btn btn-success"><a href="search.php" class="text-light"> Search </a></button>
		<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Sign out</button>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<div class="float-center">
	<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel" style="color:black">Sign out</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body" style="color:black">
							Are you sure you want to log out?
					</div>
					<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="color:white">No</button>
					<button type="submit" class="btn btn-primary" style="color:white"><a href="index.php" style="color:white">Yes</a></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
		<table class="table table-bordered">
		<thead>
			<tr>
			<th scope="col">ID </th>
			<th scope="col">First name</th>
			<th scope="col">Last name</th>
			<th scope="col">Email</th>
			<th scope="col">Contact No.</th>
			<th scope="col">Controls</th>
			</tr>
		</thead>
		<tbody>
		<?php
			$sql = "select * from trainees;";
			$result = mysqli_query($con, $sql);
			if($result) {
				while ($row = mysqli_fetch_assoc($result)) {
					$id = $row['id'];
					$email = $row['email'];
					$fname = $row['fname'];
					$lname = $row['lname'];
					$contact_no = $row['contact_no'];
					echo '
					<tr>
						<th scope="row">'.$id.'</th>
						<td>'.$fname.'</td>
						<td>'.$lname.'</td>
						<td>'.$email.'</td>
						<td>'.$contact_no.'</td>
						<td>
							<button class="btn btn-primary"><a href="update-trainee-data.php?updateid='.$id.'" class="text-light"> Update </a></button>
						</td>
					</tr>';
				}
			}
		?>
		</tbody>
		</table>
	</div>
</body>
</html>
