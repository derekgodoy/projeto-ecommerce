<?php
// $db_name = 'derekluan';
// $hostname = 'mysql427.umbler.com';
// $username = 'derekluan';
// $password = 'derekluan123';

$db_name = 'projeto';
$hostname = ' 127.0.0.1 ';
$username = 'root';
$password = '';
$opcoes = array(
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
);
//connect to the database
$pdo = new PDO("mysql:host=$hostname;dbname=$db_name", $username, $password, $opcoes);
?>