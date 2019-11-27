<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>Goeveni - My All Friend Requests</title>

    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="images/fav.png">

    <!-- Stylesheets -->
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
<main class="dashboard-mp">
    <div class="dash-todo-thumbnail-area1">
        <div class="todo-thumb1 dash-bg-image1 dash-bg-overlay" style="background-image:url(images/event-view/my-bg.jpg);"></div>
        <div class="dash-todo-header1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="my-profile-dash">
                            <div class="my-dp-dash">
                                <img src="images/my-dashboard/my-dp.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dash-dts">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="event-title">
                        <div class="my-dash-dt">
                            <h3>John Doe</h3>
                            <span>Member since August 2017</span>
                            <span><i class="fas fa-map-marker-alt"></i>India</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <ul class="right-details">
                        <li>
                            <div class="my-all-evnts">
                                <a href="my_dashboard_events.html">View Events</a>
                            </div>
                        </li>
                        <li>
                            <div class="all-dis-evnt">
                                <div class="dscun-txt">Events</div>
                                <div class="dscun-numbr">22</div>
                            </div>
                        </li>
                        <li>
                            <div class="all-dis-evnt">
                                <div class="dscun-txt">Discussions</div>
                                <div class="dscun-numbr">40</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
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
                            <a class="nav-link" href="my_dashboard_booked_events.html">Booked Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="my_dashboard_history.html">History</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="my_dashboard_setting_info.html">Setting</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="setting-page mb-20">
                <div class="row">
                    <div class="col-lg-3 col-md-5">
                        <div class="user-data full-width">
                            <div class="categories-left-heading">
                                <h3>Your Details</h3>
                            </div>
                            <div class="categories-items">
                                <a class="tab-item-1" href="my_dashboard_setting_info.html">Personal Info</a>
                                <a class="tab-item-1" href="my_dashboard_setting_profile.html">Profile</a>
                                <a class="tab-item-1 active" href="my_dashboard_all_requests.html">All Friend Requests</a>
                                <a class="tab-item-1" href="my_dashboard_all_notifications.html">All Notifications</a>
                                <a class="tab-item-1" href="my_dashboard_setting_social.html">Social Networks</a>
                                <a class="tab-item-1" href="my_dashboard_setting_email.html">Email Setting</a>
                                <a class="tab-item-1" href="my_dashboard_setting_notification.html">Notification Setting</a>
                                <a class="tab-item-1" href="my_dashboard_setting_change_pass.html">Change Password</a>
                                <a class="tab-item-1" href="my_dashboard_setting_delete_account.html">Deactivate Account</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-7">
                        <div class="setting-form">
                            <div class="user-data full-width mb-0">
                                <div class="about-left-heading">
                                    <h3>All Friend Requests</h3>
                                </div>
                                <div class="all-rqusts1">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="user-request-list">
                                                <div class="request-users">
                                                    <div class="user-request-dt">
                                                        <a href="#"><img src="images/user-dp-1.jpg" alt=""></a>
                                                        <a href="#" class="user-title">Jassica William</a>
                                                    </div>
                                                    <button class="accept-btn">Accept</button>
                                                </div>
                                            </div>
                                            <div class="user-request-list">
                                                <div class="request-users">
                                                    <div class="user-request-dt">
                                                        <a href="#"><img src="images/user-dp-1.jpg" alt=""></a>
                                                        <a href="#" class="user-title">Joginder Singh</a>
                                                    </div>
                                                    <button class="accept-btn">Accept</button>
                                                </div>
                                            </div>
                                            <div class="user-request-list">
                                                <div class="request-users">
                                                    <div class="user-request-dt">
                                                        <a href="#"><img src="images/user-dp-1.jpg" alt=""></a>
                                                        <a href="#" class="user-title">Rock Smith</a>
                                                    </div>
                                                    <button class="accept-btn">Accept</button>
                                                </div>
                                            </div>
                                            <div class="user-request-list">
                                                <div class="request-users">
                                                    <div class="user-request-dt">
                                                        <a href="#"><img src="images/user-dp-1.jpg" alt=""></a>
                                                        <a href="#" class="user-title">Poonam Verma</a>
                                                    </div>
                                                    <button class="accept-btn">Accept</button>
                                                </div>
                                            </div>
                                            <div class="user-request-list">
                                                <div class="request-users">
                                                    <div class="user-request-dt">
                                                        <a href="#"><img src="images/user-dp-1.jpg" alt=""></a>
                                                        <a href="#" class="user-title">Davinder Singh</a>
                                                    </div>
                                                    <button class="accept-btn">Accept</button>
                                                </div>
                                            </div>
                                            <div class="user-request-list">
                                                <div class="request-users">
                                                    <div class="user-request-dt">
                                                        <a href="#"><img src="images/user-dp-1.jpg" alt=""></a>
                                                        <a href="#" class="user-title">Lucy William</a>
                                                    </div>
                                                    <button class="accept-btn">Accept</button>
                                                </div>
                                            </div>
                                            <div class="user-request-list">
                                                <div class="request-users">
                                                    <div class="user-request-dt">
                                                        <a href="#"><img src="images/user-dp-1.jpg" alt=""></a>
                                                        <a href="#" class="user-title">Johnson Dua</a>
                                                    </div>
                                                    <button class="accept-btn">Accept</button>
                                                </div>
                                            </div><div class="user-request-list">
                                                <div class="request-users">
                                                    <div class="user-request-dt">
                                                        <a href="#"><img src="images/user-dp-1.jpg" alt=""></a>
                                                        <a href="#" class="user-title">Albert</a>
                                                    </div>
                                                    <button class="accept-btn">Accept</button>
                                                </div>
                                            </div><div class="user-request-list">
                                                <div class="request-users">
                                                    <div class="user-request-dt">
                                                        <a href="#"><img src="images/user-dp-1.jpg" alt=""></a>
                                                        <a href="#" class="user-title">Joy Dua</a>
                                                    </div>
                                                    <button class="accept-btn">Accept</button>
                                                </div>
                                            </div><div class="user-request-list">
                                                <div class="request-users">
                                                    <div class="user-request-dt">
                                                        <a href="#"><img src="images/user-dp-1.jpg" alt=""></a>
                                                        <a href="#" class="user-title">Zoena Singh</a>
                                                    </div>
                                                    <button class="accept-btn">Accept</button>
                                                </div>
                                            </div>
                                        </div>
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
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="footer-left">
                    <ul>
                        <li><a href="privacy_policy.html">Privacy</a></li>
                        <li><a href="term_conditions.html">Term and Conditions</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact_us.html">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="footer-right">
                    <ul class="copyright-text">
                        <li><a href="index.html"><img src="images/logo-2.svg" alt=""></a></li>
                        <li><div class="ftr-1"><i class="far fa-copyright"></i> 2019 Goeveni by <a href="https://themeforest.net/user/gambolthemes">Gambolthemes</a>. All Rights Reserved.</div></li>
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