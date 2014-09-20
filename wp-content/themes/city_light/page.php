<?php include "header.php"; ?> 
  <div id="container">
  <?php include "sidebar.php"; ?>

   <div id="content">
     <div class="contentleft">   
      <div class="postpage">    
       <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
     <?php endwhile; endif; ?>
   </div>
  </div>
  </div>
 </div>
<?php include('footer.php'); ?>