<?php

$array = ["Apple", "Banana", "Cherry"];

// Usando a função list para extrair valores do array e transferir para variáveis
list($fruit1, $fruit2, $fruit3) = $array;

echo $fruit1; 
echo $fruit2; 
echo $fruit3; 

//A função unset em PHP é utilizada para destruir variáveis, elementos de arrays ou propriedades de objetos. Ela remove uma variável de modo que ela não esteja mais definida no escopo atual.

$array = ["Apple", "Banana", "Cherry"];
print_r($array); 
// Saída: Array ( [0] => Apple [1] => Banana [2] => Cherry )

unset($array[1]);
print_r($array); 
// Saída: Array ( [0] => Apple [2] => Cherry )

?>
