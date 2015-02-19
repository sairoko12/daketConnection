<?php

ini_set('error_reporting', E_ALL | E_NOTICE | E_STRICT);
ini_set('display_errors', '1');
ini_set('track_errors', 'On');

require 'loader.php';

//Iniciamos archivos
$loader = new AdminDB();
$loader->run();
//-------------------

try {
    echo '<pre>' . print_r(Fetch::row(Connections::get()->quickQuery('proveedores', array(), array('COUNT(*) AS total_proveedores'))),1) .'</pre>';
} catch (Exception $e) {
    echo $e->getMessage();
}