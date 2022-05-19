<?php
session_start();

$_SESSION["usuario"]="Juanitoooo"; 

$_SESSION["estatus"]="logueado";

echo "Sesion Iniciada".":<br/>";

echo "USUARIO: ".$_SESSION["usuario"]." ESTADO: ".$_SESSION["estatus"];


?>