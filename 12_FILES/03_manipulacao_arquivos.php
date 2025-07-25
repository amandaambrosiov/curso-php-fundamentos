<?php
$text = 'Hoje é um lindo dia';
generateLog($text);

function generateLog($text)
{
// ABRIR ARQUIVO 
    $file = fopen('projetoX.log', 'a+');
    // ESCREVER NO ARQUIVO 
    fwrite($file, "$text \r\n");
    // fechar 
    fclose($file);
}

// php.net/fopen - site com a documentação 