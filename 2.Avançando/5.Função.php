<?php

/*
- Subrotina: executa o que ela precisa executar e não retorna valor nenhum;
- Função: executa e devolve valor.
*/


// Subrotina
function imprimirMensagem($mensagem) {
    echo $mensagem;
}

imprimirMensagem("Olá, mundo!". "\n");


//Função
function calcularQuadrado($numero) {
    return $numero * $numero. "\n";
}

$resultado = calcularQuadrado(4);
echo $resultado;


//Especificando dados de uma função
function adicionar(int $a, int $b): int { //o int nos parâmetros especifica o tipo e o ':' especifica o tipo do retorno
    return $a + $b . "\n";
}

echo adicionar(3, 4);

?>