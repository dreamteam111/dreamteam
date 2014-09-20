<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
<div class="art-Post">
    <div class="art-Post-body">
<div class="art-Post-inner art-article">

<div class="art-PostContent">

<p class="nocomments"><?php _e('Эта запись защищена паролем. Для просмотра записей введите пароль.', 'kubrick'); ?></p>

</div>
<div class="cleared"></div>


</div>

		<div class="cleared"></div>
    </div>
</div>

<?php
		return;
	}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>

<div class="art-Post">
    <div class="art-Post-body">
<div class="art-Post-inner art-article">

<div class="art-PostContent">

<h3 id="comments"><?php comments_number(__('Комментариев нет', 'kubrick'), __('1 комментарий', 'kubrick'), __('% комментариев', 'kubrick'));?> <?php printf(__('к записи &#8220;%s&#8221;', 'kubrick'), the_title('', '', false)); ?></h3>

<?php
ob_start();
	previous_comments_link(__('Следующие записи &raquo;', 'kubrick'));
$prev_comment_link = ob_get_clean();

ob_start();
	next_comments_link(__('&laquo; Предыдущие записи', 'kubrick'));
$next_comment_link = ob_get_clean();
?>

<?php if ($prev_comment_link || $next_comment_link): ?>
<div class="navigation">
  <div class="alignleft">
    <?php echo $next_comment_link; ?>
  </div>
  <div class="alignright">
    <?php echo $prev_comment_link; ?>
  </div>
</div>
<?php endif; ?>

</div>
<div class="cleared"></div>


</div>

		<div class="cleared"></div>
    </div>
</div>


	<ul class="commentlist">
    <?php wp_list_comments('type=all&callback=art_comment'); ?>
  </ul>

<?php if ($prev_comment_link || $next_comment_link): ?>
<div class="art-Post">
    <div class="art-Post-body">
<div class="art-Post-inner art-article">

<div class="art-PostContent">

<div class="navigation">
  <div class="alignleft">
    <?php echo $next_comment_link; ?>
  </div>
  <div class="alignright">
    <?php echo $prev_comment_link; ?>
  </div>
</div>

</div>
<div class="cleared"></div>


</div>

		<div class="cleared"></div>
    </div>
</div>

<?php endif; ?>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
<div class="art-Post">
    <div class="art-Post-body">
<div class="art-Post-inner art-article">

<div class="art-PostContent">

<p class="nocomments"><?php _e('Комментарии закрыты.', 'kubrick'); ?></p>

</div>
<div class="cleared"></div>


</div>

		<div class="cleared"></div>
    </div>
</div>

<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>
<div class="art-Post">
    <div class="art-Post-body">
<div class="art-Post-inner art-article">

<div class="art-PostContent">

<div id="respond">
  
  <h3><?php comment_form_title( __('Оставить комментарий', 'kubrick'), __('Оставить комментарий к записи %s', 'kubrick') ); ?></h3>

<div class="cancel-comment-reply">
	<small><?php cancel_comment_reply_link(); ?></small>
</div>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p><?php printf(__('Вы должны быть <a href="%s">авторизованы</a>, чтобы разместить комментарий.', 'kubrick'), get_option('siteurl') . '/wp-login.php?redirect_to=' . urlencode(get_permalink())); ?></p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p><?php printf(__('Вы вошли как <a href="%1$s">%2$s</a>.', 'kubrick'), get_option('siteurl') . '/wp-admin/profile.php', $user_identity); ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Выйти из этого аккаунта', 'kubrick'); ?>"><?php _e('Выйти &raquo;', 'kubrick'); ?></a></p>

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="author"><small><?php _e('Имя', 'kubrick'); ?> <?php if ($req) _e("(обязательно)", "kubrick"); ?></small></label></p>

<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="email"><small><?php _e('Mail (не будет опубликовано)', 'kubrick'); ?> <?php if ($req) _e("(обязательно)", "kubrick"); ?></small></label></p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url"><small><?php _e('Вебсайт', 'kubrick'); ?></small></label></p>

<?php endif; ?>

<!--<p><small><?php printf(__('<strong>XHTML:</strong> Вы можете использовать следующие теги: <code>%s</code>', 'kubrick'), allowed_tags()); ?></small></p>-->

<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>

<p>
	<span class="art-button-wrapper">
		<span class="l"> </span>
		<span class="r"> </span>
		<input class="art-button" type="submit" name="submit" tabindex="5" value="<?php _e('Отправить', 'kubrick'); ?>"/>
	</span>
<?php comment_id_fields(); ?>
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>
</div>

</div>
<div class="cleared"></div>


</div>

		<div class="cleared"></div>
    </div>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>
