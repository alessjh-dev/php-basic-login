<?php
session_start(); 

echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Logueo Exitoso</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
    <style>
        body {
            background-color: #0078D7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .message-box {
            text-align: center;
            color: #fff;
        }

        .smiley {
            font-size: 100px;
        }
    </style>
</head>
<body>
    <div class='message-box'>
        <div class='smiley'>&#128512;</div> <!-- Carita sonriente -->
        <h1>Logueo Exitoso</h1>
        <a class='btn btn-success mt-5' href='index.php'>Cerrar Sesión</a>
    </div>
</body>
</html>";
?>
