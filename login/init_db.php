<?PHP

    function init_db()
    {
    $server = "localhost";
    $username = "root";
    $password = "toortoor";
    $db_name = "db_rush01";
    $conn = mysqli_connect($server, $username, $password, $db_name);
    if (!$conn)
    {
        echo "error connecting to db";
        return;
    }
    return $conn;
}
?>