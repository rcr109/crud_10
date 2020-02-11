<?php

//mostra o valor da variável
session_start();
echo 'Session user => '.$_SESSION['nome'];
echo '<br>';
echo 'Session id => '.session_id();
echo '<br>';
echo 'Session status => '.session_status();
echo '<br>';
echo 'Session name => '.session_name();
echo '<br>';
echo 'Session save path => '.session_save_path();
echo '<br>';
?>