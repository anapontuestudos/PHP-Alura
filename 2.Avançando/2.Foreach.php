<?php

$contaCorrente = [
    123 => [
        'titular' => 'Ana'
    ],
    321 => [
        'titular' => 'Bianca'
    ],
    456 => [
        'titular' => 'Bruna'
    ]
];

foreach($contaCorrente as $cpf => $conta){
    echo $conta['titular'] . "\n";
};

?>