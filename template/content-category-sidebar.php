<p class="blog-article__sidebar-title">Danh mục</p>
<?php
    $categories = get_terms(array( 
        'taxonomy' => 'category',
        'hide_empty' => false,
    ));
?>
<ul class="blog-article__sidebar-cate-list">
    <?php foreach ($categories as $item): ?>
    <?php if ($item->term_id === 1) continue; ?>
    <li class="blog-article__sidebar-cate-item">
        <a href="<?php echo get_term_link($item->term_id); ?>" class="blog-article__sidebar-cate-link"><?php echo $item->name ?></a>
    </li>
    <?php endforeach; ?>
</ul>