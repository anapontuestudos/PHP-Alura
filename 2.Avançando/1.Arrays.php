<?php

//Arrays númericos - o próprio php define os índices

$idade = [21, 12, 10,  33, 40, 27];
$umaIdade = $idade[1]. "\n";

echo $umaIdade;

//Arrays associativos - onde nos definimos os índices

$conta1 = [
    'titular' => 'Ana',
    'saldo' => 10000
];

$conta2 = [
    'titular' => 'Bianca',
    'saldo' => 50000
];

$conta3 = [
    'titular' => 'Bruna',
    'saldo' => 60000
];

$contas = [$conta1, $conta2, $conta3];

for($i = 0; $i < count($contas); $i++){
    echo $contas[$i]['titular'] . "\n";
}

?>