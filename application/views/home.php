<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>Atos - Home</title>

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

<?php   if(isset($dados)):
    $data = $dados;
else:
    $data = [];
endif;

?>
<?= $this->load->view("menu/menu",compact("data")); ?>
<main class="dashboard-mp " style="margin-top: 80px">
    <div class="main-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="main-left-sidebar">
                        <div class="user-data full-width">
                            <div class="user-profile">
                                <div class="username-dt dpbg-1">
                                    <div class="usr-pic cursor-pointer">
                                        <img src="<?= URL_RAIZ() ?>application/assets/libs/images/homepage/left-side/profile-dp.jpg" alt="">
                                    </div>
                                </div>
                                <div class="user-main-details">
                                    <h4><?= isset($nome)?$nome:""; ?></h4>
                                    <span>
                                        <i class="fas fa-map-marker-alt"></i>India
                                    </span>
                                </div>
                                <ul class="followers-dts">
                                    <li>
                                        <div class="followers-dt-sm">
                                            <h4>Seguidores</h4>
                                            <span>155</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="followers-dt-sm">
                                            <h4>Seguindo</h4>
                                            <span>355</span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="profile-link">
                                    <a href="<?= site_url('Home/dashboard_activity') ?>">Visualizar perfil</a>
                                </div>
                            </div>
                        </div>
                        <div class="user-data full-width">
                            <div class="categories-left-heading">
                                <h3>Categories</h3>
                            </div>
                            <div class="categories-items">
                                <a class="category-item" href="#"><i class="fas fa-music"></i>Músicas</a>
                                <a class="category-item" href="#"><i class="fas fa-flag"></i>Festival</a>
                                <a class="category-item" href="#"><i class="fas fa-pen-nib"></i>Arte</a>
                                <a class="category-item" href="#"><i class="fas fa-microphone-alt"></i>Clube</a>
                                <a class="category-item" href="#"><i class="fas fa-grin-squint-tears"></i>Comedia</a>
                                <a class="category-item" href="#"><i class="far fa-futbol"></i>Esportes</a>
                                <a class="category-item" href="#"><i class="fas fa-video"></i>Teatro</a>
                                <a class="category-item" href="#"><i class="fas fa-bullhorn"></i>Promoções</a>
                                <a class="category-item" href="#"><i class="fas fa-ellipsis-h"></i>Outros</a>
                            </div>
                        </div>
                        <div class="user-data full-width">
                            <div class="categories-left-heading">
                                <h3>Pessoas</h3>
                            </div>
                            <div class="sugguest-user">
                                <div class="sugguest-user-dt">
                                    <a href="user_dashboard_activity.html">
                                        <img src="<?= URL_RAIZ() ?>application/assets/libs/images/homepage/left-side/left-img-1.jpg" alt=""></a>
                                    <a href="user_dashboard_activity.html"><h4>Johnson</h4></a>
                                </div>
                                <button class="request-btn"><i class="fas fa-user-plus"></i></button>
                            </div>
                            <div class="sugguest-user">
                                <div class="sugguest-user-dt">
                                    <a href="user_dashboard_activity.html">
                                        <img src="<?= URL_RAIZ() ?>application/assets/libs/images/homepage/left-side/left-img-2.jpg" alt=""></a>
                                    <a href="user_dashboard_activity.html"><h4>Jassica William</h4></a>
                                </div>
                                <button class="request-btn"><i class="fas fa-user-plus"></i></button>
                            </div>
                            <div class="sugguest-user">
                                <div class="sugguest-user-dt">
                                    <a href="user_dashboard_activity.html">
                                        <img src="<?= URL_RAIZ() ?>application/assets/libs/images/homepage/left-side/left-img-3.jpg" alt=""></a>
                                    <a href="user_dashboard_activity.html"><h4>Rock</h4></a>
                                </div>
                                <button class="request-btn"><i class="fas fa-user-plus"></i></button>
                            </div>
                            <div class="sugguest-user">
                                <div class="sugguest-user-dt">
                                    <a href="user_dashboard_activity.html">
                                        <img src="<?= URL_RAIZ() ?>application/assets/libs/images/homepage/left-side/left-img-4.jpg" alt=""></a>
                                    <a href="user_dashboard_activity.html"><h4>Davil Smith</h4></a>
                                </div>
                                <button class="request-btn"><i class="fas fa-user-plus"></i></button>
                            </div>
                            <div class="sugguest-user">
                                <div class="sugguest-user-dt">
                                    <a href="user_dashboard_activity.html">
                                        <img src="<?= URL_RAIZ() ?>application/assets/libs/images/homepage/left-side/left-img-5.jpg" alt=""></a>
                                    <a href="user_dashboard_activity.html"><h4>Ricky Doe</h4></a>
                                </div>
                                <button class="request-btn"><i class="fas fa-user-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-7 mt-20">
                    <div class="center-section">
                        <div class="main-tabs">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-upcoming">
                                    <div class="main-posts">
                                        <div class="event-main-post">
                                            <div class="event-top">
                                                <?= $this->load->view("search/index"); ?>
                                                <div class="event-top-left">
                                                    <a href="event_detail_view.html"><h4>Nome de quem postou</h4></a>
                                                </div>
                                                <div class="event-top-right">
                                                    <div class="post-dt-dropdown dropdown">
                                                        <span class="dropdown-toggle-no-caret"  role="button" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></span>
                                                        <div class="dropdown-menu post-rt-dropdown dropdown-menu-right">
                                                            <a class="post-link-item" href="#">Hide</a>
                                                            <a class="post-link-item" href="#">Details</a>
                                                            <a class="post-link-item" href="#">User Profile</a>
                                                            <a class="post-link-item" href="#">Report</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="event-main-image">
                                                <div class="main-photo">
                                                    <div class="photo-overlay"></div>
                                                    <img src="<?= URL_RAIZ() ?>application/assets/libs/images/homepage/center/post-img-1.jpg" alt="">
