<!DOCTYPE html>
<html>
<head>
	<style>
		div {
			font-family: Roboto,sans-serif;
			font-size: 20px;
			text-align: center;
		}
	</style>
</head>
<body>


<?php 

session_start();

echo "<div>";
echo $_SESSION['quote'];
echo "</div>";

?>

</body>
</html>