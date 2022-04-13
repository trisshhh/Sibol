<?php
require_once 'utils/connection.php';
include 'config/constants.php';
require_once 'common/components.php';
?>

<!DOCTYPE html>
<html lang="en">
<?= head("Profile") ?>
</head>

<body>
    <?= scrollToTopBtn(); ?>
    <?= navbar("profile") ?>

    <!-- ======================= Main Content START -->
    <main>

    </main>
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

</html>l