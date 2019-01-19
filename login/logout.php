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