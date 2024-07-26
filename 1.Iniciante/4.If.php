<?php

$idade = 18;
$pessoas = 2;

if ($idade >= 18){
    echo "Você é maior de idade";
} else if($idade = 16 && $pessoas > 1) {
    echo "Você pode entrar, você está acompanhado";
} else {
    echo "Você é menor de idade e está sozinho. Não pode entrar.";
}

?>