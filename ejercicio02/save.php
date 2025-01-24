<?php
$errores = [];
if(empty($_POST['codigo_postal']) || !preg_match("/^\d{5}$/" , $_POST['codigo_postal'])){
    $errores[] = "El codigo postal no es valido";
}

if(empty($_POST['sexo']) ||!preg_match("/^[MFON]$/" , $_POST['sexo'])){
    $errores[] = "El sexo no es valido";
}

if(empty($_POST['curso']) || !preg_match("/^1ESO|2ESO|3ESO$/" , $_POST['curso'])){
    $errores[] = "El curso no es valido";
}
$rama = $_POST['rama'];
$rama = trim($rama);
if(!preg_match("/^BCH|FP$/" , $_POST['rama'])){
    $errores[] = "La rama es requerida";
}

if(empty($_POST['asgs']) || count($_POST['asgs']) <= 7){

    foreach ($_POST['asgs'] as $asg){
        if($_POST['curso'] == "2ESO"){
            if(!preg_match("/^LCL|M|GH|FQ|I$/" , $asg)){
                $errores[] = "El asg no es valido";
            }
        }
        if(!preg_match("/^LCL|M|BG|GH|FQ|I$/" , $asg)){
            $errores[] = "El asg no es valido";
        }
    }
}

if(empty($_POST['tiempolibre']) || count($_POST['tiempolibre']) <= 7){
    foreach ($_POST["tiempolibre"] as $tiempol) {
        if(!preg_match("/^deportes|musica|danza|art|vjuegos|television|dom|lectura$/" , $tiempol)){
            $errores[] = "El tiempo libre no es valido";
        }
    }
}
?>
<h1>Errores : </h1>
<?php
foreach ($errores as $error) {
    echo "<li>".$error."</li>";
};


$archivo_csv = fopen ('datos.csv', 'a'); //abrimos el archivo en modo "añadir al final"
echo($rama);
$datos=[$_POST["codigo_postal"],$_POST["sexo"],$_POST["curso"],$rama,implode("-",$_POST["asgs"]),implode("-",$_POST["tiempolibre"])]; // Preparamos los datos a almacenar


fputcsv ($archivo_csv, $datos); //Guardamos los datos al final
fclose($archivo_csv); //Cerramos el archivo


?>
