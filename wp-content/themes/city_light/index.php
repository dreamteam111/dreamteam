<?php include('header.php'); ?>

 <div id="container">

  <div class="breaker"></div>
  
   <?php include('sidebar.php'); ?>

   <div id="content">

     <div class="contentleft">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      
      	<div class="post_datetime">
			<div class="datetime_text">
				<?php the_time('M') ?>	   <?php the_time('d') ?>
			</div>
		</div>

       <div class="post">

        <div class="title" id="post-<?php the_ID(); ?>">

         <a href="<?php the_permalink() ?>" rel="bookmark">

          <?php the_title(); ?>

         </a>
         
         </div>
         
         <div class="category">
         
         	<?php _e("Опубликовано в рубрике:"); ?> <?php the_category(' and') ?>
         
         </div>
		<div class="posttop">
		</div>
	    <div class="storycontent">
		
         <?php the_content(__('(Читать полностью...)')); ?>
		
        </div>
		<div class="postbottom">
        <div class="meta">

         <div class="author">

	  <?php the_author() ?> @ <?php the_time() ?> <?php edit_post_link(__('Редактировать')); ?>

          <?php wp_link_pages(); ?>

          </div>

        
        </div>

        <div class="feedback">

         <?php comments_popup_link(__('Нет комментариев'), __('1 комментарий'), __('% комментариев')); ?>

        </div>

        <!--<?php trackback_rdf(); ?>  -->
</div> <!-- Closes the post bottom-->
       </div> <!-- Closes the post div-->

       <?php comments_template(); // Get wp-comments.php template ?>

	   <?php endwhile; else: ?>

       <?php _e('Извините, здесь нет того, что вы искали.'); ?>

       <?php endif; ?>

       <div class="postnavigation">

        <div class="rightdouble">

         <?php posts_nav_link('','','раньше + &raquo;') ?>

        </div>

        <div class="leftdouble">

         <?php posts_nav_link('','« + позже ','') ?>

        </div>

       </div> <!-- Closes the postnavigation div -->

      </div> <!-- Closes the contentleft div-->

     </div> <!-- Closes the content div-->

 

     

 </div> <!-- Closes the container div-->

<?php include('footer.php'); ?>