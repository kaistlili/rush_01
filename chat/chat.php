<?php

session_start();

$a = $_SESSION["login"];
echo "$a\n";

if ($_SESSION["login"] !== NULL && $_SESSION["login"] != "")
{
	date_default_timezone_set("Europe/Paris");
	if (file_exists("../htdocs/private/chat") == TRUE)
	{
		$fp = fopen("../htdocs/private/chat", "r");
		if (flock($fp, LOCK_SH | LOCK_NB))
		{
			$d_raw = file_get_contents("../htdocs/private/chat");
			$d_conv = unserialize($d_raw);
			foreach ($d_conv as $elem)
			{	
				$time = date("H:i", $elem["time"]);
				$user = $elem["login"];
				$msg = $elem["msg"];
				echo "[$time] <b>$user</b>: $msg<br />\n";
			}

			flock($fp, LOCK_UN);
		}
		fclose($fp);
	}
}
else
{
	echo "ERROR\n";
	exit ();
}

?>