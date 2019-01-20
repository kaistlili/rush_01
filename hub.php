<html>
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
<head>
</head>
<body>
	<iframe name="chat" src="chat/chat.php" width="100%" height="550px"></iframe>
	<iframe name="speak" src="chat/speak.php" width="100%" height="50px"></iframe>
	<div class="wrapper">
  		<form class="box box1" method="POST" action="game/player1creation.html">  
  	 		<input class="button" type="submit" name="start" value="new game">
  		</form>
	</div>
</body>
</html>