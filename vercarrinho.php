<?php

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
            max-width: 100px;
        }
	</style>
</head>
<body class="bg-light">
	<div class="container-fluid">
  	 
  	<?php
	  	include "header.php";
	  	include "conexao.php";
	  	if(isset($_SESSION["carrinho"])){
    $item_total = 0;
?>	
<div class="row justify-content-center mb-2">
	<div class="col-7">
<table cellpadding="10" cellspacing="1" class="border text-center">
<tbody>
<tr>
<th class="border text-center" style="text-align:left;"><strong>Foto</strong></th>
<th class="border text-center" style="text-align:left;"><strong>Nome</strong></th>
<th class="border text-center" style="text-align:right;"><strong>Descrição</strong></th>
<th class="border text-center" style="text-align:center;"><strong>Preço</strong></th>
</tr>	
<?php		
    foreach ($_SESSION["carrinho"] as $item){
		?>
				<tr>
				<td class="border text-center" style="text-align:left;border-bottom:#F0F0F0 1px solid;"><strong><img class="img3" src="<?php echo "img/".$item['imagem'];?>"></strong></td>
				<td class="border text-center" style="text-align:left;border-bottom:#F0F0F0 1px solid;"><?php echo $item["nome"]; ?></td>
				<td class="border text-center" style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo $item["descricao"]; ?></td>
				<td class="border text-center" style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo "R$ ". $item["preco"]; ?></td>
				</tr>
				<?php
        $item_total += ($item["preco"]);
		}
		?>

<tr class="border">
<td colspan="4" align=right><strong>Total:</strong> <?php echo "R$ ".number_format((float)$item_total, 2, '.', ''); ?></td>
</tr>
<tr>
<td colspan="4" align=right><strong><a href="vercarrinho.php?acao=vazio">Esvaziar Carrinho</a></strong></td>
</tr>
</tbody>
</table>		
  <?php
}
?>
</div>
</div>
</div>
	<?php
	include "footer.html" ;
	?>


	</div>
	 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>