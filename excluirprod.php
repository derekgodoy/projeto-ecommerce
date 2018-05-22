<?php 
include "conexao.php";
$id=$_POST['id'];
$stmt = $pdo->prepare("DELETE FROM produtos WHERE id = ?");
$stmt->bindParam(1, $id, PDO::PARAM_INT);
if ($stmt->execute()){

	header("location: excluirsucesso.php");
	exit;
}

?>