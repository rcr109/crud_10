<?php

$frutas = array("Maçã", "Uva", "Pera", "Abacate","Laranja","Figo");
var_dump($frutas);
echo "<br>";
print_r($frutas);
echo "<br><br><hr>";

// ARRAYS MULTIDIMENSIONAIS
$carros [0][0] = "Ford";
$carros [0][1] = "Fiesta";
$carros [0][2] = "Fusion";
$carros [0][3] = "EcoEsports";

$carros [1][0] = "VW";
$carros [1][1] = "Gol";
$carros [1][2] = "Jetta";
$carros [1][3] = "Saveiro";

$carros [2][0] = "Renault";
$carros [2][1] = "Sandero";
$carros [2][2] = "Oroch";
$carros [2][3] = "Renault01";

print_r($carros);

echo "<br>";
echo end($carros[1]);
echo "<br><hr>";

// INCLUINDO ITENS NA ARRAY

$pessoas = array();

array_push($pessoas,array('nome'=>'Ricardo', 'idade'=>41));
array_push($pessoas,array('nome'=>'Ronaldo', 'idade'=>5));
array_push($pessoas,array('nome'=>'Renata', 'idade'=>45));
array_push($pessoas,array('nome'=>'João', 'idade'=>10));

//var_dump($pessoas);

print_r($pessoas);
echo '<br>';

print_r($pessoas[2]['idade']);
echo '<br><br>';

echo '<hr>';
echo 'Exemplo de foreach com array ====================================================================<br>';
$contador = 0;
foreach($pessoas as $value){
    echo 'A idade do usuário '.$pessoas[$contador]['nome'].' é: '.$pessoas[$contador]['idade'].'.<br>';
    $contador++;
}


?>