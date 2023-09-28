<?php

    if (!empty($_POST["subirLibro"])){
        if (empty($_POST["boo_name"]) or empty($_POST["boo_desc"])/** or empty($_POST["boo_img"])*/){
            echo 'Tienes que llenar todos los campos'.'<br>';
        } else {
            $boo_name = $_POST["boo_name"];
            $boo_desc = $_POST["boo_desc"];
            //$boo_img = $_POST["boo_img"];
            $sql=$conexion->query("INSERT INTO `books`(`boo_name`, `boo_desc`/**, `boo_img`*/) VALUES ('$boo_name','$boo_desc'/**,'$boo_img'*/)");

            if ($sql == 1){
                echo 'Libro pubicado exitosamente'.'<br>';
            } else {
                echo 'Error al publicar el libro'.'<br>';
            }
        }
    }

?>


<?php
/**    
    $directorio = "imagenes/";

    $archivo = $directorio . basename($_FILES["file"]["name"]);

    $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));

    // valida que es imagen
    $checarSiImagen = getimagesize($_FILES["file"]["tmp_name"]);


    if($checarSiImagen != false){

        //validando tamaño del archivo
        $size = $_FILES["file"]["size"];

        if($size > 500000){
            echo "El archivo tiene que ser menor a 500kb";
        }else{

            //validar tipo de imagen
            if($tipoArchivo == "jpg" || $tipoArchivo == "jpeg"){
                // se validó el archivo correctamente
                if(move_uploaded_file($_FILES["file"]["tmp_name"], $archivo)){
                    echo "El archivo se subió correctamente";
                }else{
                    echo "Hubo un error en la subida del archivo";
                }
            }else{
                echo "Solo se admiten archivos jpg/jpeg";
            }
        }
    }else{
        echo "El documento no es una imagen";
    }
    */
?>