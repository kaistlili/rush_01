<?php
    session_start();
    include('auth.php');
    include('init_db.php');
	if (array_key_exists("login", $_SESSION))
    {
        echo "You are already loggued in as : ".$_SESSION["login"];
        return;
    }
    if (($_POST["login"] && $_POST["pwd"] && $_POST["confirm_pwd"]) && ($_POST["pwd"] == $_POST["confirm_pwd"]))
    {
        $conn = init_db();
        if (!$conn)
        {
            echo "rout error connecting to db";
            return;
        }
        $request = "SELECT `login` FROM `users` WHERE `login` LIKE '".$_POST["login"]."';";
        $res = mysqli_query($conn, $request);
        if (mysqli_num_rows($res) > 0)
            $retry_msg = "user ".$_POST["login"]." already exists";
        else
        {
            $request = "INSERT INTO `users` VALUES (NULL,'".$_POST["login"]."','".hash("sha256", $_POST["pwd"])."');";
            $res = mysqli_query($conn, $request);
            if ($res)
            {
                $_SESSION["login"] = $_POST["login"];
                echo "user added successfully";
                echo "<a href='../index.php'> return to HomePage</a>";
            }
            else
                echo "failed";
            return;
        }
    }
    else if ($_POST["pwd"]!= $_POST["confirm_pwd"])
        echo "passwod confirmation failed";

?>

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
<form method="POST" action="create_account.php">
	<label for="login">Login: </label>
    <input type="text" name="login"> </br>
	<label for="pwd">Password: </label>
    <input type="password" name="pwd"> </br> 
    <label for="pwd">Confirm Password: </label>
	<input type="password" name="confirm_pwd"></br>
	<button class="button" type="submit" name="signin" value="start">Create Account</button>
	</form>
            </div>
    </div>
</body>
</html>