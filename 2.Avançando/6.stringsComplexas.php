<?php

/* Para trabalhar com strings sem a utilização de concatenação com o '.' é necessário utilizar a "" e as {} para isolar as variáveis */

//Array
$user = ["name" => "John", "age" => 25];
echo "Name: {$user['name']}, Age: {$user['age']}";

//Objetos
class User {
    public $name = "John";
    public $age = 25;
}
$user = new User();
echo "Name: {$user->name}, Age: {$user->age}";



//É possível pegar o código de outro arquivo e colocar nesse código

include '4.tiposChaves.php'; //A função include inclui e avalia o arquivo especificado. Se o arquivo não for encontrado, um aviso (warning) será emitido, mas o script continuará a execução.

require '4.tiposChaves.php'; //A função require também inclui e avalia o arquivo especificado. No entanto, se o arquivo não for encontrado, um erro fatal será emitido, interrompendo a execução do script.

require_once '4.tiposChaves.php'; //Além de include e require, existem as versões _once dessas funções. Elas garantem que o arquivo seja incluído apenas uma vez, evitando problemas de redefinição de funções, classes ou variáveis.

?>