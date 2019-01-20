<?PHP

    function init_db()
    {
    $server = "localhost";
    $username = "root";
    $password = "58917891";
    $db_name = "db_rush01";
    $conn = mysqli_connect($server, $username, $password, $db_name);
    if (!$conn)
    {
        echo "|".$conn."|";
        echo "rerror connecting to db";
        return;
    }
    return $conn;
}
?>