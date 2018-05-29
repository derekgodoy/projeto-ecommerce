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
  	 
  	<?php
	  	include "header.php";
	  	include "conexao.php";
	  	if(isset($_SESSION["carrinho"])){
    $item_total = 0;
?>	
		<div class="row bg-light justify-content-center">
		<div class="bg-primary col-sm-4 col-10 rounded ">
		<h3 class="col text-center text-light mt-3">Carrinho</h3>
		</div>
		</div>
<div class="row justify-content-center mt-2 mb-2">
	<div class="table-responsive col-10">
<table cellpadding="8" cellspacing="1" class=" table" style="table-layout: fixed; width: 100%">
<thead>
<tr>
<th class="text-center"><strong>Foto</strong></th>
<th class="text-center"><strong>Nome</strong></th>
<th class="text-center"><strong>Descrição</strong></th>
<th class="text-center"><strong>Preço</strong></th>
</tr>	
</thead>
<?php		
    foreach ($_SESSION["carrinho"] as $item){
		?>
				<tbody>
				<tr>
				<td class="text-center align-middle"> <figure class="figure"><img class="img3" src="<?php echo "img/".$item['imagem'];?>"></figure></td>
				<td class="text-center align-middle"><?php echo $item["nome"]; ?></td>
				<td class="text-center align-middle"><?php echo $item["descricao"]; ?></td>
				<td class="text-center align-middle"><?php echo "R$ ". $item["preco"]; ?></td>
				</tr>
				<?php
        $item_total += ($item["preco"]);
        $item_juros = ($item_total*1.1);
		}
		?>

<tr>
<td colspan="1" align=right><strong></td>
<td colspan="1" align=right><strong></td>
<td colspan="1" align=right><strong></td>
<td class="text-center" colspan="1" align=right><strong>Total:</strong> <?php echo "R$ ".number_format((float)$item_total, 2, '.', ''); ?></td>
</tr>
<tr>
<td colspan="1" align=right><strong></td>
<td colspan="1" align=right><strong></td>
<td colspan="1" align=right><strong></td>
<td class="text-center" colspan="1" align=right>
				<div class="row justify-content-center">
				<div class="col-8">
					 <form class="align-middle" method="post" action="finalizar.php">
				<select class="custom-select" name="parcelas" id="parcelas">
				  <option value="#" selected disabled>Selecione o parcelmento:</option>
				  <option value="1">1x de <?php echo number_format((float)$item_total, 2, '.', '');?> (à vista)</option>
				  <option value="2">2x de <?php echo number_format((float)$item_total/2, 2, '.', '');?> (sem juros)</option>
				  <option value="3">3x de <?php echo number_format((float)$item_total/3, 2, '.', '');?> (sem juros)</option>
				  <option value="4">4x de <?php echo number_format((float)$item_total/4, 2, '.', '');?> (sem juros)</option>
				  <option value="5">5x de <?php echo number_format((float)$item_total/5, 2, '.', '');?> (sem juros)</option>
				  <option value="6">6x de <?php echo number_format((float)$item_total/6, 2, '.', '');?> (sem juros)</option>
				  <option value="7">7x de <?php echo number_format((float)$item_total/7, 2, '.', '');?> (sem juros)</option>
				  <option value="8">8x de <?php echo number_format((float)$item_total/8, 2, '.', '');?> (sem juros)</option>
				  <option value="9">9x de <?php echo number_format((float)$item_total/9, 2, '.', '');?> (sem juros)</option>
				  <option value="10">10x de <?php echo number_format((float)$item_total/10, 2, '.', '');?> (sem juros)</option>
				  <option value="11">11x de <?php echo number_format((float)$item_juros/11, 2, '.', '');?> (10% de juros)</option>
				  <option value="12">12x de <?php echo number_format((float)$item_juros/12, 2, '.', '');?> (10% de juros)</option>
				</select>
				<input type="hidden" name="item_total" value="<?php echo $item_total;?>">
				<input type="hidden" name="item_juros" value="<?php echo $item_juros;?>">
  					</div>
  					</div>
           </td>
</tr>

<tr>
<td colspan="1" align=right><strong></td>
<td colspan="1" align=right><strong></td>
<td colspan="1" align=right><strong></td>
<td class="text-center" colspan="1" align=right>
            <a href="acaocarrinho.php?acao=esvaziar" class="btn btn-danger mb-2">Esvaziar Carrinho</a>
            <button type="submit" class="btn btn-primary mb-2 text-light">Finalizar Compra</button>
            </form></td>
</tr>

</tbody>
</table>		
  <?php
} else{
?>
<div class="row bg-light justify-content-center">
		<div class="bg-primary col-sm-4 col-10 rounded ">
		<h3 class="col text-center text-light mt-3">Carrinho</h3>
		</div>
		</div>
		<div class="jumbotron text-center">
			
			<h3>Ops, seu carrinho ainda está vazio <br><br> Clique <a  class="text-dark" href="index.php">aqui</a> para começar a comprar.</h3>

		</div>
<?php } ?>



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