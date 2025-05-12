<?php
include 'includes/header.php';
$title = "BookStore | Books";
ob_start()
?>
<!-- Books display -->
<?php
include 'Components/BooksDisplay.php';
include 'includes/footer.php';
?>
<?php
$content = ob_get_clean();

include 'includes/app.php';
