<?php

// Teste com operadores
echo "Testes com operadores ===> <br>";
$nome = "hCODE"; // atribuição
echo $nome." CÓDIGOS <br>"; //concatenação
$nome.= "<===>";
$nome.="CÓDIGOS <br>";
echo $nome;
echo "<br> Linha 10 =================== <br><br><br>";

// numéricos e atribuição alternativa ===> +,-,*,/,% (módulo),**(potenciação),>,<,>=,<=,==,===(valor e tipo),!=,!==(valor e tipo de dado)
echo "Testes com operadores numéricos ===> <br>";
$parte1 = 100;
$parte2 = 350;
echo "Parte1 = ".$parte1."<br>";
echo "Parte2 = ".$parte2."<br>";
$todo = $parte1;
echo "Todo em processamento = ".$todo."<br>";
$todo += $parte2;
echo "Todo processado = ".$todo."<br><br>";
//comparação
echo "Testes com operadores de comparação ====> <br>";
$a=20;
$b=20;
$a = (int) $a;
echo "a=10, b=20<br>";
echo "a**b = ".$a**$b;
echo "<br> Linha 29 =================== <br><br><br>";

//spaceship === novo do PHP7 ====> <=>
echo "Testes com SPACEShIP ===> <br>";
$a = NULL;
$b = 350;
$c = NULL;
var_dump($a <=> $b); // se A for maior retorna 1, se forem iguais retorna 0, se b for maior retorna -1
echo "<br>";
//??
echo $c ?? $a ?? $b; //mostra o primeiro que não for nulo
echo "<br><br>";
//incrementais e decrementais ++, --
// precedencia =====>  


?>