<?php

function getMaxChar($string) {
    $array = [];
    $maxCount = 1;
    $maxChar = '';
    for ($i=0; $i < strlen($string); $i++) { 
        $char = $string[$i];
        if (!isset($array[$char])) {
            $array[$char] = 1;
        } else {
            $array[$char] ++;
        }
    }

    foreach ($array as $key => $value) {
        if ($value >= $maxCount) {
            $maxChar = $key;
            $maxCount = $value;
        }
    }

    $result = "$maxChar $maxCount" . "x";

    return $result;
    
}

echo getMaxChar('wellcome') . PHP_EOL;
echo getMaxChar('strawberry') . PHP_EOL;
?>