<div class="dash-tab-links" >
    <div class="container">
        <div class="row">
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
                <?= $this->load->view("pessoas/index"); ?>
            </div>
            <div class="col-lg-6 col-md-7">
                <div class="main-posts">

                    <div class="activity-posts">
                        <div class="activity-group1">
                            <div class="main-user-dts1">
                                <img src="<?= URL_RAIZ() ?>application/assets/libs/images/event-view/user-1.jpg" alt="">
                                <div class="user-text3">
                                    <h4><?= isset($data['nome'])?$data['nome']:""; ?></h4>
                                    <span>postado 5 minutos antes</span>
                                </div>
                            </div>
                            <div class="dot-option dropdown">
                                <span class="dropdown-toggle-no-caret" role="button" data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></span>
                                <div class="dropdown-menu post-rt-dropdown dropdown-menu-right">
                                    <a class="post-link-item" href="#">Ocultar</a>
                                    <a class="post-link-item" href="#">Editar</a>
                                    <a class="post-link-item" href="#">Excluir</a>
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
                                    <img src="<?= URL_RAIZ() ?>application/assets/libs/images/event-view/user-4.jpg" alt="">
                                    <div class="user-text3">
                                        <h4>Rock William > <?= isset($data['nome'])?$data['nome']:""; ?></h4>
                                        <span>posted an update a 3 min ago</span>
                                    </div>
                                </div>
                            </div>
                            <div class="activity-descp">
                                <p>Olá Admin feliz aniversário .</p>
                                <ul>
                                    <li><a href="#">Reply</a></li>
                                    <li><a href="#">Report</a></li>
                                    <li><a href="#">Delete</a></li>
                                </ul>
                            </div>
                            <div class="activity-post-reply">
                                <div class="areply-dp1">
                                    <img src="<?= URL_RAIZ() ?>application/assets/libs/images/event-view/user-1.jpg" alt="">
                                </div>
                                <form>
                                    <input class="areply-post" type="text" placeholder="Write a reply">
                                    <button class="areply-post-btn" type="submit">Reply</button>
                                </form>
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

        </div>
    </div>
</div>