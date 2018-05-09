<?php
include "conexao.php";

$nome=$_GET['nome'];

$stmt = $pdo->prepare('SELECT * FROM produtos where nome= ?');
$stmt->bindParam(1, $nome, PDO::PARAM_STR);
$stmt->execute();
if ($alvos = $stmt->fetchAll()){

?>

<!DOCTYPE html>
<html>
<head>
	<title>Loja Daora - <?php echo $nome?></title>
	 <link rel="icon" type="image/png" href="img/logo.png">
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
            max-width: 500px;
        }
	</style>
</head>
<body class="bg-light">
	<div class="container-fluid">
		
  	<?php
  	include "header.php";
  	?>

		<div class="row bg-light justify-content-center">
		<div class="bg-primary col-sm-4 col-md-5 col-6 rounded ">
		<h3 class="col text-center text-light mt-3"><?php echo $nome; ?></h3>
		</div>
		</div>


	<div class="row bg-light pt-4 text-center justify-content-center">
		<div class="col-md-3 justify-content-center">
		<figure class="figure">
			<img class="img-fluid" src="<?php echo "img/".$alvos[0]['imagem'];?>">
		</figure>
		</div>
		<div class="col-md-3" style="margin-top: 4%;">
	        <figcaption class="col mt-2 p-0 text-center"><h4><u><?php echo $alvos[0]['nome']?></u></h4></figcaption>
	        <h5><?php echo "Preço: R$ ".$alvos[0]['preco'];  ?></h5>
	        <p class="col text-primary mt-2"><?php echo $alvos[0]['descricao'];?></p>
	        <button type="submit" class="btn btn-primary mb-3"><i class="fas fa-shopping-cart"></i> Adicionar</button>
		</div>	
	</div>

<?php
}
?>

<?php
include "footer.html";
?>

	</div>
	
	 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>