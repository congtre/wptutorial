<?php get_header(); ?>
<section class="blog-article">
    <div class="container">
        <div class="blog-article__wrap">
            <div class="blog-article__main">
                <div class="blog-detail">
                    <h2 class="blog-detail__title"><?php the_title(); ?></h2>
                    <div class="blog-article__meta">
                        <p class="blog-article__date"><?php echo get_the_date(get_option('date_format')); ?></p>
                        <p class="blog-article__cate"><?php echo get_the_category()[0]->name; ?></p>
                    </div>
                    <div class="blog-detail__content">
                        <?php the_content(); ?>
                    </div>
                    <div class="blog-detail__related">
                        <p class="blog-detail__related-title">Bài viết liên quan</p>
                        <?php
                            $category = get_the_category()[0];
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 3,
                                'post_status' => 'publish',
                                'orderby' => 'ID',
                                'order' => 'DESC',
                                'cat' => $category->term_id,
                                'post__not_in' => array(get_the_ID())
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
                                            <p class="c-blog__article-date"><?php echo get_the_date(get_option('date-format')); ?></p>
                                            <p class="c-blog__article-cate"><?php echo $category->name; ?></p>
                                        </div>
                                        <p class="c-blog__article-title"><?php the_title(); ?></p>
                                        <p class="c-blog__article-desc"><?php echo mb_strimwidth(strip_tags(get_the_content()), 0, 200, '...', 'UTF-8'); ?></p>
                                    </div>
                                </a>
                            </div>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
            <div class="blog-article__sidebar">
                <?php get_template_part('template/content-category-sidebar'); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>