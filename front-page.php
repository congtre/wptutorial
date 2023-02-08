<?php get_header(); ?>
<!-- ↓↓ project ↓↓ -->
<section class="home-project">
    <div class="container">
        <h2 class="c-heading">Dự án nổi bật</h2>
        <?php
            $args = array(
                'post_type' => 'project',
                'posts_per_page' => 8,
                'paged' => $paged,
                'post_status' => 'publish',
                'orderby' => 'ID',
                'order' => 'DESC',
            );
            $post_query = new WP_Query($args);
        ?>
        <?php if ($post_query->have_posts()): ?>
        <div class="c-project__list">
            <?php while ($post_query->have_posts()) : $post_query->the_post(); ?>
            <?php
                $terms = get_the_terms(get_the_ID(), 'project_cate');
                $terms_name = $terms[0]->name;

                $project_slide = get_field('project_slide');
                $project_ultity = get_field('project_ultity');

                $project_info_address_province = get_field_object('project_info_address_project_info_address_province');
                $project_info_address_province_value = $project_info_address_province['value'];
                $project_info_address_province_label = $project_info_address_province['choices'][$project_info_address_province_value];

                $project_info_address_district = get_field_object('project_info_address_project_info_address_district');
                $project_info_address_district_value = $project_info_address_district['value'];
                $project_info_address_district_label = $project_info_address_district['choices'][$project_info_address_district_value];
            ?>
            <div class="c-project__item">
                <div class="c-project__image">
                    <?php if (has_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                    <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/img_default.jpg" alt="<?php the_title(); ?>">
                    <?php endif; ?>
                    <span class="c-project__image-number"><?php echo count($project_slide); ?></span>
                    <a href="<?php the_permalink(); ?>" class="c-project__image-link"></a>
                </div>
                <div class="c-project__info">
                    <p class="c-project__cate"><?php echo $terms_name; ?></p>
                    <p class="c-project__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                    <p class="c-project__address"><?php echo $project_info_address_district_label.', '.$project_info_address_province_label; ?></p>
                    <ul class="c-project__ultity">
                        <li class="c-project__ultity-item">
                            <span class="c-project__ultity-title">Diện tích</span>
                            <span class="c-project__ultity-info"><?php echo $project_ultity['project_ultity_area']; ?> m<sup>2</sup></span>
                        </li>
                        <li class="c-project__ultity-item">
                            <span class="c-project__ultity-title">Số phòng ngủ</span>
                            <span class="c-project__ultity-info"><?php echo $project_ultity['project_ultity_bedroom']; ?> phòng</span>
                        </li>
                        <li class="c-project__ultity-item">
                            <span class="c-project__ultity-title">Mức giá</span>
                            <span class="c-project__ultity-info"><?php echo $project_ultity['project_ultity_price']; ?></span>
                        </li>
                    </ul>
                    <div class="c-project__footer">
                        <p class="c-project__time"><?php echo get_the_date(get_option('date-format')); ?></p>
                        <p class="c-project__like js-buttonLike" data-id="<?php the_ID(); ?>" data-title="<?php the_title(); ?>"></p>
                    </div>
                </div>
            </div>  
            <?php endwhile; ?> 
        </div>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        <p class="c-button">
            <a href="<?php echo home_url('/du-an'); ?>" class="c-button__link">Xem thêm</a>
        </p>
    </div>
</section>
<!-- ↑↑ project ↑↑ -->

<!-- ↓↓ category ↓↓ -->
<section class="home-category">
    <div class="container">
        <h2 class="c-heading">Danh mục dự án</h2>
        <?php
            $project_categories = get_terms(array( 
                'taxonomy' => 'project_cate',
                'hide_empty' => false,
            ));
        ?>
        <div class="home-category__list">
            <?php foreach ($project_categories as $term): ?>
            <div class="home-category__item">
                <?php $background = get_field('project_cate_image', 'project_cate_'.$term->term_id); ?>
                <a href="<?php echo get_term_link($term->term_id); ?>" class="home-category__link" style="background: url(<?php echo $background; ?>) no-repeat center/cover">
                    <p class="home-category__name"><?php echo $term->name; ?></p>
                    <?php if ($term->count > 0): ?>
                    <p class="home-category__number"><?php echo $term->count; ?></p>
                    <?php endif; ?>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- ↑↑ category ↑↑ -->

<!-- ↓↓ why ↓↓ -->
<!-- <section class="home-why">
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
</section> -->
<!-- ↑↑ why ↑↑ -->

<!-- ↓↓ comment ↓↓ -->
<!-- <section class="home-comment">
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
</section> -->
<!-- ↑↑ comment ↑↑ -->

<!-- ↓↓ blog ↓↓ -->
<section class="home-blog">
    <div class="container">
        <h2 class="c-heading">Tin tức về bất động sản</h2>
        <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'post_status' => 'publish',
                'orderby' => 'ID',
                'order' => 'DESC',
            );
            $post_query = new WP_Query($args);
        ?>
        <?php if ($post_query->have_posts()): ?>
        <div class="c-blog__list">
            <?php while ($post_query->have_posts()) : $post_query->the_post(); ?>
            <div class="c-blog__article">
                <a href="<?php the_permalink(); ?>" class="c-blog__article-link">
                    <p class="c-blog__article-image">
                        <?php if (has_post_thumbnail()): ?>
                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                        <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/img_default.jpg" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                    </p>
                    <div class="c-blog__article-info">
                        <div class="c-blog__article-meta">
                            <p class="c-blog__article-date"><?php echo get_the_date(get_option('date_format')); ?></p>
                            <p class="c-blog__article-cate"><?php echo get_the_category()[0]->name; ?></p>
                        </div>
                        <p class="c-blog__article-title"><?php the_title(); ?></p>
                        <p class="c-blog__article-desc"><?php echo mb_strimwidth(strip_tags(get_the_content()), 0, 130, '...', 'UTF-8'); ?></p>
                    </div>
                </a>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        <p class="c-button">
            <a href="<?php echo home_url('/tin-tuc'); ?>" class="c-button__link">Xem thêm</a>
        </p>
    </div>
</section>
<!-- ↑↑ blog ↑↑ -->

<!-- ↓↓ partner ↓↓ -->
<section class="home-partner">
    <div class="container"></div>
</section>
<!-- ↑↑ partner ↑↑ -->
<?php get_footer(); ?>