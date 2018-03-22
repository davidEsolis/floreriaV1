<?php

require('bd.php');

	$query = "SELECT * FROM imagenes WHERE estado_img = 1 ORDER by id_img_fp DESC;";
//$query = "SELECT * FROM imagenes WHERE precio_fp > 1 ORDER by id_img_fp DESC;";
	$resultado = mysqli_query($conexion, $query);

	if(!$resultado){
		die("error");
	}else{
		while($data=mysqli_fetch_assoc($resultado)){
		
			$arreglo["data"][] = $data;

		}
		echo json_encode($arreglo);
	}
	mysqli_free_result($resultado);
	mysqli_close($conexion);