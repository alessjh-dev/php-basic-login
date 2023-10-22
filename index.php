<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="ruta-a-tu-archivo-bootstrap.css">
    <style>
        body {
            background-color: #333; 
            color: #fff; 
        }

        .full-height {
            min-height: 100vh;
            display: grid;
        }

        .card {
            background-color: #444;
            color: #fff; 
        }

        .card-header {
            background-color: #222; 
            text-align: center; 
            font-size: 24px;
            padding: 20px; 
        }

        .form-control {
            background-color: #222; 
            color: #fff; 
        }

        .smiley {
            font-size: 100px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container h-100 full-height">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="smiley">🐻</div>
                        Iniciar Sesión
                    </div> 
                    <div class="card-body">
                        <form action="process_login.php" method="POST">
                            <div class="form-group">
                                <label for="username">Nombre de usuario:</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="col-md-12 d-flex align-items-center justify-content-center">
                                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
