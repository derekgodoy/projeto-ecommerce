<?php
include "conexao.php";
$id = '';
$nome = $_POST['nome'];
$marca = $_POST['marca'];
$descricao = $_POST['descricao'];
$categoria = $_POST['categoria'];
$preco = $_POST['preco'];
$imagem = $_POST['img'];

$stmt = $pdo->prepare('INSERT INTO produtos (id,nome,marca,descricao,categoria,preco,imagem) VALUES (?, ?, ?, ?, ?, ?, ?)');

$stmt->bindParam(1, $id, PDO::PARAM_INT);
$stmt->bindParam(2, $nome, PDO::PARAM_STR);
$stmt->bindParam(3, $marca, PDO::PARAM_STR);
$stmt->bindParam(4, $descricao, PDO::PARAM_STR);
$stmt->bindParam(5, $categoria, PDO::PARAM_STR);
$stmt->bindParam(6, $preco, PDO::PARAM_INT);
$stmt->bindParam(7, $imagem, PDO::PARAM_STR);

if ($stmt->execute()){
	header("location:cadsucesso.php");
}
?>
