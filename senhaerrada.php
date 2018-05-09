	<?php header("refresh:10; url=index.php");?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Loja Daora - Ops</title>
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

	<?php include "header.php";?>


		<div class="jumbotron text-center">
			
			<h3>Ops, os dados digitados não correspondem aos nossos registros. <br><br> Clique <a  class="text-dark" href="cadastro.php">aqui</a> para realizar o seu Cadastro.</h3>

		</div>


	<?php include "footer.html";?>

	</div>
		
		 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
	</html>