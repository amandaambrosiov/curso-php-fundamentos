<?php

$domain = 'https://www.especializati.com';

// echo str_replace('www.', 'https://www.', $domain);
// echo substr($domain, 0, 4);
// echo substr($domain, -7);

// EXTRAINDO PARTES DA STRING 
$protocol = substr($domain, 0, 8);
if ($protocol == 'https://')
    echo 'É seguro!';
else 
    echo 'Não é seguro!';

// var_dump(substr($domain, 12, -7));

// VER QUANTIDADE DE CARACTERES 
echo strlen($domain);