<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>Goeveni - Invite Friends</title>

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

<body>
<!-- Header Start -->
<?= $this->load->view("menu/menu") ?>
<!-- Header End -->
<!-- Title Bar Start -->
<div class="title-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ol class="title-bar-text">
                    <li class="breadcrumb-item"><a href="<?= site_url('Home/Logged') ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Invite Friends</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Title Bar End -->
<!-- Body Start -->
<main class="discussion-mp">
    <div class="main-section">
        <div class="invite-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="invite-img">
                            <img src="<?= URL_RAIZ() ?>application/assets/libs/images/invite.svg" alt="">
                        </div>
                        <div class="invite-heading">
                            <h3>Convide seus amigos para o atos</h3>
                            <p>Escolha os seus melhores amigos para se inspirar.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-lg-6 col-sm-12">
                        <div class="Share-today">
                            <h4>Basta inserir um telefone celular ou E-mail</h4>
                            <div class="copylink">
                                <input type="text" class="copy-link-input" placeholder="Número de telefone ou E-mail">
                                <button class="copy-link-btn"><i class="far fa-copy"></i> Enviar</button>
                            </div>
                        </div>
                        <div class="Share--links">
                            <div class="social-acc1 text-center">
                                <div class="signup-scl-scc">
                                    <a href="#">
                                        <div class="link-block">
                                            <i class="fab fa-facebook-f facebook"></i>
                                        </div>
                                        <span>Facebook</span>
                                    </a>
                                    <a href="#">
                                        <div class="link-block">
                                            <i class="fab fa-twitter twitter"></i>
                                        </div>
                                        <span>Twitter</span>
                                    </a>
                                    <a href="#">
                                        <div class="link-block">
                                            <i class="fab fa-google google"></i>
                                        </div>
                                        <span>Google</span>
                                    </a>
                                    <a href="#">
                                        <div class="link-block">
                                            <i class="fab fa-linkedin-in linkedin"></i>
                                        </div>
                                        <span>LinkedIn</span>
                                    </a>
                                    <a href="#">
                                        <div class="link-block">
                                            <i class="fab fa-whatsapp whatsapp"></i>
                                        </div>
                                        <span>Whatsapp</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="how-its-work">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="work-heading">
                                <h2>Como funciona</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="works-1">
                                <div class="work-icon">
                                    <img src="<?= URL_RAIZ() ?>application/assets/libs/images/work-1.svg" alt="">
                                </div>
                                <h4>Número de telefone ou e-mail</h4>
                                <p>Insira o número de telefoe de seu amigo ou o E-mail.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="works-1">
                                <div class="work-icon">
                                    <img src="<?= URL_RAIZ() ?>application/assets/libs/images/work-2.svg" alt="">
                                </div>
                                <h4>Cadastro do amigo</h4>
                                <p>Seu amigo receberá um link onde efetuará o cadastro!</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="works-1">
                                <div class="work-icon">
                                    <img src="<?= URL_RAIZ() ?>application/assets/libs/images/work-2.svg" alt="">
                                </div>
                                <h4>Inspire-se</h4>
                                <p>Você e seu amigo já podem se conectar.</p>
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
<script src="<?= URL_RAIZ() ?>application/assets/libs/js/jquery.min.js"></script>
<script src="<?= URL_RAIZ() ?>application/assets/libs/js/skills-search.js"></script>
<script src="<?= URL_RAIZ() ?>application/assets/libs/js/jquery.nice-select.js"></script>
<script src="<?= URL_RAIZ() ?>application/assets/libs/js/datepicker.min.js"></script>
<script src="<?= URL_RAIZ() ?>application/assets/libs/js/i18n/datepicker.en.js"></script>
<script src="<?= URL_RAIZ() ?>application/assets/libs/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= URL_RAIZ() ?>application/assets/libs/vendor/OwlCarousel/owl.carousel.js"></script>
<script src="<?= URL_RAIZ() ?>application/assets/libs/js/custom1.js"></script>

</body>

</html>