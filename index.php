<!DOCTYPE html>
<html>
<head>
	<title>Loja Daora</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="style/bootstrap.css">
    <link rel="icon" type="image/png" href="img/logo.png">	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.11/css/all.css" integrity="sha384-p2jx59pefphTFIpeqCcISO9MdVfIm4pNnsL08A6v5vaQc4owkQqxMV8kg4Yvhaw/" crossorigin="anonymous">
	<style type="text/css">
		.img{
			max-width: 400px;
			height: auto;
			margin: 0 auto;
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
		<div class="bg-primary col-sm-4 col-10 rounded ">
		<h3 class="col text-center text-light mt-3">Produtos com Desconto</h3>
		</div>
		</div>

		<div id="carouselExampleIndicators" class="carousel slide mt-2 mb-2" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/banner1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/banner2.jpg" alt="Second slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only font-dark">Next</span>
            </a>
        </div>

		<div class="row bg-light justify-content-center">
		<div class="bg-primary col-sm-4 col-10 rounded ">
		<h3 class="col text-center text-light mt-3">Mais Vendidos</h3>
		</div>
		</div>


<?php
include "conexao.php";
$stmt = $pdo->prepare('SELECT * FROM produtos order by id desc limit 6');
$stmt->execute();
if ($alvos = $stmt->fetchAll()){
        
?>
	<div class="row bg-light pt-4 text-center">
		<figure class="figure col border">
			<a href="item.php?nome=<?php echo $alvos[0]['nome']?>"><img class="img-fluid img2" src="<?php echo "img/".$alvos[0]['imagem'];?>"></a>
            <a class="text-dark"href="item.php?nome=<?php echo $alvos[0]['nome']?>"><figcaption class="col mt-2 p-0 text-center"><h4><u><?php echo $alvos[0]['nome']?></u></h4></figcaption></a>
            <h5><?php echo "Preço: R$ ".$alvos[0]['preco'];  ?></h5>
            <p class="col text-primary mt-2"><?php echo $alvos[0]['descricao'];?></p>
            <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-shopping-cart"></i> Adicionar</button>
		</figure>
		<figure class="figure col border">
            <a href="item.php?nome=<?php echo $alvos[1]['nome']?>"><img class="img-fluid img2" src="<?php echo "img/".$alvos[1]['imagem'];?>"></a>
            <a class="text-dark"href="item.php?nome=<?php echo $alvos[1]['nome']?>"><figcaption class="col mt-2 p-0 text-center"><h4><u><?php echo $alvos[1]['nome']?></u></h4></figcaption></a>
            <h5><?php echo "Preço: R$ ".$alvos[1]['preco'];  ?></h5>
            <p class="col text-primary mt-2"><?php echo $alvos[1]['descricao'];?></p>
            <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-shopping-cart"></i> Adicionar</button>
		</figure>
		<figure class="figure col border">
            <a href="item.php?nome=<?php echo $alvos[2]['nome']?>"><img class="img-fluid img2" src="<?php echo "img/".$alvos[2]['imagem'];?>"></a>
            <a class="text-dark"href="item.php?nome=<?php echo $alvos[2]['nome']?>"><figcaption class="col mt-2 p-0 text-center"><h4><u><?php echo $alvos[2]['nome']?></u></h4></figcaption></a>
            <h5><?php echo "Preço: R$ ".$alvos[2]['preco'];  ?></h5>
            <p class="col text-primary mt-2"><?php echo $alvos[2]['descricao'];?></p>
            <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-shopping-cart"></i> Adicionar</button>
		</figure>
	</div>	
	<div class="row bg-light pt-4 text-center">
		<figure class="figure col border">
            <a href="item.php?nome=<?php echo $alvos[3]['nome']?>"><img class="img-fluid img2" src="<?php echo "img/".$alvos[3]['imagem'];?>"></a>
            <a class="text-dark"href="item.php?nome=<?php echo $alvos[3]['nome']?>"><figcaption class="col mt-2 p-0 text-center"><h4><u><?php echo $alvos[3]['nome']?></u></h4></figcaption></a>
            <h5><?php echo "Preço: R$ ".$alvos[3]['preco'];  ?></h5>
            <p class="col text-primary mt-2"><?php echo $alvos[3]['descricao'];?></p>
            <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-shopping-cart"></i> Adicionar</button>
		</figure>
		<figure class="figure col border">
            <a href="item.php?nome=<?php echo $alvos[4]['nome']?>"><img class="img-fluid img2" src="<?php echo "img/".$alvos[4]['imagem'];?>"></a>
            <a class="text-dark"href="item.php?nome=<?php echo $alvos[4]['nome']?>"><figcaption class="col mt-2 p-0 text-center"><h4><u><?php echo $alvos[4]['nome']?></u></h4></figcaption></a>
            <h5><?php echo "Preço: R$ ".$alvos[4]['preco'];  ?></h5>
            <p class="col text-primary mt-2"><?php echo $alvos[4]['descricao'];?></p>
            <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-shopping-cart"></i> Adicionar</button>
		</figure>
		<figure class="figure col border">
            <a href="item.php?nome=<?php echo $alvos[5]['nome']?>"><img class="img-fluid img2" src="<?php echo "img/".$alvos[5]['imagem'];?>"></a>
            <a class="text-dark"href="item.php?nome=<?php echo $alvos[5]['nome']?>"><figcaption class="col mt-2 p-0 text-center"><h4><u><?php echo $alvos[5]['nome']?></u></h4></figcaption></a>
            <h5><?php echo "Preço: R$ ".$alvos[5]['preco'];  ?></h5>
            <p class="col text-primary mt-2"><?php echo $alvos[5]['descricao'];?></p>
            <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-shopping-cart"></i> Adicionar</button>
		</figure>
	</div>

<?php
}
?>

<?php
include "footer.html" ;
?>


	</div>
	 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>