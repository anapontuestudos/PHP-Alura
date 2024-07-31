<?php

/*
No php os arrays só são aceitos
*/

$array = [

    1 => 'a',
    '1' => 'b',
    true => 'c'
];

foreach ($array as $item) {

    echo $item. PHP_EOL;
};

?>