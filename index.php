
<?php get_header(); ?>
<!-- ↓↓ main ↓↓ -->
<main class="main">
    <section class="blog-article">
        <div class="container">
            <h1 class="c-heading-archive">Tin tức</h1>
            <div class="blog-article__wrap">
                <div class="blog-article__main">
                    <div class="blog-article__list">
                        <?php
                            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 2,
                                'paged' => $paged,
                                'post_status' => 'publish',
                                'orderby' => 'ID',
                                'order' => 'DESC',
                            );
                            $post_query = new WP_Query($args);
                        ?>
                        <?php if ($post_query->have_posts()): ?>
                        <?php while ($post_query->have_posts()) : $post_query->the_post(); ?>
                        <div class="blog-article__item">
                            <a href="<?php the_permalink(); ?>" class="blog-article__link">
                                <div class="blog-article__image">
                                    <?php if (has_post_thumbnail()): ?>
                                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                                    <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/img_default.jpg" alt="<?php the_title(); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="blog-article__info">
                                    <div class="blog-article__meta">
                                        <p class="blog-article__date"><?php echo get_the_date(get_option('date_format')); ?></p>
                                        <p class="blog-article__cate"><?php echo get_the_category()[0]->name; ?></p>
                                    </div>
                                    <p class="blog-article__title"><?php the_title(); ?></p>
                                    <p class="blog-article__desc"><?php echo mb_strimwidth(strip_tags(get_the_content()), 0, 200, '...', 'UTF-8'); ?></p>
                                </div>
                            </a>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="pagination">
                        <?php wp_pagenavi(array('query' => $post_query)); ?>
                    </div>
                    <?php wp_reset_postdata(); ?>
                </div>
                <div class="blog-article__sidebar">
                    <?php get_template_part('template/content-category-sidebar'); ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>