<?php
error_reporting(0);
include "conexao.php";
session_start();
if ($_SESSION['tipo']=="vendedor"){
?>



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
	?>

		<div class="row bg-light justify-content-center">
		<div class="bg-primary col-sm-4 col-5 rounded mr-2">
		<h3 class="col text-center text-light mt-3"><a href="cadastrovend.php" class="text-light">Cadastro do Vendedor</a></h3>
		</div>
		<div class="bg-primary col-sm-4 col-5 rounded ">
		<h3 class="col text-center text-light mt-3"><a href="cadastroprod.php" class="text-light"><u>Cadastro de Produtos</u></a></h3>
		</div>
		</div>
						<div class="row mt-3 justify-content-center">
						<div class=" jumbotron col-8">
							<form action="cadastrarprod.php" method="post">
						<div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="nome">Nome</label>
					      <input type="text" class="form-control" id="nome" name="nome" required>
					    </div>
					    <div class="form-group col-md-6">
					      <label for="marca">Marca</label>
					      <input type="text" class="form-control" id="marca" name="marca" required>
					    </div>
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="categoria">Categoria</label>
					      <select class="custom-select" id="categoria" name="categoria">
					      	<option value="d" selected disabled>Selecione uma categoria</option>
					      	<option value="Celulares">Celulares</option>
					      	<option value="Informática">Informática</option>
					      	<option value="TVs, Áudio e Home Theater">TVs, Áudio e Home Theater</option>
					      	<option value="Eletrodomésticos e Split">Eletrodomésticos e Split</option>
					      	<option value="Eletroportáteis">Eletroportáteis</option>
					      	<option value="Móveis e Decoração">Móveis e Decoração</option>
					      	<option value="Games, Livros e Filmes">Games, Livros e Filmes</option>
					      </select>
					    </div>
					    <div class="input-group form-group col-md-6">
					      <label for="preco">Preço</label>
							<div class="input-group mb-3">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon3">R$</span>
							  </div>
							  <input type="text" class="form-control" id="preco" name="preco">
							</div>
					    </div>
					    </div>
					    <div class="form-row">
					    <div class="input-group form-group mb-3">
					      <label for="img">Imagem</label>
							<div class="input-group mb-3">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon3">img/</span>
							  </div>
							  <input type="text" class="form-control" id="img" name="img" placeholder="produtoX.png">
							</div>
					  </div>
					  </div>
					  <div class="form-row">
					      <label for="descricao">Descrição</label>
							<div class="input-group mb-3">
							  <textarea class="form-control" id="descricao" name="descricao" placeholder="Digite a descrição do produto"></textarea>
							</div>
					  	
					  </div>
					  <button type="submit" class="btn btn-primary mt-3">Enviar</button>
					  <a href="vendedor.php" class="btn btn-primary mt-3 float-right">Voltar ao Menu</a>
					</form>
					</div>
					</div>
						  
<?php
include "footer.html";
?>

	</div>
	 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<?php

}
else{
	header("location: errousuario.php");
}
?>
