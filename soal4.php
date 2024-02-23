<?php

function getSecondMax($array) {
    rsort($array);
    return $array[1];
}

$array= [1,4,18,3,9];
echo getSecondMax($array) . PHP_EOL;

?>