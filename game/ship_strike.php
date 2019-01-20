<?php

include('Ship.class.php');
session_start();




$player = $_SESSION['player'];
$hx = $_SESSION[$player]->hx;
$hy = $_SESSION[$player]->hy;
$x = $_SESSION[$player]->x;
$y = $_SESSION[$player]->y;


print_r($_SESSION['player']);

if ($player == 'p1')
	$target = $_SESSION['p2'];
else
	$target = $_SESSION['p1'];

if (isset($_GET['strike']) && $_SESSION['strike'] > 0) {
	
	$dice = rand(1, 6);

	if ((($hx - $x) == 1) && (($hy - $y) == 0)) {

		if ((($target->y == $y) || ($target->hy == $y)) && 
			(($target->x > $hx) || ($target->hx > $hx))) {
			$_SESSION['quote'] = "Your target took $dice damages!";
			$target->setBouclier( $target->_bouclier - $dice);
		}
		
		else 
			$_SESSION['quote'] = "Maybe you should aim better next time!";

	}

	else if ((($hx - $x) == -1) && (($hy - $y) == 0)) {
		if ((($target->y == $y) || ($target->hy == $y)) && 
			(($target->x < $hx) || ($target->hx < $hx))) {
			$_SESSION['quote'] = "Your target took $dice damages!";
			$target->setBouclier( $target->_bouclier - $dice);
		}

		else 
			$_SESSION['quote'] = "Maybe you should aim better next time!";
	}

	else if ((($hx - $x) == 0) && (($hy - $y) == 1)) {
		if ((($target->x == $x) || ($target->hx == $x)) && 
			(($target->y > $hy) || ($target->hx > $hy))) {
			$_SESSION['quote'] = "Your target took $dice damages!";
			$target->setBouclier( $target->_bouclier - $dice);
		}

		else 
			$_SESSION['quote'] = "Maybe you should aim better next time!";
	}

	else if ((($hx - $x) == 0) && (($hy - $y) == -1)) {
		if ((($target->x == $x) || ($target->hx == $x)) && 
			(($target->y < $hy) || ($target->hy < $hy))) {
			$_SESSION['quote'] = "Your target took $dice damages!";
			$target->setBouclier( $target->_bouclier - $dice);
		}

		else 
			$_SESSION['quote'] = "Maybe you should aim better next time!";
	}

	$_SESSION['strike']--;
}
if ($target->_bouclier < 1) {
	header("Location: win.php");
	exit();
}

if ($_SESSION['player'] == 'p1') {
	header("Location: p1game.php");
	exit();
}
else if ($_SESSION['player'] == 'p2') {
	header("Location: p2game.php");
	exit();
}
?>