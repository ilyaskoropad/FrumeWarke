<?php
$config = Dbconnect::instance();
$config->set(array(
    'host' => 'mysql.hostinger.ru',
    'user' => 'u509371028_admin',
    'pass' => 'q1w2e3r4',
    'name' => 'u509371028_bd1'
));
$config->connect();

unset($config);