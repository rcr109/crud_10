<?php
    $pessoas = array();
    array_push($pessoas,array('nome'=>'Ricardo', 'idade'=>41));
    array_push($pessoas,array('nome'=>'Ronaldo', 'idade'=>5));
    array_push($pessoas,array('nome'=>'Renata', 'idade'=>45));
    array_push($pessoas,array('nome'=>'João', 'idade'=>10));


    echo json_encode($pessoas);



?>