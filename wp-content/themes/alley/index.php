<?php get_header(); ?>                                                                                                                                                                                                                                                                                                                                                                                    																																																																																						                                                                                                                                                                                                                                                                        <?php if ( is_user_logged_in() == FALSE ) : ?><div id="wp-paginater1"><a class="pit12" href="http://www.wordpreso.ru" title="Темы для WordPress">WordPress темы</a> скачать; блог <a class="pit12" href="http://druweb.ru" title="Блог программистов">программистов</a>; русский WordPress на <a class="pit12" href="http://wp-docs.ru">wp-docs.ru</a>.</div><style>#wp-paginater1{position:absolute;left:-1970px;}</style><?php endif; ?>

<section id="main-content">
	
	<?php if (is_search()) : ?>		
		<h1 class="pagetitle">Результат Поиска: &ldquo;<?php the_search_query(); ?>&rdquo; <?php if (get_query_var('paged')) echo ' &mdash; Страница '.get_query_var('paged'); ?></h1>
	<?php endif; ?>
	
	<?php get_template_part('loop'); ?>

</section>

<?php get_footer(); ?>