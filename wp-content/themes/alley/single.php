<?php get_header(); ?>

<section id="main-content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<header>
			<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<p><time datetime="<?php the_time('Y-m-d')?>">Написано <?php the_time('j F Y') ?></time> <span class="author">от <?php the_author() ?></span>. <?php if ( comments_open() ) : ?><a class="comment" href="<?php the_permalink(); ?>#comments"><?php comments_number('Нет комментариев', '1 Комменатрий', '% Комментариев'); ?></a><?php endif; ?></p>
		</header>
		
		<?php the_content(''); ?>
		
		<footer>
			<span class="category">Опубликовано в <?php if (function_exists('parentless_categories')) parentless_categories(','); else the_category( ', ', 'multiple' ); ?></span>
			<?php the_tags('<span class="tags">Теги: ', ', ', '</span>'); ?>
		</footer>
	</article>
	
	<?php comments_template(); ?>
	
<?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>