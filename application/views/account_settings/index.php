<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>Goeveni - My Dashbaord Booked Events</title>

    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="images/fav.png">

    <!-- Stylesheets -->
    <link href="<?= URL_RAIZ() ?>application/assets/libs/css/responsive.css" rel="stylesheet">
    <link href="<?= URL_RAIZ() ?>application/assets/libs/css/style.css" rel="stylesheet">
    <link href="<?= URL_RAIZ() ?>application/assets/libs/css/datepicker.min.css" rel="stylesheet">
    <link href="<?= URL_RAIZ() ?>application/assets/libs/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= URL_RAIZ() ?>application/assets/libs/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?= URL_RAIZ() ?>application/assets/libs/vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="<?= URL_RAIZ() ?>application/assets/libs/vendor/OwlCarousel/assets/owl.theme.default.min.css"
          rel="stylesheet">

</head>

<body>
<?php if (isset($dados)):

    $data = $dados;
else:
    $data = [];
endif;

?>
<?= $this->load->view("menu/menu", compact("data")) ?>
<!-- Header End -->
<!-- Body Start -->
<main class="dashboard-mp" style="margin-top: 80px;">
    <div class="dash-tab-links">
        <div class="container">
            <div class="setting-page mb-20">
                <div class="row">

                    <?= $this->load->view("menu_config/index"); ?>
                    <!--                    #div-geral-config-informacoes-pessoais-index-->
                    <?= $this->load->view("config_informacoes_pessoais/index"); ?>
                    <!--                    #div-geral-config-perfil-index-->
                    <?= $this->load->view("config_perfil/index"); ?>
                    <!--                    #div-geral-config-requisicoes-amizades-->
                    <?= $this->load->view("config_requisicoes_amizades/index"); ?>
                    <!--                    #div-geral-config-redes-sociais-->
                    <?= $this->load->view("config_redes_sociais/index"); ?>
                    <!--                    #div-geral-config-email-->
                    <?= $this->load->view("config_email/index"); ?>
                    <!--                    #div-geral-config-notificacoes-->
                    <?= $this->load->view("config_notificacoes/index"); ?>
                    <!--                    #div-geral-config-mudar-senha-->
                    <?= $this->load->view("config_mudar_senha/index"); ?>
                    <!--                    #div-geral-desativar-conta-->
                    <?= $this->load->view("config_desativar_conta/index"); ?>

                </div>
            </div>
        </div>
    </div>

</main>

<?= $this->load->view("footer/footer"); ?>

<script src="<?= URL_RAIZ() ?>application/assets/libs/js/jquery.min.js"></script>
<script src="<?= URL_RAIZ() ?>application/assets/libs/js/skills-search.js"></script>
<script src="<?= URL_RAIZ() ?>application/assets/libs/js/jquery.nice-select.js"></script>
<script src="<?= URL_RAIZ() ?>application/assets/libs/js/datepicker.min.js"></script>
<script src="<?= URL_RAIZ() ?>application/assets/libs/js/i18n/datepicker.en.js"></script>
<script src="<?= URL_RAIZ() ?>application/assets/libs/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= URL_RAIZ() ?>application/assets/libs/vendor/OwlCarousel/owl.carousel.js"></script>
<script src="<?= URL_RAIZ() ?>application/assets/libs/js/custom1.js"></script>
<script src="<?= URL_RAIZ() ?>application/assets/js/libs/jquery.mask.js"></script>
<script src="<?= URL_RAIZ() ?>application/assets/mascaras.js"></script>
<script src="<?= URL_RAIZ() ?>js/config/config.js"></script>

</body>

</html>