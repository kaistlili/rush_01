<?php

include('Ship.class.php');
session_start();

?>

<!DOCTYPE html>
<html>
<style>
	body {
	    font-family: Roboto,sans-serif;
	}
	.wrapper{
		display:grid;
		grid-template-columns: auto 815px auto;
		grid-auto-rows: minmax (100px, auto);
		grid-gap:1em;
	}
	.box1{
		grid-column: 2/3;
	}
	.comm{
		display:grid;
		grid-template-columns: auto 950px auto;
		grid-auto-rows: minmax (200px, auto);
		grid-gap: 3em;
		color: #F08080;
		font-size: 18px;
		text-align: center;
	}
	.box2{
		grid-column: 2/3;
	}
	.command{
			display:grid;
			grid-template-columns: 2fr 1fr 4fr 4fr 1fr;
			grid-auto-rows: minmax (200px, auto);
			grid-gap:1em;
			font-size: 18px;
	}
	.button {
 		   border: none;
 		   background: #F08080;
		   color: white;
 		   padding: 5px;
 		   border-radius: 6px;
	}
	.command > div{

			padding: 1em;
	}
	.quote {
		    border-radius: 25px;
   			border-color: #F08080;
	}
	.display {
		    border: none;
	}
	.rules {
		display:grid;
		grid-template-columns: auto 950px auto;
		grid-auto-rows: minmax (200px, auto);
		grid-gap:1em;
	}
	.subrules {
		grid-column: 2/3;
		background-color: #F08080;
		color: white;
		text-align: center;
		font-size: 20px;
	}
	.subrules > h2{
		text-align: center;
		font-size: 28px;

	}

</style>
<header>
<script langage="javascript">top.frames['board'].location = 'board.php';</script>
<script langage="javascript">bottom.frames['quote'].location = 'get_quote.php';</script>
</header>
<body>
	<div class="wrapper">
		<div class="box box1">
			<iframe class="display" name="board" src="board.php" width="815" height="405"></iframe>
		</div>
	</div>
	<div class="comm">
		<div class="box box2">
			<div class="command">
				<div>
					<?php echo $_SESSION['p2']->_nom; ?>
				</div>
				<div>
					<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="24" height="24"
viewBox="0 0 224 224"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,224v-224h224v224z" fill="none"></path><g fill="#f08080"><path d="M154,28c-27.02,0 -42,19.50667 -42,19.50667c0,0 -14.98,-19.50667 -42,-19.50667c-28.35467,0 -51.33333,22.97867 -51.33333,51.33333c0,38.92933 45.84533,76.65467 58.62267,88.57333c14.71867,13.72 34.71067,31.36 34.71067,31.36c0,0 19.992,-17.64 34.71067,-31.36c12.77733,-11.91867 58.62267,-49.644 58.62267,-88.57333c0,-28.35467 -22.97867,-51.33333 -51.33333,-51.33333z"></path></g></g></svg>
					<?php echo $_SESSION['p2']->_bouclier; ?>
				</div>
				<div>
					<form method="GET" action="ship_moove.php">
						Moove commands:<br />
						<input class="button" type="submit" name = "moove" value="moove" />
						<input class="button" type="submit" name = "moove" value="turn_right" />
						<input class="button" type="submit" name = "moove" value="turn_left" />
					</form>
				</div>
				<div>
					<form method="GET" action="ship_strike.php">
						strike command:<br />
						<input class="button" type="submit" name = "strike" value="strike" 	/>
					</form>
				</div>
				<div>
					<form method="POST" action="changeplayer.php">
						end?<br />
						<input class="button" type="submit" name = "endturn" value="OK" />
					</form>
				</div>
			</div>
			<div>
				<iframe class="quote" name="name" src="get_quote.php" width="950" height="50"></iframe>
			</div>
		</div>
	</div>
	<div classe="rules">
		<div class="box subrules">
			<h2>RULES</h2>
			<div>Each player start with 15 HP.</div>
			<div>The first one that kill his oponent win the game.</div>
			<div>You can moove twice per turn and fire once.</div>
			<div>Turn wisely.</div>
			<div>And please, pretty please, dom't crash your ship!</div>
		</div>
	</div>
</body>
</html>