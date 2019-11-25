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
<!-- Header Start -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-dark1 justify-content-sm-start">
                    <a class="order-1 order-lg-0 ml-lg-0 ml-3 mr-auto " href="index.html">
                        <a class="text-white" href="<?= site_url('Home/Logged') ?>"><b>atos</b></a>
                    <button class="navbar-toggler align-self-start" type="button">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end bg-dark1 p-3 p-lg-0 mt1-5 mt-lg-0 mobileMenu" id="navbarSupportedContent">
                        <ul class="navbar-nav align-self-stretch">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?= site_url('Home/Logged') ?>">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="discussions.html">Discussões</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="weather.html">Weather</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
                                    Páginas
                                </a>
                                <div class="dropdown-menu pages-dropdown">
                                    <a class="link-item" href="login.html">Login</a>
                                    <a class="link-item" href="register.html">Register</a>
                                    <a class="link-item" href="error_404.html">Error 404</a>
                                    <a class="link-item" href="categories.html">Categories</a>
                                    <a class="link-item" href="select_seats.html">Select Seats</a>
                                    <a class="link-item" href="find_friends.html">Find Friends</a>
                                    <a class="link-item" href="user_dashboard_activity.html">User Detail View</a>
                                    <a class="link-item" href="checkout.html">Checkout</a>
                                    <a class="link-item" href="confirmed_order.html">Confirmed Order</a>
                                    <a class="link-item" href="about.html">About</a>
                                    <a class="link-item" href="contact_us.html">Contact</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="our_blog.html">Blog</a>
                            </li>
                        </ul>
                        <a href="add_new_event.html" class="add-event"><i class="fas fa-plus"></i></a>
                    </div>
                    <ul class="group-icons">
                        <li><a href="search_result.html" class="icon-set"><i class="fas fa-search"></i></a></li>
                        <li class="dropdown">
                            <a href="#" class="icon-set dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
                                <i class="fas fa-user-plus"></i>
                            </a>
                            <div class="dropdown-menu user-request-dropdown dropdown-menu-right">
                                <div class="user-request-list">
                                    <div class="request-users">
                                        <div class="user-request-dt">
                                            <a href="#">
                                                <img src="<?= URL_RAIZ() ?>application/assets/libs/images/user-dp-1.jpg" alt="">
                                            </a>
                                            <a href="#" class="user-title">Jassica William</a>
                                        </div>
                                        <button class="accept-btn">Aceitar</button>
                                    </div>
                                </div>
                                <div class="user-request-list">
                                    <div class="request-users">
                                        <div class="user-request-dt">
                                            <a href="#">
                                                <img src="<?= URL_RAIZ() ?>application/assets/libs/images/user-dp-1.jpg" alt="">
                                            </a>
                                            <a href="#" class="user-title">Rock Smith</a>
                                        </div>
                                        <button class="accept-btn">Aceitar</button>
                                    </div>
                                </div>
                                <div class="user-request-list">
                                    <div class="request-users">
                                        <div class="user-request-dt">
                                            <a href="#">
                                                <img src="<?= URL_RAIZ() ?>application/assets/libs/images/user-dp-1.jpg" alt="">
                                            </a>
                                            <a href="#" class="user-title">Joy Doe</a>
                                        </div>
                                        <button class="accept-btn">Aceitar</button>
                                    </div>
                                </div>
                                <div class="user-request-list">
                                    <a href="my_dashboard_all_requests.html" class="view-all">Visualizar todos convites</a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="icon-set dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
                                <i class="fas fa-comment-dots"></i>
                            </a>
                            <div class="dropdown-menu message-dropdown dropdown-menu-right">
                                <div class="user-request-list">
                                    <div class="request-users">
                                        <div class="user-request-dt">
                                            <a href="#">
                                                <img src="<?= URL_RAIZ() ?>application/assets/libs/images/user-dp-1.jpg" alt="">
                                                <div class="user-title1">Jassica William </div>
                                                <span>Hey How are you John Doe...</span>
                                            </a>
                                        </div>
                                        <div class="time5">2 min ago</div>
                                    </div>
                                </div>
                                <div class="user-request-list">
                                    <div class="request-users">
                                        <div class="user-request-dt">
                                            <a href="#">
                                                <img src="<?= URL_RAIZ() ?>application/assets/libs/images/user-dp-1.jpg" alt="">
                                                <div class="user-title1">Rock Smith </div>
                                                <span>Interesting Event! I will join this...</span>
                                            </a>
                                        </div>
                                        <div class="time5">5 min ago</div>
                                    </div>
                                </div>
                                <div class="user-request-list">
                                    <div class="request-users">
                                        <div class="user-request-dt">
                                            <a href="#">
                                                <img src="<?= URL_RAIZ() ?>application/assets/libs/images/user-dp-1.jpg" alt="">
                                                <div class="user-title1">Joy Doe </div>
                                                <span>Hey Sir! What about you...</span>
                                            </a>
                                        </div>
                                        <div class="time5">10 min ago</div>
                                    </div>
                                </div>
                                <div class="user-request-list">
                                    <a href="my_dashboard_messages.html" class="view-all">Visualizar todas mensagens</a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="icon-set dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
                                <i class="fas fa-bell"></i>
                            </a>
                            <div class="dropdown-menu notification-dropdown dropdown-menu-right">
                                <div class="user-request-list">
                                    <div class="request-users">
                                        <div class="user-request-dt">
                                            <a href="#">
                                                <img src="<?= URL_RAIZ() ?>application/assets/libs/images/user-dp-1.jpg" alt="">
                                                <div class="user-title1">Jassica William </div>
                                                <span>comment on your video.</span>
                                            </a>
                                        </div>
                                        <div class="time5">2 min ago</div>
                                    </div>
                                </div>
                                <div class="user-request-list">
                                    <div class="request-users">
                                        <div class="user-request-dt">
                                            <a href="#">
                                                <img src="<?= URL_RAIZ() ?>application/assets/libs/images/user-dp-1.jpg" alt="">
                                                <div class="user-title1">Rock Smith</div>
                                                <span>your order is accepted.</span>
                                            </a>
                                        </div>
                                        <div class="time5">5 min ago</div>
                                    </div>
                                </div>
                                <div class="user-request-list">
                                    <div class="request-users">
                                        <div class="user-request-dt">
                                            <a href="#">
                                                <img src="<?= URL_RAIZ() ?>application/assets/libs/images/user-dp-1.jpg" alt="">
                                                <div class="user-title1">Joy Doe </div>
                                                <span>your bill slip sent on your email.</span>
                                            </a>
                                        </div>
                                        <div class="time5">10 min ago</div>
                                    </div>
                                </div>
                                <div class="user-request-list">
                                    <a href="my_dashboard_all_notifications.html" class="view-all">Visualizar todas notificações</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="account order-1 dropdown">
                        <a href="#" class="account-link dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
                            <div class="user-dp">
                                <img src="<?= URL_RAIZ() ?>application/assets/libs/images/dp.jpg" alt=""></div>
                            <span>Olá Luan</span>
                            <i class="fas fa-angle-down"></i>
                        </a>
                        <div class="dropdown-menu account-dropdown dropdown-menu-right">
                            <a class="link-item" href="my_dashboard_activity.html">Perfil</a>
                            <a class="link-item" href="my_dashboard_messages.html">Mensagens</a>
                            <a class="link-item" href="my_dashboard_booked_events.html">Eventos reservados</a>
                            <a class="link-item" href="my_dashboard_credits.html">Credito <span class="right-cm">$100</span></a>
                            <a class="link-item" href="invite.html">Convite</a>
                            <a class="link-item" href="my_dashboard_setting_info.html">Configurações</a>
                            <a class="link-item" href="<?= site_url('Home/logout') ?>">Sair</a>
                        </div>
                    </div>
                </nav>
                <div class="overlay"></div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->
