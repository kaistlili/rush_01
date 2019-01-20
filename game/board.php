<head>
<style>
	.wrapper{
		display:grid;
		grid-template-columns: repeat(40, 1fr);
		grid-template-rows: repeat(20, 1fr);
		text-align: center ;
	}

</style>
</head>
<body>
	<div class="wrapper">

<?php 

	include('Ship.class.php');
	session_start();

	$hx = $_SESSION['p1']->hx;
	$hy = $_SESSION['p1']->hy;
	$x = $_SESSION['p1']->x;
	$y = $_SESSION['p1']->y;
	$tail1 = $x + (40 * ($y-1));
	$head1 = $hx + (40 * ($hy-1));

	$hi = $_SESSION['p2']->hx;
	$hj = $_SESSION['p2']->hy;
	$i = $_SESSION['p2']->x;
	$j = $_SESSION['p2']->y;
	$tail2 = $i + (40 * ($j-1));
	$head2 = $hi + (40 * ($hj-1));



	$j = 1;
	while ($j < 801) {
		if ($j == $tail1) {
			$board = $board."<div style='background: #ADD8E6;'>X</div>";
		}
		else if ($j == $head1) {
			$board = $board."<div style='background: #ADD8E6;'>x</div>";
		}
		else if ($j == $tail2) {
			$board = $board."<div style='background: #F08080;'>X</div>";
		}
		else if ($j == $head2) {
			$board = $board."<div style='background: #F08080;'>x</div>";
		}
		else {
			$board = $board."<div style='background: #F5F5F5;'></div>";
		}
		$j++;
	}
	echo "$board";

?>
	
	</div>
</body>
