<?php
include "conexao.php";
session_start();
unset($_SESSION['carrinho']);
$id = "";
$id_cliente = $_SESSION['id_cliente'];
$nome_cliente = $_SESSION['nome'];
$id_produtos=[]; 
$nome_produtos=[]; 
$preco ="";
$parcelas = $_POST['parcelas'];
$status="Em Processamento";
$data= getdate();

foreach ($_SESSION['carrinho'] as $produto) {
	array_push($id_produtos,$produto['id']);
	array_push($nome_produtos,$produto['nome']);
}
$id_produtos= implode(", ", $id_produtos);
$nome_produtos= implode(", ", $nome_produtos);
if ($parcelas<=10) {$preco=$_POST['item_total'];}
else{$preco=$_POST['item_juros'];}

$stmt = $pdo->prepare('INSERT INTO pedidos (id,id_cliente,nome_cliente,id_produtos,nome_produtos,preco,parcelas,status,data) VALUES (?,?, ?, ?, ?, ?, ?, ?, ?)');

$stmt->bindParam(1, $id, PDO::PARAM_INT);
$stmt->bindParam(2, $id_cliente, PDO::PARAM_INT);
$stmt->bindParam(3, $nome_cliente, PDO::PARAM_STR);
$stmt->bindParam(4, $id_produtos, PDO::PARAM_INT);
$stmt->bindParam(5, $nome_produtos, PDO::PARAM_STR);
$stmt->bindParam(6, $preco, PDO::PARAM_INT);
$stmt->bindParam(7, $parcelas, PDO::PARAM_INT);
$stmt->bindParam(8, $status, PDO::PARAM_STR);
$stmt->bindParam(9, $data, PDO::PARAM_STR);

if ($stmt->execute()){
	header("location:pedido.php");
}
?>