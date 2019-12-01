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
    <link href="<?= URL_RAIZ() ?>application/assets/libs/vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">

</head>

<body>
<?= $this->load->view("menu/menu") ?>
<!-- Header End -->
<!-- Body Start -->
<main class="dashboard-mp" style="margin-top: 80px">
    <div class="dash-tab-links">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="my_dashboard_activity.html">Activity</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="my_dashboard_about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="my_dashboard_discussions.html">Discussions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="my_dashboard_events.html">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="my_dashboard_followers.html">Followers <span class="badge badge-alrts">20</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="my_dashboard_following.html">Following <span class="badge badge-alrts">20</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="my_dashboard_messages.html">Messages <span class="badge badge-alrts">2</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="my_dashboard_credits.html">Credits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="my_dashboard_booked_events.html">Booked Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="my_dashboard_history.html">History</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="my_dashboard_setting_info.html">Setting</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="booked-events mb-20">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="checkout-heading">
                            <h2>Configurações da conta</h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main style="margin-top: 80px" style="margin-top: 80px">
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