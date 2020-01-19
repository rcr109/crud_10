<?php

echo "Testes diversos com manipulação de Strings ======================================<br>";

$nome = "Ricardo Castilho RESENDE";

$nomeUpper = strtoupper($nome);  //strtoupper

$nomeLower = strtolower($nome); //Strlolower

$nomeUcFirst = ucfirst($nome);  // UCfirst

$nomeUcWords = ucwords($nome); // UCwords

$nomeReplace = str_replace(" ","_",$nome);  //replace

echo "$nome <br> $nomeUpper <br> $nomeLower <br>
 $nomeUcFirst <br> $nomeUcWords <br> $nomeReplace <br>";

echo "=========== linha 20 =========================================================== <br><br><br>";


echo "Métodos para trabalhar com posicionamento de caracteres na string ======================================<br>";

$frase = "Frase teste para utilizar como exemplo na busca e determinação do posicionamento de caracteres.";
echo $frase;
echo "<br>";
$termo = "determina";
$q = strpos($frase, $termo);

echo "<===== Posição da expressão buscada".var_dump($q)."<br>";

$subfrase = substr($frase, 0, $q);

echo "Subfrase até a posição selecionada ===> ".$subfrase."<br>";

echo "Termo buscado e que deverá ser excluído da frase ao final do processamento ====> Determina <br>";

$subfrase2 = substr($frase,$q + strlen($termo),strlen($frase));

echo "Subfrase da posição selecionada até o fim da frase ===> ".$subfrase2."<br>"

?>