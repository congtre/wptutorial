<?php
$wp_object = get_queried_object();
$category_id = $wp_object->term_id;
$category_name = $wp_object->name;
?>

<?php get_header(); ?>
<section class="project-article project-wrap">
    <div class="container">
        <h1 class="c-heading-archive"><?php echo $category_name; ?></h1>
        <div class="project-article__wrap">
            <div class="project-article__main">
                <?php
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'project',
                        'posts_per_page' => 10,
                        'paged' => $paged,
                        'post_status' => 'publish',
                        'orderby' => 'ID',
                        'order' => 'DESC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'project_cate',
                                'terms' => $category_id
                            )
                        )
                    );
                    
                    $post_query = new WP_Query($args);

                    get_template_part('template/content', 'project', $post_query);
                ?>
            </div>
            <div class="project-article__search">
                <?php get_template_part('template/content-project-cate-sidebar'); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>