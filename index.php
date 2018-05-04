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
  		<div class="col-md-4" style="margin-top: 6%; width: 100%">
	      	<form class="form-inline text-center" action="#" >
	        <input class="form-control font-italic" type="search" placeholder="Busca..." aria-label="Search" style="width: 100%">
      		</form>
  		</div>
 		<div class="col-md-4 pb-2 pt-2" style="margin-top: 6%; text-align: center">
   			<b><a style="color: black" href="login.php" data-toggle="modal" data-target="#exampleModal">Login</a> ou <a style="color: black" href="cadastro.php">Cadastre-se</a></b>
  		</div>
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Bem-vindo, faça seu login</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
		        	<div class="col">
					<form action="#" method="post">
					  <div class="form-group">
					    <label for="login">Login</label>
					    <input type="text" class="form-control" id="login" name="login" aria-describedby="login" placeholder="Digite seu login">
					  </div>
					  <div class="form-group">
					    <label for="senha">Senha</label>
					    <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha">
					  </div>
					  <button type="submit" class="btn btn-primary">Entrar</button>
					</form>
					</div>
			      </div>
			    </div>
			  </div>
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
					<a class="nav-link" href="#"><i class="fas fa-home text-primary"></i> Página Inicial</a>
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
		<h3 class="col text-center mt-3">Mais Vendidos</h3>
		</div>
		</div>
	<div class="bg-light p-4 justify-content-center row">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100 img" src="img/produto19.png" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100 img" src="img/produto3.png" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100 img" src="img/produto13.png" alt="Third slide">
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
		<div class="row bg-light justify-content-center">
		<div class="bg-primary col-sm-4 col-5 rounded">
		<h3 class="col text-center mt-3">Destaques</h3>
		</div>
		</div>

	<div class="row bg-light pt-4 text-center">
		<figure class="figure col border">
			<img class="img-fluid img2" src="img/produto9.png">
            <figcaption class="col p-0 text-center"><b><u>Caixa de Som JBL</u></b></figcaption>
            <p class="col text-info">Seu companheiro para todos os momentos. Transmissão sem fio via Bluetooth. Conecte até dois smartphones ou tablets sem fio à caixa de som e use-os alternadamente para tocar músicas com um impressionante som estéreo.</p>
		</figure>
		<figure class="figure col border">
			<img class="img-fluid img2" src="img/produto7.png">
            <figcaption class="col text-center"><b><u>Smart TV 32'</u></b></figcaption>
            <p class="col text-info">São mais de 400 aplicativos para que você possa fazer videochamadas, acessar as redes sociais, fazer cursos e acessar a oferta mais completa de serviços de vídeo. Você não vai ficar sem ter o que assistir.Tudo isso a um clique de distância.</p>
		</figure>
		<figure class="figure col border">
			<img class="img-fluid img2" src="img/produto10.png">
			<figcaption class="col text-center"><b><u>Geladeira/Refrigerador</u></b></figcaption>
            <p class="col text-info">O Electrolux Frost Free DW42X é versátil e, por isso, você pode adaptá-lo perfeitamente à sua cozinha e ao seu dia a dia. Através do controle de temperatura externo Blue Touch, é possível controlar facilmente a temperatura do refrigerador.</p>
		</figure>
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