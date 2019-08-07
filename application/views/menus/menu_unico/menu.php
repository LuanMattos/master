<link rel="stylesheet" href="<?= URL_RAIZ() ?>application/assets/js/libs/fakeLoader.js-master/dist/fakeLoader.min.css">
<link rel="stylesheet" href="<?= URL_RAIZ() ?>application/assets/js/libs/bootstrap-4.1.3/dist/css/bootstrap.css">
<link rel="stylesheet" href="<?= URL_RAIZ() ?>application/assets/js/libs/jquery-ui-1.12.1/jquery-ui.css">

<body>
<div id="full">
    <nav class="bg-dark navbar navbar-expand-lg">
        <a class="text-white" href="#">Home</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">
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
                        <a class="dropdown-item" href="#" onclick="un_unico.Init()">Único</a>
                        <a class="dropdown-item" href="#" onclick="cadastro_imagem.Init('div#imagens')">Imagens</a>
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
<div id="cadastro">

</div>
<div id="imagens">
    <?php $this->load->view('unico/cadastro_imagens/index'); ?>
</div>


<div class="text-center mb-5">
    <div class="form-label-group">
        <img width="200" src="<?= URL_RAIZ() ?>application/assets/js/libs/imagens/look.png">
    </div>

</div>


</body>
<!----------------------------------------------bootstrap-------------------------------------------------------------->
<script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/js/libs/bootstrap-4.1.3/js/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/js/libs/bootstrap-4.1.3/dist/js/bootstrap.js"></script>
<!-----------------------------------------jquery-default-sistema------------------------------------------------------>
<script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/js/libs/jquery-3.4.1/jquery.js"></script>
<!------------------------------------------jquery-ui-p/-modal--------------------------------------------------------->
<script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/js/libs/jquery-1.12.4/jquery-1.12.4.js"></script>
<!----------------------------------------------jquery-ui-------------------------------------------------------------->
<script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/js/libs/jquery-ui-1.12.1/jquery-ui.js"></script>
<!---------------------------------------------geral-do-unico---------------------------------------------------------->
<script type="text/javascript" src="<?= URL_RAIZ() ?>js/unico/unico.js"></script>
<!---------------------------------------------cadastro-imagem--------------------------------------------------------->
<script type="text/javascript" src="<?= URL_RAIZ() ?>js/unico/cadastro_imagem.js"></script>
<!---------------------------------------------cadastro-unico---------------------------------------------------------->
<script type="text/javascript" src="<?= URL_RAIZ() ?>js/unico/cadastro_unico.js"></script>
<!---------------------------------------------cadastro-unico---------------------------------------------------------->
<script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/js.js"></script>

