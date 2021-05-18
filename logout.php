<?php session_start(); ?>

<?php
    //userセッション変数を破棄
	unset($_SESSION['user']);
	unset($_SESSION['goods']);
?>

<?php
	if (!isset($_SESSION['user'])) {
		$url = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
		header("Location:" . $url . "/index.php" );
		exit();
	}
?>