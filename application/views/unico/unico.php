<link rel="stylesheet" href="<?= URL_RAIZ() ?>application/assets/fakeLoader.js-master/dist/fakeLoader.min.css">
<link rel="stylesheet" href="<?= URL_RAIZ() ?>application/assets/bootstrap-4.1.3/dist/css/bootstrap.css">
<link rel="stylesheet" href="<?= URL_RAIZ() ?>application/assets/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" href="<?= URL_RAIZ() ?>application/assets/jquery-ui-1.12.1.custom/jquery-ui.min.css">



<body>
<div id="full">
    <nav class="bg-dark navbar navbar-expand-lg">
        <a class="text-white" href="#">Home</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link"
                       href="#"
                    >
                     <span class="sr-only"></span></a>

                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle"
                       href="#"
                       id="navbarDropdown"
                       role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true"
                       aria-expanded="false"
                    >
                        Cadastro
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a id="unico_link" class="dropdown-item" href="#">Único</a>
                        <a class="dropdown-item" href="#">Imagens</a>
                        <div class="dropdown-divider">Documentos</div>
                        <a class="dropdown-item" href="#">Áudio/Vídeo</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                       href="#"
                       id="navbarDropdown"
                       role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true"
                       aria-expanded="false"
                    >
                        Relatórios
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Quantidade</a>
                        <a class="dropdown-item" href="#">Em breve</a>
                        <div class="dropdown-divider">Em breve</div>
                        <a class="dropdown-item" href="#">Em breve</a>
                    </div>
                </li>

            </ul>
            <ul>
                <li class="list-group">
                    <a href="<?= site_url('Logado/logout') ?>">
                        <i class="glyphicon-fast-backward"></i>Sair
                    </a>
                </li>
            </ul>

        </div>
    </nav>
</div>
<div id="unico" >
    Teste
</div>
</body>

<script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/bootstrap-4.1.3/js/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/bootstrap-4.1.3/dist/js/bootstrap.js"></script>
<script type="text/javascript" src="<?= URL_RAIZ() ?>js/unico/unico.js"></script>