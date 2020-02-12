<?php

$dt = new DateTime();
$periodo = new DateInterval("P15D"); //cria um período que poderá ser somado a uma data
$dt1 = new DateTime();
$dt1->add($periodo);//realiza a soma do período à data
echo 'Data inicial = '.$dt->format("d/m/Y h:i:s").'<br>';
echo 'Data final = '.$dt1->format("d/m/Y h:i:s").'<br>';


?>