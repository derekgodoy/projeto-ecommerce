<?php
session_start();
include 'conexao.php';

$id=$_POST['id'];
$status= $_POST['status']; 


$stmt = $pdo->prepare ('UPDATE pedidos SET status = ? WHERE id = ?');

$stmt->bindParam(1,$status,PDO::PARAM_STR);
$stmt->bindParam(2,$id,PDO::PARAM_INT);


if($stmt->execute()){
	header('location: pedidosvend.php');}
?>