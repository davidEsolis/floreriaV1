<?php 
//se incluye la base de datos
include('bd.php');

// se toman los valores de los registros de usuario
$user = $_POST['nomb_usup'];

$pass = $_POST['pass_usup'];


$sql_res = mysqli_query($conexion, "SELECT * FROM usrs WHERE usuarioUsrsFp='$user' AND contraUsrsFp='$pass' AND estadoUsrsFp = 1;");



//Se crea la consulta a la base de datos face para la toma de datos si estan correctos


if(isset($user) and isset($pass)){

if(empty($user) and empty($pass)){
    #echo 'los campos de usuario y contraseña se encuentran vacios';
    #si estan vacias aran algo
    header('location: ../entrar.php?error=1');
} else{

    if(mysqli_fetch_assoc($sql_res)){
            // hacen algo si los datos son correctos
            session_start(); // crea una nueva sesion y  ver que sesiones estan activas en ese momento
          /*  
            if ($_POST['sesion'] == 1){
                // TIEMPO QUE DURARA LA SESION
                //ini_set configura el archivo .ini de apache y configurar su estructura sobre este caso cookies
                ini_set(session.cookie_lifetime,time()+(60)); // para editar el tiempo de la duracion de la conexion
            } */
                
                   $_SESSION['usuario'] = $user;
                    //ini_set configura el archivo .ini de apache y configurar su estructura sobre este caso cookies
                     ini_set(session.cookie_lifetime,time()+(60)); // para editar el tiempo de la duracion de la conexion
                    header('location: inicio.php');
            } else{
                //aqui si los datos son incorectos
                      header('location: ../entrar.php?error=2');
            }
}
}else{
    //no estan definidas
     header('location: ../entrar.php?error=3');
}