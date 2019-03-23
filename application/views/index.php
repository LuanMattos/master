<head>
    <script data-main="js/boot" src="<?= URL_RAIZ() ?>application/assets/jquery3.3/require.js"></script>
    <link rel="stylesheet" href="<?= URL_RAIZ() ?>application/assets/bootstrap-4.3.1/css/bootstrap.css">

</head>
<body>

<div  class="col-4 mx-auto d-flex h-100 flex-column p-3">
<<<<<<< HEAD
    <form method="POST" class="form-signin" action="<?php echo site_url('Logado/auth')?>">
        <div class="text-center mb-4">
            <div class="form-label-group">
                <img width="100" src="<?= URL_RAIZ() ?>application/assets/imagens/look.png">
                <h1 class="h3 mb-3">Acesso restrito</h1>
=======
    <form method="POST" class="form-signin" action="<?php echo site_url('Logado/acao_salvar')?>">
        <div class="text-center mb-4">
            <div class="form-label-group">
                <img width="100" src="<?= URL_RAIZ() ?>application/assets/imagens/look.png">
                <h1 class="h3 mb-3">Router Firewall six</h1>
>>>>>>> f21574b377439b36c57f78b06312354c39fc1f7b
            </div>

        </div>
        <div class="form-label-group">
            <input type="text" name='login' id="login" class="form-control" placeholder="Login" required autofocus>
<<<<<<< HEAD
            <br>
=======
>>>>>>> f21574b377439b36c57f78b06312354c39fc1f7b
            <input type="password" name='senha' id="senha" class="form-control" placeholder="Senha" required autofocus>
        </div>
        <div class="form-label-group">
            <div class="checkbox mb-3">
                <span>
<!--                <input type="checkbox" value="1">Relembrar Senha-->
                </span>
            </div>
        </div>
        <button class="btn  bg-dark btn-block text-white" type="submit">Entrar</button>
    </form>
    <p class="text-danger">
<?php if(isset($error_senha)){echo $error_senha;}else{echo " ";}?>
    </p>
</div>
</div>
</body>