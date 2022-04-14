<header class="navbar-light sticky-top bg-white">
        <!-- Logo Nav START -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo START -->
                <a class="navbar-brand d-flex align-items-center" href="index.php">
                    <img class="navbar-brand-logo" src="./img/Sibol.png" alt="logo">
                    <span class="navbar-brand-text p-2">Sibol</span>
                </a>
                <!-- Logo END -->

                <!-- Responsive navbar toggler -->
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="bi bi-list"></span>
                </button>

                <!-- Main navbar START -->
                <div class="navbar-collapse w-100 collapse" id="navbarCollapse">
                    <div class="navbar-nav navbar-nav-scroll me-auto"></div>

                    <!-- Nav Main menu START -->
                    <ul class="navbar-nav navbar-nav-scroll mx-auto">
                        <!-- Nav item links-->
                        <a class="nav-link mx-2 <?php if ($page === "training") echo 'active' ?>" href="jobs-training-browse.php" id="browseJobs" aria-haspopup="true" aria-expanded="false">Jobs Training</a>
                        <a class="nav-link mx-2 <?php if ($page === "company-browse") echo 'active' ?>" href="company-browse.php" id="browsecompany-browse" aria-haspopup="true" aria-expanded="false">Companies</a>
                    </ul>
                    <!-- Nav Main menu END -->

                    <!-- Nav Search START -->
                    <div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
                        <div class="nav-item w-100">
                            <form class="position-relative" action="search.php">
                                <input class="form-control pe-5 bg-transparent" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- Nav Search END -->
                </div>
                <!-- Main navbar END -->

                <!-- Profile START -->
                <div class="dropdown ms-1 ms-lg-0">
                    <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="avatar-img rounded-circle" src="img/person.jpg" alt="avatar">
                    </a>
                    <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
                        <!-- Profile info -->
                        <li class="px-3">
                            <div class="d-flex align-items-center">
                                <!-- Avatar -->
                                <div class="avatar me-3">
                                    <img class="avatar-img rounded-circle shadow" src="img/person.jpg" alt="avatar">
                                </div>
                                <div>
                                    <p class="h6">Lori Ferguson</p>
                                    <p class="small m-0">example@gmail.com</p>
                                </div>
                            </div>
                            <hr>
                        </li>
                        <!-- Links -->
                        <li><a class="dropdown-item bg-primary-soft-hover" href="profile.php"><i class="bi bi-person fa-fw me-2"></i>My Profile</a></li>
                        <li><a class="dropdown-item bg-danger-soft-hover" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
                    </ul>
                </div>
                <!-- Profile START -->
            </div>
        </nav>
        <!-- Logo Nav END -->
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
    </header>
