<?php

    $usu_email = $_POST['email'];
    $usu_password = $_POST['contraseña'];

    session_start();
    $_SESSION['email'] = $usu_email;

    $conexion = mysqli_connect("localhost", "root", "", "biblioteca");

    $consulta = "SELECT * FROM users where usu_email = '$usu_email' and usu_password = '$usu_password'";
    $resultado = mysqli_query($conexion, $consulta);

    $filas = mysqli_fetch_array($resultado);

    if($filas['rols_id']==1){ //Lector
        header("location: ../PagPrincipalLector/index.php");
    }else
    if($filas['rols_id']==2){ //Autor
        header ("location: ../PagPrincipalAutor/index.php");
    }else{
        ?>
        <?php
        include("index.php");
        ?>
        <h1>Correo o contraseña incorrectas</h1>
        <?php

    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);

?>