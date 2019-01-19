<?php

include('Ship.class.php');
session_start();

$player = $_SESSION['player'];
$hx = $_SESSION[$player]->hx;
$hy = $_SESSION[$player]->hy;
$x = $_SESSION[$player]->x;
$y = $_SESSION[$player]->y;
$dice = 1;

if (isset($_GET['moove']) && $_SESSION['moove'] > 0)
{
	if ($_GET['moove'] == 'moove') {

		$dice = rand(1, 6);

		if ((($hx - $x) == 1) && (($hy - $y) == 0)) {
			$hx = $hx + $dice;
			$x = $x + $dice;
			$_SESSION[$player]->setHx($hx);
			$_SESSION[$player]->setx($x);
		}

		else if ((($hx - $x) == -1) && (($hy - $y) == 0)) {
			$hx = $hx - $dice;
			$x = $x - $dice;
			$_SESSION[$player]->setHx($hx);
			$_SESSION[$player]->setx($x);
		}

		else if ((($hx - $x) == 0) && (($hy - $y) == 1)) {
			$hy = $hy + $dice;
			$y = $y + $dice;
			$_SESSION[$player]->setHy($hy);
			$_SESSION[$player]->sety($y);
		}

		else if ((($hx - $x) == 0) && (($hy - $y) == -1)) {
			$hy = $hy - $dice;
			$y = $y - $dice;
			$_SESSION[$player]->setHy($hy);
			$_SESSION[$player]->sety($y);
		}

	}
	else if ($_GET['moove'] == 'turn_right') {
		if ((($hx - $x) == 1) && (($hy - $y) == 0)) {
			$hx = $hx + 1;
			$x = $x + 2;
			$hy = $hy + 1;
			$y = $y;
			$_SESSION[$player]->setHx($hx);
			$_SESSION[$player]->setx($x);
			$_SESSION[$player]->setHy($hy);
			//face east
		}

		else if ((($hx - $x) == -1) && (($hy - $y) == 0)) {
			$hx = $hx - 1;
			$x = $x - 2;
			$hy = $hy - 1;
			$_SESSION[$player]->setHx($hx);
			$_SESSION[$player]->setx($x);
			$_SESSION[$player]->setHy($hy);
		}

		else if ((($hx - $x) == 0) && (($hy - $y) == 1)) {
			$hy = $hy + 1;
			$y = $y + 2;
			$hx = $hx - 1;
			$_SESSION[$player]->setHy($hy);
			$_SESSION[$player]->sety($y);
			$_SESSION[$player]->setHx($hx);
		}

		else if ((($hx - $x) == 0) && (($hy - $y) == -1)) {
			$hy = $hy - 1;
			$y = $y - 2;
			$hx = $hx + 1;
			$_SESSION[$player]->setHy($hy);
			$_SESSION[$player]->sety($y);
			$_SESSION[$player]->setHx($hx);
		}
	}
	else if ($_GET['moove'] == 'turn_left') {
		if ((($hx - $x) == 1) && (($hy - $y) == 0)) {
			$hx = $hx + 1;
			$x = $x + 2;
			$hy = $hy - 1;
			$y = $y;
			$_SESSION[$player]->setHx($hx);
			$_SESSION[$player]->setx($x);
			$_SESSION[$player]->setHy($hy);
			//face east
		}

		else if ((($hx - $x) == -1) && (($hy - $y) == 0)) {
			$hx = $hx - 1;
			$x = $x - 2;
			$hy = $hy + 1;
			$_SESSION[$player]->setHx($hx);
			$_SESSION[$player]->setx($x);
			$_SESSION[$player]->setHy($hy);
		}

		else if ((($hx - $x) == 0) && (($hy - $y) == 1)) {
			$hy = $hy + 1;
			$y = $y + 2;
			$hx = $hx + 1;
			$_SESSION[$player]->setHy($hy);
			$_SESSION[$player]->sety($y);
			$_SESSION[$player]->setHx($hx);
		}

		else if ((($hx - $x) == 0) && (($hy - $y) == -1)) {
			$hy = $hy - 1;
			$y = $y - 2;
			$hx = $hx - 1;
			$_SESSION[$player]->setHy($hy);
			$_SESSION[$player]->sety($y);
			$_SESSION[$player]->setHx($hx);
		}
	}
	$_SESSION['moove'] = $_SESSION['moove'] - 1;
	if ($hx < 1 || $hx > 40 || $x < 1 || $x > 40 || $hy < 1 || $hy > 20 || $y < 1 || $y > 20) {
		header("Location: crash.php");
		exit();
	}
	if (((($_SESSION['p1']->hx == $_SESSION['p2']->hx) && ($_SESSION['p1']->hy == $_SESSION['p2']->hy)) || (($_SESSION['p1']->x == $_SESSION['p2']->x) && ($_SESSION['p1']->y == $_SESSION['p2']->y)))) {
		header("Location: crash.php");
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
}

if ($_SESSION['player'] == 'p1') {
	header("Location: p1game.php");
	exit();
}
else if ($_SESSION['player'] == 'p2') {
	header("Location: p2game.php");
	exit();
}
