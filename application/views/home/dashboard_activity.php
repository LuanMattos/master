<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>Goeveni - My Dashbaord Activity</title>

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
<?= $this->load->view("menu/menu"); ?>
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
                            <span>
                                <i class="fas fa-map-marker-alt"></i>India</span>
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
                            <a class="nav-link active" href="my_dashboard_activity.html">Activity</a>
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
                            <a class="nav-link" href="my_dashboard_setting_info.html">Setting</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-5">
                    <div class="user-data full-width">
                        <div class="categories-left-heading">
                            <h3>Social Accounts</h3>
                        </div>
                        <div class="categories-items">
                            <a class="category-social-item" href="#"><i class="fas fa-globe" style="color:#51a5fb;"></i>www.example.com</a>
                            <a class="category-social-item" href="#"><i class="fab fa-facebook-square" style="color:#3b5998;"></i>http://www.facebook.com</a>
                            <a class="category-social-item" href="#"><i class="fab fa-twitter" style="color:#1da1f2;"></i>http://www.twitter.com</a>
                            <a class="category-social-item" href="#"><i class="fab fa-google-plus" style="color:#dd4b39;"></i>http://www.googleplus.com</a>
                            <a class="category-social-item" href="#"><i class="fab fa-instagram" style="color:#405de6;"></i>http://www.instagram.com</a>
                            <a class="category-social-item" href="#"><i class="fab fa-pinterest" style="color:#bd081c;"></i>http://www.pinterest.com</a>
                            <a class="category-social-item" href="#"><i class="fab fa-linkedin" style="color:#0077b5;"></i>http://www.linkedin.com</a>
                            <a class="category-social-item" href="#"><i class="fab fa-youtube" style="color:#ff0000;"></i>http://www.youtube.com/</a>
                        </div>
                    </div>
                    <div class="user-data full-width">
                        <div class="categories-left-heading">
                            <h3>People Viewed Profile</h3>
                        </div>
                        <div class="sugguest-user">
                            <div class="sugguest-user-dt">
                                <a href="#"><img src="<?= URL_RAIZ() ?>application/assets/libs/images/homepage/left-side/left-img-1.jpg" alt=""></a>
                                <a href="#"><h4>Johnson</h4></a>
                            </div>
                            <button class="request-btn"><i class="fas fa-user-plus"></i></button>
                        </div>
                        <div class="sugguest-user">
                            <div class="sugguest-user-dt">
                                <a href="#"><img src="<?= URL_RAIZ() ?>application/assets/libs/images/homepage/left-side/left-img-2.jpg" alt=""></a>
                                <a href="#"><h4>Jassica William</h4></a>
                            </div>
                            <button class="request-btn"><i class="fas fa-user-plus"></i></button>
                        </div>
                        <div class="sugguest-user">
                            <div class="sugguest-user-dt">
                                <a href="#"><img src="images/homepage/left-side/left-img-3.jpg" alt=""></a>
                                <a href="#"><h4>Rock</h4></a>
                            </div>
                            <button class="request-btn"><i class="fas fa-user-plus"></i></button>
                        </div>
                        <div class="sugguest-user">
                            <div class="sugguest-user-dt">
                                <a href="#"><img src="images/homepage/left-side/left-img-4.jpg" alt=""></a>
                                <a href="#"><h4>Davil Smith</h4></a>
                            </div>
                            <button class="request-btn"><i class="fas fa-user-plus"></i></button>
                        </div>
                        <div class="sugguest-user">
                            <div class="sugguest-user-dt">
                                <a href="#"><img src="images/homepage/left-side/left-img-5.jpg" alt=""></a>
                                <a href="#"><h4>Ricky Doe</h4></a>
                            </div>
                            <button class="request-btn"><i class="fas fa-user-plus"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="main-posts">
                        <div class="add-activity">
                            <div class="activity-group">
                                <div class="maine-activity-img">
                                    <img src="images/event-view/user-1.jpg" alt="">
                                </div>
                                <textarea class="add-activity-des" placeholder="What is new, John Doe?"></textarea>
                            </div>
                            <div class="activity-button">
                                <button class="act-btn-post" type="submit">Upload Activity</button>
                            </div>
                        </div>
                        <div class="activity-posts">
                            <div class="activity-group1">
                                <div class="main-user-dts1">
                                    <img src="images/event-view/user-1.jpg" alt="">
                                    <div class="user-text3">
                                        <h4>John Doe</h4>
                                        <span>posted an update a 5 min ago</span>
                                    </div>
                                </div>
                                <div class="dot-option dropdown">
                                    <span class="dropdown-toggle-no-caret" role="button" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></span>
                                    <div class="dropdown-menu post-rt-dropdown dropdown-menu-right">
                                        <a class="post-link-item" href="#">Hide</a>
                                        <a class="post-link-item" href="#">Edit</a>
                                        <a class="post-link-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="activity-descp">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet, dolor ut mollis rutrum, mauris arcu mollis lacus, eget imperdiet neque neque eget nisl.</p>
                            </div>
                            <div class="like-comment-view">
                                <div class="left-comments">
                                    <a href="#" class="like-item" title="Like">
                                        <i class="fas fa-heart"></i>
                                        <span><ins>Like</ins> 251</span>
                                    </a>
                                    <a href="#" class="like-item lc-left" title="Comment">
                                        <i class="fas fa-comment-alt"></i>
                                        <span><ins>Comment</ins> 1</span>
                                    </a>
                                </div>
                                <div class="right-comments">
                                    <a href="#" class="like-item" title="Share">
                                        <i class="fas fa-eye"></i>
                                        <span><ins>View</ins> 351</span>
                                    </a>
                                </div>
                            </div>
                            <div class="activity-reply">
                                <div class="activity-group1">
                                    <div class="main-user-dts1">
                                        <img src="images/event-view/user-4.jpg" alt="">
                                        <div class="user-text3">
                                            <h4>Rock William</h4>
                                            <span>posted an update a 3 min ago</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="activity-descp">
                                    <p>Praesent laoreet, dolor ut mollis rutrum, mauris arcu mollis lacus.</p>
                                    <ul>
                                        <li><a href="#">Reply</a></li>
                                        <li><a href="#">Report</a></li>
                                        <li><a href="#">Delete</a></li>
                                    </ul>
                                </div>
                                <div class="activity-post-reply">
                                    <div class="areply-dp1">
                                        <img src="images/event-view/user-1.jpg" alt="">
                                    </div>
                                    <form>
                                        <input class="areply-post" type="text" placeholder="Write a reply">
                                        <button class="areply-post-btn" type="submit">Reply</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="activity-posts">
                            <div class="activity-group1">
                                <div class="main-user-dts1">
                                    <img src="images/event-view/user-1.jpg" alt="">
                                    <div class="user-text3">
                                        <h4>John Doe</h4>
                                        <span>posted an update a 8 min ago</span>
                                    </div>
                                </div>
                                <div class="dot-option dropdown">
                                    <span class="dropdown-toggle-no-caret" role="button" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></span>
                                    <div class="dropdown-menu post-rt-dropdown dropdown-menu-right">
                                        <a class="post-link-item" href="#">Hide</a>
                                        <a class="post-link-item" href="#">Edit</a>
                                        <a class="post-link-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="activity-descp">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet, dolor ut mollis rutrum, mauris arcu mollis lacus, eget imperdiet neque neque eget nisl.</p>
                            </div>
                            <div class="like-comment-view">
                                <div class="left-comments">
                                    <a href="#" class="like-item" title="Like">
                                        <i class="fas fa-heart"></i>
                                        <span><ins>Like</ins> 5</span>
                                    </a>
                                    <a href="#" class="like-item lc-left" title="Comment">
                                        <i class="fas fa-comment-alt"></i>
                                        <span><ins>Comment</ins> 0</span>
                                    </a>
                                </div>
                                <div class="right-comments">
                                    <a href="#" class="like-item" title="Share">
                                        <i class="fas fa-eye"></i>
                                        <span><ins>View</ins> 11</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="activity-posts">
                            <div class="activity-group1">
                                <div class="main-user-dts1">
                                    <img src="images/event-view/user-1.jpg" alt="">
                                    <div class="user-text3">
                                        <h4>John Doe</h4>
                                        <span>posted an update a 8 min ago</span>
                                    </div>
                                </div>
                                <div class="dot-option dropdown">
                                    <span class="dropdown-toggle-no-caret" role="button" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></span>
                                    <div class="dropdown-menu post-rt-dropdown dropdown-menu-right">
                                        <a class="post-link-item" href="#">Hide</a>
                                        <a class="post-link-item" href="#">Edit</a>
                                        <a class="post-link-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="activity-descp">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent laoreet, dolor ut mollis rutrum, mauris arcu mollis lacus, eget imperdiet neque neque eget nisl.</p>
                            </div>
                            <div class="like-comment-view">
                                <div class="left-comments">
                                    <a href="#" class="like-item" title="Like">
                                        <i class="fas fa-heart"></i>
                                        <span><ins>Like</ins> 6</span>
                                    </a>
                                    <a href="#" class="like-item lc-left" title="Comment">
                                        <i class="fas fa-comment-alt"></i>
                                        <span><ins>Comment</ins> 0</span>
                                    </a>
                                </div>
                                <div class="right-comments">
                                    <a href="#" class="like-item" title="Share">
                                        <i class="fas fa-eye"></i>
                                        <span><ins>View</ins> 15</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="main-loader mb-50">
                            <div class="spinner">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="post-event">
                        <h6>Want to Post Your Event</h6>
                        <p>Post your event on Goeveni for free. Just make an account and add it through the simple form. As simple as that.</p>
                        <a href="add_new_event.html" class="add-nw-event">Post It Now</a>
                    </div>
                    <div class="w-weather mp-30">
                        <div class="weather-left">
                            <div class="weather-city">Ludhiana</div>
                            <div class="week-text">Monday</div>
                            <div class="week-text">14 Oct 2019</div>
                            <div class="week-text" style="font-size: 18px;"><i class="fas fa-tint"></i> 30%</div>
                            <ul>
                                <li>
                                    <div class="up-down"><i class="fas fa-long-arrow-alt-up"></i> 18°</div>
                                </li>
                                <li>
                                    <div class="up-down"><i class="fas fa-long-arrow-alt-down"></i> 25°</div>
                                </li>
                            </ul>
                        </div>
                        <div class="weather-right">
                            <i class="fas fa-cloud-sun"></i>
                            <span>22°</span>
                        </div>
                        <ul class="weekly-weather">
                            <li>
                                <div class="degree-text">32°</div>
                                <div class="weather-icon"><i class="fas fa-sun"></i></div>
                                <div class="day-text">Tue</div>
                            </li>
                            <li>
                                <div class="degree-text">19°</div>
                                <div class="weather-icon"><i class="fas fa-cloud-sun-rain"></i></div>
                                <div class="day-text">Wed</div>
                            </li>
                            <li>
                                <div class="degree-text">32°</div>
                                <div class="weather-icon"><i class="fas fa-cloud-sun"></i></div>
                                <div class="day-text">Thu</div>
                            </li>
                            <li>
                                <div class="degree-text">27°</div>
                                <div class="weather-icon"><i class="fas fa-wind"></i></div>
                                <div class="day-text">Fri</div>
                            </li>
                            <li>
                                <div class="degree-text">22°</div>
                                <div class="weather-icon"><i class="fas fa-cloud-showers-heavy"></i></div>
                                <div class="day-text">Sat</div>
                            </li>
                            <li>
                                <div class="degree-text">12°</div>
                                <div class="weather-icon"><i class="fas fa-snowflake"></i></div>
                                <div class="day-text">Sun</div>
                            </li>
                        </ul>
                    </div>
                    <div class="news-data-dash full-width">
                        <div class="categories-left-heading">
                            <h3>News</h3>
                        </div>
                        <div class="categories-items">
                            <div class="news-item">
                                <div class="news-item-heading">
                                    <i class="fas fa-music"></i>
                                    <h6>Music</h6>
                                </div>
                                <div class="news-description">
                                    Suspendisse cursus egestas luctus. <a href="#">Http://website.com/news</a>
                                </div>
                            </div>
                            <div class="news-item">
                                <div class="news-item-heading">
                                    <i class="fas fa-pen-nib"></i>
                                    <h6>Art</h6>
                                </div>
                                <div class="news-description">
                                    Suspendisse cursus egestas luctus. <a href="#">Http://website.com/news</a>
                                </div>
                            </div>
                            <div class="news-item">
                                <div class="news-item-heading">
                                    <i class="far fa-futbol"></i>
                                    <h6>Sports</h6>
                                </div>
                                <div class="news-description">
                                    Suspendisse cursus egestas luctus. <a href="#">Http://website.com/news</a>
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