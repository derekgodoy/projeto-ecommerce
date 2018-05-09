<?php header("refresh:5; url=cadastro.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Loja Daora - Cadastro</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="icon" type="image/png" href="img/logo.png">	
	<link rel="stylesheet" type="text/css" href="style/bootstrap.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.11/css/all.css" integrity="sha384-p2jx59pefphTFIpeqCcISO9MdVfIm4pNnsL08A6v5vaQc4owkQqxMV8kg4Yvhaw/" crossorigin="anonymous">
	<style type="text/css">
		.img{
			max-width: 350px;
			height: auto;
		}
        .img2{
            max-width: 300px;
        }
	</style>
</head>
<body class="bg-light">
	<div class="container-fluid">
  	<?php
	include "header.php";
	include "conexao.php";

	if(isset($_GET['email'])) {
	$link = 1;
	}
	if(isset($_GET['login'])) {
	$link = 2;
	}
	if(isset($_GET['cpf'])) {
	$link = 3;
	}
	else {
		
	}

	?>
	<div class="row justify-content-center">
	<div class="jumbotron text-center col-8">
		<?php if ($link == 1){?>
			<h3>Ops, o email digitado <span class="text-danger font-italic"><?php echo $_GET["email"]?></span> já está em uso.</h3>
			<h4 class="mt-4"><a class="text-dark" href="cadastro.php">Voltar</a></h4>
		<?php } ?> 
		<?php if ($link == 3){?>
			<h3>Ops, o login digitado (<span class="text-danger"><?php echo $_GET["login"]?></span> já está em uso.</h3>
			<h4 class="mt-4"><a class="text-dark" href="cadastro.php">Voltar</a></h4>
		<?php } ?> 
		<?php if ($link == 3){?>
			<h3>Ops, o CPF digitado (<span class="text-danger"><?php echo $_GET["CPF"]?></span> já está em uso.</h3>
			<h4 class="mt-4"><a class="text-dark" href="cadastro.php">Voltar</a></h4>
		<?php } ?> 



		</div>
		</div>



	<?php 
	include "footer.html";
	?>