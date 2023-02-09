<?php get_header(); ?>
<section class="blog-article">
    <div class="container">
        <h1 class="c-heading-archive">Tin tức</h1>
        <div class="blog-article__wrap">
            <div class="blog-article__main">
                <?php
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 10,
                        'paged' => $paged,
                        'post_status' => 'publish',
                        'orderby' => 'ID',
                        'order' => 'DESC',
                    );

                    $post_query = new WP_Query($args);

                    get_template_part('template/content', 'blog', $post_query);
                ?>
            </div>
            <div class="blog-article__sidebar">
                <?php get_template_part('template/content-category-sidebar'); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>