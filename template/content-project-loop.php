<div class="c-project__list">
    <?php while ($args->have_posts()) : $args->the_post(); ?>
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