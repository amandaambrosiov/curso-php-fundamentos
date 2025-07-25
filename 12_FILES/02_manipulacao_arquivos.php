<?php

$content = 'Algo Aqui';
$file = 'test.txt';

// INSERIR CONTEÚDO NO ARQUIVO 
if (file_exists($file)) {
    // file_put_contents($file, $content);

    // LER CONTEÚDO DO ARQUIVO 
    var_dump(file_get_contents($file));
} else {
    echo 'Arquivo não existe!';
}