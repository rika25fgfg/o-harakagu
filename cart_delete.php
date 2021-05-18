<?php session_start(); ?>

<?php
    unset($_SESSION['goods'][$_REQUEST['id']]);
?>

<?php
    if (isset($_SESSION['user'])) {
	    $url = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
	    header("Location:" . $url . "/cart_show.php" );
	    exit();
    }
?>