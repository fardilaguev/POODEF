<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>E-Bock Perfil</title>
</head>
<body>
    <header class="fNav">
        <div>
            <nav class="navbar">
                <div class="container-fluid">
                  <a href="../PagPrincipalAutor/index.html" class="navbar-brand">E-BOCK</a>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <article class="de">
            <div>
                <div class="izq">
                    <img class="img" src="../img/foto perfil.jpg" alt="">
                </div>
                <div>
                    <div class="der">
                        <?php
                        
                            echo $_SESSION["usuario"];
                        
                        ?>
                        <br>
                        Correo@hotmail.com
                        <br>
                    </div>
                </div>
            </div>
        </article>
        <section class="de2">
            <div class="pala">
                <p>Libros Leidos</p>
            </div>
            
            <div class="pala">
                <p>Libros Guardados</p>
            </div>

            <div class="pala">
                <p>Libros Publicados</p>
            </div>
        </section>
    </main>
</body>
</html>