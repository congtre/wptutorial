<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WP Tutorial</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/style.css">
</head>
<body>
    <div class="wrapper">
        <!-- ↓↓ headear ↓↓ -->
        <header class="header">
            <div class="header__wrap">
                <h1 class="header__logo">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/header-logo.png" alt="">
                    </a>
                </h1>
                <nav class="header__nav">
                    <ul class="header__menu">
                        <li class="header__menu-item">
                            <a href="#" class="header__item-link">Trang chủ</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="#" class="header__item-link">Dự án</a>
                            <ul class="header__menu-sub">
                                <li class="header__menu-item">
                                    <a href="#" class="header__item-link">Nhà phố</a>
                                </li>
                                <li class="header__menu-item">
                                    <a href="#" class="header__item-link">Căn hộ chung cư</a>
                                </li>
                            </ul>
                        </li>
                        <li class="header__menu-item">
                            <a href="#" class="header__item-link">Tin tức</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="#" class="header__item-link">Liên hệ</a>
                        </li>
                    </ul>
                </nav>
                <div class="hamburger">
                    <span></span>
                </div>
            </div>
        </header>
        <!-- ↑↑ headear ↑↑ -->
        <!-- ↓↓ main ↓↓ -->
        <main class="main">
            <!-- ↓↓ visual ↓↓ -->
            <section class="home-visual">
                <div class="container">
                    <h2 class="home-visual__heading">Website số 1 về bất động sản<br>Mua, bán, cho thuê nhà đất toàn quốc</h2>
                    <div class="home-visual__search">
                        
                    </div>
                </div>
            </section>
            <!-- ↑↑ visual ↑↑ -->

            <!-- ↓↓ project ↓↓ -->
            <section class="home-project">
                <div class="container">
                    <h2 class="c-heading">Dự án nổi bật</h2>
                    <div class="home-project__list">
                        <div class="home-project__item">
                            <div class="home-project__image">
                                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/img_project.jpg" alt="">
                                <span class="home-project__image-number">7</span>
                            </div>
                            <div class="home-project__info">
                                <p class="home-project__cate"></p>
                                <p class="home-project__title"></p>
                                <p class="home-project__address"></p>
                                <ul class="home-project__ultity">
                                    <li class="home-project__ultity-item"></li>
                                </ul>
                                <p class="home-project__time"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ↑↑ project ↑↑ -->

            <!-- ↓↓ category ↓↓ -->
            <section class="home-category">
                <div class="container"></div>
            </section>
            <!-- ↑↑ category ↑↑ -->

            <!-- ↓↓ why ↓↓ -->
            <section class="home-why">
                <div class="container"></div>
            </section>
            <!-- ↑↑ why ↑↑ -->

            <!-- ↓↓ comment ↓↓ -->
            <section class="home-comment">
                <div class="container"></div>
            </section>
            <!-- ↑↑ comment ↑↑ -->

            <!-- ↓↓ blog ↓↓ -->
            <section class="home-blog">
                <div class="container"></div>
            </section>
            <!-- ↑↑ blog ↑↑ -->

            <!-- ↓↓ partner ↓↓ -->
            <section class="home-partner">
                <div class="container"></div>
            </section>
            <!-- ↑↑ partner ↑↑ -->
        </main>
        <!-- ↑↑ main ↑↑ -->
        <!-- ↓↓ footer ↓↓ -->
        <footer class="footer">
            <div class="container">
                <div class="footer__wrap">
                    <div class="footer__col">
                        <div class="footer__logo">
                            <a href="#">
                                <img src="" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="footer__col">
                        <p class="footer__title"></p>
                        <ul class="footer__menu">
                            <li class="footer__menu-item">
                                <a href="#" class="footer__menu-link"></a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="#" class="footer__menu-link"></a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="#" class="footer__menu-link"></a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="#" class="footer__menu-link"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer__col">
                        <p class="footer__title"></p>
                        <ul class="footer__menu">
                            <li class="footer__menu-item">
                                <a href="#" class="footer__menu-link"></a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="#" class="footer__menu-link"></a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="#" class="footer__menu-link"></a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="#" class="footer__menu-link"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer__col">
                        <p class="footer__title"></p>
                        <ul class="footer__menu">
                            <li class="footer__menu-item">
                                <a href="#" class="footer__menu-link"></a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="#" class="footer__menu-link"></a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="#" class="footer__menu-link"></a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="#" class="footer__menu-link"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <p class="footer__copy">© 2023 Find House. Made with love.</p>
                <div class="totop"></div>
            </div>
        </footer>
        <!-- ↑↑ footer ↑↑ -->
    </div>
</body>
</html>