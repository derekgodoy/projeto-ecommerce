<?php
$db_name = 'derekluan';
$hostname = 'mysql427.umbler.com:41890';
$username = 'derekluan';
$password = 'derekluan123';
$opcoes = array(
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
);
//connect to the database
$pdo = new PDO("mysql:host=$hostname;dbname=$db_name", $username, $password, $opcoes);
?>