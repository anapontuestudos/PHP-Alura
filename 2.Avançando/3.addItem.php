<?php

//Para adicionar itens em uma array, a maneira mais simples é obervando qualíndice esta vazio e preenchendo com algo.

$nums1 = [10, 20, 30, 40, 50];

$nums1 [5] = 70;

foreach ($nums1 as $n){
    echo $n . "\n";
};

//Caso o seu array seja muito grande é possível adicionar ao array sem passar o índice e ele será adicionado ao final do array automaticamente

$cpf = [123456, 789101, 121314, 151617];

$cpf [] = 181920;

foreach ($cpf as $i){
    echo $i . "\n";
};

//Caso o seu índice seja uma string é necessário especificar o índice, se não o php vai add o valor no próximo índice disponível, que como não há índice númerico será add no 0


?>