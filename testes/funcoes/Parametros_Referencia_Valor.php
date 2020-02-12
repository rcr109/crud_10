<?php

$valor = 1045;
$nome = 'Ricardo';
$numSalarios = 13.5;
$valor_tot = 25000;
$valor_total1 = 25000;

// função que passa o argumento por valor
function salario($nome,$numSalarios,$valor,$valor_tot,$ativa){
    if ($ativa == 1){
        $valor_tot = $numSalarios * $valor;
        echo "O funcionário $nome recebe $numSalarios salários. R$$valor_tot é um bom dinheiro! <br>";
    }
}

// função que passa o argumento por referência
// notar que a variável externa não precisa ter o mesmo nome do argumento
function salarioref($nome, $numSalarios, $valor, &$valor_tot1,$ativa){
    if ($ativa == 1){
        $valor_tot1 = $numSalarios * $valor;
        echo "O funcionário $nome recebe $numSalarios salários. R$$valor_tot1 é um bom dinheiro! <br>";
    }
}


echo "Valor total original, passagem por valor = $valor_tot <br>";
salario($nome,$numSalarios,$valor,$valor_tot,1);
echo "Valor total pós execução = $valor_tot";
echo '<br><br><br>';

echo "Valor total original, passagem por referência = $valor_total1 <br>";
salarioref($nome, $numSalarios, $valor, $valor_total1,1);
echo "Valor total pós execução = $valor_total1";
echo '<br>';
echo '<br><br><br>';



//========================foreach

$pessoas = array();
array_push($pessoas,array('nome'=>'Ricardo', 'idade'=>41));
array_push($pessoas,array('nome'=>'Ronaldo', 'idade'=>5));
array_push($pessoas,array('nome'=>'Renata', 'idade'=>45));
array_push($pessoas,array('nome'=>'João', 'idade'=>10));
//var_dump($pessoas);

foreach($pessoas as $key => $value){
    if ($key == 'nome'){
        $idade = $value;
        print_r($idade);
    }
}
echo '<br><br><br>';
var_dump($pessoas);






?>