<!--                                                    <div class="post-buttons">-->
<!--                                                        <div class="left-buttons">-->
<!--                                                            <ul class="main-btns">-->
<!--                                                                <li>-->
<!--                                                                    <button class="main-btn-link" onclick="window.location.href = '#';">Buy Ticket</button>-->
<!--                                                                </li>-->
<!--                                                                <li>-->
<!--                                                                    <button class="main-btn-link btn-hide" onclick="window.location.href = '#';">May Be</button>-->
<!--                                                                </li>-->
<!--                                                            </ul>-->
<!--                                                        </div>-->
<!--                                                        <div class="right-buttons">-->
<!--                                                            <ul class="main-btns">-->
<!--                                                                <li>-->
<!--                                                                    <button class="main-btn-link btn-hide" onclick="window.location.href = '#';">450 Seats</button>-->
<!--                                                                </li>-->
<!--                                                                <li>-->
<!--                                                                    <button class="main-btn-link btn-hide" onclick="window.location.href = '#';">Can't Go</button>-->
<!--                                                                </li>-->
<!--                                                            </ul>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
                                                </div>
                                            </div>
                                            <div class="event-city-dt">
                                                <ul class="city-dt-list">
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                            <div class="list-text-dt">
                                                                <span>City</span>
                                                                <ins>London</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-calendar-alt"></i>
                                                            <div class="list-text-dt">
                                                                <span>Date</span>
                                                                <ins>21 Nov 2019</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-clock"></i>
                                                            <div class="list-text-dt">
                                                                <span>Time</span>
                                                                <ins>6 PM to 9 PM</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-cloud-sun"></i>
                                                            <div class="list-text-dt">
                                                                <span>Weather</span>
                                                                <ins>Clear</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="event-go-dt">
                                                <ul class="go-dt-list">
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-check" style="color:#a7a8aa;"></i>
                                                            <div class="list-text-dt">
                                                                <span>Going</span>
                                                                <ins>45</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-question-circle" style="color:#a7a8aa;"></i>
                                                            <div class="list-text-dt">
                                                                <span>MayBe</span>
                                                                <ins>120</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="it-items">
                                                            <i class="fas fa-times" style="color:#a7a8aa;"></i>
                                                            <div class="list-text-dt">
                                                                <span>Can't Go</span>
                                                                <ins>70</ins>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="like-comments">
                                                <div class="left-comments">
                                                    <a href="#" class="like-item" title="Like">
                                                        <i class="fas fa-heart"></i>
                                                        <span><ins>Like</ins> 251</span>
                                                    </a>
                                                    <a href="#" class="like-item lc-left" title="Comment">
                                                        <i class="fas fa-comment-alt"></i>
                                                        <span><ins>Comment</ins> 10</span>
                                                    </a>
                                                </div>
                                                <div class="right-comments">
                                                    <a href="#" class="like-item" title="Share">
                                                        <i class="fas fa-share-alt"></i>
                                                        <span><ins>Share</ins> 21</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="main-loader">
                                            <div class="spinner">
                                                <div class="bounce1"></div>
                                                <div class="bounce2"></div>
                                                <div class="bounce3"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-3 mt-20">
                    <div class="right-side-items">
                        <div class="post-event">
                            <h6>Crie aqui seus eventos</h6>
                            <p>Publique aqui seus eventos compartilhando com todos seus amigos.</p>
                            <a href="add_new_event.html" class="add-nw-event">Postar agora</a>
                        </div>
                        <div class="explore-events">
