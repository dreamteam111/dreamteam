<?php
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	exit('Please do not load this page directly.');

if (!empty($post->post_password) && $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>
	<p class="nocomments"><?php _e('Эта запись защищена паролем. Для просмотра записей введите пароль.', 'kubrick'); ?></p>
<?php else : ?>
<?php if ($comments) : ?>
<div class="art-Post">
    <div class="art-Post-body">
<div class="art-Post-inner art-article">

<div class="art-PostContent">

<h3 id="comments"><?php comments_number(__('Комментариев нет', 'kubrick'), __('1 комментарий', 'kubrick'), __('% комментариев', 'kubrick'));?> <?php printf(__('к записи &#8220;%s&#8221;', 'kubrick'), the_title('', '', false)); ?></h3>

</div>
<div class="cleared"></div>


</div>

		<div class="cleared"></div>
    </div>
</div>

<ul class="commentlist">
	<?php foreach ($comments as $comment) : ?>
		<li id="comment-<?php comment_ID() ?>">
<div class="art-Post">
          <div class="art-Post-body">
      <div class="art-Post-inner art-article">
      
<div class="art-PostContent">
      
      <?php echo get_avatar($comment, 32); ?>
			<cite><?php comment_author_link() ?></cite>:
      <?php if ($comment->comment_approved == '0') : ?>
			<em>
        <?php _e('Ваш комментарий ожидает модерации.'); ?>
      </em>
			<?php endif; ?>
			<br />
			<small class="commentmetadata"><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date(__('F jS, Y', 'kubrick')) ?> <?php comment_time() ?></a> <?php edit_comment_link(__('Править', 'kubrick'),'&nbsp;&nbsp;',''); ?></small>
      <?php comment_text() ?>

      </div>
      <div class="cleared"></div>
      

      </div>
      
      		<div class="cleared"></div>
          </div>
      </div>
      
		</li>
	<?php endforeach; ?>
	</ul>
<?php else : ?>
<?php if ('open' != $post->comment_status) : ?>
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

<h3 id="respond"><?php _e('Оставить комментарий', 'kubrick'); ?></h3>
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p><?php printf(__('Вы должны быть <a href="%s">авторизованы</a>, чтобы размещать комментарий.', 'kubrick'), get_option('siteurl') . '/wp-login.php?redirect_to=' . urlencode(get_permalink())); ?></p>
<?php else : ?>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<?php if ( $user_ID ) : ?>
<p><?php printf(__('Вы вошли как <a href="%1$s">%2$s</a>.', 'kubrick'), get_option('siteurl') . '/wp-admin/profile.php', $user_identity); ?> <a href="
    <?php if (function_exists('wp_logout_url')) echo wp_logout_url(get_permalink()); else echo get_option('siteurl') . "/wp-login.php?action=logout"; ?>" title="<?php _e('Выйти из этого аккаунта', 'kubrick'); ?>"><?php _e('Выйти &raquo;', 'kubrick'); ?></a></p>
<?php else : ?>
<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
<label for="author"><small><?php _e('Имя', 'kubrick'); ?> <?php if ($req) _e("(обязательно)", "kubrick"); ?></small></label></p>
<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
<label for="email"><small><?php _e('Mail (не будет опубликовано)', 'kubrick'); ?> <?php if ($req) _e("(обязательно)", "kubrick"); ?></small></label></p>
<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url"><small><?php _e('Вебсайт', 'kubrick'); ?></small></label></p>
<?php endif; ?>
<p><textarea name="comment" id="comment" cols="20" rows="10" tabindex="4"></textarea></p>
<p>
	<span class="art-button-wrapper">
		<span class="l"> </span>
		<span class="r"> </span>
		<input class="art-button" type="submit" name="submit" tabindex="5" value="<?php _e('Отправить', 'kubrick'); ?>"/>
	</span>
	<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>
<?php do_action('comment_form', $post->ID); ?>
</form>
<?php endif; ?>

</div>
<div class="cleared"></div>


</div>

		<div class="cleared"></div>
    </div>
</div>

<?php endif; ?>
<?php endif; ?>