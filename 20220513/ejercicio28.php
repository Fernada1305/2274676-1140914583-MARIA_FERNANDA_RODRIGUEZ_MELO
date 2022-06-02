<?php
$servidor="localhost";
$usuario="root";
$contrasena="";

try{

    $conexion=new PDO("mysql:host=$servidor;dbname=album_1140914583", $usuario,$contrasena);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Conexion establecida";

$sql= "INSERT INTO `fotos` (`Id`, `nombre`, `ruta`) VALUES (NULL, 'JUGANDO CON LA PROGRAMACION', 'foto.png');";
$conexion->exec($sql);

}catch(PDOException $error){
    echo "Conexión erronea".$error;

}

?>