<?php
require 'environment.php';

$config = array();

if(ENVIRONMENT == 'development'){
	define("BASE_URL", "http://localhost/Estrutura_MVC/");
	$config['dbname'] = 'estrutura_mvc';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}else{
	define("BASE_URL", "http://www.meusite.com.br");
	$config['dbname'] = 'name da tabela';
	$config['host'] = 'host da hospedagem';
	$config['dbuser'] = 'user da hospedagem';
	$config['dbpass'] = 'password da hospedagem';
}

global $db;
try{
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
}catch(PDOException $e){
	echo "ERROR: ".$e->getMessage();
	exit;
}
?>