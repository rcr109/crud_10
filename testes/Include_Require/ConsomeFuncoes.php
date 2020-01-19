<?php

// para incluir arquivos lccalizados em outros diretótios 
// deve-se usar o .. para subir diretórios e o nome do diretório + / para descer
//include_once "Funcoes.php";
//include_once "../Funcoes.php";

// O Require obriga que o arquivo  e funções existam e estejam em funcionamento, 
// o include tenta executar mesmo que essas condições não sejam satisfeitas, 
// além de permitir que se traga arquivos de outros sites
require_once "Funcoes.php";
require_once "../Funcoes.php";

echo  Soma(2,3);
Cumprimenta();




?>