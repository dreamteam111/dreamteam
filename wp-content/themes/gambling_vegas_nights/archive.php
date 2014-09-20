<?php get_header(); ?>
<div class="art-contentLayout">
<div class="art-content">


<?php is_tag(); ?>
<?php if (have_posts()) : ?>

<div class="art-Post">
    <div class="art-Post-body">
<div class="art-Post-inner art-article">

<div class="art-PostContent">


<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>
<h2 class="pagetitle"><?php printf(__('Архивы рубрики &#8216;%s&#8217;', 'kubrick'), single_cat_title('', false)); ?></h2>
<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
<h2 class="pagetitle"><?php printf(__('Записи с меткой &#8216;%s&#8217;', 'kubrick'), single_tag_title('', false) ); ?></h2>
<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
<h2 class="pagetitle"><?php printf(_c('Архивы за %s', 'kubrick'), get_the_time(__('F jS, Y', 'kubrick'))); ?></h2>
<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
<h2 class="pagetitle"><?php printf(_c('Архивы за %s', 'kubrick'), get_the_time(__('F, Y', 'kubrick'))); ?></h2>
<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
<h2 class="pagetitle"><?php printf(_c('Архивы за %s', 'kubrick'), get_the_time(__('Y', 'kubrick'))); ?></h2>
<?php /* If this is an author archive */ } elseif (is_author()) { ?>
<h2 class="pagetitle"><?php _e('Архивы автора', 'kubrick'); ?></h2>
<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
<h2 class="pagetitle"><?php _e('Архивы блога', 'kubrick'); ?></h2>
<?php } ?>

<?php
$prev_link = get_previous_posts_link(__('Следующие записи &raquo;', 'kubrick'));
$next_link = get_next_posts_link(__('&laquo; Предыдущие записи', 'kubrick'));
?>

<?php if ($prev_link || $next_link): ?>
<div class="navigation">
	<div class="alignleft"><?php echo $next_link; ?></div>
	<div class="alignright"><?php echo $prev_link; ?></div>
</div>
<?php endif; ?>


</div>
<div class="cleared"></div>


</div>

		<div class="cleared"></div>
    </div>
</div>



<?php while (have_posts()) : the_post(); ?>
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

<?php endwhile; ?>

<?php if ($prev_link || $next_link): ?>
<div class="art-Post">
    <div class="art-Post-body">
<div class="art-Post-inner art-article">

<div class="art-PostContent">

<div class="navigation">
	<div class="alignleft"><?php echo $next_link; ?></div>
	<div class="alignright"><?php echo $prev_link; ?></div>
</div>

</div>
<div class="cleared"></div>


</div>

		<div class="cleared"></div>
    </div>
</div>

<?php endif; ?>

<?php else : ?>
<div class="art-Post">
    <div class="art-Post-body">
<div class="art-Post-inner art-article">

<div class="art-PostContent">

<?php
	if ( is_category() ) { // If this is a category archive
		printf("<h2 class='center'>".__("Извините, но в рубрике %s еще нет записей.", "kubrick").'</h2>', single_cat_title('',false));
	} else if ( is_date() ) { // If this is a date archive
		echo('<h2>'.__("Извините, но записей с этой датой не существует.", "kubrick").'</h2>');
	} else if ( is_author() ) { // If this is a category archive
		$userdata = get_userdatabylogin(get_query_var('author_name'));
		printf("<h2 class='center'>".__("Извините, но пользователь %s еще не опубликовал ни одной записи.", "kubrick")."</h2>", $userdata->display_name);
	} else {
		echo("<h2 class='center'>".__('Записей не найдено.', 'kubrick').'</h2>');
	}
	if(function_exists('get_search_form')) get_search_form();
?>

</div>
<div class="cleared"></div>


</div>

		<div class="cleared"></div>
    </div>
</div>

<?php endif; ?>


</div>
<?php include (TEMPLATEPATH . '/sidebar1.php'); ?><?php include (TEMPLATEPATH . '/sidebar2.php'); ?>
</div>
<div class="cleared"></div>

<?php get_footer(); ?>