<?php

$peso = 60;
$altura = 1.70;

$imc = $peso / $altura ** 2;

if ($imc < 16){
    echo "Abaixo";
} elseif ($imc < 25){
    echo "Normal";
} else {
    echo "Acima";
}


?>