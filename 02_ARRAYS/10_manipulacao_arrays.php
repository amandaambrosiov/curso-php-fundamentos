<?php

$cart = [
    0 => 'Macarrão',
    1 => 'Feijão',
    2 => 'Arroz',
    3 => 'Batata'
];

// ORDEM DECRESCENTE MANTENDO AS CHAVES 
echo '<pre>';
arsort($cart);
var_dump($cart);

echo '<hr>';

// ORDEM CRESCENTES MANTENDO AS CHAVES 
asort($cart);
var_dump($cart);

echo '<hr>';

// ORDEM CRESCENTES REINDEXANDO 
sort($cart);
var_dump($cart);

echo '<hr>';