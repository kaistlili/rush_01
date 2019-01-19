<?PHP
    session_start();
	function auth($login, $passwd)
	{
		$server = "localhost";
		$username = "root";
		$password = "toortoor";
		$conn = mysqli_connect($server, $username, $password);
		$request = "use db_rush01; SELECT `pwd` FROM `users` WHERE `login` LIKE \'".$login."\'";
		if (!$conn)
			die("connection failed");
		
			foreach ($data as &$credentials)
		{
			if ($credentials["login"] == $login)
			{
				if ($credentials["passwd"] == hash("whirlpool", $passwd))
					return TRUE;
				return FAlSE;
			}
		}
	}
?>
