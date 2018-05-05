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
				<li class="nav-item">
					<a class="nav-link" href="index.php"><i class="fas fa-home text-primary"></i> Página Inicial</a>
				</li>
				<li class="nav-item dropdown active">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-gift text-primary"></i> Produtos</a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			          <a class="dropdown-item" href="produtos.php?categoria=Celulares">Celulares <i class="fas fa-mobile-alt"></i></a>
			          <a class="dropdown-item" href="produtos.php?categoria=Informática">Informática <i class="fas fa-keyboard"></i></i></a>
			          <a class="dropdown-item" href="produtos.php?categoria=TVs, Áudio e Home Theaters">TVs, Áudio e Home Theaters <i class="fas fa-desktop"></i></a>
			          <a class="dropdown-item" href="produtos.php?categoria=Eletrodomésticos e Split">Eletrodomésticos e Split <i class="far fa-snowflake"></i></a>
			          <a class="dropdown-item" href="produtos.php?categoria=Eletroportáteis">Eletroportáteis <i class="fas fa-camera"></i></a>
			          <a class="dropdown-item" href="produtos.php?categoria=Móveis e Decoração">Móveis e Decoração <i class="fas fa-bed"></i></a>
			          <a class="dropdown-item" href="produtos.php?categoria=Games, Livros e Filmes">Games, Livros e Filmes <i class="fas fa-gamepad"></i></a>
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
<?php
include "conexao.php";

$categoria=$_GET['categoria'];

$stmt = $pdo->prepare('SELECT * FROM produtos where categoria= ?');
$stmt->bindParam(1, $categoria, PDO::PARAM_STR);
$stmt->execute();
if ($alvos = $stmt->fetchAll()){

?>
		<div class="row bg-light justify-content-center">
		<div class="bg-primary col-sm-4 col-5 rounded ">
		<h3 class="col text-center text-light mt-3"><?php echo $categoria; ?></h3>
		</div>
		</div>


<div class="row bg-light pt-4 text-center">
		<figure class="figure col border">
			<img class="img-fluid img2" src="<?php echo "img/".$alvos[0]['imagem'];?>">
            <figcaption class="col mt-2 p-0 text-center"><h4><u><?php echo $alvos[0]['nome']?></u></h4></figcaption>
            <h5><?php echo "Preço: R$ ".$alvos[0]['preco'];  ?></h5>
            <p class="col text-primary mt-2"><?php echo $alvos[0]['descricao'];?></p>
            <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-shopping-cart"></i> Adicionar</button>
		</figure>
		<figure class="figure col border">
			<img class="img-fluid img2" src="<?php echo "img/".$alvos[1]['imagem'];?>">
            <figcaption class="col mt-2 p-0 text-center"><h4><u><?php echo $alvos[1]['nome']?></u></h4></figcaption>
            <h5><?php echo "Preço: R$ ".$alvos[1]['preco'];  ?></h5>
            <p class="col text-primary mt-2"><?php echo $alvos[1]['descricao'];?></p>
            <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-shopping-cart"></i> Adicionar</button>
		</figure>
		<figure class="figure col border">
			<img class="img-fluid img2" src="<?php echo "img/".$alvos[2]['imagem'];?>">
            <figcaption class="col mt-2 p-0 text-center"><h4><u><?php echo $alvos[2]['nome']?></u></h4></figcaption>
            <h5><?php echo "Preço: R$ ".$alvos[2]['preco'];  ?></h5>
            <p class="col text-primary mt-2"><?php echo $alvos[2]['descricao'];?></p>
            <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-shopping-cart"></i> Adicionar</button>
		</figure>
	</div>	
<?php
}
?>

	<footer class=" row bg-primary text-light">
            <div class="container mt-5 mb-4 text-center text-md-left">
                <div class="row mt-1">
                    <div class="col-md-4 col-lg-4 col-xl-4 text-center">
                        <h6 class="text-uppercase font-weight-bold">
                            <strong class="">Departamentos</strong>
                        </h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 150px">
                            <p>telefonia</p>
                            <p>informática</p>
                            <p>tvs e áudio</p>
                            <p>eletrodomésticos</p>
							<p>games</p>
							<p>livros</p>
							<p>filmes</p>
                    </div>

                    <div class="col-md-4 col-lg-4 col-xl-4 text-center">
                        <h6 class="text-uppercase font-weight-bold">
                            <strong>Contato</strong>
                        </h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 80px;">
                        <p>
                            <i class="fa fa-home mr-3"></i>Av. das Américas, 1233</p>
                        <p>
                            <i class="fa fa-envelope mr-3"></i>lojadaora@gmail.com</p>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4 text-center">
                             <h6 class="text-uppercase font-weight-bold">
                            <strong>Compre pelo Telefone</strong>
                        </h6>
                            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 180px;">
                        <p style="font-size: 22pt;"><i class="fa fa-phone mr-4 mt-4"></i>(21) 2578-9899</p>
                        <p>segunda à sexta: 8h30 às 22h</br>
                            sábado e domingo: 9h às 22h</br>
                            (excetos feriados)</p>
                    </div>
					
                    <div class="col-12 ">
		                <div class=" text-center mb-5">
	                        <i class="fab fa-facebook-f fa-2x fa-fw"></i>
	                        <i class="fab fa-twitter fa-2x fa-fw"></i>
	                        <i class="fab fa-google-plus-g fa-2x fa-fw"> </i>
	                        <i class="fab fa-instagram fa-2x fa-fw"> </i>
	                	</div>
	                </div>
         	<div class="col-12">
                        <p class=" text-light text-center" style="font-size: 9pt;">acessibilidade</br>
						<i class="fas fa-wheelchair fa-fw fa-lg"></i> <i class="fas fa-american-sign-language-interpreting fa-fw fa-lg"></i></p>
         	</div>
	            </div>
	            </div>

            		</div>
        </div>
        </div>
	</footer>
			<div class="footer-copyright py-3 text-center">
        		© 2018 Copyright:
				<a href="https://mdbootstrap.com/material-design-for-bootstrap/"> lojadaora@gmail.com </a>
		</div>
	</div>
	
	 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>