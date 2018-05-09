<?php header("refresh:5; url=index.php");?>
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

	<div class="jumbotron text-center">
			
			<h2>Cadastro realizado com sucesso.</h2>

		</div>



	<?php 
	include "footer.html";
	?>