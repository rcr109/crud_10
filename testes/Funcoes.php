<?php

$nome = "Ricardo";

function StatusFuncao(){
    global $nome;  // indicando que quer usar o valor da variável global criada no início do código
    echo "Função rodando. ".$nome."<br>";
}

function Cumprimenta(){
    $nome = "Castilho";
    echo "<br>Olá. ".$nome."<br>";
}

?>