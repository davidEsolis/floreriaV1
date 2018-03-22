<?php

include("../php/bd.php");

$user = $_SESSION['usuario'];

	 //si la bd esta conectada se procede a pedir los usuarios
	//$sql = "SELECT * FROM lectores WHERE estado_elect = 1;";
	$sql = "SELECT * FROM imagenes WHERE dep_img_fp = 'CentrosDeMesa' AND  estado_img = 1;";
	$resultado = mysqli_query($conexion, $sql);
	
	
	 if($resultado){
		while($data = mysqli_fetch_array($resultado)){
			$jsonArray[] = $data;
		}
	
		echo json_encode($jsonArray);
	 }else{
		 echo "error";
	 }
		$conexion = null;
