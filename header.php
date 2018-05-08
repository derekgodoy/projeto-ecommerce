<?php
session_start();

if(isset($_GET['categoria'])) {
	$link = 1;
}
else {
	$link = 2;
}

?>

<div class="row bg-primary">
    	<div class="col-md-4">
	    	<figure class="figure col text-center">
	    		<a href="index.php">
	    		<img class="img-fluid" src="img/logo.png" style="width: 50%; height: auto">
	    		</a>
	    	</figure>
    	</div>
  		<div class="col-md-4" style="margin-top: 6%; width: 100%">
	      	<form class="form-inline text-center" action="#" >
	        <input class="form-control font-italic pt-2 pb-2" type="search" placeholder="Busca..." aria-label="Search" style="width: 100%">
      		</form>
  		</div>


 		<div class="col-md-4 pb-2 pt-2 text-light" style="margin-top: 5%; text-align: center">
 			<?php if (isset($_SESSION['nome'])){ ?>
 				<h5 class="text-light mt-3">Olá, <?php echo $_SESSION['nome']?></h5>
 				<h6><a class="text-light font-weight-bold" href="logout.php">Sair</a></h6>
 			<?php
 			}
 			else{
 			?>
   			<h5><a class="text-light" href="login.php" data-toggle="modal" data-target="#exampleModal">Login</a> </br>  </br> <a style="color: white" href="cadastro.php">Cadastre-se</a></h5>
   			<?php }?>
  		</div>


			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Bem-vindo de volta, faça seu login</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
		        	<div class="col">
					<form action="login.php" method="post">
					  <div class="form-group">
					    <label for="login">Login</label>
					    <input type="text" class="form-control" id="login" name="login" aria-describedby="login" placeholder="Digite seu login">
					  </div>
					  <div class="form-group">
					    <label for="senha">Senha</label>
					    <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha">
					  </div>
					  <button type="submit" class="btn btn-primary">Entrar</button>
					</form>
					</div>
			      </div>
			    </div>
			  </div>
			</div>
		</div>

	<div class="mb-2">
		<nav class="navbar row navbar-expand-md navbar-light bg-light border font-weight-bold">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item">
					<a class="nav-link <?php if ($link == 2) {echo 'active';}?>" href="index.php"><i class="fas fa-home text-primary"></i> Página Inicial</a>
				</li>
				<li class="nav-item dropdown <?php ?>">
			        <a class="nav-link dropdown-toggle <?php if ($link == 1) {echo 'active';}?>" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-gift text-primary"></i> Produtos</a>
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