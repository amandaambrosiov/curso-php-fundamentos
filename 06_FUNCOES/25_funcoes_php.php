<?php

$name = 'EspecializaTi - Cursos Online de TI';

// CONVERTE PARA MAIUSCULO 
echo strtoupper($name);
echo '<hr>';

// CONVERTE PARA MINUSCULO 
echo strtolower($name);
echo '<hr>';

// CONVERTE PARA MINUSCULA E DEPOIS INSERE A PRIMEIRA LETRA COMO MAIUSCULA DA STRING INTEIRA
echo ucfirst(strtolower($name));
echo '<hr>';

// CONVERTE PARA MINUSCULA E DEPOIS INSERE A PRIMEIRA LETRA COMO MAIUSCULA DE CADA PALAVRA
echo ucwords(strtolower($name));