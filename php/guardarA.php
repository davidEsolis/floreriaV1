<?php

include("bd.php");

$idusuario = $_POST["idusuario"];
$nombre = $_POST["nombre_u"];
$precio = $_POST["precio_u"];
$depa = $_POST["departamentE"];
$opcion = $_POST["opcion"];
$estado = 1;
$informacion = [];

switch($opcion){
case 'modificar':
    modificar($nombre, $precio, $depa, $idusuario, $conexion);
break;
case 'eliminar':
eliminar($idusuario, $conexion);
break; 
}


//FUNCION QUE MODIFICA LOS DATOS
function modificar($nombre, $precio, $depa, $idusuario, $conexion){
$query = "UPDATE imagenes SET nom_img_fp='$nombre', precio_fp='$precio', dep_img_fp='$depa' WHERE id_img_fp = $idusuario";
	$resultado = mysqli_query($conexion, $query);
//FUNCIONES
verificar_resultado($resultado);
cerrar($conexion);
}

// SOLO CAMBIA LOS ESTADOS PERO EL PUNTO ES QUE SOLO ACCESAN USUARIOS CON ESTADO 1
function eliminar($idusuario, $conexion){
    $query = "UPDATE imagenes SET estado_img = 0 WHERE id_img_fp = $idusuario";
    $resultado = mysqli_query($conexion, $query);
    verificar_resultado($resultado);
    cerrar($conexion);
}
// VERIFICA LOS RESULTADOS E IMPRIME EL OBJETO JSON 
function verificar_resultado($resultado){
    if(!$resultado){
        $informacion["respuesta"] = "ERROR";
    } 
    else{
        $informacion["respuesta"] = "BIEN";
    }
    echo json_encode($informacion);
}
//CIERRA LA CONEXION
function cerrar($conexion){
    mysqli_close($conexion);
}