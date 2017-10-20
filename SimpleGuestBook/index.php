<?php
require_once 'config.php';
require_once 'function.php';

if(!checkDatabase($config['db_file'])){
	echo "Adding in base not posible";
	exit;
}


$messages=getMessage($config['db_file']);

include 'index_view.php';