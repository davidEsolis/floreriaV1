<?
$destino= "alphahs@outlook.com";
$nombre= $_POST["nombre"];
$correo= $_POST["correo"];
$telefono= $_POST["telefono"];
$mensaje= $_POST["mensaje"];
$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo ."\Telefono: " . $telefono . "\nMensaje: " . $mensaje;

mail($destino,"Contacto", $contenido);
header("Location:inicio.html");
?>