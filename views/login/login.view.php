<?php require('views/partials/header.php'); ?>

<div class="content">
    <span class="imagem-fundo">
        <h1 class="boas-vindas">Código Sênior</h1>

        <form class="container login-card" method="POST" action="/login">
            <div class="form-group preencher">
                <label for="emailLogin">Login</label>
                <input type="email" class="form-control" id="emailLogin" placeholder="Email" name="email" required>
            </div>
            <div class="form-group preencher">
                <label for="senhaLogin">Senha</label>
                <input type="password" class="form-control" id="senhaLogin" placeholder="Senha" name="senha" required>
            </div>
            <button type="submit" class="btn btn-primary">Logar</button>
        </form>
    </span>

    <?php require('views/partials/footer.php'); ?>