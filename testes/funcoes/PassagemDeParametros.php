<?php

//passagem de parametros em número indefinido mas do mesmo tipo
function soma(int ... $valores){
    return array_sum($valores);
}
var_dump(soma(3,6,5,3,3));

echo '<br><br><br>';

function somaString(int ... $valores):string{
    return array_sum($valores);
}
var_dump(somaString(2,5,6,7,5,3,3,4,5,6,7,8,9,9,0,9,77,6,6,55,5,4));

?>