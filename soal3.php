<?php

static $count = 0;
function traffictLight()
{
    global $count;
    $array = ['merah', 'kuning', 'hijau'];
    $index = ($count % 3 )% 4;
    $count++;
    if ($index == 0) {
        echo $array[0] . PHP_EOL;
    } else {
        echo $array[$index] . PHP_EOL;
    }
}
function loopTraffic()
{
    for ($i = 0; $i < 10; $i++) {
        traffictLight();
    }
}

loopTraffic();