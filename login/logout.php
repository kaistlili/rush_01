<html>
<head>
	<style>
	body{
		font-family: Roboto,sans-serif;
		background-color: #D3D3D3;
	}
	h1{
		text-align: center;
		font-size: 60px;
		color: white
	}
	.wrapper{
		padding: 2em;
		display:grid;
		grid-template-columns: auto 815px auto;
		grid-auto-rows: minmax (100px, auto);
		grid-gap:1em;
		color: white;
	}
	.box1{
		grid-column: 2/3;
		text-align: center;
	}
	.button {
 		border: none;
		color: #D3D3D3;
 		padding: 5px;
 		border-radius: 6px;
	}
	</style>
</head>
<body>
	<div clas="wrapper">
		<div class="box box1">
<?php
session_start();
if ($_SESSION["login"])
{
    echo "loggin out: ".$_SESSION["login"]."...</br>";
    unset($_SESSION["login"]);
    echo "Loggued out </br>";
}
else 
    echo "You are Not loggued in</br>";
echo "<a href='../index.php'> return to HomePage</a>";
?>
		</div>
	</div>
</body>
</html>
