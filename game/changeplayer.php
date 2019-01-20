<?php
session_start();

if (!isset($_SESSION['player'])) {
	$_SESSION['player'] = 'p1';
}
if (isset($_POST['endturn']) && $_POST['endturn'] == "OK") {
	if ($_SESSION['player'] == 'p1') {
		$_SESSION['player'] = 'p2';
		$_SESSION['moove'] = 2;
		$_SESSION['strike'] = 1;
		$_SESSION['quote'] = "";
		header("Location: p2game.php");
		exit();
	}
	else if ($_SESSION['player'] == 'p2') {
		$_SESSION['player'] = 'p1';
		$_SESSION['moove'] = 2;
		$_SESSION['strike'] = 1;
		$_SESSION['quote'] = "";
		header("Location: p1game.php");
		exit();
	}
}

?>