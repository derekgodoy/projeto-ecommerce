<?php
include "conexao.php";
session_start();

if (isset($_GET['acao'])){
	if ($_GET['acao']=="esvaziar") {
		unset($_SESSION['carrinho']);
		header("location:{$_SERVER['HTTP_REFERER']}");
	}
	if ($_GET['acao']=="finalizar"){
		header("location:finalizar.php");
	}

}




?>