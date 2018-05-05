<?php
$db_name = 'projeto';
$hostname = 'localhost';
$username = 'root';
$password = '';
$opcoes = array(
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
);
//connect to the database
$pdo = new PDO("mysql:host=$hostname;dbname=$db_name", $username, $password, $opcoes);
?>