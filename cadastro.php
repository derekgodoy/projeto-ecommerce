<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
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
		<div class="bg-primary col-sm-4 col-5 rounded ">
		<h3 class="col text-center text-light mt-3">Cadastro do Usuário</h3>
		</div>
		</div>
						<div class="row mt-3 justify-content-center">
						<div class=" jumbotron col-8">
							<form action="cadastrar.php" method="post">
						<div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="nome">Nome</label>
					      <input type="text" class="form-control" id="nome" name="nome">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="email">Email</label>
					      <input type="email" class="form-control" id="email" name="email">
					    </div>
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="login">Login</label>
					      <input type="text" class="form-control" id="login" name="login">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="senha">Senha</label>
					      <input type="password" class="form-control" id="senha" name="senha">
					    </div>
					  </div>					  
					  <div class="form-row">
					  <div class="form-group col-md-6">
					    <label for="cpf">CPF</label>
					    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00">
					  </div>
					  <div class="form-group col-md-6">
					    <label for="cep">CEP</label>
					    <input type="text" class="form-control" id="cep" name="cep" placeholder="00000-000">
					  </div>
					  </div>
					  <div class="form-row">
					  <div class="form-group col-md-8">
					    <label for="endereco">Endereço</label>
					    <input type="text" class="form-control" id="endereco" name="endereco">
					  </div>
					  <div class="form-group col-md-4">
					    <label for="complemento">Complemento</label>
					    <input type="text" class="form-control" id="complemento" name="complemento">
					  </div>
					  </div>
					  <div class="form-row">
					  	<div class="form-group col-md-2">
					      <label for="estado">Estado</label>
					      <input type="text" class="form-control" id="estado" name="estado">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="cidade">Cidade</label>
					      <input type="text" class="form-control" id="cidade" name="cidade">
					    </div>
					    <div class="form-group col-md-4">
					      <label for="bairro">Bairro</label>
					      <input type="text" class="form-control" id="bairro" name="bairro">
					    </div>
					  </div>
					  <input type="hidden" name="tipo" id="tipo" value="usuario">
					  <button type="submit" class="btn btn-primary">Enviar</button>
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