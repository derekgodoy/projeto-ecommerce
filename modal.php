<?php
include "conexao.php" ;
?>

<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                	<h5 class="mb-3">Olá, <?php echo $_SESSION['nome']?>. Deseja mesmo encerrar a sessão?</h5>
                </div>
                <div class="row justify-content-center">
                    <form action="logout.php" method="post" class="mx-auto">
                        <button type="submit" class="btn btn-primary mt-2">Confirmar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <input type="text" class="form-control" id="login" name="login" aria-describedby="login" placeholder="Digite seu login" required>
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha" required>
                        </div>
                        <div class="row justify-content-center">
                        <button type="submit" class="btn btn-primary">Entrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Carrinho</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <h5 class="mb-3">Olá, <?php echo $_SESSION['nome']?>. O produto foi adicionado ao carrinho!</h5>
                </div>
                <div class="row justify-content-center">
                    <a href="vercarrinho.php" type="button">Ver Carrinho</a>
                    <a href="#" type="button">Continuar comprando</a>

                </div>
                <div class="row justify-content-center">
                    <form action="logout.php" method="post" class="mx-auto">
                        <button type="submit" class="btn btn-primary mt-2">Confirmar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
