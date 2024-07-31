<?php

// inicia um servidor para testes: php -S localhost:8080
$var = "Olá html";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Código html junto do php</title>
</head>
<body>

<h1> <?= $var ?> </h1>

</body>
</html>