<?php

$json = '[{"nome":"Ricardo","idade":41},{"nome":"Ronaldo","idade":5},{"nome":"Renata","idade":45},{"nome":"Jo\u00e3o","idade":10}]';

$data = json_decode($json,true);

var_dump($data);

?>