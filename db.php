<?php
$servidor="localhost";
$baseDatos="hoja de vida";
$usuario="root";
$contrasena="";

try{
    $conexion=new PDO("mysql:host=$servidor;dbname=$baseDatos",$usuario,$contrasena);
    echo"conexion establecida";
}catch( Exception $error){
    echo "Error: ". $error->getMessage();  //muestra el error si hay algun problema
}

?>