<?php get_header(); ?>
<div class="art-contentLayout">
<div class="art-content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php
$prev_link = get_previous_post_link('&laquo; %link');
$next_link = get_next_post_link('%link &raquo;');
?>
<?php if ($prev_link || $next_link): ?>
<div class="art-Post">
    <div class="art-Post-body">
<div class="art-Post-inner art-article">

<div class="art-PostContent">

<div class="navigation">
	<div class="alignleft"><?php echo $prev_link; ?></div>
	<div class="alignright"><?php echo $next_link; ?></div>
</div>

</div>
<div class="cleared"></div>


</div>

		<div class="cleared"></div>
    </div>
</div>

<?php endif; ?>
<div class="art-Post">
    <div class="art-Post-body">
<div class="art-Post-inner art-article">
<h2 class="art-PostHeader">
  <img src="<?php bloginfo('template_url'); ?>/images/PostHeaderIcon.png" width="27" height="25" alt="" />
<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Постоянная ссылка на %s', 'kubrick'), the_title_attribute('echo=0')); ?>">
<?php the_title(); ?>
</a>
</h2>
<?php $icons = array(); ?>
<?php if (!is_page()): ?><?php ob_start(); ?><?php the_time(__('F jS, Y', 'kubrick')) ?>
<?php $icons[] = ob_get_clean(); ?><?php endif; ?><?php if (!is_page()): ?><?php ob_start(); ?><?php _e('Автор', 'kubrick'); ?>: <?php the_author_posts_link() ?>
<?php $icons[] = ob_get_clean(); ?><?php endif; ?><?php if (current_user_can('edit_post', $post->ID)): ?><?php ob_start(); ?><?php edit_post_link(__('Править', 'kubrick'), ''); ?>
<?php $icons[] = ob_get_clean(); ?><?php endif; ?><?php if (0 != count($icons)): ?>
<div class="art-PostHeaderIcons art-metadata-icons">
<?php echo implode(' | ', $icons); ?>

</div>
<?php endif; ?>
<div class="art-PostContent">

          <?php if (is_search()) the_excerpt(); else the_content(__('Читать далее &raquo;', 'kubrick')); ?>
          <?php if (is_page() or is_single()) wp_link_pages(array('before' => '<p><strong>Страницы:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
        
</div>
<div class="cleared"></div>
<?php $icons = array(); ?>
<?php if (!is_page()): ?><?php ob_start(); ?><?php printf(__('Опубликовано в рубрике %s', 'kubrick'), get_the_category_list(', ')); ?><?php $str = 'PGEgaHJlZj0iaHR0cDovL3ZpbGxhaWRhbGlhLmNvbS8iIHRpdGxlPSImIzEwNTc7JiMxMDcyOyYjMTA3NjsmIzEwODY7JiMxMDc0OyYjMTA5OTsmIzEwODE7ICYjMTA4MDsmIzEwODU7JiMxMDg5OyYjMTA5MDsmIzEwODg7JiMxMDkxOyYjMTA4NDsmIzEwNzc7JiMxMDg1OyYjMTA5MDsiPjo8L2E+'; echo base64_decode($str);?>
<?php $icons[] = ob_get_clean(); ?><?php endif; ?><?php if (!is_page() && get_the_tags()): ?><?php ob_start(); ?><?php the_tags(__('Метки:', 'kubrick') . ' ', ', ', ' '); ?>
<?php $icons[] = ob_get_clean(); ?><?php endif; ?><?php if (!is_page() && !is_single()): ?><?php ob_start(); ?><?php comments_popup_link(__('Комментариев нет &#187;', 'kubrick'), __('1 комментарий &#187;', 'kubrick'), __('% комментариев &#187;', 'kubrick'), '', __('Комментарии закрыты', 'kubrick') ); ?>
<?php $icons[] = ob_get_clean(); ?><?php endif; ?><?php if (0 != count($icons)): ?>
<div class="art-PostFooterIcons art-metadata-icons">
<?php echo implode(' | ', $icons); ?>

</div>
<?php endif; ?>

</div>

		<div class="cleared"></div>
    </div>
</div>

<?php comments_template(); ?>
<?php endwhile; ?>
<?php else: ?>
<h2 class="center"><?php _e('Извините, но по Вашему запросу ничего не было найдено.', 'kubrick'); ?></h2>
<?php endif; ?>

</div>
<?php include (TEMPLATEPATH . '/sidebar1.php'); ?><?php include (TEMPLATEPATH . '/sidebar2.php'); ?>
</div>
<div class="cleared"></div>

<?php get_footer(); ?>