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
        <div class="project-article__list">
            <?php get_template_part('template/content', 'project-loop', $post_query); ?>
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
        <?php get_template_part('template/content', 'blog-loop', $post_query); ?>
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