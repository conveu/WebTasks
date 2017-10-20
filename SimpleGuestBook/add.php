<?php

require_once "config.php";
require_once "function.php";

echo "<pre>";
var_dump($_POST);
echo "</pre>";

if( !isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['message']) ){
	echo "NEVALID";
	exit;
}

storeMessage($config['db_file'], $_POST['name'],$_POST['email'],$_POST['message']);	

