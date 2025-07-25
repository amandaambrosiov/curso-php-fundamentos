<?php

$photo = $_FILES['foto'];
$path = 'upload/imgs/';

if ( move_uploaded_file($photo['tmp_name'], $path . $photo['name']) ) 
    echo 'Sucesso!';
else
    echo 'Falha';