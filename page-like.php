<?php get_header(); ?>
<section class="project-article project-wrap project-like">
    <input type="hidden" id="hidden-input" name="objects_in_local_storage">
    <div class="container">
        <h1 class="c-heading-archive">Dự án đã lưu</h1>
        <div class="project-article__wrap">
            <div class="project-article__main">
                <div class="project-like__loading">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/loading.gif" alt="">
                </div>
                <div class="project-article__list"></div>
            </div>
            <div class="project-article__search">
                <?php get_template_part('template/content-project-cate-sidebar'); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>