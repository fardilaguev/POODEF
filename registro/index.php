<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>E-Bock Registro</title>
</head>
<body>
    <main>
        <article>
            <div class="ini">
                <div class="cuadro">
                    <form action="" method="post">
                        <br>
                        <div>
                            REGISTRO
                        </div>
                        <br>
                        <?php
                        
                            $conexion = mysqli_connect("localhost", "root", "", "biblioteca");
                            include ("validar.php");

                        ?>
                        <br>
                        <div>
                            <input type="text" placeholder="Apodo o nombre de usuario" title="Ingresa tu nombre de usuario" autofocus="true" autocomplete="on" required name="usuario">
                        </div>
                        <br>
                        <div>
                            <input type="text" placeholder="Correo electrónico" title="Ingrese su correo electrónico" autofocus="true" autocomplete="on" required name="email">
                        </div>
                        <br>
                        <div>
                            <input type="password" placeholder="Contraseña" title="Ingrese su contraseña" required name="password">
                        </div>
                        <br>
                        <div>
                            <input type="password" placeholder="Repetir Contraseña" title="Ingrese su contraseña" required name="password">
                        </div>
                        <br>
                        <br>
                        <div>
                            <input type="submit" value="Registrate" name="registro">
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </article>
        <article>
            <div class="cuaIni">
                E-BOCK
            </div>
        </article>
    </main>
</body>
</html>