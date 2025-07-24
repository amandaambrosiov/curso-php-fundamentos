<?php

// $state = 'São Paulo/SP';
// $arrayState = explode('/', $state);
// var_dump($arrayState[1]);

// Dividindo uma string em um array 
$info = 'São Paulo/SP/Brasil/Terra';
$arrayInfo = explode('/', $info);
var_dump($arrayInfo[2]);

echo '<hr>';

// Juntando um array em uma string 
$arrayTest = [1,2,3,4,5];
echo implode(' - ', $arrayTest);
