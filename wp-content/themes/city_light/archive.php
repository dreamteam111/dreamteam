<?php include "header.php"; ?>

 <div id="container">

  <div class="breaker"></div>
  
  <?php include('sidebar.php'); ?>

  <div id="content">

   <div class="contentleft">

   <div class="clearer"></div>

    <div class="post">

     <?php if (have_posts()) : ?>

      <h2 class="searchresult">

	<?php the_time('F Y'); ?>

      </h2>

     <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

     <div class="searchdetails">

      Архив <?php the_time('F Y'); ?>

     </div>

     <?php while (have_posts()) : the_post(); ?>

      <h2 class="searchresult">

       <a href="<?php the_permalink() ?>" rel="bookmark" title=" <?php the_title(); ?>">

        <?php the_title(); ?>

       </a>

      </h2>

      <div class="clearer"> </div>

       <?php the_excerpt() ?>

      <div class="searchinfo">

       <a href="<?php the_permalink() ?>" rel="bookmark" title="

         <?php the_title(); ?>">(Read the rest of the post.)</a>

      </div>

        <div class="metasearch">

         <?php _e("Опубликовано в рубрике:"); ?> <?php the_category(' and') ?> от <?php the_author() ?> - <?php the_time('j F Y') ?>, <?php comments_popup_link(__('Нет комментариев'), __('1 комментарий'), __('% комментариев')); ?>

        </div>

     <?php endwhile; ?>

    <?php else : ?>

     Не найдено

    <?php endif; ?>

   </div> <!-- Closes the post div-->

   <div class="postnavigation">

    <div class="rightdouble">

     <?php posts_nav_link('','','раньше + »') ?>

    </div>

    <div class="leftdouble">

     <?php posts_nav_link('','« + позже ','') ?>

    </div>

   </div> <!-- Closes the postnavigation div -->

   </div> <!-- Closes the contentleft div-->

   </div> <!-- Closes the content div-->

   
 </div> <!-- Closes the container div-->

<?php include('footer.php'); ?>