<!--                            <h4>Anúncios</h4>-->
<!--                            <ul class="explore-events-dt">-->
<!--                                <li>-->
<!--                                    <a href="#">-->
<!--                                        <div class="explore-card exp-right light-blue">-->
<!--                                            <div class="explore-item-1">-->
<!--                                                <div class="explore-icon-bg icon-large-1">-->
<!--                                                    <i class="fas fa-sun"></i>-->
<!--                                                </div>-->
<!--                                                <div class="explore-content">-->
<!--                                                    <i class="fas fa-sun"></i>-->
<!--                                                    <span>Today</span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#">-->
<!--                                        <div class="explore-card exp-left light-yellow">-->
<!--                                            <div class="explore-item-1">-->
<!--                                                <div class="explore-icon-bg icon-large-1">-->
<!--                                                    <i class="fas fa-cloud-sun"></i>-->
<!--                                                </div>-->
<!--                                                <div class="explore-content">-->
<!--                                                    <i class="fas fa-cloud-sun"></i>-->
<!--                                                    <span>Tomorrow</span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#">-->
<!--                                        <div class="explore-card exp-right dark-blue">-->
<!--                                            <div class="explore-item-1">-->
<!--                                                <div class="explore-icon-bg icon-large-1">-->
<!--                                                    <i class="fas fa-calendar-alt"></i>-->
<!--                                                </div>-->
<!--                                                <div class="explore-content">-->
<!--                                                    <i class="fas fa-calendar-alt"></i>-->
<!--                                                    <span>This Week</span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#">-->
<!--                                        <div class="explore-card exp-left light-green">-->
<!--                                            <div class="explore-item-1">-->
<!--                                                <div class="explore-icon-bg icon-large-1">-->
<!--                                                    <i class="fas fa-calendar-check"></i>-->
<!--                                                </div>-->
<!--                                                <div class="explore-content">-->
<!--                                                    <i class="fas fa-calendar-check"></i>-->
<!--                                                    <span>Choose Date</span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                            </ul>-->
                        </div>
<!--                        <div class="w-weather">-->
<!--                            <div class="weather-left">-->
<!--                                <div class="weather-city">Ludhiana</div>-->
<!--                                <div class="week-text">Monday</div>-->
<!--                                <div class="week-text">14 Oct 2019</div>-->
<!--                                <div class="week-text" style="font-size: 18px;"><i class="fas fa-tint"></i> 30%</div>-->
<!--                                <ul>-->
<!--                                    <li>-->
<!--                                        <div class="up-down"><i class="fas fa-long-arrow-alt-up"></i> 18°</div>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <div class="up-down"><i class="fas fa-long-arrow-alt-down"></i> 25°</div>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="weather-right">-->
<!--                                <i class="fas fa-cloud-sun"></i>-->
<!--                                <span>22°</span>-->
<!--                            </div>-->
<!--                            <ul class="weekly-weather">-->
<!--                                <li>-->
<!--                                    <div class="degree-text">32°</div>-->
<!--                                    <div class="weather-icon"><i class="fas fa-sun"></i></div>-->
<!--                                    <div class="day-text">Tue</div>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <div class="degree-text">19°</div>-->
<!--                                    <div class="weather-icon"><i class="fas fa-cloud-sun-rain"></i></div>-->
<!--                                    <div class="day-text">Wed</div>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <div class="degree-text">32°</div>-->
<!--                                    <div class="weather-icon"><i class="fas fa-cloud-sun"></i></div>-->
<!--                                    <div class="day-text">Thu</div>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <div class="degree-text">27°</div>-->
<!--                                    <div class="weather-icon"><i class="fas fa-wind"></i></div>-->
<!--                                    <div class="day-text">Fri</div>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <div class="degree-text">22°</div>-->
<!--                                    <div class="weather-icon"><i class="fas fa-cloud-showers-heavy"></i></div>-->
<!--                                    <div class="day-text">Sat</div>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <div class="degree-text">12°</div>-->
<!--                                    <div class="weather-icon"><i class="fas fa-snowflake"></i></div>-->
<!--                                    <div class="day-text">Sun</div>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                        <div class="news-data full-width">-->
<!--                            <div class="categories-left-heading">-->
<!--                                <h3>News</h3>-->
<!--                            </div>-->
<!--                            <div class="categories-items">-->
<!--                                <div class="news-item">-->
<!--                                    <div class="news-item-heading">-->
<!--                                        <i class="fas fa-music"></i>-->
<!--                                        <h6>Music</h6>-->
<!--                                    </div>-->
<!--                                    <div class="news-description">-->
<!--                                        Suspendisse cursus egestas luctus. <a href="#">Http://website.com/news</a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="news-item">-->
<!--                                    <div class="news-item-heading">-->
<!--                                        <i class="fas fa-pen-nib"></i>-->
<!--                                        <h6>Art</h6>-->
<!--                                    </div>-->
<!--                                    <div class="news-description">-->
<!--                                        Suspendisse cursus egestas luctus. <a href="#">Http://website.com/news</a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="news-item">-->
<!--                                    <div class="news-item-heading">-->
<!--                                        <i class="far fa-futbol"></i>-->
<!--                                        <h6>Sports</h6>-->
<!--                                    </div>-->
<!--                                    <div class="news-description">-->
<!--                                        Suspendisse cursus egestas luctus. <a href="#">Http://website.com/news</a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
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
<script src="<?= URL_RAIZ() ?>application/assets/js/libs/vue.js"></script>
<script src="<?= URL_RAIZ() ?>js/home/home.js"></script>


</body>

</html>