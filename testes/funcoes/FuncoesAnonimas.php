<?php

function teste($retorno){
    $retorno();
}

teste(function(){
    echo "Terminou";
});


echo '<br><br><br>';

$teste = function($texto){
    var_dump($texto);
};

$teste("Ricardo");

?>