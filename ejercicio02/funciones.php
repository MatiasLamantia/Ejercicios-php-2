<?php
function cargar_archivo(){

    $archivo = fopen("datos.csv", "r");
    $linea = 1;
    $datos= [];
    while (($lineaEntera = fgets($archivo)) !== false){
        foreach($lineaEnter as $dato){
        $linea = str_getcsv($lineaEntera);
            $datos[$linea]["codigo_postal"] = $dato[1];
            $datos[$linea]["sexo"] = $dato[2];
            $datos[$linea]["curso"] = $dato[3];
            $datos[$linea]["rama"] = $dato[4];
            $datos[$linea]["asgs"] = $dato[1];
            $datos[$linea]["tiempolibre"] = $dato[5]; 
        }
        $linea++;
        }
    
        print_r($datos);
        fclose($archivo);
    }
 
    


cargar_archivo();
?>