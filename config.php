<?php







require 'environment.php';



$config = array();







if(ENVIRONMENT == 'production'){
	define("BASE_URL", "localhost/");
	$config['dbname'] = 'dbname';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'userdb';
	$config['dbpass'] = 'passdb';
}else{

	define("BASE_URL", "localhost/");
	$config['dbname'] = 'dbname';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'userdb';
	$config['dbpass'] = 'passdb';

}



global $db;

try{

	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);



}catch(PDOException $e){



	echo "ERRO: ".$e->getMessage();



	exit;



}