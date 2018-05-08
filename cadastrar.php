<?php
include "conexao.php";
$id = '';
$nome = $_POST['nome'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$complemento = $_POST['complemento'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$tipo = $_POST['tipo'];

$stmt = $pdo->prepare('INSERT INTO usuarios (id,nome,email,login,senha,cpf,cep,endereco,complemento,estado,cidade,bairro,tipo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

$stmt->bindParam(1, $id, PDO::PARAM_INT);
$stmt->bindParam(2, $nome, PDO::PARAM_STR);
$stmt->bindParam(3, $email, PDO::PARAM_STR);
$stmt->bindParam(4, $login, PDO::PARAM_STR);
$stmt->bindParam(5, $senha, PDO::PARAM_STR);
$stmt->bindParam(6, $cpf, PDO::PARAM_INT);
$stmt->bindParam(7, $cep, PDO::PARAM_INT);
$stmt->bindParam(8, $endereco, PDO::PARAM_STR);
$stmt->bindParam(9, $complemento, PDO::PARAM_STR);
$stmt->bindParam(10, $estado, PDO::PARAM_STR);
$stmt->bindParam(11, $cidade, PDO::PARAM_STR);
$stmt->bindParam(12, $bairro, PDO::PARAM_STR);
$stmt->bindParam(13, $tipo, PDO::PARAM_STR);

if ($stmt->execute()){
	echo "asudhas";
}


?>