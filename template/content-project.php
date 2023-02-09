
<?php if ($args->have_posts()): ?>
<div class="project-article__list">
    <?php get_template_part('template/content', 'project-loop', $args); ?>
</div>
<?php else: ?>
<?php get_template_part('template/content-no-results'); ?>    
<?php endif; ?>
<div class="pagination">
    <?php wp_pagenavi(array('query' => $args)); ?>
</div>
<?php wp_reset_postdata(); ?>