<?php include "header.php"; ?>

 <div id="container">

  <div class="breaker"></div>
  
  <?php include('sidebar.php'); ?>

  <div id="content">

  <div class="contentleft">

   <div class="clearer">

 </div>

   <div class="post">

    <?php if (have_posts()) : ?>

     <h2 class="searchresult"><?php echo single_cat_title(); ?></h2>

     <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

     <div class="searchdetails">

      Архив рубрик '<?php echo single_cat_title(); ?>'

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

        <a href="<?php the_permalink() ?>" rel="bookmark" title=" <?php the_title(); ?>">

         (Читать всю статью.)</a>

       </div>

        <div class="meta">

         <?php _e("Опубликовано в рубрике:"); ?> <?php the_category(' and') ?> от <?php the_author() ?> - <?php the_time('j. F Y') ?>, <?php comments_popup_link(__('Нет комментариев'), __('1 комментарий'), __('% комментариев')); ?>

        </div>

      <?php endwhile; ?>

     <?php else : ?>

      Не найдено

    <?php endif; ?>

   </div> <!-- This closes the singlepost div-->   

   <div class="postnavigation">

    <div class="rightdouble">

     <?php posts_nav_link('','','раньше + »') ?>

    </div>

    <div class="leftdouble">

     <?php posts_nav_link('','« + позже ','') ?>

    </div>

   </div> <!-- Closes the postnavigation div -->

   </div> <!-- Closes the contentright div -->

  </div> <!-- This closes the content div-->

  

 </div> <!-- This closes the container div-->

<?php include('footer.php'); ?>