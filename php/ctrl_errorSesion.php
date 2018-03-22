<?php

 session_start();

//MANDAMOS A CREAR LOS PROCESOS QUE CUMPLEN AL TENER ERRORES EN EL REGISTRO
if(isset($_GET['error'])){
    if($_GET['error'] == 1){
        echo '<h1>LLENA LOS CAMPOS</h1>';
    }
    else if ($_GET['error'] == 2){
	
	echo 'CAMPOS ERRONEOS';

    }
    else if ($_GET['error'] == 3) {
        echo '<h1>INICIA SESION CORRECTAMENTE</h1>';
    }
    else if ($_GET['error'] == 4){
        echo '<h1>INICIA SESION CORRECTAMENTE</h1>';
    }
    
    unset($_GET['error']);
}



// si sigue la conexion activa 
if (isset ($_SESSION['usuario'])){
    session_start(); #inicia sesion, cual existe
    $_SESSION['usuario'] = $usuario;
    header('location: entrar.php');
}


