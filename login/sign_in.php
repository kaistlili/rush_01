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
    include('auth.php');
    include('init_db.php');
	if (array_key_exists("login", $_SESSION))
    {
        echo "You are already loggued in as : ".$_SESSION["login"].PHP_EOL;
        echo "<a href='logout.php'> Log out </a>";
        return;
    }/*
    $server = "localhost";
    $username = "root";
    $password = "toortoor";
    $db_name = "db_rush01";
    $conn = mysqli_connect($server, $username, $password, $db_name);
    */
    $conn = init_db();
    if (!$conn)
    {
        echo "error connecting to db";
        return;
    }
    $request = "SELECT `pwd` FROM `users` WHERE `login` LIKE '".$_POST["login"]."';";
    $res = mysqli_query($conn, $request);
    if (mysqli_num_rows($res) > 0)
    {
        while ($row = mysqli_fetch_assoc($res))
        {
            $stored_pwd = $row["pwd"];
        }
        if (hash("sha256", $_POST["pwd"]) == $stored_pwd)
        {
            $_SESSION["login"] = $_POST["login"];
            echo "user logged-in successfully <br/>";
            echo "<a href='../index.php'> return to HomePage</a>";
            return;
        }
    }
    echo "Wrong login and/or password";
?>
        </div>
    </div>
</body>
</html>
