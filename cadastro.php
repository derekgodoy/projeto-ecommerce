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
  	<div class="row bg-primary">
    	<div class="col-md-4">
	    	<figure class="figure col text-center">
	    		<img class="img-fluid" src="img/logo.png" style="width: 50%; height: auto">
	    	</figure>
    	</div>
  		<div class="col-md-4 pt-2 pb-2" style="margin-top: 6%; width: 100%">
	      	<form class="form-inline text-center" >
	        <input class="form-control font-italic" type="search" placeholder="Busca..." aria-label="Search" style="width: 100%">
      		</form>
  		</div>
		</div>

	<div>
		<nav class="navbar row navbar-expand-md navbar-light bg-light border font-weight-bold">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.php"><i class="fas fa-home text-primary"></i> Página Inicial</a>
				</li>
				<li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-gift text-primary"></i> Produtos</a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			          <a class="dropdown-item" href="#">Celulares <i class="fas fa-mobile-alt"></i></a>
			          <a class="dropdown-item" href="#">Informática <i class="fas fa-keyboard"></i></i></a>
			          <a class="dropdown-item" href="#">TVs, Áudio e Home Theaters <i class="fas fa-desktop"></i></a>
			          <a class="dropdown-item" href="#">Eletrodomésticos e Split <i class="far fa-snowflake"></i></a>
			          <a class="dropdown-item" href="#">Eletroportáteis <i class="fas fa-camera"></i></a>
			          <a class="dropdown-item" href="#">Móveis e Decoração <i class="fas fa-bed"></i></a>
			          <a class="dropdown-item" href="#">Games, Livros e Filmes <i class="fas fa-gamepad"></i></a>
			        </div>
			    </li>
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="fas fa-thumbs-up text-primary"></i> Ofertas do Dia</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-primary" href="#"><i class="fas fa-certificate text-warning"></i> Seja Prime</a>
				</li>
			</ul>
		</div>
		</nav>
	</div>
		<div class="row bg-light justify-content-center">
		<div class="bg-primary col-sm-4 col-5 rounded ">
		<h3 class="col text-center mt-3">Cadastro do Usuário</h3>
		</div>
		</div>
						<div class="row mt-3 justify-content-center">
						<div class=" jumbotron col-8">
							<form>
						<div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="nome">Nome</label>
					      <input type="text" class="form-control" id="nome" placeholder="Nome">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="email">Email</label>
					      <input type="email" class="form-control" id="email" placeholder="Email">
					    </div>
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="login">Login</label>
					      <input type="text" class="form-control" id="login" placeholder="Login">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="senha">Senha</label>
					      <input type="password" class="form-control" id="senha" placeholder="Senha">
					    </div>
					  </div>					  
					  <div class="form-row">
					  <div class="form-group col-md-6">
					    <label for="cpf">CPF</label>
					    <input type="text" class="form-control" id="cpf" placeholder="000.000.000-00">
					  </div>
					  <div class="form-group col-md-6">
					    <label for="cep">CEP</label>
					    <input type="text" class="form-control" id="cep" placeholder="00000-000">
					  </div>
					  </div>
					  <div class="form-row">
					  <div class="form-group col-md-8">
					    <label for="endereco">Endereço</label>
					    <input type="text" class="form-control" id="endereco" placeholder="Endereço">
					  </div>
					  <div class="form-group col-md-4">
					    <label for="complemento">Complemento</label>
					    <input type="text" class="form-control" id="complemento" placeholder="Complemento">
					  </div>
					  </div>
					  <div class="form-row">
					  	<div class="form-group col-md-2">
					      <label for="estado">Estado</label>
					      <input type="text" class="form-control" id="estado" placeholder="Estado">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="cidade">Cidade</label>
					      <input type="text" class="form-control" id="cidade" placeholder="Cidade">
					    </div>
					    <div class="form-group col-md-4">
					      <label for="bairro">Bairro</label>
					      <input type="text" class="form-control" id="bairro" placeholder="Bairro">
					    </div>
					  </div>
					  <input type="hidden" name="tipo" id="tipo" value="cliente">
					  <button type="submit" class="btn btn-primary">Enviar</button>
					</form>
					</div>
					</div>


	<div class="text-center p-4 bg-light">
		<h3>Loja Daora</h3>
		<h4>Av. das Américas, 123</h4>
		<h4>21231-123 - Rio de Janeiro RJ</h4>
	</div>
	</div>
	 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>