<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Libreria</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container" id="container">

            <div class="form-container sign-in-container">
                <form action="Controlador/accesso.php" method="post">
                    <h1>Login</h1>

                    <span>usa tu cuenta para ingresar</span>
                    <input type="email" placeholder="Email" name="txtemail"/>
                    <input type="password" placeholder="Password" name="txtclave"/>
                    <a>¿Olvidaste tu contraseña?</a>
                    <button name="btnIngresar">Ingresar</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">

                    <div class="overlay-panel overlay-right">
                        <h1>¡Hola!</h1>
                        <p>Introduce tus datos personales y comience el viaje con nosotros</p>

                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
