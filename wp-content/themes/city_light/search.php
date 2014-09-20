<?php include "header.php"; ?>
 <div id="container">
  <div class="breaker"></div>
  <?php include "sidebar.php"; ?>
  <div id="content">
   <div class="contentleft">
   <div class="postresult">
    <?php if (have_posts()) : ?>
     <h2 class="searchresult">Результаты поиска</h2>
     <div class="searchdetails"> Результат поиска для "<?php echo ""."$s"; ?>"
 </div>
      <?php while (have_posts()) : the_post(); ?>
       <h2 class="searchresult">
        <a href="<?php the_permalink() ?>" rel="bookmark" title=" <?php the_title(); ?>">
         <?php the_title(); ?>
        </a>
       </h2>
       <div class="searchinfo"><?php _e("("); ?> <?php the_category(' and') ?> <?php _e(")"); ?></div>
       <div class="clearer"> </div>
       <?php the_excerpt() ?>
       <div class="searchinfo">
	    <a href="<?php the_permalink() ?>" rel="bookmark" title=" <?php the_title(); ?>">(Ссылка на результаты поиска)	    </a>
	   </div>
      <?php endwhile; ?>
     <?php else : ?>
      <b>Нет того, что вы искали !</b>
    <?php endif; ?>
   </div> <!-- closes post div -->
   <div class="postnavigation">
    <div class="rightdouble">
     <?php posts_nav_link('','','раньше + »') ?>
    </div>
    <div class="leftdouble">
     <?php posts_nav_link('','« + позже ','') ?>
    </div>
   </div> <!-- closes postnavigation div -->
   </div> <!-- closes contentleft div -->
  </div>  <!-- closes content div -->

   
 </div>  <!-- closes container div -->
<?php include "footer.php"; ?>