<?php
session_start();
include './includes/dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Sesión</title>
</head>

<body>
<form action="#" method="POST">
        <div class="box">
            <div class="container">
                <div class="top-header">
                    <span>Bienvenido</span>
                    <header>Login</header>
                </div>

                <div class="input-field">
                    <input type="text" name="username" class="input" placeholder="Usuario" required>
                    <i class="fa-regular fa-user"></i>
                </div>

                <div class="input-field">
                    <input type="text" name="password" class="input" placeholder="Contraseña" required>
                    <i class="fa-solid fa-lock"></i>
                </div>

                <div class="input-field">
                    <input type="submit" class="submit" value="Enviar">
                </div>

            </div>
        </div>
        </form>


        
</body>

</html>