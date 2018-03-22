<?php 


# aqui recupero datos de session start para saber que sesiones estan activas 
# en este momento y pueda rescatar sesion usuario
session_start();

if(isset( $_SESSION['usuario'])){
 
    header('location: ../controlimage.php');

} 

# si las sesion no esta definida = !isset ($_SESSION['usuario'])

 else if(!isset ($_SESSION['usuario'])){
    session_start(); #inicia sesion, cual exciste
    session_destroy(); #y luego destruye cualquier sesion para la sesion start
    header('location: entrar.php?error=4');
}

