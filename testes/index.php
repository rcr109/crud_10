<?php

// comentário de linha simples
/*
comentário de multiplas linhas
*/

//declarando, populando, concatenando e imprimindo variável;
echo "============================ Declarando, populando, concatenando e imprimindo variável ============================ <br>";
$nome = "RCR";
echo "Página inicial do CRUD"." ".$nome."<br>";
echo "Dump ==> ";
var_dump($nome);
echo "<br> Linha 13 =================== <br><br><br><br>";

// apagando, repopulando, testando se está iniciada e imprimndo variável
echo "============================ Apagando, repopulando, testando se está iniciada e imprimndo variável ============================ <br>";
unset($nome);
$nome = "RCR 2";
if (isset($nome)){
    echo $nome;
}
echo "<br> Linha 21 =================== <br><br><br><br>";

// tipos de dados basicos (inteiro, float, string, boolean)
// compostos (array, object)
// especiais (resource, null)
// básicos
echo "============================ Tipos de variáveis ============================ <br>";
$ano = 2020;
$salario = 18900.20;
$bloqueado = false;
echo "Dumps ===> ";
var_dump($ano);
var_dump($salario);
var_dump($bloqueado);
echo "<br>";
// compostos
////array
$frutas = array("abacaxi", "maçã", "abacate", "uva", "pera", "melão", "amora");
echo "Dump frutas[] ===> ";
var_dump($frutas);
echo "<br>";
echo "fruta número 5: ".$frutas[4];
echo "<br>";
//// objetos
echo "Dump de um objeto tipo DateTime ==>";
$nascimento = new DateTime();
var_dump($nascimento);
// especiais
//// resource
echo "<br>";
echo "Dump de um tipo resource ==>";
$arquivo = fopen("index.php", "r");
var_dump($arquivo);

?>
