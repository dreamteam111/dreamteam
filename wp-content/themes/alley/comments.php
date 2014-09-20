
<div id="comments">

	<?php if ( post_password_required() ) : ?>
			<p class="nopassword">Это сообщение защищено паролем. Введите пароль для просмотра комментариев.</p></div><!-- #comments -->
	<?php return; endif; ?>

	<?php if ( have_comments() ) : ?>
	
		<h3 id="comments-title"><?php
			printf( _n( 'Один ответ на %2$s', 'Ответов: %1$s на %2$s', get_comments_number() ),
			number_format_i18n( get_comments_number() ), get_the_title() );
		?></h3>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<div class="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Предыдущие комментарии' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Следующие комментарии <span class="meta-nav">&rarr;</span>' ) ); ?></div>
			</div>
		<?php endif; ?>

		<ol class="comment-list">
			<?php wp_list_comments( array( 'callback' => 'theme_comments' ) ); ?>
		</ol>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<div class="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Предыдущие комментарии' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Следующие комментарии <span class="meta-nav">&rarr;</span>' ) ); ?></div>
			</div>
		<?php endif; ?>

		<?php else : 
			if ( ! comments_open() && have_comments() ) :
		?>
		<p class="nocomments"><?php _e( 'Комментарии закрыты.' ); ?></p>
		<?php endif; ?>

	<?php endif; ?>

<?php comment_form(); ?>

</div>
