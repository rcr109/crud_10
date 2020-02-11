<?php

session_start();
$old_id = session_id();
session_regenerate_id();
echo 'Old session id => '.$old_id.'<br> New session id => '.session_id();

?>