<?php

include('php/ctrl_errorSesion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link href="https://file.myfontastic.com/g3LYwuYrqLK8Mz9Nf7FKeV/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Bigelow+Rules|Butterfly+Kids|Cabin+Sketch|Chicle|Cookie|Courgette|Dancing+Script|Dosis|Gloria+Hallelujah|Julius+Sans+One|Kaushan+Script|Lobster|Lobster+Two|Londrina+Sketch|Pacifico|Padauk|Poiret+One|Raleway|Roboto+Condensed|Satisfy|Sevillana|Spectral+SC|Spinnaker|Tangerine|Ubuntu+Mono|VT323" rel="stylesheet">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Document</title>
	<style>
	.moverForm{
	position: absolute;
	left: 40%;
	}
	.moverForm2{
	position: absolute;
	right: 100%;
	}
	</style>
</head>
<body>
<form class="moverForm" action="php/ctrl_sesion.php" method="POST">
	<div class="ventana_modal">
		<h1></h1>
		<div class="form_modal">
			<h1><span class="icon-users"></span> Inicio de Sesion</h1>
			<hr>
				<table>
				   <tr>
<td>					
<div class="input-group">
	  <span class="input-group-addon icon-user" id="basic-addon1"></span>
<input name="nomb_usup" type="text" class="form-control" maxlength="15"  placeholder="Nombre" aria-describedby="basic-addon1" required>
</div>
<br>
</td>
					<td></td>
				   </tr>
				   <tr>

<td>
<div class="input-group">
<span class="input-group-addon icon-lock" id="basic-addon1"></span>
<input name="pass_usup" type="text" class="form-control" maxlength="15" placeholder="Contraseña" aria-describedby="basic-addon1" required>
</div>
<br></td>
					<td></td>
				 </tr>
				 <tr>
					<td></td>
					<td>
<div class="btn-group btn-group-lg" role="group" aria-label="">
	<input class="btn btn-primary moverForm2" type="submit" value="Ingresar">
</div>
					
					</td>
				 </tr>
			</table>
		</div>
			
	</div>
</form>
</body>
</html>