<?php

include("bd.php");

$idusuario = $_POST["idusuario"];
$nombre = $_POST["nombre_u"];
$usuario = $_POST["usuario_u"];
$contra = $_POST["clave_u"];
$opcion = $_POST["opcion"];
$estado = 1;
$informacion = [];

switch($opcion){
case 'modificar':
    modificar($nombre, $usuario, $contra, $idusuario, $estado, $conexion);
break;
case 'eliminar':
eliminar($idusuario, $conexion);
break; 
}


//FUNCION QUE MODIFICA LOS DATOS
function modificar($nombre, $usuario, $contra, $idusuario, $estado, $conexion){
$query = "UPDATE usrs SET nombreUsrsFp='$nombre', usuarioUsrsFp='$usuario', contraUsrsFp='$contra', estadoUsrsFp='$estado' WHERE idUsrsFp = $idusuario";
	$resultado = mysqli_query($conexion, $query);
//FUNCIONES
verificar_resultado($resultado);
cerrar($conexion);
}

// SOLO CAMBIA LOS ESTADOS PERO EL PUNTO ES QUE SOLO ACCESAN USUARIOS CON ESTADO 1
function eliminar($idusuario, $conexion){
    $query = "UPDATE usrs SET estadoUsrsFp = 0 WHERE idUsrsFp = $idusuario";
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