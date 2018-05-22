
<?php
error_reporting(0);
include "conexao.php";
session_start();
if ($_SESSION['tipo']=="vendedor"){

$stmt = $pdo->prepare('SELECT * FROM produtos');
$stmt->execute();
if ($result = $stmt->fetchAll()){
?>


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
        .img3{
            max-width:50%;
            height: auto;
        }
	</style>
</head>
<body class="bg-light">
	<div class="container-fluid">
  	 
  	<?php include "header.php";?>	
		<div class="row bg-light justify-content-center">
		<div class="bg-primary col-sm-4 col-10 rounded ">
		<h3 class="col text-center text-light mt-3">Produtos</h3>
		</div>
		</div>
<div class="row justify-content-center mt-2 mb-2">
	<div class="table-responsive col-10">
<table cellpadding="8" cellspacing="1" class=" table" style="table-layout: fixed; width: 100%">
<thead>
<tr>
<th class="text-center"><strong>Id</strong></th>
<th class="text-center"><strong>Foto</strong></th>
<th class="text-center"><strong>Nome</strong></th>
<th class="text-center"><strong>Preço</strong></th>
<th class="text-center"><strong>Ação</strong></th>
</tr>	
</thead>
<?php		
    foreach ($result as $item){		?>
				<tbody>
				<tr>
				<td class="text-center align-middle"><?php echo $item["id"]; ?></td>
				<td class="text-center align-middle"> <figure class="figure"><img class="img3" src="<?php echo "img/".$item['imagem'];?>"></figure></td>
				<td class="text-center align-middle"><?php echo $item["nome"]; ?></td>
				<td class="text-center align-middle"><?php echo "R$ ". $item["preco"]; ?></td>
				<td class="text-center align-middle"><button type="submit" class="btn btn-danger mb-2" data-toggle="modal" data-target="#modal4" >Excluir</button></td>
				</tr>
				<?php } ?>


<tr>
<td colspan="1" align=right><strong></td>
<td colspan="1" align=right><strong></td>
<td colspan="1" align=right><strong></td>
<td colspan="1" align=right><strong></td>
<td class="text-center" colspan="1" align=right>
            <a href="vendedor.php" class="btn btn-primary mb-2">Voltar ao menu</a>
            </td>
</tr>

</tbody>
</table>		



</div>
</div>
</div>
	<?php	include "footer.html" ;	?>


<div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmar exclusão</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <h5 class="mb-3">Deseja excluir este produto?</h5>
                </div>
                <div class="row justify-content-center">
                    <h6 class="mb-3"><?php echo $item['nome'];?></h6>
                </div>
                <div class="row justify-content-center text-center">
                    <figure class="figure"><img class="img3" src="<?php echo "img/".$item['imagem'];?>"></figure>
                </div>
                 

                <div class="row justify-content-center mt-2">
                     <form action="excluirprod.php" method="post"><input type="hidden" value="<?php echo $item['id']?>" name="id"><button type="" class="btn btn-danger mb-2" data-toggle="modal" data-target="#modal2" >Excluir</button> </form>
                </div>
            </div>
        </div>
    </div>
</div>

	</div>
	 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<?php } 
} else{
	header("location: errousuario.php");
} ?>