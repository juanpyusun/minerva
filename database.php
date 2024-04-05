<?php
    //variables de conexion
    $db_dir      = 'localhost'; 
    $db_user     = 'root';
    $db_password = '';
    $db_name     = 'db_minerva';
    
    mysqli_report(MYSQLI_REPORT_OFF); //apaga los errores del interprete
    
    //creando la conexion, se utiliza un try catch para capturar errores, es decir, si hay un error en la conexion no se detiene la ejecucion del programa
    try{
        $conn = @new mysqli($db_dir, $db_user, $db_password, $db_name); //el @ apaga las advertencias
    }catch(Exception $error){
        die('Hubo un error en la conexion: ' . $error);
    }
?>
