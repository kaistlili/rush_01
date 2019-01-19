<?php
session_start();

if (!$_SESSION['player']) {
	$_SESSION['player'] = 'p1';
}
if (isset($_POST['endturn']) && $_POST['endturn'] == "OK") {
	if ($_SESSION['player'] == 'p1') {
		$_SESSION['player'] = 'p2';
	}
	if ($_SESSION['player'] == 'p2') {
		$_SESSION['player'] = 'p1';
	}
	header("Location: game.php");
}

?>

<html>
<header>
<script langage="javascript">top.frames['board'].location = 'board.php';</script>
</header>
<head>
	<style>
		.command{
			display:grid;
			grid-template-columns: 2fr 1fr 4fr 4fr 1fr;
			grid-auto-rows: minmax (150px, auto);
			grid-gap:1em;
		}
		.command > div{
			background: #F08080;
			padding: 1em;
		}


	</style>
	<title></title>
</head>
<body>

	</div>
	<?php echo $_SESSION["player"]; ?>
	<div>

	<div class="command">
		<div class=>pl_pic</div>
		<div>HP</div>
		<div>Moove command</div>
		<div>strike command</div>
		<form method="POST" action="">
			<input type="submit" name = "endturn" value="OK" />
		</form>

</body>
</html>
