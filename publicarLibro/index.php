<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>E-Bock Publicación</title>
</head>
<body>
    <header class="fNav">
        <div>
            <nav class="navbar">
                <div class="container-fluid">
                  <a href="../PagPrincipalAutor/index.php" class="navbar-brand">E-BOCK</a>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <article class="de">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <br>
                <div>
                    <h1>SUBE TU LIBRO</h1>
                </div>
                <br>
                <?php
                
                    $conexion = mysqli_connect("localhost", "root", "", "biblioteca");
                    include ("upload.php");
                
                ?>
                <br>
                <div>
                    <label for="boo_name">Nombre del libro:</label><br><br>
                    <input type="text" name="boo_name" id="boo_name" require>
                </div>
                <br>
                <div>
                    <label for="boo_desc">Descripción del libro:</label><br><br>
                    <input type="textarea" name="boo_desc" id="boo_desc" require>
                </div>
                <br>
                <div>
                    <label for="boo_img">Imagen del libro:</label>
                    <input type="file" name="file" require name="boo_img">
                </div>
                <br>
                <div>
                    <input type="submit" value="Subir archivo" name="subirLibro">
                </div>
                <br>
            </form>
        </article>
    </main>
</body>
</html>