<?php

$name = 'Carlos Ferreira';

// VERIFICA SE ESTÁ VAZIO 
if (isset($name))
    echo $name;
else
    echo 'Não existe!';

// APAGA A VARIAVEL 
unset($name);

if (isset($name))
    echo $name;
else
    echo 'Não existe!';