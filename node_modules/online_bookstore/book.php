<?php
if (isset($_GET['BooKView'])) {
    $title = $_GET['BookView'];
} else {
    $title = "View Book Details";
}
include 'includes/header.php';
ob_start();
?>

<?php

include 'Components/books.php';
include 'Components/review.php';
?>
<?php
include 'includes/footer.php';
$content = ob_get_clean();
include 'includes/app.php';
