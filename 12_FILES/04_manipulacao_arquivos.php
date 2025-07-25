<?php

// abre o arquivo
$file = fopen('projetoX.log', 'a+');

//  executa o loop enquanto não for o fim do arquivo (feof = file end of file
while (!feof($file)) {
    // Lê uma linha do arquivo com no máximo 4096 bytes. 
    echo fgets($file, 4096) . '<br>';
}
// fecha o arquivo 
fclose($file);

// 'a' significa append (anexar): abre para escrita no final do arquivo.
// '+' também permite leitura.