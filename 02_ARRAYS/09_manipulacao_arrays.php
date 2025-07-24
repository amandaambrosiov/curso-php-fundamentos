<?php

$cart = ['Arroz', 'Sabão', 'Feijão', 'Balinhas'];
var_dump($cart);

echo '<hr>';

// REMOVE O ULTIMO ITEM 
array_pop($cart);
var_dump($cart);

echo '<hr>';

// REMOVE O PRIMEIRO ITEM 
array_shift($cart);
var_dump($cart);

echo '<hr>';

// REMOVE ITEM PELA CHAVE 
unset($cart[0]);
var_dump($cart);

echo '<hr>';

// ADICIONA ITENS NO FINAL 
array_push($cart, 'Tapete');
array_push($cart, 'Rodo');
var_dump($cart);

echo '<hr>';

// ADICIONA ITENS NO INICIO 
array_unshift($cart, 'Microondas');
array_unshift($cart, 'Tapete');
var_dump($cart);

echo '<hr>';

// REMOVE DUPLICATAS 
$cart = array_unique($cart);
var_dump($cart);