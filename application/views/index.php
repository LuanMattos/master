<head>

    <script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/bootstrap-4.1.3/js/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/bootstrap-4.1.3/dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="<?= URL_RAIZ() ?>application/assets/bootstrap-4.1.3/dist/css/bootstrap.css">
</head>
<body>

<div  class="col-4 mx-auto d-flex h-100 flex-column p-3">
    <form method="POST" class="form-signin" id="formulario-login" action="<?php echo site_url('Logado/index')?>">
        <div class="text-center mb-4">
            <div class="form-label-group">
                <img width="200" src="<?= URL_RAIZ() ?>application/assets/imagens/look.png">
                <h1 class="h3 mb-3">Área de acesso</h1>
            </div>

        </div>
        <div class="form-label-group">
            <div class="input-group">
                <input type="text"
                       name='login'
                       id="login"
                       class="form-control"
                       placeholder="Login"
                       autocomplete="off"
                       autofocus
                >
                <input type="password"
                       name='senha'
                       id="senha"
                       class="form-control"
                       placeholder="Senha"
                       autocomplete="off"
                       autofocus
                ></div>
            </div>
        <br>
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