<!-- Body Start -->
<main>
    <div class="main-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="main-left-sidebar">
                        <div class="user-data full-width">
                            <div class="user-profile">
                                <div class="username-dt dpbg-1">
                                    <div class="usr-pic">
                                        <img src="<?= URL_RAIZ() ?>application/assets/libs/images/homepage/left-side/profile-dp.jpg" alt="">
                                    </div>
                                </div>
                                <div class="user-main-details">
                                    <h4>John Doe</h4>
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
                                    <a href="my_dashboard_activity.html">Visualizar perfil</a>
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
                <div class="col-lg-6 col-md-7">
                    <div class="center-section">
                        <div class="main-search-bar">
                            <form>
                                <div class="main-search-inputs">
                                    <div class="row no-gutters">
                                        <div class="col-lg-11 col-md-12 col-sm-12">
                                            <input class="search-form-input" type="text" placeholder="Buscar">
                                        </div>
                                        <div class="col-lg-1 col-md-12 col-sm-12">
                                            <button class="search-btn" type="submit">
                                                <i class="fas fa-search"></i>
                                                <span>Search</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="main-tabs">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a href="#tab-upcoming" class="nav-link active" data-toggle="tab">Upcoming</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab-trending" class="nav-link" data-toggle="tab">Trending</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#tab-this-week" class="nav-link" data-toggle="tab">This Week</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-upcoming">
                                    <div class="main-posts">
                                        <div class="event-main-post">
                                            <div class="event-top">
                                                <div class="event-top-left">
                                                    <a href="event_detail_view.html"><h4>Nome de quem postou</h4></a>
                                                </div>
                                                <div class="event-top-right">
