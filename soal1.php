<?php

$tokens = [];
function generate($user)
{
    global $tokens;
    $token = bin2hex(random_bytes(5));
    if (isset($tokens[$user])) {
        if (count($tokens[$user]) == 10) {
            array_shift($tokens[$user]);
        }
        array_push($tokens[$user], $token);
    } else {
        $tokens[$user] = [$token];
    }

    return $token;
}

function verifyToken($user, $token)
{
    global $tokens;
    if (in_array($token, $tokens[$user])) {
        $index = array_search($token, $tokens[$user]);
        unset($tokens[$user][$index]);
        return true;
    }
    return false;
}

$user = 'agil';
#generate token
$token1 = generate($user);
echo "Token 1 = $token1" . PHP_EOL;
$token2 = generate($user);
echo "Token 2 = $token2" . PHP_EOL;
#verify token
echo verifyToken($user, $token1) ? 'true' : 'false' . PHP_EOL;

