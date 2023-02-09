<?php get_header(); ?>
<section class="project-article">
    <div class="container">
        <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $search_query = get_search_query();
            $type = $_GET['type'];
            $cate = $_GET['cate'];
            
            $args = array(
                'post_type' => 'project',
                'posts_per_page' => 10,
                'paged' => $paged,
                'post_status' => 'publish',
                'orderby' => 'ID',
                'order' => 'DESC',
                's' => $search_query,
                'meta_key' => 'project_type',
                'meta_value' => $type,
            );

            if ($cate !== 'all') {
                $cate_array = explode(',', $cate);
                $query = [
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'project_cate',
                            'terms' => $cate_array
                        )
                    )
                ];

                $args = array_merge($args, $query);
            }

            $post_query = new WP_Query($args);
        ?>
        <h1 class="c-heading-archive">Kết quả tìm kiếm (<?php echo $post_query->found_posts; ?>)</h1>
        <div class="project-article__wrap">
            <div class="project-article__main">
                <?php get_template_part('template/content', 'project', $post_query); ?>
            </div>
            <div class="project-article__search">
                <?php get_template_part('template/content-project-cate-sidebar'); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>