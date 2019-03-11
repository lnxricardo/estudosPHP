<?php 
$dsn = "mysql:dbname=blog;host:localhost";
$dbuser = "ricardo";
$dbpass = "123";



try{

	$pdo = new PDO($dsn, $dbuser, $dbpass);

}catch(PDOExeption $e){

	echo "Falha de conexão :".$e->getMessage();

}


 ?>
