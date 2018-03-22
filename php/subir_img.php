<?php

require('bd.php');


$nom = $_POST['nombre_pd'];
$prec = $_POST['precio_p'];
$depa = $_POST['departament'];
$fotoTemporal = $_FILES['file']['tmp_name'];
$foto = $_FILES['file']['name'];
$fotoTipo = $_FILES['file']['type'];
$tamano_imagen = $_FILES['file']['size'];


if($fotoTipo == "image/jpeg" || $fotoTipo == "image/png" || $fotoTipo == "image/jpg"){

	$rutaBase = "../fotos";
        $nom_encrypted = md5($foto).".jpg";
        $ruta = $rutaBase."/".$nom_encrypted;
    
        //mandaremos la foto a ruta
        move_uploaded_file($fotoTemporal, $ruta);
        
        mysqli_query($conexion, "INSERT INTO imagenes (id_img_fp,nom_img_fp, precio_fp, dep_img_fp,foto_fp, estado_img) VALUE ('','$nom','$prec','$depa','$nom_encrypted', '1');");
        
  
echo "Se Subio Satisfactoriamente, Siempre verifica bien tus Datos antes de Subir.";

        
       
}else{

echo "No se permite este tipo de archivo, Solo permitidos, JPG,JPEG,PNG";


	
}
