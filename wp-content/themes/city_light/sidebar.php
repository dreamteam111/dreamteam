<div id="sidebar">

 <ul>



<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>
 
  <li><h2><?php _e('Календарь'); ?></h2>

    <ul>

      <li><?php get_calendar(2); ?></li>

    </ul>

  </li>



  <li><h2><?php _e('Рубрики'); ?></h2>

    <ul>

      <?php list_cats('title_li='); ?>

    </ul>

  </li>

  <li><h2><?php _e('Архивы'); ?></h2>

    <ul>

      <?php wp_get_archives('type=monthly'); ?>

    </ul>

  </li>

  <?php get_links_list(); ?>

  <li><h2><?php _e('Mета'); ?></h2>

   <ul>

    <?php wp_register(); ?>

    <li><?php wp_loginout(); ?></li>

	<li><a href="<?php bloginfo('rss2_url'); ?>">Публикации RSS</a></li>
	
	<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Комментарии RSS</a></li>
	
	

    <?php wp_meta(); ?>

   </ul>

  </li>


					
  <li id="Search"><form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
                   <div class="txt"><input type="text" value="Искать" name="s" id="s" class="s_text" /></div>
                   <div class="btn"><input type="submit" id="searchsubmit" value="" class="searchsubmit" /></div>
                    </form></li>


 <?php endif; ?>
 </ul>
</div>

