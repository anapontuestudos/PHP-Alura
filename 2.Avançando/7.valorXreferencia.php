<?php

$nome = 'ana';
echo strtoupper($nome);

//Quando você atribui um valor de uma variável a outra, PHP copia o valor da variável original para a nova variável. Isso significa que modificar uma das variáveis não afeta a outra.

$a = 10;
$b = $a; // $b recebe o valor de $a, que é 10

$b = 20; // Modifica $b, mas $a permanece 10

echo $a; // Output: 10
echo $b; // Output: 20


//Quando você atribui uma variável a outra por referência, ambas as variáveis apontam para o mesmo valor na memória. Modificar uma variável afetará a outra.

$a = 10;
$b = &$a; // $b é uma referência para $a

$b = 20; // Modifica $b, e $a também é modificada

echo $a; // Output: 20
echo $b; // Output: 20

?>