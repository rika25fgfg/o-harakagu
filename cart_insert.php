<?php session_start(); ?>

<?php
	if (!isset($_SESSION['user'])) {
		$url = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
		header("Location:" . $url . "/login_input.php" );
		exit();
	}
?>

<?php
	$id = $_REQUEST['id'];
	if (!isset($_SESSION['goods'])) {
		$_SESSION['goods'] = [];
	}
	$count = 0;
	if (isset($_SESSION['goods'][$id])) {
		$count = $_SESSION['goods'][$id]['count'];
	}
	$_SESSION['goods'][$id] = [
		'id' => $_REQUEST['id'],
		'name' => $_REQUEST['name'],
		'price' => $_REQUEST['price'],
		'count' => $count + $_REQUEST['count'],
		'image' => $_REQUEST['image']
	];
?>

<?php
	if (isset($_SESSION['user'])) {
		$url = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
		header("Location:" . $url . "/cart_show.php" );
		exit();
	}
?>