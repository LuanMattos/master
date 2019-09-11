<!------------------------------------------------------------------------------------------------------------>
<link rel="stylesheet" href="<?= URL_RAIZ() ?>application/assets/js/libs/bootstrap-4.1.3/dist/css/bootstrap.css">
<!------------------------------------------------------------------------------------------------------------>
<link rel="stylesheet" href="<?= URL_RAIZ() ?>application/assets/js/libs/icons/fontawesome-free-5.10.2-web/css/all.css">
<body>
<style>
    .bg-default{
        background-color: #005599;
    }
    *{
        color:white;
        text-decoration: none;
    }

</style>
<div id="full">
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-default p-4">
                <h5 class="text-white h4 font-weight-bold">Menu</h5>

                <table class="table table-borderless">
                    <tr>
                        <td>
                            <a href="<?= site_url('unico/Unico/index') ?>">
                                Unificado
                            </a>
                        </td>
                        <td>
                            <a href="#">
                                Agendamentos
                            </a>
                        </td>
                        <td>
                            <a href="#">
                                Agendamentos
                            </a>
                        </td>
                        <td>
                            <a href="#">
                                Profissionais
                            </a>
                        </td>
                        <td>
                            <a href="#">
                                Pacientes
                            </a>
                        </td>
                        <td>
                            <a href="#">
                                Pronto Atendimento
                            </a>
                        </td>
                        <td>
                            <a href="#">

                            </a>
                        </td>
                        <td>
                            <a href="#">

                            </a>
                        </td>
                        <td>
                            <a href="<?= site_url('Logado/logout') ?>">
                                <i class="fas fa-sign-out-alt"></i>Sair
                            </a>
                        </td>
                    </tr>



                </table>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-default">
            <button class="navbar-toggler"
                    type="button"
                    style="border:none;"
                    data-toggle="collapse"
                    data-target="#navbarToggleExternalContent"
                    aria-controls="navbarToggleExternalContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
            >

                <span style="font-size: 35px;" class="far fa-compass"></span>
            </button>
        </nav>
    </div>

    <div class="text-center mb-5 mt-5">
        <div class="form-label-group">
            <img class="rounded mx-auto d-block" width="550" src="<?= URL_RAIZ() ?>application/assets/js/libs/imagens/look.png">
        </div>
    </div>
</div>
</body>
<script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/js/libs/icons/fontawesome-free-5.10.2-web/js/all.js"></script>
<!--------------------------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/js/libs/bootstrap-4.1.3/js/jquery-3.3.1.slim.min.js"></script>
<!--------------------------------------------------------------------------------------------------------------------->
<script type="text/javascript" src="<?= URL_RAIZ() ?>application/assets/js/libs/bootstrap-4.1.3/dist/js/bootstrap.js"></script>

