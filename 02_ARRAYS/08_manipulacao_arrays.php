<?php

$infoCompany = [
    'name'          => 'EspecializaTi',
    'founder'       => 'Carlos Ferreira',
    'year_current'  => 2018,
];

$infoCompanyTwo = [
    'courses'       => ['PHP', 'JS', 'Vue JS', 'Laravel'],
    'total_courses' => 26,
];

// PEGA SÓ AS CHAVES 
var_dump(array_keys($infoCompany));

echo "<hr>";

// PEGA SÓ OS VALORES 
var_dump(array_values($infoCompany));

echo "<hr>";

// CONTA QUANTO ELEMENTOS TEM 
var_dump(count($infoCompany));
echo "<hr>";

// JUNTA OS DOIS ARRAYS 
$infoCompany = array_merge($infoCompany, $infoCompanyTwo);
echo '<pre>';
var_dump($infoCompany);