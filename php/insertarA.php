<?php

include("bd.php");
/*

*/
$nombre = $_POST["nombre_u"];
$precio = $_POST["precio_u"];
$depa = $_POST["departamentE"];
$informacion = [];

if($nombre == '' && $precio == '' && $depa  == ''){
	 $informacion["respuesta"] = "ERROR";
	 echo json_encode($informacion);

}else{
		
	 ingresar($nombre, $precio, $depa, $conexion);
}

	//ingresar($nombre, $usuario, $contra, $conexion);

function ingresar($nombre, $precio, $depa, $conexion){

$query = "INSERT INTO usrs (id_img_fp, nom_img_fp, precio_fp, dep_img_fp) VALUES ('', '$nombre', '$usuario', '$depa');";


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