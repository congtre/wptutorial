<?php get_header(); ?>
<section class="project-detail project-wrap">
    <div class="container">
        <div class="project-detail__wrap">
            <div class="project-detail__main">
                <div class="project-detail__slide-wrap">
                    <?php
                        $project_slide = get_field('project_slide');
                        if ($project_slide):
                    ?>
                    <ul class="project-detail__slide js-slideProjecDetail">
                        <?php foreach ($project_slide as $item): ?>
                        <li class="project-detail__slide-item">
                            <img src="<?php echo $item['url']; ?>" alt="<?php the_title(); ?>">
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="project-detail__slide-counter js-counterSlideProjectDetail"></div>
                    <?php endif; ?>
                </div>
                <div class="project-detail__heading-wrap">
                    <h1 class="project-detail__heading"><?php the_title(); ?></h1>
                    <p class="c-project__like js-buttonLike" data-id="<?php the_ID(); ?>" data-title="<?php the_title(); ?>"></p>
                </div>
                <?php
                    $project_info_address_province = get_field_object('project_info_address_project_info_address_province');
                    $project_info_address_province_value = $project_info_address_province['value'];
                    $project_info_address_province_label = $project_info_address_province['choices'][$project_info_address_province_value];

                    $project_info_address_district = get_field_object('project_info_address_project_info_address_district');
                    $project_info_address_district_value = $project_info_address_district['value'];
                    $project_info_address_district_label = $project_info_address_district['choices'][$project_info_address_district_value];

                    $project_info_address_ward = get_field_object('project_info_address_project_info_address_ward');
                    $project_info_address_ward_value = $project_info_address_ward['value'];
                    $project_info_address_ward_label = $project_info_address_ward['choices'][$project_info_address_ward_value];
                ?>
                <p class="project-detail__address"><?php echo $project_info_address_province_label.'/'.$project_info_address_district_label.'/'.$project_info_address_ward_label.'/'.get_field('project_info_address')['project_info_address_detail']; ?></p>
                
                <?php if (the_field('project_info_address_project_info_address_detail')): ?>
                <p class="project-detail__address"><?php the_field('project_info_address_project_info_address_detail'); ?></p>
                <?php endif; ?>

                <div class="project-detail__desc">
                    <p class="project-detail__title">Thông tin mô tả</p>
                    <div class="project-detail__desc-content">
                        <?php the_field('project_desc'); ?>
                    </div>
                </div>
                <div class="project-detail__ultity">
                    <p class="project-detail__title">Đặc điểm bất động sản</p>
                    <?php if (have_rows('project_ultity')): ?>
                    <ul class="project-detail__ultity-list">
                        <?php while( have_rows('project_ultity') ): the_row(); ?>
                        <li class="project-detail__ultity-item">
                            <span class="project-detail__ultity-title">Diện tích</span>
                            <span class="project-detail__ultity-info"><?php the_sub_field('project_ultity_area'); ?> m<sup>2</sup></span>
                        </li>
                        <li class="project-detail__ultity-item">
                            <span class="project-detail__ultity-title">Mức giá</span>
                            <span class="project-detail__ultity-info"><?php the_sub_field('project_ultity_price'); ?></span>
                        </li>
                        <li class="project-detail__ultity-item">
                            <span class="project-detail__ultity-title">Hướng nhà</span>
                            <span class="project-detail__ultity-info"><?php the_sub_field('project_ultity_directy'); ?></span>
                        </li>
                        <li class="project-detail__ultity-item">
                            <span class="project-detail__ultity-title">Số phòng ngủ</span>
                            <span class="project-detail__ultity-info"><?php the_sub_field('project_ultity_bedroom'); ?> phòng</span>
                        </li>
                        <li class="project-detail__ultity-item">
                            <span class="project-detail__ultity-title">Số toilet</span>
                            <span class="project-detail__ultity-info"><?php the_sub_field('project_ultity_toilet'); ?> phòng</span>
                        </li>
                        <li class="project-detail__ultity-item">
                            <span class="project-detail__ultity-title">Nội thất</span>
                            <span class="project-detail__ultity-info"><?php the_sub_field('project_ultity_interior'); ?></span>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                </div>
                <?php if (the_field('project_map_long') && the_field('project_map_lat')): ?>
                <div class="project-detail__map">
                    <p class="project-detail__title">Xem trên bản đồ</p>
                    <div class="project-detail__map-iframe"></div>
                </div>
                <?php endif; ?>
                <div class="project-detail__footer">
                    <p class="project-detail__footer-item">
                        <span class="project-detail__footer-title">Ngày đăng</span>
                        <span class="project-detail__footer-info"><?php echo get_the_date(get_option('date-format')); ?></span>
                    </p>
                </div>
                <div class="project-detail__related">
                    <?php
                        $category = get_the_terms(get_the_ID(), 'project_cate')[0];
                        $args = array(
                            'post_type' => 'project',
                            'posts_per_page' => 4,
                            'post_status' => 'publish',
                            'orderby' => 'ID',
                            'order' => 'DESC',
                            'post__not_in' => array(get_the_ID()),
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'project_cate',
                                    'terms' => $category->term_id,
                                )
                            )
                        );
                        $post_query = new WP_Query($args);
                    ?>
                    <?php if ($post_query->have_posts()): ?>
                        <p class="project-detail__title">Bất động sản dành cho bạn</p>
                        <div class="js-relatedProjectDetail">
                        <?php get_template_part('template/content', 'project-loop', $post_query); ?>
                        </div>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
            <div class="project-detail__sidebar">
                <?php get_template_part('template/content-project-cate-sidebar'); ?>
                <!-- <div class="project-detail__user">
                    <p class="project-detail__user-image"></p>
                    <p class="project-detail__user-desc">Được đăng bởi</p>
                    <p class="project-detail__user-name">Lorem ipsum dolor sit.</p>
                    <div class="project-detail__user-contact">
                        <a href="#" class="project-detail__user-link">Liên hệ</a>
                    </div>
                </div>
                <div class="project-detail__keyword">
                    <p class="project-detail__keyword-title"></p>
                    <ul class="project-detail__keyword-list">
                        <li class="project-detail__keyword-item">
                            <a href="#" class="project-detail__keyword-link"></a>
                        </li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>