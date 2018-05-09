<?php
session_start();
include "conexao.php";

$login = $_POST['login'];
$senha = $_POST['senha'];

$stmt = $pdo->prepare('SELECT * FROM usuarios WHERE login = ? AND senha = ?');
$stmt->bindParam(1, $login, PDO::PARAM_STR);
$stmt->bindParam(2, $senha, PDO::PARAM_STR);
$senha=base64_encode($senha);
$stmt->execute();
if ($alvos = $stmt->fetchAll()){
	$_SESSION['nome'] = $alvos[0]['nome'];
	header("location: {$_SERVER['HTTP_REFERER']}");
	exit;
}
else{
	header("location: senhaerrada.php");
	exit;
}
?>