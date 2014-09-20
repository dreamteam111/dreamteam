<?php get_header(); ?>
<div class="art-contentLayout">
<div class="art-content">

<div class="art-Block">
    <div class="art-Block-body">

<div class="art-BlockHeader">
    <div class="l"></div>
    <div class="r"></div>
    <div class="art-header-tag-icon">
        <div class="t"><?php _e('Ссылки:', 'kubrick'); ?></div>
    </div>
</div>
<div class="art-BlockContent">
    <div class="art-BlockContent-body">

<ul>
<?php get_links_list(); ?>
</ul>

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