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



function RetornaArgumentos(){
    $argumentos = func_get_args(); // função que pega os argumentos passados de maneira dinâmica, bom para sobrecarga!
    return $argumentos;
}

var_dump(RetornaArgumentos("Bom dia",10));

?>