<?php
include "conexao.php";
session_start();

$id = "";
$id_cliente = $_SESSION['id_cliente'];
$id_produtos=[]; 
$preco ="";
$parcelas = $_POST['parcelas'];
$status="Em Processamento";
$data=date("Y/m/d");

foreach ($_SESSION['carrinho'] as $produto) {array_push($id_produtos,$produto['id']);}
$id_produtos= implode(" ", $id_produtos);
if ($parcelas<=10) {$preco=$_POST['item_total'];}
else{$preco=$_POST['item_juros'];}

$stmt = $pdo->prepare('INSERT INTO pedidos (id,id_cliente,id_produtos,preco,parcelas,status,data) VALUES (?, ?, ?, ?, ?, ?, ?)');

$stmt->bindParam(1, $id, PDO::PARAM_INT);
$stmt->bindParam(2, $id_cliente, PDO::PARAM_INT);
$stmt->bindParam(3, $id_produtos, PDO::PARAM_STR);
$stmt->bindParam(4, $preco, PDO::PARAM_INT);
$stmt->bindParam(5, $parcelas, PDO::PARAM_INT);
$stmt->bindParam(6, $status, PDO::PARAM_STR);
$stmt->bindParam(7, $data, PDO::PARAM_STR);

if ($stmt->execute()){
	header("location:pedido.php");
}
?>