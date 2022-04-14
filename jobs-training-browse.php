<?php
require_once 'common/components.php';
require_once 'utils/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<?= head("Jobs Training"); ?>

<body>
	<?= scrollToTopBtn(); ?>
	<?= navbar("training"); ?>
	<!-- Header END -->

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
					<div class="row justify-content-center align-items-center">

                        <!-- Content -->
                        <div class="col-md-6 px-md-5 text-center position-relative order-md-2 mb-5 mb-md-0">

							<!-- Svg decoration -->
							<figure class="position-absolute top-0 start-0">
								<svg width="22px" height="22px" viewBox="0 0 22 22">
									<polygon class="fill-orange" points="22,8.3 13.7,8.3 13.7,0 8.3,0 8.3,8.3 0,8.3 0,13.7 8.3,13.7 8.3,22 13.7,22 13.7,13.7 22,13.7 "></polygon>
								</svg>
							</figure>

							<!-- Title -->
							<h2 class="mb-3 font-weight-bold">Jobs Training Programs</h2>

							<!-- Search -->
							<form class="bg-body rounded p-2 shadow-lg mb-3">
								<div class="input-group">
									<input class="form-control border-0 me-1" type="search" placeholder="Search for job training program">
									<button type="submit" class="btn btn-dark mb-0 rounded">Search</button>
								</div>
							</form>
						</div>
					</div>
					<!-- Row END -->
				</div>
			</div> <!-- Row END -->
		</div>
	</section>
	<!-- ======================= Main Banner END -->

	<!-- ======================= Main Content START -->
	<section class="py-5">
		<div class="container">
			<div class="row">
				<!-- Main content START -->
				<div class="col-lg-8 col-xl-9">

					<!-- Course Grid START -->
					<div class="row g-4">
					<?php
					//training_programs (id, program_name, description, ratings, lecture, Hours, instructor) 
						$sql = "select * from training_programs;";
						$result = mysqli_query($con, $sql);
						if($result) {
							while ($row = mysqli_fetch_assoc($result)) {
								$company_name = $row['company_name'];
								$program_name = $row['program_name'];
								$description = $row['description'];
								$ratings = $row['ratings'];
								$lecture = $row['lecture'];
								$Hours = $row['Hours'];
								$Photo = $row["Photo"];
								echo '<!-- Card item START -->
								<div class="col-sm-6 col-xl-4">
									<div class="card shadow h-100">
										<!-- Image -->
										<img src="uploads/training-programs/'.$Photo.'" class="img-thumbnail" alt="course image">
										<!-- Card body -->
										<div class="card-body">
											<!-- Badge and favorite -->
											<div class="d-flex justify-content-between mb-2">
												<a href="#" class="badge bg-purple bg-opacity-10 text-purple">All level</a>
												<a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
											</div>
											<!-- Title -->
											<h5 class="card-title"><a href="jobs-training-details.php">'.$program_name.'</a></h5>
											<p class="small">'.$company_name.'</p>
											<p class="mb-2 text-truncate-2">'.$description.'</p>
										</div>
									</div>
								</div>
								<!-- Card item END -->';
							}
						}
					?>
					</div>
					<!-- Course Grid END -->

					<!-- Pagination START -->
					<div class="col-12">
						<nav class="mt-4 d-flex justify-content-center" aria-label="navigation">
							<ul class="pagination pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
								<li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="bi bi-arrow-left"></i></a></li>
								<li class="page-item mb-0 active"><a class="page-link" href="#">1</a></li>
								<li class="page-item mb-0"><a class="page-link" href="#">2</a></li>
								<li class="page-item mb-0"><a class="page-link" href="#">..</a></li>
								<li class="page-item mb-0"><a class="page-link" href="#">6</a></li>
								<li class="page-item mb-0"><a class="page-link" href="#"><i class="bi bi-arrow-right"></i></a></li>
							</ul>
						</nav>
					</div>
					<!-- Pagination END -->
				</div>
				<!-- Main content END -->

				<!-- Right sidebar START -->
				<div class="col-lg-4 col-xl-3">
					<!-- Responsive offcanvas body START -->
					<nav class="navbar navbar-light navbar-expand-lg mx-0">
						<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
							<div class="offcanvas-header bg-light">
								<h5 class="offcanvas-title" id="offcanvasNavbarLabel">Advance Filter</h5>
								<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
							</div>
							<div class="offcanvas-body p-3 p-lg-0">
								<form>
									<!-- Category START -->
									<div class="card card-body shadow p-4 mb-4">
										<!-- Title -->
										<h4 class="mb-3">Category</h4>
										<!-- Category group -->
										<div class="col-12">
											<!-- Checkbox -->
											<div class="d-flex justify-content-between align-items-center">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault9">
													<label class="form-check-label" for="flexCheckDefault9">All</label>
												</div>
											</div>
											<!-- Checkbox -->
											<div class="d-flex justify-content-between align-items-center">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault10">
													<label class="form-check-label" for="flexCheckDefault10">Customer Service</label>
												</div>                                               
											</div>
											<!-- Checkbox -->
											<div class="d-flex justify-content-between align-items-center">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault11">
													<label class="form-check-label" for="flexCheckDefault11">Construction</label>
												</div>
											</div>
											<!-- Checkbox -->
											<div class="d-flex justify-content-between align-items-center">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault12">
													<label class="form-check-label" for="flexCheckDefault12">IT</label>
												</div>                                            
											</div>
											<!-- Checkbox -->
											<div class="d-flex justify-content-between align-items-center">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault17">
													<label class="form-check-label" for="flexCheckDefault17">Data Entry</label>
												</div>                                              
											</div>
											<!-- Checkbox -->
											<div class="d-flex justify-content-between align-items-center">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault13">
													<label class="form-check-label" for="flexCheckDefault13">Security</label>
											  </div>                                          
											</div>
											<!-- Checkbox -->
											<div class="d-flex justify-content-between align-items-center">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault14">
													<label class="form-check-label" for="flexCheckDefault14">Legal</label>
												</div>
											</div>
											<!-- Checkbox -->
											<div class="d-flex justify-content-between align-items-center">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault15">
													<label class="form-check-label" for="flexCheckDefault15">Photography</label>
												</div>                                          
											</div>
										</div>
									</div>
									<!-- Category END -->

								</form><!-- Form End -->
							</div>

							<!-- Button -->
							<div class="d-grid p-2 p-lg-0 text-center">
								<button class="btn btn-primary mb-0">Filter Results</button>
							</div>

						</div>
					</nav>
					<!-- Responsive offcanvas body END -->
				</div>
				<!-- Right sidebar END -->
			</div><!-- Row END -->
		</div>
	</section>
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
