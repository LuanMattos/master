<!------------------------------------------------------------------------------------------------------------>
<link rel="stylesheet" href="<?= URL_RAIZ() ?>application/assets/fakeLoader.js-master/dist/fakeLoader.min.css">
<!------------------------------------------------------------------------------------------------------------>
<link rel="stylesheet" href="<?= URL_RAIZ() ?>application/assets/bootstrap-4.1.3/dist/css/bootstrap.css">
<!------------------------------------------------------------------------------------------------------------>
<body>
<div id="full">
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <h5 class="text-white h4 font-weight-bold">Menu</h5>
                <span class="text-muted"></span>
                <table class="table table-borderless">
                    <tbody>
                    <tr class="text-white font-weight-bold text-center text-white">
                        <td>
                            <a href="<?= site_url('unico/Unico/index') ?>">
                                <img class='menu'
                                     style="width: 50px;height: 50px"
                                     src="<?= URL_RAIZ() ?>application/assets/icons/svg/si-glyph-database.svg">
                                <br>Único
                            </a>
                        </td>
                        <td>
                            <a href="#">
                                <img class='menu'
                                     style="width: 50px;height: 50px"
                                     src="<?= URL_RAIZ() ?>application/assets/icons/svg/si-glyph-sign-in.svg">
                                <br>Arquivos
                            </a>
                        </td>
                        <td>
                            <a href="#">
                                <img style="width: 50px;height: 50px"
                                     class='menu'
                                     src="<?= URL_RAIZ() ?>application/assets/icons/svg/si-glyph-person-public.svg">
                                <br>Redes sociais
                            </a>
                        </td>
                        <td>
                            <a href="#">
                                <img style="width: 50px;height: 50px"
                                     class='menu'
                                     src="<?= URL_RAIZ() ?>application/assets/icons/svg/si-glyph-finder.svg">
                                <br>Engenharia social
                            </a>
                        </td>
                        <td>
                            <a href="#">
                                <img style="width: 50px;height: 50px"
                                     class='menu'
                                     src="<?= URL_RAIZ() ?>application/assets/icons/svg/si-glyph-wrench-screwdriver.svg">
                                <br>Lista de ferramentas
                            </a>
                        </td>
                        <td>
                            <a href="#">
                                <img style="width: 50px;height: 50px"
                                     class='menu'
                                     src="<?= URL_RAIZ() ?>application/assets/icons/svg/si-glyph-book-3.svg">
                                <br>Manuais
                            </a>
                        </td>
                        <td>
                            <a href="#">
                                <img style="width: 50px;height: 50px"
                                     class='menu'
                                     src="<?= URL_RAIZ() ?>application/assets/icons/svg/si-glyph-document-copy.svg">
                                <br>Anotações
                            </a>
                        </td>
                        <td>
                            <a href="#">
                                <img style="width: 50px;height: 50px"
                                     class='menu'
                                     src="<?= URL_RAIZ() ?>application/assets/icons/svg/si-glyph-wrench.svg">
                                <br>Configurações
                            </a>
                        </td>
                        <td>
                            <a href="<?= site_url('Logado/logout') ?>/">
                                <img class='menu'
                                     src="<?= URL_RAIZ() ?>application/assets/icons/svg/si-glyph-circle-error.svg">
                                <br>Sair
                            </a>
                        </td>
                    </tr>

                    </tbody>

                </table>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarToggleExternalContent"
                    aria-controls="navbarToggleExternalContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>

    <div style="position:fixed; top:30%;left:35%;">
        <img class="rounded mx-auto d-block " style="webkit-opacity:020;opacity:0.20;-moz-opacity: 0.20;
     filter:alpha(opacity=65);" width="300" src="<?= URL_RAIZ() ?>application/assets/imagens/look.png"/>
    </div>

</div>

</body>
<!--------------------------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/bootstrap-4.1.3/js/jquery-3.3.1.slim.min.js"></script>
<!--------------------------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/fakeLoader.js-master/js/fakeLoader.js"></script>
<!--------------------------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/bootstrap-4.1.3/dist/js/bootstrap.js"></script>
<!--------------------------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="<?= URL_RAIZ() ?>js/logado.js"></script>
