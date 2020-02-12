<?php

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8","portuguese"); // para poder usar a tradução abaixo

echo date('d/m/Y H:i:s');
echo '<br><br><br>';


echo time();
echo '<br><br><br>';


echo date('d/m/Y H:i:s',1581517560); // timestamp obtivo com o echo time() acima
echo '<br>It was an '.date('l',1581517560);
echo '<br><br><br>';


$tempo = strtotime("now + 1 day");
echo $tempo;
echo '<br>';
echo 'When I wrote that we were in the year of '.date('Y',1581517560).'.<br> It were '.date('H:i:s',1581517560).'<br>';
echo 'Lauro de Freitas, dia '.date('d',1581517560).' de '.strftime("%B").' de '.date('Y',1581517560);
echo '<br><br><br>';

echo 'Lauro de Freitas, dia '.date('d',time()).' de '.strftime("%B").' de '.date('Y',time());
// função strftime é usada para traduzir as datas
?>