<?php

$photos = $_FILES['photos'];
$path = 'upload/imgs/';


// VERIFICAR SE EXISTE A PASTA SE NÃO CRIA A PASTA
if (!is_dir($path)) {
    mkdir('upload');
    mkdir($path);
}

for ($i = 0; $i < count($photos['name']); $i++) {
    $j = $i + 1;
    if ( move_uploaded_file($photos['tmp_name'][$i], $path . $photos['name'][$i]) )
        echo "Sucesso ao mover o arquivo {$j} <br>";
    else
        echo "Falha ao mover o arquivo {$j} <br>";
}