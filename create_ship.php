<?php

include('Ship.class.php');

session_start();


if (array_key_exists("p1", $_POST)) {

	$param = array('type' => $_POST['p1'], 'nom' => $_POST['name'], 'hx' => '2', 'hy' => '1', 'x' => '1', 'y' => '1');
	$ship = new Ship($param);
	$_SESSION["p1"] = $ship;
	header("Location: player2creation.html");
}
else if (array_key_exists("p2", $_POST)) {
	$param = array('type' => $_POST['p2'], 'nom' => $_POST['name'], 'hx' => '39', 'hy' => '20', 'x' => '40', 'y' => '20');
	$ship = new Ship($param);
	$_SESSION["p2"] = $ship;
	$_SESSION["player"] = 'p1';
	$_SESSION['moove'] = 2;
	$_SESSION['strike'] = 1;
	$_SESSION['quote'] = "";
	header("Location: p1game.php");
}
else {

}

?>