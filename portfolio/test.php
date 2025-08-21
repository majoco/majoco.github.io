<?php
$texto = "uno dos tres cuatro";
$palabras = explode(" ", $texto);
foreach($palabras as $palabra){
    echo "palabra: ".$palabra;
}
print_r($palabras);
?>