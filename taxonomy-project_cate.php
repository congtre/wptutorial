<?php get_header(); ?>
<!-- ↓↓ main ↓↓ -->
<main class="main">
    <section class="project-article">
        <div class="container">
            <h1 class="c-heading-archive">Dự án</h1>
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
                        );
                        $post_query = new WP_Query($args);
                    ?>
                    <?php if ($post_query->have_posts()): ?>
                    <div class="project-article__list">
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
                                <a href="<?php the_permalink(); ?>" class="c-project__link">
                                    <div class="c-project__image">
                                        <?php if (has_post_thumbnail()): ?>
                                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                                        <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/dist/images/img_default.jpg" alt="<?php the_title(); ?>">
                                        <?php endif; ?>
                                        <span class="c-project__image-number"><?php echo count($project_slide); ?></span>
                                    </div>
                                    <div class="c-project__info">
                                        <p class="c-project__cate"><?php echo $terms_name; ?></p>
                                        <p class="c-project__title"><?php the_title(); ?></p>
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
                                                <span class="c-project__ultity-info"><?php echo number_format_i18n($project_ultity['project_ultity_price']); ?> triệu/tháng</span>
                                            </li>
                                        </ul>
                                        <div class="c-project__footer">
                                            <p class="c-project__time"><?php echo get_the_date(get_option('date-format')); ?></p>
                                            <p class="c-project__like"></p>
                                        </div>
                                    </div>
                                </a>
                            </div>  
                            <?php endwhile; ?>                      
                        </div>
                    </div>
                    <?php else: ?>
                    <?php get_template_part('template/content-no-results'); ?>    
                    <?php endif; ?>
                    <div class="pagination">
                        <?php wp_pagenavi(array('query' => $post_query)); ?>
                    </div>
                    <?php wp_reset_postdata(); ?>
                </div>
                <div class="project-article__search">
                    <?php get_template_part('template/content-project-cate-sidebar'); ?>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- ↑↑ main ↑↑ -->
<?php get_footer(); ?>