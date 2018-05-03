<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="style/bootstrap.css">
	<style type="text/css">
		.img{
			max-width: 350px;
			height: auto;
		}
	</style>
</head>
<body class="bg-dark">
	<div class="container">
  	<div class="row bg-primary">
    	<div class="col-md-4">
	    	<figure class="figure col text-center">
	    		<img class="img-fluid" src="img/logo.png" style="width: 50%; height: auto">
	    	</figure>
    	</div>
  		<div class="col-md-4" style="margin-top: 60px; width: 100%">
	      	<form class="form-inline text-center" >
	        <input class="form-control" type="search" placeholder="Busca" aria-label="Search" style="width: 100%">
      		</form>
  		</div>
 		<div class="col-md-4" style="margin-top: 60px; text-align: center">
   			<b><a style="color: black" href="login.php">Login</a> ou <a style="color: black" href="cadastro_usuario.php">Cadastre-se</a></b>
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
					<a class="nav-link" href="#">Página Inicial</a>
				</li>
				<li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produtos</a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			          <a class="dropdown-item" href="#">Celulares</a>
			          <a class="dropdown-item" href="#">Informática</a>
			          <a class="dropdown-item" href="#">TVs, Áudio e Home Theaters</a>
			          <a class="dropdown-item" href="#">Eletrodomésticos e Split</a>
			          <a class="dropdown-item" href="#">Eletroportáteis</a>
			          <a class="dropdown-item" href="#">Móveis e Decoração</a>
			          <a class="dropdown-item" href="#">Games, Livros e Filmes</a>
			        </div>
			    </li>
				<li class="nav-item">
					<a class="nav-link" href="#">Sobre a Loja</a>
				</li>
			</ul>
		</div>
		</nav>
	</div>
		<div class="row bg-primary">
		<h3 class="col text-center mt-3">Mais Vendidos</h3>
		</div>
	<div class="bg-light p-4 justify-content-center row">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100 img" src="img/produto19.jpg" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100 img" src="img/produto3.jpg" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100 img" src="img/produto13.jpg" alt="Third slide">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
		<div class="row bg-primary">
		<h3 class="col text-center mt-3">Destaques</h3>
		</div>

	<div class="row bg-light pt-4">
		<figure class="figure col border">
			<img class="img-fluid img2" src="img/produto9.jpg">
			<figcaption class="col text-center">Caixa de Som JBL</figcaption>
		</figure>
		<figure class="figure col border">
			<img class="img-fluid img2" src="img/produto7.png">
			<figcaption class="col text-center">Smart TV 32'</figcaption>
		</figure>
		<figure class="figure col border">
			<img class="img-fluid img2" src="img/produto10.png">
			<figcaption class="col text-center">Geladeira/Refrigerador</figcaption>
		</figure>
	</div>

	</div>
	 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>