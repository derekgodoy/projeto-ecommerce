<?php
session_start();
error_reporting(0);
include "conexao.php";

if ($_SESSION['tipo']=="vendedor"){

$stmt = $pdo->prepare('SELECT * FROM pedidos');
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
        <h3 class="col text-center text-light mt-3">Pedidos</h3>
        </div>
        </div>
<div class="row justify-content-center mt-2 mb-2">
    <div class="table-responsive col-10">
<table cellpadding="8" cellspacing="1" class=" table" style="table-layout: fixed; width: 100%">
<thead>
<tr>
<th class="text-center"><strong>Pedido</strong></th>
<th class="text-center"><strong>Data do Pedido</strong></th>
<th class="text-center"><strong>Cliente</strong></th>
<th class="text-center"><strong>Produto(s)</strong></th>
<th class="text-center"><strong>Parcelas</strong></th>
<th class="text-center"><strong>Valor da Parcela</strong></th>
<th class="text-center"><strong>Valor Total</strong></th>
<th class="text-center"><strong>Situação</strong></th>
</tr>   
</thead>
<?php $preco_parc=0;
    foreach ($result as $item){  $preco_parc=$item["preco"]/$item["parcelas"];   ?>
                <tbody>
                <tr>
                <form action="status.php" method="post">
                <td class="text-center align-middle"><?php echo $item["id"]; ?></td>
                <td class="text-center align-middle"><?php echo $item["data"]; ?></td>
                <td class="text-center align-middle"><?php echo $item["nome_cliente"]; ?></td>
                <td class="text-center align-middle"><?php echo $item["nome_produtos"]; ?></td>
                <td class="text-center align-middle"><?php echo $item["parcelas"]; ?></td>
                <td class="text-center align-middle"><?php echo "R$ ".number_format((float)$preco_parc, 2, '.', ''); ?></td>
                <td class="text-center align-middle"><?php echo "R$ ". number_format((float)$item["preco"], 2, '.', ''); ?></td>
                <td class="text-center align-middle">

                    <select name="status" class="custom-select">
                        <option value="Em processamento"<?php if ($item['status']=="Em processamento") { echo "selected"; }else{echo"";}?>>Em processamento</option>
                        <option value="Pagamento aprovado" <?php if ($item['status']=="Pagamento aprovado") { echo "selected"; }else{echo"";}?>>Pagamento aprovado</option>
                        <option value="Nota emitida" <?php if ($item['status']=="Nota emitida") { echo "selected"; }else{echo"";}?>>Nota emitida</option>
                        <option value="Pedido enviado" <?php if ($item['status']=="Pedido enviado") { echo "selected"; }else{echo"";}?>>Pedido enviado</option>
                    </select>
                    <input type="hidden" name="id" value="<?php echo $item["id"];?>">
                    <button type="submit" class="btn btn-warning mt-2">Alterar</button>
                </td>
                </form>
                </tr>
                <?php } ?>


<tr>
<td colspan="1" align=right><strong></td>
<td colspan="1" align=right><strong></td>
<td colspan="1" align=right><strong></td>
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
    <?php   include "footer.html" ; ?>

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