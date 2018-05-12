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
/*
$_SESSION['id']=$alvos[0]['id'];
$_SESSION['nome1']=$alvos[0]['nome'];
$_SESSION['preco']=$alvos[0]['preco'];
$_SESSION['descricao']=$alvos[0]['descricao'];
$_SESSION['num'] = 1; 
*/
header("location:{$_SERVER['HTTP_REFERER']}");
}



?>