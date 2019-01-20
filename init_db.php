<?PHP

    $server = "localhost";
    $username = "root";
    $password = "toortoor";
	$conn = mysqli_connect($server, $username, $password);
    if (!$conn)
    {
        echo "error connecting to db";
        return;
    }
    $request = "CREATE DATABASE IF NOT EXISTS db_rush01_test;";
	if (mysqli_query($conn, $request))
		echo "successfully created database";
	$request = "CREATE TABLE IF NOT EXISTS `users` (`id` INT PRIMARY KEY AUTO_INCREMENT NOT NULL, `login` VARCHAR(32) NOT NULL, `pwd` VARCHAR(64) NOT NULL)";


	$res = mysqli_query($conn, $request);
    return $conn;
?>
