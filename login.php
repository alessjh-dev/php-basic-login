<?php
$host = "localhost";
$port = 3306;
$user = "root";
$password = "";
$database = "sistemas_operativos";

$mysqli = new mysqli($host, $user, $password, $database, $port);

if ($mysqli->connect_error) {
    die("Error de conexión: " . $mysqli->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $mysqli->real_escape_string($_POST["username"]);
    $password = $mysqli->real_escape_string($_POST["password"]);

    $sql = "SELECT * FROM user WHERE user_name = '$username' AND password = '$password'";
    $result = $mysqli->query($sql);

    if ($result) {
        if ($result->num_rows == 1) {
            session_start();
            header("Location: welcome.php");
            exit();
        } else {
            header("Location: failed.php");
        }
    } else {
        echo "Error en la consulta SQL: " . $mysqli->error;
    }
}

$mysqli->close();
?>
