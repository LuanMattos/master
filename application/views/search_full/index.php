<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>Goeveni - Search Results</title>

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
<main class="Search-results">
    <div class="main-section">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-4 col-md-12">
                    <div class="search-bar-main">
                        <input type="text" class="search-1" placeholder="Buscar">
                        <i class="fas fa-search srch-ic"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="all-search-filters">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-filters">
                            <div class="search-filters-left">
                                <div class="dropdown">
                                    <a href ="#" class="filter-d wt-mp dropdown-toggle-no-caret" role="button" data-toggle="dropdown">Category<i class="fas fa-angle-down"></i></a>
                                    <div class="dropdown-menu cate-dropdown">
                                        <a class="link-item" href="">Music</a>
                                        <a class="link-item" href="#">Festival</a>
                                        <a class="link-item" href="#">Art</a>
                                        <a class="link-item" href="#">Club</a>
                                        <a class="link-item" href="#">Comedy</a>
                                        <a class="link-item" href="#">Theatre</a>
                                        <a class="link-item" href="#">Promotions</a>
                                        <a class="link-item" href="#">Other</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a href ="" class="filter-d dropdown-toggle-no-caret" role="button" data-toggle="dropdown">Worldwide<i class="fas fa-angle-down"></i></a>
                                    <div class="dropdown-menu worldwide-dropdown">
                                        <div class="worldwide-form">
                                            <h6>Location</h6>
                                            <div class="worldwide-inputs">
                                                <form>
                                                    <div class="form-group">
                                                        <label>Country / Region*</label>
                                                        <div class="select-bg">
                                                            <select class="wide" style="display: none;">
                                                                <option>Select Country / Region*</option>
                                                                <option>India</option>
                                                                <option>USA</option>
                                                                <option>Canada</option>
                                                                <option>Australia</option>
                                                                <option>UK</option>
                                                                <option>Bangladesh</option>
                                                                <option>Nepal</option>
                                                                <option>Pakistan</option>
                                                                <option>Austria</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mc-top">
                                                        <input class="title-discussion-input" type="text" placeholder="City">
                                                    </div>
                                                    <button class="create-topic mt-4" type="submit">Apply</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="search-filters-right dropdown">
                                <a href ="" class="filter-d dropdown-toggle-no-caret" role="button" data-toggle="dropdown">All Dates<i class="fas fa-angle-down"></i> </a>
                                <div class="dropdown-menu date-dropdown dropdown-menu-right">
                                    <a class="link-item" href="">All Dates</a>
                                    <a class="link-item" href="#">Upcoming 30 Days</a>
                                    <a class="link-item" href="#">Upcoming 20 Days</a>
                                    <a class="link-item" href="#">Upcoming 15 Days</a>
                                    <a class="link-item" href="#">Upcoming 10 Days</a>
                                    <a class="link-item" href="#">Upcoming 5 Days</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="all-search-events">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
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
                    </div>
                    <div class="col-lg-6 col-md-6">
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
                    </div>
                    <div class="col-lg-6 col-md-6">
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
                    </div>
                    <div class="col-lg-6 col-md-6">
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
                                    <img src="images/homepage/center/post-img-4.jpg" alt="">
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
                    </div>
                    <div class="col-md-12">
                        <div class="main-loader search-loader">
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