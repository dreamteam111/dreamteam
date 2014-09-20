<div id="response">
 <?php if ( !empty($post->post_password) && $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>
  <p><?php _e('Gib dein Passwort ein, um die Kommentare zu sehen.'); ?></p>
 <?php return; endif; ?>
 <?php if ( comments_open() ) : ?>
  <?php if (( $comments ) and ( comments_open() )): ?>
   <h2 align="center" id="comments">
    <?php comments_number(__('1 комментарий'), __('% комментариев')); ?> for '<?php the_title(); ?>'
    <!-- <a href="#postcomment" title="<?php _e("Einen Kommentar hinterlassen"); ?>">&raquo;</a>-->
   </h2>
  <?php endif; ?>
 <?php endif; ?>

 <?php if ( $comments ) : ?>
  <ol id="commentlist">
   <?php foreach ($comments as $comment) : ?>
    <li id="comment-<?php comment_ID() ?>">
     <div class="clearer">&nbsp;</div>
      <div class="commentname">
       <span class="commentauthor">
	    <?php comment_author_link() ?>
	   </span>
      </div>
      <div class="commentinfo">
       <span class="commentdate">
        <?php comment_date() ?> |
         <a href="#comment-<?php comment_ID() ?>" title="comment link url">
          <?php comment_time() ?>
         </a>
        <?php edit_comment_link(__("Редактировать"), ' |'); ?>
       </span>
      </div>
      <div class="clearer">&nbsp;</div>
      <div class="commenttext">
       <?php comment_text() ?> 
      </div>
     </li>
    <?php endforeach; ?>
   </ol>
  <?php elseif ( comments_open() ) : // If there are no comments yet ?>

  <div id="nocomment">
   <p>
    <?php _e('Нет комментариев к этой статьи.'); ?>
   </p>
  </div>
 <?php endif; ?>
 
 <?php if ( comments_open() ) : ?>
  <h2 id="postcomment">
   <?php _e('Добавить комментарий'); ?>
  </h2>
   <form action="<?php echo get_settings('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
   <div id="commentboxes">
    <p>
     <label for="author"><?php _e('Имя'); ?></label>
     <?php if ($req) _e('(обязательно)'); ?> <br />
     <input type="text" name="author" id="author" class="textarea" value="<?php echo $comment_author; ?>" size="28" tabindex="1" />
     <input type="hidden" name="comment_post_ID" value="<?php echo $post->ID; ?>" />
     <input type="hidden" name="redirect_to" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>" />
    </p>
    <p>
     <label for="email"><?php _e('Почта'); ?></label>
     <?php if ($req) _e('(обязательно)'); ?> <br />
     <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="28" tabindex="2" />
    </p>
   
    <p>
     <label for="url"><?php _e('<acronym title="Uniform Resource Identifier">Веб-сайт</acronym>'); ?></label><br />
     <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="28" tabindex="3" />
    </p>
   </div>

 <p class="instructions"><?php _e("<b>Instruction for comments :</b><br /><br />
  You can use these tags: <br /> 
    <acronym title=\"Hypertext Markup Language\"><b>XHTML</b></acronym>:"); ?>
  <code><?php echo allowed_tags(); ?></code>
 </p>

 <div id="inputbox">
  <p class="inputbox">
   <label for="comment"><?php _e('Ваш комментарий'); ?></label>
   <br />
    
     <textarea name="comment" id="comment" cols="49" rows="4" tabindex="4"></textarea>
    <script type="text/javascript">var edCanvas = document.getElementById('комментарий');</script>
     <br />
    <?php if (function_exists('SJB_outputSmilies')) {SJB_outputSmilies();} ?>
  </p>
 </div>

 <div id="button">
  <input name="submit"  type="submit"  tabindex="5" value="<?php _e('ОК, отправить'); ?>" />
 </div>

 <p class="feeds"><?php comments_rss_link(__('<abbr title="Really Simple Syndication">RSS</abbr> лента для чтения комментариев к этой статье')); ?> |
  <?php if ( pings_open() ) : ?>
   <a href="<?php trackback_url() ?>" rel="trackback">
    <?php _e('Обратная ссылка <abbr title="Uniform Resource Identifier">URI</abbr>'); ?>
   </a>
  <?php endif; ?>
 </p>

 </form>
  <div id="commentsbottom">&nbsp;</div>
   <?php else : // Комментарии закрыты ?>
  <div id="commentsclosed">
  <p>
   <?php _e('Извините, комментарии сейчас закрыты.'); ?>
  </p>
  </div>
 <?php endif; ?>
</div> <!-- closes the response div -->