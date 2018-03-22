<?php session_start();

# si las sesion no esta definida = !isset ($_SESSION['usuario'])
if(!isset ($_SESSION['usuario'])){
    session_start(); #inicia sesion, cual existe
    session_destroy(); #y luego destruye cualquier sesion para la sesion start
    header('location: ../entrar.php?error=4');
}else{
    //No tiene acción
}
$_SESSION['usuario'];

//CONVERSION DE CHARSET PARA CARACTERES ESPECIALES
function mostrar($str){
    $codificacion = mb_detect_encoding($str, "UTF-8, ISO-8859-1"); // SI ES DE UNO DE ESTOS DOS TIPOS 
    $str = iconv($codificacion, 'UTF-8', $str); //cONVIERTO EL TIPO DE CHARSET A UTF-8
    echo $str;
}
