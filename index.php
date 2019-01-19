<?PHP
	session_start();
	if (array_key_exists("login", $_SESSION))
	{
        echo "Hello ".$_SESSION["login"]."!";
    }
?>

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
  Awesome Battleships Battles
  </h1>
  <div class="wrapper">
  <?PHP 
		if (array_key_exists("login", $_SESSION)) {
		echo "
		<form action='login/logout.php'>
			<button type='submit' name='logout'>Log Out</button>
		</form>";
		return;}
		?>
	  
  <form class="box box1" method="POST" action="login/sign_in.php">
	  <label for="login">Login</label>
	  <input type="text" name="login" id="login">
	  <label for="pwd">Password</label>
	  <input type="password" name="pwd" id="pwd">  
		<button type="submit" name="signin" value="start">Sign In</button>

	  </form>
	  <form action="login/create_account.php">
			<button type="submit" name="Sign up">Sign up</button>
		</form>
</div>
</html></body>