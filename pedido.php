<?php 
include "conexao.php";
session_start();

error_reporting(0);

$id_cliente = $_SESSION['id_cliente'];

$stmt = $pdo->prepare('SELECT * FROM pedidos where id_cliente= ?');
$stmt->bindParam(1, $id_cliente, PDO::PARAM_INT);
$stmt->execute();
if ($result = $stmt->fetchAll()){ ?>

<!DOCTYPE html>

<html>
<head>
	<title>Loja Daora - Cadastro</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="icon" type="image/png" href="img/logo.png">	
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
        <div class="bg-primary col-sm-4 col-10 rounded ">
        <h3 class="col text-center text-light mt-3">Meus Pedidos</h3>
        </div>
        </div>
    <div class="row justify-content-center mt-2 mb-2">
    <div class="table-responsive col-10">
<table cellpadding="8" cellspacing="1" class=" table" style="table-layout: fixed; width: 100%">
<thead>
<tr>
<th class="text-center"><strong>Pedido</strong></th>
<th class="text-center"><strong>Data do Pedido</strong></th>
<th class="text-center"><strong>Produto(s)</strong></th>
<th class="text-center"><strong>Parcelas</strong></th>
<th class="text-center"><strong>Valor da Parcela</strong></th>
<th class="text-center"><strong>Valor Total</strong></th>
</tr>   
</thead>
<?php $preco_parc=0;
    foreach ($result as $item){  $preco_parc=$item["preco"]/$item["parcelas"];   ?>
                <tbody>

                <tr>
                <td rowspan="2" class="text-center align-middle"><?php echo $item["id"]; ?></td>
                <td class="text-center align-middle pt-5"><?php echo $item["data"]; ?></td>
                <td class="text-center align-middle pt-5"><?php echo $item["nome_produtos"]; ?></td>
                <td class="text-center align-middle pt-5"><?php echo $item["parcelas"]; ?></td>
                <td class="text-center align-middle pt-5"><?php echo "R$ ".number_format((float)$preco_parc, 2, '.', ''); ?></td>
                <td class="text-center align-middle pt-5"><?php echo "R$ ". number_format((float)$item["preco"], 2, '.', ''); ?></td>
                </tr>
                <tr>
                <td class="text-center align-middle pt-4 pb-5">Status:</td>
                <td class="text-center align-middle pt-4 pb-5 <?php if ($item['status']=="Em processamento"or$item['status']=="Pagamento aprovado"or$item['status']=="Nota emitida"or$item['status']=="Pedido enviado") { echo "font-weight-bold text-success"; }else{echo"font-weight-bold text-success";}?>">Em Processamento  <i class="fas fa-spinner"></i></td>
                <td class="text-center align-middle pt-4 pb-5 <?php if ($item['status']=="Pagamento aprovado"or$item['status']=="Nota emitida"or$item['status']=="Pedido enviado") { echo "font-weight-bold text-success"; }else{echo"font-weight-light";}?>">Pagamento Aprovado  <i class="far fa-money-bill-alt"></i></td>
                <td class="text-center align-middle pt-4 pb-5 <?php if ($item['status']=="Nota emitida"or$item['status']=="Pedido enviado") { echo "font-weight-bold text-success"; }else{echo"font-weight-light";}?>">Nota Emitida  <i class="far fa-sticky-note"></i></td>
                <td class="text-center align-middle pt-4 pb-5 <?php if ($item['status']=="Pedido enviado") { echo "font-weight-bold text-success"; }else{echo" font-weight-light";}?>">Pedido Enviado  <i class="fas fa-truck-moving"></i></td>
                </tr>
                <?php } ?>



</tbody>
</table>        

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
<?php
}
else{
    header("location: nenhumpedido.php");
    exit;
} ?>