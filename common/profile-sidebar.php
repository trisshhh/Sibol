<nav class="navbar navbar-light navbar-expand-xl mx-0">
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <!-- Offcanvas header -->
        <div class="offcanvas-header bg-light">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">My profile</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- Offcanvas body -->
        <div class="offcanvas-body p-3 p-xl-0">
            <div class="rounded-3 pb-0 p-3 w-100">
                <!-- Dashboard menu -->
                <div class="list-group list-group-dark list-group-borderless">
                    <a class="list-group-item <?php if($page === "overview") echo 'active'; ?>" href="profile.php"><i class="bi bi-ui-checks-grid me-2"></i>Overview</a>
                    <a class="list-group-item <?php if($page === "edit") echo 'active'; ?>" href="profile-edit.php"><i class="bi bi-pencil-square me-2"></i>Edit Profile</a>
                    <a class="list-group-item <?php if($page === "delete") echo 'active'; ?>" href="profile-delete.php"><i class="bi bi-trash me-2"></i>Delete Profile</a>
                    <a class="list-group-item text-danger bg-danger-soft-hover" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >Sign Out</a>
                </div>
            </div>
        </div>
    </div>
</nav>

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
                    <button type="submit" class="btn btn-danger" style="color:white"><a href="utils/signout.php" style="color:white">Yes</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
