<?php get_header(); ?>
<div class="art-contentLayout">
<div class="art-content">

<div class="art-Block">
    <div class="art-Block-body">

<div class="art-BlockContent">
    <div class="art-BlockContent-body">

<h2><?php _e('Архивы за месяц:', 'kubrick'); ?></h2>
<ul><?php wp_get_archives('type=monthly'); ?></ul>
<h2><?php _e('Архивы по рубрикам:', 'kubrick'); ?></h2>
<ul><?php wp_list_categories(); ?></ul>

		<div class="cleared"></div>
    </div>
</div>


		<div class="cleared"></div>
    </div>
</div>


</div>
<?php include (TEMPLATEPATH . '/sidebar1.php'); ?><?php include (TEMPLATEPATH . '/sidebar2.php'); ?>
</div>
<div class="cleared"></div>

<?php get_footer(); ?>