<?php

session_start();

function fill_tab()
{
	$tab["login"] = $_SESSION["login"];
	$tab["time"] = time();
	$tab["msg"] = $_POST["msg"];
	return ($tab);
}

if ($_SESSION["login"] !== NULL && $_SESSION["login"] != "")
{
	if ($_POST["submit"] !== NULL && $_POST["submit"] == "OK")
	{
		$tab = fill_tab();
		if (!(file_exists("../htdocs/private")))
			mkdir("../htdocs/private", 0777, true);
		if (!(file_exists("../htdocs/private/chat")))
		{		
			$d_conv[] = $tab;
			$d_raw[] = serialize($d_conv);
			file_put_contents("../htdocs/private/chat", $d_raw);
		}
		else
		{
			$fp = fopen("../htdocs/private/chat", "c+");
			if (flock($fp, LOCK_EX | LOCK_NB))
			{
				$d_raw2 = file_get_contents("../htdocs/private/chat");
				$d_conv2 = unserialize($d_raw2);
				$d_conv2[] = $tab;
				$d_raw3[] = serialize($d_conv2);
				flock($fp, LOCK_UN);
			}
			fclose($fp);
			file_put_contents("../htdocs/private/chat", $d_raw3);
		}
	}
}
else
{
	echo "ERROR\n";
	exit ();
}

?>

<html>
<header>
<script langage="javascript">top.frames['chat'].location = 'chat.php';</script>
</header>
<body>
<form method="POST" action="">
	: <input type="text" name="msg" />
	<input type="submit" name = "submit" value="OK" />
</form>
</body></html>