<!--                                                    <div class="ticket-price">Ticket Price : <span>$15</span></div>-->
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
                                                    <div class="post-buttons">
                                                        <div class="left-buttons">
                                                            <ul class="main-btns">
                                                                <li>
                                                                    <button class="main-btn-link" onclick="window.location.href = '#';">Buy Ticket</button>
                                                                </li>
                                                                <li>
                                                                    <button class="main-btn-link btn-hide" onclick="window.location.href = '#';">May Be</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="right-buttons">
                                                            <ul class="main-btns">
                                                                <li>
                                                                    <button class="main-btn-link btn-hide" onclick="window.location.href = '#';">450 Seats</button>
                                                                </li>
                                                                <li>
                                                                    <button class="main-btn-link btn-hide" onclick="window.location.href = '#';">Can't Go</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
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
                                <div class="tab-pane" id="tab-trending">
                                    <div class="main-posts">
                                        <div class="event-main-post">
                                            <div class="event-top">
                                                <div class="event-top-left">
                                                    <a href="event_detail_view.html"><h4>Event Title Here</h4></a>
                                                </div>
                                                <div class="event-top-right">
                                                    <div class="ticket-price">Ticket Price : <span>$15</span></div>
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
                                                    <img src="images/homepage/center/post-img-1.jpg" alt="">
                                                    <div class="treading">
                                                        <img src="images/homepage/center/trending.svg" alt="">
                                                    </div>
                                                    <div class="post-buttons">
                                                        <div class="left-buttons">
                                                            <ul class="main-btns">
                                                                <li><button class="main-btn-link" onclick="window.location.href = '#';">Buy Ticket</button></li>
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">May Be</button></li>
                                                            </ul>
                                                        </div>
                                                        <div class="right-buttons">
                                                            <ul class="main-btns">
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">450 Seats</button></li>
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">Can't Go</button></li>
                                                            </ul>
                                                        </div>
                                                    </div>
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
                                        <div class="event-main-post">
                                            <div class="event-top">
                                                <div class="event-top-left">
                                                    <a href="event_detail_view.html"><h4>Event Title Here</h4></a>
                                                </div>
                                                <div class="event-top-right">
                                                    <div class="ticket-price">Ticket Price : <span>$15</span></div>
                                                    <div class="post-dt-dropdown dropdown">
                                                        <span class="dropdown-toggle-no-caret" role="button" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></span>
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
                                                    <img src="images/homepage/center/post-img-2.jpg" alt="">
                                                    <div class="treading">
                                                        <img src="images/homepage/center/trending.svg" alt="">
                                                    </div>
                                                    <div class="post-buttons">
                                                        <div class="left-buttons">
                                                            <ul class="main-btns">
                                                                <li><button class="main-btn-link" onclick="window.location.href = '#';">Buy Ticket</button></li>
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">May Be</button></li>
                                                            </ul>
                                                        </div>
                                                        <div class="right-buttons">
                                                            <ul class="main-btns">
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">450 Seats</button></li>
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">Can't Go</button></li>
                                                            </ul>
                                                        </div>
                                                    </div>
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
                                        <div class="event-main-post">
                                            <div class="event-top">
                                                <div class="event-top-left">
                                                    <a href="event_detail_view.html"><h4>Event Title Here</h4></a>
                                                </div>
                                                <div class="event-top-right">
                                                    <div class="ticket-price">Ticket Price : <span>$15</span></div>
                                                    <div class="post-dt-dropdown dropdown">
                                                        <span class="dropdown-toggle-no-caret" role="button" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></span>
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
                                                    <img src="images/homepage/center/post-img-3.jpg" alt="">
                                                    <div class="treading">
                                                        <img src="images/homepage/center/trending.svg" alt="">
                                                    </div>
                                                    <div class="post-buttons">
                                                        <div class="left-buttons">
                                                            <ul class="main-btns">
                                                                <li><button class="main-btn-link" onclick="window.location.href = '#';">Buy Ticket</button></li>
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">May Be</button></li>
                                                            </ul>
                                                        </div>
                                                        <div class="right-buttons">
                                                            <ul class="main-btns">
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">450 Seats</button></li>
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">Can't Go</button></li>
                                                            </ul>
                                                        </div>
                                                    </div>
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
                                <div class="tab-pane" id="tab-this-week">
                                    <div class="main-posts">
                                        <div class="event-main-post">
                                            <div class="event-top">
                                                <div class="event-top-left">
                                                    <a href="event_detail_view.html"><h4>Event Title Here</h4></a>
                                                </div>
                                                <div class="event-top-right">
                                                    <div class="ticket-price">Ticket Price : <span>$15</span></div>
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
                                                    <img src="images/homepage/center/post-img-1.jpg" alt="">
                                                    <div class="post-buttons">
                                                        <div class="left-buttons">
                                                            <ul class="main-btns">
                                                                <li><button class="main-btn-link" onclick="window.location.href = '#';">Buy Ticket</button></li>
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">May Be</button></li>
                                                            </ul>
                                                        </div>
                                                        <div class="right-buttons">
                                                            <ul class="main-btns">
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">450 Seats</button></li>
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">Can't Go</button></li>
                                                            </ul>
                                                        </div>
                                                    </div>
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
                                        <div class="event-main-post">
                                            <div class="event-top">
                                                <div class="event-top-left">
                                                    <a href="event_detail_view.html"><h4>Event Title Here</h4></a>
                                                </div>
                                                <div class="event-top-right">
                                                    <div class="ticket-price">Ticket Price : <span>$15</span></div>
                                                    <div class="post-dt-dropdown dropdown">
                                                        <span class="dropdown-toggle-no-caret" role="button" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></span>
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
                                                    <img src="images/homepage/center/post-img-2.jpg" alt="">
                                                    <div class="post-buttons">
                                                        <div class="left-buttons">
                                                            <ul class="main-btns">
                                                                <li><button class="main-btn-link" onclick="window.location.href = '#';">Buy Ticket</button></li>
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">May Be</button></li>
                                                            </ul>
                                                        </div>
                                                        <div class="right-buttons">
                                                            <ul class="main-btns">
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">450 Seats</button></li>
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">Can't Go</button></li>
                                                            </ul>
                                                        </div>
                                                    </div>
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
                                        <div class="event-main-post">
                                            <div class="event-top">
                                                <div class="event-top-left">
                                                    <a href="event_detail_view.html"><h4>Event Title Here</h4></a>
                                                </div>
                                                <div class="event-top-right">
                                                    <div class="ticket-price">Ticket Price : <span>$15</span></div>
                                                    <div class="post-dt-dropdown dropdown">
                                                        <span class="dropdown-toggle-no-caret" role="button" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></span>
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
                                                    <img src="images/homepage/center/post-img-3.jpg" alt="">
                                                    <div class="post-buttons">
                                                        <div class="left-buttons">
                                                            <ul class="main-btns">
                                                                <li><button class="main-btn-link" onclick="window.location.href = '#';">Buy Ticket</button></li>
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">May Be</button></li>
                                                            </ul>
                                                        </div>
                                                        <div class="right-buttons">
                                                            <ul class="main-btns">
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">450 Seats</button></li>
                                                                <li><button class="main-btn-link btn-hide" onclick="window.location.href = '#';">Can't Go</button></li>
                                                            </ul>
                                                        </div>
                                                    </div>
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
                <div class="col-lg-3">
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
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="footer-left">
                    <ul>
                        <li><a href="privacy_policy.html">Privacidade</a></li>
                        <li><a href="term_conditions.html">Termos e condições</a></li>
                        <li><a href="about.html">Sobre</a></li>
                        <li><a href="contact_us.html">Contato</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="footer-right">
                    <ul class="copyright-text">
<!--                        <li><a href="index.html"><img src="--><?//= URL_RAIZ() ?><!--application/assets/libs/images/logo-2.svg" alt=""></a></li>-->
                        <li><div class="ftr-1"><i class="far fa-copyright"></i> 2019 Atos. Todos os direitos reservados.</div></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
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