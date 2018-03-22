<?php

include('bd.php'); //incluyo bd.php
session_start(); //cacho la sesion
session_destroy();// y procedo a destruirla
$conexion->close(); //Cierro la conexion con la bd
header('location: ../index.php'); // y redirijo a index
