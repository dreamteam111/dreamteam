<?php get_header(); ?>

<section id="main-content">

	<?php if ( is_category() ) : ?>
	<h1 class="archive-title"><?php single_cat_title(); ?></h1>
	<?php elseif( is_tag() ) : ?>
	<h1 class="archive-title">Посты с тегами &ldquo;<?php single_tag_title(); ?>&rdquo;</h1>
	<?php elseif (is_day()) : ?>
	<h1 class="archive-title">Архив <?php the_time('j F Y'); ?></h1>
	<?php elseif (is_month()) : ?>
	<h1 class="archive-title">Архив <?php the_time('F, Y'); ?></h1>
	<?php elseif (is_year()) : ?>
	<h1 class="archive-title">Архив <?php the_time('Y'); ?></h1>
	<?php elseif (is_author()) : ?>
	<h1 class="archive-title">Автор архива</h1>
	<?php elseif (isset($_GET['paged']) && !empty($_GET['paged'])) : ?>
	<h1 class="archive-title">Архив блога</h1>
	<?php endif; ?>

	<?php get_template_part('loop'); ?>

</section>

<?php get_footer(); ?>