<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>Cadastro - Atos</title>

    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="images/fav.png">

    <!-- Stylesheets -->
    <link href="<?= URL_RAIZ() ?>application/assets/libs/css/responsive.css" rel="stylesheet">
    <link href="<?= URL_RAIZ() ?>application/assets/libs/css/style.css" rel="stylesheet">
    <link href="<?= URL_RAIZ() ?>application/assets/libs/css/datepicker.min.css" rel="stylesheet">
    <link href="<?= URL_RAIZ() ?>application/assets/libs/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= URL_RAIZ() ?>application/assets/libs/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?= URL_RAIZ() ?>application/assets/libs/vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="<?= URL_RAIZ() ?>application/assets/libs/vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">

</head>

<body class="body-bg">
<!-- Body Start -->
<main class="register-mp">
    <div class="main-section">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    <div class="login-register-bg">
                        <div class="row no-gutters">
                            <div class="col-lg-6" style="background-color: #3a3e3e">
                                <div class="lg-left">
                                    <div class="lg-logo">
<!--                                        logo pequeno-->
                                    </div>
                                    <div class="lr-text">
                                        <h2>Registrar agora</h2>
                                        <p>Aqui você inspira, aqui você descobre.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6" >
                                <div class="lr-right">
                                    <h4>Primeiros passos</h4>
                                    <div class="login-register-form">
                                        <form action="<?= site_url('Home/acao_cadastro') ?>" method="POST">
                                            <div class="form-group">
                                                <input class="title-discussion-input" type="text" placeholder="Nome" name="nome"  autocomplete="off" v-model="form.nome">
                                            </div>
                                            <div class="text-left" style="color:red;font-size:12px;font-family: Roboto;">
                                                {{error.sobrenome}}
                                            </div>
                                            <div class="form-group">
                                                <input class="title-discussion-input" type="text" placeholder="Sobrenome" name="sobrenome"  autocomplete="off" v-model="form.sobrenome">
                                            </div>
                                            <div class="text-left" style="color:red;font-size:12px;font-family: Roboto;">
                                                {{error.sobrenome}}
                                            </div>
                                            <div class="form-group">
                                                <input class="title-discussion-input" type="email" placeholder="E-mail" name="email"  autocomplete="off" v-model="form.email">
                                            </div>
                                            <div class="text-left" style="color:red;font-size:12px;font-family: Roboto;">
                                                {{error.email}}
                                            </div>
                                            <div class="form-group">
                                                <input class="title-discussion-input  datepicker-here" type="text" placeholder="Data de nascimento"  data-language="pt-BR" name="datanasc" autocomplete="off" v-model="form.datanasc">
                                            </div>
                                            <div class="text-left" style="color:red;font-size:12px;font-family: Roboto;">
                                                {{error.datanasc}}
                                            </div>
                                            <div class="form-group" >
                                                <select name="telcodpais" >
                                                    <option value="55">Brasil (55)</option>
                                                </select>
                                                <input class="title-discussion-input phone_br"  type="text" placeholder="Tel. Cel" name="telcel" autocomplete="off" >
                                            </div>
                                            <div class="text-left" style="color:red;font-size:12px;font-family: Roboto;">
                                                {{error.telcel}}
                                            </div>
                                            <div class="form-group">
                                                <input class="title-discussion-input" type="password" placeholder="Senha" name="senhacadastro" autocomplete="off" v-model="form.senhacadastro">
                                            </div>
                                            <div class="text-left" style="color:red;font-size:12px;font-family: Roboto;">
                                                {{error.senhacadastro}}
                                            </div>
                                            <div class="form-group">
                                                <input class="title-discussion-input" type="password" placeholder="Rep. Senha" name="repsenha" autocomplete="off" v-model="form.repsenha">
                                            </div>
                                            <div class="text-left" style="color:red;font-size:12px;font-family: Roboto;">
                                                {{error.repsenha}}
                                            </div>
                                            <div class="rgstr-dt-txt">
                                                Antes de concluir o cadastro leia os <a href="#">Termos</a>, <a href="#">a politica de dados</a> e a <a href="#">política de Cookies</a>. Quando você confirmar o cadastro, receberá um sms/email para confirmação de conta.
                                            </div>
                                            <button class="login-btn" type="submit">Registrar agora</button>
                                            <div class="login-link">Já possui conta? <a href="<?= site_url('Home/index') ?>">Logar Agora</a></div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
<!-- Body End -->
<!-- Footer Start -->
<?= $this->load->view("footer/footer"); ?>
<!-- Footer End -->
<!-- Scripts js -->
<script src="<?= URL_RAIZ() ?>application/assets/js/libs/vue.js"></script>
<script src="<?= URL_RAIZ() ?>application/assets/libs/js/jquery.min.js"></script>
<script src="<?= URL_RAIZ() ?>application/assets/libs/js/skills-search.js"></script>
<script src="<?= URL_RAIZ() ?>application/assets/libs/js/jquery.nice-select.js"></script>
<script src="<?= URL_RAIZ() ?>application/assets/libs/js/datepicker.min.js"></script>
<script src="<?= URL_RAIZ() ?>application/assets/libs/js/i18n/datepicker.pt-BR.js"></script>
<script src="<?= URL_RAIZ() ?>application/assets/libs/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= URL_RAIZ() ?>application/assets/libs/vendor/OwlCarousel/owl.carousel.js"></script>
<script src="<?= URL_RAIZ() ?>application/assets/libs/js/custom1.js"></script>
<script src="<?= URL_RAIZ() ?>application/assets/js/libs/jquery.mask.js"></script>
<script src="<?= URL_RAIZ() ?>application/assets/mascaras.js"></script>
<script src="<?= URL_RAIZ() ?>application/assets/js.js"></script>
<script src="<?= URL_RAIZ() ?>js/index.js"></script>

</body>

</html>