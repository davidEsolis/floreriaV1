<?php

include("bd.php");
/*

*/
$nombre = $_POST["nombre_u"];
$usuario = $_POST["usuario_u"];
$contra = $_POST["clave_u"];
$informacion = [];

if($nombre == '' && $usuario == '' && $contra  == ''){
	 $informacion["respuesta"] = "ERROR";
	 echo json_encode($informacion);

}else{
		
	 ingresar($nombre, $usuario, $contra, $conexion);
}

	//ingresar($nombre, $usuario, $contra, $conexion);

function ingresar($nombre, $usuario, $contra, $conexion){

$query = "INSERT INTO usrs (idUsrsFp, nombreUsrsFp, usuarioUsrsFp, contraUsrsFp, estadoUsrsFp) VALUES ('', '$nombre', '$usuario', '$contra', 1);";


	$resultado = mysqli_query($conexion, $query);
	
//FUNCIONES
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