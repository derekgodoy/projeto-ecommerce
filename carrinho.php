<?php
session_start();
$id = $_POST['id'];
include "conexao.php";
if (empty($_SESSION['carrinho'])) {
$_SESSION['carrinho'] =[];
}

$stmt = $pdo->prepare('SELECT * FROM produtos WHERE id=?');
$stmt->bindParam(1, $id, PDO::PARAM_INT);
$stmt->execute();
if ($alvos = $stmt->fetchAll()){
array_push($_SESSION['carrinho'],$alvos[0]);

header("location:{$_SERVER['HTTP_REFERER']}");
}



?>