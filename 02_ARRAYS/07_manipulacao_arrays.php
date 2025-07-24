<?php

// $nomes = array('Carlos', 'EspecializaTi', 'Company');
// $nomes = ['Carlos', 'EspecializaTi', 'Company'];
$name = 'Carlos';
$company = 'EspecializaTi';
$year = 2018;

$infoCompany = [
    $name,
    $company,
    $year
];

// CRIA UM ARRAY 
$infoCompany = compact('name', 'company', 'year');
var_dump($infoCompany);

echo "<hr>";

// VERIFICA SE É UM ARRAY 
var_dump(is_array($infoCompany));

echo "<hr>";

// VERIFICA SE CARLOS ESTÁ DENTRO DO ARRAY 
var_dump(in_array('Carlos', $infoCompany));