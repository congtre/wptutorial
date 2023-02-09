<?php while ($args->have_posts()) : $args->the_post(); ?>
<div class="c-blog__article">
    <a href="<?php the_permalink(); ?>" class="c-blog__article-link">
        <div class="c-blog__article-image">
            <?php if (has_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
            <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/img_default.jpg" alt="<?php the_title(); ?>">
            <?php endif; ?>
        </div>
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