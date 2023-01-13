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
            <h1 class="header__logo">
                <a href="#" class="header__logo-link">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="50px" viewBox="0,0,256,256"><g fill="#ff6d3b" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                        <g transform="scale(5.12,5.12)"><path d="M25,2c-0.17578,0 -0.35156,0.04688 -0.50781,0.14063l-14.49219,8.51953v2.32422l3,-1.76562v15.78125c0,0.55078 0.44922,1 1,1h22c0.55078,0 1,-0.44922 1,-1v-15.78125l3,1.76563v-2.32422l-14.49219,-8.51953c-0.15625,-0.09375 -0.33203,-0.14062 -0.50781,-0.14062zM25,4.16016l10,5.88281v15.95703h-20v-15.95703zM5,16c-0.83203,0 -1.55078,0.38672 -2.08203,0.91797c-0.53125,0.53125 -0.91797,1.25 -0.91797,2.08203v13.07031c0,1.86719 0.21094,3.04688 0.64844,3.96094c0.44141,0.91406 1.04297,1.4375 1.59375,2.04297c1.10156,1.3125 7.99219,9.56641 7.99219,9.56641c0.1875,0.22656 0.46875,0.35938 0.76563,0.35938c0.41406,0.00391 0.79297,-0.25 0.94141,-0.63672c0.15234,-0.38672 0.04688,-0.82812 -0.25781,-1.10547c-0.14453,-0.17187 -6.85937,-8.21875 -7.9375,-9.5c-0.00781,-0.01172 -0.01953,-0.01953 -0.02734,-0.03125c-0.62109,-0.68359 -1.01172,-1.03125 -1.26562,-1.56641c-0.25781,-0.53125 -0.45312,-1.375 -0.45312,-3.08984v-13.07031c0,-0.16797 0.11328,-0.44922 0.33203,-0.66797c0.21875,-0.21875 0.5,-0.33203 0.66797,-0.33203c0.16797,0 0.44922,0.11328 0.66797,0.33203c0.21875,0.21875 0.33203,0.5 0.33203,0.66797v12c0,0.26563 0.10547,0.51953 0.29297,0.70703l0.98047,0.98047c0.05859,0.75781 0.44922,1.44922 1.01953,2.01953c0.3125,0.3125 3.9375,3.89063 5.99219,5.99219c0.25,0.26172 0.61719,0.37109 0.96875,0.28125c0.35156,-0.08594 0.62891,-0.35547 0.72266,-0.70312c0.09375,-0.35156 -0.00391,-0.72266 -0.26172,-0.97656c-2.08203,-2.12891 -5.77344,-5.77344 -6.00781,-6.00781c-0.38281,-0.38281 -0.45703,-0.625 -0.45703,-0.79297c0,-0.16797 0.07422,-0.41016 0.45703,-0.79297c0.38281,-0.38281 0.625,-0.45703 0.79297,-0.45703c0.16797,0 0.41016,0.07422 0.79297,0.45703c0.46094,0.46094 5.5,5.48828 5.99219,5.99219c0.00391,0.00391 0.01172,0.01172 0.01563,0.01563c2.00391,1.96094 2.69922,3.76172 2.69922,7.28516v2c-0.00391,0.35938 0.18359,0.69531 0.49609,0.87891c0.3125,0.17969 0.69531,0.17969 1.00781,0c0.3125,-0.18359 0.5,-0.51953 0.49609,-0.87891v-2c0,-3.82812 -0.98437,-6.44922 -3.30078,-8.71484c-0.60937,-0.62109 -5.54297,-5.54297 -5.99219,-5.99219c-0.61719,-0.61719 -1.375,-1.04297 -2.20703,-1.04297c-0.83203,0 -1.58984,0.42578 -2.20703,1.04297c-0.09766,0.09766 -0.18359,0.20703 -0.26953,0.31641l-0.02344,-0.02344v-11.58594c0,-0.83203 -0.38672,-1.55078 -0.91797,-2.08203c-0.53125,-0.53125 -1.25,-0.91797 -2.08203,-0.91797zM45,16c-0.83203,0 -1.55078,0.38672 -2.08203,0.91797c-0.53125,0.53125 -0.91797,1.25 -0.91797,2.08203v11.58594l-0.01953,0.02344c-0.08984,-0.10937 -0.17578,-0.21875 -0.27344,-0.31641c-0.61719,-0.61719 -1.375,-1.04297 -2.20703,-1.04297c-0.83203,0 -1.58984,0.42578 -2.20703,1.04297c-0.44922,0.44922 -5.38281,5.37109 -5.99219,5.99219c-2.31641,2.26563 -3.30078,4.88672 -3.30078,8.71484v2c-0.00391,0.35938 0.18359,0.69531 0.49609,0.87891c0.3125,0.17969 0.69531,0.17969 1.00781,0c0.3125,-0.18359 0.5,-0.51953 0.49609,-0.87891v-2c0,-3.52344 0.69531,-5.32422 2.69922,-7.28516c0.00391,-0.00391 0.01172,-0.01172 0.01563,-0.01562c0.49219,-0.50391 5.53125,-5.53125 5.99219,-5.99219c0.38281,-0.38281 0.625,-0.45703 0.79297,-0.45703c0.16797,0 0.41016,0.07422 0.79297,0.45703c0.38281,0.38281 0.45703,0.625 0.45703,0.79297c0,0.16797 -0.07422,0.41016 -0.45703,0.79297c-0.23437,0.23438 -3.92578,3.87891 -6.00781,6.00781c-0.25781,0.25391 -0.35547,0.625 -0.26172,0.97656c0.09375,0.34766 0.37109,0.61719 0.72266,0.70313c0.35156,0.08984 0.71875,-0.01953 0.96875,-0.28125c2.05469,-2.10156 5.67969,-5.67969 5.99219,-5.99219c0.57031,-0.57031 0.96094,-1.26172 1.01953,-2.01953l0.98047,-0.98047c0.1875,-0.1875 0.29297,-0.44141 0.29297,-0.70703v-12c0,-0.16797 0.11328,-0.44922 0.33203,-0.66797c0.21875,-0.21875 0.5,-0.33203 0.66797,-0.33203c0.16797,0 0.44922,0.11328 0.66797,0.33203c0.21875,0.21875 0.33203,0.5 0.33203,0.66797v13.07031c0,1.71484 -0.19531,2.55859 -0.45312,3.08984c-0.25391,0.53516 -0.64453,0.88281 -1.26562,1.56641c-0.00781,0.01172 -0.01953,0.01953 -0.02734,0.03125c-1.08984,1.29688 -8.01953,9.60156 -8.01953,9.60156c-0.25,0.29688 -0.30469,0.71094 -0.14062,1.0625c0.16406,0.35156 0.51953,0.57813 0.90625,0.57813c0.35156,0.00391 0.67969,-0.17578 0.86328,-0.47266c0.16016,-0.19531 6.80469,-8.15625 7.89844,-9.45312c0.54688,-0.60547 1.14844,-1.12891 1.58594,-2.04297c0.44141,-0.91406 0.65234,-2.09375 0.65234,-3.96094v-13.07031c0,-0.83203 -0.38672,-1.55078 -0.91797,-2.08203c-0.53125,-0.53125 -1.25,-0.91797 -2.08203,-0.91797z"></path></g></g>
                    </svg>
                    <span class="header__logo-text">Batdongsan</span>
                </a>
            </h1>
            <div class="header__wrap">
                <nav class="header__nav">
                    <ul class="header__menu">
                        <li class="header__menu-item">
                            <a href="#" class="header__menu-link">Dự án</a>
                            <ul class="header__menu-sub">
                                <li class="header__menu-item">
                                    <a href="#" class="header__menu-link">Nhà phố</a>
                                </li>
                                <li class="header__menu-item">
                                    <a href="#" class="header__menu-link">Căn hộ chung cư</a>
                                </li>
                            </ul>
                        </li>
                        <li class="header__menu-item">
                            <a href="#" class="header__menu-link">Tin tức</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="#" class="header__menu-link">Liên hệ</a>
                        </li>
                    </ul>
                </nav>
                <div class="header__user">
                    <a href="#" class="header__user-link">Đăng nhập</a>
                    <div class="header__user-devide"></div>
                    <a href="#" class="header__user-link">Đăng ký</a>
                    <a href="#" class="header__user-post">Đăng tin</a>
                </div>
            </div>
            <div class="hamburger">
                <span></span>
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
                            <a href="#" class="home-project__link">
                                <div class="home-project__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/img_project.jpg" alt="">
                                    <span class="home-project__image-number">7</span>
                                </div>
                                <div class="home-project__info">
                                    <p class="home-project__cate">Căn hộ</p>
                                    <p class="home-project__title">Cho thuê căn hộ ccmn siêu đẹp full nội thất cao cấp đầy đủ tiện</p>
                                    <p class="home-project__address">Cầu Giấy, Hà Nội</p>
                                    <ul class="home-project__ultity">
                                        <li class="home-project__ultity-item">
                                            <span class="home-project__ultity-title">Diện tích</span>
                                            <span class="home-project__ultity-info">50 m²</span>
                                        </li>
                                        <li class="home-project__ultity-item">
                                            <span class="home-project__ultity-title">Số phòng ngủ</span>
                                            <span class="home-project__ultity-info">1 phòng</span>
                                        </li>
                                        <li class="home-project__ultity-item">
                                            <span class="home-project__ultity-title">Mức giá</span>
                                            <span class="home-project__ultity-info">7 triệu/tháng</span>
                                        </li>
                                    </ul>
                                    <div class="home-project__footer">
                                        <p class="home-project__time">Hôm nay</p>
                                        <p class="home-project__like"></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="home-project__item">
                            <a href="#" class="home-project__link">
                                <div class="home-project__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/img_project.jpg" alt="">
                                    <span class="home-project__image-number">7</span>
                                </div>
                                <div class="home-project__info">
                                    <p class="home-project__cate">Căn hộ</p>
                                    <p class="home-project__title">Cho thuê căn hộ ccmn siêu đẹp full nội thất cao cấp đầy đủ tiện</p>
                                    <p class="home-project__address">Cầu Giấy, Hà Nội</p>
                                    <ul class="home-project__ultity">
                                        <li class="home-project__ultity-item">
                                            <span class="home-project__ultity-title">Diện tích</span>
                                            <span class="home-project__ultity-info">50 m²</span>
                                        </li>
                                        <li class="home-project__ultity-item">
                                            <span class="home-project__ultity-title">Số phòng ngủ</span>
                                            <span class="home-project__ultity-info">1 phòng</span>
                                        </li>
                                        <li class="home-project__ultity-item">
                                            <span class="home-project__ultity-title">Mức giá</span>
                                            <span class="home-project__ultity-info">7 triệu/tháng</span>
                                        </li>
                                    </ul>
                                    <div class="home-project__footer">
                                        <p class="home-project__time">Hôm nay</p>
                                        <p class="home-project__like"></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="home-project__item">
                            <a href="#" class="home-project__link">
                                <div class="home-project__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/img_project.jpg" alt="">
                                    <span class="home-project__image-number">7</span>
                                </div>
                                <div class="home-project__info">
                                    <p class="home-project__cate">Căn hộ</p>
                                    <p class="home-project__title">Cho thuê căn hộ ccmn siêu đẹp full nội thất cao cấp đầy đủ tiện</p>
                                    <p class="home-project__address">Cầu Giấy, Hà Nội</p>
                                    <ul class="home-project__ultity">
                                        <li class="home-project__ultity-item">
                                            <span class="home-project__ultity-title">Diện tích</span>
                                            <span class="home-project__ultity-info">50 m²</span>
                                        </li>
                                        <li class="home-project__ultity-item">
                                            <span class="home-project__ultity-title">Số phòng ngủ</span>
                                            <span class="home-project__ultity-info">1 phòng</span>
                                        </li>
                                        <li class="home-project__ultity-item">
                                            <span class="home-project__ultity-title">Mức giá</span>
                                            <span class="home-project__ultity-info">7 triệu/tháng</span>
                                        </li>
                                    </ul>
                                    <div class="home-project__footer">
                                        <p class="home-project__time">Hôm nay</p>
                                        <p class="home-project__like"></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="home-project__item">
                            <a href="#" class="home-project__link">
                                <div class="home-project__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/img_project.jpg" alt="">
                                    <span class="home-project__image-number">7</span>
                                </div>
                                <div class="home-project__info">
                                    <p class="home-project__cate">Căn hộ</p>
                                    <p class="home-project__title">Cho thuê căn hộ ccmn siêu đẹp full nội thất cao cấp đầy đủ tiện</p>
                                    <p class="home-project__address">Cầu Giấy, Hà Nội</p>
                                    <ul class="home-project__ultity">
                                        <li class="home-project__ultity-item">
                                            <span class="home-project__ultity-title">Diện tích</span>
                                            <span class="home-project__ultity-info">50 m²</span>
                                        </li>
                                        <li class="home-project__ultity-item">
                                            <span class="home-project__ultity-title">Số phòng ngủ</span>
                                            <span class="home-project__ultity-info">1 phòng</span>
                                        </li>
                                        <li class="home-project__ultity-item">
                                            <span class="home-project__ultity-title">Mức giá</span>
                                            <span class="home-project__ultity-info">7 triệu/tháng</span>
                                        </li>
                                    </ul>
                                    <div class="home-project__footer">
                                        <p class="home-project__time">Hôm nay</p>
                                        <p class="home-project__like"></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="home-project__item">
                            <a href="#" class="home-project__link">
                                <div class="home-project__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/img_project.jpg" alt="">
                                    <span class="home-project__image-number">7</span>
                                </div>
                                <div class="home-project__info">
                                    <p class="home-project__cate">Căn hộ</p>
                                    <p class="home-project__title">Cho thuê căn hộ ccmn siêu đẹp full nội thất cao cấp đầy đủ tiện</p>
                                    <p class="home-project__address">Cầu Giấy, Hà Nội</p>
                                    <ul class="home-project__ultity">
                                        <li class="home-project__ultity-item">
                                            <span class="home-project__ultity-title">Diện tích</span>
                                            <span class="home-project__ultity-info">50 m²</span>
                                        </li>
                                        <li class="home-project__ultity-item">
                                            <span class="home-project__ultity-title">Số phòng ngủ</span>
                                            <span class="home-project__ultity-info">1 phòng</span>
                                        </li>
                                        <li class="home-project__ultity-item">
                                            <span class="home-project__ultity-title">Mức giá</span>
                                            <span class="home-project__ultity-info">7 triệu/tháng</span>
                                        </li>
                                    </ul>
                                    <div class="home-project__footer">
                                        <p class="home-project__time">Hôm nay</p>
                                        <p class="home-project__like"></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="home-project__item">
                            <a href="#" class="home-project__link">
                                <div class="home-project__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/img_project.jpg" alt="">
                                    <span class="home-project__image-number">7</span>
                                </div>
                                <div class="home-project__info">
                                    <p class="home-project__cate">Căn hộ</p>
                                    <p class="home-project__title">Cho thuê căn hộ ccmn siêu đẹp full nội thất cao cấp đầy đủ tiện</p>
                                    <p class="home-project__address">Cầu Giấy, Hà Nội</p>
                                    <ul class="home-project__ultity">
                                        <li class="home-project__ultity-item">
                                            <span class="home-project__ultity-title">Diện tích</span>
                                            <span class="home-project__ultity-info">50 m²</span>
                                        </li>
                                        <li class="home-project__ultity-item">
                                            <span class="home-project__ultity-title">Số phòng ngủ</span>
                                            <span class="home-project__ultity-info">1 phòng</span>
                                        </li>
                                        <li class="home-project__ultity-item">
                                            <span class="home-project__ultity-title">Mức giá</span>
                                            <span class="home-project__ultity-info">7 triệu/tháng</span>
                                        </li>
                                    </ul>
                                    <div class="home-project__footer">
                                        <p class="home-project__time">Hôm nay</p>
                                        <p class="home-project__like"></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="home-project__item">
                            <a href="#" class="home-project__link">
                                <div class="home-project__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/img_project.jpg" alt="">
                                    <span class="home-project__image-number">7</span>
                                </div>
                                <div class="home-project__info">
                                    <p class="home-project__cate">Căn hộ</p>
                                    <p class="home-project__title">Cho thuê căn hộ ccmn siêu đẹp full nội thất cao cấp đầy đủ tiện</p>
                                    <p class="home-project__address">Cầu Giấy, Hà Nội</p>
                                    <ul class="home-project__ultity">
                                        <li class="home-project__ultity-item">
                                            <span class="home-project__ultity-title">Diện tích</span>
                                            <span class="home-project__ultity-info">50 m²</span>
                                        </li>
                                        <li class="home-project__ultity-item">
                                            <span class="home-project__ultity-title">Số phòng ngủ</span>
                                            <span class="home-project__ultity-info">1 phòng</span>
                                        </li>
                                        <li class="home-project__ultity-item">
                                            <span class="home-project__ultity-title">Mức giá</span>
                                            <span class="home-project__ultity-info">7 triệu/tháng</span>
                                        </li>
                                    </ul>
                                    <div class="home-project__footer">
                                        <p class="home-project__time">Hôm nay</p>
                                        <p class="home-project__like"></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="home-project__item">
                            <a href="#" class="home-project__link">
                                <div class="home-project__image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/img_project.jpg" alt="">
                                    <span class="home-project__image-number">7</span>
                                </div>
                                <div class="home-project__info">
                                    <p class="home-project__cate">Căn hộ</p>
                                    <p class="home-project__title">Cho thuê căn hộ ccmn siêu đẹp full nội thất cao cấp đầy đủ tiện</p>
                                    <p class="home-project__address">Cầu Giấy, Hà Nội</p>
                                    <ul class="home-project__ultity">
                                        <li class="home-project__ultity-item">
                                            <span class="home-project__ultity-title">Diện tích</span>
                                            <span class="home-project__ultity-info">50 m²</span>
                                        </li>
                                        <li class="home-project__ultity-item">
                                            <span class="home-project__ultity-title">Số phòng ngủ</span>
                                            <span class="home-project__ultity-info">1 phòng</span>
                                        </li>
                                        <li class="home-project__ultity-item">
                                            <span class="home-project__ultity-title">Mức giá</span>
                                            <span class="home-project__ultity-info">7 triệu/tháng</span>
                                        </li>
                                    </ul>
                                    <div class="home-project__footer">
                                        <p class="home-project__time">Hôm nay</p>
                                        <p class="home-project__like"></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <p class="c-button">
                        <a href="#" class="c-button__link">Xem thêm</a>
                    </p>
                </div>
            </section>
            <!-- ↑↑ project ↑↑ -->

            <!-- ↓↓ category ↓↓ -->
            <section class="home-category">
                <div class="container">
                    <h2 class="c-heading">Danh mục dự án</h2>
                    <div class="home-category__list">
                        <div class="home-category__item">
                            <a href="#" class="home-category__link">
                                <p class="home-category__name">Căn hộ</p>
                                <p class="home-category__number">77</p>
                            </a>
                        </div>
                        <div class="home-category__item">
                            <a href="#" class="home-category__link">
                                <p class="home-category__name">Căn hộ</p>
                                <p class="home-category__number">77</p>
                            </a>
                        </div>
                        <div class="home-category__item">
                            <a href="#" class="home-category__link">
                                <p class="home-category__name">Căn hộ</p>
                                <p class="home-category__number">77</p>
                            </a>
                        </div>
                        <div class="home-category__item">
                            <a href="#" class="home-category__link">
                                <p class="home-category__name">Căn hộ</p>
                                <p class="home-category__number">77</p>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ↑↑ category ↑↑ -->

            <!-- ↓↓ why ↓↓ -->
            <section class="home-why">
                <div class="container">
                    <h2 class="c-heading">Tại sao chọn chúng tôi?</h2>
                    <ul class="home-why__list">
                        <li class="home-why__item">
                            <p class="home-why__image">
                                <img src="" alt="">
                            </p>
                            <p class="home-why__title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, repellat?</p>
                            <p class="home-why__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius sint recusandae ipsa vel. Ab aspernatur similique iusto eveniet sequi ut.</p>
                        </li>
                        <li class="home-why__item">
                            <p class="home-why__image">
                                <img src="" alt="">
                            </p>
                            <p class="home-why__title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, repellat?</p>
                            <p class="home-why__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius sint recusandae ipsa vel. Ab aspernatur similique iusto eveniet sequi ut.</p>
                        </li>
                        <li class="home-why__item">
                            <p class="home-why__image">
                                <img src="" alt="">
                            </p>
                            <p class="home-why__title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, repellat?</p>
                            <p class="home-why__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius sint recusandae ipsa vel. Ab aspernatur similique iusto eveniet sequi ut.</p>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- ↑↑ why ↑↑ -->

            <!-- ↓↓ comment ↓↓ -->
            <section class="home-comment">
                <div class="container">
                    <h2 class="c-heading">Ý kiến khách hàng</h2>
                    <ul class="home-comment__list">
                        <li class="home-comment__item">
                            <p class="home-comment__image"></p>
                            <p class="home-comment__name">Lorem, ipsum dolor.</p>
                            <p class="home-comment__desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima, qui assumenda. Odit et ab cum dolor consectetur reprehenderit fuga optio.</p>
                        </li>
                        <li class="home-comment__item">
                            <p class="home-comment__image"></p>
                            <p class="home-comment__name">Lorem, ipsum dolor.</p>
                            <p class="home-comment__desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima, qui assumenda. Odit et ab cum dolor consectetur reprehenderit fuga optio.</p>
                        </li>
                        <li class="home-comment__item">
                            <p class="home-comment__image"></p>
                            <p class="home-comment__name">Lorem, ipsum dolor.</p>
                            <p class="home-comment__desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima, qui assumenda. Odit et ab cum dolor consectetur reprehenderit fuga optio.</p>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- ↑↑ comment ↑↑ -->

            <!-- ↓↓ blog ↓↓ -->
            <section class="home-blog">
                <div class="container">
                    <h2 class="c-heading">Tin tức về bất động sản</h2>
                    <div class="home-blog__list">
                        <div class="home-blog__article">
                            <a href="#" class="home-blog__article-link">
                                <p class="home-blog__article-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/img_blog.jpg" alt="">
                                </p>
                                <div class="home-blog__article-info">
                                    <div class="home-blog__article-meta">
                                        <p class="home-blog__article-date">2023/01/13</p>
                                        <p class="home-blog__article-cate">Bất động sản</p>
                                    </div>
                                    <p class="home-blog__article-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, ratione!</p>
                                    <p class="home-blog__article-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam recusandae quia corporis, quidem amet magni.</p>
                                </div>
                            </a>
                        </div>
                        <div class="home-blog__article">
                            <a href="#" class="home-blog__article-link">
                                <p class="home-blog__article-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/img_blog.jpg" alt="">
                                </p>
                                <div class="home-blog__article-info">
                                    <div class="home-blog__article-meta">
                                        <p class="home-blog__article-date">2023/01/13</p>
                                        <p class="home-blog__article-cate">Bất động sản</p>
                                    </div>
                                    <p class="home-blog__article-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, ratione!</p>
                                    <p class="home-blog__article-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam recusandae quia corporis, quidem amet magni.</p>
                                </div>
                            </a>
                        </div>
                        <div class="home-blog__article">
                            <a href="#" class="home-blog__article-link">
                                <p class="home-blog__article-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/img_blog.jpg" alt="">
                                </p>
                                <div class="home-blog__article-info">
                                    <div class="home-blog__article-meta">
                                        <p class="home-blog__article-date">2023/01/13</p>
                                        <p class="home-blog__article-cate">Bất động sản</p>
                                    </div>
                                    <p class="home-blog__article-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, ratione!</p>
                                    <p class="home-blog__article-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam recusandae quia corporis, quidem amet magni.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <p class="c-button">
                        <a href="#" class="c-button__link">Xem thêm</a>
                    </p>
                </div>
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
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="50px" viewBox="0,0,256,256"><g fill="#fff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M25,2c-0.17578,0 -0.35156,0.04688 -0.50781,0.14063l-14.49219,8.51953v2.32422l3,-1.76562v15.78125c0,0.55078 0.44922,1 1,1h22c0.55078,0 1,-0.44922 1,-1v-15.78125l3,1.76563v-2.32422l-14.49219,-8.51953c-0.15625,-0.09375 -0.33203,-0.14062 -0.50781,-0.14062zM25,4.16016l10,5.88281v15.95703h-20v-15.95703zM5,16c-0.83203,0 -1.55078,0.38672 -2.08203,0.91797c-0.53125,0.53125 -0.91797,1.25 -0.91797,2.08203v13.07031c0,1.86719 0.21094,3.04688 0.64844,3.96094c0.44141,0.91406 1.04297,1.4375 1.59375,2.04297c1.10156,1.3125 7.99219,9.56641 7.99219,9.56641c0.1875,0.22656 0.46875,0.35938 0.76563,0.35938c0.41406,0.00391 0.79297,-0.25 0.94141,-0.63672c0.15234,-0.38672 0.04688,-0.82812 -0.25781,-1.10547c-0.14453,-0.17187 -6.85937,-8.21875 -7.9375,-9.5c-0.00781,-0.01172 -0.01953,-0.01953 -0.02734,-0.03125c-0.62109,-0.68359 -1.01172,-1.03125 -1.26562,-1.56641c-0.25781,-0.53125 -0.45312,-1.375 -0.45312,-3.08984v-13.07031c0,-0.16797 0.11328,-0.44922 0.33203,-0.66797c0.21875,-0.21875 0.5,-0.33203 0.66797,-0.33203c0.16797,0 0.44922,0.11328 0.66797,0.33203c0.21875,0.21875 0.33203,0.5 0.33203,0.66797v12c0,0.26563 0.10547,0.51953 0.29297,0.70703l0.98047,0.98047c0.05859,0.75781 0.44922,1.44922 1.01953,2.01953c0.3125,0.3125 3.9375,3.89063 5.99219,5.99219c0.25,0.26172 0.61719,0.37109 0.96875,0.28125c0.35156,-0.08594 0.62891,-0.35547 0.72266,-0.70312c0.09375,-0.35156 -0.00391,-0.72266 -0.26172,-0.97656c-2.08203,-2.12891 -5.77344,-5.77344 -6.00781,-6.00781c-0.38281,-0.38281 -0.45703,-0.625 -0.45703,-0.79297c0,-0.16797 0.07422,-0.41016 0.45703,-0.79297c0.38281,-0.38281 0.625,-0.45703 0.79297,-0.45703c0.16797,0 0.41016,0.07422 0.79297,0.45703c0.46094,0.46094 5.5,5.48828 5.99219,5.99219c0.00391,0.00391 0.01172,0.01172 0.01563,0.01563c2.00391,1.96094 2.69922,3.76172 2.69922,7.28516v2c-0.00391,0.35938 0.18359,0.69531 0.49609,0.87891c0.3125,0.17969 0.69531,0.17969 1.00781,0c0.3125,-0.18359 0.5,-0.51953 0.49609,-0.87891v-2c0,-3.82812 -0.98437,-6.44922 -3.30078,-8.71484c-0.60937,-0.62109 -5.54297,-5.54297 -5.99219,-5.99219c-0.61719,-0.61719 -1.375,-1.04297 -2.20703,-1.04297c-0.83203,0 -1.58984,0.42578 -2.20703,1.04297c-0.09766,0.09766 -0.18359,0.20703 -0.26953,0.31641l-0.02344,-0.02344v-11.58594c0,-0.83203 -0.38672,-1.55078 -0.91797,-2.08203c-0.53125,-0.53125 -1.25,-0.91797 -2.08203,-0.91797zM45,16c-0.83203,0 -1.55078,0.38672 -2.08203,0.91797c-0.53125,0.53125 -0.91797,1.25 -0.91797,2.08203v11.58594l-0.01953,0.02344c-0.08984,-0.10937 -0.17578,-0.21875 -0.27344,-0.31641c-0.61719,-0.61719 -1.375,-1.04297 -2.20703,-1.04297c-0.83203,0 -1.58984,0.42578 -2.20703,1.04297c-0.44922,0.44922 -5.38281,5.37109 -5.99219,5.99219c-2.31641,2.26563 -3.30078,4.88672 -3.30078,8.71484v2c-0.00391,0.35938 0.18359,0.69531 0.49609,0.87891c0.3125,0.17969 0.69531,0.17969 1.00781,0c0.3125,-0.18359 0.5,-0.51953 0.49609,-0.87891v-2c0,-3.52344 0.69531,-5.32422 2.69922,-7.28516c0.00391,-0.00391 0.01172,-0.01172 0.01563,-0.01562c0.49219,-0.50391 5.53125,-5.53125 5.99219,-5.99219c0.38281,-0.38281 0.625,-0.45703 0.79297,-0.45703c0.16797,0 0.41016,0.07422 0.79297,0.45703c0.38281,0.38281 0.45703,0.625 0.45703,0.79297c0,0.16797 -0.07422,0.41016 -0.45703,0.79297c-0.23437,0.23438 -3.92578,3.87891 -6.00781,6.00781c-0.25781,0.25391 -0.35547,0.625 -0.26172,0.97656c0.09375,0.34766 0.37109,0.61719 0.72266,0.70313c0.35156,0.08984 0.71875,-0.01953 0.96875,-0.28125c2.05469,-2.10156 5.67969,-5.67969 5.99219,-5.99219c0.57031,-0.57031 0.96094,-1.26172 1.01953,-2.01953l0.98047,-0.98047c0.1875,-0.1875 0.29297,-0.44141 0.29297,-0.70703v-12c0,-0.16797 0.11328,-0.44922 0.33203,-0.66797c0.21875,-0.21875 0.5,-0.33203 0.66797,-0.33203c0.16797,0 0.44922,0.11328 0.66797,0.33203c0.21875,0.21875 0.33203,0.5 0.33203,0.66797v13.07031c0,1.71484 -0.19531,2.55859 -0.45312,3.08984c-0.25391,0.53516 -0.64453,0.88281 -1.26562,1.56641c-0.00781,0.01172 -0.01953,0.01953 -0.02734,0.03125c-1.08984,1.29688 -8.01953,9.60156 -8.01953,9.60156c-0.25,0.29688 -0.30469,0.71094 -0.14062,1.0625c0.16406,0.35156 0.51953,0.57813 0.90625,0.57813c0.35156,0.00391 0.67969,-0.17578 0.86328,-0.47266c0.16016,-0.19531 6.80469,-8.15625 7.89844,-9.45312c0.54688,-0.60547 1.14844,-1.12891 1.58594,-2.04297c0.44141,-0.91406 0.65234,-2.09375 0.65234,-3.96094v-13.07031c0,-0.83203 -0.38672,-1.55078 -0.91797,-2.08203c-0.53125,-0.53125 -1.25,-0.91797 -2.08203,-0.91797z"></path></g></g></svg>
                            </a>
                        </div>
                        <p class="footer__desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque laboriosam repellendus asperiores nesciunt inventore aut cum, mollitia illo magnam facere iure quis, iusto excepturi perspiciatis, non reiciendis tenetur nulla? Odit?</p>
                    </div>
                    <div class="footer__col">
                        <p class="footer__title">Sitemap</p>
                        <ul class="footer__menu">
                            <li class="footer__menu-item">
                                <a href="#" class="footer__menu-link">Dự án</a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="#" class="footer__menu-link">Nhà đất</a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="#" class="footer__menu-link">Căn hộ chung cư</a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="#" class="footer__menu-link">Tin tức</a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="#" class="footer__menu-link">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer__col">
                        <p class="footer__title">Contact</p>
                        <ul class="footer__menu">
                            <li class="footer__menu-item">
                                <a href="#" class="footer__menu-link">info@findhouse.com</a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="#" class="footer__menu-link">Collins Street West, Victoria</a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="#" class="footer__menu-link">8007, Australia.</a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="#" class="footer__menu-link">+1 246-345-0699</a>
                            </li>
                            <li class="footer__menu-item">
                                <a href="#" class="footer__menu-link">+1 246-345-0695</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer__col">
                        <p class="footer__title">Theo dõi chúng tôi</p>
                        <ul class="footer__social">
                            <a href="#"></a>
                            <a href="#"></a>
                            <a href="#"></a>
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