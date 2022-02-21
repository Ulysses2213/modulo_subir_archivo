<?php

use function PHPSTORM_META\type;

    $archivo = $_FILES['archivo'];
    $nombre = $archivo['name'];
    $tipo = $archivo['type'];

    if($tipo == 'application/vnd.ms-excel' || $tipo == 'text/plain'){
        if(!is_dir('uploads')){
            mkdir('uploads', 0777); //Creación de carpeta con todos los permisos.
            
        }
    }else{
        echo '<script language="javascript">alert("Elija un archivo compatible");</script>';
        header("Refresh: 1; URL=..\index.php");
    }

?>