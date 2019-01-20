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
<body>

  <h1>
  RIP You have crashed your ship !
  </h1>
  <div class="wrapper">
  	<form class="box box1" method="POST" action="../hub.php">  
  	  <input class="button" type="submit" name="start" value="new game">
  	</form>
</div>
</html></body>